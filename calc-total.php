<?php
	// get the data from the form
	$scores = array();
	
	foreach($_POST['ScoreInputs'] as $i) 
	{
		$scores[] = $i;
	}
	
	// Calculate the total score
	$TotalScore = 0;
	
	
	
	foreach($scores as $i) 
	{
		$TotalScore += $i;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Total Score Calculator</title>
	<link href="main.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
	<div id="content">
		<h1>Score Calculator</h1>
		
		<div id="ScoreData">
			<label id="ScoreLabel">Total Score:</label>
			<?php echo $TotalScore; ?>
			<br />
			<br />
			
			<label id="ScoreLabel">Amount of Scores Added:</label>
			<?php echo sizeof($scores); ?>
			<br />
			<br />
			
			<div id="Scores">
				<label id="ScoreLabel">Scores Added:</label><br />
				<?php
					foreach($scores as $i) 
					{
						echo $i;
						echo "<br />";
					}
				?>
			</div>
		</div>

	</div>
</body>
</html>	