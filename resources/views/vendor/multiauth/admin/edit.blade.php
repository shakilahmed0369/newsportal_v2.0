@extends('backend.layouts.master') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit details of {{$admin->name}}</div>
                <div class="com-md-12">
                <div class="card-body">
                    @include('multiauth::message')
                    <form action="{{route('admin.update',[$admin->id])}}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="role" class="">Name</label>
                            <input type="text" value="{{ $admin->name }}" name="name" class="form-control" id="role">
                        </div>

                        <div class="form-group">
                            <label for="role" class="">Email</label>
                            <input type="text" value="{{ $admin->email }}" name="email" class="form-control" id="role">
                        </div>

                        <div class="form-group">
                            <label for="role_id" class="">Assign Role</label>

                            <select name="role_id[]" id="role_id" class="form-control  {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                <option selected disabled>Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        @if (in_array($role->id,$admin->roles->pluck('id')->toArray())) 
                                            selected 
                                        @endif >{{ $role->name }}
                                    </option>
                                @endforeach
                            </select> 

                            @if ($errors->has('role_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('role_id') }}</strong>
                                </span> 
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="customCheck">Active Admin</label>

                            <div class="custom-control custom-checkbox">
                                <input id="customCheck5" type="checkbox" value="1" {{ $admin->active ? 'checked':'' }} name="activation" class="custom-control-input" id="active">
                            
                            <label class="custom-control-label" for="customCheck5"></label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Change
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
