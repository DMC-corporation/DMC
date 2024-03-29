<?php

namespace DMC\QuestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMC\QuestionBundle\Entity\Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DMC\QuestionBundle\Entity\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\OneToMany(targetEntity="Reponse", mappedBy="question_id", cascade={"remove", "persist"})
     */
    protected $reponses;

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
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add reponses
     *
     * @param DMC\QuestionBundle\Entity\Reponse $reponses
     */
    public function addReponse(\DMC\QuestionBundle\Entity\Reponse $reponses)
    {
        $this->reponses[] = $reponses;
    }

    /**
     * Get reponses
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    public function __toString()
    {
        return $this->getLibelleMasculin();
    }
}