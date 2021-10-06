@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Danh Mục và Bài Viết</div>
                <a href="{{url('/dashboard')}}" > Back </a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu Đề</th>
                        <th scope="col">Quản Lý</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categoryPost as $category)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$category->title}}</td>
                            <td><a href="{{route('category.show',[$category->id])}}"> Sửa </a>| 
                                <form  action="{{route('category.destroy',[$category->id]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" onclick="return confirm('Bạn Muốn Xóa Danh Mục Này Không')" value="Delete" class="btn btn-danger">
                                    {{-- <button onclick="return confirm('Bạn Muốn Xóa Danh Mục Này Không')"
                                    class="btn btn-danger">Xóa</button> --}}
                                </form>
                            </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
               
            </div>
        </div>
    </div>
</div>
@endsection
