<?php
    include('./dados/dados.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <title>Mochi</title>
</head>

<body>
    <div class="container">
        <a href="./index.php?p=produtos">
        <img src="./images/logo.png" alt="Logo marca" style="width: 200px;" class="logo"></img>
        </a>
        <div class="menu">
            <div class="menu-container">
                <header> 
                    <nav class="barra-menu">
                        <ul>
                           <li><a href="./index.php?p=produtos">Nossos Produtos</a></li><!--
                        --><li><a href="./index.php?p=quem_somos">Quem Somos</a></li><!--
                        --><li><a href="./index.php?p=contato">Contato</a></li><!--
                        --><li><a href="./index.php?p=localizacao">Localização</a></li>
                        </ul>               
                    </nav> 
                         
                </header>
            </div>       
        </div>       
        <div>             
            <div>
                <main>
                    <?php
                        $valor = @$_GET['p'];
                        switch ($valor) {
                            case "quem_somos": require_once './pages/quem_somos.php'; break;
                            case "contato": require_once './pages/contato.php'; break;
                            case "localizacao": require_once './pages/localizacao.php'; break;
                            case "produtos": require_once './pages/produtos.php'; break;
                            case "doce0": $d=0; require_once './pages/infos.php'; break;
                            case "doce1": $d=1; require_once './pages/infos.php'; break;
                            case "doce2": $d=2; require_once './pages/infos.php'; break;
                            case "doce3": $d=3; require_once './pages/infos.php'; break;
                            default: require_once './pages/produtos.php'; break;
                        }
                    ?>
                </main>
            </div>
        </div>       
    </div> 
    <div class="rodape">
        <p>Paulo Ricardo Dos Santos<br>RA: 20024615-5</p>
    </div>
</body>
</html>