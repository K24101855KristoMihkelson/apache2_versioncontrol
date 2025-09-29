<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisendi Vorm</title>
</head>
<body>
    <h1>Küsi kasutajalt sisendit</h1>
    <form method="post">
        Sisestage tekst: <input type="text" name="user_input" />
        <input type="submit" value="Saada" />
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_input = $_POST['user_input'];
        file_put_contents("sisendid.txt", $user_input . PHP_EOL, FILE_APPEND);
        echo "<p>Teie sisend: $user_input on salvestatud faili sisendid.txt</p>";
    }
    ?>
</body>
</html>
