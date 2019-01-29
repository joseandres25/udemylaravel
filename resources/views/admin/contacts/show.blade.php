@extends('layouts.app')

@section('tittle')
    Listado de Contactos
@endsection


@section('content')
    <div class="container text-center">
    <h1 class="text-center">Listado de contactos</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nª</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">phone</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">category_id</th>
            <th scope="col">user_id</th>
        </tr>
        </thead>
        <tbody>

        @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{ $contact->id }}</th>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->category_id }}</td>
                <td>{{ $contact->user_id }}</td>
            </tr>
        @endforeach


        </tbody>
    </table><div class="text-center">{{ $contacts->links() }}</div>

    </div>
@endsection
