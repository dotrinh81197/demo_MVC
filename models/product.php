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
        $list = [];


        foreach ($rowdata as $key) {
            $entity = new Products();
            $entity->id = $key['id'];
            $entity->name = $key['name'];
            $entity->description = $key['description'];
            $entity->sell_price = $key['sell_price'];
            $entity->cost_price = $key['cost_price'];
            $entity->category_id = $key['category_id'];
            $list = $entity;
        }
        return $list;
    }
}
