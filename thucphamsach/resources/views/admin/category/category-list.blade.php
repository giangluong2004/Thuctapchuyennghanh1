@extends('layout/admin')
@section('body')
<div class="card-footer small mutted"></div>
    <table class="table">
      <h3>Category</h3>
      <a href=""class="btn btn-primary">Add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $object)
    <tr>
      <th scope="row">{{$object->id}}</th>
      <td>{{$object->name}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i class="fa-solid fa-eye text-info"></i></td>
      <td><i class="fa-solid fa-pen-to-square text-warning"></i></td>
      <td><i class="fa-solid fa-trash text-danger"></i></td>

@empty
<h1>Chua co du lieu</h1>
@endforelse

    </tr>
  </tbody>
</table>
</div>
@endsection