<?php

// birthDate must be a string like "DD/MM/YYYY"
function getAge(string $birthDate): int
{
  // explode the date to get day, month and year
  $birthDate = explode("/", $birthDate);

  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  return $age;
}
