<?php

class Produto
{
    // Atributos
    private $nome;
    private $preco;
    private $estoque;

    function __construct($no, $pr, $es)
    {
        $this->nome = $no;
        $this->preco = $pr;
        $this->estoque = $es;
    }

    // Métodos
    public function mostrarDados()
    {
        echo "<p>----------------------------------------------------------------------------------</p>";
        echo "<ul>
            <li>Produto: " . $this->getNome() . " | Preço: " . $this->getPreco() . " | Estoque: " . $this->getEstoque() . "</li>
        </ul>";
    }
    public function vender($qtd)
    {
        if ($qtd <= $this->getEstoque()) {
            echo "<p>----------------------------------------------------------------------------------</p>";
            $this->setEstoque($this->getEstoque() - $qtd);
            echo "<p>Você vendeu $qtd unidades do seu estoque!</p>";
        } else {
            echo "ERRO! Não é possivel vender, estoque maior ou insuficiente!";
        }
    }
    public function repor($qtd)
    {
        if ($qtd > 0) {
            $this->setEstoque($this->getEstoque() + $qtd);
            echo "<p>Você repôs $qtd unidades!</p>";
        } else {
            echo "Repor somente valores maiores que 0.";
        }
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }
}
