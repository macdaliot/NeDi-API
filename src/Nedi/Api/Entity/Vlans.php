<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vlans
 *
 * @Table(name="vlans", indexes={@Index(name="vlanid", columns={"vlanid"}), @Index(name="device", columns={"device"})})
 * @Entity
 */
class Vlans
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
     * @var integer
     *
     * @Column(name="vlanid", type="smallint", nullable=true)
     */
    private $vlanid = '0';

    /**
     * @var string
     *
     * @Column(name="vlanname", type="string", length=32, nullable=true)
     */
    private $vlanname = '';


}
