<h1> People list from database</h1>
<table border="1">
<tr>
<td>Id </td>
<td>Name </td>
<td>Lastname</td>
<td>Telephone </td>
<td>Email </td>
<td>Address </td>
</tr>
@foreach($peoples as $people)

<tr>
<td>{{$people['id']}} </td>
<td>{{$people['name']}} </td>
<td>{{$people['lastname']}}</td>
<td>{{$people['telephone']}} </td>
<td>{{$people['email']}} </td>
<td>{{$people['address']}}</td>
</tr>
@endforeach
</table>