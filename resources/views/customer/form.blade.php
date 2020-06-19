
<div class="form-group">
	<label for="name">Name:</label>
	<input type="text"  class="form-control"name="name" autocomplete="off" value="{{old('name')??$customer->name}}" >
</div>
<p class="alert-danger pd-5">@error('name'){{$message}}@enderror</p>
<div class="form-group">
	<label for="email">Email</label>
	<input type="text" class="form-control" name="email" autocomplete="off" value="{{old('email')??$customer->email}} ">
	
</div>
<p class="alert-danger">@error('email'){{$message}}@enderror</p>
@csrf