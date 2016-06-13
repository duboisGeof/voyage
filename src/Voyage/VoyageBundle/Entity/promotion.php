<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\promotionRepository")
 */
class promotion
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
     * @ORM\Column(name="code_promo", type="string", length=255)
     */
    private $codePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="description_promo", type="string", length=255)
     */
    private $descriptionPromo;


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
     * Set codePromo
     *
     * @param string $codePromo
     *
     * @return promotion
     */
    public function setCodePromo($codePromo)
    {
        $this->codePromo = $codePromo;

        return $this;
    }

    /**
     * Get codePromo
     *
     * @return string
     */
    public function getCodePromo()
    {
        return $this->codePromo;
    }

    /**
     * Set descriptionPromo
     *
     * @param string $descriptionPromo
     *
     * @return promotion
     */
    public function setDescriptionPromo($descriptionPromo)
    {
        $this->descriptionPromo = $descriptionPromo;

        return $this;
    }

    /**
     * Get descriptionPromo
     *
     * @return string
     */
    public function getDescriptionPromo()
    {
        return $this->descriptionPromo;
    }
}

