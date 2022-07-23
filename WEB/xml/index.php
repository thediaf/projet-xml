<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <?php
        include "examen.php";
        $examen = new SimpleXMLElement($xmlstr);

         echo print_r($examen);
    ?>
</body>
</html>