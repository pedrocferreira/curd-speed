<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
switch (@$_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $telefone = $_POST["telefone"];
        $vencimento = $_POST["vencimento"];
        $obs = $_POST["obs"];

        $sql = "INSERT INTO clientes (nome, login, telefone, vencimento, status) VALUES ('{$nome}', '{$login}', '{$telefone}', '{$vencimento}', '{$obs}')";

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script> alert('Usuario registrado com sucesso!'); </script>";
            print "<script> location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possivel registrar usuario !'); </script>";
            print "<script> location.href='?page=listar';</script>";
        }
        break;
    case 'editar':
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $telefone = $_POST["telefone"];
        $vencimento = $_POST["vencimento"];
        $obs = $_POST["obs"];

        $sql = "UPDATE clientes SET nome='{$nome}',login='{$login}', telefone='{$telefone}', vencimento='{$vencimento}', status='{$obs}' WHERE id =  '{$id}' ";

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script> alert('Usuario editado com sucesso!'); </script>";
            print "<script> location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possivel editar o  usuario !'); </script>";
            print "<script> location.href='?page=listar';</script>";
        }


        break;
    case 'exluir':
        $sql = "DELETE FROM clientes WHERE id =" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Usuario Deletado com sucesso!'); </script>";
            print "<script> location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possivel Deletar o  usuario !'); </script>";
            print "<script> location.href='?page=listar';</script>";
        }

        break;

    case 'buscar':
        $sql = "SELECT * FROM clientes  WHERE nome LIKE" . $_REQUEST["nome"] . "%";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script> alert('Usuario nao encostrado com sucesso!'); </script>";
            print "<script> location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possivel encostrar o usuario !'); </script>";
            print "<script> location.href='?page=listar';</script>";
        }

        break;
}
