@extends('layouts.app')
18minutes
@section('content')
    <div id="messagerie">
        <Messagerie :user="{{ Auth::user()->id }}"></Messagerie>
    </div>
@endsection
