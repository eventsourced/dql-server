<?php namespace App\Interpreter\Query;

class Interpreter
{
    private $statement;
    private $value_factory;
    
    public function __construct(\PDOStatement $statement, ValueFactory $value_factory)
    {
        $this->statement = $statement;
        $this->value_factory = $value_factory;
    }
        
    public function query($root)
    {
        $values = $this->value_factory->context($root);
        $this->statement->execute($values);
        $rows = $this->statement->fetchAll(\PDO::FETCH_OBJ);
        
        return (object)$rows[0];
    }
}