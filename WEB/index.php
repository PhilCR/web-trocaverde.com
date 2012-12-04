<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para você!</title>
        <meta name="description" content="Site de compras coletivas utilizando pontos para obtenção de descontos." />
               
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="pt-BR" >
        <link rel="stylesheet" type="text/css" href="Styles.css"/>
        
        <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />
        
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
                            <font><select id="regionlocation" name="regiao" class="select"><option value="none">Região</option></select>
                        </td>
                        
                        <td width="25%">
                            <select id="levlocation" name="lev" class="select"><option value="none">L.E.V.</option></select></font>
                        </td>
                    </tr>
                    
                    </table>
                </div>
                        
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p><p><font class="he3">Seu lixo reciclado como desconto para você!</font></p>
            </div>
            
            
            <div id="login" class="login">
                <?php include("login.php") ?>
                
            </div>
        </div>
        
        <div id="content" class="content">
            <?php include("ofertas.php") ?>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
