<?php
class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;
    public function __construct($numero, $descricao, $quantidade, $precoPorItem) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->precoPorItem = $precoPorItem;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    public function getPrecoPorItem() {
        return $this->precoPorItem;
    }

    public function setPrecoPorItem($precoPorItem) {
        $this->precoPorItem = ($precoPorItem > 0) ? $precoPorItem : 0.0;
    }
    public function getTotalFatura() {
        $total = ($this->quantidade > 0 && $this->precoPorItem > 0) ? $this->quantidade * $this->precoPorItem : 0.0;
        return $total;
    }
}
$fatura1 = new Fatura("001", "Teclado", 10, 25.5);
echo "Número da Fatura: " . $fatura1->getNumero();
echo "\nDescrição: " . $fatura1->getDescricao();
echo "\nQuantidade: " . $fatura1->getQuantidade();
echo "\nPreço por Item: " . $fatura1->getPrecoPorItem();
echo "\nTotal da Fatura: " . $fatura1->getTotalFatura();
class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;
    public function __construct($nome, $sobrenome, $salarioMensal) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }
    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }
    public function aplicarAumento($porcentagem) {
        $this->salarioMensal *= (1 + ($porcentagem / 100));
    }
}
$empregado1 = new Empregado("Jose", "Maria", 4000);
$empregado2 = new Empregado("Maria", "Jose", 5000);

echo "\nSalário anual do empregado 1: " . $empregado1->getSalarioAnual();
echo "\nSalário anual do empregado 2: " . $empregado2->getSalarioAnual();

$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);

echo "\nSalário anual do empregado 1 após aumento: " . $empregado1->getSalarioAnual();
echo "\nSalário anual do empregado 2 após aumento: " . $empregado2->getSalarioAnual();
?>