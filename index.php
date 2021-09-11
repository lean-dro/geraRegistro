<?php 

include_once("cpfs.php");
include_once("nomesAleatorios.php");
include_once ("dataRand.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/meuEstilo.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
        <div class="col-6">
            <h1>Tabela</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Nome
                        </th>
                        <th>
                            CPF
                        </th>
                        <th>
                            Nascimento
                        </th> 
                    </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i < 10; $i++) { ?>

                    <td>
                        <?php
                        criadorNome();;
                        ?>
                    </td>
                    <td>
                    <?php criadorCpf();?>
                    </td>
                    <td>
                    <?php gerarDia(); ?>
                    </td>
                </tbody>
                <?php }?>
            </table>
    </div>
    <div class="col-6 ide rounded">
        <h1 class="text-white">SQL:</h1>
        <blockquote>
            <ul class="mt-3">    
            <?php 
            for ($s=0; $s < 11; $s++) { ?> 
            <p class="text-white">
             <b class="texto">(</b>  
                <b class="laranja">'</b><?php criadorNome();?><b class="laranja">'</b>,
                <b class="laranja">'</b><?php criadorCpf();?><b class="laranja">'</b>,
                <b class="laranja">'</b><?php gerarDia();?><b class="laranja">'</b>
             <b class="texto">)</b></p>
           <?php } ?>
            <ul>
        </blockquote>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
