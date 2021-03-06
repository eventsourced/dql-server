<?php namespace App\Interpreter\Update;

use App\Interpreter\Query\ValueFactory;

class Factory 
{       
    private $pdo;
    private $sql_factory;
    
    public function __construct(\PDO $pdo, SQLFactory $sql_factory)
    {
        $this->pdo = $pdo;
        $this->sql_factory = $sql_factory;
    }
    
    public function ast($ast)
    {
        $sql = $this->sql_factory->ast($ast);
        $statement = $this->pdo->prepare($sql);
        $value_factory = new ValueFactory($ast->statements);
        return new Interpreter($statement, $value_factory);
    }   
}