<h1>Update people </h1>
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}"><br> <br>
<input type="text" name="name" value="{{$data['name']}}"> <br> <br>
<input type="text" name="lastname" value="{{$data['lastname']}}"> <br> <br>
<input type="text" name="telephone" value="{{$data['telephone']}}"> <br> <br>
<input type="text" name="email" value="{{$data['email']}}"> <br> <br>
<input type="text" name="address" value="{{$data['address']}}"> <br> <br>
<button type="submit"> Update </button>
</form>