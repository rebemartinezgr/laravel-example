<h1>List</h1>

<h3><a href="{{ route('create') }}"> Create example</a></h3>

@if(session('status'))
<p style="background: green; color:white;">
	{{session('status')}}
</p>
@endif

<ul>
	@foreach($examples as $example)
		<li>
			<a href="{{ route('detail', ['id' => $example->id]) }}">
				{{$example->name}}
			</a>
		</li>
	@endforeach
</ul>
