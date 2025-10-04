<?php
    include("connect.php");
    $con = AppConnect();


    //Aqui o script para inserir novos convites
    $nome = 'Nome do convidade ';
    $telefone = '92991886655';
    $confirmacao = 'c'; //c = convidado; s = sim; n = não
    $query = "INSERT INTO convites (nome, telefone, confirmacao) VALUES ('{$nome}', '{$telefone}', '{$confirmacao}')";
    mysqli_query($con, $query);


    //Aqui o script para alterar os status novos convites
    $confirmacao = 's'; //c = convidado; s = sim; n = não
    $codigo = 1; //codigo da inscrição ou do convite

    $query = "UPDATE convites set confirmacao = '{$confirmacao}' WHERE codigo = '{$codigo}'";
    mysqli_query($con, $query);


    $query = "select * from convites order by nome";
    $result = mysqli_query($con, $query);
    while($d = mysqli_fetch_object($result)){
        echo "codigo: {$d->codigo} <br>";
        echo "Nome: {$d->nome} <br>";
        echo "Telefone: {$d->telefone} <br>";
        echo "Confirmação: {$d->confirmacao} <hr>";
    }

    ///Teste para iniciar o projeto