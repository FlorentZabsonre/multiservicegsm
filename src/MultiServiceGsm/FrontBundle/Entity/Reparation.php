<?php

namespace MultiServiceGsm\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparation
 *
 * @ORM\Table(name="reparation")
 * @ORM\Entity(repositoryClass="MultiServiceGsm\FrontBundle\Repository\ReparationRepository")
 */
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
    *@ORM\Entity
    *@UniqueEntity(fields="nomReparation",message="Une réparation existe déjà avec ce nom.")
    */
class Reparation
{
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
     * @ORM\Column(name="nomReparation", type="string", length=255)
     */
    private $nomReparation;

    

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
     * Set nomR
     *
     * @param string $nomR
     *
     * @return Reparation
     */
    public function setNomR($nomR)
    {
        $this->nomR = $nomR;

        return $this;
    }

    /**
     * Get nomR
     *
     * @return string
     */
    public function getNomR()
    {
        return $this->nomR;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Reparation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nomReparation
     *
     * @param string $nomReparation
     *
     * @return Reparation
     */
    public function setNomReparation($nomReparation)
    {
        $this->nomReparation = $nomReparation;

        return $this;
    }

    /**
     * Get nomReparation
     *
     * @return string
     */
    public function getNomReparation()
    {
        return $this->nomReparation;
    }

    /**
     * Set prixReparation
     *
     * @param float $prixReparation
     *
     * @return Reparation
     */
    public function setPrixReparation($prixReparation)
    {
        $this->prixReparation = $prixReparation;

        return $this;
    }

    /**
     * Get prixReparation
     *
     * @return float
     */
    public function getPrixReparation()
    {
        return $this->prixReparation;
    }
}