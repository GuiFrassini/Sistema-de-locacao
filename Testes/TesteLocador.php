<?php

require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Endereco.php');

function TesteLocador()
{
    $endereco =  new Endereco(1,4106902,'81293-123',223,'Sitio Cercado');

    $locador = new Locador(22, 'Jóse Almeida Teste', 'almeidalocacoes@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);


    echo "Informações do Locador " . "\n". "\n";
    echo "Nome:" . $locador->getNome() . "\n";
    echo "Email para contato: " . $locador->getEmail() ."\n";
    echo "Telefone: " . $locador->getTelefone(). "\n";
    echo "CPF: ". $locador->getCpf() . "\n";
    echo "Endereço completo -" . $locador->getEndereco() . "\n"."\n";


}

TesteLocador();