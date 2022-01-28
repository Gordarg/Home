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
            'Title' => _AppName
        ]);
        exit;
    }

}