<?php
include "./function/utilities.php";
include './database/discsDb.php';
if(key_exists('genre', $_GET) && !empty($_GET['genre'])) {
    $selectedGenre = $_GET['genre'];
} else {
    $selectedGenre = 'all';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dischi</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="page">
        <!-- HEADER -->
        <header class="container-fluid">
            <img id='logo' src="./assets/Spotify-Icon-Logo.svg" alt="logo spotify">
        </header>

        <!-- MAIN -->
        <main class="container">
            <div class="row">
                <!-- CARDS -->
                <?php printCards($discs, $selectedGenre); ?>
            </div>
        </main>
    </div>
</body>

</html>