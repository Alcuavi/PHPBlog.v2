<?php 

namespace App\controllers;

class WhoController extends Controller
{
    public function index()
    {
        $viewManager = new ViewManager();
        $this -> viewManager -> renderTemplate("who.view.html");
    }
}