<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stolen
 *
 * @Table(name="stolen", indexes={@Index(name="device", columns={"device"})})
 * @Entity
 */
class Stolen
{
    /**
     * @var string
     *
     * @Column(name="mac", type="string", length=12, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $mac;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=64, nullable=true)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @Column(name="stlip", type="integer", nullable=true)
     */
    private $stlip = '0';

    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=true)
     */
    private $device = '';

    /**
     * @var string
     *
     * @Column(name="ifname", type="string", length=32, nullable=true)
     */
    private $ifname = '';

    /**
     * @var string
     *
     * @Column(name="usrname", type="string", length=32, nullable=true)
     */
    private $usrname = '';

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';

    /**
     * @var string
     *
     * @Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment = '';


}
