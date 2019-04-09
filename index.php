<?php

/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/

if (isset($_POST['enviarFormulario'])){


/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/

$enviaFormularioParaNome = 'Kaza W';
$enviaFormularioParaEmail = 'contato@kazaw.com.br';

$caixaPostalServidorNome = 'Kaza W | Formulário';
$caixaPostalServidorEmail = 'fale@kazaw.com.br';
$caixaPostalServidorSenha = 'kazaw101059';

/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/


/* abaixo as veriaveis principais, que devem conter em seu formulario*/

$remetenteNome  = $_POST['remetenteNome'];
$remetenteEmail = $_POST['remetenteEmail'];
$remetenteTelefone  = $_POST['remetenteTelefone'];
$mensagem = $_POST['mensagem'];

$headers  = "From: \"$remetenteNome\"<$remetenteEmail>\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

$mensagemConcatenada = "Formulario gerado via website KazaW \n";
$mensagemConcatenada .= "------------------------------- \n\n";
$mensagemConcatenada .= "Nome: $remetenteNome \n";
$mensagemConcatenada .= "E-mail: $remetenteEmail \n";
$mensagemConcatenada .= "Telefone: $remetenteTelefone \n";
$mensagemConcatenada .= "------------------------------- \n\n";
$mensagemConcatenada .= "Mensagem: $mensagem \n";


/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/

require_once('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
$mail->Port  = '587';
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = "Contato via site KazaW";
$mail->Body  = nl2br($mensagemConcatenada);


$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));

if(!$mail->Send()){
$mensagemRetorno = 'Erro ao enviar formulário';
echo "<script>alert('$mensagemRetorno');window.location.assign('http://www.kazaw.com.br/');</script>";
}else{
$mensagemRetorno = 'Formulário enviado com sucesso!';
echo "<script>alert('$mensagemRetorno');window.location.assign('http://www.kazaw.com.br/');</script>";
}


}
?>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/captura-de-tela-2018-08-20-as-11.16.26-626x152.png" type="image/x-icon">
  <meta name="description" content="">
  <title>KAZA W</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>


  <section class="menu cid-r1gIyCuFdP" once="menu" id="menu2-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://www.kazaw.com.br/">
                        <img src="assets/images/captura-de-tela-2018-08-20-as-11.16.26-626x152.png" alt="" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php#features11-2">A Kaza W</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#features12-4">Produtos</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="projetos.php">Projetos</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#form1-7">Contato</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="http://api.whatsapp.com/send?1=pt_BR&phone=5519993887729"><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>
                    
                    19 99388-7729</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="">html site templates</a></section><section class="cid-r1gJ2yLBKp mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=rHfQy9JJucI" id="header2-1">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(118, 118, 118);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                
                
                <p class="mbr-text pb-3 mbr-fonts-style display-2"><strong>
                    Conheça um novo conceito de atendimento em cortinas, persianas, tapetes e papéis de parede em Campinas e região.</strong></p>
                
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features11 cid-r1gLeP9nmA" id="features11-2">

    

    

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="assets/images/1b4241aecd0a4bd829436d58ee43dd27-740x740.jpg" alt="Mobirise" title="">
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">KAZA W</h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-7">Trabalhando em parceria com profissionais de Design e Arquitetura desde 2009, buscamos estabelecer sempre uma relação transparente com nossos clientes, oferecendo suporte e um atendimento personalizado.<br>Tentando sempre fazer um excelente trabalho, a KAZA W tem o prazer em atendê-lo e deixar seu projeto ainda mais lindo. <br>Por isso trabalhamos com uma equipe capacitada, com ótimos parceiros, preço justo, qualidade e confiança.&nbsp;<br></p>
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                <div class=" align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-features"></span>
                                </div>     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7">
                                        Mais de 20 mil produtos</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">Temos uma grande variedade de papéis de parede, persianas, tapetes sob medida, cortinas e tecidos. Aqui você encontra tudo o que precisa para transformar seu ambiente.<br></p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div> 
    </div>          
