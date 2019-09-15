@extends('layout.admin.master')
@section('sub-content')
  Khách hàng
@endsection
@section('action')
  Danh sách
@endsection
@section('content')
	<div class="container" style="padding-top: 30px;width: 100%">
       
       <div id="content" class="table-responsive">
            <table class="table table-bordered table-hover">
   <thead>
      <tr style="background-color: #3c8dbc;color:white;">
        <th class="text-center">STT</th>
        <th class="text-center">Tên khách hàng</th>
        <th class="text-center">Email</th>
        <th class="text-center">Số điện thoại</th>
        <th class="text-center">Lịch hẹn</th>
        <th class="text-center">Ngày tạo</th>
        <th class="text-center">Tin nhắn</th>
        <th class="text-center">Tình trạng</th>
        
        <th class="text-center">
          <a href="{{ route('customer.index') }}" class="btn btn-sm btn-success">
              <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm
          </a>
        </th>
      </tr>
  </thead>
  <tbody>
   @foreach($customers as $value)
    <tr>
        <td class="text-center">{{ $value->id }}</td>
        <td class="text-center">{{ $value->name }}</td>
        <td class="text-center">{{ $value->email }}</td>
        <td class="text-center">{{ $value->phone }}</td>
        <td class="text-center">{{ $value->appointment_schedule }}</td>
        <td class="text-center">{{ Carbon\Carbon::createFromTimestamp(strtotime($value->created_at))->format('j-m-Y') }}</td>
        <td class="text-center">{{ $value->message }}</td>
        <td class="text-center">
          @if($value->status == 0)
            <span class="label label-success label-draft">Chờ xác nhận</span>
          @else
            <span class="label label-primary label-draft">Đã xác nhận</span>
          @endif
        </td>
        <td class="text-center">
          <a href="{{ route('customer.edit',$value->id) }}" class="btn btn-info btn-xs" style="margin:2px !important">
              <i class="fa fa-eye fa-fw"></i><span>Xem</span>
          </a>
          
            <a href="{{ route('cus.destroy',$value->id) }}" class="btn btn-danger btn-xs  del" style="margin:2px !important" >
              <i class="glyphicon glyphicon-trash fa-fw"></i><span>Xóa</span>
          </a>
         
          
        </td>
    </tr>
   @endforeach
   
  </tbody>

   
</table>
       </div>
    </div>
@endsection