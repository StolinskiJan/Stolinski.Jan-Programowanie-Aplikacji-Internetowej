<form action="" method="post">
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br><br>

    <!-- Miasto -->
    <?php
        $cities = (new UserController)->getCitties();
    ?>
    <label for="city">Miasto:</label>
    <select name="city" id="city">
        <?php
            foreach (cities as $city):
                # code...
            endforeach;
        ?>

    </select><br><br>

    <label for="birthday">Data urodzenia:</label>
    <input type="date" name="birthday" id="birthday"><br><br>

    <input type="submit" value="Zarejestruj się"><br><br>
</form>