@extends('layout.admin.master')
@section('sub-content')
  Phản hồi khách hàng
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
        <th class="text-center">Hình ảnh</th>
        <th class="text-center">Nội dung</th>
        <th class="text-center">Loại dịch vụ</th>
        <th class="text-center">Tình trạng</th>
        <th class="text-center">
          <a href="{{ route('feedback.create') }}" class="btn btn-sm btn-success">
              <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm
          </a>
        </th>
      </tr>
  </thead>
  <tbody>
   @foreach($feedback as $value)
    <tr>
        <td class="text-center">{{ $value->id }}</td>
        <td class="text-center">{{ $value->name_customer }}</td>
        <td class="text-center">
          <img src="upload/img/{{ $value->image }}" style="width: 60px; height: 60px">
        </td>
        <td class="text-center" style="width:500px; height:80px">{!! $value->description !!}</td>
        <td class="text-center">{{ $value->type }}</td>
        <td class="text-center">
          @if($value->status == 1)
            <span class="label label-success label-draft">Hiển thị</span>
          @else
            <span class="label label-primary label-draft">Ẩn</span>
          @endif
        </td>
        <td class="text-center">
          <a href="{{ route('feedback.edit',$value->id) }}" class="btn btn-info btn-xs" style="margin:2px !important">
              <i class="fa fa-eye fa-fw"></i><span>Sửa</span>
          </a>
          
            <a href="{{ route('feedback.destroy',$value->id) }}" class="btn btn-danger btn-xs  del" style="margin:2px !important" >
              <i class="glyphicon glyphicon-trash fa-fw"></i><span>Xóa</span>
          </a>
         
          
        </td>
    </tr>
   @endforeach
   
  </tbody>

   
</table>
<div class="pull-right">{{ $feedback->links() }}</div>
       </div>
    </div>
@endsection