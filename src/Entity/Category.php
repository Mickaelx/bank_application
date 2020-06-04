<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Operations", mappedBy="category")
     */
    private $Operation;

    public function __construct()
    {
        $this->Operation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Operations[]
     */
    public function getOperation(): Collection
    {
        return $this->Operation;
    }

    public function addOperation(Operations $operation): self
    {
        if (!$this->Operation->contains($operation)) {
            $this->Operation[] = $operation;
            $operation->setCategory($this);
        }

        return $this;
    }

    public function removeOperation(Operations $operation): self
    {
        if ($this->Operation->contains($operation)) {
            $this->Operation->removeElement($operation);
            // set the owning side to null (unless already changed)
            if ($operation->getCategory() === $this) {
                $operation->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }
}
