<!--ALl code made by Ryan Costa-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="phpform1.css">
    <title>Resultado</title>
</head>
<body>
    <?php
    //variables
    $name = $_POST['name'];
    $age = $_POST['age'];

    //message depending on the age
    switch ($age){
        case ($age >= 0.1 && $age <= 1):
            $agemsg = "Bebê";
            $ageimg = "babyimg.jpg";
            $agealt = "bebê";
        break;
        case ($age >= 2 && $age < 12):
            $agemsg = "Criança";
            $ageimg = "kidimg.jpg";
            $agealt = "criança";
            break;
        case ($age >= 12 && $age < 18): 
            $agemsg = "Adolescente";
            $ageimg = "adolescente.jpg";
            $agealt = "adolescente";
            break;
        case ($age >= 18 && $age < 59):
            $agemsg = "Adulto";
            $ageimg = "adulto.jpg";
            $agealt = "adulto";
            break;
        case ($age >=60 && $age <=119): 
            $agemsg = "Idoso";
            $ageimg = "idosoimg.jpg";
            $agealt = "idoso";
            break;
        case ($age >119 ): 
            $agemsg = "morto";
            $ageimg = "morto.jpg";
            $agealt = "cova";
            break;
        default: 
            $agemsg = "feto";
            $ageimg = "feto.jpg";
            $agealt = "feto";      
    }
    ?>
    <h2>Você é um</h2>
    <h1 class="agemsg">
        <?php echo "$agemsg" ?>
    </h1>
    <figure>
        <?php
        //display image
        echo "<img src='$ageimg' alt='$agealt'/>";
        ?>
    </figure>
    <?php
    //variables
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $imc = $weight / $height **2;
    
    //message depending on the imc
    switch ($imc){
        case ($imc >= 1 &&$imc < 18.5):
            $imcmsg = "Abaixo do peso";
            $imcimg = "abaixodopeso.jpg";
            $imcalt = "esqueleto";
            break;
        case ($imc >= 18.5 && $imc < 24.9):
            $imcmsg = "Peso ideal";
            $imcimg = "pesoideal.jpg";
            $imcalt = "doutora feliz";
            break;
        case ($imc >= 25 && $imc <= 29.9):
            $imcmsg = "Sobrepeso";
            $imcimg = "sobrepeso.jpg";
            $imcalt = "barriga de chopp";
            break;
        case ($imc >= 30 && $imc <= 34.9):
            $imcmsg = "Obesidade grau I";
            $imcimg = "obesidade1.jpg";
            $imcalt = "gordox";
            break;
        case ($imc >= 35 && $imc <= 39.9):
            $imcmsg = "Obesidade grau II";
            $imcimg = "obesidade2.jpg";
            $imcalt = "pessoa rindo da comida";
            break;
        case ($imc >= 40):
            $imcmsg = "Obesidade grau III (vai pro médico pf)";
            $imcimg = "obesidade3.jpg";
            $imcalt = "pessoa no médico";
            break;
        default:
            $imcmsg = "Você não existe";
            $imcimg = "fantasma.jpg";
            $imcalt = "fantasma";
    }   
    
    //show just 4 characters
    if(strlen($imc) > 4){
     $nimc = substr($imc, 0, 4);
    } else{
     $nimc= $imc;
    }
    ?>
    <h2>Seu IMC é</h2>
    <h1 class="agemsg">
        <?php echo "$nimc ($imcmsg)" ?>
    </h1>
    <figure>
        <?php
        //display image
        echo "<img src='$imcimg' alt='$imcalt'/>";
        ?>
    </figure>
</body>
</html>
