
<?php

//Trait....

// trait Calculation{
//     public function sum($a, $b){
//         return $a+$b;
//     }
// }

// trait Calculation2{
//     public function sub($a, $b){
//         return $a-$b;
//     }
// }

// class Addition {
//     use Calculation;
//     use Calculation2;

//     public function show(){
//         echo 'Hello World <br>';
//     }
// }

// $calc = new Addition();
// $calc->show();
// echo $calc->sum(20, 40).'<br>';
// echo $calc->sub(30, 20).'<br>';
// echo $calc->sum(50, 60);
//Trait....

//Interface....

// class Person {
//     public function show(){
//         echo 'This is person1';
//     }

//     public function test(){
//         echo 'This is a test function';
//     }
// }

// class Person2 {
//     public function show(){
//         echo 'This is person2';
//     }
// }

// class Children extends Person{
//     public function showChild(){
//         echo 'This is children';
//     }
// }

// $child = new Children();
// $child->show();

interface Person1{
    function show();
    function sum($a, $b);
    function sub($a, $b);
}

interface Animal{
    function show1();
    function mul2($a, $b);
    function div3($a, $b);
}

class children implements Person1, Animal{
    public function show(){
        echo 'This is a show function';
    }

    public function sum($a, $b){
        return $a+$b;
    }

    public function sub($a, $b){
        return $a-$b;
    }
    public function show1(){
        echo 'This is show1 function';
    }
    public function mul2($a, $b){
        return $a*$b;
    }
    function div3($a, $b){
        return $a/$b;
    }
    public function test(){
        echo 'This ia a test function<br>';
    }
}

$child = new children();
$child->test();
echo $child->sum(20, 30).'<br>';
echo $child->sub(20, 30).'<br>';
echo $child->mul2(20, 30).'<br>';
echo $child->div3(20, 30).'<br>';
?>