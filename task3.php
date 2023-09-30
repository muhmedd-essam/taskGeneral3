<?php
    if (isset($_POST['button'])) {
        function volve($array) {
        $vo = array("A", "O", "E", "I", "U");
        $upperInput = strtoupper($array);
        $splitInputArray = str_split($upperInput);
        $count=0;
        foreach ($splitInputArray as $X) {
            if (in_array($X, $vo)) {
                $count++;
            }
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
<form method="POST" action="task3.php">
    <input type="taxt" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>