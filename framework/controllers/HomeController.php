<?php
use eftec\bladeone\BladeOne;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('id', '1')
                    ->where('email', 'test@test.com')
                    ->first();

        $views = '/var/www/framework/views';
        $cache = '/var/www/framework/cache';   
        $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); 
        echo $blade->run("hello", array("variable1" => "value1", "user" => $user));


        /* object(User)#10 (4) { 
            ["id"]=> int(1)
            ["name"]=> string(9) "TEST USER"
            ["email"]=> string(13) "test@test.com"
            ["password"]=> string(8) "password" }
        */ 
    }
}
