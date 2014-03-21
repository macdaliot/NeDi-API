<?php

namespace Nedi\Api\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Nedi\Api\LongOutputArrayAccessable;
use Nedi\Api\ShortOutputArrayAccessable;
use Nedi\Common\Address\Ip;

/**
 * Devices
 *
 * @Table(name="devices", uniqueConstraints={@UniqueConstraint(name="device", columns={"device"})})
 * @Entity(repositoryClass="Nedi\Api\Repository\DeviceRepository")
 */
class Device implements ShortOutputArrayAccessable, LongOutputArrayAccessable
{
    public function __construct()
    {
        $this->interfaces = new ArrayCollection();
        $this->nodes = new ArrayCollection();
        $this->networks = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var NetworkInterface[] | ArrayCollection
     *
     * @OneToMany(targetEntity="NetworkInterface", mappedBy="device")
     */
    private $interfaces;

    /**
     * @var Node[] | ArrayCollection
     *
     * @OneToMany(targetEntity="Node", mappedBy="device")
     */
    private $nodes;

    /**
     * @var Network[] | ArrayCollection
     *
     * @OneToMany(targetEntity="Network", mappedBy="device")
     */
    private $networks;

    /**
     * @var integer
     *
     * @Column(name="devip", type="integer", nullable=true)
     */
    private $ip = '0';

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
    private $firstDiscovery = '0';

    /**
     * @var integer
     *
     * @Column(name="lastdis", type="integer", nullable=true)
     */
    private $lastDiscovery = '0';

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
    private $operatingSystem = '';

    /**
     * @var string
     *
     * @Column(name="bootimage", type="string", length=64, nullable=true)
     */
    private $bootImage = '';

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
    private $group = '';

    /**
     * @var boolean
     *
     * @Column(name="devmode", type="boolean", nullable=true)
     */
    private $mode = '0';

    /**
     * @var boolean
     *
     * @Column(name="snmpversion", type="boolean", nullable=true)
     */
    private $snmpVersion = '0';

    /**
     * @var string
     *
     * @Column(name="readcomm", type="string", length=32, nullable=true)
     */
    private $readCommunity = '';

    /**
     * @var integer
     *
     * @Column(name="cliport", type="smallint", nullable=true)
     */
    private $cliPort = '0';

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
    private $memCpu = '0';

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
    private $customValue = '0';

    /**
     * @var string
     *
     * @Column(name="cuslabel", type="string", length=32, nullable=true)
     */
    private $customLabel = '';

    /**
     * @var string
     *
     * @Column(name="sysobjid", type="string", length=255, nullable=true)
     */
    private $sysObjectId = '';

    /**
     * @var string
     *
     * @Column(name="writecomm", type="string", length=32, nullable=true)
     */
    private $writeCommunity = '';

    /**
     * @var string
     *
     * @Column(name="devopts", type="string", length=32, nullable=true)
     */
    private $options = '';

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
    private $maximalPoe = '0';

    /**
     * @var integer
     *
     * @Column(name="totpoe", type="smallint", nullable=true)
     */
    private $totalPoe = '0';

    /**
     * @var integer
     *
     * @Column(name="cfgchange", type="integer", nullable=true)
     */
    private $configurationChange = '0';

    /**
     * @var string
     *
     * @Column(name="cfgstatus", type="string", length=2, nullable=true)
     */
    private $configurationStatus = '--';

    /**
     * @return int
     */
    public function getTotalPoe()
    {
        return $this->totalPoe;
    }

    /**
     * @param int $totalPoe
     */
    public function setTotalPoe($totalPoe)
    {
        $this->totalPoe = $totalPoe;
    }

    /**
     * @return string
     */
    public function getWriteCommunity()
    {
        return $this->writeCommunity;
    }

    /**
     * @param string $writeCommunity
     */
    public function setWriteCommunity($writeCommunity)
    {
        $this->writeCommunity = $writeCommunity;
    }

    /**
     * @return string
     */
    public function getReadCommunity()
    {
        return $this->readCommunity;
    }

    /**
     * @param string $readCommunity
     */
    public function setReadCommunity($readCommunity)
    {
        $this->readCommunity = $readCommunity;
    }

    /**
     * @return boolean
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param boolean $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return boolean
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param boolean $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return boolean
     */
    public function getSnmpVersion()
    {
        return $this->snmpVersion;
    }

    /**
     * @param boolean $snmpVersion
     */
    public function setSnmpVersion($snmpVersion)
    {
        $this->snmpVersion = $snmpVersion;
    }

    /**
     * @return boolean
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param boolean $stack
     */
    public function setStack($stack)
    {
        $this->stack = $stack;
    }

    /**
     * @return string
     */
    public function getSysObjectId()
    {
        return $this->sysObjectId;
    }

    /**
     * @param string $sysObjectId
     */
    public function setSysObjectId($sysObjectId)
    {
        $this->sysObjectId = $sysObjectId;
    }

    /**
     * @return string
     */
    public function getBootImage()
    {
        return $this->bootImage;
    }

    /**
     * @param string $bootImage
     */
    public function setBootImage($bootImage)
    {
        $this->bootImage = $bootImage;
    }

    /**
     * @return int
     */
    public function getCliPort()
    {
        return $this->cliPort;
    }

    /**
     * @param int $cliPort
     */
    public function setCliPort($cliPort)
    {
        $this->cliPort = $cliPort;
    }

    /**
     * @return int
     */
    public function getConfigurationChange()
    {
        return $this->configurationChange;
    }

    /**
     * @param int $configurationChange
     */
    public function setConfigurationChange($configurationChange)
    {
        $this->configurationChange = $configurationChange;
    }

    /**
     * @return string
     */
    public function getConfigurationStatus()
    {
        return $this->configurationStatus;
    }

    /**
     * @param string $configurationStatus
     */
    public function setConfigurationStatus($configurationStatus)
    {
        $this->configurationStatus = $configurationStatus;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return boolean
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @param boolean $cpu
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @return string
     */
    public function getCustomLabel()
    {
        return $this->customLabel;
    }

    /**
     * @param string $customLabel
     */
    public function setCustomLabel($customLabel)
    {
        $this->customLabel = $customLabel;
    }

    /**
     * @return int
     */
    public function getCustomValue()
    {
        return $this->customValue;
    }

    /**
     * @param int $customValue
     */
    public function setCustomValue($customValue)
    {
        $this->customValue = $customValue;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getFirstDiscovery()
    {
        return $this->firstDiscovery;
    }

    /**
     * @param int $firstDiscovery
     */
    public function setFirstDiscovery($firstDiscovery)
    {
        $this->firstDiscovery = $firstDiscovery;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return int
     */
    public function getLastDiscovery()
    {
        return $this->lastDiscovery;
    }

    /**
     * @param int $lastDiscovery
     */
    public function setLastDiscovery($lastDiscovery)
    {
        $this->lastDiscovery = $lastDiscovery;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return int
     */
    public function getMaximalPoe()
    {
        return $this->maximalPoe;
    }

    /**
     * @param int $maximalPoe
     */
    public function setMaximalPoe($maximalPoe)
    {
        $this->maximalPoe = $maximalPoe;
    }

    /**
     * @return int
     */
    public function getMemCpu()
    {
        return $this->memCpu;
    }

    /**
     * @param int $memCpu
     */
    public function setMemCpu($memCpu)
    {
        $this->memCpu = $memCpu;
    }

    /**
     * @return boolean
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param boolean $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * @param string $operatingSystem
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * Returns the IP-Address from the Device
     * @return string
     */
    public function getIp()
    {
        return Ip::fromLong($this->ip)->asString();
    }

    /**
     * Sets the IP-Address for the Device
     * @param string $deviceIp
     */
    public function setIp($deviceIp)
    {
        $this->ip = Ip::fromString($deviceIp)->asLong();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $deviceName
     */
    public function setName($deviceName)
    {
        $this->name = $deviceName;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param string $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return ArrayCollection|NetworkInterface[]
     */
    public function getInterfaces()
    {
        return $this->interfaces;
    }

    /**
     * @return ArrayCollection|Node[]
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @return ArrayCollection|Network[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }


    /**
     * @return array
     */
    public function asLongOutputArray()
    {
        $result = $this->asShortOutputArray();
        $result['poe'] = array(
            'total' => $this->getTotalPoe(),
            'maximal' => $this->getMaximalPoe(),
        );

        return $result;
    }

    /**
     * @return array
     */
    public function asShortOutputArray()
    {
        return array(
            'name' => $this->getName(),
            'serial' => $this->getSerial(),
            'ip' => $this->getIp(),
            'sysObjectId' => $this->getSysObjectId(),
            'contact' => $this->getContact(),
        );
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
