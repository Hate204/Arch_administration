@extends('Gestionnaire.partials.app')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Imformation sur la chambre </h1>
                <div class="container text-center">
                    <div class="row">

                        @foreach ($chambre->photos as $photo)
                            <div class="col">
                                <img src="{{ asset(Storage::url($photo->image)) }}" alt="" width="50%"
                                    height="50%">
                            </div>
                        @endforeach

                    </div>
                </div>

                

            </div>
        </main>
    </div>
@endsection
