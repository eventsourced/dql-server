<?php namespace Infrastructure\App\Interpreter\Apply;

use Infrastructure\App\Interpreter\Check;
use Infrastructure\App\Interpreter\Arguments;
use Infrastructure\App\Interpreter\NullInterpreter;

class Factory 
{   
    private $check_factory;
    
    public function __construct(Check\Factory $check_factory)
    {
        $this->check_factory = $check_factory;
    }
    
    public function ast($ast)
    {
        $check_interpreter = new NullInterpreter();
        if (isset($ast->assert)) {
            $check_interpreter = $this->check_factory->ast($ast->assert);
        }

        $arguments_interpreter = new Arguments\Interpreter($ast->arguments);
        
        return new Interpreter($check_interpreter, $arguments_interpreter);
    }   
}