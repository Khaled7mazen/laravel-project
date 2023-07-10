@extends('layouts.app')

@section('content')



<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">search of database</h1>
        <hr class="my-4">
        <a class="btn btn-danger btn-lg" href="{{route('user.index')}}" role="button">عودة للصفحة الرئيسية</a>

      </div>

      <form action="{{route('user.serach')}}" method="GET">
        @csrf
        <input type="text" name="keyword" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>

    <form action="{{route('user.serach')}}" method="GET">
        @csrf
        <input type="text" name="keyword" placeholder="Search by gender">
        <button type="submit">Search</button>
    </form>

    <form action="{{route('user.serach')}}" method="GET">
        @csrf
        <input type="text" name="keyword" placeholder="Search by idNum">
        <button type="submit">Search</button>
    </form>

    <form action="{{route('user.serach')}}" method="GET">
        @csrf
        <input type="text" name="keyword" placeholder="Search by voitingRec">
        <button type="submit">Search</button>
    </form>

    <form action="{{route('user.serach')}}" method="GET">
        @csrf
        <input type="text" name="keyword" placeholder="Search by phoneNum">
        <button type="submit">Search</button>
    </form>

    @if($user->isEmpty())

        <div class="alert alert-danger" role="alert">
            <p>No results found.</p>
              </div>
    @else
    <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">gender</th>
                    <th scope="col">idNum</th>
                    <th scope="col">voitingRec</th>
                    <th scope="col">phoneNum</th>

                  </tr>
            </thead>
            @php
            $i=0
        @endphp
            <tbody>
                @foreach($user as $item)
                <tr>
                    <th scope="row">{{++$i}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->idNum}}</td>
                                <td>{{$item->voitingRec}}</td>
                                <td>{{$item->phoneNum}}</td>
                     </tr>

                @endforeach
            </tbody>
        </table>
    @endif


</div>

@endsection

