@extends('backend.layouts.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit this Role</div>
                <div class="col-md-8 offset-2">
                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" value="{{ $role->name }}" name="name" class="form-control" id="role">
                        </div>
                        <div class="form-group">
                            <label for="role">Assign Permissions</label>
                            <div class="container">
                                @foreach($permissions as $key => $value)
                                <label for="role"><h5><b class="text-primary">{{$key}}</b></h5></label>
                                <div class="d-flex justify-content-between">
                                    @foreach($value as $permission)
                                    <div class="form-group">
                                        <label for="{{$permission->id}}">{{$permission->name}}</label>

                                        <div class="custom-control custom-checkbox">
                                            <input id="customCheck{{ $permission->id }}" type="checkbox" name="permissions[]" class="custom-control-input"
                                            @if(in_array($permission->id,$role->permissions->pluck('id')->toArray()))
                                        checked
                                        @endif
                                        value="{{$permission->id}}" id="{{$permission->id}}">
                                        
                                        <label class="custom-control-label" for="customCheck{{ $permission->id }}"></label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-danger float-right">Back</a>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection