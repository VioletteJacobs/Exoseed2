@extends('template.main')
@section('content')
<div class="container">
    <h1>Rajouter une Compagny</h1>
    {{-- message d'alerte si un élément n'est pas complet.  --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="add-compagny" method="POST">
        
        @csrf
        <div class="form-group">
            <label >Compagny's Name</label>
            <input type="Name" name="Compagny" value="{{old("Compagny")}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >Compagny's Adress</label>
            <input type="Adress" name="Adresse" value="{{old("Adresse")}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >Compagny's Phone</label>
            <input type="Phone" name="phone" value="{{old("phone")}}"  class="form-control" >
        </div>
        <div class="form-group">
            <label >Compagny's Email</label>
            <input type="Email" name="email" value="{{old("email")}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >contact's name</label>
            <input type="name" name="name" value="{{old('name')}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >contact's surname</label>
            <input type="surname" name="surname" value="{{old('surname')}}" class="form-control" >
        </div>
        <div class="form-group">
            <label >SRC</label>
            <input type="src" name="src" value="{{old('src')}}" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection