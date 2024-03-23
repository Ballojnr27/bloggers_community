<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font: 15px/1.5 Arial, Helvetica, sans-serif;">Bloggers' Community</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
    
    

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
        .no_blog{
            padding-top: 30px;
    margin: 0 auto;
        }
    </style>

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
            
            
            @if($blogs->isEmpty())
            <center><p class="no_blog">You Do Not Have Any Blog <br><br> <a href="/create"class="primary">Create Blog</a></p></center>
            @else
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

                         <form method="POST" action="{{ route('blogs.store_comment', ['postId' => $blog->id]) }}">
                            @csrf
                           <textarea name="body" placeholder="Add a comment" required></textarea><br>
                            <button type="submit">Submit Comment</button>
                        </form>

                        <br>

                        <div class="comment">

                            <a href="{{route('comments.show', ['postId' => $blog->id])}}" >View all Comments</a><br><br>
                        </div>            
                        
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                          @csrf
                             @method('DELETE')
                           <button onclick="return confirmDelete();">Delete Blog</button>
                           <input type="hidden" name="confirmed" id="confirmed" value="false">
                        </form>
                        <script>
                            function confirmDelete(){
                                var confirmed = confirm("Are you sure you want to delete this blog?");
                                if (confirmed){
                                    document.getElementById('confirmed').value = 'true';
                                }
                                return confirmed;
                            }
                        </script>

                        @if (session('confirm_message'))
                           <script>
                               alert("{{ session('confirm_message') }}")
                           </script>
                        @endif
                        </div>
                         @endforeach
                         @endif

                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
    
</div><br>
@endsection
</body>
</html>