<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function show_price(string $price) {
        $this->price = $price;
      }

      public function __construct(string $name, string $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }
    $food = new Food('potato',250);

    print_r($food);

    ?>

    <p>
    <?php
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function show_height(string $height) {
        $this->height = $height;
      }

      public function __construct(string $name, string $height, string $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($animal);
    ?>
    </p>