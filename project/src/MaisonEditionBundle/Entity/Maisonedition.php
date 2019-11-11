<?php

namespace MaisonEditionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Maisonedition
 *
 * @ORM\Table(name="maisonedition")
 * @ORM\Entity
 */
class Maisonedition
{



    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @Assert\Length(min=3)
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="text", length=65535, nullable=false)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="groupeEditoriel", type="text", length=65535, nullable=false)
     */
    private $groupeeditoriel;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire", type="text", length=65535, nullable=false)
     */
    private $proprietaire;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param string $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return string
     */
    public function getGroupeeditoriel()
    {
        return $this->groupeeditoriel;
    }

    /**
     * @param string $groupeeditoriel
     */
    public function setGroupeeditoriel($groupeeditoriel)
    {
        $this->groupeeditoriel = $groupeeditoriel;
    }

    /**
     * @return string
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param string $proprietaire
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }


}

