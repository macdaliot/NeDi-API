<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iftrack
 *
 * @Table(name="iftrack", indexes={@Index(name="mac", columns={"mac"}), @Index(name="vlanid", columns={"vlanid"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Iftrack
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
     * @Column(name="mac", type="string", length=16, nullable=false)
     */
    private $mac;

    /**
     * @var integer
     *
     * @Column(name="ifupdate", type="integer", nullable=true)
     */
    private $ifupdate = '0';

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


}
