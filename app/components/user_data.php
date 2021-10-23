<?php

interface cms_data
{
    public function set(array $data);

    public function get(mixed $property): mixed;
}

class user_data implements cms_data
{
    protected int $uid;
    protected int $role;

    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected string $phone;
    protected string $created_at;

    public function set(array $data)
    {
        foreach ($data as $key => $value) {
            if(method_exists($this, 'set'.ucwords($key))){
                $this->{'set' . ucwords($key)}($value);
            }
        }

    }

    public function get(mixed $property): mixed
    {
        return $this->{'get'.ucwords($property)}();
    }


    /**
     * @return int
     */
    protected function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    protected function setUid(int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return int
     */
    protected function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    protected function setRole(int $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    protected function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    protected function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    protected function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    protected function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    protected function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    protected function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    protected function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    protected function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    protected function getCreated_at(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    protected function setCreated_at(string $created_at): void
    {
        $this->created_at = $created_at;
    }


}