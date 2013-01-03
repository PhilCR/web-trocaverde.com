<div class="span2">
    <form class="form-horizontal" action="autenticar.php" name="form_login" method="post">
        <div class="input-append">
            <input class="input-medium" type="email" name="txt_email" placeholder="Digite seu Email">
            <span class="add-on"><i class="icon-envelope"></i></span>
        </div>
        <div class="input-append">
            <input class="input-medium" type="password" name="txt_senha" placeholder="Digite sua Senha">
            <span class="add-on"><i class="icon-lock"></i></span>
        </div>
        <div class="row-fluid">
            <label class="checkbox">
                <input type="checkbox"> Lembrar-me
            </label> 
            <button type="submit" class="btn btn-info btn-small">Acesso</button>
            <button type="button" class="btn btn-small" onclick="carregarPagina('cadastro.php');">Cadastro</button>
        </div>
    </form>
</div>