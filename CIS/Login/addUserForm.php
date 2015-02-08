<html>
<head>
<title>Classroom Interactive System</title>
</head>
<body>
<h1>Sign-up</h1>
<form method="post" action="addUser.php">
    <table>
	<tr>
	<td><label for="username">Username:</label></td>
    <td><input type="text" id="username" name="username" required="required"/><br /></td>
	</tr>
	
	<tr>
	<td><label for="password">Password:</label></td>
	<td><input type="password" id="password" name="password" size="16" required="required"/><br /></td>
	</tr>
	
	<tr>
	<td><label for="email">Email:</label></td>
	<td><input type="email" id="email" name="email" size="32" required="required"/><br /></td>
	</tr>
	
	<tr>
	<td><label for="tel">10 digit phone number:</label></td>
	<td><input type="tel" id="tel" name="tel" size="10" required="required"/><br /></td>
	</tr>
	<tr>
	<td><label for="provider">Cell phone provider:</label><br></td>
	<td><select name="provider">
		<option name="provider" id="provider" value="@txt.att.net">AT&amp;T</option>
		<option name="provider" id="provider" value="@myboostmobile.com">Boost Mobile</option>
		<option name="provider" id="provider" value="@mymetropcs.com">Metro PCS</option>
		<option name="provider" id="provider" value="@messaging.sprintpcs.com">Sprint</option>
		<option name="provider" id="provider" value="@tmomail.net">T-Mobile</option>
		<option name="provider" id="provider" value="@vtext.com">Verizon</option>
		<option name="provider" id="provider" value="@vmobl.com">Virgin Mobile</option>
	</select></td>
	</tr>
	<tr>
	<td><input type="submit" value="Sign-up!" name="submit" />	</td></tr>
</form>
</table>

Return to <a href='../../../launchpage/'>Launch site.</a>

</body>
</html>