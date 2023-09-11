<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <header>
            <nav>
                <div class="logo">
                    <img src="img/logo.svg" alt="logo">
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="card" v-for="cd in cdList">
                <div class="img-container">
                    <img :src="cd.poster">
                </div>
                <div class="info">
                    <h3> {{ cd.title }} </h3>
                    <div style="margin: 8px 0;"> {{ cd.author }} </div>
                    <div class="date"> {{ cd.year }} </div>
                    <div style="margin: 5px 0;"> {{ cd.genre }} </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>