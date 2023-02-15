<?php

namespace App\Entity;

use App\Repository\UtilisateurChapitreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurChapitreRepository::class)]
class UtilisateurChapitre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $utilisateur_chapitre_date_inscription = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $utilisateur_chapitre_termine = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $utilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurChapitreDateInscription(): ?\DateTimeImmutable
    {
        return $this->utilisateur_chapitre_date_inscription;
    }

    public function setUtilisateurChapitreDateInscription(\DateTimeImmutable $utilisateur_chapitre_date_inscription): self
    {
        $this->utilisateur_chapitre_date_inscription = $utilisateur_chapitre_date_inscription;

        return $this;
    }

    public function getUtilisateurChapitreTermine(): ?int
    {
        return $this->utilisateur_chapitre_termine;
    }

    public function setUtilisateurChapitreTermine(int $utilisateur_chapitre_termine): self
    {
        $this->utilisateur_chapitre_termine = $utilisateur_chapitre_termine;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
