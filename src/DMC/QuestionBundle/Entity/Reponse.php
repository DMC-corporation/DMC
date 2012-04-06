<?php

namespace DMC\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMC\QuestionBundle\Entity\Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DMC\QuestionBundle\Entity\ReponseRepository")
 */
class Reponse
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $libelle_masculin
     *
     * @ORM\Column(name="libelle_masculin", type="string", length=255)
     */
    private $libelle_masculin;

    /**
     * @var string $libelle_feminin
     *
     * @ORM\Column(name="libelle_feminin", type="string", length=255)
     */
    private $libelle_feminin;

    /**
     * @var integer $type
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var datetime $creation_date
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creation_date;

    /**
     * @var datetime $update_date
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle_masculin
     *
     * @param string $libelleMasculin
     */
    public function setLibelleMasculin($libelleMasculin)
    {
        $this->libelle_masculin = $libelleMasculin;
    }

    /**
     * Get libelle_masculin
     *
     * @return string 
     */
    public function getLibelleMasculin()
    {
        return $this->libelle_masculin;
    }

    /**
     * Set libelle_feminin
     *
     * @param string $libelleFeminin
     */
    public function setLibelleFeminin($libelleFeminin)
    {
        $this->libelle_feminin = $libelleFeminin;
    }

    /**
     * Get libelle_feminin
     *
     * @return string 
     */
    public function getLibelleFeminin()
    {
        return $this->libelle_feminin;
    }

    /**
     * Set type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set creation_date
     *
     * @param datetime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = $creationDate;
    }

    /**
     * Get creation_date
     *
     * @return datetime 
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set update_date
     *
     * @param datetime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;
    }

    /**
     * Get update_date
     *
     * @return datetime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }
}