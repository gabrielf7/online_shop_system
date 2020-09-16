<?php

  include ("connect.php");

  require ("my_heard.php");

?>

<body>
  
  <div class="container my_container_main mt-3">
    <div class="row">
      <div class="col-lg-5 col-sm-12">
        <button class="col-lg-12 col-sm-12 mt-5 p-lg-2 mt-3 btn btn-my6-color" type="button" data-toggle="modal" data-target="#modal_new_category">
          Adicionar Categoria
        </button>
  
        <button class="col-lg-12 col-sm-12 p-lg-2 mt-3 btn btn-my6-color" type="button" data-toggle="modal" data-target="#modal_new_product">
          Adicionar Produto
        </button>

        <button class="my-button-sale col-lg-12 col-sm-12 p-5 mt-3 font-3 btn btn-my6-color h1_button" type="button" data-toggle="modal" data-target="#modal_sale">
         Vendas
        </button>
  
      </div>
  
      <div class="col-lg-7">
        <img class="mt-5 col-sm-12" src="./assets/landing.svg" alt="img background">
  
      </div>
  
    </div>
  
    <!-- Modal Nova Categoria -->
    <div class="modal fade" id="modal_new_category" tabindex="-1" aria-labelledby="New Category" aria-hidden="true">
      <div class="modal-dialog modal-dm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nova Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="far fa-times-circle text-white" aria-hidden="true"></i>
  
            </button>
    
          </div>
          <div class="modal-body">
            <form action="new_category.php" method="POST">
              <div class="form-group">
                <label>Nome</label>
  
                <input class="form-control" type="text" name="name_category" placeholder="Digite o nome da categoria..." alt="Informe o nome da categoria" required>
  
              </div>
  
              <div class="form-group">
                <label>Descrição</label>
  
                <textarea class="form-control" type="textarea" name="description_category" placeholder="Digite algumas informações..." alt="Informe algumas informações sobre o produto" row="4" required></textarea>
  
              </div>
  
              <button type="submit" class="btn btn-my6-color">
                Confirmar
              </button>
  
            </form>
  
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-my2-color border border-white" data-dismiss="modal">Fechar</button>
      
          </div>
    
        </div>
    
      </div>
    
    </div>
  
    <!-- Modal Cadastro de Produto -->
    <div class="modal fade" id="modal_new_product" tabindex="-1" aria-labelledby="New Product" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Novo Produto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="far fa-times-circle text-white" aria-hidden="true"></i>
  
              </button>
  
            </div>
            <div class="modal-body">
              <form action="new_product.php" method="POST">
                <div class="form-group">
                  <label>Nome do Produto</label>
  
                  <input class="form-control" type="text" name="name_product" placeholder="Digite o nome do produto..." 
                  alt="Informe o nome do produto" required>
  
                </div>
  
                <div class="form-group">
                  <label>Descrição</label>
  
                  <textarea class="form-control" type="textarea" name="description_product" placeholder="Digite algumas informações..."
                  alt="Informe algumas informações sobre o produto" row="4" required></textarea>
  
                </div>
  
                <div class="form-group">
                  <label>Categoria</label>
  
                  <select class="form-control" type="text" name="id_category" alt="Informe o nome da categoria" required>
                    <?php
  
                      $data_ctgry = "SELECT * FROM tbl_category order by name_category";
                      $resquery = mysqli_query($connectiondb, $data_ctgry);
                      while($v_register=mysqli_fetch_row($resquery)){
                        $v_id_ctgry=$v_register[0];
                        $v_name_ctgry=$v_register[1];
                        echo "<option value=$v_id_ctgry>$v_name_ctgry</option>";
                      }
  
                    ?>
                
                  </select>
  
                </div>
  
                <div class="form-group">
                  <label>Valor</label>
  
                  <input class="form-control" type="float" name="value_product" placeholder="Digite o valor do produto..." alt="Informe o valor do produto" required>
  
                </div>
  
                <div class="form-group">
                  <label>Estoque</label>
  
                  <input class="form-control" type="number" name="stock_product" min=1 placeholder="Digite o número no estoque..." alt="Informe o número no estoque" required>
  
                </div>
  
                <button type="submit" class="mb-5 btn btn-my6-color">
                  Confirmar
                </button>
  
              </form>
  
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-my2-color border border-white" data-dismiss="modal">Fechar</button>
      
            </div>
  
          </div>
  
        </div>
  
      </div>
    
    </div>

    <!-- Modal Identificando client para Vendas -->
    <div class="modal fade" id="modal_sale" tabindex="-1" aria-labelledby="Search" aria-hidden="true">
      <div class="modal-dialog modal-dm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Identificando Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="far fa-times-circle text-white" aria-hidden="true"></i>

            </button>

          </div>
          <div class="modal-body">
            <form action="new_sale.php" method="POST">
              <div class="form-group">
                <label>ID do Cliente</label>

                <input class="form-control" type="text" name="id_client" placeholder="Digite o número do ID..." 
                alt="Informe o ID do cliente" required>

              </div>

              <button type="submit" class="btn btn-my6-color">
                Confirmar
              </button>

            </form>

          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-my2-color border border-white" data-dismiss="modal">Fechar</button>
      
          </div>

        </div>

      </div>

    </div>
      
  </div>
  
</body>
