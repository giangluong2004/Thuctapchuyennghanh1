@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <form action="{{route('admin.product.update',['product'=>$product->id])}}"method="post">
          @csrf()
          {{method_field('put')}}
  <div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name"value="{{$product->name}}"class="form-control" id="name" aria-describedby="emailHelp">
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</div>
@endsection