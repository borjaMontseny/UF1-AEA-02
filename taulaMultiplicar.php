<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borja M07 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<body>
    <div class="container">

        <?php $numAleatori = rand(1, 10); ?>

        <div class="alert alert-primary" role="alert">
            <h1>Taula de multiplicar de
                <?php echo $numAleatori; ?>
            </h1>
        </div>

        <table>

            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<tr>';
                echo '<td>' . $numAleatori . ' x ' . $i . ' = ' . '</td>';
                echo '<td>' . ($numAleatori * $i) . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>