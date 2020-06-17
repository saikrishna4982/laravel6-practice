<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="container mt-5">
<h1>Customer</h1>
<br>
<button class="btn btn-light text-black"><a href="/customers/create">Add New Customer</a></button><br>
@forelse($customers as $customer)
<br><p class="p-3 mb-2 bg-light text-black"><strong>
	<a href="/customers/{{$customer->id}}">{{$customer->name}} : </strong></a>  {{$customer->email}}</p>
@empty
<p>No Customer details found </p>
@endforelse
</strong>