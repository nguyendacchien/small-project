@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Add new user</h5>
                        <div class="card-body">
                            <form method="post" action="{{ route('user.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <div class="input-group">
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">

                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputPassword1">Password Confirmed</label>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmed" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-1 col-form-label">Role:</label>
                                    <div class="col-sm-11 ">
                                        @foreach($roles as $role)
                                            <div class="mt-2">
                                                <input class="form-check-input" name="roles[{{$role->id}}]"
                                                       type="checkbox"
                                                       value="{{$role->id}}" id="roleCheck{{$role->id}}">
                                                <label class="form-check-label" for="roleCheck{{$role->id}}">
                                                    {{ $role->name }}
                                                </label>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

