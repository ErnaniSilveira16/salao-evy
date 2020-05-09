<?php
session_start();

if (!$_SESSION['usuario'] ){
    header('Location:/Login/');
}

?> 


<!DOCTYPE html>
<html lang="en">
<!--SCRIPT-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evy site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d19b8e1807.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="site.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>

    
    <!--INICIO DO NAVBAR-->
<body>
    <nav class="corSecundaria navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand textoBranco" href="#">Beleza Afro Box Braids</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Evy">Evy Malequias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Depoimentos">Depoimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Contato">Contato</a>
</li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="/CONTROLE/controle_logaut.php">Sair</a>
</li>
            </ul>
        </div>
    </nav>
    <!--PARTE INICIAL DO SITE-->
    <section class="jumbotron text-center corPrimaria">
        <div class="container corPrimaria">
            <img class="FotoPerfil" src="logo.jpg" alt="">
            <h1 class="jumbotron-heading  ">Beleza Afro Box Braids</h1>
            <p class="lead  textoBranco">trancista Evy</p>
            <p>
                <a href="#Contato" class="btn btn-dark my-2">Contato</a>
            </p>
            <a  href=""><i class="fab fa-whatsapp aumentoIcone"></i></a></h4>
            <a  href="https://www.instagram.com/belezafroboxbraids_/"><i  class="fab fa-instagram aumentoIcone"></i></a>
            <a  href="https://www.facebook.com/belezaafroboxbraids/"><i  class="fab fa-facebook-f aumentoIcone"></i></a>
            <a  href="mailto:evelyny.gomes@hotmail.com"><i  class="fas fa-envelope-open-text aumentoIcone"></i></a>
        </div>
    </section>

    <!--SERVIÇOS-->
    <div class="album py-5 bg-light corPrimaria" id="Sevicos">
        <div class="container-fluid">
            <h2 class="jumbotron-heading text-center titulosVerde">Serviços</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Miniatura [100% x225]" style="height: 225px; width: 100%; display: block;" src="modelo1.jpg"
                            data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text text-center"> pirestayna_</p>
                           
                            
                                    <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#myModal">Fazer Reserva</button>
                                   
                                    
                                </div>
                            </div>
                        </div>
                   
            
        
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Miniatura [100% x225]" style="height: 225px; width: 100%; display: block;"
                            src="modelo2.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text text-center">anaflaviasampaioii</p>
                           
                           
                                   <button type="button" class="btn btn-sm btn-block btn-outline-success" data-toggle="modal" data-target="#myModal">
                                        Fazer reserva
                                      </button>
                                </div>
                            </div>
                        </div>
                   
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Miniatura [100% x225]" style="height: 225px; width: 100%; display: block;"
                            src="modelo3.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text text-center">taaina_kerpen</p>
                            <button type="button" class="btn btn-sm btn-block btn-outline-success" data-toggle="modal" data-target="#myModal">
                                Fazer Reserva
                              </button>
                            
                                    
                                </div>
                            </div>
                        </div>
                   
                
  
                <!--EVY-->
                
                    <div class="container text-center corPrimaria" id="Evy">
                        <h2 class="jumbotron-heading titulosBrancos">Evy-Malequias</h2>
                        <p class="lead">Olá! Meu nome é Ernani, atualmente graduando do terceiro semestre de Ciência da
                            Computação
                            na faculdade São Francisco de Assis - UNIFIN. Com um "mindset" progressista mergulho no
                            mundo do T.I,
                            conhecendo novas linguagens de programação, estudando inglês, buscando conhecimento e
                            oportunidades profissionais!
                        </p>
                    </div>
                
                <!--Depoimentos-->
                
                    <div class="container-fluid text-center corPrimaria" id="Depoimentos">
                        <h2 class="jumbotron-heading ">Depoimentos</h2>
                        <p class="lead">Jessica Franco: ALÉM DE UM TRABALHO EXCELENTE E IMPECÁVEL, ELA É A COISA MAIS AMOR DA VIDA ❤️
                        Vivi angelo: amei lindo trabalho já ganhou mais uma cliente ! 😍🙋🏼‍♀️
                        Maikele Faria: Estou amando minhas tranças! A Evy é uma pessoa maravilhosa e muito talentosa. Encontrei a trançadeira da minha vida. Nunca mais largo
                        Fabiane Silva: Trabalho perfeito que vem junto com a simpatia da trancista!! Muito obrigada, Evy!! Um achado de ouro nas redes sociais que salvou a minha vontade repentina de mudança 🙌🏽🙌🏽🙌🏽
                        Theteia Bolzan: Top das Galáxias !!! Trabalho espetacular feito com muito amor. #Perfeita.
                        </p>

                    </div>
                
                <!-- Contato-->
                
                    <div class="container-fluid text-center corPrimaria " id="Contato">
                        <h3 class="text-center titulosBrancos">Contato</h3>
                       <a  href=""><i class="fab fa-whatsapp aumentoIcone"></i></a></h4>
                       <a  href="https://www.instagram.com/belezafroboxbraids_/"><i  class="fab fa-instagram aumentoIcone"></i></a>
                       <a  href="https://www.facebook.com/belezaafroboxbraids/"><i  class="fab fa-facebook-f aumentoIcone"></i></a>
                       <a  href="mailto:evylyny@hotmail.com"><i  class="fas fa-envelope-open-text aumentoIcone"></i></a>
                    </div>
                
                <!-- footer-->
                <footer class="container-fluid corPrimaria">
                    <p class="text-center">Dev Ernani Silveira</p>
                </footer>

</body>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Realizar Reserva</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form action="enviamensagem.php" method="POST">
                  <label for="fname">Nome</label>
                  <input type="text" id="fname" name="Nome" placeholder="Seu nome">
              
                  <label for="lname">Telefone</label>
                  <input type="text" id="lname" name="Telefone" placeholder="Seu telefone">
              
                  <label for="country">Turno</label>
                  <select id="country" name="Turno">
                    <option value="Manha">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                  </select>
              
                  <label for="subject">Mensagem</label>
                  <textarea id="subject" name="Mensagem" placeholder="Escreva sua mensagem" style="height:200px"></textarea>
              
                  <input type="submit" value="Submit">
                </form>
              </div>
        </div>
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  
</div>


</html>