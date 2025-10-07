<?php
	echo '<table border="1">';
	
	for($i = 1; $i<11; $i++)
	{
		echo '<tr>';	
		for($j = 0; $j<6; $j++)
		{
			echo '<td>';
			echo pow($i, $j);
			echo '</td>';
		}	
		
		echo '</tr>';
	}
	echo '</table>';

	echo '<center>';
	for ($i = 1; $i <= 16; $i++) 
	{	
		for ($k = 1; $k <= (2 * $i - 1); $k++) 
		{
			echo "* ";
		}
		echo "<br>";
	}
	echo '</center>';
	echo '<br><br><br><br><br>';

	echo '<center>';
for ($i = 1; $i <= 16; $i++) 
{	
    for ($k = 1; $k <= (2 * $i - 1); $k++) 
    {
        if ($k == $i) {
            echo "| | ";
        } else {
            echo "* ";
        }
    }
    echo "<br>";
}
echo '</center>';


?>