@extends('layout/admin')
@section('body')
<div class="card-footer small mutted"></div>
    <table class="table">
      <h3>Category</h3>
      <a href="{{route('admin.category.create')}}"class="btn btn-primary">Add</a>
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
      <td><a href="{{route('admin.category.edit',['category'=>$object->id])}}"><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
      <td></a>
      <a href="{{route('admin.category.destroy',['category'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('category-delete-{{ $object->id }}').submit() :0;" class="fa-solid fa-trash text-danger">
                              <form action="{{ route('admin.category.destroy', ['category' => $object->id]) }}" method="post" id="category-delete-{{ $object->id }}">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                              </form>
                          </a>
</td>
</tr>
@empty
<h1>Chua co du lieu</h1>
@endforelse

    </tr>
  </tbody>
</table>
</div>
@endsection