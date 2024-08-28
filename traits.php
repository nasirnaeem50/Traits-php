<?php
trait hello{
    public function greeting(){
        echo "welcome everyone";
    }
}
trait bye{
    public function goodbye(){
        echo "bye bye";
    }
}
class A{
    use hello;
}
class B{
    use bye;
}
$test =new A();
$test->greeting();
$test1=new B();
$test1->goodbye();

?>