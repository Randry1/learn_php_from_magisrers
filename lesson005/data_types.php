<?php
error_reporting(E_ALL);

//*********************
// ТИПЫ ДАННЫЙХ В PHP
// string
// integer
// float (double)
// boolean
// array
// object
// null
// resource

$string = 'Hello World!';
$integer = -13;
$float = 2.3;
$boolean = true;
$array = array('sdf','dsf ',2,$string);// одномерные, ассоцеативные, многомерные
echo $array[1 - 1]; // => sdf
//$arrayTwo = array('sdf','dsf ',2,$string);// ассоцеативные, многомерные

class User {
    public $username = 'Владислав';
    public $email = "aa@aa.ru";

    public function GetUser(){
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$user = new User();
$username = $user->GetUser();
$user_email = $user->getEmail();

$null = null;

$resource = mysqli_connect();
echo 'asdsad';
?>

<pre>
<?= var_dump($username) ?>
</pre>

