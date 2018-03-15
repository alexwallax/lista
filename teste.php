
<?php 
$mensagem = "";
if(isset($_GET["mensagem"]) && $_GET["mensagem"] == "nao") {
    $mensagem = "Opção ERRADA";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Lista</title>
    </head>
    <body>
         <div><?= $mensagem ?></div>
        <fieldset>
            <label>Eu sou bonito?</label>
            <form action="testeFor.php" method="post">

                <br />
                <label>
                    <input type="radio" value="sim" name="escolha" checked>Sim
                </label>
                <label>
                    <input type="radio" value="nao" name="escolha">Não
                </label>           
                <br />
               
                <input type="submit" value="Responder">

            </form>    

        </fieldset>


    </body>
</html>
------------------------------------------------------
<?php
/*
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) { //vai pular de 2 em 2
        echo "Entrando no laço $i <br>";
    }
}

$n = 5;
while ($n < 20) {
    echo "O valor de n é $n <br>";
    $n++;
}
  
 */

$escolha = $_POST["escolha"]; 

if($escolha == "sim") {
    echo "Parabens";
} else {
    //enviar uma mensagem para tela no php
    header("location:testeConhecimento.php?mensagem=nao"); //redirecionamento
}
--------------------------------------------------------------

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Olá mundo!!!</title>
    </head>
    <body>
        <?= "olá mundo!!!"; ?>
        <br>
        <?php
            $nome = "Jose"; 
            $resultado = 2 + 5;
        ?>
        <?php
            echo "bem vindo $nome $resultado";
        ?>
    </body>
</html>

