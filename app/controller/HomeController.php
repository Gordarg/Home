<?php

class HomeController extends Controller {

    function IndexGET() {

        $this->Render('Index', [
            'Title' => _AppName
        ]);
        exit;
    }

    function PolicyGET($name) {
        $this->Render('Policies'.$name, [
            'Title' => $name . ' Policies'
        ]);
        exit;
    }

    function TeamGET(){
        $this->Render('Team', [
            'Title' => 'Our team'
        ]);
        exit; 
    }

}