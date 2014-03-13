<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monitoring
 *
 * @Table(name="monitoring", uniqueConstraints={@UniqueConstraint(name="name", columns={"name"})}, indexes={@Index(name="device", columns={"device"})})
 * @Entity
 */
class Monitoring
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
     * @Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @Column(name="monip", type="integer", nullable=true)
     */
    private $monip;

    /**
     * @var string
     *
     * @Column(name="class", type="string", length=4, nullable=true)
     */
    private $class = 'dev';

    /**
     * @var string
     *
     * @Column(name="test", type="string", length=6, nullable=true)
     */
    private $test = '';

    /**
     * @var string
     *
     * @Column(name="testopt", type="string", length=64, nullable=true)
     */
    private $testopt = '';

    /**
     * @var string
     *
     * @Column(name="testres", type="string", length=64, nullable=true)
     */
    private $testres = '';

    /**
     * @var integer
     *
     * @Column(name="lastok", type="integer", nullable=true)
     */
    private $lastok = '0';

    /**
     * @var integer
     *
     * @Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @Column(name="lost", type="integer", nullable=true)
     */
    private $lost = '0';

    /**
     * @var integer
     *
     * @Column(name="ok", type="integer", nullable=true)
     */
    private $ok = '0';

    /**
     * @var integer
     *
     * @Column(name="latency", type="smallint", nullable=true)
     */
    private $latency = '0';

    /**
     * @var integer
     *
     * @Column(name="latmax", type="smallint", nullable=true)
     */
    private $latmax = '0';

    /**
     * @var integer
     *
     * @Column(name="latavg", type="smallint", nullable=true)
     */
    private $latavg = '0';

    /**
     * @var integer
     *
     * @Column(name="uptime", type="integer", nullable=true)
     */
    private $uptime = '0';

    /**
     * @var boolean
     *
     * @Column(name="alert", type="boolean", nullable=true)
     */
    private $alert = '0';

    /**
     * @var string
     *
     * @Column(name="eventfwd", type="string", length=255, nullable=true)
     */
    private $eventfwd = '';

    /**
     * @var boolean
     *
     * @Column(name="eventlvl", type="boolean", nullable=true)
     */
    private $eventlvl = '0';

    /**
     * @var string
     *
     * @Column(name="eventdel", type="string", length=255, nullable=true)
     */
    private $eventdel = '';

    /**
     * @var string
     *
     * @Column(name="depend", type="string", length=64, nullable=true)
     */
    private $depend = '-';

    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=false)
     */
    private $device;

    /**
     * @var string
     *
     * @Column(name="notify", type="string", length=32, nullable=true)
     */
    private $notify = '';

    /**
     * @var boolean
     *
     * @Column(name="lostalert", type="boolean", nullable=true)
     */
    private $lostalert = '2';

    /**
     * @var integer
     *
     * @Column(name="latwarn", type="smallint", nullable=true)
     */
    private $latwarn = '100';

    /**
     * @var boolean
     *
     * @Column(name="cpualert", type="boolean", nullable=true)
     */
    private $cpualert = '75';

    /**
     * @var integer
     *
     * @Column(name="memalert", type="integer", nullable=true)
     */
    private $memalert = '1024';

    /**
     * @var boolean
     *
     * @Column(name="tempalert", type="boolean", nullable=true)
     */
    private $tempalert = '60';

    /**
     * @var boolean
     *
     * @Column(name="poewarn", type="boolean", nullable=true)
     */
    private $poewarn = '8';

    /**
     * @var integer
     *
     * @Column(name="arppoison", type="smallint", nullable=true)
     */
    private $arppoison = '1';

    /**
     * @var boolean
     *
     * @Column(name="supplyalert", type="boolean", nullable=true)
     */
    private $supplyalert = '5';


}
