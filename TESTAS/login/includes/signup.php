<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <section class="main-container">
        <div class="main-wrapper-signup">
            <h2>Uzsiregistruokite</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="post">
                <input type="text" name="first" placeholder="Vardas" />
                <input type="text" name="last" placeholder="Pavarde" />
                <input type="text" name="email" placeholder="El. pastas" />
                <input type="text" name="uid" placeholder="Vartotojo vardas" />
                <input type="password" name="pwd" placeholder="Slaptazodis" />
                <button type="submit" name="submit">Registruotis</button>
            </form>
            <div class="signup-link">
                Jau turite paskyra? <a href="index.php">Prisijunkite</a>
            </div>
        </div>
    </section>
</body>
</html>