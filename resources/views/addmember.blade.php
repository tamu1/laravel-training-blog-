<h1> Add people </h1>
<form action="add" method="POST">
@csrf
<input type="text" name="name" placeholder="enter name"> <br> <br>
<input type="text" name="lastname" placeholder="enter lastname"> <br> <br>
<input type="text" name="telephone" placeholder="enter phone no"> <br> <br>
<input type="text" name="email" placeholder="enter email"> <br> <br>
<input type="text" name="address" placeholder="enter address"> <br> <br>
<button type="submit">Add people </button>
</form>
