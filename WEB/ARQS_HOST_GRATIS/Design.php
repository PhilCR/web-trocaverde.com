<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para você!</title> 

        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obtenção de descontos." />
        <meta name="keywords" content="descontos, coletivo, compra, reciclagem, shopping" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="pt-BR" >

        <!-- Habilitando a Responsive Design -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!--  Antiga folha de estilos
        <link href="assets/style_desk.css" rel="stylesheet" type="text/css" media="screen and (min-width:641px)">
        <link href="style_mini.css" rel="stylesheet" type="text/css" media="screen and (max-width:640px)"> -->
        



    </head>

    <body>       

        <div id="header" class="header">
            <a href="index.php"><img src="img/logo.png" class="logobox"></a>
            <div class="locationbox">
                <table>
                    <tr>
                        <td>
                            <font style="color:rgb(00,00,255)">Localização Atual: </font>
                        </td>
                        <td width="25%">
                            <font><select id="regionlocation" name="regiao" class="select"><option value="none">Região</option><option value="Sorocaba">Sorocaba</option></select>
                        </td>
                        
                        <td width="25%">
                            <select id="levlocation" name="lev" class="select"><option value="none">L.E.V.</option></select></font>
                        </td>
                    </tr>
                    
                    </table>
                </div>
                        
               
            <div class="titlebox">
                <a href="index.php" style="text-decoration:none;"><p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p><p><font class="he3">Seu lixo reciclado como desconto para você!</font></p></a>
            </div>
            
            <div id="login" class="login">

                <form action="autenticar.php" name="form_login" method="post">
                    <table width="100%">
                        
                        <tr>
                            <td width="20%">
                                Email:   
                            </td>
                            <td>
                                <input type="text" name="txt_email" size="30" maxlength="70"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">
                                Senha:
                            </td>
                            <td>
                               <input type="password" name="txt_senha" size="30" maxlength="16"/> 
                            </td>
                        </tr>                    
                    </table>
                    <br>
                    <table width="100%">
                        <tr>
                            <td>
                                <input type="submit" name="btn_entrar" value="Acesso" class="abutton"/>
                            </td>
                            <td width="40%">
                            </td>
                            <td>
                                <input type="button" name="btn_acesso" value="Cadastro" class="abutton" onclick="carregarpagina('cadastro.php')"/>
                            </td>
                        </tr>
                    </table>                    
                </form>

            </div>
        </div>
        
        <div id="_content" class="content">
            
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
