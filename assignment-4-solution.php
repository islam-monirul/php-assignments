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
    Result checking for each 5 self defined functions
    ======================================================= */

/* Result checking for function 1 */
$strs = array("Monir", "Sho", "Po", "Shojiboji", "taki");
echo "============== Before Sorting ============== \n";
foreach($strs as $str){
    echo "$str \n";
}

// sorting the array of strings
usort($strs, "sortArrayofStrings");

echo "============== After Sorting ==============\n";
foreach($strs as $str){
    echo "$str \n";
}


/* Result checking for function 2 */
echo concatString("Monirul","Islam");