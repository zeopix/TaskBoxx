<?php

namespace TaskBoxx\FrontendBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @orm:Entity() 
 * @orm:Table(name="tb_user") 
 */
class User implements UserInterface
{

    /**
     * @orm:Id 
     * @orm:Column(type="integer") 
     * @orm:GeneratedValue(strategy="IDENTITY") 
     */
    protected $id;
    /**
     * @orm:Column(type="string", length="32", unique=true) 
     */
    protected $username;
    /**
     * @orm:Column(type="string", length="255", unique=true) 
     */
    protected $email;
    /**
     * @orm:Column(type="string", length="128") 
     */
    protected $password;
    /**
     * @orm:OneToMany(targetEntity="Task", mappedBy="assignedUser")
     * @var ArrayCollection $tasks 
     */
    protected $tasks;
    /**
     * @orm:ManyToMany(targetEntity="Role")
     * @orm:JoinTable(name="user_role",
     *     joinColumns={@orm:JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@orm:JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     *
     * @var ArrayCollection $userRoles
     */
    protected $userRoles;
    /**
     * @orm:Column(type="string", length="5")
     * @var String
     */
    protected $locale;

    /**
     * Constructs a new instance of User
     */
    public function __construct()
    {
        $this->userRoles = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Gets the user roles.
     *
     * @return ArrayCollection A Doctrine ArrayCollection
     */
    public function getUserRoles()
    {
        return $this->userRoles;
    }

    /**
     * Implementing the UserInterface interface 
     */
    public function __toString()
    {
        return $this->getUsername();
    }

    /**
     * Gets an array of roles.
     * 
     * @return array An array of Role objects
     */
    public function getRoles()
    {
        return $this->getUserRoles()->toArray();
    }

    public function eraseCredentials()
    {
        
    }

    public function getSalt()
    {
        return $this->getId();
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * equals. 
     * 
     * @param UserInterface $account 
     * @return bool 
     */
    public function equals(UserInterface $account)
    {
        if ($account->getUsername() != $this->getUsername()) {
            return false;
        }
        if ($account->getEmail() != $this->getEmail()) {
            return false;
        }
        return true;
    }

}