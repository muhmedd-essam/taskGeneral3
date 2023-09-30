<?php
    if (isset($_POST['button'])) {
        function volve($array) {
            $length = strlen($array);
            $isPalindrome = true;
        
            for ($i = 0; $i < $length / 2; $i++) {
                if ($array[$i] !== $array[$length - $i - 1]) {
                    $isPalindrome = false;
                    break;
                }
            }
        
            if ($isPalindrome == true) {
               return "the $array is Palindrome";
            }else {
                return "the $array is not Palindrome";
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
<form method="POST" action="task7.php">
    <input type="taxt" name = "input">
    <button name = "button">click</button>
</form>
</body>
</html>