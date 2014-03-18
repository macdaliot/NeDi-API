<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @Table(name="locations", indexes={@Index(name="region", columns={"region"})})
 * @Entity
 */
class Locations
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
     * @Column(name="region", type="string", length=32, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @Column(name="city", type="string", length=32, nullable=true)
     */
    private $city = '';

    /**
     * @var string
     *
     * @Column(name="building", type="string", length=32, nullable=true)
     */
    private $building = '';

    /**
     * @var integer
     *
     * @Column(name="x", type="smallint", nullable=true)
     */
    private $x = '0';

    /**
     * @var integer
     *
     * @Column(name="y", type="smallint", nullable=true)
     */
    private $y = '0';

    /**
     * @var integer
     *
     * @Column(name="ns", type="integer", nullable=true)
     */
    private $ns = '0';

    /**
     * @var integer
     *
     * @Column(name="ew", type="integer", nullable=true)
     */
    private $ew = '0';

    /**
     * @var string
     *
     * @Column(name="locdesc", type="string", length=255, nullable=true)
     */
    private $locdesc = '';


}
