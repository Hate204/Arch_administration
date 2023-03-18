@extends('Admin.layouts.base')
@section('content')
    <main id="main" class="main">
        <p>nouveu hotel</p>
        <!-- Default Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id_user</th>
                    <th scope="col">Email</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($utilisateurs as $utilisateur)
                    <tr>
                        <th scope="row">#</th>
                        <td>{{ $utilisateur->id }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td><a href="{{ route('Admin.verifyHotel.show', $id = $utilisateur->id) }}"
                                class="btn btn-primary">voir</a></td>
                        <td><a href="{{ route('Admin.verifyHotel.rejet', $id = $utilisateur->id) }}"
                                class="btn btn-danger">Rejeté</a></td>
                        <td><a href="{{ route('Admin.verifyHotel.validation', $id = $utilisateur->id) }}"
                                class="btn btn-success">Validé</a></td>
                    </tr>
                @endforeach





            </tbody>
        </table>
        <!-- End Default Table Example -->
        </div>
        </div>
    </main>
@endsection
