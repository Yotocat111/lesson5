<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson</title>
</head>
<body>
   <form action="admin.php" method="POST">
   <fieldset>
   <legend>Сколько лап у собаки?</legend>
   <label><input type="radio" name="Сколько лап у собаки?" value="2">2</label>
   <label><input type="radio" name="Сколько лап у собаки?" value="3">3</label>
   <label><input type="radio" name="Сколько лап у собаки?" value="4">4</label>
   <label><input type="radio" name="Сколько лап у собаки?" value="5">5</label>
   </fieldset>
   <fieldset>
   <legend>Сколько планет в солнечной системе?</legend>
   <label><input type="radio" name="Сколько планет в солнечной системе?" value="12">12</label>
   <label><input type="radio" name="Сколько планет в солнечной системе?" value="8">8</label>
   <label><input type="radio" name="Сколько планет в солнечной системе?" value="1">1</label>
   <label><input type="radio" name="Сколько планет в солнечной системе?" value="9">9</label>
   </fieldset>
   <input type="submit" value="Отправить">
   </form> 


   <?php
$vote = $_POST;
$filename = 'data.json';
$json = file_put_contents($filename, json_encode($vote), FILE_APPEND);
?>
</body>
</html>