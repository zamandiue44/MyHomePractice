<?php
class Person{
	public $name;
	public $age;
	
		public function personName(){
			echo "Person Name is : ".$this->name."<br />";
			
		}
		public function personAge($value){
			echo "Person Age is : ".$this->name=$value;
		}
}
$Personone = new Person;
$Personone->name="Syed Zaman Mostafiz";
$Personone->personName();
$Personone->personAge("28");



?>