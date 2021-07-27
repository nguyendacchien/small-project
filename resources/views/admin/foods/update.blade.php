@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="{{route('food.update',$food->id)}}">
                            @csrf
                            <h2>Thêm mới khách hàng</h2>
                            <div class="row g-3 mx-3">
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{$food->name}}">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="0000" name="price" value="{{$food->price}}">
                                    @error('price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Image</label>
                                    <input type="text" class="form-control @error('image') is-invalid @enderror" placeholder="asdasdfas" name="image" value="{{$food->image}}">
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div><br>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Category:</label>
                                    <select name="category">
                                        @forelse($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @empty
                                            <option>category</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">DESC</label>
                                    <input type="text" class="form-control @error('desc') is-invalid @enderror" placeholder="ABC" name="desc" value="{{$food->desc}}">
                                    @error('desc')
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
