
                <form action="autenticar.php" name="form_login" method="post">
                    <table width="100%">
                        <tr>
                            <td width="20%">
                                C.P.F.:    
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
                               <input type="submit" name="btn_entrar" value="Entrar" class="abutton"/>
                            </td>
                            <td width="70">
                            </td>
                            <td>
                                <input type="button" name="btn_cadastrar" value="Cadastro" class="abutton" onclick="location.href='cadastro.php'">
                            </td>
                        </tr>
                    </table>                    
                </form>