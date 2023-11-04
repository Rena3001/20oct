<?php
$arrs = [
    [
        "name" => "Rena",
        "surname" => "Verdiyeva",
        "email" => "verdiyevarana@gmail.com",
        "password" => "123"
    ],
    [
        "name" => "Aytac",
        "surname" => "Huseynova",
        "email" => "aytachuseynova@gmail.com",
        "password" => "456"
    ],
    [
        "name" => "Chinare",
        "surname" => "Musayeva",
        "email" => "musayevachinara@gmail.com",
        "password" => "789"
    ],
    [
        "name" => "Sabit",
        "surname" => "Bagirov",
        "email" => "bagirovsabit@gmail.com",
        "password" => "000"
    ]
];

$email=$_POST['email'];
$password=$_POST['password'];



    foreach ($arrs as $user) {
        if ($email === $user["email"] && $password === $user["password"]) {
            echo "salam " . $user["name"] . " " . $user["surname"];
            setcookie("login",true);
           exit;
        }
    }

    echo "bele bir user yoxdu";
    exit;



    // echo '<pre>';
    //  print_r ($arrs[$i]);








?>