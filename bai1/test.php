<?php

namespace App\Controller;

class Controller
{
    private $name;
    private $address;
    private $phone;
    private $email;
    private $degree;
    public function __construct()
    {
    }
    public function add($name, $address, $phone, $email, $degree)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->degree = $degree;
    }
    public function view()
    {
        echo "<p>";
        echo "Name: $this->name";
        echo "<br>Address: $this->address";
        echo "<br>Phone: $this->phone";
        echo "<br>Email: $this->email";
        echo "<br>Degree: $this->degree";
        echo "</p>";
    }
    public static function getSelf()
    {
        return new self;
    }
    public static function getStatic()
    {
        return new static;
    }
}
