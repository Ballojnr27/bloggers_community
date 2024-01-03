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
           <center><h1>Blog Feed</h1></center> 
            <div class="card">
            @foreach($blogs as $blog)
              <center>  <div class="card-header">{{ $blog->created_at }}</div></center>

              
              
              <div class="card-body">
                
                   
                         <div class="info">
                            <p ><b>{{ __('Username') }}: </b><br>{{ $blog->username }}</p>
                         </div>

                         <div class="info ">
                         <p ><b>{{ __('Tittle') }}: </b><br>{{ $blog->tittle }}</p>
                         </div>

                         <div class="info">
                         <p ><b>{{ __('Content') }}: </b><br>{{ $blog->content }}</p>
                         </div>

                         <form method="post" action="{{ route('blogs.store_comment', ['postId' => $blog->id]) }}">
                            @csrf
                           <textarea name="body" placeholder="Add a comment"></textarea><br>
                            <button type="submit">Submit Comment</button>
                        </form>

                        <br>

                        <div class="comment">

                            <a href="{{route('comments.show', ['postId' => $blog->id])}}" >View all Comments</a>
                        </div>
                        

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