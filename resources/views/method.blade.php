<h1>User Login  </h1>
<!-- method get and post 
<form action="submit"method="POST"> -->

<!-- METHOD PUT -->
<form action="submit"method="POST">
@csrf
<!--{{method_field('PUT')}}-->
{{method_field('DELETE')}}
<input type="text" name="user" placeholder="Enter user name" /> <br> <br>
<input type="password" name="password" placeholder="Enter user password" /> <br> <br>
<button> Login </button>
</form>