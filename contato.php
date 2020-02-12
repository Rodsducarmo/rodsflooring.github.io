<html>
<head>
  <title>Página Contato</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <style type="text/css">
  input,textarea, button{
    margin: 10px 0 0px 0;
  }
</style>
</head>
<body>

	<div class="container" style="margin-top: 50px;"><h2>Bootstrap 4.0</h2>

    <div class="row">
      <div class="col-sm-6">

                        <!-- Aqui abro a tag form e defino a action e o metodo a ser enviado
                         Action = Página destino
                         Method = Post (envia o código de maneira "não visível na url"
                       -->

                       <form action="enviaContato.php" method="post">
         <!-- input do formulario
         -->
                       <div class="row">

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa" required="" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required="" />
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-sm-6">
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required="" />
                      </div>
                      <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required="" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <textarea class="form-control" name="mensagem" id="mensagem" placeholder="mensagem" required="" >    </textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                      </div>
                    </div>
                  </form>
  </div>
  <div class="col-sm-6">
    <h5>Telefone</h5>
    11 99999-9999
    <hr>
    <h5>E-mail</h5>
    mariones@mariones.com.br
    <hr>
    <button class="btn btn-dark">Ver Mapa</button>
  </div>
</div>

</div>



<div style="position: absolute;bottom: 0">by @bross - agencia2m</div>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>