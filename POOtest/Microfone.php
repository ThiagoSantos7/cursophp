<?php
class Microfone
{
    var $modelo;
    var $ativado;
    var $corled;
    var $volume;

    function ligar()
    {
        if ($this->ativado == true) {
            echo "Microfone ativado e pronto para uso!";
        } else {
            echo "ERRO! Microfone desativado!";
        }
    }

    function ativar()
    {
        $this->ativado = true;
    }

    function desativar()
    {
        $this->ativado = false;
    }
}
