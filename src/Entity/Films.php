<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmsRepository")
 */
class Films
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
     * @ORM\Column(type="string", length=11)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $poster;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $synopsis;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\actor", inversedBy="film_id")
     */
    private $actorId_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="category_movie")
     */
    private $category;

    public function __construct()
    {
        $this->actor_id = new ArrayCollection();
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

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * @return Collection|actor[]
     */
    public function getAutorId(): Collection
    {
        return $this->actor_id;
    }

    public function addAutorId(actor $actorId): self
    {
        if (!$this->actor_id->contains($actorId)) {
            $this->actor_id[] = $actorId;
        }

        return $this;
    }

    public function removeAutorId(actor $actorId): self
    {
        if ($this->actor_id->contains($actorId)) {
            $this->actor_id->removeElement($actorId);
        }

        return $this;
    }

    public function getCategory(): ?Categories
    {
        return $this->category;
    }

    public function setCategory(?Categories $category): self
    {
        $this->category = $category;

        return $this;
    }
}
