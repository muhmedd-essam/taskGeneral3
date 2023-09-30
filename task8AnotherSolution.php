<?php
    if (isset($_POST['button'])) {
        function volve($array) {
            if ($array <= 1) {
                return 1;
            } else {
                return $array * volve($array - 1);
            }

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
<form method="POST" action="task8AnotherSolution.php">
    <input type="number" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>