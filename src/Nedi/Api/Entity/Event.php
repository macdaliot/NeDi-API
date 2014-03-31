<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nedi\Api\LongOutputArrayAccessable;

/**
 * Events
 *
 * @Table(name="events", indexes={@Index(name="source", columns={"source"}), @Index(name="level", columns={"level"}), @Index(name="time", columns={"time"}), @Index(name="class", columns={"class"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Event implements LongOutputArrayAccessable
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @Column(name="level", type="boolean", nullable=true)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=64, nullable=true)
     */
    private $source = '';

    /**
     * @var string
     *
     * @Column(name="info", type="string", length=255, nullable=true)
     */
    private $info = '';

    /**
     * @var string
     *
     * @Column(name="class", type="string", length=4, nullable=true)
     */
    private $class = 'dev';

    /**
     * @var Device
     * @ManyToOne(targetEntity="Device", fetch="LAZY")
     * @JoinColumn(name="device", referencedColumnName="device")
     */
    private $device;


    /**
     * @return array
     */
    public function asLongOutputArray()
    {
        return array(
            'id' => $this->id,
            'level' => $this->level,
            'time' => $this->time,
            'source' => $this->source,
            'info' => $this->info,
            'class' => $this->class
        );
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
