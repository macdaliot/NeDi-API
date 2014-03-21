<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nedi\Api\LongOutputArrayAccessable;
use Nedi\Api\ShortOutputArrayAccessable;

/**
 * Interfaces
 *
 * @Table(name="interfaces", indexes={@Index(name="device", columns={"device"}), @Index(name="ifname", columns={"ifname"}), @Index(name="ifidx", columns={"ifidx"})})
 * @Entity
 */
class NetworkInterface implements ShortOutputArrayAccessable, LongOutputArrayAccessable
{

    #region Attributes

    /**
     * @var Device
     * @Id
     * @ManyToOne(targetEntity="Device", fetch="LAZY")
     * @JoinColumn(name="device", referencedColumnName="device")
     */
    private $device;

    /**
     * @var Node[] | ArrayCollection
     *
     * @OneToMany(targetEntity="Node", mappedBy="interface")
     */
    private $nodes;

    /**
     * @var string
     * @Id
     * @Column(name="ifname", type="string", length=32, nullable=false)
     */
    private $name;

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
    private $portVLanId = '0';

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
    private $lastChange = '0';

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

    #endregion Attributes

    #region Getter & Setter

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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
     * @param int $brcalert
     */
    public function setBrcalert($brcalert)
    {
        $this->brcalert = $brcalert;
    }

    /**
     * @return int
     */
    public function getBrcalert()
    {
        return $this->brcalert;
    }

    /**
     * @param int $dinbrc
     */
    public function setDinbrc($dinbrc)
    {
        $this->dinbrc = $dinbrc;
    }

    /**
     * @return int
     */
    public function getDinbrc()
    {
        return $this->dinbrc;
    }

    /**
     * @param int $dindis
     */
    public function setDindis($dindis)
    {
        $this->dindis = $dindis;
    }

    /**
     * @return int
     */
    public function getDindis()
    {
        return $this->dindis;
    }

    /**
     * @param int $dinerr
     */
    public function setDinerr($dinerr)
    {
        $this->dinerr = $dinerr;
    }

    /**
     * @return int
     */
    public function getDinerr()
    {
        return $this->dinerr;
    }

    /**
     * @param int $dinoct
     */
    public function setDinoct($dinoct)
    {
        $this->dinoct = $dinoct;
    }

    /**
     * @return int
     */
    public function getDinoct()
    {
        return $this->dinoct;
    }

    /**
     * @param int $doutdis
     */
    public function setDoutdis($doutdis)
    {
        $this->doutdis = $doutdis;
    }

    /**
     * @return int
     */
    public function getDoutdis()
    {
        return $this->doutdis;
    }

    /**
     * @param int $douterr
     */
    public function setDouterr($douterr)
    {
        $this->douterr = $douterr;
    }

    /**
     * @return int
     */
    public function getDouterr()
    {
        return $this->douterr;
    }

    /**
     * @param int $doutoct
     */
    public function setDoutoct($doutoct)
    {
        $this->doutoct = $doutoct;
    }

    /**
     * @return int
     */
    public function getDoutoct()
    {
        return $this->doutoct;
    }

    /**
     * @param int $inbrc
     */
    public function setInbrc($inbrc)
    {
        $this->inbrc = $inbrc;
    }

    /**
     * @return int
     */
    public function getInbrc()
    {
        return $this->inbrc;
    }

    /**
     * @param int $indis
     */
    public function setIndis($indis)
    {
        $this->indis = $indis;
    }

    /**
     * @return int
     */
    public function getIndis()
    {
        return $this->indis;
    }

    /**
     * @param int $inerr
     */
    public function setInerr($inerr)
    {
        $this->inerr = $inerr;
    }

    /**
     * @return int
     */
    public function getInerr()
    {
        return $this->inerr;
    }

    /**
     * @param int $inoct
     */
    public function setInoct($inoct)
    {
        $this->inoct = $inoct;
    }

    /**
     * @return int
     */
    public function getInoct()
    {
        return $this->inoct;
    }

