<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<header>
<h1 style="margin-left: 90px; margin-top: 20px;">Edit Customer</h1>
</header>
<div class="container mt-5">
<form action="/customers/{{$customer->id}}" method="post">
	@method('PATCH')
	
@include('customer.form')

<button class="btn btn-success text-bold">Save Customer</button>
</form>
</div>