<?php

interface cms_views
{
    public function render(): void;
}

class dashboardController extends dashboardModel implements cms_views
{

    public function __construct($f3)
    {
        parent::__construct($f3);
    }

    public function render(): void
    {
        $this->f3->set('content', 'dashboard/dashboard.html');
        echo \Template::instance()->render('/layout.html');
    }

}