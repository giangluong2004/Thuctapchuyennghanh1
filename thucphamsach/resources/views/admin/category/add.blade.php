@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <form action="{{route('admin.category.store')}}"method="post">
          @csrf()
  <div class="mb-3">
    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name"class="form-control" id="name" aria-describedby="emailHelp">
    </div>
  <button type="submit" class="btn btn-primary">Add new</button>
</form>
    </div>
</div>
@endsection