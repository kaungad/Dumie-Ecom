@extends('master')
@section('content')
    

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    
            <form  action="register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button class="btn btn-primary" type="submit">Register</button>
                </div>
              </form>
      
        
</div>
@endsection
