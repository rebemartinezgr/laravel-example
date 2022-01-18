<h1>{{$example->name}}</h1>
<p>
	{{$example->description}}
</p>

<a href="{{ route('delete', ['id' => $example->id]) }}">Remove</a>
<a href="{{ route('edit', ['id' => $example->id]) }}">Update</a>
