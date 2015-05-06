<HEAD>
<Title>
    Create Account
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='../stylesheets/maincss.php'>
</HEAD>
<body>
<BR>
<BR>
<form name='blogiform' method='POST' action='<?php echo $PHP_SELF;?>'>
<input type='hidden' name='uact' value='create'>
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
			Full Name
		</td>
		<td width='50%'>
			<input type='text' name='name' value='' class='formfield'>
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
		<td align='right' width='50%'>
			Confirm Password
		</td>
		<td width='50%'>
			<input type='password' name='confpwd' value='' class='formfield'>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<input type='Submit' name='Submit' value='Submit' class='formbutton'>
		</td>
	</tr>
</form>
	<tr>
		<td colspan='2' align='center'>
			<BR>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<?php
				include ('createuser.php');
			?>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<BR>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<a href='allusers.php' target='allUsers'>View All Users</a>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<BR>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<iframe name='allUsers' frameborder='0' src='blank.php'></iframe>
		</td>
	</tr>
</table>
</body>
