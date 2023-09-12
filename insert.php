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
        <form class="form-insert" method="post" @submit.prevent="postData">
            <div class="input-group">
                <label for="title">Titolo:</label>
                <input type="text" name="title" id="title" v-model="formData.title">
            </div>
            <div class="input-group">
                <label for="author">Artista:</label>
                <input type="text" name="author" id="author" v-model="formData.author">
            </div>
            <div class="input-group">
                <label for="year">Anno di pubblicazione:</label>
                <input type="text" name="year" id="year" v-model="formData.year">
            </div>
            <div class="input-group">
                <label for="poster">Percorso immagine album:</label>
                <input type="text" name="poster" id="poster" v-model="formData.poster">
            </div>
            <div class="input-group">
                <label for="genre">Genere:</label>
                <input type="text" name="genre" id="genre" v-model="formData.genre">
            </div>
            <div class="input-group">
                <button class="btn" type="submit">Aggiungi</button>
            </div>
        </form>
    </div>

    <script src="js/insert.js"></script>
</body>

</html>