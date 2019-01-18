<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categories
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\films", mappedBy="category")
     */
    private $category_movie;

    public function __construct()
    {
        $this->category_movie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|films[]
     */
    public function getCategoryMovie(): Collection
    {
        return $this->category_movie;
    }

    public function addCategoryMovie(films $categoryMovie): self
    {
        if (!$this->category_movie->contains($categoryMovie)) {
            $this->category_movie[] = $categoryMovie;
            $categoryMovie->setCategory($this);
        }

        return $this;
    }

    public function removeCategoryMovie(films $categoryMovie): self
    {
        if ($this->category_movie->contains($categoryMovie)) {
            $this->category_movie->removeElement($categoryMovie);
            // set the owning side to null (unless already changed)
            if ($categoryMovie->getCategory() === $this) {
                $categoryMovie->setCategory(null);
            }
        }

        return $this;
    }


}
