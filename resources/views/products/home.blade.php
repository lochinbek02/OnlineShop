@extends('app')

@section('content')

<div class="container text-center ">
    <h2 >Mahsulot qo'shish</h2>
    <div class="row ">
    <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3 bg-info-subtle">
            <input type="file" class="form-control text-info" id="image" name="image">
        </div>

        <div class="input-group mb-3 bg-info-subtle">
            <span class="input-group-text text-info" id="basic-addon1">Mahsulot xaqida</span>
            <input type="text" class="form-control" placeholder="Mahsulot xaqida" id="title" aria-label="Title" aria-describedby="basic-addon1" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3 input-group bg-info-subtle">
        <span class="input-group-text text-info" id="basic-addon1">Mahsulot narxi</span>
            <input type="text" class="form-control" placeholder="Mahsulot narxini kiriting" id="cost" aria-label="Cost" aria-describedby="basic-addon1" name="cost" value="{{ old('cost') }}">
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-success">Submit</button>
            
        </div>
    </form>

        
    </div>
</div>

@endsection