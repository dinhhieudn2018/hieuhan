@extends('layout.admin.master')

@section('sub-content')
  Khách hàng
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
        <form action="{{ route('customer.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
          @method('put')
         @csrf         
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label>Tên khách hàng</label>
                  <input class="form-control" type="text" name="name" value="{{ $customer->name }}">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" name="email"  value="{{ $customer->email }}" disabled="">
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group">
                  <label>Số điện thoại</label>
                  <input class="form-control" type="text" name="phone"  value="{{ $customer->phone }}">
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group">
                  <label>Lịch hẹn</label>
                  <input class="form-control" type="text" name="appointment_schedule"  value="{{ $customer->appointment_schedule }}">
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group">
                  <label>Tin nhắn</label>
                  <input class="form-control" type="text" name="message"  value="{{ $customer->message }}">
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group">
                  <label>Ngày tạo</label>
                  <input class="form-control" type="text" name="created_at"  value="{{ Carbon\Carbon::createFromTimestamp(strtotime($customer->created_at))->format('j-m-Y') }}" disabled="">
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" name="status">
                    <option value="0" @if($customer->status == 0) selected="" @endif>Chờ xác nhận</option>
                    <option value="1" @if($customer->status == 1) selected="" @endif>Đã xác nhận</option>                       
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