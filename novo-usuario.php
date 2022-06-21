<h1>Novo usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>

    <div class="mb-3">
        <label>Login</label>
        <input type="text" class="form-control" name="login">
    </div>

    <div class="mb-3">
        <label>telefone</label>
        <input type="number" class="form-control" name="telefone">
    </div>

    <div class="mb-3">
        <label>Vencimento</label>
        <input type="date" class="form-control" name="vencimento">
    </div>

    <div class="mb-3">
        <label>Obs</label>
        <input type="text" class="form-control" name="obs">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>