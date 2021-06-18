<?php

namespace App\Core\Database;

use PDO;

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

    public function insert ($table, $parametros)
    {
        $sql= "INSERT INTO `usuarios`(`nome`, `email`, `senha`, `foto`) VALUES ('{$parametros['nome']}','{$parametros['email']}','{$parametros['senha']}','{$parametros['foto']}')";
        
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function delete($table, $id)
    {
        $sql = "delete from {$table} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }
    
    }

    // public function edit ($table, $parametros)
    // {
        
    //     $sql = "UPDATE `{$table}` SET `nome`='{$parametros['nome']}',`email`='{$parametros['email']}',`senha`='{$parametros['senha']}',`foto`='{$parametros['foto']}' WHERE '{$table}' . 'id' = '{$parametros['id']}' ";
    //     try {
    //         $stmt = $this->pdo->prepare($sql);

    //         $stmt->execute();
            
    //      } catch (Exception $e) {
    //          die($e->getMessage());
    //      }

    // }
    public function edit($usuarios , $parametros)
    {
        $sql = "UPDATE `{$usuarios}` SET ";
        
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
    
    
}
