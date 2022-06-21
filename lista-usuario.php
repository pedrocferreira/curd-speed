<h1>Lista de usuário </h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
<?php
$sql = "SELECT * FROM clientes";
$res = $conn->query($sql);
$qtd = $res->num_rows;
$wpp = 'https://api.whatsapp.com/send?phone=55';

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
$vencido = "VENCIDO";
$ipmais = "IPTV+";
$horizon = "horizon"
?>



<div class="form-group input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
    <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
</div>


<?php
if ($qtd > 0) {
    print "<table id='tabela' class='table table-hove table-striped table-responsive'>";
    print "<tr>";
    print "<th> # <th>";
    print "<th> Nome <th>";
    print "<th> Login <th>";
    print "<th> Telefone <th>";
    print "<th> Vencimento <th>";
    print "<th> Obs <th>";
    print "<th> Ações <th>";
    print "</tr>";


    while ($row = $res->fetch_object()) {
        print "<tr>";

        print "<td>" . $row->id . "<td>";
        print "<td>" . $row->nome . "<td>";
        print "<td>" . $row->login . "<td>";
        print "<td>" . $row->telefone . "<td>";

        if ($row->vencimento < $date) {
            print "<td style='color: red'><b>" . $vencido . "</b><td>";
        } else {
            print "<td>" . $row->vencimento . "<td>";
        }
        if ($row->status == $ipmais) {
            print "<td><button onclick=\"location.href='https://iptvmais.tv/clientes?token=abf6197b7b32bd55fe1fb91f50278490&busca=" . $row->login . "';\" class='btn btn-warning'>Editar</button>       " . $row->status . "<th>";
        } elseif ($row->status == $horizon) {
            print "<td><button onclick=\"location.href='https://urbandb.store/sistem/gestor/usuarios?revenda=&status=&termo=" . $row->login . "';\" class='btn btn-warning'>Editar</button>       " . $row->status . "<th>";
        }



        print  "<td>
                <button onclick=\"if(confirm('Tem certeza que deseja exluir?')){location.href='?page=salvar&acao=exluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'> Deletar </button>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-warning'>Editar</button>
                <button onclick=\"location.href='$wpp$row->telefone'\" target='_blank'  class='btn btn-success'>Whatsapp</button>
                
            
                <tr>";
        print "</tr>";
    }
} else {
    print "<p class='alert alert-danger'> Não temos resultados</p>";
}

?>

<script>
    $('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>