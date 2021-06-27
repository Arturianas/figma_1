<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    

    <!--<div class="login">
        <form>
            <input type="text" name="uid" placeholder="Vartotojo vardas" />
            <input type="password" name="pwd" placeholder="Slaptazodis" />
            <button type="submit" name="submit">Prisijungti</button>
        </form>
        <div class="signup-link">
            Nesate narys? <a href="signup.html">Uzsiregistruokite</a>
        </div>
    </div>*/--

    <div class="login">
        <form>

            <div class="username">
                <input type="text" name="uid" placeholder="Vartotojo vardas" />
            </div>

            <div class="password">
                <input type="password" name="pwd" placeholder="Slaptazodis" />
            </div>
            
            <div class="prisijungti">
                <button type="submit" name="submit">Prisijungti</button>
            </div>
        </form>
        <div class="signup-link">
            Nesate narys? <a href="signup.html">Uzsiregistruokite</a>
        </div>
    </div>-->

    <div class="login">
        <h2>Prisijunkite</h2>
        <form>
            <input type="text" name="uid" placeholder="Vartotojo vardas/El. pastas">
            <input type="password" name="pwd" placeholder="Slaptazodis">
            <button type="submit" name="submit">Prisijungti</button>
        </form>
        <div class="signup-link">
            Nesate narys? <a href="signup.php">Uzsiregistruokite</a>
        </div>

            <?php
                if(isset($_SESSION['u_id'])) {
                    echo "<p>Prisijungete sekmingai</p>";
                }
            ?>
    </div>

            

    

</body>
</html>