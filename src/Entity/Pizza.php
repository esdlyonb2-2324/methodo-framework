<?php

namespace App\Entity;

use App\Repository\PizzaRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[TargetRepository(name: PizzaRepository::class)]
#[Table(name:"pizzas")]
class Pizza
{

    #[Id()]
    private int $id;

    #[Column(name:"name")]
    private string $name;

    #[Column(name:"description", optional:true)]

    private string $description;

    #[Column(name:"price")]
    private int $price;


    #[ManyToOne( invertedBy : Comment::class)]
    private array $comments;

//
//    function __$nomDeFonction(){
//        if($nomDeFonction matche getComments)
//}
//
//    public function getComments(){
//
//        $classname = get_class($this);
//        $method = "findBy".$classname;
//       return findbyPizza($this)
//
//    }
//

    //class Comment
//
//    #[ForeignKey(className : Pizza::class)]
//    private int $pizza_id

}