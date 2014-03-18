<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @Table(name="devices", uniqueConstraints={@UniqueConstraint(name="device", columns={"device"})})
 * @Entity
 */
class Device
{
    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $device;

    /**
     * @var integer
     *
     * @Column(name="devip", type="integer", nullable=true)
     */
    private $devip = '0';

    /**
     * @var string
     *
     * @Column(name="serial", type="string", length=32, nullable=true)
     */
    private $serial = '';

    /**
     * @var string
     *
     * @Column(name="type", type="string", length=32, nullable=true)
     */
    private $type = '';

    /**
     * @var integer
     *
     * @Column(name="firstdis", type="integer", nullable=true)
     */
    private $firstdis = '0';

    /**
     * @var integer
     *
     * @Column(name="lastdis", type="integer", nullable=true)
     */
    private $lastdis = '0';

    /**
     * @var boolean
     *
     * @Column(name="services", type="boolean", nullable=true)
     */
    private $services = '0';

    /**
     * @var string
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description = '';

    /**
     * @var string
     *
     * @Column(name="devos", type="string", length=16, nullable=true)
     */
    private $devos = '';

    /**
     * @var string
     *
     * @Column(name="bootimage", type="string", length=64, nullable=true)
     */
    private $bootimage = '';

    /**
     * @var string
     *
     * @Column(name="location", type="string", length=255, nullable=true)
     */
    private $location = '';

    /**
     * @var string
     *
     * @Column(name="contact", type="string", length=255, nullable=true)
     */
    private $contact = '';

    /**
     * @var string
     *
     * @Column(name="devgroup", type="string", length=32, nullable=true)
     */
    private $devgroup = '';

    /**
     * @var boolean
     *
     * @Column(name="devmode", type="boolean", nullable=true)
     */
    private $devmode = '0';

    /**
     * @var boolean
     *
     * @Column(name="snmpversion", type="boolean", nullable=true)
     */
    private $snmpversion = '0';

    /**
     * @var string
     *
     * @Column(name="readcomm", type="string", length=32, nullable=true)
     */
    private $readcomm = '';

    /**
     * @var integer
     *
     * @Column(name="cliport", type="smallint", nullable=true)
     */
    private $cliport = '0';

    /**
     * @var string
     *
     * @Column(name="login", type="string", length=32, nullable=true)
     */
    private $login = '';

    /**
     * @var string
     *
     * @Column(name="icon", type="string", length=16, nullable=true)
     */
    private $icon = '';

    /**
     * @var integer
     *
     * @Column(name="origip", type="integer", nullable=true)
     */
    private $origip = '0';

    /**
     * @var boolean
     *
     * @Column(name="cpu", type="boolean", nullable=true)
     */
    private $cpu = '0';

    /**
     * @var integer
     *
     * @Column(name="memcpu", type="bigint", nullable=true)
     */
    private $memcpu = '0';

    /**
     * @var boolean
     *
     * @Column(name="temp", type="boolean", nullable=true)
     */
    private $temp = '0';

    /**
     * @var integer
     *
     * @Column(name="cusvalue", type="bigint", nullable=true)
     */
    private $cusvalue = '0';

    /**
     * @var string
     *
     * @Column(name="cuslabel", type="string", length=32, nullable=true)
     */
    private $cuslabel = '';

    /**
     * @var string
     *
     * @Column(name="sysobjid", type="string", length=255, nullable=true)
     */
    private $sysobjid = '';

    /**
     * @var string
     *
     * @Column(name="writecomm", type="string", length=32, nullable=true)
     */
    private $writecomm = '';

    /**
     * @var string
     *
     * @Column(name="devopts", type="string", length=32, nullable=true)
     */
    private $devopts = '';

    /**
     * @var boolean
     *
     * @Column(name="size", type="boolean", nullable=true)
     */
    private $size = '0';

    /**
     * @var boolean
     *
     * @Column(name="stack", type="boolean", nullable=true)
     */
    private $stack = '1';

    /**
     * @var integer
     *
     * @Column(name="maxpoe", type="smallint", nullable=true)
     */
    private $maxpoe = '0';

    /**
     * @var integer
     *
     * @Column(name="totpoe", type="smallint", nullable=true)
     */
    private $totpoe = '0';

    /**
     * @var integer
     *
     * @Column(name="cfgchange", type="integer", nullable=true)
     */
    private $cfgchange = '0';

    /**
     * @var string
     *
     * @Column(name="cfgstatus", type="string", length=2, nullable=true)
     */
    private $cfgstatus = '--';


}
