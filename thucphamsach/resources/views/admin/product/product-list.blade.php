@extends('layout/admin')
@section('body')
<div class="card-footer small mutted"></div>
<table class="table">
<h3>Product</h3>

<a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add</a>
<thead>
   
 </thead>
 <tbody>
@forelse($products as $object)
 <tr>
 <th scope="row">{{$object->id}}</th>
 <td>{{$object->name}}</td>
 <td>Otto</td>
 <td>@mdo</td>
 <td><i class="fa-solid fa-eye text-info"></i></td>
 <td><a href="{{route('admin.product.edit',['product'=>$object->id])}}"><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
 <td>

<a href="{{route('admin.product.destroy',['product'=>$object->id])}}" 
         title="Delete {{$object->name}}" 
         onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') 
                  ?document.getElementById('product-delete-{{ $object->id }}').submit() :0;" 
         class="fa-solid fa-trash text-danger">
 <form action="{{ route('admin.product.destroy', ['product' => $object->id]) }}" method="post" id="product-delete-{{ $object->id }}">
 {{ csrf_field() }}
 {{ method_field('delete') }}
</form>
</a>
      </td>
    </tr>
@empty
<h1>Chua co du lieu</h1>
@endforelse
</tbody>
</table>
</div>

@endsection