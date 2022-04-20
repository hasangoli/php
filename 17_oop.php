<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  // Properties are attrs that belong to a class
  public $name;
  public $email;
  public $password;

  // Constructor is a method that runs when an obj is created
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Method is a func which belongs to a class
  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}

// Instantiate a user obj
$user1 = new User('Sann', 'sann@gmail.com', '12345678');
$user2 = new User('Ryan', 'ryan@gmail.com', '12345678');
$user1->set_name('John');
$user2->set_name('Jane');

var_dump($user1);
var_dump($user2);

echo $user1->get_name();
echo $user2->get_name();

// Inheritence
class Employee extends User
{
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Jane', 'jane@gmail.com', '12345678', 'Manager');

echo $employee1->title;

echo "<h1 style='font-size:100px;text-align:center;line-height:0;'>2:35:14</h1>";
echo "<h1 style='font-size:25px;text-align:center;'>Feedback Project</h1>";