<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="container mt-5">
<h1>Customer</h1>
<br>
<button class="btn btn-light text-black bordered"><a href="/customers/create"><strong>Add New Customer</strong></a></button>
<button class="btn  bg-white text-bold bordered"><a href="/customers?active=1"><strong>Active Customers </strong></a></button>
<button class="btn  text-black"><a href="/customers?active=0"><strong>In active customers</strong></a></button><br>
@forelse($customers as $customer)
<br><p class="p-3 mb-2 bg-light text-black"><strong>
	<a href="/customers/{{$customer->id}}">{{$customer->name}} : </strong></a>  {{$customer->email}}</p>
@empty
<p div class="container bg-info mt-5">No Customer details found </p>
@endforelse
</strong>