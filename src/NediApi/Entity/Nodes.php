<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nodes
 *
 * @Table(name="nodes", indexes={@Index(name="name", columns={"name"}), @Index(name="nodip", columns={"nodip"}), @Index(name="mac", columns={"mac"}), @Index(name="vlanid", columns={"vlanid"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Nodes
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
    private $nodip = '0';

    /**
     * @var string
     *
     * @Column(name="mac", type="string", length=16, nullable=false)
     */
    private $mac;

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


}
