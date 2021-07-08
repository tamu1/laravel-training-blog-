<h1> Member list to delete data </h1>
<table border="1">
<tr>
<td>Id </td>
<td>Name </td>
<td>Lastname</td>
<td>Telephone </td>
<td>Email </td>
<td>Address </td>
<td>Operation</td>
<td>Operation</td>
</tr>
@foreach($peoples as $item)

<tr>
<td>{{$item['id']}} </td>
<td>{{$item['name']}} </td>
<td>{{$item['lastname']}}</td>
<td>{{$item['telephone']}} </td>
<td>{{$item['email']}} </td>
<td>{{$item['address']}}</td>
<td><a href={{"delete/".$item["id"]}}> Delete </a></td>
<td><a href={{"edit/".$item["id"]}}> Edit </a></td>
</tr>
@endforeach

@if(session()->has('status'))
<div class="alert alert-danger alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
{{session()->get('status')}}
</div>
@endif


</table>