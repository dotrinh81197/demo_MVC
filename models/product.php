<?php
require_once("db.php");
class Products
{
    public $id;
    public $name;
    public $description;
    public $sell_price;
    public $cost_price;
    public $image_url;
    public $category_id;

    public $category;

    public static function all()
    {
        $sql = "SELECT * FROM `products`;";

        $statement = DB::getInstance()->prepare($sql);

        $statement->execute();
        // Array associative 
        $rowdata = $statement->fetchAll();
      
      $products=[];
        foreach ($rowdata as $row) {
            $entity = new Products();
            $entity->id = $row['id'];
            $entity->name = $row['name'];
            $entity->description = $row['description'];
            $entity->sell_price = $row['sell_price'];
            $entity->cost_price = $row['cost_price'];
            $entity->category_id = $row['category_id'];
            $products[] = $entity;
        }
       

        return $products;
    }
}
