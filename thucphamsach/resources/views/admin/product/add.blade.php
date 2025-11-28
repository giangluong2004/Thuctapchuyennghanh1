@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <form action="{{ route('admin.product.store') }}" method="post">
            @csrf()
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Add new</button>
            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection