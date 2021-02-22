@extends('template.main')
@section('content')
<h1>Compagny</h1> 
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Compagny's name</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($DBCompagny as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->Compagny}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>
            <form action="delete-compagny/{{$item->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        <td><a href="show-compagny/{{$item->id}}" class="btn btn-primary"> Show</a></td>
        </td>
        <td><a href="edit-compagny/{{$item->id}}" class="btn btn-success"> Edit</a></td>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>   

    
@endsection