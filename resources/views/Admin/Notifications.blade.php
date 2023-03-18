@extends('Admin.layouts.base')

@section('content')
    <main id="main" class="main">
        <h1>Listes des notifications</h1>
        @foreach (auth()->user()->notifications as $notification)
            <hr />
            {{ $notification->markAsRead() }} {{ $notification->data['message'] }} <br /> recue a la date du
            {{ $notification->created_at }}
        @endforeach
    </main>
@endsection
