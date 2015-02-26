<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rio Lapa Tour</title>

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700|Roboto+Condensed:400,700|Open+Sans+Condensed:700,300|Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- App -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

</head>
<body data-prefixo="<?php echo get_template_directory_uri(); ?>/">

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo">

                </div>

                <div class="col-md-8">
                    <nav id="menu">
                        <a href="#home" data-scroll-nav="0">Home</a>
                        <a href="#passeios" data-scroll-nav="1">Passeios</a>
                        <a href="#sobre" data-scroll-nav="2">Sobre Nós</a>
                        <a href="#cotacao" data-scroll-nav="3">Cotação & Temperatura</a>
                        <a href="#contato" data-scroll-nav="4">Contato</a>
                    </nav> <!-- #menu -->
                </div>
            </div>
        </div>
    </header> <!-- #header -->

    <div id="fullpage">
    <section class="secao" data-scroll-index="0" id="home">
        <div class="parallax-window parallax-home p-home"></div>
        <span class="camada"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="http://www.rio.rj.gov.br/riotur/" target="_blank" class="btn-parceiro animated riotur bounceInDown">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/riotur.jpg" height="60s" alt="">
                    </a>
                    <a href="#" target="_blank" class="btn-parceiro animated bounceInDown">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/embratur.png" height="64" alt="">
                    </a>
                    <a href="http://www.embratur.gov.br/" target="_blank" class="btn-parceiro animated embratur2 bounceInDown">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/embratur2.png" height="48" alt="">
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <h1 id="titulo-home" class="animated bounceInLeft">
                        Seja bem-vindo ao Rio de Janeiro
                    </h1> <!-- #titulo-home -->
                    <h2 id="descricao-home" class="animated bounceInRight">
                        Conheça os lugares mais lindos do mundo
                    </h2> <!-- #descricao-home -->
                </div> <!-- .col-md-12 -->
                <div class="clearfix"></div>
                <div class="col-md-4 col-md-offset-4 text-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mascote.png" class="mascote animated bounceInUp pull-right img-responsive" alt="">
                </div>
                <div class="col-md-3 container-comentario animated bounceInRight">
                    <i class="fa fa-comment-o icone-comentario"></i>
                    <p class="chamada-olimpiadas text-center">Conheça o Rio <br> nas Olímpiadas!</p>
                </div>
            </div> <!-- .row -->

            <div class="row">

            </div>
        </div> <!-- .container -->
    </section> <!-- #home -->

    <?php
        $params = array('limit' => 999);
        $pods = pods( 'passeio', $params );

        while ( $pods->fetch() ) :
            $title = $pods->display('name');
            $content = $pods->display('content');
            $subtitulo = $pods->field('subtitulo');
            $tipo = $pods->field('tipo');
            $valor = $pods->field('valor');
            $id = $pods->field('id');
            $passeio =pods('passeio', $id);
            $imagem_principal = $passeio->field('imagem_principal', TRUE);
    ?>
    <!-- Modal -->
<div class="modal fade" id="modalPasseio<?php echo $id; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel" style="font-weight: bold;"><?php echo $title; ?> <small><?php echo $subtitulo; ?></small></h4>
      </div>
      <div class="modal-body">

      <div class="col-md-6">
          <p>
                <strong>Descrição</strong>
            </p>
            <p>
                <?php echo $content; ?>
        </p>
      </div>

      <div class="col-md-6">
          <p>
                <strong>Valor</strong>
            </p>
            <p>
                <?php echo $valor; ?>
        </p>
      </div>

      <hr>

      <div class="col-md-12">

<hr>
<p class="text-center">
        <strong>Faça uma reserva agora</strong>
