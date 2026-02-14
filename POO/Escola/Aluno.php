<?php

class Aluno
{
    private $nome;
    private $nota1;
    private $nota2;

    function __construct($no, $n1, $n2)
    {
        $this->setNome($no);
        $this->setNota1($n1);
        $this->setNota2($n2);
    }

    public function calculoMedia()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }
    public function situacao()
    {
        if ($this->calculoMedia() < 6) {
            echo "<p>Sua situação encontrasse: reprovado!</p>";
        } else {
            echo "<p>Sua situação encontrasse: Aprovado!</p>";
        }
    }
    public function mostrarDados()
    {
        echo "
        <ul>
            <li>Nome: " . $this->getNome() . "<br>Primeira nota: " . $this->getNota1() .
            "<br>Segunda nota: " . $this->getNota2() . "<br>Média: " . $this->calculoMedia() . "</li>
        </ul>";

        $this->situacao();
    }

    private function getNome()
    {
        return $this->nome;
    }
    private function getNota1()
    {
        return $this->nota1;
    }
    private function getNota2()
    {
        return $this->nota2;
    }

    private function setNome($no)
    {
        $this->nome = $no;
    }
    private function setNota1($n1)
    {
        $this->nota1 = $n1;
    }
    private function setNota2($n2)
    {
        $this->nota2 = $n2;
    }
}
