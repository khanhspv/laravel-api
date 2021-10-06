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
                <form autocomplete="off" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Tiêu Đề</label>
    
                        <div class="col-md-6">
                            <input name="title" type="text" class="form-control"  autocomplete="name" autofocus>
                        </div>
                        
                        
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">Hình Ảnh</label>
    
                        <div class="col-md-6">
                            <input name="image" type="file" class="form-control"  autocomplete="name" autofocus>
                        </div>
                        
                        
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"> Mô Tả Ngắn</label>
                        <div class="col-md-6">
                            <textarea name="short_desc" id="ckeditor_shortdesc" type="text" class="form-control"  autocomplete="name" autofocus></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"> Nội Dung </label>
                        <div class="col-md-6">
                            <textarea name="desc" id="ckeditor_desc" type="text" class="form-control"  autocomplete="name" autofocus></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right"> Danh Mục Bài Viết </label>
                        <div class="col-md-6">
                            <select name="post_category_id" class="form-control">
                                @foreach ($category as $key => $cate)
                                <option value="{{$cate->id}}">{{$cate -> title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <input type="submit" name="themdanhmuc" value="Thêm" class="btn btn-primary mb-2">

                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
