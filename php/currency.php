<?php
    $from_currency    = 'USD';
    $to_currency    = $_POST["currencies"];
    $amount            = 100;
    $results = converCurrency($from_currency,$to_currency,$amount);
    $regularExpression     = '#\<span class=bld\>(.+?)\<\/span\>#s';
    preg_match($regularExpression, $results, $finalData);
    //echo $finalData[0];
    $resultado1 = substr($finalData[0], 16, -11);
    $resultado2 = floatval($resultado1);
    $resultado3 = $resultado2*2;
    $resultado4 = substr($finalData[0], -11);
    echo "$".number_format($resultado2, 2, ',', '.')." - $".number_format($resultado3, 2, ',', '.').$resultado4."*";


	function converCurrency($from,$to,$amount){
		$url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
		$request = curl_init(); 
		$timeOut = 0; 
		curl_setopt ($request, CURLOPT_URL, $url); 
		curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
		curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut); 
		$response = curl_exec($request); 
		curl_close($request);
		return $response;
	} 
?>