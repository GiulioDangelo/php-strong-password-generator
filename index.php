<?php 
include_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="number" name="length">
            <button type="submit" name="generate">submit</button>
        </div>

        <div class="my-2"> password: <?= $password; ?></div>

        <div class="my-2">
            consenti ripetizioni di uno o più caratteri:
            <input class="form-check-input" type="checkbox" name="repeat">
        </div>

        <div>
            <div><input type="checkbox" name="letters">lettere</div>
            <div><input type="checkbox" name="numbers">numeri</div>
            <div><input type="checkbox" name="simbols">simboli</div>
        </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>