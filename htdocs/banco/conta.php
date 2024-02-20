<?php

class Conta
{
    private $agencia = "";
    private $conta = "";
    private $saldo = "0";
    private $senha = "";

    public function selecionarConta($conta, $conn){
        try{
            $sql = "SELECT * FROM contas WHERE conta = $conta";
            $linha = $conn->selecionar($sql);
            return $linha;
        }catch(Exception $e){
            die("Connection failed: " . $e->getMessage());
        }
    }

    function criarConta($a, $c, $sa, $se, $conn){
        try{
            $sql = "INSERT INTO contas (agencia, conta, saldo, senha) VALUES ('".$a."','".$c."','".$sa."','".md5($se)."')";
            $result = $conn->dml($sql);
            return $result ? "Conta criada com sucesso" : "Erro ao criar conta";
        }catch(Exception $e){
            die("Connection failed: " . $e->getMessage());
            return "Erro ao criar conta";
        }
    }

    function sacar($conta, $conn, $valor)
    {
        try {
            //saber o saldo
            $saldo = $this->getSaldo($conta, $conn);
            //verificar se há saldo suficiente
            if ($saldo >= $valor) {
                //caso sim, subtrair
                $saldo -= $valor;
                //e atualizar o saldo
                $result = $this->setSaldo($conta, $conn, $saldo);
                return $result ? "Saque realizado com sucesso" : "A operação de saque falhou";
            }else {
                echo 'Saldo insuficiente!';
            }
        } catch (Exception $e) {
            die("Conexão falhou: " . $e->getMessage());
            return 'Saque não realizado';
        }

    }
    function login($a, $c, $se, $conn){
        try{
            $sql = "SELECT agencia, conta, senha FROM contas WHERE conta = '$conta'";
            $linha = $conn->selecionar($sql);
            if($linha["agencia"] == $a && $linha ["conta"] == $c && $linha["senha"] == md5($se)){
                return "acesso permitido";
            }else{
                return "acesso negado";
            }
            
        }catch(Exception $e){
            die("Connection failed: " . $e->getMessage());
            return "acesso negado";
        }
    }

    public function getAgencia()
    {
        return $this->agencia;
    }
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function getConta()
    {
        return $this->conta;
    }
    public function setConta($conta)
    {
        $this->conta = $conta;
    }


    public function setSaldo($s)
    {
        $this->saldo = $s;
    } 
    function getSaldo($conta, $conn){
        $sql = "SELECT saldo FROM contas WHERE conta = $conta";
        $linha = $conn->selecionar($sql);
        return $linha['saldo'];
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
}
