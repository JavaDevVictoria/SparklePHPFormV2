<?php
require "config.php"; ?>



<html><head>
<title>SparklePHPForm V2.0</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<div align="center"><table>
<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 0pt">
<table cellpadding="10" cellspacing="5"><tr>
<tr><td width="400" style="border: 7px solid red; filter: alpha(opacity=100); background-color: white" valign="top" cellpadding="0" cellspacing="0">
<table bgcolor="white" cellspacing="0" cols="0" width="100%" style="padding-bottom: 10px">
<div align="center">
<br>
<div style="line-height: 5pt"><br></div>
</td></tr></table>
</div>
<div class="header">
</div>

 
<body>
<h1><?php echo $formname; ?></h1><br>
<form method="post" action="sendmail.php">

<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>
<input type=hidden name="ip" value="<?php echo $ipi ?>">
<input type=hidden name="httpref" value="<?php echo $httprefi ?>">
<input type=hidden name="httpagent" value="<?php echo $httpagenti ?>">


Your Name: <input name="name" type="text" /><br />
 Your Email: <input name="email" type="text" /><br />
  Your site address: <input name="site" type="text" /><br />
  Message:<br />
  <textarea name="feedback" rows="10" cols="40">
  </textarea><br />
  <input type="submit" />
</form>
<p>Powered by <a href="http://creamed-coconut.org" target=new>SparklePHPForm</a></p>
<p><a href="javascript:history.back(-2)">&laquo;&laquo;Back</a></p>
</body>
</html>