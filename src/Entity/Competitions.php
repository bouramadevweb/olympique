<?php

namespace App\Entity;

use App\Repository\CompetitionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetitionsRepository::class)]
class Competitions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 70)]
    private ?string $Nom = null;

    #[ORM\ManyToOne(inversedBy: 'competitions')]
    private ?DateCompetition $DateCompetion = null;

    #[ORM\ManyToOne(inversedBy: 'competitions')]
    private ?Discipline $Discipline = null;

    #[ORM\ManyToOne(inversedBy: 'competitions')]
    private ?LieuCompetition $LieuCompetition = null;

    #[ORM\OneToMany(targetEntity: Billet::class, mappedBy: 'Competition')]
    private Collection $billets;

    public function __construct()
    {
        $this->billets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDateCompetion(): ?DateCompetition
    {
        return $this->DateCompetion;
    }

    public function setDateCompetion(?DateCompetition $DateCompetion): static
    {
        $this->DateCompetion = $DateCompetion;

        return $this;
    }

    public function getDiscipline(): ?Discipline
    {
        return $this->Discipline;
    }

    public function setDiscipline(?Discipline $Discipline): static
    {
        $this->Discipline = $Discipline;

        return $this;
    }

    public function getLieuCompetition(): ?LieuCompetition
    {
        return $this->LieuCompetition;
    }

    public function setLieuCompetition(?LieuCompetition $LieuCompetition): static
    {
        $this->LieuCompetition = $LieuCompetition;

        return $this;
    }

    /**
     * @return Collection<int, Billet>
     */
    public function getBillets(): Collection
    {
        return $this->billets;
    }

    public function addBillet(Billet $billet): static
    {
        if (!$this->billets->contains($billet)) {
            $this->billets->add($billet);
            $billet->setCompetition($this);
        }

        return $this;
    }

    public function removeBillet(Billet $billet): static
    {
        if ($this->billets->removeElement($billet)) {
            // set the owning side to null (unless already changed)
            if ($billet->getCompetition() === $this) {
                $billet->setCompetition(null);
            }
        }

        return $this;
    }
}
