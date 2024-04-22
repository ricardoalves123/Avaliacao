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
?>