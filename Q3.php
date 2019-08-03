<?php
function string_contains($needle, $haystack) {
  if (stripos($haystack, $needle)  !== false) {
    //die('ss');
    return true;
  } else {
    //die('aaa');
    return false;
  }
}
echo assert(string_contains("seven", "Four score and seven years ago"));
// This works
echo assert(string_contains("Four", "Four score and seven years ago"));
// This should work
echo assert(string_contains("FOuR", "Four score and seven years ago"));
// This should work

?>
