<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acquisti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php
session_start();
$_SERVER["REQUEST_METHOD"] == "POST" ? $dati = $_POST : $dati = $_GET;
$array = array("ortofrutta" => ["ortofrutta - 0", "ortofrutta - 1"], "macelleria" => ["macelleria - 0", "macelleria - 1"], "salumeria" => ["salumeria - 0", "salumeria - 1"]);
$keys = array_keys($array);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Supermercato</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label for="nome">Nome</label>
            <input class="form-control" name="nome" id="nome">
        </div>
        <div class="col-4">
            <label for="cognome">Cognome</label>
            <input class="form-control" name="cognome" id="cognome">
        </div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
        for ($i = 0; $i < count($keys); $i++) {
            echo '<div class="row">
                        <div class="col">
                            <h2>' . $keys[$i] . '</h2>
                        </div>
                      </div>';
            echo '<div class="row">
                        <div class="col-4">
                           <select class="form-select" name=' . $keys[$i] . '>';
            foreach ($array[$keys[$i]] as $key) {
                echo '<option value="' . $key . '">' . $key . '</option>';
            }
            echo '</select>
                         </div>
                      </div>';
        }
        ?>
    </form>
</div>
</body>

</html>