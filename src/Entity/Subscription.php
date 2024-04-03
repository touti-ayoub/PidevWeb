<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\SubscriptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionRepository::class)]
class Subscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: 'The name cannot be blank.')]
    #[Assert\Length(
        min: 2,
        minMessage: 'The name must be at least {{ limit }} characters long.',
        max: 30,
        maxMessage: 'The name cannot be longer than {{ limit }} characters.'
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "The name should only contain letters and spaces."
    )]
    private ?string $name = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank(message: 'The type cannot be blank.')]
    #[Assert\Length(
        min: 2,
        minMessage: 'The type must be at least {{ limit }} characters long.',
        max: 10,
        maxMessage: 'The type cannot be longer than {{ limit }} characters.'
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "The type should only contain letters and spaces."
    )]
    private ?string $type = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank(message: 'The price cannot be blank.')]
    #[Assert\Regex(
        pattern: "/^\d+(\.\d{1,2})?$/",
        message: "The price should be a valid number with up to two decimal places."
    )]
    private ?string $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }
}
