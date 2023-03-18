@include('Gestionnaire.layouts.header')

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-3">Enregistré votre hotel </h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('Gestionnaire.EnregistrerHotel.perform') }}">
                                        @csrf
                                        <div class="card-body">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text"
                                                            name="nom" />
                                                        <label for="inputFirstName">Nom de l'hotel</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="number"
                                                            max="5" name="nbrEtoile" />
                                                        <label for="inputLastName">Nombre d'etoile</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text"
                                                    name="siret" />
                                                <label for="inputEmail"> Siret de l'hotel</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text"
                                                            name="adresse" />
                                                        <label for="inputPassword">Adresse</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm"
                                                            type="text" name="codePostale" />
                                                        <label for="inputPasswordConfirm">Code Postale</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="tel"
                                                    name="telephone" />
                                                <label for="inputEmail"> Telephone</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text"
                                                            name="latitude" />
                                                        <label for="inputPassword">Latitude</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm"
                                                            type="text" name="longitude" />
                                                        <label for="inputPasswordConfirm">Longitude</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 mb-0">
                                                <div class="d-grid">
                                                    <input class="btn btn-primary btn-block" type="submit"
                                                        value="Enregister l'hotel">
                                                </div>
                                            </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @include('Gestionnaire.layouts.footer')
        @include('Gestionnaire.layouts.js')
