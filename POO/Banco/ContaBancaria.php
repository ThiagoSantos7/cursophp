<?php

function convert($real)
{
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    return numfmt_format_currency($padrao, $real, "BRL");
}

class ContaBancaria
{
    private $nome;
    private $numConta;
    private $tipo;
    private $saldo;
    private $status;

    function __construct($no)
    {
        $this->setNome($no);
        $this->setNumConta(0);
        $this->setTipo("");
        $this->setSaldo(0);
        $this->setStatus("Fechada");
    }

    public function abrirConta($c)
    {
        if ($c == "CC") {
            $this->setTipo($c);
            $this->setStatus("Aberta");
            echo "<p>Olá " . $this->getNome() . ", Você abriu uma conta corrente!</p>";
        } elseif ($c == "CP") {
            $this->setTipo($c);
            $this->setStatus("Aberta");
            echo "<p>Olá " . $this->getNome() . ", Você abriu uma conta poupança!</p>";
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Saque seu dinheiro para fechar a conta!</p>";
        } else {
            $this->setStatus("Fechada");
            $this->setTipo("");
            echo "<p>Conta fechada com sucesso!</p>";
        }
    }
    public function depositar($dep)
    {
        if ($this->getStatus() == "Fechada") {
            echo "<p>Impossivel depositar, conta fechada!</p>";
        } else {
            if ($dep < 0) {
                echo "<p>Deposite um valor maior que 0!</p>";
            } else {
                $this->setSaldo($this->getSaldo() + $dep);
                echo "<p>Deposito de " . convert($dep) . " feito com sucesso!</p>";
            }
        }
    }
    public function sacar($sac)
    {
        if ($this->getSaldo() < $sac || $this->getStatus() == "Fechada") {
            echo "<p>Impossivel sacar!</p>";
        } else {
            if ($sac < 0) {
                echo "<p>Faça um saque válido!</p>";
            } else {
                $this->setSaldo($this->getSaldo() - $sac);
                echo "<p>Saque de " . convert($sac) . " feito com sucesso!</p>";
            }
        }
    }
    public function verSaldo()
    {
        echo "<p>Seu saldo encontrasse hoje em: " . convert($this->getSaldo()) . "</p>";
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function setNome($no)
    {
        $this->nome = $no;
    }
    public function setNumConta($num)
    {
        $this->numConta = $num;
    }
    public function setTipo($ti)
    {
        $this->tipo = $ti;
    }
    public function setSaldo($sa)
    {
        $this->saldo = $sa;
    }
    public function setStatus($st)
    {
        $this->status = $st;
    }
}
