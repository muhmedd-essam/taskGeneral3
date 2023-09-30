<?php
    if (isset($_POST['button'])) {
        function volve($array) {
            $words = explode(' ', $array);
            foreach ($words as $word) {
                $firstChar = substr($word, 0, 1);
                $remainingChars = substr($word, 1);
                $capitalizedWord = strtoupper($firstChar) . strtolower($remainingChars);
                $capitalizedWords[] = $capitalizedWord;
            }
    
            return $capitalizedWords;
            


    }
        $inputUser = $_POST['input'];
        $x =volve($inputUser);
        $final = implode(" ", $x);
        echo $final;

        
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="task4.php">
    <input type="taxt" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>