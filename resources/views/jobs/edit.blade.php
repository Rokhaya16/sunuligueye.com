@extends('layouts.app')

@section('content')

<div class="py-12 container">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <form action="{{ route('jobs.edit', $job->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
          @csrf
          @method('put')
          <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-gray-700 text-sm font-bold mb-2" for="title">
                  Titre de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow" id="title" name="title" type="text" value="{{ old('title', $job->title) }}">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="description">
                  Description de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="description" name="description" type="text" for="description" value="{{ old('description', $job->description) }}">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="price">
                  Salaire de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="price" name="price" type="text" value="{{ old('price', $job->price) }}">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="attach">
                  Attachement
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="attach" name="attach" type="text" value="{{ old('attach', $job->attach) }}">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="status">
                  Statut de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="status" name="status" value="{{ old('status', $job->status) }}">
                </div>
            </div>
            <div class="mb-4 form-group row">
              <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="user_id">
                Id de l'utilisateur
              </label>
              <div class="col-sm-10">
                <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="user_id" name="user_id" value="{{ old('user_id', $job->user_id) }}">
              </div>
             </div>
             <button type="submit" class="btn btn-primary">mettre à jour</button>
        </form>
    </div>
  </div>
</div>
@endsection