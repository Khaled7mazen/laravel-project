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
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4"  ><i class="fa fa-align-center" aria-hidden="true">اضافة بياناتي</i>  </h1>
              <a class="btn btn-primary btn-lg" href="{{route('user.index')}}" role="button">Back</a>

            </div>
          </div>
      </div>
      {{-- name	gender	idNum	voitingRec	phoneNum	user_id --}}
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="container">
        <form action="{{route('user.store')}}" method="POST" >
            @csrf
            <div class="row">
              {{-- <div class="col">
                <label for="123">name</label>
                <input type="text" name="name" id="123" class="form-control" placeholder=" name">
              </div> --}}
              <div class="col">
                <label for="122">phone number</label>
                <input type="number" name="phoneNum" id="122" class="form-control" placeholder="phone number">
              </div>
              <div class="container">


              <div class="form-group">
                <label for="exampleFormControlInput1">ID Number</label>
                <input type="number" name="idNum" class="form-control" id="exampleFormControlInput1" placeholder="ID Number">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">gender</label>
                <select name="gender" class="form-control" id="exampleFormControlSelect1">
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select>
              </div>

              <div class="col container">
                <label for="12223">Voting record</label>
                <input type="text" name="voitingRec" id="12223" class="form-control" placeholder=" Voting record">
              </div>

            </div>

            </div>
            <div>
                <button type="submit" class="btn btn-warning">   save     </button>

            </div>
          </form>
              </div>
        </div>

      </div>


  @endsection
