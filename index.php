<?php

require 'app/Database/DatabaseInterface.php';
require 'app/Database/Database.php';



$db = new JsonDatabase('database/user.json');

//$Auth = new Auth();
//
//$db->destroy(2);

// $db->edit([
//         'id'=> 3,
//         'name'=> 'Test',
//         'surname'=> 'Фамилия',
//         'login'=> 'Логин',
//         'password'=> 'хэшированный пароль'
// ], 3);


// $user = $db->show(4);
// var_dump($user);



// $db->store([
//     'name'=> 'Имя',
//     'surname'=> 'Фамилия',
//     'login'=> 'Логин',
//     'password'=> 'хэшированный пароль'
// ]);

// $allUsers = $db->index();
// var_dump($allUsers);