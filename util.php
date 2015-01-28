<?php
function print_table($data,$headers)
{
	echo"<table class='table table-striped'><tr>";
	foreach($headers as $cell)
	{
		echo"<th>$cell</th>";
	}
	echo"</tr>";
	foreach($data as $rows)
	{
		echo"<tr>";
		foreach ($rows as $cell)
		{
			echo"<td>$cell</td>";
		}
		
		echo"</tr>";
	}
	echo"</table>";
}