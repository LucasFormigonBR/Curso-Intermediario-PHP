<?php

require 'produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3> Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'insert':

        $status =  $produto->insert('PC Gamer Acer Nitro 5 GTX 1050i');

        if (!$status) {
            echo 'Não foi possivel executar a operação!';
            return false;
        }

        echo 'Registro inserido com sucesso!';

        break;

    case 'update':

        $status =  $produto->update('PC Gamer Acer Nitro 5 GTX 1050i Alteradin', 5);

        if (!$status) {
            echo 'Não foi possivel executar a operação!';
            return false;
        }

        echo 'Registro alterado com sucesso!';


        break;

    case 'delete':
        $status = $produto->delete(3);

        if (!$status) {
            echo 'O ID do produto não existe! Tente novamente.';
            return false;
        }

        echo 'Produto removido com sucesso!';

        break;

    default:
        # code...
        break;
}
