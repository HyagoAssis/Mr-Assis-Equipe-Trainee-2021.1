<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insereProdutos ($table, $parametros)
    {
        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table,
            implode(', ', array_keys($parametros)),
            ':'. implode(', :', array_keys($parametros))
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parametros);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function delete($tabela, $id)
    {
        
        $sql = "delete from {$tabela} where id = {$id}";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function edit($tabela , $parametros)
    {
        $sql = "UPDATE `{$tabela}` SET 
        `nome` = '{$parametros['nome']}', 
        `preco` = '{$parametros['preco']}',
        `categoria` = '{$parametros['categoria']}', 
        `descricao` = '{$parametros['descricao']}', 
        `imagem` = '{$parametros['imagem']}'
        WHERE `{$tabela}`.`id` = {$parametros['id']}";
        
        //Tentar fazer um for

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
}
