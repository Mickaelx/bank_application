<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PayementMethodRepository")
 */
class PayementMethod
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"group1"})
     */
    private $namePayement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Operations", mappedBy="payementMethod")
     */
    private $operation;

    public function __construct()
    {
        $this->operation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePayement(): ?string
    {
        return $this->namePayement;
    }

    public function setNamePayement(string $namePayement): self
    {
        $this->namePayement = $namePayement;

        return $this;
    }

    /**
     * @return Collection|Operations[]
     */
    public function getOperation(): Collection
    {
        return $this->operation;
    }

    public function addOperation(Operations $operation): self
    {
        if (!$this->operation->contains($operation)) {
            $this->operation[] = $operation;
            $operation->setPayementMethod($this);
        }

        return $this;
    }

    public function removeOperation(Operations $operation): self
    {
        if ($this->operation->contains($operation)) {
            $this->operation->removeElement($operation);
            // set the owning side to null (unless already changed)
            if ($operation->getPayementMethod() === $this) {
                $operation->setPayementMethod(null);
            }
        }

        return $this;
    }
}
