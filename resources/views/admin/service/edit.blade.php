@extends('layout.admin.master')

@section('sub-content')
  Dịch vụ
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
        <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
          @method('put')
         @csrf         
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label>Tên dịch vụ</label>
                  <input class="form-control" type="text" name="name" placeholder="Xin nhập tên dịch vụ" value="{{ $service->name }}">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>Giá</label>
                  <input class="form-control" type="text" name="price" placeholder="Xin nhập giá" value="{{ $service->price }}">
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" name="status">
                        <option value="1" @if($service->status == 1) selected="" @endif>Hiển thị</option>
                        <option value="0" @if($service->status == 0) selected="" @endif>Không hiển thị</option>                       
                  </select>
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