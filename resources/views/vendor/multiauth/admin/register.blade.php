@extends('backend.layouts.master') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Register New {{ ucfirst(config('multiauth.prefix')) }}</div>
                <div class="card-body">
    @include('multiauth::message')
            <div class="col-md-8 offset-2">
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name" class="">Name</label>
                   
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                    required autofocus>
                
                        </div>
                            
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="">E-Mail Address</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }}">
                            <label for="password" class="">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label for="role_id" class="">Assign Role</label>
                              <select name="role_id[]" id="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection