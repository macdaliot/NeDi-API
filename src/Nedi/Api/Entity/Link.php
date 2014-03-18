<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Links
 *
 * @Table(name="links", indexes={@Index(name="device", columns={"device"}), @Index(name="ifname", columns={"ifname"}), @Index(name="neighbor", columns={"neighbor"}), @Index(name="nbrifname", columns={"nbrifname"})})
 * @Entity
 */
class Link
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
     * @Column(name="device", type="string", length=64, nullable=false)
     */
    private $device;

    /**
     * @var string
     *
     * @Column(name="ifname", type="string", length=32, nullable=true)
     */
    private $ifname = '';

    /**
     * @var string
     *
     * @Column(name="neighbor", type="string", length=64, nullable=false)
     */
    private $neighbor;

    /**
     * @var string
     *
     * @Column(name="nbrifname", type="string", length=32, nullable=true)
     */
    private $nbrifname = '';

    /**
     * @var integer
     *
     * @Column(name="bandwidth", type="bigint", nullable=true)
     */
    private $bandwidth = '0';

    /**
     * @var string
     *
     * @Column(name="linktype", type="string", length=4, nullable=true)
     */
    private $linktype = '';

    /**
     * @var string
     *
     * @Column(name="linkdesc", type="string", length=255, nullable=true)
     */
    private $linkdesc = '';

    /**
     * @var string
     *
     * @Column(name="nbrduplex", type="string", length=2, nullable=true)
     */
    private $nbrduplex = '';

    /**
     * @var integer
     *
     * @Column(name="nbrvlanid", type="smallint", nullable=true)
     */
    private $nbrvlanid = '0';

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';


}
