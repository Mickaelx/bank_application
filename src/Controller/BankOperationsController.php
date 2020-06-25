<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Category;
use App\Entity\PayementMethod;
use App\Entity\PropertySearch;
use App\Entity\User;
use App\Form\CategoryFormType;
use App\Form\OperationFormType;
use App\Form\PayementMethodFormType;
use App\Form\PropertySearchType;
use App\Form\SearchForm;
use App\Repository\CategoryRepository;
use App\Repository\PayementMethodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormTypeInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Operations;
use App\Repository\OperationsRepository;
use Symfony\Flex\Unpack\Operation;


class BankOperationsController extends AbstractController
{


    /**
     * @Route("/", name="home_unlogged")
     */
    public function unloggedHome()
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home_logged');
        }
        return $this->render('bank_operations/unlogged_home.html.twig');
    }

    /**
     * @Route("/operations", name="home_logged")
     */
    public function index(OperationsRepository $repo, Request $request)
    {
        $data = new SearchData();
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);

        if (!$this->getUser()) {
            return $this->redirectToRoute('home_unlogged');
        }

        $operations = $repo->findSearch($data, $this->getUser());

        $totalSumAmount = array_reduce($operations, function ($amount, $operation) {
            $amount += $operation->getAmount();
            return round($amount, 2);
        }, 0);

        return $this->render('bank_operations/index.html.twig', [
            'operations' => $operations,
            'totalSumAmount' => $totalSumAmount,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/operation/new", name="operation_create")
     * @Route("/operation/{id}/edit", name="operation_edit")
     */

    public function form(Operations $operation = null, Request $request, EntityManagerInterface $entityManager)
    {

        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }

        if (!$operation) {
            $operation = new Operations();
        }

        $form = $this->createForm(OperationFormType::class, $operation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$operation->getId()) {
                $operation->setDate(new \Datetime());
                $user = $this->getUser();
                $operation->setUser($user);
            }

            if ($operation->getType()->getId() === 535) {
                $amount = $operation->getAmount();
                $amount = $amount * -1;
                $operation->setAmount($amount);
            }
            if ($operation->getType()->getId() === 536) {
                $amount = $operation->getAmount();
                if ($amount < 0) {
                    $amount = $amount * -1;
                    $operation->setAmount($amount);
                }
            }

            $entityManager->persist($operation);
            $entityManager->flush();
            $this->addFlash('success', 'Well done! Successfully added "' . $operation->getContent() . '" to your view.');
            return $this->redirectToRoute('home_logged');
        }

        return $this->render('bank_operations/create.html.twig', [
            'formOperation' => $form->createView(),
            'editMode' => $operation->getId() !== null
        ]);
    }

    /**
     * @Route("/operation/{id}", name="operation_show")
     */
    public function show(Operations $operation)
    {
        return $this->render('bank_operations/show.html.twig', [
            'operation' => $operation
        ]);
    }

    /**
     * @Route("/operation/{id}/delete", name="operation_delete")
     */
    public function delete(Operations $operation, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($operation);
        $entityManager->flush();
        return $this->redirectToRoute('home_logged');
    }

    /**
     * @route("/category", name="category_show")
     */

    public function showCategory(CategoryRepository $repository, Request $request)
    {
        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }
        $category = $repository->findAll();

        return $this->render("bank_operations/showCategories.html.twig", [
            'category' => $category
        ]);
    }


    /**
     * @route("/cateogry/new", name="category_add")
     * @Route("/category/{id}/edit", name="category_edit")
     */

    public function addCategory(Category $category = null, Request $request, EntityManagerInterface $entityManager)
    {

        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }

        if (!$category) {
            $category = new Category();
        }

        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'Well done! Successfully added "' . $category->getTitle() . '" to your categories');
            return $this->redirectToRoute('category_show');
        }



        return $this->render('bank_operations/category.html.twig', [
            'formCategory' => $form->createView(),
            'category' => $category,
            'editMode' => $category->getId() !== null
        ]);
    }

    /**
     * @Route("/category/{id}/delete", name="category_delete")
     */
    public function deleteCategory(Category $category, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($category);
        $entityManager->flush();
        return $this->redirectToRoute('category_show');
    }

    /**
     * @Route("/payementMethod", name="payementMethod_show")
     */

    public function showPayementMethod(PayementMethodRepository $repository, Request $request)
    {
        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }
        $payementMethod = $repository->findAll();

        return $this->render("bank_operations/showPayementMethod.html.twig", [
            'payementMethod' => $payementMethod
        ]);
    }

    /**
     * @Route("/payementMethod/new", name="payementMethod_add")
     * @Route("/payementMethod/{id}/edit", name="payementMethod_edit")
     */

    public function addPayementMethod(PayementMethod $payementMethod = null, Request $request, EntityManagerInterface $entityManager)
    {

        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }

        if (!$payementMethod) {
            $payementMethod = new PayementMethod();
        }

        $form = $this->createForm(PayementMethodFormType::class, $payementMethod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($payementMethod);
            $entityManager->flush();

            $this->addFlash('success', 'Well done! Successfully added "' . $payementMethod->getNamePayement() . '" to your categories');
            return $this->redirectToRoute('payementMethod_show');
        }

        return $this->render('bank_operations/payementMethod.html.twig', [
            'formPayementMethod' => $form->createView(),
            'payementMethod' => $payementMethod,
            'editMode' => $payementMethod->getId() !== null
        ]);
    }

    /**
     * @Route("/payementMethod/{id}/delete", name="payementMethod_delete")
     */

    public function deletePayementMethod(PayementMethod $payementMethod, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($payementMethod);
        $entityManager->flush();
        return $this->redirectToRoute('payementMethod_show');
    }

    /**
     * @Route("/statistics", name="statistics")
     */

    public function stats()
    {
        return $this->render("bank_operations/stats.html.twig");
    }

    /**
     * @route("/operationsJsonified", name="operationsJsonified")
     */

    public function operationsAPI(OperationsRepository $repo)
    {
        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $operations = $repo->findAllOperationsByUsers($this->getUser());

        $encoder = new JsonEncoder();

        $normalizer = new ObjectNormalizer($classMetadataFactory);
        $serializer = new Serializer([$normalizer], [$encoder]);
        $data = $serializer->normalize($operations, null, ['groups' => 'group1']);
        $dataSerialized = $serializer->serialize($data, 'json');
        $response = new Response($dataSerialized);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
