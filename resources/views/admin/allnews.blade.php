@extends('layouts.app')

@section('content')

<div class="container">
<div class="jumbotron" >
    <h1 class="display-4">ALL news </h1>
    <hr class="my-4">
    <a class="btn btn-danger btn-lg" href="{{route('user.index')}}" role="button">عودة للصفحة الرئيسية</a>
</div>

@foreach ($admin as $item)
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">

      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{$item->title}}</h3>
          <p class="card-text" style="font-size: 24px;">  {{$item->description}}</small></p>
          <img width="200" height="150" src="{{URL::asset($item->image)}}" >

          <p class="card-text" style="font-size: 18px; ">  created by::<small class="text-muted">{{$item->adminUser->name}}</small></p>
          <p class="card-text" style="font-size: 18px;"> created_at:: <small class="text-muted">{{$item->created_at->diffForHumans()}}</small></p>
          {{-- <a class="btn btn-danger btn-lg"  href="{{route('admin.destroy',$item->id)}}"> delete</a> --}}
          @can('create-suitables')
          <a class="btn btn-danger btn-lg"  href="{{route('admin.destroy',$item->id)}}"> delete</a>
          @endcan

          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

