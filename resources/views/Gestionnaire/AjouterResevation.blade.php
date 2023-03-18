@extends('Gestionnaire.partials.app')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Ajouter une reservation </h1>




                <form method="POST" action="">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email" />
                        <label for="inputEmail">Numero de chambre </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="text" name="password" />
                        <label for="inputPassword">Libellé</label>
                    </div>


                    <input type="submit" value="Enregistrer" class="btn btn-primary">
            </div>
            </form>





    </div>
    </main>
@endsection
