<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iptrack
 *
 * @Table(name="iptrack", indexes={@Index(name="mac", columns={"mac"}), @Index(name="vlanid", columns={"vlanid"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Iptrack
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
     * @Column(name="mac", type="string", length=16, nullable=false)
     */
    private $mac;

    /**
     * @var integer
     *
     * @Column(name="ipupdate", type="integer", nullable=true)
     */
    private $ipupdate = '0';

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=64, nullable=true)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @Column(name="nodip", type="integer", nullable=true)
     */
    private $nodip = '0';

    /**
     * @var integer
     *
     * @Column(name="vlanid", type="smallint", nullable=true)
     */
    private $vlanid = '0';

    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=false)
     */
    private $device = '';


}
