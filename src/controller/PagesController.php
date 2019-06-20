<?php

// PagesController.php

class PagesController {

    public function home() {

        view('pages.home');

    }

    public function about() {

        view('pages.about');
    }

    public function contact(){
        view('pages.contact');
    }

    public function traitementForm(){
        var_dump($_POST);
    }

    public function addanarticle(){
        view('pages.ajout-article');
    }

    public function traitementarticle(){
        var_dump($_POST);
    }
}

