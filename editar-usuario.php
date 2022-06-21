<h1>Editar usuario</h1>
<?php

$sql = "SELECT * FROM clientes WHERE id=" . @$_REQUEST['id'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php print $row->nome ?>">
    </div>

    <div class="mb-3">
        <label>Login</label>
        <input type="text" class="form-control" name="login" value="<?php print $row->login ?>">
    </div>

    <div class="mb-3">
        <label>telefone</label>
        <input type="number" class="form-control" name="telefone" value="<?php print $row->telefone ?>">
    </div>

    <div class="mb-3">
        <label>Vencimento</label>
        <input type="date" class="form-control" name="vencimento" value="<?php print $row->vencimento ?>">
    </div>

    <div class="mb-3">
        <label>Obs</label>
        <input type="text" class="form-control" name="obs" value="<?php print $row->status ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


</form>