</section>

<section class="features12 cid-r1gMvhnhhW" id="features12-4">
    
    

    

    <div class="container">
        <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2">
            Nossos Produtos</h2>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5"></h3>

        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <img src="assets/icons/persiana.png" height="48px" style="width: 48px;">
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Persianas</h4>
                        </div>
                    </div>                

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Uma linha completa de produtos entre eles: rolôs, romanas, alumínio, madeira, nuance, painel e twin.</p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <img src="assets/icons/papelparede.png" height="48px" style="width: 48px;">
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Papéis de Parede</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Papéis de parede de origem belga, holandesa, italiana, chinesa, americana com os mais altos padrões de qualidade.</p>
                    </div>
                </div>
            </div>

            <div class="mbr-figure" style="width: 50%;">
                <img src="assets/images/mbr-982x657.jpg" alt="Mobirise" title="">
            </div>

            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <img src="assets/icons/cortina.png" height="48px" style="width: 48px;">
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Cortinas</h4>
                        </div>
                    </div>                

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Grande variedade de tecidos nacionais e importados. Produtos exclusivos e sob medida.</p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <img src="assets/icons/tapete.png" height="48px" style="width: 48px;">
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Tapetes<br></h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Tapetes sob medida e com diversas marcas existentes no mercado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients cid-r1gQ8pF3Kk" id="clients-8">
      

    
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Parceiros</h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5"></h3>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner" data-visible="2">
                
                
                
                
                
            <div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/212-1288x298.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/logo-339x156.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/logo-ta-1-496x275.jpg" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/logo-sao-carlos-1010x469.jpg" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/logo-persital-1456x808.jpg" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/captura-de-tela-2019-02-17-as-19.08.37-1254x848.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/captura-de-tela-2019-02-17-as-19.10.18-1808x594.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/captura-de-tela-2019-02-17-as-19.12.32-1330x818.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/captura-de-tela-2019-02-17-as-19.13.02-1504x518.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/captura-de-tela-2019-02-17-as-19.13.27-1032x542.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/captura-de-tela-2019-02-17-as-19.16.13-710x618.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/somfy-logo-2000x543.png" class="img-responsive clients-img" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-r1gQ3qPHkG" id="form1-7">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Contato</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">

            
                    <form action="" method="post">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-7">Nome</label>
                                    <input type="text" class="form-control" name="remetenteNome" required="" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-7">Email</label>
                                    <input type="email" class="form-control" name="remetenteEmail" required="" placeholder="email@email.com.br">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-7">Telefone</label>
                                    <input type="tel" class="form-control" name="remetenteTelefone" placeholder="XX XXXXX-XXXX">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-7">Mensagem</label>
                            <textarea type="text" class="form-control" name="mensagem" rows="7" placeholder="Sua mensagem aqui!"></textarea>
                        </div>
            
                        <span class="input-group-btn"><input type="submit" name="enviarFormulario" class="btn btn-primary btn-form display-4"><br></input></span>
                    </form>

        </div>
    </div>
</section>

<section class="cid-r1gTpHasas" id="footer2-9" style="background-color: white;">

    

    

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Endereço&nbsp;<br>
                    <br>Rua Alecrins, 544</strong><br><strong>Sala 08 - Cambuí</strong><br><strong>Campinas/SP</strong><br><strong>CEP 13024-411<br>
                    <br>
                    <br>Contato&nbsp;<br>
                    <br>Email: contato@kazaw.com.br<br>Fone: 19 3203-1947&nbsp;</strong><br><strong>WhatsApp: 19 99388-7729<br></strong></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text"><br>
                    <br><br></p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJUWskp1fPyJQRIipoaHhfASE" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 Kaza W &nbsp;- Todos os direitos reservados<br></p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://www.instagram.com/kazawinteriores/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(127, 25, 51); fill: rgb(127, 25, 51);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/kazawinteriores/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153);"></span>
                            </a>
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>