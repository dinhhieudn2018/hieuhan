@extends('layout.admin.master')
@section('sub-content')
    Hình ảnh hoạt động
@endsection
@section('action')
    Thêm mới
@endsection
@section('content')
	<div class="container" style="padding-top: 30px">
   <div class="col-lg-12" style="padding-bottom:120px">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">  
         {{ csrf_field() }}          
         <div class="row">
            <div class="col-md-6">
              
               <div class="form-group">
                  <label>Tiêu đề ảnh</label>
                  <input class="form-control" type="text" name="title" placeholder="Nhập tiêu đề ảnh vd: tẩy trắng răng, chỉnh nha..." value="">
               </div>
               <div class="form-group">
                  <label>Tình trạng</label>
                  {{-- <input class="form-control" type="text" name="status" placeholder="Tình trạng" value=""> --}}
                  <select class="form-control" name="status">
                        <option value="1">Hiển thị</option>
                        <option value="0">Không hiển thị</option>                       
                  </select>
               </div>
               
            </div>
           <div class="col-md-6">
              <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" name="image"  class="form-control">
                   {{--  <img src="upload/img/apple.png" style="width: 100px; height: 100px"> --}}
                </div> 
           </div>
           
         </div>
         <div class="text-center">
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ URL::previous() }}" class="btn btn-default">Quay lại</a>
         </div>
        </form>
   </div>
   <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
      ====================================================================== -->
</div>
@endsection