@extends('main')
@section('title','about')
@section('container')

<ul class="list-unstyled">
  <li>ini berisi berita</li>
  
</ul>

@for ($i=0; $i < 10; $i++)

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x500" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">ini judul</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endfor
@endsection