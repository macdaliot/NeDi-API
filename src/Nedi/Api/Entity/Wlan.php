<?php

namespace Nedi\Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wlan
 *
 * @Table(name="wlan", indexes={@Index(name="mac", columns={"mac"})})
 * @Entity
 */
class Wlan
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
     * @Column(name="mac", type="string", length=8, nullable=false)
     */
    private $mac;

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';


}
