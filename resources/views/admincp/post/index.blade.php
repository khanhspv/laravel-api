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
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Mô Tả Ngắn</th>
                        <th scope="col">Thuộc Danh Mục</th>
                        <th scope="col">Quản Lý</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                        @php 
                           
                            $i = 0;
                        @endphp
                        @foreach ($post as $ps)
                        @php
                            $i++;
                        @endphp 
                        <tr>
                            <th scope="row">
                               {{$i}}
                            </th>
                            <td>{{$ps->title}}</td>
                            <td><img src="{{asset('public/up/'.$ps -> image)}}" height="100" width="100"></td>
                            <td>{!!substr($ps->short_desc,0,20)!!}</td>
                            <td>{{$ps -> category-> title}}</td>
                            <td><a href="{{route('post.show',[$ps->id])}}"> Sửa </a>| 
                                <form  action="{{route('post.destroy',[$ps->id]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Delete" class="btn btn-danger">
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
