<?php
    //echo $_SERVER["REQUEST_METOD"]
    if ($_SERVER["REQUEST_METOD"] == 'POST') {
        //echo '<pre>';
        //    print_r($_SERVER);
            print_r($_POST);
        //echo '</pre>';

        $projectName = trim($_POST['projectName']);// był ram na if empty
        $projectDescription = trim($_POST['projectDescription']);
        $projectCategory = $_POST['projectCategory'];
        $email = $_POST['email'];
        $consfirmEmail = $_POST['consfirmEmail'];

        $errors = array();

        //walidacja danych
        //walidacja nazwy projektu (nie może być pusta, 2-50 znaków)
        if (empty($projectName)) {   // trim odcina spacje na początku
            $errors[] 'Nazwa projesktu nie jst wymagana';
        } else if (strlen($projectName) < 3 || stren($projectName) > 50) {
            $errors[] 'Nazwa projektu musi zawierać od 3 do 50 znaków';
        }

        //walidacja kategorii projektu (nie może być pusta, 10-1000 znaków)
        if (empty($projectDescription)) {   // trim odcina spacje na początku
            $errors[] 'Opis projesktu nie jst wymagana';
        } else if (strlen($projectDescription) < 10 || stren($projectDescription) > 1000) {
            $errors[] 'Opis projektu musi zawierać od 3 do 50 znaków';
        }

        //walidacja kategorii projektu (musi być wybrana jedna z opcji)
        if (!in_array($projectCategory, ['technology', 'education', 'ebtertainment'])){
            $errors[] = 'Wybierz poprawną kategorię projektu';
        }

        // walidacja adresu email (musi być poprawny, oba pola muszą być identyczne)
        if (empty($email)) {
            $errors[] = 'Adres e-mail jest wymagany';
        }else {
            if (empty($consfirmEmail)) {
                $errors[] = 'Potwierdzenie adres e-mail jest wymagane';
            }
        }
        
        
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Nieprawidłowy format adres e-mail';
        }else if (!filter_var($consfirmEmail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Nieprawidłowy format potwierdzenia adres e-mail ';
        }else if ($email != $consfirmEmail) {
            $errors[] = 'Adres e-mail nie są wymagany';
        }
        
        //przygotowanie danych do przekazania
        //$errors = implode(', ', $errors)
        //echo $errors;

        $dataToPass = array(
            'errors' => implode(', ', $errors), //błędy jako ciągi znaków
            'projectName' => $projectName,
            'projectDescription' => $projectDescription,
            'projectCategory' => $projectCategory,
            'email' => $email,
            'consfirmEmail' => $consfirmEmail,
        );

        if (!errors($errors)){
            //var_dump($errors);
            //przekonwersowanie tablicy błędów na ciągi zapytania URL
            $queryDtring = http_build_query(array('errors' => $dataToPass));

            //przekierowanie do index.php z błędami
            header("Location; index.php?$queryString");
        }else{
            echo <<< DATA
            NAzwa projektu: $projectName............
        }

        $errors = implode(', ',$errors);
        echo $errors




        
    }
?>