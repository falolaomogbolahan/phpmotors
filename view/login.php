<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "/phpmotors/css/main.css">
    <title>Login | PHP Motors</title>
</head>
<body>
    <div class="white">
    <!--<header>--><?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\header.php'; ?>
<nav>
<?php //include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\nav.php'; 
    echo $navList; ?>
</nav>
<main>
<form method="post" action="#">
    <fieldset>
        <legend>Log in</legend>
        <label for="email">Email: <input type="email" name="email" id="email" placeholder="name@example.com" required></label><br>
        <label for="password">Password:
            <input type="password" name="password" id="password" placeholder="Password" required>
        </label><br>
        <button>Login</button>
        <a href="../accounts/index.php/?action=register">Not a member yet?</a>
    </fieldset>
        </form>
        
</main>
<?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\footer.php'; ?>
</div>
</body>  
</html>