<!DOCTYPE html>
<html>

<head>
	<title>Tutorial_01</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<table cellspacing="0px" cellpadding="0px" border="1px">
		<?php
		//for loop
		for ($row = 1; $row <= 8; $row++) {
			echo "<tr>";
			for ($col = 1; $col <= 8; $col++) {
				$total = $row + $col;
				if ($total % 2 == 0) {
					echo "<td height=40px width=40px bgcolor=#FFFFFF></td>";
				} else {
					echo "<td height=40px width=40px bgcolor=#000000></td>";
				}
			}
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>