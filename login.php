<!DOCTYPE html>
<html lang="en">
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
    <h1 id="Home">Login Page</h1>
</header>

<main class="flex">
    <form method="post" action="admin.php">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">

        <label for="password">Votre mot de passe</label>
        <input type="text" name="password" id="password">

        <button type="submit">submit</button>
    </form>
</main>
</body>
</html>