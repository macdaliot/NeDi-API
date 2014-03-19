<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nedi\Api\ShortOutputArrayAccessable;

/**
 * Interfaces
 *
 * @Table(name="interfaces", indexes={@Index(name="device", columns={"device"}), @Index(name="ifname", columns={"ifname"}), @Index(name="ifidx", columns={"ifidx"})})
 * @Entity
 */
class NetworkInterface implements ShortOutputArrayAccessable
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
     * @var Device
     *
     * @ManyToOne(targetEntity="Device", fetch="LAZY")
     * @JoinColumn(name="device", referencedColumnName="device")
     */
    private $device;

    /**
     * @var string
     *
     * @Column(name="ifname", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @var integer
     *
     * @Column(name="ifidx", type="bigint", nullable=false)
     */
    private $index;

    /**
     * @var string
     *
     * @Column(name="linktype", type="string", length=4, nullable=true)
     */
    private $linkType = '';

    /**
     * @var integer
     *
     * @Column(name="iftype", type="smallint", nullable=true)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @Column(name="ifmac", type="string", length=12, nullable=true)
     */
    private $macAddress = '';

    /**
     * @var string
     *
     * @Column(name="ifdesc", type="string", length=255, nullable=true)
     */
    private $description = '';

    /**
     * @var string
     *
     * @Column(name="alias", type="string", length=64, nullable=true)
     */
    private $alias = '';

    /**
     * @var boolean
     *
     * @Column(name="ifstat", type="boolean", nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @Column(name="speed", type="bigint", nullable=true)
     */
    private $speed = '0';

    /**
     * @var string
     *
     * @Column(name="duplex", type="string", length=2, nullable=true)
     */
    private $duplex = '';

    /**
     * @var integer
     *
     * @Column(name="pvid", type="smallint", nullable=true)
     */
    private $pvid = '0';

    /**
     * @var integer
     *
     * @Column(name="inoct", type="bigint", nullable=true)
     */
    private $inoct = '0';

    /**
     * @var integer
     *
     * @Column(name="inerr", type="integer", nullable=true)
     */
    private $inerr = '0';

    /**
     * @var integer
     *
     * @Column(name="outoct", type="bigint", nullable=true)
     */
    private $outoct = '0';

    /**
     * @var integer
     *
     * @Column(name="outerr", type="integer", nullable=true)
     */
    private $outerr = '0';

    /**
     * @var integer
     *
     * @Column(name="dinoct", type="bigint", nullable=true)
     */
    private $dinoct = '0';

    /**
     * @var integer
     *
     * @Column(name="dinerr", type="integer", nullable=true)
     */
    private $dinerr = '0';

    /**
     * @var integer
     *
     * @Column(name="doutoct", type="bigint", nullable=true)
     */
    private $doutoct = '0';

    /**
     * @var integer
     *
     * @Column(name="douterr", type="integer", nullable=true)
     */
    private $douterr = '0';

    /**
     * @var integer
     *
     * @Column(name="indis", type="integer", nullable=true)
     */
    private $indis = '0';

    /**
     * @var integer
     *
     * @Column(name="outdis", type="integer", nullable=true)
     */
    private $outdis = '0';

    /**
     * @var integer
     *
     * @Column(name="dindis", type="integer", nullable=true)
     */
    private $dindis = '0';

    /**
     * @var integer
     *
     * @Column(name="doutdis", type="integer", nullable=true)
     */
    private $doutdis = '0';

    /**
     * @var integer
     *
     * @Column(name="inbrc", type="integer", nullable=true)
     */
    private $inbrc = '0';

    /**
     * @var integer
     *
     * @Column(name="dinbrc", type="integer", nullable=true)
     */
    private $dinbrc = '0';

    /**
     * @var integer
     *
     * @Column(name="lastchg", type="integer", nullable=true)
     */
    private $lastchg = '0';

    /**
     * @var integer
     *
     * @Column(name="poe", type="smallint", nullable=true)
     */
    private $poe = '0';

    /**
     * @var string
     *
     * @Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment = '';

    /**
     * @var boolean
     *
     * @Column(name="trafalert", type="boolean", nullable=true)
     */
    private $trafalert = '0';

    /**
     * @var integer
     *
     * @Column(name="brcalert", type="smallint", nullable=true)
     */
    private $brcalert = '0';

    /**
     * @var integer
     *
     * @Column(name="macflood", type="smallint", nullable=true)
     */
    private $macflood = '0';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Device
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @return string
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @inheritdoc
     */
    public function asShortOutputArray()
    {
        return array(
            'index' => $this->getIndex(),
            'name' => $this->getName(),
            'alias' => $this->getAlias(),
            'description' => $this->getDescription(),
        );
    }
}
