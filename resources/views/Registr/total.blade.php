@extends('app')
 
@section('content')
    <h2 class="text-center">Registration page</h2>
    
    
    <div class="container">
   
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>T/R</th>
                <th>*F.I.O</th>
                
                <th>Email</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Mahsulot id</th>
            </tr>
        </thead>
        <tbody>

            @foreach($people as $person)
            <tr>
                <td>{{($people->currentpage()-1)*$people->perpage()+ $loop->index+1}}</td>
                <td>
                    <a href=""> 
                      
                    {{ $person ->name}}</a></td>
                
                <td>{{ $person ->email}}</td>
                <td>{{ $person->phone}}</td>
                <td>{{ $person ->location}}</td>
                <td>{{$person->product_id}}</td>
                <td><a href="" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    <br>
                    <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <br>
                        <button class="btn btn-danger" type="sumbit"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                

            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $people->links()}}
    </div>

@endsection