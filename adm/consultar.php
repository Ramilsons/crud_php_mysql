<?php

require '../vendor/autoload.php';

use \App\Entity\Produto;

$produtos = Produto::getProduto($_POST['titulo']);

include '../includes/header.php';

?>
        <div>
            <h1>Aqui estão os resultados para <?php echo $_POST['titulo'] ?> </h1>
        </div>
    </header>
    <div class="all-products">
        <?php
            include '../includes/card-produto-adm.php';
        ?>
    </div>    

<?php include '../includes/footer.php'; ?>