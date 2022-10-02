<link rel="stylesheet" href="../css/form.css">
<main>
  <form method="post">

    <div class="">
      <input type="text" placeholder="Título" class="" name="titulo" value="<?=$obProduto->titulo?>">
    </div>

    <div class="">
      <input type="text" placeholder="Descricao" class="" name="descricao" value="<?=$obProduto->descricao?>">
    </div>

    <div class="">
      <input type="text" placeholder="Preco" class="" name="preco" value="<?=$obProduto->preco?>">
    </div>

    <div class="">
      <input type="text" placeholder="URL da imagem" class="" name="urlImagem" value="<?=$obProduto->urlImagem?>">
    </div>

    <div class="check">
      <div>
          <div class="">
            <label class="">Ativo</label>
            <input type="radio" name="ativo" value="s" checked> 
          </div>

          <div class="">
            <label class="">Inativo</label>
            <input type="radio" name="ativo" value="n" <?=$obProduto->ativo == 'n' ? 'checked' : ''?>>
          </div>
      </div>

    </div>

    <div class="btn">
      <button type="submit" class=""><?php $copy = str_contains($_SERVER['REQUEST_URI'], 'editar') ? 'Editar' : 'Cadastrar'; echo $copy ?></button>
    </div>

  </form>

</main>