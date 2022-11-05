<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Upload PHP e JS</title>
</head>

<body>
    <div class="container">
        <h1> Upload de Arquivos</h1>

        <!-- Formulário de envio -->
        <form class="form" id="form" enctype="multipart/form-data">
            <label for='arquivo'>Selecionar um arquivo </label>
            <input type="file" id='arquivo' name="arquivo" required />
            <button class="btn" type="submit">Enviar</button>
        </form>
        </br>
        <h3>Arquivos enviados</h3>
        <!-- listar arquivo enviados -->
        <?php
        $pasta = "./src/uploads/";
        $diretorio = dir($pasta);
        while (($arquivo = $diretorio->read()) !== false) {

            if ($arquivo != '.' && $arquivo != '..') {
        ?>
                <div class="list">
                    <img class="img" src="./src/uploads/<?= $arquivo ?>" width="50" height="50" />
                    <span class="name"> <?= $arquivo ?></span>
                </div>
        <?php
            }
        }
        $diretorio->close();

        ?>
    </div>
</body>
<script src="./assets/js/upload.js"></script>

</html>