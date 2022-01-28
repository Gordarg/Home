<?php

class HomeController extends Controller {

    function IndexGET() {

        $news = array_slice(Xml::Read(_Root . 'app/rss/news.xml'),0,3);
        $articles = array_slice(Xml::Read(_Root . 'app/rss/articles.xml'),0,1);

        $this->Render('Index', [
            'Title' => _AppName,
            'News' => $news,
            'Articles' => $articles
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