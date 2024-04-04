<?php

class Status {
    private $status;

    public function __construct($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public static function EmProcessamento() {
        return new self('Em Processamento.');
    }

    public static function AguardandoPagamento() {
        return new self('Aguardando Pagamento.');
    }

    public static function DisponivelParaLocacao() {
        return new self('Local disponivel na data desejada.');
    }

    public static function Reservado() {
        return new self('Reservado.');
    }

    public static function Cancelado() {
        return new self('Cancelado.');
    }

    public function __toString()
    {
        return $this->status;
    }

}