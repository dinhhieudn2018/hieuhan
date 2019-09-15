@extends('layout.admin.master')
@section('sub-content')
    Phản hồi khách hàng
@endsection
@section('action')
    Sửa
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
        <form action="{{ route('feedback.update',$feedback->id) }}" method="POST" enctype="multipart/form-data">
           @method('put')
         <input type="hidden" name="_token" value="{{ csrf_token() }}">  
         {{ csrf_field() }}          
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label>Tên khách hàng</label>
                  <input class="form-control" type="text" name="name_customer" placeholder="Xin nhập tên khách hàng" value="{{ $feedback->name_customer }}">
               </div>
               <div class="form-group">
                  <label>Loại dịch vụ</label>
                  <input class="form-control" type="text" name="type" placeholder="Xin nhập loại dịch vụ kh đã sử dụng" value="{{ $feedback->type }}">
               </div>
               <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" name="status">
                        <option value="1" @if($feedback->status == 1) selected="" @endif>Hiển thị</option>
                        <option value="0" @if($feedback->status == 0) selected="" @endif>Không hiển thị</option>                       
                  </select>
               </div>
                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" name="image"  class="form-control">
                    <img src="upload/img/{{ $feedback->image }}" style="width: 100px; height: 100px">
                </div> 
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label>Nội dung</label>
                  <textarea name="description" id="demo" cols="5" rows="3" class="form-control">
                    {!! $feedback->description !!}
                  </textarea>
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