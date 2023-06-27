<?php

// Exercice 1
$nb=42;
echo $nb;

$str='42';
echo $str;

$nbstr= "$nb";
echo $nbstr;

// Exercice 2
$nb_tab=[1, 2.5, 5, 8.2];
print_r($nb_tab);

$str_tab=['Bonjour', 'Marie', 'Laureline'];
print_r($str_tab);

// Exercice 3
$animal=[
    "species" => "Cat",
    "name" => "Happy",
    "age" => 8
];
print_r($animal, false);

//Exercice 4
$data=42;
$float=(float)$data;
echo "$float<br>";
$str=(string)$float;
echo "$str <br>";

// Exercice boucles
// Exercice 5
$animals=["Chat", "Chien", "Lapin", "Souris"];
foreach($animals as $animal)
{
    echo "$animal\n<br>";
}

// Exercice 6
$numbers=[28, 32, 44, -67, 18, 24, -98];
foreach($numbers as $number)
{
    if($number < 0)
    {
        echo "$number<br>";
    }
}

// Exercice 7
$user= [
    "firstName" => "Barack",
    "lastName" => "Obama"
];
echo "Je suis $user[firstName] $user[lastName], le 44ème président des USA.<br>";

// Exercice 8
$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];
foreach($users as $user)
{
    echo "$user[firstName] $user[lastName]<br>";
}



?>