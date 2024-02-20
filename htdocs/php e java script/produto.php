<?php
/*
class produto
{
    public $nome = "";
    public $quantidade = 0;
    public $preco = 0;
}
*/

class aluno
{
    public $nota1 = 0;
    public $nota2 = 0;
    public $nota3 = 0;
    public $nome = "";
}

class turma
{
    public function calc_media(aluno $aluno)
    {
        $media = ($aluno->nota1 + $aluno->nota2 + $aluno->nota3)/3;
        echo("
        aluno $aluno->nome <br>
        nota1: $aluno->nota1, <br>
        nota2: $aluno->nota2, <br>
        nota3: $aluno->nota3, <br>
        media: $media
        ");
    }
    public function realizar_chamada(){

    }
}

$aluno1 = new aluno();
$aluno1->nome = "Joaozinho";
$aluno1->nota1 = 10;
$aluno1->nota2 = 5;
$aluno1->nota3 = 7;

$turma = new turma();
$turma->calc_media($aluno1)


?>