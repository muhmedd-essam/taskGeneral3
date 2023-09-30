<?php
    if (isset($_POST['button'])) {
        function volve($array) {
            $count= 1;
            for ($i= $array; $i > 0; $i--) { 
                $count *= $i;
                $array -= 1;
            }
            return $count;

    }
        $inputUser = $_POST['input'];
        $x =volve($inputUser);
        echo $x;

        
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="task8.php">
    <input type="number" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>