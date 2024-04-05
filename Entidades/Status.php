<?php

enum Status
{
    case EmProcessamento;
    case AguardandoPagamento;
    case DisponivelParaLocacao;
    case Reservado;
    case Cancelado;
}
