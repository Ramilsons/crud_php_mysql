<?php

require '../vendor/autoload.php';


use \App\Entity\Produto;
$obProduto = new Produto;

//VALIDAÇÃO DO POST
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $obProduto->titulo    = $_POST['titulo'];
  $obProduto->descricao = $_POST['descricao'];
  $obProduto->urlImagem = $_POST['urlImagem'];
  $obProduto->preco = $_POST['preco'];
  $obProduto->ativo     = $_POST['ativo'];
  $obProduto->cadastrar();

  header('location: index.php');
  exit;
}

include '../includes/header.php';
?>

</header>

<?php
include '../includes/formulario.php';
include '../includes/footer.php';