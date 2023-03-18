@include('Gestionnaire.layouts.header')

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Enregisté un administrateur pour
                                        l'hotel</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('Gestionnaire.register.perform') }}">
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
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email"
                                                    name="email" />
                                                <label for="inputEmail"> Adresse Email </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password"
                                                    name="password" />
                                                <label for="inputPassword">Mot de passe</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text"
                                                    name="nom" />
                                                <label for="inputEmail">Nom</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text"
                                                    name="prenom" />
                                                <label for="inputEmail">Prenoms</label>
                                            </div>


                                            <input type="submit" value="Register" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            @include('Gestionnaire.layouts.footer')
            @include('Gestionnaire.layouts.js')
