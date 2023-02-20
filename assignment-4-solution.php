<?php

/* =======================================================
    1. function to sort a array of strings
        according to string size in ascending order. 
========================================================== */
function sortArrayofStrings(string $a, string $b){
    if(strlen($a) == strlen($b))
        return 0;
    if(strlen($a) > strlen($b))
        return 1;
    else
        return -1;
}


/* =======================================================
    2. function to concatenate two strings 
========================================================== */
function concatString(string $str1, string $str2):string{
    return $str1.$str2;
}


/* =======================================================
    3. function to remove first and last element from an array
    and return remaining elements as a new array 
========================================================== */
function removeLastAndFirst($arr){
    array_shift($arr);
    array_pop($arr);

    return $arr;
}

/* =======================================================
    4. function to check is string contains only letters and whitespace
========================================================== */
function checkString(string $str){
    $len = strlen($str);
    $flag = true;

    for($i=0; $i < $len; $i++){
        $asciiValue = ord($str[$i]);

        if(!(
            ($asciiValue >= 48 && $asciiValue <= 57)
            || ($asciiValue >= 65 && $asciiValue <= 90)
            || ($asciiValue >= 97 && $asciiValue <= 122)
        )){
            $flag = false;
            break;
        }

    }

    return $flag;
}





/* =======================================================
    Result checking for each 5 self defined functions
    ======================================================= */

/* Result checking for function 1 */
$strs = array("Monir", "Sho", "Po", "Shojiboji", "taki");
// sorting the array of strings
usort($strs, "sortArrayofStrings");
echo "\n\n============== Answer of problem 1 ==============\n\n";
foreach($strs as $str){
    echo $str." ";
}


/* Result checking for function 2 */
echo "\n\n============== Answer of problem 2 ==============\n\n";
echo concatString("Monirul","Islam");


/* Result checking for function 3 */
$answer3 = removeLastAndFirst(array(1,2,3,4,5));
echo "\n\n============== Answer of problem 3 ==============\n\n";
foreach($answer3 as $item){
    echo $item." ";
}


/* Result checking for function 4 */
echo "\n\n============== Answer of problem 4 ==============\n\n";
$checkStr = "abcdefg123";
if(checkString($checkStr)){
    echo "Yes.";
}
else{
    echo "No.";
}