<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\imageRepository")
 */
class image
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="description_image", type="string", length=255)
     */
    private $descriptionImage;


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
     * Set url
     *
     * @param string $url
     *
     * @return image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set descriptionImage
     *
     * @param string $descriptionImage
     *
     * @return image
     */
    public function setDescriptionImage($descriptionImage)
    {
        $this->descriptionImage = $descriptionImage;

        return $this;
    }

    /**
     * Get descriptionImage
     *
     * @return string
     */
    public function getDescriptionImage()
    {
        return $this->descriptionImage;
    }
}

