@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Simple Food</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="{{route('food.create')}}" class="btn btn-success">add</a>
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Desc</th>
                                    <th></th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    @forelse($foods as $food)
                                    <tr>
                                        <td>{{$food->name}}</td>
                                        <td>{{$food->category->name}}</td>
                                        <td>{{$food->image}}</td>
                                        <td>{{($food->price).' VNĐ'}}</td>
                                        <td>{{$food->desc}}</td>
                                        <td><a href="{{route('food.edit',$food->id)}}" class="btn btn-warning">sửa</a></td>
                                        <td><a href="{{route('food.delete',$food->id)}}" class="btn  btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
{{--                                        <td class="text-primary">--}}
{{--                                            $36,738--}}
{{--                                        </td>--}}

                                    </tr>
                                    @empty
                                        <tr><td colspan="5">No data</td></tr>
                                    @endforelse

                                    </tbody>
                                </table>
{{--                                {{$foods->links()}}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
