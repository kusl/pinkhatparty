<?php

namespace model;
class User
{
    private $id;
    private $username;
    private $displayName;
    private $password;
    private $email;
    private $lastLogin;
    private $isActive;
    private $isAdministrator;
    private $isReporter;
    private $isBanned;

    function __construct()
    {
    }

    public static function create()
    {
        $instance = new self();
        return $instance;
    }

    public static function hashPassword($input)
    {
        return password_hash($input, PASSWORD_DEFAULT);
    }

    public function setId($input)
    {
        $this->id = $input;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBanned(): bool
    {
        return $this->isBanned;
    }

    public function setIsBanned($input)
    {
        $this->isBanned = $input;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsReporter(): bool
    {
        return $this->isReporter;
    }

    public function setIsReporter($input)
    {
        $this->isReporter = $input;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAdministrator(): bool
    {
        return $this->isAdministrator;
    }

    public function setIsAdministrator($input)
    {
        $this->isAdministrator = $input;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName($input)
    {
        if ($input != null) {
            $this->displayName = $input;
        } else {
            $this->displayName = $this->getUsername();
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername($input)
    {
        $this->username = $input;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword($input)
    {
        $this->password = $input;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($input)
    {
        $this->email = $input;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastLogin(): \DateTime
    {
        return $this->lastLogin;
    }

    public function setLastLogin($input)
    {
        $this->lastlogin = $input;
        return $this;
    }

    public function verifyPassword($input)
    {
        if (password_verify($input, $this->password)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($input)
    {
        $this->isActive = $input;
        return $this;
    }
}
