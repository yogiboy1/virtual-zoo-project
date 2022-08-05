<?php

$hash = '$2y$10$kWTdUuA6Wt5FsAbcUCu1jOoASrnoo.3bBkd/NxnXoV77.VWmNr.Ae';
$valid = password_verify('ygb123', $hash);

echo $valid ? 'Valid' : 'Not valid';