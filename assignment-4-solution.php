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
            ($asciiValue >= 65 && $asciiValue <= 90)
            || ($asciiValue >= 97 && $asciiValue <= 122)
            || ($asciiValue == 32)
        )){
            $flag = false;
            break;
        }

    }

    return $flag;
}


/* =======================================================
    5. function to find second largest number in array
========================================================== */
function findSecondLargest($numArray):int{
    $maxValue = max($numArray);
    $secondLargest = 0;

    foreach($numArray as $num){
        if($num < $maxValue && $num > $secondLargest){
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}


/* =======================================================
    Result checking for each 5 self defined functions
    ======================================================= */

/* Result checking for function 1 */
$strs = array("Monir", "Islam", "Shojib", "Ostad");
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
$checkStr = "Monirul Islam 8";
if(checkString($checkStr)){
    echo "Yes, only letters and whitespace found in the string.";
}
else{
    echo "No. The string doesn't contain only letters and whitespace.";
}


/* Result checking for function 5 */
echo "\n\n============== Answer of problem 5 ==============\n\n";
$secondMax = findSecondLargest(array(12,6,7,9,5));
echo "Second Largest number in the given array is = $secondMax.";


echo "\n\n";