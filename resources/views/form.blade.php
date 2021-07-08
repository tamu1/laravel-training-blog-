<h1> User login </h1>

<form action="form" method="POST">
@csrf
<input type="text"name="username"placeholder="enter user id" />
<br>
<span style="color: red"> @error('username'){{$message}}@enderror </span>
<br>
<input type="password"name="password"placeholder="enter user password" />
<br>
<span style="color: red"> @error('password'){{$message}}@enderror </span>

<br>
<button type="submit">Login </button>
</form>