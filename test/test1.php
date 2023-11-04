<?php


// class Person{
//     public $name;
//     public $age;
//     public $email;
//     public function __construct($name,$age,$email)
//     {
//             $this->name=$name;
//             $this->age=$age;
//             $this->email=$email;
        
//     }
   
// }

// $person=new Person("Rena","21","verdiyevarana@gmail.com");
// echo "salam"." ". $person->name." "."yashim"." ".$person->age." "."mailim"." ". $person->email;



// class Car {
//     private $make;
//     private $model;
//     private $year;
//     function __construct($make,$model, $year) {
//         $this->make = $make;
//         $this->model = $model;
//         $this->year = $year;

// }
// public function calculateAge($currentYear) {
//     return $currentYear - $this->year;
// }
// }

// $car= new Car("BMW","F90","2017");
// $currentYear = date("Y");
// $age = $car->calculateAge($currentYear);
// echo "Car Age: " . $age . " years";


// class BankAccount{
//     public float|int $balance= 0;
//     public string $person;
//     public function __construct($balance,$person){
// $this->balance=$balance;
// $this->person=$person;
// }
// public function addDeposit(float|int $price):void{
//    $this->balance += $price;
//  }
// public function getFromDeposit(float|int $price){
//     if($price>$this->balance){
//         return "max ".$this->balance." cheke bilersiz";

//     }
//     return $this->balance-=$price;
//  }
//  public function checkBalance():float|int{
// return $this->balance;
//  }
// }

// $bank=new BankAccount(300,"Rena");
// echo $bank->addDeposit(50).'<br/>';

// echo $bank->getFromDeposit(500).'<br/>';

// echo $bank->checkBalance().'<br/>';


// class StudentRooster {
//     public $students = [];

//     public function addStudent($name, $score) {
//         $this->students[$name] = $score;
//     }

//     public function removeStudent($name) {
//         if (array_key_exists($name, $this->students)) {
//             unset($this->students[$name]);
//         }
//     }

//     public function calcAverage() {
//         if (empty($this->students)) {
//             return "0 a bolmek olmaz.";
//         } else {
//             $totalScore = array_sum($this->students);
//             $numStudents = count($this->students);
//             $average = $totalScore / $numStudents;
//             return $average;
//         }
//     }
// }
// $data = new StudentRooster();

// $data->addStudent("John", 90);
// $data->addStudent("Alice", 85);

// $average = $data->calcAverage();
// echo "Average Score: $average\n";

// $data->removeStudent("John");

// $average = $data->calcAverage();
// echo $average;




// class InventorManager {

//     public $inventory = [];

//     public function __construct() {
//     }

//     public function addItem($name, $quantity, $price) {
//         $this->inventory[$name] = [
//             'quantity' => $quantity,
//             'price' => $price,
//         ];
//     }

//     public function updateQuantity($name, $newQuantity) {
     
//             $this->inventory[$name]['quantity'] = $newQuantity;
        
//     }

//     public function CalculateTotalValue() {
//         $totalValue = 0;

//         foreach ($this->inventory as $name => $item) {
//             $totalValue += $item['quantity'] * $item['price'];
//         }

//         return $totalValue;
//     }
// }

// $data = new InventorManager();

// $data->addItem("iphone", 2, 300);

// $data->updateQuantity("iphone", 5);

// $calc = $data->CalculateTotalValue();
// echo  $calc;

















?>