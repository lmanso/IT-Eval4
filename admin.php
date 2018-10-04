<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./templates/style.css">
    <script type="text/javascript" src="script.js" async></script>
    <title>Love Books</title>
</head>
<body>
<header class="flex">
    <h1>Admin page</h1>
    <?php
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    ?>
</header>
<main>
    <section class='flex flex-col' >
    <div class='flex flex-col justify-around'>
        <p>
            <?php
                if ($_SESSION['password'] == "0000" ) {
                    echo "Bonjour, " . $_SESSION['login'];
                } else {
                    echo "<a  href='index.php'> Vous avez saisie le mauvais mdp </a>";
                }
            ?>
        </p>
    </div>

        <div class="form flex flex-col">
            <p>Quelle section souhaitez vous enlever ?</p>
        <form action="index.php" method="post">
            <input type="checkbox" name="Adisable" value="Adisable" />About<br>
            <input type="checkbox" name="Rdisable" value="Rdisable" />Reading<br>
            <input type="checkbox" name="Cdisable" value="Cdisable" />Contact<br>
        <input type="submit" value="Save" />
    </form>
        </div>
    </section>
</main>
<footer>
</footer>
</body>
</html>
