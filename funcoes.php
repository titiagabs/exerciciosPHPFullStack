<?php

    function exercicio01($num1, $num2){
       return "A soma é: ".((int)$num1 + (int)$num2);
    } // fim do exercicio01

    function subtrair($num1, $num2){
        return "A subtração é: ".((int)$num1 - (int)$num2);   
    } // fim metodo

    function multiplicacao($num1, $num2){
        return "A multiplicação é: ".((int)$num1 * (int)$num2);
    } // fim do metodo
    

    function divisao($num1, $num2){
        if($num2 == 0){
            return "Impossível dividir por zero!";
        }else if($num1 < 0 || $num2 < 0){
            return "Impossível dividir por números negativos!";
        }else{    
            return "A divisão é: ".((int)$num1 / (int)$num2);
        } // fim do if
    } // fim do metodo

    function potencia($num1,$num2){
        if($num2 < 0){
            return "Impossível calcular a potência!";
        }else{
            return "A potência é: ".pow((int)$num1, (int)$num2);
        }//fim do if
    } // fim do metodo

    function raiz($num1){
        if($num1 < 0){
            return "Impossível calcular raiz de número negativo!";
        }else{
            return "A raíz é: " .sqrt((int)$num1);
        }// fim do if
    } // fim do método

    //1. Verifique se um ano é bissexto.

    function bissexto($num1){
        if($num1 % 4 == 0 && $num1 % 100 != 0){
            return "O ano é bissexto.";
        }else{
            return "O ano não é bissexto!";
        }
    } // fim do bissexto

    //2. Verificar se um número está entre 100 e 200
    function verificarNumero($inicio, $fim, $num){
        for($i=$inicio; $i <= $fim; $i++){
            if($i == (int)$num){
                return true;
            }
        }// fim do for
        return false;
    } // fim do método

    //3. Leia a idade e verifique se pode votar: >=16 e < 18 facultativo; >= 18 obrigatório;
    function podeVotar($idade){
        if($idade >= 16 && $idade <= 18){
            return "Você pode votar. (voto facultativo)";
        }else if($idade >=18){
            return "Você TEM que votar!";
        }else{
            return "Você NÃO precisa votar.";
        }
    }// fim do método

    //5. Leia um número de 1 a 7 e mostre o dia da semana
    function diaDaSemana($num){
        switch($num){
            case 1:
                return "Domingo";
                break;//encerra o switch
            case 2:
                return "Segunda-Feira";
                break;
            case 3:
                return "Terça-Feira";
                break;
            case 4:
                return "Quarta-Feira";
                break;
            case 5:
                return "Quinta-Feira";
                break;
            case 6:
                return "Sexta-Feira";
                break;
            case 7:
                return "Sábado";
                break;
            default:
                return "O número informado é inválido!";
                break;
            }//fim switch
        }//fim metodo

    //6. Verifique se uma senha digitada é válida
    function validarSenha($senha){
        $senhaBD = 1234;
        if($senhaBD == $senha){
            return "Acesso Liberado!";
        }else{
            return "Senha Inválida!";
        }
    }

    //7. Leia 2 horários e determine qual é mais tarde.
    function maiorHorario($primeiro, $segundo){
        if($primeiro > $segundo){
            return "$primeiro é maior que o $segundo";
        }else{
            return "$segundo é maior que o $primeiro";
        }
    }

    //8. Leia 5 números e calcule a média
    function calcularMedia($primeiro, $segundo, $terceiro, $quarto, $quinto){
        $media = ((int)$primeiro+(int)$segundo+(int)$terceiro+(int)$quarto+(int)$quinto)/5;
        return "A média é: $media";
    }

    //9. Leia números até que a soma ultrapasse 100.
    function leiaNumeros($num1, $num2, $num3, $num4, $num5){
        $soma = ((int)$num1+(int)$num2+(int)$num3+(int)$num4+(int)$num5);
        if( $soma <= 100){
            return "A soma é $soma";
        }else{
            return "A soma ultrapassa 100!";
        }
    }
       


    //10. Solicite senhas até que uma válida seja informada.
    function senhaValida($senhaValida){
        $senha = 2003;
        if($senha == $senhaValida){
            return "Acesso Liberado";
        }else{
            return "Acesso Negado!";
        }
    }



    //11. Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso.
    function classificarIdade($idade){
        if($idade <12){
            return "Criança";
        }else if($idade >=12 && $idade <18){
            return "Jovem";
        }else if($idade >=18 && $idade <60){
            return "Adulto";
        }else{
            return "Idoso";
        }
    }
    
    //12. Verifique se um número par ou ímpar
    function imparPar($numero){
        if($numero % 2==0){
            return "O número é par";
        }else{
            return "O número é ímpar";
        }
    }

    // 13. Leia dois números e exiba o maior entre eles.
    function doisNum($num1,$num2){
        if($num1 > $num2){
            return "$num1 é maior que $num2";
        }else{
            return "$num2 é maior que $num1";
        }
    }


    // 14. Crie uma matriz identidade 4x4

    //15. Imprima os números de 1 a 100 com para.
    function imprimaNum($num){
        for($i=0;$i=99; $i++){
            return $i;
        }
    }
?>


