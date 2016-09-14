<?php

$to="navdeeshahuja@gmail.com";
$echostr="LOL. You script Kiddie :)";

if(isset($_POST['name']) && !empty($_POST['name']))
{
	$name=$_POST['name'];
	
	if(isset($_POST['mailid']) && !empty($_POST['mailid']))
	{
		$email=$_POST['mailid'];

		if(isset($_POST['message']) && !empty($_POST['message']))
		{
			$message=$_POST['message'];
			if(mail($to, "Contact Message (play.net16.net)", $message, '$name <'.$email.'>'))
			{
				$echostr="Your message was Sent<br>Navdeesh usually replies in a day or two";
			}
			else
			{
				$echostr="There was a problem with the Server<br><strong>Please try again</strong>";
			}
		}
		else
		{
			echo $echostr;
			die();
		}
	}
	else
	{
		echo $echostr;
		die();
	}
}
else
{
	echo $echostr;
	die();
}

?>

<!DOCTYPE html>

<style type="text/css">
	
	body
	{
		margin: 0;
		padding: 0;
	}

	div
	{
		position: absolute;
		width: 100%;
		height: 100%;
		text-align: center;
		font-size: 130%;
		font-family: 'Helvetica Neue', Helvetica, sans-serif, arial;
		color: white;
		text-align: center;
	}

	
	
</style>


<div style="background: #009999">
	<div style="background: rgba(0,0,0,0.8);">
		<aside style="position: relative;top: 30%;"><?php echo $echostr; ?></aside>
	</div>
</div>















