<?php

/**
 * Return the date with string.
 *
 */
if ( !function_exists('officialDate'))
{
    function officialDate()
    {
        // Force locale
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        // Create Carbon date
        $dt = \Carbon\Carbon::now();
        return $dt->formatLocalized('%A, %d de %B - %Y');
    }
}


/**
 * Return Json
 */
if ( !function_exists('typeJson'))
{
    function typeJson($array)
    {
        return json_decode(json_encode($array, FALSE));
    }
}
