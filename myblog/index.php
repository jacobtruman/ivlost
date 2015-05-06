<HEAD>
<Title>
    My Blog
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='../stylesheets/maincss.php'>
</HEAD>
<body>
<BR>
<BR>
<form name='blogiform' method='POST' action='index.php'>
<input type='hidden' name='blogact' value='insert'>
<table width='80%' align='center' border='0'>
	<tr>
		<td align='right' width='50%'>
			Username
		</td>
		<td width='50%'>
			<input type='text' name='username' value='' class='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right' width='50%'>
			Password
		</td>
		<td width='50%'>
			<input type='password' name='pwd' value='' class='formfield'>
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
			<textarea name='content' value='' class='formfield' cols='60' rows='10'></textarea>
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
<input type='hidden' name='blogact' value='view'>
	<tr>
		<td colspan='2' align='center'>
			<input type='Submit' name='Submit' value='View' class='formbutton'>
		</td>
	</tr>
</form>
</table>
</body>
<?php
include ('blog.php');
?>