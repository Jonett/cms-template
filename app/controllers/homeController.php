<?php

interface cms_views
{
    public function render($f3): void;
}

class homeController implements cms_views
{
    public function render($f3): void
    {
        if ($f3->get('SESSION.login_state') === TRUE ) {
            $f3->set('content', 'home/private/home.html');
        } else {
            $f3->set('content', 'home/public/home.html');
        }

        echo \Template::instance()->render('/layout.html');
    }
}