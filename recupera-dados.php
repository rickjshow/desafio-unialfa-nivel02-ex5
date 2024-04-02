<?php

if(isset($_POST['enviar'])){
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade']) && isset($_POST['hobbie'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $hobbie = $_POST['hobbie'];

        if(strlen($nome) < 6){
            echo "<script>alert('O nome precisa ter no mínimo 6 caracteres!'); window.location.href='formulario.php';</script>";
        }elseif($idade < 18){
            echo "<script>alert('Você precisa ter no mínimo 18 anos de idade!'); window.location.href='formulario.php';</script>";
        }else{
            echo "<script>alert('Dados gravados com sucesso!'); window.location.href='formulario.php';</script>";
        }
    }
}