<?php
class authController
{
    public $f3;

    public function __construct($f3)
    {
        $this->f3 = $f3;
    }

    public function login(){
        $uname = trim($this->f3->get('POST.uname'));
        $pwd = trim($this->f3->get('POST.password'));
        $authentication = new authentication($this->f3, $uname, $pwd);
        if(strlen($uname) > 5 && strlen($pwd) > 5 && $authentication->user_exists()){
            //if user authentication comes back false we route user back to home
            $user_data = $authentication->authenticate_login();
            if(!$user_data){
                $this->f3->reroute('/');
            }
            $this->f3->set('SESSION.user_data', $user_data);
            $this->f3->set('SESSION.login_state', TRUE);
            $this->f3->reroute('/dashboard');
        }else{
            $this->f3->reroute('/');
        }
    }

    public function logout(){
        $this->f3->clear('SESSION');
        $this->f3->reroute('/');
    }

}