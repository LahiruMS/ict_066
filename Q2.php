<!DOCTYPE html>
<html>
<head>
	<title>Test2</title>
</head>
<body>
	<b>
	<?php
		class fruit{
			public $name;
			public $color;

			public function __construct($name,$color)
			{
				$this->name=$name;
				$this->color=$color;
			}

			public function print(){
				echo "This fruit is $this->name and color $this->color ";
			}
		}
		
		class apple extends fruit
		{
			
			public function message()
			{
				echo "I am also fruit";
			}
		}

		$obj1 = new apple("red_apple","red");
		$obj1->print();
		$obj1->message();

	?>	
 </b>
</body>
</html>