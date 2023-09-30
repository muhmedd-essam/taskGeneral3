<?php
    if (isset($_POST['button'])) {
        function volve($array) {
            $numbers = explode(',', $array);
            $count = 0;
            foreach($numbers as $x){
                $count++;
            }
            $largeNumber=$numbers[0];
            for ($i=1; $i < $count ; $i++) { 
                if ($numbers[$i]>$largeNumber) {
                    $largeNumber=$numbers[$i];
                }

            }
            
            return $largeNumber;         


    }
        $inputUser = $_POST['input'];
        $x =volve($inputUser);
        
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
<form method="POST" action="task5.php">
    <input type="taxt" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>