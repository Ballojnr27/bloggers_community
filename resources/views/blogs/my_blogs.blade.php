<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
    
    

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>
<body>


@extends('layouts.headFoot')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <center><h1>My Blogs</h1></center> 
            <div class="card">
            @foreach($blogs as $blog)
              <center>  <div class="card-header">{{ $blog->created_at }}</div></center>

              
              
              <div class="card-body">

                         <div class="row mb-3">
                            <p class="col-md-4 text-md-end">{{ __('Username') }}: <br><b>{{ $blog->username }}</b></p>
                         </div>

                         <div class="row mb-3">
                         <p class="col-md-4 text-md-end">{{ __('Tittle') }}: <br><b>{{ $blog->tittle }}</b></p>
                         </div>

                         <div class="row mb-3">
                         <p class="col-md-4 text-md-end">{{ __('Content') }}: <br><b>{{ $blog->content }}</b></p>
                         </div>

                         <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                           <button>Delete Blog</button>
                        </form>
                        </div>
                         @endforeach
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
</body>
</html>