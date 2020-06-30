<?php
// People Array @TODO - Get from DB
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get query string, using REQUEST if it happens to be a post request we can get it as well
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
    // if string doesnt = to nothing get string  and length
    $q = strtolower($q);
    $len = strlen($q);
    // loop through people array
    foreach($people as $person){
        /// stristr find the first occurence of $q inside the person
        //substr to return part of the string
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion = $person;
                } else {
                    // append a person if already found someone and theres another name that matches
                    $suggestion .= ", $person";
                }
            }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;