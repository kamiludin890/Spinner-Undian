<?php
// $n = 10;
// function getName($n)
// {
//     $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $randomString = '';

//     for ($i = 0; $i < $n; $i++) {
//         $index = rand(0, strlen($characters) - 1);
//         $randomString .= $characters[$index];
//     }

//     return $randomString;
// }
// getName($n);
echo substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
