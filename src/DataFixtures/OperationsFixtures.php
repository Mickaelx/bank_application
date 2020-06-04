<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\PayementMethod;
use App\Entity\Type;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Operations;

class OperationsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // créer category
        $faker = \Faker\Factory::create('fr_FR');

        $category = new Category();
        $payementMethod = new PayementMethod();
        $type = new Type();
        $user= new User();

        for($j = 1; $j <= 10; $j++) {
            $operation = new Operations();
            $operation
                ->setAmount($faker->randomFloat(2, -2000, 2000))
                ->setContent($faker->paragraph())
                ->setDate($faker->dateTimeBetween('-6 months'))
                ->setCategory($faker->numberBetween(61,70))
                ->setPayementMethod($faker->numberBetween(1026,1030))
                ->setType($faker->numberBetween(535,536))
                ->setUser($faker->numberBetween(1,2));


            $manager->persist($operation);


        }





        $manager->flush();
    }
}
