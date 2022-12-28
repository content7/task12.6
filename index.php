<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];


function getFullnameFromParts($surname, $name, $patronomyc) {
    $fullName = $surname . ' ' . $name . ' ' . $patronomyc;
    return $fullName;
};

print_r (getFullnameFromParts('Иванов', 'Иван', 'Иванович'));

function getPartsFromFullname($fullNameString) {

    $fullname = ['surname' => '' ,'name' => '', 'patronomyc' => ''];
    $name = explode(" ", $fullNameString);
    $fullname['surname'] = $name[0];
    $fullname['name'] = $name[1];
    $fullname['patronomyc'] = $name[2];
    return $fullname;
};

echo "<pre>";
print_r(getPartsFromFullname($example_persons_array[0]['fullname']));
echo "</pre>";

function getShortName($fullName) {
    $shortName = getPartsFromFullname($fullName);
    return $shortName['name'] .' '. mb_substr($shortName['patronomyc'], 0, 1) .'.';       
};
print_r (getShortName('Иванов Иван Иванович'));


?>