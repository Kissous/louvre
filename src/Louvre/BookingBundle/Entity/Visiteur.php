<?php

namespace Louvre\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur")
 * @ORM\Entity(repositoryClass="Louvre\BookingBundle\Repository\VisiteurRepository")
 */
class Visiteur
{
    /**
     * @ORM\ManyToOne(targetEntity="Billet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $billet;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateNais", type="date")
     */
    private $dateNais;

    /**
     * @var bool
     *
     * @ORM\Column(name="tarifReduit", type="boolean")
     */
    private $tarifReduit;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Visiteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Visiteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Visiteur
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set dateNais
     *
     * @param string $dateNais
     *
     * @return Visiteur
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    /**
     * Get dateNais
     *
     * @return string
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * Set tarifReduit
     *
     * @param boolean $tarifReduit
     *
     * @return Visiteur
     */
    public function setTarifReduit($tarifReduit)
    {
        $this->tarifReduit = $tarifReduit;

        return $this;
    }

    /**
     * Get tarifReduit
     *
     * @return bool
     */
    public function getTarifReduit()
    {
        return $this->tarifReduit;
    }

    /**
     * Set billet
     *
     * @param \Louvre\BookingBundle\Entity\Billet $billet
     *
     * @return Visiteur
     */
    public function setBillet(Billet $billet)
    {
        $this->billet = $billet;

        return $this;
    }

    /**
     * Get billet
     *
     * @return \Louvre\BookingBundle\Entity\Billet
     */
    public function getBillet()
    {
        return $this->billet;
    }
}
