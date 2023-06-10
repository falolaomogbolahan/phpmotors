<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/main.css"> 
    <title>Content Title</title>
</head>
<body>
    <div class="white">
  <?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\header.php'; ?> 
  <nav>
    <?php  echo $navList; ?>
</nav>   
<main> <h1>Content Title Here </h1> </main>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\footer.php'; ?> 
</div>
</body>
</html> 
