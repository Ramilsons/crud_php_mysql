<?php

require '../vendor/autoload.php';

use \App\Entity\Produto;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php');
  exit;
}

//CONSULTA A Produto
$obProduto = Produto::getProdutoById($_GET['id']);

//VALIDAÇÃO DA Produto
if(!$obProduto instanceof Produto){
  header('location: index.php');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obProduto->excluir();

  header('location: index.php');
  exit;
}

include '../includes/header.php';
?>

</header>

<?php
include '../includes/confirmar-exclusao.php';
include '../includes/footer.php';