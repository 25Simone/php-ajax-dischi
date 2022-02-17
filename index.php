<?php
include './database/discsDb.php';
include __DIR__ . '/functions/utilities.php';
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

<body id="page">
    <!-- HEADER -->
    <header class="container-fluid">
        <img id='logo' src="./assets/Spotify-Icon-Logo.svg" alt="logo spotify">
    </header>

    <!-- MAIN -->
    <main class="container">
        <div class="row">
            <!-- CARDS -->
            <?php foreach ($discs as $disc) { ?>
                <!-- CARD -->
                <?php echo "<div class='card col-2'>" ?>
                    <!-- CARD IMAGE -->
                    <div class="card-image">
                        <img src="<?php echo $disc['poster'] ?>" alt="disc cover">
                    </div>
                    <!-- CARD DATA -->
                    <div class="card-data">
                        <?php
                            echo "<h3>$discTitle</h3>";
                            echo "<p>
                                    $discAuthor
                                    <br>
                                    $discYear
                                  </p>";
                        ?>
                    </div>
                <?php echo "</div>" ?>
            <?php } ?>
        </div>
    </main>
</body>

</html>