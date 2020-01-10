<?php
/**
 * Verifica se existe o arquivo em um servidor.
 *
 */

if ( !function_exists('storeBanner'))
{
    function storeBanner($stores) {
        foreach ($stores as $store) {
            if ($store->banners)  {
                foreach ($store->banners as $key => $value) {
                    $banners[$key]['alt'] = $store->name;
                    $banners[$key]['src'] = $value;
                }
            }
        }

        $count = count($banners);
        $rand = rand(1, $count);
        foreach ($banners as $key => $banner) {
            if ($key == $rand) {
                return $banner;
            }
        }
    }
}

/**
 * Verifica se file existe no servidor remoto
 */
if ( !function_exists('remoteFileExist'))
{
    function remoteFileExist($url) {
        $remoteFile = str_replace(' ', '%20', $url);
        $ch = curl_init($remoteFile);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if($httpcode>=200 && $httpcode<300){
            return true;
        } else {
            return false;
        }
    }
}

/**
 * Sorteia numeros.
 */
if ( !function_exists('sorteiaNumeros')) {
    function sorteiaNumeros($max, $total, $order = 0)
    {
        $sorteio = array();
        for ($i=1; $i<$max; $i++) {
            for ($a=1;;$a++) {
                $bola = rand(1,$total);
                if (in_array($bola, $sorteio) === FALSE) break;
            }
            $sorteio[$i] = $bola;
        }
        if ($order == 1) asort($sorteio);
        $result = '';
        foreach($sorteio as $numeros) {
            $result .= $numeros . ",";
        }

        return substr($result, 0, -1);
    }
}

/**
 * Return the date with string.
 *
 */
/**
 * Return Json
 */
if ( !function_exists('uniqueArray'))
{
    function uniqueArray($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }
}


if ( !function_exists('strDateBr'))
{
    function strDateBr()
    {
        officialDate();
        // Create Carbon date
        $dt = \Carbon\Carbon::now();
        return $dt->formatLocalized('%A, %d de %B - %Y');
    }
}



/**
 * Return Comments
 * @param string
 */
if ( !function_exists('getComment'))
{
    function getComment($str)
    {
        if ($str == 'name') {
            $first_name = config('names.first_name');
            $last_name = config('names.last_name');

            $rf = array_rand($first_name,1);
            $fn = $first_name[$rf];

            $rl = array_rand($last_name,1);
            $ln = $last_name[$rl];

            return "{$fn} {$ln}";

        } elseif ($str == 'second') {
            return \Carbon\Carbon::now()->subRealSecond(rand(1, 59))->diffForHumans();
        } elseif ($str == 'minute') {
            return \Carbon\Carbon::now()->subRealMinutes(rand(1, 59))->diffForHumans();
        } elseif ($str == 'hour') {
            return \Carbon\Carbon::now()->subRealHours(rand(1, 23))->diffForHumans();
        } elseif ($str == 'day') {
            return \Carbon\Carbon::now()->subRealDays(rand(1, 28))->diffForHumans();
        } elseif ($str == 'month') {
            return \Carbon\Carbon::now()->subRealMonths(rand(1, 11))->diffForHumans();
        } elseif ($str == 'year') {
            return \Carbon\Carbon::now()->subRealYear(rand(1))->diffForHumans();
        } elseif ('comments') {
            return rand(15, 100);
        }

    }
}


/**
 * Force locale
 */
if ( !function_exists('officialDate'))
{
    function officialDate()
    {
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
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





