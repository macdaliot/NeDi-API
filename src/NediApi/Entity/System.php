<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * System
 *
 * @Table(name="system", uniqueConstraints={@UniqueConstraint(name="name", columns={"name"})})
 * @Entity
 */
class System
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
     * @Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="value", type="string", length=32, nullable=true)
     */
    private $value = '';


}
