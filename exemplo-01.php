<?php  
abstract class Animal {
	public function falar(){
		return "som";
	}
	public function mover(){
		return "Anda";

	}
}
class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}
class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}
class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}
	public function mover(){
		return "Voa e " . parent::mover();
	}
}



$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
echo "-----------------------------------------<br/>";
$tom = new Gato();
echo $tom->falar() . "<br/>";
echo $tom->mover() . "<br/>";
echo "-----------------------------------------<br/>";
$urubu = new Passaro();
echo $urubu->falar() . "<br/>";
echo $urubu->mover() . "<br/>";

?>