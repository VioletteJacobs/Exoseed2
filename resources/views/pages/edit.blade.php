@extends('template.main')
@section('content')
<div class="container">
    <h1>MODIFIER une Compagny</h1>
    <form action="/update-compagny/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label >Compagny's Name</label>
            <input type="Name" value="{{$edit->Compagny}}" name="Compagny" class="form-control" >
        </div>
        <div class="form-group">
            <label >Compagny's Adress</label>
            <input type="Adress" name="Adresse" value="{{$edit->Adresse}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >Compagny's Phone</label>
            <input type="Phone" name="phone" value="{{$edit->phone}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >Compagny's Email</label>
            <input type="Email" name="email" value="{{$edit->email}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >contact's name</label>
            <input type="name" name="name" value="{{$edit->name}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >contact's surname</label>
            <input type="surname" name="surname" value="{{$edit->surname}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >SRC</label>
            <input type="src" name="src" value="{{$edit->src}}" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection