<HEAD>
<Title>
    Contact Me
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='../stylesheets/maincss.php'>
</HEAD>
<body>
<BR>
<BR>
<form name='mailform' method='POST' action='send.php'>
<table width='80%' align='center' border='0'>
	<tr>
		<td align='right' width='50%'>
			Your Name
		</td>
		<td width='50%'>
			<input type='text' name='from' value='' class='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' width='50%'>
			Your Email Address
		</td>
		<td width='50%'>
			<input type='text' name='email' value='' class='formfield'>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			Subject
			<input type='text' name='subject' value='' class='formfield' size='50'>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			Message
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<textarea name='postedmessage' class='formfield' cols='60' rows='10'></textarea>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<input type='Submit' name='Submit' value='Submit' class='formbutton'>
		</td>
	</tr>
</form>
	<tr>
		<td colspan='2'>
			<BR>
		</td>
	</tr>
<form name='blogvform' method='POST' action='view.php' target='_blank'>
</table>
</body>