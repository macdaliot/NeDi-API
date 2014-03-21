<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nedi\Api\ShortOutputArrayAccessable;

/**
 * Networks
 *
 * @Table(name="networks", indexes={@Index(name="device", columns={"device"}), @Index(name="ifname", columns={"ifname"}), @Index(name="ifip", columns={"ifip"})})
 * @Entity
 */
class Network implements ShortOutputArrayAccessable
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
     * @var NetworkInterface
     *
     * @--OneToMany(targetEntity="NetworkInterface", fetch="LAZY", inversedBy="nodes")
     * @--JoinColumns({
     *          @--JoinColumn(name="ifname", referencedColumnName="ifname"),
     *          @--JoinColumn(name="device", referencedColumnName="device")
     * })
     */
    private $interfaces;

    /**
     * @var integer
     *
     * @Column(name="ifip", type="integer", nullable=true)
     */
    private $ifip = '0';

    /**
     * @var binary
     *
     * @Column(name="ifip6", type="binary", nullable=true)
     */
    private $ifip6 = '';

    /**
     * @var boolean
     *
     * @Column(name="prefix", type="boolean", nullable=true)
     */
    private $prefix = '0';

    /**
     * @var string
     *
     * @Column(name="vrfname", type="string", length=32, nullable=true)
     */
    private $vrfname = '';

    /**
     * @var integer
     *
     * @Column(name="status", type="smallint", nullable=true)
     */
    private $status = '0';


    /**
     * @return array
     */
    public function asShortOutputArray()
    {
        return array();
    }
}
