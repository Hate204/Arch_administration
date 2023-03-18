@extends('Admin.layouts.base')
@section('content')
    <main id="main" class="main">
        <h1>Informations sur le gestionnaire </h1>
        <hr />
        <h6>id : {{ $gestionnaire->id }}</h6>
        <hr />
        <h6>Nom : {{ $gestionnaire->nom }}</h6>
        <hr />
        <h6>Prenom : {{ $gestionnaire->prenom }}</h6>
        <h1>Informations sur l'hotel </h1>
        <hr />
        <h6>id : {{ $hotel->id }}</h6>
        <hr />
        <h6>nom : {{ $hotel->nom }}</h6>
        <hr />
        <h6>nombre d'etoile : {{ $hotel->nbrEtoile }}</h6>
        <hr />
        <h6>siret : {{ $hotel->siret }}</h6>
        <hr />
        <h6>adresse : {{ $hotel->adresse }}</h6>
        <hr />
        <h6>telephone : {{ $hotel->telephone }}</h6>
        <h1>Localistion de l'hotel </h1>
        <hr />
        <h6>latitude : {{ $hotel->latitude }}</h6>
        <hr />
        <h6>longitude : {{ $hotel->longitude }}</h6>
        <a href="{{ route('Admin.verifyHotel.index') }}" class="btn btn-primary"> Retour</a>
    </main>
@endsection
