<?php

namespace GR\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GR\AdminBundle\Entity\Day;

/**
 * TownService
 *
 * @ORM\Table(name="town_service")
 * @ORM\Entity(repositoryClass="GR\AdminBundle\Repository\TownServiceRepository")
 */
class TownService
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=255, unique=true)
     */
    private $imgUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="person_in_charge", type="string", length=255, nullable=true)
     */
    private $personInCharge;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @ORM\OneToOne(targetEntity="GR\AdminBundle\Entity\Day", cascade={"persist"})
     * @ORM\JoinTable(name="day")
     */
    private $monday;

    /**
     * @ORM\OneToOne(targetEntity="GR\AdminBundle\Entity\Day", cascade={"persist"})
     * @ORM\JoinTable(name="day")
     */
    private $tuesday;

    /**
     * @ORM\OneToOne(targetEntity="GR\AdminBundle\Entity\Day", cascade={"persist"})
     * @ORM\JoinTable(name="day")
     */
    private $wednesday;

    /**
     * @ORM\OneToOne(targetEntity="GR\AdminBundle\Entity\Day", cascade={"persist"})
     * @ORM\JoinTable(name="day")
     */
    private $thursday;

    /**
     * @ORM\OneToOne(targetEntity="GR\AdminBundle\Entity\Day", cascade={"persist"})
     * @ORM\JoinTable(name="day")
     */
    private $friday;


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
     * Set name
     *
     * @param string $name
     *
     * @return TownService
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     *
     * @return TownService
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * Set personInCharge
     *
     * @param string $personInCharge
     *
     * @return TownService
     */
    public function setPersonInCharge($personInCharge)
    {
        $this->personInCharge = $personInCharge;

        return $this;
    }

    /**
     * Get personInCharge
     *
     * @return string
     */
    public function getPersonInCharge()
    {
        return $this->personInCharge;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return TownService
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TownService
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return TownService
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set monday
     *
     * @param Day $monday
     *
     * @return Day
     */
    public function setMonday($monday)
    {
        $this->monday = $monday;

        return $this;
    }

    /**
     * Get monday
     *
     * @return Day
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Set tuesay
     *
     * @param Day $tuesday
     *
     * @return Day
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    /**
     * Get tuesday
     *
     * @return Day
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Set wednesday
     *
     * @param Day $wednesday
     *
     * @return Day
     */
    public function setWednesday($wednesday)
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    /**
     * Get wednesday
     *
     * @return Day
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * Set thursday
     *
     * @param Day $thursday
     *
     * @return Day
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;

        return $this;
    }

    /**
     * Get thursday
     *
     * @return Day
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Set friday
     *
     * @param Day $friday
     *
     * @return Day
     */
    public function setFriday($friday)
    {
        $this->friday = $friday;

        return $this;
    }

    /**
     * Get friday
     *
     * @return Day
     */
    public function getFriday()
    {
        return $this->friday;
    }

}