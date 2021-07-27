@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Simple Category</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="{{route('category.create')}}" class="btn btn-success">add</a>
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    @forelse($category as $key =>$item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->name}}</td>
                                            <td><a href="{{route('category.edit',$item->id)}}" class="btn btn-warning">sửa</a></td>
                                            <td><a href="{{route('category.delete',$item->id)}}" class="btn  btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="5">No data</td></tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
