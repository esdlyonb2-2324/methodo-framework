<?php

namespace App\Repository;

use App\Entity\Pizza;
use Core\Attributes\TargetEntity;

#[TargetEntity(name: Pizza::class)]
class PizzaRepository extends \Core\Repository\Repository
{
                          //  Object de namespace App\Entity $object
    // $pizza  get_class($pizza) =>   Pizza::class
    //reflection = on récupère les propriétés qui protent l'attribut Column
    // $props = ["name" ,"description","price"]
    public function save(Pizza $pizza):void
    {
        $sql = "INSERT INTO $this->tableName";
        foreach($props as $prop){
            $sql.+"$prop = :$prop , ";
        }
        $tableauExecute = [];
        foreach($props as $prop){
            $getter = "get".ucfirst($prop);
            $tableauExecute[$prop] = $object->$getter();
        }


        $query = $this->pdo->prepare("INSERT INTO $this->tableName SET (name = :name, description = :description, price = :price)");
        $query->execute($tableauExecute);



    }
}