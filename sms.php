<html>
<head>
<title>SMS Message Sender</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">

<?php
include("config.inc");
include("functions.inc");

if ($submit)
{
echo "Sending the SMS Text message <b>\"$text\"</b> to the phone <b>$to</b>...<br>\n";
$URL = "/cgi-bin/sendsms?username=".USERNAME."&password=".PASSWORD."&from=".GLOBAL_SENDER."&to=$to&text=".urlencode($text);
http_send($URL,13013);
echo "<address><a href=\"$PHP_SELF\">Back to Send SMS</a></address>\n";
} else {

?>

<h1>SMS Message Sender</h1>
<form name="sendsms" method="post" action="<?php echo "$PHP_SELF" ?>">
<p>
Telephone number:
<br>
<input type="text" size="30" name="to">
</p>
<p>
Message:
<br>
<textarea cols="20" rows="5" name="text"></textarea>
</p>
<input type="submit" value="Send Message" name="submit">
<input type="reset" value="Reset">
<br>
</form>

<?php
}
?>

<p>
</p>
<hr>
<table border="0" width="100%">
<tr>
<td width="50%"><address><a href="index.php">Back to admin</a></address></td>
<td width="50%" align="right"><address>Visit the Kannel homepage at <a href="(URL address blocked: See forums rules)">(URL address blocked: See forums rules)</a>.</address></td>
</tr>
</table>
</body>
</html>