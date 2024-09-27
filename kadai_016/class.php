
  <?php
  // クラスを定義する
  class Food
  {
    // プロパティを定義する
    private $name;
    private $price;

    public function __construct(string $name, int $price)
    {
      $this->name = $name;
      $this->price = $price;
    }
    public function show_price()
    {

      echo $this->price;
    }
  }


  class Animal
  {
    // プロパティを定義する
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight)
    {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    public function show_height()
    {
      echo  $this->height;
    }
  }
  // インスタンス化する
  $food = new Food("potato", 250);
  $animal = new Animal("dog", 60, 5000);

  print_r($food);
  echo "<br>";
  print_r($animal);
  echo "<br>";
  $food->show_price();
  echo "<br>";
  $animal->show_height();
  ?>