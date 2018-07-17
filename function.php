<?php
$persons = ["name"=> " person name", "age" => " 42", "name2" =>" Jen", "age2" => " 20"];

function ($persons) {
	array_push($persons, "john");
};

foreach($persons as $person){
	echo $person;
}

for($person = 0; $person < count($persons); $person++){
}

$average_of_age = array_sum($persons) / count($persons);