@extends('app')
@section('content')

<h1 class="text-center p-3">Xodim xaqida</h1>

<div class="container">
<div class="mb-3">
        <a href="{{route('post')}}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 2rem;" ></i></a> 
    </div>
<div class="rov">
    <div class="col-md-6">
    
    <table class="table table-bordered">
        <tr>
            <td>T/R</td>
            <td>{{$product['id']}}</td>
        </tr>
        <tr>
            
            <img class="img-fluid" style="border-radius: 5px; width: 200px; " src="{{asset('storage/'. $product->image)}}" alt="" />
            
          
        </tr>
        <tr>
            <td>Mahsulot xaqida</td>
            <td>{{ $product['title']}}</td>
        </tr>
        <tr>
            <td>Mahsulot narxi</td>
            <td>{{ $product['cost']}}</td>
        </tr>
        
        
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('buy', $product->id)}}"><button type="submit" class="btn btn-outline-success">Sotib olish</button></a>
            
    </div>
    </div>
</div>

</div>
@endsection