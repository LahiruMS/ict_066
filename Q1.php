<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<b>
	<?php
		$var = "I love you";
		echo "Hello $var baby";

		echo "<br>";
		
		class pornstar
		{
			public $name;
			public $color;

		    public function set_name($name){
		    	$this->name=$name;
		    }
		    public function get_name(){
		    	return $this->name;
		    }
		}
		$obj1=new pornstar();
		$obj1->set_name("Ashavindi");
		echo $obj1->get_name();

		echo "<br>";

		echo "Hello Ashavindi";
	?>	
	</b>
</body>
</html>