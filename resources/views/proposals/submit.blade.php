@extends('layouts.app')

@section('content')
<div class="container">	
<h2>Vous soumettez une proposition pour la mission "{{ $jobId->title }}"</h2>
<form method="POST" action="{{ route('proposals.submit.store', $jobId) }}" class="w-full max-w-md">
  @csrf
  <h3 class="text-green-700">Lettre de motivation</h3>
  <textarea style="width: 40%;height: 200px;" class="form-control" name="coverLetter" id="" cols="30" rows="10"></textarea>
  @error('coverLetter')
    <span class="text-red-400 text-sm">{{ $message }}</span>
  @enderror
  <br>	<button class="btn btn-success">Envoyez ma candidature</button>
</form>
</div>
@endsection