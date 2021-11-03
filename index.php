<?php
//fulltext
$a = "Alec Baldwin has shared comments from a crew member rejecting suggestions that the set of his film Rust was unsafe.
Cinematographer Halyna Hutchins died last month when the actor fired a gun that he had been told was not loaded.";
//link to full text text
$target = "fulltext.html";
//cutting 180 symbols from text and adding ellipsis
$b = substr($a,1,179) . '...';

echo '<pre></pre>';
echo($b);
//adding link to full text
echo '<a href="'.$target.'">not loaded...</a>';
?>

