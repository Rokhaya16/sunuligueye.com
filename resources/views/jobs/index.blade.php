@extends('layouts.app')

@section('content')
<div class="container">
{{-- 	  <div class="card-header">
 <p style="font-weight:bold;">Nos dernieres missions</p>
  </div><br> --}}	
  @foreach($jobs as $job)
 <livewire:job :job="$job">
  @endforeach
  <br>
  </div>
@endsection
