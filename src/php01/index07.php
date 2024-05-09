<?php
$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['Hinako', 16, 'women']
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br/ >';
}
