<div class="container-infos">
    <h3><?= $produtos_descricao[$d]["titulo"]; ?></h3><br>
    <img src="<?=$produtos[$d]["foto"] ?>" alt="<?= $produtos_descricao[$d]["titulo"]; ?>">
    <br><br>
    <p> <?= $produtos_descricao[$d]["info"]; ?> </p>
    <ul>
        <li>Ingredientes: <?=  $produtos_descricao[$d]["ingrediente"]; ?> </li>
        <li>Embalagem: <?= $produtos_descricao[$d]["embalagem"]; ?></li>
        <li>Valor Nutriconal: <?= $produtos_descricao[$d]["calorias"]; ?> em 50g.</li>
        <li>Preço: <?= $produtos_descricao[$d]["preco"]; ?></li>
    </ul>
</div>