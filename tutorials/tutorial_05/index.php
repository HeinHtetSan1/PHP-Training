<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<table cellspacing="0px" cellpadding="1px" border="1">
		<h1>Content Of Excel</h1>
		<?php

		require "vendor/autoload.php";

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load("sample.xlsx");
		$worksheet = $spreadsheet->getActiveSheet();

		foreach ($worksheet->getRowIterator() as $row) {

			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);

			echo "<tr>";
			foreach ($cellIterator as $cell) {
				echo "<td>" . $cell->getValue() . "</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
	<br><br>
	<h1>Content Of Doc</h1>
	<?php
	function readWord($filename)
	{
		if (file_exists($filename)) {
			if (($fh = fopen($filename, 'r')) !== false) {
				$headers = fread($fh, 0xA00);
				$n1 = (ord($headers[0x21C]) - 1);
				$n2 = ((ord($headers[0x21D]) - 8) * 256);
				$n3 = ((ord($headers[0x21E]) * 256) * 256);
				$n4 = (((ord($headers[0x21F]) * 256) * 256) * 256);
				$textLength = ($n1 + $n2 + $n3 + $n4);

				$extracted_plaintext = fread($fh, $textLength);
				return $extracted_plaintext;
			}
		}
	}
	$filename = "sample.doc";
	echo readWord($filename);

	?>
	<br><br>
	<h1>Content Of Text</h1>
	<?php
	$myfile = fopen("sample.txt", "r");
	echo fread($myfile, filesize("sample.txt"));
	fclose($myfile);
	?>
	<br><br>
	<h1>Content Of CSV</h1>
	<?php
	echo '<table border="1">';
	$start_row = 1;
	if (($csv_file = fopen("sample.csv", "r")) !== FALSE) {
		while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
			$column_count = count($read_data);
			echo '<tr>';
			$start_row++;
			for ($c = 0; $c < $column_count; $c++) {
				echo "<td>" . $read_data[$c] . "</td>";
			}
			echo '</tr>';
		}
		fclose($csv_file);
	}
	echo '</table>';
	?>


	</table>
</body>

</html>