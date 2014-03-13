<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nodetrack
 *
 * @Table(name="nodetrack", indexes={@Index(name="device", columns={"device"}), @Index(name="ifname", columns={"ifname"})})
 * @Entity
 */
class Nodetrack
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
     * @Column(name="value", type="string", length=64, nullable=true)
     */
    private $value = '';

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=8, nullable=true)
     */
    private $source = '';

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


}
