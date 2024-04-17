<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\RecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'The name cannot be blank.')]
    private ?string $name = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The totalcalories cannot be blank.')]
    private ?int $totalCalories = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The totalProtein cannot be blank.')]
    private ?int $totalProtein = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The totalCarbs cannot be blank.')]
    private ?int $totalCarbs = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The totalFat cannot be blank.')]
    private ?int $totalFat = null;

    #[ORM\ManyToMany(targetEntity: Food::class, inversedBy: 'recipes')]
    private Collection $foods;

    public function __construct()
    {
        $this->foods = new ArrayCollection();
    }

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

    public function getTotalCalories(): ?int
    {
        return $this->totalCalories;
    }

    public function setTotalCalories(int $totalCalories): static
    {
        $this->totalCalories = $totalCalories;

        return $this;
    }

    public function getTotalProtein(): ?int
    {
        return $this->totalProtein;
    }

    public function setTotalProtein(int $totalProtein): static
    {
        $this->totalProtein = $totalProtein;

        return $this;
    }

    public function getTotalCarbs(): ?int
    {
        return $this->totalCarbs;
    }

    public function setTotalCarbs(int $totalCarbs): static
    {
        $this->totalCarbs = $totalCarbs;

        return $this;
    }

    public function getTotalFat(): ?int
    {
        return $this->totalFat;
    }

    public function setTotalFat(int $totalFat): static
    {
        $this->totalFat = $totalFat;

        return $this;
    }

    /**
     * @return Collection<int, Food>
     */
    public function getFoods(): Collection
    {
        return $this->foods;
    }

    public function addFood(Food $food): static
    {
        if (!$this->foods->contains($food)) {
            $this->foods->add($food);
        }

        return $this;
    }

    public function removeFood(Food $food): static
    {
        $this->foods->removeElement($food);

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
