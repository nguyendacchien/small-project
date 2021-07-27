@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="{{route('category.update',$category->id)}}">
                            @csrf
                            <h2>Thêm mới khách hàng</h2>
                            <div class="row g-3 mx-3">
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="name"  name="name" value="{{$category->name}}">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success mt-3">add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

