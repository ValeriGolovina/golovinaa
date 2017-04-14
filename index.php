<b>Hi</b>
<?php
$a=5;
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

$arr = [1, 2, 3];
print $arr[1];
$arr[4]=[1,2,44];
print $arr[4][2];
//ассоциативный массив
$langs =[
        'backend' =>['PHP', 'Pyton'],
        'frontend' => ['HTML'],
];
print $langs['backend'][1];
unset ($arr[1]);