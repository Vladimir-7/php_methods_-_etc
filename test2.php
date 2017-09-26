<?php
class People
{
	//создаются приватные переменные
	private $age;
	private $name;

	public function __construct($name,$age)
	{
		//Приватным переменным присваиваются значения
		// из переданных занчений класса
		$this->age=$age;
		$this->name=$name;
	}
	
	public function __set($name,$value)
	{

		if($name =='age'){
			//проверяет чтобы было целое число и не меньше 3 и небольше 120
			if(is_integer($value)&& $value >= 3 && $value < 120){
				//тогда значение присвается скрытой переменой age в класс
				$this->age = $value;
			}else{
				exit("Некорректный возраст");
			}
		}else if ($name == 'name'){
			//если поле не пустое при равнивается переданное значение 
			if($name != ''){
				$this->name = $value;
			}else{
				exit ("Пусто поле имени");
			}
		}else{
			exit("Неизвестное свойство");
		}
	}
	public function __get($name)
	{
		//возвращает значение по нейму($name)
		if ($name == 'age'){
			return $this->age;
		}else if($name == 'name'){
			return $this->name;
		}
		exit("Неизвестное свойство");
	}
}
$man = new People('John', 2);
echo $man->name;
//$man->name = 'Vladimir';
//echo $man->name;
echo "<br>";
//$man->age=5;
echo $man->age;

?>