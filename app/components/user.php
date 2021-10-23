<?php

class user extends database
{
    private mixed $id;

    protected string $uname;
    protected string $password;

    /**
     * Int can be passed as NULL in case user is new
     *
     * @param $f3
     * @param mixed $id
     * @param string $uname
     * @param string $password
     */
    public function __construct($f3, mixed $id, string $uname, string $password)
    {
        parent::__construct($f3);
        $this->setId($id);
        $this->setUname($uname);
        $this->setPassword($password);
    }


    public function new_user()
    {
        $this->db->exec(
            "INSERT INTO users (uname, password) VALUES (:uname, :password)",
            [':uname' => $this->getUname(), ':password' => $this->password]
        );
        return $this->db->lastInsertId();
    }

    /**
     * @param string $uname
     */
    private function setUname(string $uname)
    {
        $this->uname = $uname;
    }

    /**
     * @return string
     */
    public function getUname(): string
    {
        return $this->uname;
    }

    /**
     * @param mixed $password
     */
    private function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword(): mixed
    {
        return $this->password;
    }

    /**
     * @param mixed $id
     */
    private function setId(mixed $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}