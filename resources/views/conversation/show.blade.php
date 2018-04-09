@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('conversation.users', ['users' => $users])
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body conversation">
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection