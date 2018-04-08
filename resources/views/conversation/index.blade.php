@extends('layouts.app')

17 minutes mmmm
@section('content')
    <div class="container">
        <div class="col-md-3">
            <div class="list-group">
                @foreach ($users as $user)
                    
                    <a class="list-group-item" href="{{ route('conversation.show', $user->id) }}">{{ $user->name }}</a>

                @endforeach
            </div>
        </div>
    </div>
@endsection