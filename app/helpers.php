<?php
/**
 * curl get запрос
 * @param string $url
 * @return string
 * @throws Exception
 */
function curlGet($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0');
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($curl, CURLOPT_TIMEOUT, 120);
    $res = curl_exec($curl);
    if ($res) {
        return $res;
    } else {
        $error = curl_error($curl) . '(' . curl_errno($curl) . ')';
        throw new Exception($error);
    }
}

/**
 * Вывод отладочных данных
 * @param mixed $s
 */
function pr($s)
{
    echo '<pre>';
    print_r($s);
    echo '</pre>';
}
