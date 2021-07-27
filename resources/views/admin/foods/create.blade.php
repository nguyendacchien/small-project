@extends('admin.master')
@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="{{route('food.store')}}">
                    @csrf
                    <h2>Thêm mới khách hàng</h2>
                    <div class="row g-3 mx-3">
                        <div class="col-6 ">
                            <label>Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   placeholder="name" name="name">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Image</label>
                            <input type="text" class="form-control @error('image') is-invalid @enderror" placeholder="asdasdfas" aria-label="Last name"
                                   name="image">
                            @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <br>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Category:</label>
                            <select name="category">
                                @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @empty
                                    <option>category</option>
                                @endforelse
                            </select>


                            {{--                                    <input type="text" class="form-control" placeholder="0000" aria-label="First name" name="price">--}}
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="1234615" aria-label="Last name"
                                   name="price">
                            @error('price')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">DESC</label>
                            <input type="text" class="form-control @error('desc') is-invalid @enderror" placeholder="ABC" aria-label="Last name"
                                   name="desc">
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
@endsection

