<?php

namespace NediApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @Table(name="users", uniqueConstraints={@UniqueConstraint(name="usrname", columns={"usrname"})})
 * @Entity
 */
class Users
{
    /**
     * @var string
     *
     * @Column(name="usrname", type="string", length=32, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $usrname;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=64, nullable=false)
     */
    private $password = '';

    /**
     * @var integer
     *
     * @Column(name="groups", type="smallint", nullable=false)
     */
    private $groups = '0';

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=64, nullable=true)
     */
    private $email = '';

    /**
     * @var string
     *
     * @Column(name="phone", type="string", length=32, nullable=true)
     */
    private $phone = '';

    /**
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time = '0';

    /**
     * @var integer
     *
     * @Column(name="lastlogin", type="integer", nullable=true)
     */
    private $lastlogin = '0';

    /**
     * @var string
     *
     * @Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment = '';

    /**
     * @var string
     *
     * @Column(name="language", type="string", length=16, nullable=false)
     */
    private $language = 'english';

    /**
     * @var string
     *
     * @Column(name="theme", type="string", length=16, nullable=false)
     */
    private $theme = 'default';

    /**
     * @var boolean
     *
     * @Column(name="volume", type="boolean", nullable=false)
     */
    private $volume = '48';

    /**
     * @var boolean
     *
     * @Column(name="columns", type="boolean", nullable=false)
     */
    private $columns = '6';

    /**
     * @var boolean
     *
     * @Column(name="msglimit", type="boolean", nullable=false)
     */
    private $msglimit = '5';

    /**
     * @var integer
     *
     * @Column(name="miscopts", type="smallint", nullable=false)
     */
    private $miscopts = '2';

    /**
     * @var string
     *
     * @Column(name="dateformat", type="string", length=16, nullable=false)
     */
    private $dateformat = 'j.M y G:i470';

    /**
     * @var string
     *
     * @Column(name="viewdev", type="string", length=255, nullable=true)
     */
    private $viewdev = '';


}
