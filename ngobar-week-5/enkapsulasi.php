<?php

class Brand {
  private $name;
  private $price;
  private $model;

  public function setHp($name, $price, $model){
    $this->name = $name;
    $this->price = $price;
    $this->model = $model;
  }

  public function getNameHp(){
    return $this->name;
  }
  public function getPriceHp(){
    return $this->price;
  }
  public function getModelHp(){
    return $this->model;
  }

  public function getHp(){
    $datas = [
      "name" => $this->name,
      "price" => $this->price,
      "model" => $this->model
    ];
    return "Name: " . $datas['name'] . PHP_EOL . 
    "Price: " . $datas['price'] . PHP_EOL . 
    "Model: " . $datas['model'];
  }
}


$hp = new Brand();
$hp->setHp("Samsung", 10000, "S22");
echo $hp->getNameHp() . PHP_EOL;
echo $hp->getPriceHp() . PHP_EOL;
echo $hp->getModelHp() . PHP_EOL;
echo $hp->getHp();