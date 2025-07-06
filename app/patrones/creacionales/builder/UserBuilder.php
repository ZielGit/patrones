<?php

namespace App\patrones\creacionales\builder;

class UserBuilder
{
    private ?string $name = null;
    private ?string $email = null;
    private ?string $address = null;
    private ?string $phone = null;
    private ?string $password = null;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function build(): User
    {
        return new User(
            $this->name,
            $this->email,
            $this->address,
            $this->phone,
            $this->password
        );
    }
}
