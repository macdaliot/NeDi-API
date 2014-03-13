<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidents
 *
 * @Table(name="incidents", indexes={@Index(name="name", columns={"name"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Incidents
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
     * @var string
     *
     * @Column(name="name", type="string", length=64, nullable=true)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @Column(name="deps", type="integer", nullable=true)
     */
    private $deps = '0';

    /**
     * @var integer
     *
     * @Column(name="startinc", type="integer", nullable=true)
     */
    private $startinc = '0';

    /**
     * @var integer
     *
     * @Column(name="endinc", type="integer", nullable=true)
     */
    private $endinc = '0';

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
     * @var boolean
     *
     * @Column(name="grp", type="boolean", nullable=true)
     */
    private $grp = '0';

    /**
     * @var string
     *
     * @Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment = '';

    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=true)
     */
    private $device = '';


}
