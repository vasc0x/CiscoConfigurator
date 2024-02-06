<?php
function myAutoLoad($Name) {
    $File = 'lib/' . str_replace('\\', DIRECTORY_SEPARATOR, $Name) . '.php';
    include_once($File);
}

spl_autoload_register(__NAMESPACE__ . '\myAutoLoad');
?>