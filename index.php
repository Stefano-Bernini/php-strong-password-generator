<?php
    if(isset($_GET['psw-length']) && $_GET['psw-length'] != '' ){
        function randomPasswordGen() {
            $pswLength = $_GET['psw-length'];

            $allowedChar = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = [];
            $charLength = strlen($allowedChar) -1;
            for ($i = 0; $i < $pswLength; $i++) {
                $n = rand(0, $charLength);
                $pass[] = $allowedChar[$n];
            }
            return implode($pass);
        }
   
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <form class="d-flex  " action="index.php" method="GET">
                    <div class="form-group col-3 ">
                        <label for="inputPassword2" class="sr-only" >Inserisci la lunghezza della password:</label>
                        <input name="psw-length" type="number" min=5 class="form-control" id="inputPassword2">
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" class="btn btn-primary ms-3 align-self-end ">Invia</button>
                        <button class="btn btn-danger ms-3 align-self-end">Annulla</button>
                    </div>
                </form>
                <div>
                <?php if(isset($_GET['psw-length']) && $_GET['psw-length'] != ''){ ?>
                    <span><?php echo randomPasswordGen()?></span>
                <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>