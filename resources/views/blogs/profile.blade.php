@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <center>  <div class="card-header">{{ __('My profile') }}</div></center>

                <div class="card-body">
                    
                        <div class="row mb-3">
                            <p class="col-md-4 text-md-end">{{ __('Firstname') }}: <b>{{ $user->firstname }}</b></p>
                         </div>

                         <div class="row mb-3">
                           <p class="col-md-4 text-md-end">{{ __('Lastname') }}: <b>{{ $user->lastname }}</b></p>
                         </div>

                         <div class="row mb-3">
                           <p class="col-md-4 text-md-end">{{ __('Username') }}: <b>{{ $user->username }}</b></p>
                         </div>

                         <div class="row mb-3">
                           <p class="col-md-4 text-md-end">{{ __('Email') }}: <b>{{ $user->email }}</b></p>
                         </div>
                   <form action="{{route('blogs.edit_profile')}}">

                            <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Profile') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
