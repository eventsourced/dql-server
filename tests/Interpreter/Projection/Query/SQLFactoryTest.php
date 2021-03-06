<?php namespace Test\Interpreter\Projection\Query;

use App\Interpreter\Query\SQLFactory;

class SQLFactoryTest extends \Test\Interpreter\TestCase
{
    public function test_convert_invariant_ast_into_sql()
    {
        $ast = $this->fake_ast_repo->invariant_projection();
        
        $factory = new SQLFactory();
        
        $sql = "SELECT COUNT(shopper_id) AS cart_count FROM aggregate_5e867d81_9e3f_4a33_9150_6f4b373ba74f WHERE shopper_id =? AND is_created =?";
        
        $this->assertEquals($sql, $factory->ast($ast));
    }
}