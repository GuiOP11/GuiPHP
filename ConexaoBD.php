<!--  APÓS ESSA LINHA, TUDO SERÁ APAGADO

$conexao = ConexaoBD::conectar();

$sql = "insert into carro (modelo, marca, ano) values ('Strada Vermelha','Fiat','2013')";
$sql = "delete from carro  where idcarro=3 ";

$conexao->exec($sql); -->
<?php

class ConexaoBD{
    public static function conectar():PDO{

        $conexao = new PDO ("pgsql:host=localhost;dbname=terceiro_a", "postgres","postgres");
        return $conexao;
        
    }
    
}












