<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<h1 class="container mt-5">Customer Details</h1>

<div class="container">
<button class="btn btn-light text-white">
	<a href="/customers">back</a>
</button>
<br>

<br><strong>Name </strong>

<br><p>{{$customer->name}}</p>
<strong>Email </strong>
<p>{{$customer->email}}</p>
<div>
	<a class="btn btn-info text-bold"href="/customers/{{$customer->id}}/edit">Edit</a><br>

	<form method="post" action="/customers/{{$customer->id}}">
		@method('DELETE')
		<br><button class="btn btn-danger text-bold">Delete</button>
		@csrf
	</form>
</div>
</div>