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

    public function numLinhas($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function paginacao($table, $pagina, $itensPorPagina)
    {
        $sql = "select * from {$table} LIMIT {$pagina}, {$itensPorPagina}";
        // die(var_dump($sql));

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
        $sql = "UPDATE `{$tabela}` SET ";
        
        //Adicionando os parametros
        foreach($parametros as $chave => $parametro)
        {
            $sql = $sql . "`{$chave}` = '{$parametro}', ";
        }
        
        //Tirando a ultima virgula
        $sql = rtrim($sql, " " . ",");
        
        //Adicionando o id
        $sql = $sql . " WHERE `id` = {$parametros['id']}";
        

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function selectProduto($tabela, $id)
    {
        $sql = "SELECT * FROM $tabela WHERE id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            // die(var_dump($stmt->fetch(PDO::FETCH_OBJ))); 

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function selectCategoria($tabela, $categoria)
    {
        $sql = "SELECT * FROM {$tabela} WHERE categoria LIKE '{$categoria}'";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function selectBusca($tabela, $busca)
    {
        $busca = trim($busca);
        $sql = "SELECT * FROM {$tabela} WHERE nome LIKE '%{$busca}%'";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
}
