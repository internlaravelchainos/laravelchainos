@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa người dùng
        </div>
        <div class="card-body">
            <form action="" method="POST">
            @csrf 
            <div class="form-group">
                    <label for="post_title">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" value="{{$posts->post_title}}" name="post_title" id="post_title" disabled>
                    @error('post_title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="post_url">URL</label>
                    <input class="form-control" type="text" value="{{$posts->post_url}}" name="post_url" id="post_url" disabled>
                    @error('post_url')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="post_body">Nội dung</label>
                    <textarea class="form-control" type="text" name="post_body" id="post_body" cols="10" rows="20" disabled>{{$posts->post_body}}</textarea>
                    @error('post_body')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="post_author">Tác giả</label>
                    <input class="form-control" type="text" value="{{$posts->post_author}}" name="post_author" id="post_author" disabled>
                    @error('post_author')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="post_created_at">Ngày tạo</label>
                    <input class="form-control" type="text" value="{{$posts->post_created_at}}" name="post_created_at" id="post_created_at" disabled>
                    @error('post_created_at')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection

