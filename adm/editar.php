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
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $obProduto->titulo    = $_POST['titulo'];
  $obProduto->descricao = $_POST['descricao'];
  $obProduto->urlImagem = $_POST['urlImagem'];
  $obProduto->preco = $_POST['preco'];
  $obProduto->ativo     = $_POST['ativo'];
  $obProduto->atualizar();

  header('location: index.php');
  exit;
}

include '../includes/header.php';

?>


</header>
<?php
include '../includes/formulario.php';
include '../includes/footer.php';
?>