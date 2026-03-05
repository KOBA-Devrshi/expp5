<?php

$languages = array(
"Java",
"JavaScript",
"Python",
"C",
"C++",
"C#",
"PHP",
"Ruby",
"Swift",
"Kotlin",
"Go",
"Rust",
"HTML",
"CSS",
"TypeScript"
);

$query = $_POST['query'];

foreach($languages as $lang)
{
    if(stripos($lang, $query) !== false)
    {
        echo "<div class='item'>".$lang."</div>";
    }
}

?>
