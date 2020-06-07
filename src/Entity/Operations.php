<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OperationsRepository")
 */
class Operations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("group1")
     * @var string A "Y-m-d H:i:s" formatted value
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     * @Assert\Type(type="float", message="You can only add numbers here")
     * @Groups("group1")
     */
    private $amount;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=1, max=255)
     * @Groups("group1")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="Operation")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("group1")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type", inversedBy="operation")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("group1")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PayementMethod", inversedBy="operation")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("group1")
     * 
     */
    private $payementMethod;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="userID")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @Groups({"group1"})
     * @return \DateTimeInterface|null
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @Groups({"group1"})
     * @param \DateTimeInterface $date
     * @return self
     */
    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPayementMethod(): ?PayementMethod
    {
        return $this->payementMethod;
    }

    public function setPayementMethod(?PayementMethod $payementMethod): self
    {
        $this->payementMethod = $payementMethod;

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }


    public function setUser(User $user): self
    {

        $this->user = $user;

        return $this;
    }
}
