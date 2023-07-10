@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <a class="btn btn-primary btn-lg" href="{{route('user.index')}}" role="button">Back</a>
            <div class="card-header">
                User Data
            </div>


            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $user->gender }}</td>
                        </tr>
                        <tr>
                            <th>ID Number</th>
                            <td>{{ $user->idNum }}</td>
                        </tr>
                        <tr>
                            <th>Voting Record</th>
                            <td>{{ $user->voitingRec }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $user->phoneNum }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
