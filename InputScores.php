<!DOCTYPE html>
<html>
<head>
	<title>Total Score Calculator</title>
	<link href="main.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
	<div id="content">
		<h1>Score Calculator</h1>
		<form action="calc-total.php" method="post">
			
			<?php
				$AmtScores = $_POST['Amt'];
				
				$index = 1;
			
				for ($i = 1; $i <= $AmtScores; $i++) 
				{
					echo "<label id=ScoreLabel>Test Score </label>";
					echo $index;
					echo '<input type="number" name="ScoreInputs[]" /><br />';
					
					$index++;
				}
			
			?>
			
			<div id="buttons">
				<label>&nbsp;</label>
				<input type="submit" value="Calculate Total Score" /><br />
			</div>	
		</form>
	</div>
</body>
</html>
	