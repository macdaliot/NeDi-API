<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modules
 *
 * @Table(name="modules", indexes={@Index(name="device", columns={"device"}), @Index(name="slot", columns={"slot"})})
 * @Entity
 */
class Modules
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
     * @Column(name="slot", type="string", length=64, nullable=true)
     */
    private $slot = '';

    /**
     * @var string
     *
     * @Column(name="model", type="string", length=32, nullable=true)
     */
    private $model = '';

    /**
     * @var string
     *
     * @Column(name="moddesc", type="string", length=255, nullable=true)
     */
    private $moddesc = '';

    /**
     * @var string
     *
     * @Column(name="serial", type="string", length=32, nullable=true)
     */
    private $serial = '';

    /**
     * @var string
     *
     * @Column(name="hw", type="string", length=128, nullable=true)
     */
    private $hw = '';

    /**
     * @var string
     *
     * @Column(name="fw", type="string", length=128, nullable=true)
     */
    private $fw = '';

    /**
     * @var string
     *
     * @Column(name="sw", type="string", length=128, nullable=true)
     */
    private $sw = '';

    /**
     * @var integer
     *
     * @Column(name="modidx", type="smallint", nullable=true)
     */
    private $modidx = '0';

    /**
     * @var boolean
     *
     * @Column(name="modclass", type="boolean", nullable=true)
     */
    private $modclass = '1';

    /**
     * @var integer
     *
     * @Column(name="status", type="smallint", nullable=true)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @Column(name="modloc", type="string", length=255, nullable=true)
     */
    private $modloc = '';


}
