@extends('layouts.app')

@section('content')

<div class="row">
    <div class="list-group">
        <a href="{{route('user.create')}}" class="list-group-item list-group-item-action active" aria-current="true">
            Database
        </a>

        @if (Auth::id() == 1)
        <a href="{{ route('user.serach') }}" class="list-group-item list-group-item-action">search</a>
        <a href="{{ route('admin.createnews') }}" class="list-group-item list-group-item-action">add news</a>
        <a href="{{ route('admin2.createsuitable') }}" class="list-group-item list-group-item-action">suitablecreate</a>
    @endif
        {{-- <a href="{{route('user.serach')}}" class="list-group-item list-group-item-action">search</a>
        <a href="{{ route('admin.createnews') }}" class="list-group-item list-group-item-action">add news</a>
        <a href="{{ route('admin2.createsuitable') }}" class="list-group-item list-group-item-action">suitablecreate</a> --}}

        {{-- {{-- @can('create-news')
        <a href="{{ route('admin.createnews') }}" class="list-group-item list-group-item-action">add news</a>
    @endcan --}}

    {{-- @can('create-suitables')
        <a href="{{ route('admin2.createsuitable') }}" class="list-group-item list-group-item-action">suitablecreate</a>
    @endcan

    @can('create-suitables')
    <a href="{{route('user.serach')}}" class="list-group-item list-group-item-action">search</a>
    @endcan --}}

        {{-- <a href="{{route('admin.createnews')}}" class="list-group-item list-group-item-action">add news</a>
        <a href="{{route('admin2.createsuitable')}}" class="list-group-item list-group-item-action">suitablecreate</a>
        <a href="{{route('user.serach')}}" class="list-group-item list-group-item-action">search</a> --}}
        <a href="{{route('user.mydata')}}" class="list-group-item list-group-item-action">my data</a>

    </div>
</div>

<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <figure class="figure col">
                        <div>
                            <img width="200" class="figure-img img-fluid rounded" height="200" src="{{URL::asset('https://pxl-imperialacuk.terminalfour.net/fit-in/1079x305/prod01/channel_2/media/migration/staff/shutterstock_366490265--tojpeg_1518628471851_x4.jpg')}}" >
                        </div>
                    </figure>
                    <br>
                    <br>
                    <h3 class="card-title">الاخبار</h3>
                    <p>All news created by admin</p>
                    <br>
                    <a href="{{route('admin.allnews')}}" class="btn btn-success"> all news</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <figure class="figure col">
                        <div>
                            <img width="200" class="figure-img img-fluid rounded" height="200" src="{{URL::asset('https://www.feedo.net/LifeStyle/images/SocialEvents3.jpg')}}" >
                        </div>
                    </figure>
                    <br>
                    <br>
                    <h3 class="card-title">المناسبات</h3>
                    <p>All suitables created by admin</p>
                    <br>
                    <a href="{{route('admin2.allsuitables')}}" class="btn btn-success"> All suitables</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
