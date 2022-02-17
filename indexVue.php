<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="page">
            <!-- HEADER -->
            <header class="container-fluid">
                <img id='logo' src="./assets/Spotify-Icon-Logo.svg" alt="logo spotify">
            </header>
            
            <!-- MAIN -->
            <main class="container">
                <div class="row">
                    <!-- CARDS -->
                    <div class="card col-2" v-for='(disc, index) in discsList' :key='index'>
                        <!-- CARD IMAGE -->
                        <div class="card-image">
                            <img :src="disc.poster" alt='disk cover'>
                        </div>
                        <!-- CARD DATA -->
                        <div class="card-data">
                            <h3>{{disc.title}}</h3>
                            <p>
                                {{disc.author}}
                                <br>
                                {{disc.year}}
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>