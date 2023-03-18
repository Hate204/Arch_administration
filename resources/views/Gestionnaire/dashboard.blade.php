@extends('Gestionnaire.partials.app')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard gestionnaire</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Nombre de chambres</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p>{{ $chambres->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Nombre de chambres dispo</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p>3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Nombre de reservation</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p>5</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Nombre de chambre occupé</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p>4</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Chambre
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">

                            <tr>
                                <th>#</th>
                                <th>Numero de chamber</th>
                                <th>libellé</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>

                            </tr>



                            @foreach ($chambres as $chambre)
                                <tr>
                                    <td>{{ $chambre->id }}</td>
                                    <td>{{ $chambre->numeroChambre }}</td>
                                    <td>{{ $chambre->libellé }}</td>

                                    <td><a type="button" class="btn btn-primary"
                                            href="{{ route('Gestionnaire.AChambre.show', $id = $chambre->id) }}">Voir
                                            plus</a>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Ajouter une image
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une
                                                            image</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST"
                                                        action="{{ route('Gestionnaire.AChambre.saveImage', $id = $chambre->id) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" id="inputEmail" type="file"
                                                                    name="image" accept="image/png, image/jpeg" />
                                                                <label for="inputEmail">Image</label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <input type="submit" value="Register" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a type="button" class="btn btn-secondary">libre</a></td>
                                    <td><a type="button" class="btn btn-danger">Occupé</a></td>
                                </tr>
                            @endforeach


                        </table>
                    </div>
                </div>
            </div>
        </main>
    @endsection
