@if(isset($example) && is_object($example))
	<h1>Edit example</h1>
@else
	<h1>Create example</h1>
@endif

<form action="{{ isset($example) ? route('update') : route('save') }}" method="POST">
	{{ csrf_field() }}

	@if(isset($example) && is_object($example))
		<input type="hidden" name="id" value="{{ $example->id }}"/>
	@endif

	<label for="name">Name</label>
	<input type="text" name="name" value="{{ isset($example) && is_object($example) ? $example->name : ''}}"/><br/>

	<label for="description">Description</label>
	<input type="text" name="description" value="{{ isset($example) && is_object($example) ? $example->description : ''}}"/><br/>

	<input type="submit" value="Save" />
</form>
