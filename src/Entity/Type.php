<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeRepository")
 */
class Type
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
    private $nameType;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Operations", mappedBy="type")
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

    public function getNameType(): ?string
    {
        return $this->nameType;
    }

    public function setNameType(string $nameType): self
    {
        $this->nameType = $nameType;

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
            $operation->setType($this);
        }

        return $this;
    }

    public function removeOperation(Operations $operation): self
    {
        if ($this->operation->contains($operation)) {
            $this->operation->removeElement($operation);
            // set the owning side to null (unless already changed)
            if ($operation->getType() === $this) {
                $operation->setType(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nameType;
    }
}
