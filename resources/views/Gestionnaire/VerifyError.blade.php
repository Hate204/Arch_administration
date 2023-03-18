@include('Gestionnaire.layouts.header')

<body>
    <div id="layoutError">
        <div id="layoutError_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-4">
                                <h1 class="display-1">401</h1>
                                <p class="lead">Vos infermations seront verifié par adnmistrateur et vous serez notifié
                                    par email pour la suite </p>
                                <p>Accés refusé.</p>
                                <a href="{{ route('welcome') }}">
                                    <i class="fas fa-arrow-left me-1"></i>
                                    Retourné
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('Gestionnaire.layouts.footer')
        @include('Gestionnaire.layouts.js')
