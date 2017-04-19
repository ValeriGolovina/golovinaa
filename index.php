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
var_dump ($_GET);
var_dump ($_POST);
var_dump ($_SERVER);

