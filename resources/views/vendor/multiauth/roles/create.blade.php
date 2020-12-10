@extends('backend.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                
                <div class="card-header "><h5>Add New Role</h5></div>

                <div class="card-body">
                    <div class="col-md-8 offset-2">
                    @include('multiauth::message')
                    <form action="{{ route('admin.role.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" placeholder="Give an awesome name for role" name="name"
                                class="form-control" id="role" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Assign Permissions</label>
                            <div class="container">
                                @foreach($permissions as $key => $value)
                                <label for="role"><h5 class=" text-primary">{{$key}}</h5></label>
                                <div class="d-flex justify-content-between">
                                    @foreach($value as $permission)
                                    <div class="form-group">
                                    <label for="{{$permission->id}}">{{$permission->name}}</label>
                                    
                                    <div class="custom-control custom-checkbox">

                                        <input id="customCheck{{ $permission->id }}" type="checkbox" name="permissions[]" class="custom-control-input"
                                            value="{{$permission->id}}" id="{{$permission->id}}">

                                            <label class="custom-control-label" for="customCheck{{$permission->id}}"></label>

                                    </div>
                                </div>
                                    @endforeach
                                </div>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Store</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-sm btn-danger float-right">Back</a>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection