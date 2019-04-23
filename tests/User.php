<?php


class User
{
    private $name;
    private $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    public function changeName($name)
    {
        $this->name = $name;
    }

    public function changeRole($role)
    {
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }
}