<?php
/*$a=5;
//var_dump($a);
//die('break');

define('Pi' , 3.14  );
//print Pi;
function hello($name = 'Friend')
{
    $message= "Hello" .$name."!<br>";
    if ($name === 'Friend') {
        $message = $message.'<a href ="">Login </a>';
        $message .= '<a href ="">Login </a>';
    }  elseif ($name === 'Lera') {$message = 'Yo man';}
    else {$message .= '<a href ="">Logout </a>';}
    return $message;
}
;
$message = hello('Lera');
print $message;
//Lesson3
$arr = [1, 2, 3];
print $arr[1];
$arr[4]=[1,2,44];
print $arr[4][2];
//ассоциативный массив
$langs =[
        'backend' =>['PHP', 'Pyton'],
        'frontend' => ['HTML'],
];
//print $langs['backend'][1];

foreach($langs as $key=>$value){
   print '<h2>'.$key.'</h2>';
   foreach ($value as $lang){
       print '<div>'.$lang.'</div>';

   }
}
$i=0;
while ($i<10) {
    print '<div>'.$i.'</div>';
    $i++;
}

do {echo 'Hi!'; break;} while(false);

//Lesson 4
//суперглобальные переменные _$GET
//var_dump ($_GET);
//var_dump ($_POST);
//var_dump ($_SERVER);
*/
//Lesson 5
//ООП
/*require_once 'src/GreetingHelper.php';
$helper = new GreetingHelper('Hello');

print $helper-> getMessage();
print $helper-> sayHello('Lera');
$helper1 = new GreetingHelper('Hi');
print $helper1-> sayHello('guest');

require_once 'src/Member.php';
echo "<br>";
$member = new Member;
$member->username = "Lera ";
echo $member->username."is ". ($member->isLoggedIn() ? " logged in". "<br>": " logged out". "<br>");
$member->login();
echo $member->username."is ". ($member->isLoggedIn() ? " logged in". "<br>": " logged out". "<br>");
$member->logout();
echo $member->username."is ". ($member->isLoggedIn() ? " logged in". "<br>": " logged out". "<br>");*/

//Lesson 6
//namespace-указываем путь к классу(классы с одинаковым названием в разных папках)
use Helper\GreetingHelper;

require_once 'src/Helper/GreetingHelper.php';
$helper = new GreetingHelper('Hello ');
print $helper-> getMessage();
print $helper-> sayHello('Lera');
echo "<br>";
$helper1 = new GreetingHelper('Hi');
print $helper1-> sayHello('guest');