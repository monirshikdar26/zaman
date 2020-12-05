@extends('layout.App')
@section('title', 'Services')

@section('content')
    <div class="container-fluid mb-5 mt-5">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Your name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>

                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-md-6 p-5">
                <p>405/2 North Kazipara,<br>
                Dhaka-1207<br>
                017774688159</p><br>
            </div>
        </div>
    </div>
@endsection
