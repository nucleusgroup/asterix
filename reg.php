<html>
<head><title>
New file
</title>
</head>
<body>
<form action="" method="post">
		FName:<input type="text" name="uname">{{$errors->first('uname', '<span class="error">:message</span>')}}<br/>
        LName:<input type="text" name="uname">{{$errors->first('uname', '<span class="error">:message</span>')}}<br/>
		Email: <input type="email" name="email">{{ $errors->first('email','<span class="error">:message</span>')}}<br/>
		Password: <input type="password" name="password">{{ $errors->first('password','<span class="error">:message</span>')}}<br/>
		<input type="submit" name="signup" value="submit" >
		<input type="reset" name="reset" value="reset">
		<input type="shiva" name="shiva" value="shiva">
		</form>
</body>
</html>
