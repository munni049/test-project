<?php   include "ApiAgent.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$auth = new Authentication("U2194343", "sumainapi", "test1234");

$dateFrom = "2011-01-01 00:00:00";    
$dateTo = "2011-01-12 00:00:00";

$apiAgent = ApiAgentFactory::createApiAgent(ApiAgentFactory::JSON, $auth);
$history = $apiAgent->accountName("U2194343");

echo $history;
?>
</body>
</html>