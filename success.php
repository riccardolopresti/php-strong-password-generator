<?php

session_start();

require_once 'functions.php';
require_once 'vars.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>password generator</title>
</head>
<body>

    <div class="container p-5">
        <div class="row">
            <div class="col">

                <h1>Password Generator</h1>

                <h3>La tua password è: 
                    <span class="bg-info">
                        <?php echo getRandom($_SESSION['user_number'],$letters,$numbers,$specials) ?>
                    </span> 
                </h3>

            </div>
        </div>
    </div>
    
    

</body>
</html>