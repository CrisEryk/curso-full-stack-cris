<?php
class Conexao{

    public function criarConexao(){
        try{//tentará fazer os comandos dentro dessa chave
        $conn = new MySQli('localhost','root','','banco');
        }catch(Exception $e){
            die("Connection failed: " . $conn->connect_error);
        }finally{
            return $conn;
        }
    }

    public function selecionarConta($sql){
        try{
            $conexao = $this->criarConexao();
            $result = mysqli_query($conexao, $sql);
            $linha = mysqli_fetch_array($result);
            return $linha;
        }catch(Exception $e){
            die("Connection failed: " . $e->getMessage());
        }finally{
            mysqli_close($conexao);//fechar conexao
        }
    }

    public function dml($sql){
        try{
            $conexao = $this->criarConexao();
            mysqli_query($conexao, $sql);
            if (mysqli_affected_rows($conexao)){
                return TRUE;
            }else{
                return FALSE;
            }
        }catch(Exception $e){
            die("Connection failed: " . $e->getMessage());
            return FALSE;
        }finally{
            mysqli_close($conexao);//fechar conexao
        }
    }
}


?>