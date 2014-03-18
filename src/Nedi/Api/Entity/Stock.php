<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @Table(name="stock", uniqueConstraints={@UniqueConstraint(name="serial", columns={"serial"})})
 * @Entity
 */
class Stock
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
     * @var boolean
     *
     * @Column(name="state", type="boolean", nullable=true)
     */
    private $state = '0';

    /**
     * @var string
     *
     * @Column(name="serial", type="string", length=32, nullable=false)
     */
    private $serial;

    /**
     * @var string
     *
     * @Column(name="type", type="string", length=32, nullable=true)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @Column(name="asset", type="string", length=32, nullable=true)
     */
    private $asset = '';

    /**
     * @var string
     *
     * @Column(name="location", type="string", length=255, nullable=true)
     */
    private $location = '';

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=32, nullable=true)
     */
    private $source = '-';

    /**
     * @var integer
     *
     * @Column(name="cost", type="integer", nullable=true)
     */
    private $cost = '0';

    /**
     * @var string
     *
     * @Column(name="ponumber", type="string", length=32, nullable=true)
     */
    private $ponumber = '';

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';

    /**
     * @var string
     *
     * @Column(name="partner", type="string", length=32, nullable=true)
     */
    private $partner = '';

    /**
     * @var integer
     *
     * @Column(name="startmaint", type="integer", nullable=true)
     */
    private $startmaint = '0';

    /**
     * @var integer
     *
     * @Column(name="endmaint", type="integer", nullable=true)
     */
    private $endmaint = '0';

    /**
     * @var integer
     *
     * @Column(name="lastwty", type="integer", nullable=true)
     */
    private $lastwty = '0';

    /**
     * @var string
     *
     * @Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment = '';

    /**
     * @var string
     *
     * @Column(name="usrname", type="string", length=32, nullable=true)
     */
    private $usrname = '0';

    /**
     * @var integer
     *
     * @Column(name="asupdate", type="integer", nullable=true)
     */
    private $asupdate = '0';


}
