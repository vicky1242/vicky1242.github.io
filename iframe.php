
<?php
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,$_REQUEST['url']);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);
print_r($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iframe site</title>
</head>
<body>
	<style type="text/css">
		iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: 2px solid #000;			
		}
	</style> 
	<iframe src="<?php $query?>.https://gablesfurniture.com/"></iframe>
</body>
</html>