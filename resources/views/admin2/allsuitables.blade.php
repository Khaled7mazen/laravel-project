@extends('layouts.app')

@section('content')

<div class="container">
<div class="jumbotron">
    <h1 class="display-4">جميع المناسبات </h1>
    <hr class="my-4">
    <a class="btn btn-danger btn-lg" href="{{route('user.index')}}" role="button">عودة للصفحة الرئيسية</a>
</div>
@foreach ($adm as $item)
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">

      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">title::{{$item->the_title}}</h3>
          <p class="card-text" style="font-size: 24px;"> details:: {{$item->details}}</small></p>
          <p class="card-text" style="font-size: 24px;"> geographical_location:: {{$item->geographical_location}}</small></p>

          {{-- <a class="btn btn-danger btn-lg"  href="{{route('admin2.destroy',['id'=>$item->id])}}"> delete</a> --}}

          @can('create-suitables')
          <a class="btn btn-danger btn-lg"  href="{{route('admin2.destroy',['id'=>$item->id])}}"> delete</a>
          @endcan

          <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $item->admin2User->id}}">
            <input type="hidden" name="admin2_id" value="{{ $item->id}}">

            <div class="form-group">
                <label for="comment"><h4>Add Comment:</h4> </label>
                <textarea class="form-control" name="description" id="comment" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">comments</button>

        </form>

        {{-- <h4>Comments:</h4>
        @foreach ($item->comments as $comment)
            <div class="card">
                <div class="card-body">
                    <p>{{ $comment->description }}</p>
                </div>
            </div>
        @endforeach --}}


          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

