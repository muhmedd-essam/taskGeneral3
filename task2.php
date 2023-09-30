<?php
    if (isset($_POST['button'])) {
        function quickSort($array) {
            $count = 0;
            foreach($array as $x){
                $count++;
            }

            // use Quick sort

            if ($count <= 1) {
                return $array;
            }else {
                $pivot = $array[0];
                $less = [];
                $greater = [];
                for ($i=1; $i < $count; $i++) { 
                    if ($array[$i] <= $pivot) {
                        $less[] = $array[$i];
                        
                    }else {
                        $greater[] = $array[$i];
                    }

                }
                return array_merge(quickSort($less), array($pivot), quickSort($greater));
            }



                
            
        }
        
        $inputUser = $_POST['input'];
        $inputUserStr = strval($inputUser);
        $length = strlen($inputUserStr);
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[] = $inputUserStr[$i];
        }
        $x = quickSort($array);
        $theFinal = implode("", $x); 
        echo $theFinal;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="task2.php">
    <input type="taxt" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>