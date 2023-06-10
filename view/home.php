<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "/phpmotors/css/main.css">
    <title>Home | PHP Motors</title>
</head>
<body>
    <div class="white">
    <!--<header>--><?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\header.php'; ?>
<nav>
 <?php 
    echo $navList;
    ?> 
</nav>

    <main>
            <section>
                <h1>Welcome to PHP Motors!</h1>
                <div class = "container">
                <h2>DMC Delorean</h2>
                    <p>
                        3 Cup holders<br>
                        Superman doors<br>
                        Fuzzy dice!<br>
                    </p>
                    <a href = "#" class = "button">
                        Own Today</a>
<img src="/phpmotors/images/delorean.jpg" alt="Delorean">
                </div>
            </section>
            <div class="allitems">
            <section>
                <h2>DMC Delorean Reviews</h2>
                <ul>
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly!" (5/5)</li>
                    <li>"The most futuristic ride of our day." (4/5)</li>
                    <li>"80's livin and I love it!" (5/5)</li>
                </ul>
            </section>
            <section>
                <h2>Delorean Upgrades</h2>
                <div class="upgrade">
                    <div class = "item">
                        <img src = "/phpmotors/images/upgrades/flux-cap.png" alt = "Flux Capacitor">
                        <a href = "#">Flux Capacitor</a> </div>
                    
                    <div class = "item">
                        <img src = "/phpmotors/images/upgrades/flame.jpg" alt = "Flame Decals">
                        <a href = "#">Flame Decals</a> </div>
                    <div class = "item">
                        <img src = "/phpmotors/images/upgrades/bumper_sticker.jpg" alt = "Bumper Sticker">
                        <a href = "#">Bumper Sticker</a>
                    </div>
                    <div class = "item">
                        <img src = "/phpmotors/images/upgrades/hub-cap.jpg" alt = "Hub Caps">
                        <a href = "#">Hub Caps</a>
                    </div>
                </div>
            </section>
            </div>
</main>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\footer.php'; ?>
</div>
</body>  
</html>

