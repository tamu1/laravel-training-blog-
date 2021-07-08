<h1>People list </h1>
<table border="">
<tr>
<td>Id</td>
<td>Name</td>
<td>Lastname</td>
<td>Telephone</td>
<td>Email</td>
<td>Address</td>

</tr>
@foreach($peoples as $people)
<td>{{$people['id']}}</td>
<td>{{$people['name']}}</td>
<td>{{$people['lastname']}}</td>
<td>{{$people['telephone']}}</td>
<td>{{$people['email']}}</td>
<td>{{$people['address']}}</td>

</tr>

@endforeach
</table>
<div>
{{$peoples->links()}}
</div>
<style>
.W-5{
    display:none
}