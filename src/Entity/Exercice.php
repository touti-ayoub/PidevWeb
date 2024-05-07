<?php

namespace App\Entity;


use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @Vich\Uploadable
 */

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]
class Exercice
{
    /**
     * @Vich\UploadableField(mapping="exercice_image", fileNameProperty="IMAGE_URL")
     * @var File|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @Assert\NotBlank(message="Name cannot be blank")
     * @Assert\Length(
     *      min = 3,
     *      max = 100,
     *      minMessage = "Name must be at least {{ limit }} characters long",
     *      maxMessage = "Name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Regex(
     *     pattern="/\A[A-Z]/",
     *     message="Name must start with a capital letter"
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $NOM = null;

    /**
     * @Assert\NotBlank(message="Description cannot be blank")
     * @Assert\Length(
     *      min = 2,
     *      max = 500,
     *      minMessage = "Description must be at least {{ limit }} characters long",
     *      maxMessage = "Description cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z0-9\s]*$/",
     *     message="Description can only contain letters, numbers and spaces"
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $DESCRIPTION = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $IMAGE_URL = null;

    /**
     * @Assert\NotBlank(message="Muscle cible cannot be blank")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Muscle cible must be at least {{ limit }} characters long",
     *      maxMessage = "Muscle cible cannot be longer than {{ limit }} characters"
     * )
     */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MUSCLE_CIBLE = null;

    #[ORM\ManyToMany(targetEntity: Plan::class, inversedBy: 'exercices')]
    private Collection $Plan;

    public function __construct()
    {
        $this->Plan = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }




    public function getNOM(): ?string
    {
        return $this->NOM;
    }

    public function setNOM(string $NOM): static
    {
        $this->NOM = $NOM;

        return $this;
    }

    public function getDESCRIPTION(): ?string
    {
        return $this->DESCRIPTION;
    }

    public function setDESCRIPTION(string $DESCRIPTION): static
    {
        $this->DESCRIPTION = $DESCRIPTION;

        return $this;
    }

    public function getIMAGEURL(): ?string
    {
        return $this->IMAGE_URL;
    }

    public function setIMAGEURL(?string $IMAGE_URL): static
    {
        $this->IMAGE_URL = $IMAGE_URL;

        return $this;
    }

    public function getMUSCLECIBLE(): ?string
    {
        return $this->MUSCLE_CIBLE;
    }

    public function setMUSCLECIBLE(?string $MUSCLE_CIBLE): static
    {
        $this->MUSCLE_CIBLE = $MUSCLE_CIBLE;

        return $this;
    }

    /**
     * @return Collection<int, Plan>
     */
    public function getPlan(): Collection
    {
        return $this->Plan;
    }

    public function addPlan(Plan $plan): static
    {
        if (!$this->Plan->contains($plan)) {
            $this->Plan->add($plan);
            $plan->addExercice($this); // This line is important
        }

        return $this;
    }

    public function removePlan(Plan $plan): static
    {
        $this->Plan->removeElement($plan);

        return $this;
    }


    private $imageFile;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdAt = null;

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
    public function __toString(): string
    {
        return $this->NOM;
    }
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

}
