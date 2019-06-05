<?php

namespace App;

class kernel 
{
    public function __construct()
    {
        echo "<h1> Pemba 1 </h1>";
        $viewManager = new ViewManager();
        $viewManager -> renderTemplate("index.view.html");
    }
}