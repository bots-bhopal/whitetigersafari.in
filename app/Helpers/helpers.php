<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('cleanup')) {
    function cleanup($table_name)
    {
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE $table_name SET id = @count:= @count + 1;");
        DB::statement("ALTER TABLE $table_name AUTO_INCREMENT = 1;");
    }
}
