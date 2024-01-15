<?php

namespace App\Controller;

use App\Repository\PizzaRepository;
use Core\Attributes\Route;
use Core\Http\Response;

class HomeController extends \Core\Controller\Controller
{
    #[Route(uri: "/home", name:"app_home")]
    public function index():Response
    {


        $name = null;
        $description = null;

        if(!empty($_POST['prive'] && $_POST['prive'] != '')
        {
            $name = htmlspecialchars($_POST['name']);
        }


        // Request on veut récuperer name et description + verifier
        // va chercher dans post ce qu'il te faut pour créetr un objet de la classe pizza
        //si tout va bien, créer un objet $pizza
        //sinon renvoie null;
        new Pizza()

            $pizza = Request->resolvePost(Pizza::class);

            if($pizza){

                $repo = new PizzaRepository();
                $repo->save($pizza);

               $pizza->getComments();


            }

            )

        return $this->render("home/index", [
            "pageTitle"=> "Welcome to the framework"
        ]);
    }





}