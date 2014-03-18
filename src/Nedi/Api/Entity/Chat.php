<?php

namespace Nedi\Api\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Chat
 *
 * @Table(name="chat", indexes={@Index(name="time", columns={"time"}), @Index(name="usrname", columns={"usrname"})})
 * @Entity
 */
class Chat
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
     * @var integer
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var string
     *
     * @Column(name="message", type="string", length=255, nullable=true)
     */
    private $message = '';

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="usrname", referencedColumnName="usrname")
     */
    private $user;


}
