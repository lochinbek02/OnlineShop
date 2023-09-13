@extends('app')

@section('content')
    <div class="container " style="padding-top: 20px;">
        
        <form method="POST" action="{{route('person.registr',$id)}}">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">*F.I.O</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Manzil</label>
                <input style="height: 70px;" type="text" class="form-control" id="location" name="location" value="{{old('location')}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
    </div>
@endsection