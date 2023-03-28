<?php
if ($_POST) {
  print_r($_FILES['getFile']['name']); //Get the name of the file
  $imgFile = $_FILES['getFile']['name'];

  move_uploaded_file($_FILES['getFile']['tmp_name'], $_FILES['getFile']['name']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOAD FILE</title>
</head>

<body>

  <form enctype="multipart/form-data" method="post">
    <input type="file" name="getFile"><br>
    <input type="submit" name="enviar" value="Send">
  </form>
  <!-- FILE VISUALIZATION -->
  <?php if ($_FILES) { ?>
    <embed src="./<?php echo $imgFile ?>" type="<?php echo $_FILES['getFile']['type'] ?>" width="100%" height="600px" />
  <?php } ?>

</body>

</html>