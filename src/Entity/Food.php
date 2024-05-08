<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\FoodRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FoodRepository::class)]
class Food
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotBlank(message: 'The name cannot be blank.')]
    #[Assert\Length(
        min: 3,
        minMessage: 'The name must be at least {{ limit }} characters long.',
        max: 25,
        maxMessage: 'The name cannot be longer than {{ limit }} characters.'
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "The name should only contain letters and spaces."
    )]
    #[Assert\NotBlank(message: 'The name cannot be blank.')]

    private ?string $name = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The calories cannot be blank.')]
    private ?int $calories = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The protein cannot be blank.')]
    private ?int $protein = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The carbohydrates cannot be blank.')]
    private ?int $carbohydrates = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The fat cannot be blank.')]
    private ?int $fat = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'The serving_size cannot be blank.')]
    private ?float $serving_size = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'The serving_unit cannot be blank.')]
    private ?string $serving_unit = null;

    #[ORM\ManyToMany(targetEntity: Recipe::class, mappedBy: 'foods')]
    private Collection $recipes;

    #[ORM\Column(nullable: true)]
    private ?int $archiver = 0;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function __construct()
    {
        $this->recipes = new ArrayCollection();
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

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): static
    {
        $this->calories = $calories;

        return $this;
    }

    public function getProtein(): ?int
    {
        return $this->protein;
    }

    public function setProtein(int $protein): static
    {
        $this->protein = $protein;

        return $this;
    }

    public function getCarbohydrates(): ?int
    {
        return $this->carbohydrates;
    }

    public function setCarbohydrates(int $carbohydrates): static
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    public function getFat(): ?int
    {
        return $this->fat;
    }

    public function setFat(int $fat): static
    {
        $this->fat = $fat;

        return $this;
    }

    public function getServingSize(): ?float
    {
        return $this->serving_size;
    }

    public function setServingSize(float $serving_size): static
    {
        $this->serving_size = $serving_size;

        return $this;
    }

    public function getServingUnit(): ?string
    {
        return $this->serving_unit;
    }

    public function setServingUnit(string $serving_unit): static
    {
        $this->serving_unit = $serving_unit;

        return $this;
    }

    /**
     * @return Collection<int, Recipe>
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    public function addRecipe(Recipe $recipe): static
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes->add($recipe);
            $recipe->addFood($this);
        }

        return $this;
    }

    public function removeRecipe(Recipe $recipe): static
    {
        if ($this->recipes->removeElement($recipe)) {
            $recipe->removeFood($this);
        }

        return $this;
    }
    public function __toString(): string
    {
        return $this->name;
    }

    public function getArchiver(): ?int
    {
        return $this->archiver;
    }

    public function setArchiver(int $archiver): static
    {
        $this->archiver = $archiver;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
