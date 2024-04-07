<?php

require_once ('../Entidades/Locador.php');
require_once ('../Entidades/Anuncio.php');
require_once ('../Entidades/Categoria.php');
require_once ('../Entidades/Endereco.php');
require_once ('../Entidades/Status.php');
require_once ('../Entidades/Adicionais.php');
require_once ('../Entidades/Contrato.php');
require_once ('../Entidades/Usuario.php');
require_once ('../Entidades/Reservas.php');

function TesteReservas()
{
    $status = Status::Reservado;

    $endereco =  new Endereco(1,4106902,'81293-123',223,'Sitio Cercado');
    
    $enderecoLocal = new Endereco(2,4106902,80220-202,889,'Água Verde');
    
    $locador = new Locador(22, 'Jóse Almeida Teste', 'almeidalocacoes@gmail.com', '41 4002-8933', '12123844221', '12345678911', $endereco);

    $categoria = new Categoria (1,'Infantil','Categoria destinada para crianças menores de 10 anos.');

    $anuncio = new Anuncio(1,'Salão Infaltil', $categoria, $enderecoLocal, 80,'Salão com espaço kids e fliperama para sua festa temática.',
        $locador,700.00, '21/10/2024',$status);

    $usuario = new Usuario('Ameilia Guarulhos','40028922','ameilia@gmail.com','12/12/1970','123.432.546-65');
    
    $adicionais = new Adicionais (1, 'salgados', $anuncio, $categoria, '100 salgados', 80.00, 'disponível', $status);
    
    $contrato = new Contrato (1,$locador, $usuario, $anuncio, $adicionais);

    $Reservas = new Reservas (1,'jose alves', $anuncio, '10/04/2024', 200.00, $contrato, 'debito', $status);



    echo "--------Reservas--------". "\n". "\n";
    echo "        ". $Reservas->getNome()."\n";
    echo "Anuncio: ". $Reservas->getAnuncio()->getDescricao(). "\n";
    echo "Dia da locação: ". $Reservas->getAnuncio()->getAgenda()."\n";
    echo "Valor da Reserva: ". $Reservas->getValor()."\n";
    echo "Contrato: ". $Reservas->getContrato()->getLocador()->getNome()."\n";
    echo "Forma de Pagamento: ". $Reservas->getFormaPagamento()."\n"."\n";
    print_r($status);
}

TesteReservas();