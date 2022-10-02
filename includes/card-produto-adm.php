<?php

$resultados = '';
foreach ($produtos as $produto) {
  $resultados .='
                <div class="product-card">
                    <div class="top">
                        <img src="'.$produto->urlImagem.'" alt="">
                    </div>
                    <div class="bottom">
                        <h2>'.$produto->titulo.'</h2>

                        <h5 class="price">R$ '.$produto->preco.'</h5>
                    </div>
                    <div class="buttons">
                        <a class="edit" href="./editar.php?id='.$produto->id.'" alt="">
                            <img src="./img/edit.png">
                        </a>
                        <a class="edit" href="./excluir.php?id='.$produto->id.'" alt="">
                            <img src="./img/remove.png">
                        </a>
                    </div>
                    <p>'.$produto->descricao.'</p>
                    <small class="id">'.$produto->id.'</small>
                </div>
            ';
}
?>

<?= $resultados ?>