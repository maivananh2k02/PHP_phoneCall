<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>
        <h1>Kiem tra so dien thoai</h1>
        <textarea cols="50px" rows="15px" name="input"></textarea><br>
        <input type="submit" value="gui">
        <br>
    </label>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $viettel=[];
    $vinaPhone=[];
    $mobiPhone=[];
    $input = explode(',', $_REQUEST["input"]);
    foreach ($input as $value) {
        $str = str_split($value);
        $result = substr($value, 0, 2);
        if (count($str) != 10) {
            echo 'ban da nhap sai';
            break;
        }
        if ($result == '09' || $result == '03') {
            array_push($viettel,$value);
        }
        if ($result == '01') {
            array_push($mobiPhone,$value);
        }
        if ($result == '08') {
            array_push($vinaPhone,$value);
        }
    }
}
echo ' viettel '.implode(',', array: $viettel);
echo '<br>';
echo 'mobiPhone'.implode(',',$mobiPhone);
echo '<br>';
echo 'vinaPhone '.implode(',',$vinaPhone);
?>
