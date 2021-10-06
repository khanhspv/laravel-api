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
                <form autocomplete="off" method="post" action="{{route('category.store')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Tiêu Đề</label>
    
                        <div class="col-md-6">
                            <input name="title" type="text" class="form-control"  autocomplete="name" autofocus>
                        </div>
                        <input type="submit" name="themdanhmuc" value="Thêm" class="btn btn-primary mb-2">
                    </div>

                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
