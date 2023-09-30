<?php
    if (isset($_POST['button'])) {
        function reseve($inputUser) {
            $inputUserStr = strval($inputUser);
            $length = strlen($inputUserStr);
            $array = [];
            
            for ($i = 0; $i < $length; $i++) {
                $array[] = $inputUserStr[$i];
            }

            $count = 0;
            
            foreach($array as $x){
                $count++;
            }

            $array2 = [];

            for ($i = $count - 1; $i >=0 ; $i--) {
                $array2[] = $array[$i];
            }
            $theReverse = implode("", $array2);
            return $theReverse;      
            
        }
        
        $inputUser = $_POST['input'];
        $x = reseve($inputUser);
        print_r($x);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="task1.php">
    <input type="number" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>