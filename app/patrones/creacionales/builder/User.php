<?php

namespace App\patrones\creacionales\builder;

class User
{
    private ?string $name = null;
    private ?string $email = null;
    private ?string $address = null;
    private ?string $phone = null;
    private ?string $password = null;

    public function __construct(?string $name, ?string $email, ?string $address, ?string $phone, ?string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->password = $password;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}
