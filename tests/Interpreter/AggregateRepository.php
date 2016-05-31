<?php namespace Test\Interpreter;

class AggregateRepository implements \App\Interpreter\AggregateRepository
{
    private $ast_repository;
    
    public function __construct(\Test\Interpreter\AstRepository $ast_repository)
    {
        $this->ast_repository = $ast_repository;
    }
    
    public function fetch_ast($id)
    {
        return $this->ast_repository->aggregate();
    }
}