<?php
// crie um aplicativo que leia as notas de um aluno nos quatros bimestres
// calcule a media e se o aluno teve nota maior ou igual a 7 aprovado
// se teve nota menor que 7 reprovado

$nota1=10;
$nota2= 10;
$nota3= 8;
$nota4= 7;

$media = ($nota1 + $nota2 + $nota3 + $nota4 )/4 ;

if ($media >= 7){
    print 'O Aluno foi Aprovado';
}
else if($media <7 && $media >= 5){
    print ' O Aluno esta de Recuperação';
} else {
    print 'O Aluno foi Reprovado';
}