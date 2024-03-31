<?php

require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Endereco.php');

function TesteLocador()
{
    $endereco =  new Endereco('1','Curitiba','81293-123','223','Sitio Cercado');

    $locador = new Locador('22','Jóse Almeida Teste','almeidalocações@gmail.com','41 4002-8933','12123844221','12345678911',$endereco);


    echo "Informações do Locador " . "\n";
    echo "Nome:" . $locador->getNome() . "\n";
    echo "Email para contato: " . $locador->getEmail() ."\n";
    echo "Telefone: " . $locador->getTelefone(). "\n";
    echo "CPF: ". $locador->getCpf() . "\n";
    echo "Cidade / Bairro de Residencia: " . $endereco->getCidade() . " / " . $endereco->getBairro(). "\n"."\n";


    //Testando Setters
    $locador->setNome("Marlon Almeida Teste");
    echo "Novo nome: " . $locador->getNome() . "\n"."\n";
    //Testando setters e alterando a cidade passando o parametro "endereço" da classe locador
    $locador->getEndereco()->setCidade("São Paulo");
    echo "Nova Cidade: " . $endereco->getCidade() . "\n"."\n";

    echo "Informações do Locador " . "\n";
    echo "Nome:" . $locador->getNome() . "\n";
    echo "Email para contato: " . $locador->getEmail() ."\n";
    echo "Numero de Telefone: " . $locador->getTelefone(). "\n";
    echo "CPF: ". $locador->getCpf() . "\n";
    echo "Cidade / Bairro de Residencia: " . $endereco->getCidade() . " / " . $endereco->getBairro(). "\n"."\n";
}

TesteLocador();