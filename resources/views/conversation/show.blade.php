@extends('layouts.app')
 37 minutes
@section('content')
    <div class="container">
        <div class="row">
            @include('conversation.users', ['users' => $users])
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body conversations">
                        @foreach($messages as $message)
                            <div class="row">
                            <div class="col-md-10 {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}">
                                    <p>
                                        <strong>{{ $message->from->id !== $user->id ? 'Moi': $message->from->name }}</strong><br>
                                        {{ $message->content }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea name="content" placeholder="Ecrivez votre message" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection