
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
    

</head>
<body>
    
@extends('layouts.headFoot')
@section('content')
<br><br><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">{{ __('Create Blog') }}</div></center>

                <div class="card-body">
                    <form method="POST" action="{{route('blogs.store')}}">
                        @csrf
                        

                        <div class="row mb-3">
                            <label for="tittle" class="col-md-4 col-form-label text-md-end">{{ __('Tittle') }}</label>

                            <div class="col-md-6">
                                <input id="tittle" type="text" class="form-control @error('name') is-invalid @enderror" name="tittle" value="{{ old('tittle') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea rows="10" cols="50" id="content" class="form-control @error('name') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="name" autofocus></textarea>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        

                  
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Blog') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
</body>
</html>
