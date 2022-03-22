<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <?php
        if (!function_exists($func = 'oci_connect')) {
            echo sprintf('FAIL: Function "%s" does not exist.', $func).PHP_EOL;
            exit(1);
        }

        exit(0);
        ?>
    </body>
</html>
