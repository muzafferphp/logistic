<html>
<header>
<title>Confirmation password in Logistic website</title>
</header>
<body>
	<table>
		<tr><td>Dear {{$name}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Please click on the below link to reset your account password!.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><a href="{{url('admin/confirm/'.$code)}}">Click here for password reset</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thanks & Regards</td></tr>
		<tr><td>Logistic Website</td></tr>
	</table>
</body>
</html>