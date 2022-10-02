<main>

  <h2 class="">Excluir produto</h2>

  <form method="post">

    <div class="">
      <p>Você deseja realmente excluir o produto <strong><?=$obProduto->titulo?></strong>?</p>
    </div>

    <div class="links-button">
      <a href="index.php">
        <button type="button" class="">Cancelar</button>
      </a>

      <button type="submit" name="excluir" class="">Excluir</button>
    </div>

  </form>

</main>