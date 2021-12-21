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
    <div class="file">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> <label for="file">Choose a Photo</label> </td>
                    <td> <input type="file" name="photo" id="photo"></td>
                </tr>
                <tr>
                    <td>Enter folder name</td>
                    <td> <input type="text" name="text"></td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Save" /> </td>
                </tr>
            </table>
        </form>
		<?php
       if(isset($_REQUEST['Message'])){
         $msg = $_REQUEST['Message'];
         echo "<p>$msg</p>";
       }
      ?>
    </div>


</body>
</html>