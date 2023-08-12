@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                @if ($user->profile_photo)
    <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo" style="max-width: 150px;">
                 @endif

                 @if ($user->profile_photo)
    <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo" style="max-width: 150px;">
              @endif 

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
