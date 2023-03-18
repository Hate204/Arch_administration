@extends('Gestionnaire.partials.app')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Ajouter une chambre </h1>




                <form method="POST" action="{{ route('Gestionnaire.AChambre.create', $id = auth()->user()->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="number" name="numeroChambre" />
                        <label for="inputEmail">Numero de chambre </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="text" name="libellé" />
                        <label for="inputPassword">Libellé</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="text" name="description" />
                        <label for="inputEmail">Description</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="file" name="image"
                            accept="image/png, image/jpeg" />
                        <label for="inputEmail">Image</label>
                    </div>

                    <div class=" mb-3">
                        <label for="categorie">Categorie :
                            <select name="categorie_id" id="categorie">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->type }}</option>
                                @endforeach

                            </select>
                        </label>
                    </div>

                    <input type="submit" value="Register" class="btn btn-primary">
                </form>
            </div>











    </div>
    </main>
@endsection
