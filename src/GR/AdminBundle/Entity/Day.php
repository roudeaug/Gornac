<?php

namespace GR\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 *
 * @ORM\Table(name="day")
 * @ORM\Entity(repositoryClass="GR\AdminBundle\Repository\DayRepository")
 */
class Day
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
     * @var \DateTime
     *
     * @ORM\Column(name="am_start", type="time", nullable=true)
     */
    private $am_start;

        /**
     * @var \DateTime
     *
     * @ORM\Column(name="am_deb", type="time", nullable=true)
     */
    private $am_end;

    /**
     * @var bool
     *
     * @ORM\Column(name="am_isClosed", type="boolean")
     */
    private $amIsClosed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pm_start", type="time", nullable=true)
     */
    private $pm_start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pm_end", type="time", nullable=true)
     */
    private $pm_end;

    /**
     * @var bool
     *
     * @ORM\Column(name="pm_isClosed", type="boolean")
     */
    private $pmIsClosed;


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
     * @return Day
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
     * Set am_start
     *
     * @param \DateTime $am_start
     *
     * @return Day
     */
    public function setAmStart($am_start)
    {
        $this->am_start = $am_start;

        return $this;
    }

    /**
     * Get am_start
     *
     * @return \DateTime
     */
    public function getAmStart()
    {
        return $this->am_start;
    }

    /**
     * Set am_end
     *
     * @param \DateTime $am_end
     *
     * @return Day
     */
    public function setAmEnd($am_end)
    {
        $this->am_end = $am_end;

        return $this;
    }

    /**
     * Get am_end
     *
     * @return \DateTime
     */
    public function getAmEnd()
    {
        return $this->am_end;
    }

    /**
     * Set amIsClosed
     *
     * @param boolean $amIsClosed
     *
     * @return Day
     */
    public function setAmIsClosed($amIsClosed)
    {
        $this->amIsClosed = $amIsClosed;

        return $this;
    }

    /**
     * Get amIsClosed
     *
     * @return bool
     */
    public function getAmIsClosed()
    {
        return $this->amIsClosed;
    }

    /**
     * Set pm_start
     *
     * @param \DateTime $pm_start
     *
     * @return Day
     */
    public function setPmStart($pm_start)
    {
        $this->pm_start = $pm_start;

        return $this;
    }

    /**
     * Get pm_start
     *
     * @return \DateTime
     */
    public function getPmStart()
    {
        return $this->pm_start;
    }

    /**
     * Set pm_end
     *
     * @param \DateTime $pm_end
     *
     * @return Day
     */
    public function setPmEnd($pm_end)
    {
        $this->pm_end = $pm_end;

        return $this;
    }

    /**
     * Get pm_end
     *
     * @return \DateTime
     */
    public function getPmEnd()
    {
        return $this->pm_end;
    }

    /**
     * Set pmIsClosed
     *
     * @param boolean $pmIsClosed
     *
     * @return Day
     */
    public function setPmIsClosed($pmIsClosed)
    {
        $this->pmIsClosed = $pmIsClosed;

        return $this;
    }

    /**
     * Get pmIsClosed
     *
     * @return bool
     */
    public function getPmIsClosed()
    {
        return $this->pmIsClosed;
    }
}

