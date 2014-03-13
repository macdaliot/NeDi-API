<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configs
 *
 * @Table(name="configs", uniqueConstraints={@UniqueConstraint(name="device", columns={"device"})})
 * @Entity
 */
class Configs
{
    /**
     * @var string
     *
     * @Column(name="device", type="string", length=64, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $device;

    /**
     * @var string
     *
     * @Column(name="config", type="text", nullable=true)
     */
    private $config;

    /**
     * @var string
     *
     * @Column(name="changes", type="text", nullable=true)
     */
    private $changes;

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';


}
