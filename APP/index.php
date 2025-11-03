<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __DIR__ . "/model/Usuario.php";
        require_once __DIR__ . "/others/Connection.php";
        $user = new Usuario(1, "Breno", "breno123", "meuemailtop@gmail.com","2006-07-02");
        
        $coon = new Connection();
        if($coon){
            var_dump($coon);
            echo "Sucesso";
        } else {
            echo "Deu ruim";
        }
    ?>
</body>
</html>