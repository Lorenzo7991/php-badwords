<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/favicon.ico" type="img/ico">
    <title>Badword Result</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="container bg-black">
    <?php
    // Ottengo il paragrafo e la parola da censurare dall'input del form
    $paragraph = $_POST["paragraph"];
    $word = $_POST["word"];

    // Stampo il paragrafo originale e conto i caratteri
    echo "<p class='text-success text-center mt-5 fs-5'>Paragrafo:</p>";
    echo "<p class='text-white px-5'>$paragraph</p>";
    $original_character_count = strlen($paragraph);

    // Sostituisco la parola da censurare con ***
    $censored_paragraph = str_ireplace($word, '***', $paragraph);

    // Stampo il paragrafo censurato e conto i caratteri
    echo "<p class='text-success text-center mt-5 fs-5'>Paragrafo censurato:</p>";
    echo "<p class='text-white px-5'>$censored_paragraph</p>";
    // Calcolo la lunghezza del paragrafo censurato escludendo gli asterischi
    $censored_character_count = strlen(str_replace('***', '', $censored_paragraph));

    // Stampo il conteggio dei caratteri per entrambi i paragrafi
    echo "<p class='text-success text-center mt-5 fs-5'>Lunghezza del paragrafo originale: $original_character_count caratteri</p>";
    echo "<p class='text-success text-center fs-5'>Lunghezza del paragrafo censurato: $censored_character_count caratteri</p>";
    ?>
</body>


</html>