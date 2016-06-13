<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * assurance
 *
 * @ORM\Table(name="assurance")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\assuranceRepository")
 */
class assurance
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
     * @ORM\Column(name="description_assurance", type="string", length=255)
     */
    private $descriptionAssurance;


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
     * Set descriptionAssurance
     *
     * @param string $descriptionAssurance
     *
     * @return assurance
     */
    public function setDescriptionAssurance($descriptionAssurance)
    {
        $this->descriptionAssurance = $descriptionAssurance;

        return $this;
    }

    /**
     * Get descriptionAssurance
     *
     * @return string
     */
    public function getDescriptionAssurance()
    {
        return $this->descriptionAssurance;
    }
}

