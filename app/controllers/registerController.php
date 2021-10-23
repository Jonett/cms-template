<?php

interface cms_views
{
    public function render(): void;
}

class registerController implements cms_views
{
    public $f3;

    public function __construct($f3)
    {
        $this->f3 = $f3;
    }

    public function render(): void
    {
        $this->f3->set('content', 'register/register.html');
        echo \Template::instance()->render('/layout.html');
    }

    public function register_user()
    {
        foreach($this->f3->get('POST') as $key => $value){
            $this->f3->set('POST.'.$key, trim($value));
        }
        $uname = (string)$this->f3->get('POST.uname');
        $password1 = (string)$this->f3->get('POST.pwd1');
        $password2 = (string)$this->f3->get('POST.pwd2');

        if($password1 == $password2 && strlen($password1.$password2) > 10 && strlen($uname) > 5){
            $pwd = password_hash($password1, PASSWORD_BCRYPT);
            $user = new user($this->f3, NULL ,$uname, $pwd);
            if($uid = $user->new_user()){
                $this->f3->set('SESSION.uid', $uid);
                $this->f3->set('SESSION.login_state', TRUE);
                $this->f3->reroute('/dashboard');
            }
        }
        $this->f3->reroute('/register');
    }

}