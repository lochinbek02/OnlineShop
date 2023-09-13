@extends('app')

@section('content')
@foreach ($arr as $item)
   
   <div class="categories-shop">
       <div class="container">
           <div class="row">
               @foreach($item as $key => $value)
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style=" padding-top: 10px;">
                   <div class="shop-cat-box text-center">
                       <img class="img-fluid" style="border-radius: 5px; width: 200px; " src="{{asset('storage/'. $value[0])}}" alt="" />
                       <br>
                       <a class="btn hvr-hover " href="{{ route('about.laptops',$value[1]) }}"><strong>{{$key}}</strong></a>

                        
                   </div>
                   
               </div>
               @endforeach
               
               
           </div>
       </div>
   </div>
   @endforeach
@endsection