</p>



    <form action="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Mensagem</label>
                    <textarea name="" id="" style="height: 60px;" class="form-control"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success text-center">Enviar Reserva</button>
                </div>
            </div>
        </div>
    </form>

      </div>


        <div class="clearfix" style="margin-top: 20px;"></div>
        <p class="text-center">
      <?php echo pods_image( $imagem_principal, 'medium', 0, array('class' => 'img-passeio text-center', 'height' => '200px')); ?>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

    <section class="secao" data-scroll-index="1" id="passeios">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cristo.jpg" class="img-cristo wow swing" alt="Cristo Redentor">
                    <h2 id="titulo-passeios" class="titulo-pagina text-center wow bounceInDown">Passeios</h2>
                    <h3 class="subtitulo-pagina text-center wow bounceInUp">Com os melhores preços do Rio</h3>
                </div> <!-- .col-md-12 -->
            </div> <!-- .row -->
            <div class="row row-passeios">
                <?php
                    $params = array('limit' => 999);
                    $pods = pods( 'passeio', $params );

                    while ( $pods->fetch() ) :
                        $title = $pods->display('name');
                        $subtitulo = $pods->field('subtitulo');
                        $tipo = $pods->field('tipo');
                        $id = $pods->field('id');
                        $passeio =pods('passeio', $id);
                        $imagem_principal = $passeio->field('imagem_principal', TRUE);
                ?>
                <div class="col-md-4">
                    <div class="item-passeio wow bounceInLeft">
                        <a href="javascript:;" data-toggle="modal" data-target="#modalPasseio<?php echo $id; ?>">
                        <?php echo pods_image( $imagem_principal, 'medium', 0, array('class' => 'img-passeio img-responsive') ); ?>
                            <img src="" alt="" class="img-passeio img-responsive">
                            <h2 class="titulo-passeio"><?php echo $title; ?></h2>
                            <p class="descricao-passeio"><span><?php echo $subtitulo; ?></span> <?php echo $tipo; ?></p>
                            <span href="#" class="btn btn-primary btn-reserva">Reservar</span>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div> <!-- .container -->
    </section> <!-- #passeios -->

    <section class="secao" id="parceiros" class="bloco ">
        <div class="parallax-window parallax-lapa p-lapa"></div>
        <div class="parallax-window p-lapa2"></div>
        <div class="container">
            <div class="row" data-scroll-index="2">
                <div class="col-md-8">
                    <h2 class="titulo-pagina text-center wow lightSpeedIn" style="margin-top: 80px;"><i class="fa fa-newspaper-o"></i> Sobre A Rio Lapa Tour</h2>
                    <p class="subtitulo-pagina wow fadeIn" data-wow-delay="1.5s" style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique sem ac sem malesuada iaculis. Sed faucibus sem mattis turpis rhoncus lacinia. Nunc metus arcu, accumsan id tristique sit amet, tincidunt sit amet enim.</p>
                    <p class="subtitulo-pagina wow fadeIn" data-wow-delay="1.8s" style="margin-top: 40px;">Integer quis ex accumsan ipsum venenatis vestibulum. Curabitur interdum nisl ut rhoncus fermentum. Integer quis ex accumsan ipsum venenatis vestibulum.</p>
                </div>
                <div class="col-md-4 delay2 text-center wow bounceInLeft">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lapa2.jpg" data-wow-delay="1.70s" alt="">
                </div>
            </div>
        </div>
        <div class="parallax-window p-rio1"></div>
        <div class="container">
            <div class="row" data-scroll-index="3" style="padding-top: 60px; padding-bottom: 60px;">
                <div class="col-md-6">
                    <?php
                        $curl = curl_init();

                        foreach(array('USD', 'EUR') as $moeda) {
                            curl_setopt($curl, CURLOPT_URL, 'http://api.fixer.io/latest?base=' . $moeda);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                            $$moeda = json_decode(curl_exec($curl));
                        }

                        curl_close($curl);
                    ?>
                    <h2 class="titulo-pagina wow bounceInRight text-center"><i class="fa fa-money"></i> Cotação</h2>
                    <div class="row">
                        <div class="col-md-6 wow lightSpeedIn" data-wow-delay="0.8s">
                            <h3 class="subtitulo-pagina text-center"><i class="fa fa-usd"></i> 1 USD</h3>
                            <h3 class="subtitulo-pagina text-center dindin"><strong><?php echo $USD->rates->BRL; ?> BRL</strong></h3>
                        </div>
                        <div class="col-md-6 wow lightSpeedIn" data-wow-delay="0.8s">
                            <h3 class="subtitulo-pagina text-center"><i class="fa fa-eur"></i> 1 EUR</h3>
                            <h3 class="subtitulo-pagina text-center dindin"><strong><?php echo $EUR->rates->BRL; ?> BRL</strong></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                        $curl = curl_init();

                        $url = "http://api.openweathermap.org/data/2.5/forecast/daily?q=Rio%20de%20Janeiro&mode=json&units=metric&cnt=7";

                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                        $retorno = json_decode(curl_exec($curl));

                        curl_close($curl);
                    ?>
                    <h2 class="titulo-pagina wow bounceInRight text-center"><i class="fa fa-sun-o"></i> Temperatura</h2>
                    <div class="row">
                        <div class="col-md-3 wow lightSpeedIn" data-wow-delay="0.8s">
                            <h3 class="subtitulo-pagina text-center"><strong><?php echo date("d/m", $retorno->list[0]->dt); ?></strong></h3>
                            <h3 class="subtitulo-pagina text-center temp1"><?php echo round($retorno->list[0]->temp->max); ?>º C</h3>
                        </div>
                        <div class="col-md-3 wow lightSpeedIn" data-wow-delay="0.8s">
                            <h3 class="subtitulo-pagina text-center"><strong><?php echo date("d/m", $retorno->list[1]->dt); ?></strong></h3>
                            <h3 class="subtitulo-pagina text-center temp3"><?php echo round($retorno->list[1]->temp->max); ?>º C</h3>
                        </div>
                        <div class="col-md-3 wow lightSpeedIn" data-wow-delay="0.8s">
                            <h3 class="subtitulo-pagina text-center"><strong><?php echo date("d/m", $retorno->list[2]->dt); ?></strong></h3>
                            <h3 class="subtitulo-pagina text-center temp2"><?php echo round($retorno->list[2]->temp->max); ?>º C</h3>
                        </div>
                        <div class="col-md-3 wow lightSpeedIn" data-wow-delay="0.8s">
                            <h3 class="subtitulo-pagina text-center"><strong><?php echo date("d/m", $retorno->list[3]->dt); ?></strong></h3>
                            <h3 class="subtitulo-pagina text-center temp3"><?php echo round($retorno->list[3]->temp->max); ?>º C</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-window p-rio2"></div>
    </section>

    <section class="secao" id="contato" data-scroll-index="4" class="bloco">
        <div class="container">
            <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                <div class="col-md-12 wow bounceInRight">
                    <h2 class="titulo-pagina text-center"><i class="fa fa-envelope-o"></i> Contato</h2>
                </div>
                <div class="clearfix"></div>

                <form action="" class="form-contato wow bounceInLeft">

                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" />
                    </div>

                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control input-lg" name="email" placeholder="E-mail" />
                    </div>

                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control input-lg" name="telefone" placeholder="Telefone" />
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 form-group">
                        <textarea name="mensagem" id="" class="form-control input-lg" placeholder="Mensagem" style="height: 140px;"></textarea>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 form-group">
                        <button type="submit" id="btn-enviar" class="btn btn-success btn-lg">Enviar</button>
                    </div>

                </form> <!-- .form-contato -->

            </div>
        </div>

        <div class="parallax-window p-rio3"></div>
    </section>
    </div> <!-- #fullpage -->

    <footer id="footer" class="bloco">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>2015 Todos os Direitos Reservados - Rio Lapa Tour. Feito por <a href="http://theberry.us/luiz" target="_blank" class="label label-default">Henrique Almeida</a>.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>