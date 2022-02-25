<?php
    $color = array('white', 'green', 'red');
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    asort($ceu);
    $some_file = file("file-lab.txt");
    $empty_array = [];
    foreach ($some_file as $file_l) {
        $pattern = "/\s/";
        $splitted = preg_split($pattern, $file_l);
        $temp = array($splitted[0] => $splitted[1]);
        if(is_null($empty_array)) {
            $empty_array = $temp;
        }else {
            $empty_array = array_merge($empty_array, $temp);
        }
    }
    $original_array = array("1", "2", "3", "4", "5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab-3</title>
</head>
<body>
    <!-- Task 1 -->
    <h3>Task 1</h3>
    <?php foreach ($color as $colorit){?>
        <?= $colorit?>
    <?php } ?>  

    <?php 
        sort($color);
        foreach ($color as $colorit) {   ?>  
            <?= "<li>$colorit</li>" ?>
        <?php } ?> 

    <!-- Task 2 -->
    <h3>Task 2</h3>
    <?php foreach ($ceu as $country=>$capitals) { 
        
        ?>
        <?= "The capital of $country is $capitals <br>"?>
    <?php } ?>

    <h3>Task 3</h3>
    <?php 
    foreach($empty_array as $key_=>$value_) { ?>   
        <?= "Key: \"$key_\" Value: \"$value_\"\n";?>
                <br>              
    <?php } ?>

    <h4>Task 4</h4>
    <p>Original Array:</p>
    <?php foreach ($original_array as $arr){?>
        <?=$arr ?>
    <?php } ?>

    <p>Array after inserting "$"</p>
    <?php
    array_splice($original_array, 3, 0, array("$"));
    foreach ($original_array as $arr){?>
        <?=$arr ?>
    <?php } ?> 
</body>
</html>