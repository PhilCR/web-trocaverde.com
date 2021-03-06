<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para você!</title>
        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obtenção de descontos." />
        <meta name="keywords" content="descontos, coletivo, compra, reciclagem, shopping" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" lang="pt-BR" >

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- Habilitando a Responsive Design -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Habilitar JQuery Script -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.js"></script>

        <!-- Habilitar Scripts Próprios -->
        <script type="text/javascript" src="js/troca.js"></script>
      
    </head>

    <body class="container">
        

        <!-- Cabeçalho [X] -->
        <div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

            <div class="container-fluid">

                <!-- Formulário de Localização de Ofertas [X] -->
                <div class="container-fluid span6 offset2 btn-info" style="border:1px solid #004400; border-radius:1px;">

                    <div class="span2">
                        <i class="icon-map-marker icon-white"></i><b>Local</b>
                    </div>
                    <div class="span1" >
                        <select id="regionlocation" name="regiao" style="width:150px;" onChange="alterarLocal()"><option value="none">Região</option></select>

                    </div>
                    <div class="span1 offset1">
                        <select id="levlocation" name="lev" style="width:100px;" onChange="alterarLocal()"><option value="none">L.E.V.</option></select></font>
                    </div>

                </div>

                <!-- Menu Usuário para Mobile [X] -->
                <div class="span1 visible-phone hidden-desktop hidden-tablet">
                    <div class="btn-group">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"></i>
                        Entrar
                        <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li>
                                <?php include("login.php"); ?>
                            </li>
                        </ul>
                    
                    </div>

                </div>

            </div>


            <div class="container-fluid">
            
                <!-- Logotipo [X] -->
                <div class="span3">
                    <a href="index.php" ><img src="img/logo.png"></a>
                </div>                  

                <!-- Área de Acesso [X] -->
                <div id="login" class="span2 offset5 visible-desktop hidden-tablet hidden-phone">
                        <?php include("login.php"); ?>
                </div>

                <!-- Área de Acesso [X] -->
                <div id="login" class="span4 offset2 hidden-desktop visible-tablet hidden-phone">
                        <?php include("login.php"); ?>
                </div>

            </div>
            
        </div>

       
        <!-- Conteudo [X] -->
        <div id="content" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px;">
            <? 
                include("cadastro.php");
            ?>
        </div>
        

        <!-- Rodapé [X]-->
        <div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
            <div  class="span3">
                &copy; 2012 - All Rights Reserved.
            </div>
            <div class="span2 offset1">
                <a href="contato.html" target="blank" title="Contate-nos" class="btn-success">Contate-nos</a>
            </div>

            <div class="span2">
                <a href="termos.html" target="blank" title="Termos e Políticas" class="btn-success">Termos e Políticas</a>
            </div>

            <div class="span3">
                <a href="levs.php" target="blank" title="Localização dos L.E.V.s" class="btn-success">Localização dos L.E.V.s</a>
            </div>

        </div>

  
    
    </body>
    
</html>