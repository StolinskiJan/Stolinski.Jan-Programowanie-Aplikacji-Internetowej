<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolory</title>
</head>
<body>
<!--    <form>
        <input type="color" name="color" id="color"><br>
        <input type="submit" value="Zatwierdż">
    </form> -->
    <?php
    if (isset($_GET['color'])){
        echo "Kolor: $_GET[color]";
    }else{
        echo <<< COLORFORM
        <form>
        <input type="color" name="color" id="color"><br>
        <input type="submit" value="Zatwierdż">
        </form>
COLORFORM;
    }
    ?>
</body>
</html>