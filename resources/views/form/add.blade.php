@extends('layouts.app')

@section('content')

<div class="py-12 container">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <form action="{{ route('jobs.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2" @submit.prevent="submit">
          @csrf
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div> --}}
          
          <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-gray-700 text-sm font-bold mb-2" for="title">
                  Titre de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow" id="title" name="title" type="text" v-model="form.title">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="description">
                  Description de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="description" name="description" type="text" for="description" v-model="form.description">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="price">
                  Salaire de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="price" name="price" type="text" v-model="form.price">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="attach">
                  Attachement
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="attach" name="attach" type="text" value="NULL" v-model="form.attachement">
                </div>
            </div>
            <div class="mb-4 form-group row">
                <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="status">
                  Statut de la mission
                </label>
                <div class="col-sm-10">
                  <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="status" name="status" value=1 v-model="form.status">
                </div>
            </div>
            <div class="mb-4 form-group row">
              <label class="col-sm-2 col-form-label text-grey-darker text-md font-bold mb-2" for="user_id">
                Id de l'utilisateur
              </label>
              <div class="col-sm-10">
                <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="user_id" name="user_id" v-model="form.user_id">
              </div>
          </div>
            <div class="flex items-center justify-between">
                <button class="btn btn-success" style="marker-right: 2px py-2 px-4 rounded" type="submit">
                  Créer une mission
                </button>
                <button class="btn btn-danger" style="margin-left: 2px py-2 px-4 rounded " type="reset">Reset</button>
              </div>
        </form>
    </div>
  </div>
</div>
@endsection