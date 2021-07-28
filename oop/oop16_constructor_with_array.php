<?php

// class Product{
//     public $name;
//     public $category;
//     public $weight;
//     public $price;

//     public function __construct($name,$category,$weight,$price){
//         $this->name=$name;
//         $this->category=$category;
//         $this->weight=$weight;
//         $this->price=$price;

//     }
// }

// $bee=new Product("bee","huney","100g",500);


// print_r(get_object_vars($bee));

?>


<?php

class Product{
    public $name;
    public $category;
    public $weight;
    public $price;

    public function __construct($array){
        $this->name=$array['name'];
        $this->category=$array['category'];
        $this->weight=$array['weight'];
        $this->price=$array['price'];

    }
}


$arr=array("name"=>"bee","category"=>"huney","weight"=>"100g","price"=>900);
$bee=new Product($arr);


print_r(get_object_vars($bee));

?>