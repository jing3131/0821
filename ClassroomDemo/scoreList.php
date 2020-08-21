<?php

$scoreList = Array(85,93,26,87,71);     // = [85,93,...];
// $obj = (object) ["firstName" => "GunDob", "lastName" => "Chin"];        // 將陣列轉成物件
$viewModel = [];
foreach($scoreList as $score){
    $student = (object) ["score" => $score, "style" => "pass"];
    if($score <60){
        $student->style = "fail";
    }
    $viewModel[] = $student;
}

?>

<style>
    .fail{
        color: red;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($viewModel as $student) { ?>
        <li class=<?= $student->style ?>><?= $student->score ?></li>
    <?php } ?>
    </ul>
</body>
</html>