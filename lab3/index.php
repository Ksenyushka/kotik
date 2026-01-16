<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="" name="Yuta">
    <button type="submit"> Жмяк </button>
</form>
</body>
</html>

<?php
$XVI="Иван Васильевич";
$XVIII="Пётр Алексеевич";
$XIX="Николай Павлович";
if (isset($_GET['Yuta'])){
    $vek = $_GET['Yuta'];
    echo 'в '. $vek .' веке царствовал '. $$vek;
}
?>