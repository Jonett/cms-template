<?php

class authentication extends database
{

    public mixed $uname;
    public mixed $password;

    public function __construct($f3, string $uname, string $password)
    {
        parent::__construct($f3);
        $this->setUname($uname);
        $this->setPassword($password);
    }

    public function authenticate_login(): bool|user_data
    {
        $query_result = $this->db->exec(
            'SELECT users.id AS user_id, users.password, user_data.uid, user_data.role, user_data.firstname, user_data.lastname, user_data.email, user_data.phone, user_data.created_at FROM users LEFT JOIN user_data ON users.id = user_data.uid WHERE uname = :uname',
            [':uname' => $this->getUname()]
        );
        $user_data = new user_data();
        $user_data->set($query_result[0]);
        return (password_verify($this->getPassword(), $query_result[0]['password']) ? $user_data : FALSE);
    }

    /**
     * TODO: rewrite
     * @return int
     */
    public function user_exists(): int
    {
        return count($this->db->exec('SELECT * FROM users WHERE uname = :uname', [':uname' => $this->getUname()]));
    }

    /**
     * @return string
     */
    public function getUname(): string
    {
        return $this->uname;
    }

    /**
     * @param string $uname
     */
    private function setUname(mixed $uname): void
    {
        $this->uname = $uname;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    private function setPassword(mixed $password): void
    {
        $this->password = $password;
    }


}