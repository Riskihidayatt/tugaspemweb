<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo "Welcome $name<br>";
        echo "Your email address is: $email";
    }
    ?>
</body>

</html>