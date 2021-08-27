<head>
    <link rel="stylesheet" href="css/all.css">
</head>

<div>
<h2>  Produtos</h2>
    <div class="container-itens">
        <div class="menu-itens">
            <?php for($i=0; $i<4; $i++) { ?>
                    <div class="menu-individual">
                        <div>
                        <img class="imagens-produtos" src="<?=$produtos[$i]["foto"]?>" alt="<?=$produtos[$i]["titulo"];?>">
                            <div class="menu-descrição">
                                <h4 class="titulo-produto"><?=$produtos[$i]["titulo"];?></h4>
                                <p><?=$produtos[$i]["info"];?></p>
                                <a class="mais-info" href="./index.php?p=doce<?=$i?>">Mais informações</a>
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>