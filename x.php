<html>
<head>
<style>
body {
    text-align: center;
    background-color: black;
    Color: white;
}
</style>
</head>
<body>
<p><img width="400" src="https://labtask185.s3.amazonaws.com/whizlabs-logo.png"/></p>
<?php
$TOKEN=`curl -X PUT "http://169.254.169.254/latest/api/token" -H "X-aws-ec2-metadata-token-ttl-seconds: 21600"`;
$instance_id = `curl -H "X-aws-ec2-metadata-token: $TOKEN" http://169.254.169.254/latest/meta-data/instance-id`;
echo '<h1>Instance Id : '.$instance_id.'</h1><br>';
?>
<h2>
<?php
$id = $_GET['id'];
if($id) {
    echo "The id is : ".$_GET['id'];
    echo "<br/>";
}
date_default_timezone_set("America/New_York");
echo "The Date and Time is : " . date("d-m-Y h:m:sa");
?>
</h2>
</body>
</html>