    /**
     * @param int $lastChange
     */
    public function setLastChange($lastChange)
    {
        $this->lastChange = $lastChange;
    }

    /**
     * @return int
     */
    public function getLastChange()
    {
        return $this->lastChange;
    }

    /**
     * @param \Nedi\Api\Entity\ArrayCollection|\Nedi\Api\Entity\Node[] $nodes
     */
    public function setNodes($nodes)
    {
        $this->nodes = $nodes;
    }

    /**
     * @return \Nedi\Api\Entity\ArrayCollection|\Nedi\Api\Entity\Node[]
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @param int $outdis
     */
    public function setOutdis($outdis)
    {
        $this->outdis = $outdis;
    }

    /**
     * @return int
     */
    public function getOutdis()
    {
        return $this->outdis;
    }

    /**
     * @param int $outerr
     */
    public function setOuterr($outerr)
    {
        $this->outerr = $outerr;
    }

    /**
     * @return int
     */
    public function getOuterr()
    {
        return $this->outerr;
    }

    /**
     * @param int $outoct
     */
    public function setOutoct($outoct)
    {
        $this->outoct = $outoct;
    }

    /**
     * @return int
     */
    public function getOutoct()
    {
        return $this->outoct;
    }

    /**
     * @param boolean $trafalert
     */
    public function setTrafalert($trafalert)
    {
        $this->trafalert = $trafalert;
    }

    /**
     * @return boolean
     */
    public function getTrafalert()
    {
        return $this->trafalert;
    }

    /**
     * @param int $poe
     */
    public function setPoe($poe)
    {
        $this->poe = $poe;
    }

    /**
     * @return int
     */
    public function getPoe()
    {
        return $this->poe;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $macflood
     */
    public function setMacflood($macflood)
    {
        $this->macflood = $macflood;
    }

    /**
     * @return int
     */
    public function getMacflood()
    {
        return $this->macflood;
    }

    /**
     * @param string $duplex
     */
    public function setDuplex($duplex)
    {
        $this->duplex = $duplex;
    }

    /**
     * @return string
     */
    public function getDuplex()
    {
        return $this->duplex;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return int
     */
    public function getPortVLanId()
    {
        return $this->portVLanId;
    }

    /**
     * @param int $portVLanId
     */
    public function setPortVLanId($portVLanId)
    {
        $this->portVLanId = $portVLanId;
    }

    #endregion Getter & Setter

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
            'status' => $this->getStatus(),
        );
    }


    /**
     * @return array
     */
    public function asLongOutputArray()
    {
        $result = $this->asShortOutputArray();

        $result['mac'] = array(
            'address' => $this->getMacAddress(),
            'flood' => $this->getMacflood(),
        );

        $result['lastChange'] = $this->getLastChange();
        $result['portVLanId'] = $this->getPortVLanId();

        $result['linkType'] = $this->getLinkType();
        $result['type'] = $this->getType();

        $result['speed'] = $this->getSpeed();
        $result['comment'] = $this->getComment();
        $result['poe'] = $this->getPoe();
        $result['brcAlert'] = $this->getBrcalert();
        $result['trafAlert'] = $this->getTrafalert();

        $result['inboundBrc'] = $this->getInbrc();
        $result['inboundDiscards'] = $this->getIndis();
        $result['inboundErrors'] = $this->getInerr();
        $result['inboundOctets'] = $this->getInoct();

        $result['dInboundBrc'] = $this->getDinbrc();
        $result['dInboundDiscards'] = $this->getDindis();
        $result['dInboundErrors'] = $this->getDinerr();
        $result['dInboundOctets'] = $this->getDinoct();

        $result['outboundDiscards'] = $this->getOutdis();
        $result['outboundErrors'] = $this->getOuterr();
        $result['outboundOctets'] = $this->getOutoct();

        $result['dOutboundDiscards'] = $this->getDoutdis();
        $result['dOutboundErrors'] = $this->getDouterr();
        $result['dOutboundOctets'] = $this->getDoutoct();

        return $result;
    }
}
