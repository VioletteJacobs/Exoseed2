@extends('template.main')
@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{$show->src}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$show->Compagny}}</h5>
          <p class="card-text">{{$show->Adresse}}</p>
          <p class="card-text">{{$show->phone}}</p>
          <p class="card-text">{{$show->email}}</p>
          <p class="card-text">{{$show->name}}</p>
          <p class="card-text">{{$show->surname}}</p>
        </div>
      </div>

</div>
    
@endsection