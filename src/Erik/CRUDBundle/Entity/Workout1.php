<?php

namespace Erik\CRUDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workout1
 *
 * @ORM\Table(name="workout1")
 * @ORM\Entity(repositoryClass="Erik\CRUDBundle\Repository\Workout1Repository")
 */
class Workout1
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
     * @ORM\Column(name="occurrenceDate", type="date")
     */
    private $occurrenceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="activity", type="string", length=255)
     */
    private $activity;

    /**
     * @var float
     *
     * @ORM\Column(name="hours", type="float")
     */
    private $hours;


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
     * Set occurrenceDate
     *
     * @param \DateTime $occurrenceDate
     *
     * @return Workout1
     */
    public function setOccurrenceDate($occurrenceDate)
    {
        $this->occurrenceDate = $occurrenceDate;

        return $this;
    }

    /**
     * Get occurrenceDate
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Set activity
     *
     * @param string $activity
     *
     * @return Workout1
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set hours
     *
     * @param float $hours
     *
     * @return Workout1
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return float
     */
    public function getHours()
    {
        return $this->hours;
    }
}

