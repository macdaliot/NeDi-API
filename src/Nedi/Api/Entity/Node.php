<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nedi\Api\ShortOutputArrayAccessable;

/**
 * Nodes
 *
 * @Table(name="nodes", indexes={@Index(name="name", columns={"name"}), @Index(name="nodip", columns={"nodip"}), @Index(name="mac", columns={"mac"}), @Index(name="vlanid", columns={"vlanid"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Node implements ShortOutputArrayAccessable
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
     * @Column(name="name", type="string", length=64, nullable=true)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @Column(name="nodip", type="integer", nullable=true)
     */
    private $ip = '0';

    /**
     * @var string
     *
     * @Column(name="mac", type="string", length=16, nullable=false)
     */
    private $macAddress;

    /**
     * @var string
     *
     * @Column(name="oui", type="string", length=32, nullable=true)
     */
    private $oui = '';

    /**
     * @var integer
     *
     * @Column(name="firstseen", type="integer", nullable=true)
     */
    private $firstseen = '0';

    /**
     * @var integer
     *
     * @Column(name="lastseen", type="integer", nullable=true)
     */
    private $lastseen = '0';

    /**
     * @var Device
     *
     * @ManyToOne(targetEntity="Device", fetch="LAZY", inversedBy="nodes")
     * @JoinColumn(name="device", referencedColumnName="device")
     */
    private $device;

    /**
     * @var NetworkInterface
     *
     * @ManyToOne(targetEntity="NetworkInterface", fetch="LAZY", inversedBy="nodes")
     * @JoinColumns({
     *          @JoinColumn(name="ifname", referencedColumnName="ifname"),
     *          @JoinColumn(name="device", referencedColumnName="device")
     * })
     */
    private $interface;

    /**
     * @var integer
     *
     * @Column(name="vlanid", type="smallint", nullable=true)
     */
    private $vlanid = '0';

    /**
     * @var integer
     *
     * @Column(name="ifmetric", type="integer", nullable=true)
     */
    private $ifmetric = '0';

    /**
     * @var integer
     *
     * @Column(name="ifupdate", type="integer", nullable=true)
     */
    private $ifupdate = '0';

    /**
     * @var integer
     *
     * @Column(name="ifchanges", type="integer", nullable=true)
     */
    private $ifchanges = '0';

    /**
     * @var integer
     *
     * @Column(name="ipupdate", type="integer", nullable=true)
     */
    private $ipupdate = '0';

    /**
     * @var integer
     *
     * @Column(name="ipchanges", type="integer", nullable=true)
     */
    private $ipchanges = '0';

    /**
     * @var integer
     *
     * @Column(name="iplost", type="integer", nullable=true)
     */
    private $iplost = '0';

    /**
     * @var integer
     *
     * @Column(name="arpval", type="smallint", nullable=true)
     */
    private $arpval = '0';

    /**
     * @var binary
     *
     * @Column(name="nodip6", type="binary", nullable=true)
     */
    private $nodip6 = '';

    /**
     * @var string
     *
     * @Column(name="tcpports", type="string", length=64, nullable=true)
     */
    private $tcpports = '';

    /**
     * @var string
     *
     * @Column(name="udpports", type="string", length=64, nullable=true)
     */
    private $udpports = '';

    /**
     * @var string
     *
     * @Column(name="nodtype", type="string", length=64, nullable=true)
     */
    private $nodtype = '';

    /**
     * @var string
     *
     * @Column(name="nodos", type="string", length=64, nullable=true)
     */
    private $nodos = '';

    /**
     * @var integer
     *
     * @Column(name="osupdate", type="integer", nullable=true)
     */
    private $osupdate = '0';

    /**
     * @var string
     *
     * @Column(name="noduser", type="string", length=32, nullable=true)
     */
    private $noduser = '';


    /**
     * @return array
     */
    public function asShortOutputArray()
    {

        return array(
            'id' => $this->id,
            'name' => $this->getName(),
        );
    }

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
}
