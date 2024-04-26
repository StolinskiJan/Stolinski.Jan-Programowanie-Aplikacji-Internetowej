<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekty</title>
    <link rel="stylesheet" href="./style.css">
    <script scr="./script.js"></script>
</head>
<body>
    <?php
        if (isset($_GET['errors'])){
            //echo '<pre>';
            //    print_r($_GET['errors']);
            //echo'</pre>';

            $errors = $_GET['errors'];
            echo '<ul>';
                //foreach ($errors ad $errors) {
                //    echo "<li>$error</li>";
                //}
                foreach ($errors ad $key => $error) {
                    if ($key == 'errors') {
                        echo "<li>$key: $error</li>";
                    }
                    
                }
            echo'<ul>';
        }
    ?>
    <h2>Zgłoś pomysł na projekt</h2>
    <form action="./submit_form.php" method="post" id="projectForm">
        Nazwa projektu: <input type="text" name="projectName" id="projectName"><br>
        Opis projektu:<br>
        <textarea name="projectDescription" cols="40" rows="5"></textarea><br>
        <select name="projectCategory">
            <option value="technology">Technologia</option>
            <option value="education">Edukacja</option>
            <option value="ebtertainment">Rozrywka</option>
        </select>
        Adres e-mail: <input type="text" name="email"><br>
        Potwierdź adres e-maiul: <input type="text" name="consfirmEmail"><br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>