<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandesRepository::class)]
class Commandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column]
    private ?float $Montant_total = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?billet $Billet = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Offre $Offre = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Users $Users = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getMontantTotal(): ?float
    {
        return $this->Montant_total;
    }

    public function setMontantTotal(float $Montant_total): static
    {
        $this->Montant_total = $Montant_total;

        return $this;
    }

    public function getBillet(): ?billet
    {
        return $this->Billet;
    }

    public function setBillet(?billet $Billet): static
    {
        $this->Billet = $Billet;

        return $this;
    }

    public function getOffre(): ?Offre
    {
        return $this->Offre;
    }

    public function setOffre(?Offre $Offre): static
    {
        $this->Offre = $Offre;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->Users;
    }

    public function setUsers(?Users $Users): static
    {
        $this->Users = $Users;

        return $this;
    }
}
