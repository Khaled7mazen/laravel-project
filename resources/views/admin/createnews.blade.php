@extends('layouts.app')

@section('content')
@if ($errors->count()>0)
<ul>
@foreach ($errors->all() as $item)
<li>{{$item}}</li>

@endforeach
</ul>
@endif

<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">add news</h1>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="{{route('user.index')}}" role="button">Back</a>
          </div>
      </div>

      </div>
    </div>
    <div class="row">
      <div class="col">

        <div class="container">
        <form action="{{route('admin.storenews')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">title</label>
              <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="content" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">image</label>
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1" >
              </div>
              <button class="btn btn-danger" type="submit">create</button>

          </form>
      </div>
      </div>

    </div>
  </div>

  @endsection

