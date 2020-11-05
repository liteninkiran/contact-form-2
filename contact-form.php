<?php

    $title      = isset($_POST['title'])       ? $_POST['title']       : '';
    $firstName  = isset($_POST['first-name'])  ? $_POST['first-name']  : '';
    $middleName = isset($_POST['middle-name']) ? $_POST['middle-name'] : '';
    $lastName   = isset($_POST['last-name'])   ? $_POST['last-name']   : '';
    $suffix     = isset($_POST['suffix'])      ? $_POST['suffix']      : '';
    $knownAs    = isset($_POST['known-as'])    ? $_POST['known-as']    : '';

    $fullName = '';

    if($title)      { $fullName .= $title        . ' '; }
    if($firstName)  { $fullName .= $firstName    . ' '; }
    if($middleName) { $fullName .= $middleName   . ' '; }
    if($lastName)   { $fullName .= $lastName     . ' '; }
    if($suffix)     { $fullName .= '('     . $suffix  . ')' . ' '; }
    if($knownAs)    { $fullName .= 'AKA "' . $knownAs . '"' . ' '; }

    echo $fullName . '<br><br>';

?>