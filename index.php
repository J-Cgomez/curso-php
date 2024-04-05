<?php 
const API_URL = "https://whenisthenextmcufilm.com/api";
//inicializar una sesion de curl; ch = curlhandle
$ch = curl_init(API_URL);

#Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejectura la peticion y
guardamos el resultado */

$result = curl_exec($ch);

$data = json_decode($result, true);

curl_close($ch);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La proxima pelicula de MARVEL</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</head>
<body>

<main>

<h2>LA PROXIMA PELICULA DE MARVEL</h2>
    <section>

    

    <img src="<?= $data["poster_url"]; ?>" width="300px" alt="El poster de <?= $data["title"] ?>"
    style="border-radius: 16px;"
    >
        
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> Se estrena en <?= $data["days_until"]; ?> días!</h3>

        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>

        <p>La siguiente es: <?= $data["following_production"]["title"]; ?> </p>

        
    </hgroup>

    <footer>
    <p>Made with 💟 <a target="_blank" rel="noopener noreferrer" href="https://github.com/J-Cgomez">JC_Gomez</a></p>

    <p>El jhona me la pela :V</p>
    </footer>
    
</main>
    
</body>
</html>










<style>
    :root{
        color-scheme: ligth dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    footer{
        display: grid;
        place-content: center;
    }

    section{
        display:flex;
        justify-content: center;
        text-align: center;

    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;

    }
</style>