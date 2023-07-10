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
            <h1 class="display-4">add suitable</h1>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="{{route('user.index')}}" role="button">Back</a>
          </div>
      </div>

      </div>
    </div>
    <div class="row">
      <div class="col">

        <div class="container">
        <form action="{{route('admin2.storesuitable')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">title</label>
              <input type="text" name="the_title" class="form-control" id="exampleFormControlInput1" placeholder="title">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">details</label>
              <textarea class="form-control" name="details" id="exampleFormControlTextarea1" placeholder="content" rows="3"></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="exampleFormControlInput1">time</label>
                <input type="text_" name="time"  class="form-control" id="exampleFormControlInput1" placeholder="time">
              </div> --}}
              <div class="form-group">
                <label for="exampleFormControlInput1">geographical_location</label>
                <input type="text" name="geographical_location" class="form-control" id="exampleFormControlInput1" placeholder="geographical location">
              </div>
              <button class="btn btn-danger" type="submit">create</button>

          </form>
      </div>
      </div>

    </div>
  </div>

  @endsection

