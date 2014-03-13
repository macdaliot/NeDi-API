<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Networks
 *
 * @Table(name="networks", indexes={@Index(name="device", columns={"device"}), @Index(name="ifname", columns={"ifname"}), @Index(name="ifip", columns={"ifip"})})
 * @Entity
 */
class Networks
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


}
