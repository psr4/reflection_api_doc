<?php
\think\facade\Route::get('api/documents',"\\Reflection\\Api\\Doc\\Documents@run");

\think\Console::addDefaultCommands([
    "\\Reflection\\Api\\Doc\\Command",
]);
