@extends('layouts.adminPannel')
@section('content')
<div class="d-flex justify-content-around ">
    <a href="{{ route('admin.index')}}" >
		<div class="bg-darkcyan-t p-2 text-white big_text shadow ">Users List</div>
	</a>
	<a href="{{ route('admin.create')}}" >
		<div class="bg-darkcyan-t p-2 text-white big_text shadow " >Create User</div>
	</a>
	<a href="{{ route('languages.index')}}" >
		<div class="bg-darkcyan-t p-2 text-white big_text shadow"
		style="border: 3px solid white; text-shadow: 2px 2px #000024"
		>Languages</div>
	</a>
	<a href="{{ route('jobProfiles.index')}}" >
   		<div class="bg-darkcyan-t p-2 text-white big_text shadow">Job Profiles</div>
	</a>
	<a href="{{ route('skills.index')}}" >
        <div class="bg-darkcyan-t p-2 text-white big_text shadow">Skills table</div>
    </a>
	<a href="{{ route('companies.index')}}" >
		<div class="bg-darkcyan-t p-2 text-white big_text shadow">COMPANIES table</div>
	</a>
	</div>
	<div class="d-flex justify-content-center my-3">
		<h3 class="text-white">Languages</h3>
	</div>
	<div class="d-flex justify-content-around mb-4">
    <a href="{{ route('languages.create')}}" >
		<button class="btn-custom btn-custom-blue">Add a new language</button>
	</a>
	</div>
<div class="d-flex justify-content-center  ">
	<table class="table col-6 bg-dark-t text-white big_text">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Language</th>
	      <th scope="col">Remove</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach ($languages as $language)
	    <tr>
	      <th scope="row">{{ $language->id}}</th>
	      <td>{{ $language->language_name}}</td>
	      <td class="text-danger font-weight-bold">
			<form method="POST" action="{{ route('languages.destroy', $language->id) }}">
			@csrf
			{{ method_field('DELETE') }}
			    
			<button type="submit" value="delete" class="bg-danger text-white pointer" onclick="return confirm('Are you sure to delete?')" style="border-radius: 100%; border:0; cursor: pointer;">X</button>
			</form>
			</td>
		    </tr>
		@endforeach
	  </tbody>
	</table>
</div>
	
@endsection