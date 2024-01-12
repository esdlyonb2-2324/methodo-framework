<?php

namespace App\Controller;

use Core\Attributes\Route;
use Core\Http\Response;

class HomeController extends \Core\Controller\Controller
{
    #[Route(uri: "/home/{id}")]
    public function index():Response
    {



        return $this->render("home/index", [
            "pageTitle"=> "Welcome to the framework"
        ]);
    }





}