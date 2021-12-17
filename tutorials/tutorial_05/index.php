<?php
require_once 'Classes/PHPExcel.php';
$excel = PHPExcel_IOFactory::load('sample.xlsx');
$excel->setActiveSheetIndex(0);
echo "<table border=1>";
$i=4;
while ($excel->getActiveSheet()->getCell('A',$i)->getValue()!="")
{
  $id= $excel->getActiveSheet()->getCell('A',$i)->getValue();
  $name= $excel->getActiveSheet()->getCell('B',$i)->getValue();
  $address= $excel->getActiveSheet()->getCell('C',$i)->getValue();
  $phone= $excel->getActiveSheet()->getCell('D',$i)->getValue();
  $age= $excel->getActiveSheet()->getCell('E',$i)->getValue();
echo"
<tr>
<td>".$id."</td>
<td>".$name."</td>
<td>".$address."</td>
<td>".$phone."</td>
<td>".$age."</td>
</tr>";
$i++;

}

?>