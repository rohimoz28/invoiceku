<?php

function cutString(string $string)
{
  // Split the string into an array based on the space character
  $words = explode(" ", $string);
  // Cut the array down to the first five words
  $cut_words = array_slice($words, 0, 4);
  // Join the cut words back into a string
  $cut_string = implode(" ", $cut_words);

  return $cut_string; // Outputs: "This is a long string"
}
