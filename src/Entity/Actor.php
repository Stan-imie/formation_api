<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActorRepository")
 */
class Actor
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
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\films")
     */
    private $film_id;

    public function __construct()
    {
        $this->film_id = new ArrayCollection();
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return Collection|films[]
     */
    public function getFilmId(): Collection
    {
        return $this->film_id;
    }

    public function addFilmId(films $filmId): self
    {
        if (!$this->film_id->contains($filmId)) {
            $this->film_id[] = $filmId;
        }

        return $this;
    }

    public function removeFilmId(films $filmId): self
    {
        if ($this->film_id->contains($filmId)) {
            $this->film_id->removeElement($filmId);
        }

        return $this;
    }


}
