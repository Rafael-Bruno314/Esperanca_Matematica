<?php
	include('class.esperanca.php');
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Esperança Matemática</title>
	</head>
	<body>
	
		<form id="theForm" method="POST" name="theForm" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
			
			
			<label>Enter the number of times you want to throw the dices: </label>
			<input type="text" name="n" placeholder="" value="<?php echo rand(1,1000000);?>"><br/><br/>
			<label>Enter the number of sides of your dices: </label>
			<input type="text" name="sides" placeholder="" value="<?php echo rand(1,20);?>"><br/><br/>		
			<table width="100%" border="0"><tr><td width="20%"></td><td><input type="submit" value="Play"></td></tr></table>
			
		</form>
		<hr width="40%" align=left>
		
		<label>The Mathematical Expectation is: </label>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$n = $_POST['n'];
		
				$sides = $_POST['sides'];

				//echo rand(1,6);	//O rand foi até fácil
				$obj = new Esperanca;
				
				//echo $obj -> processaValor();
				$obj -> getN($n,$sides);
			}
		?>
		
	</body>
</html>