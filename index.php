<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>  
        <title></title>


    </head>
    <body>
        <fieldset>

            <form action="listaSequencial.php" method="post"> 
                <h3>Exercicio Estrutura sequencial <h3/><br />
                    <div class="form-group col-md-3" id="ex3">
                        <p> Exercicio 3 "Soma"<br /><br />
                            <label for="n1">Digite o primeiro número</label>
                            <input type="text" name="n1" class="form-control" /><br />

                            <label for="n2">Digite o segundo número</label>
                            <input type="text" name="n2" class="form-control" /><br />

                            <input name="botao" type="submit" class="btn btn-block" value="OK" />
                    </div>
            </form>    

            <form action="listaSequencial.php" method="post">
                <div class="form-group col-md-3" id="ex4">
                    <p> Exercicio 4 "Média"<br /><br />
                        
                </div>
            </form>    

        </fieldset>
    </body>
</html>
