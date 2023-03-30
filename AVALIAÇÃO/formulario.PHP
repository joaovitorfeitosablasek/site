<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title lang="pt-br">Formulário de Contato</title>
    <link rel="icon" href="blasek_logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

  <body>

    <div class="container mx-auto bg-light mt-1 w-90">
      <header class="row">
        <div id="barra_acessibilidade" class="col-12">
            
        </div>  
        <div class="col-sm-5">   
            <a href="home.html"><img src="blasek_logo.png" alt="HOME" width="40%"></a>
        </div>

        <div class="col-sm-12">
          <h1>BLASEK</h1>
        </div>
      </header>
        <section class="row">
            <article class="col-12">  
            <h2 id="formulario">Formulário de Contato</h2>
            <form action="#" method="post">
            <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome*</label>
            <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite seu nome" required>
            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail*</label>
            <input type="email" class="form-control form-control-sm" id="email" placeholder="Digite seu email" required>
           <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem*</label>
           <textarea class="form-control form-control-sm" id="mensagem" required>
           </textarea>
           <button type="submit" class="btn btn-primary my-1">Enviar</button>  
           <p>*Campo obrigatório</p> 
           </form>
           </article>
        </section>

      <footer class="row">
        <div class="col-12">
          <p>Copyright © 2023</p>
        </div>
      </footer>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <noscript>Atualize seu navegador</noscript>

  </body>

</html>