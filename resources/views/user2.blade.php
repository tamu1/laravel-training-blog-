<h1> Hello from user blade</h1>
@include('inner')


@foreach ($users as $user)
<h4>{{$user}}</h4>
@endforeach

<script>

var data= @json($users);
console.warn(data)
</script>


