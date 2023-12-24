<?php
// ARRAY WITH NAMES


$a[] = "amina";
$a[] = "amira";
$a[] = "Binta";
$a[] = "Muhammad";
$a[] = "Usman";
$a[] = "Maryam";
$a[] = "Zainab";
$a[] = "Khadija";

// get q param fon URL
$q = $_REQUEST["q"];

$hint = "";


// LOOKUP ALL HINTS FROM ARRAY IF Q IS DIFFERENT FROM ""
if($q !== "") {
    $q = strolower($q);
    $len=strlen($q);

    foreach($a as $name){
        if (stristr ($q, substr ($name,0, $len)))
    {
        if ($hint == ""){
            $hint = $name;
        }else{
            $hint .= ", $name";
        }
    }
}

}
// OUTPUT "NO SUGGESTION" IF NO HINT WAS FOUND OR OUTPUT CORRECT VALUES
echo $hint === "" ? "No  Suggestion": $hint;

?>