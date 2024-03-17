<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BilletRepository::class)]
class Billet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cletBilletsecurise = null;

    #[ORM\ManyToOne(inversedBy: 'billets')]
    private ?Competitions $Competition = null;

    #[ORM\OneToMany(targetEntity: Commandes::class, mappedBy: 'Billet')]
    private Collection $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCletBilletsecurise(): ?string
    {
        return $this->cletBilletsecurise;
    }

    public function setCletBilletsecurise(string $cletBilletsecurise): static
    {
        $this->cletBilletsecurise = $cletBilletsecurise;

        return $this;
    }

    public function getCompetition(): ?Competitions
    {
        return $this->Competition;
    }

    public function setCompetition(?Competitions $Competition): static
    {
        $this->Competition = $Competition;

        return $this;
    }

    /**
     * @return Collection<int, Commandes>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commandes $commande): static
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes->add($commande);
            $commande->setBillet($this);
        }

        return $this;
    }

    public function removeCommande(Commandes $commande): static
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getBillet() === $this) {
                $commande->setBillet(null);
            }
        }

        return $this;
    }
}
