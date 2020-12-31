@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-3xl text-green-500 mb-5">{{ $job->title }}</h1>
      <div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
  <p class="text-base text-gray-700 mb-4">
  {{ $job->description }}
  </p>
  <p> {{ number_format($job->price / 100, 2, ',', ' ') }} f CFA</p>
</blockquote>
</div>
</div>
  <button type="button" class="btn btn-success"><a href="{{ route('proposals.submit', $job->id) }}" style="color:white;text-decoration:none;">Soumettre une proposition</a></button>
  </div>
@endsection



{{-- @extends('layouts.app')

@section('content')
<div class="container">	
  <h1 class="text-3xl text-green-500 mb-5">{{ $job->title }}</h1>
      <div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
  <p class="text-base text-gray-700 mb-4">
  {{ $job->description }}
  </p>
  <p> {{ number_format($job->price / 100, 2, ',', ' ') }} €</p>
</blockquote>
</div>
</div><br>	

<section x-data="{open:false}">
	 <a href="#" @click= "open=!open">cliquez-ici pour soumettre votre candidature</a>
	 <form x-show="open" x-cloak method="post" action="{{route('proposals.store',$job)}}">
	 	@csrf
	 	<textarea style="width: 40%;height: 200px;" class="form-control" name="content" id="" cols="30" rows="10"></textarea>
	 	<br><p><button class="btn btn-success">Soumettre ma lettre de motivation</button></p>
	 </form>
</section>
  </div>
@endsection --}}