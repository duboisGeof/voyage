<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reduction
 *
 * @ORM\Table(name="reduction")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\reductionRepository")
 */
class reduction
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
     * @var float
     *
     * @ORM\Column(name="prix_reduction", type="float")
     */
    private $prixReduction;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reduction", type="string", length=255)
     */
    private $descriptionReduction;


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
     * Set prixReduction
     *
     * @param float $prixReduction
     *
     * @return reduction
     */
    public function setPrixReduction($prixReduction)
    {
        $this->prixReduction = $prixReduction;

        return $this;
    }

    /**
     * Get prixReduction
     *
     * @return float
     */
    public function getPrixReduction()
    {
        return $this->prixReduction;
    }

    /**
     * Set descriptionReduction
     *
     * @param string $descriptionReduction
     *
     * @return reduction
     */
    public function setDescriptionReduction($descriptionReduction)
    {
        $this->descriptionReduction = $descriptionReduction;

        return $this;
    }

    /**
     * Get descriptionReduction
     *
     * @return string
     */
    public function getDescriptionReduction()
    {
        return $this->descriptionReduction;
    }
}

