<?php
//selecionar a conta

include("conta.php");
include("conexao.php");
$conta = $_POST["conta"];
$conn = new Conexao();
$c = new Conta();
$linha = $c->selecionarConta($conta, $conn);
echo "Agência: $linha[agencia] <br> Conta: $linha[conta]<br>";
//definir e realizar a operação
switch ($_POST['operacao']) {
    case 'Saldo':
        $saldo = $c->getSaldo($conta, $conn);
        echo"Saldo: " . $saldo;
        break;

        case 'Saque':
            $result = $conta->sacar($conta, $conn, $valor);
            echo "Result: ".$result;
            break;

            case 'Deposito':
                $result = $conta->depositar($conta, $conn, $valor);
                echo"Result = " . $result;
                break;

                default:
                    echo"Operação invalida";
                    break;

}

?>