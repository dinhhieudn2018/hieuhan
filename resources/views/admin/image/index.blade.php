@extends('layout.admin.master')
@section('sub-content')
  Hình ảnh hoạt động
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
        <th class="text-center">Hình ảnh</th>
        <th class="text-center">Tiêu đề</th>
        <th class="text-center">Tình trạng</th>
        <th class="text-center">
          <a href="{{ route('image.create') }}" class="btn btn-sm btn-success">
              <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm
          </a>
        </th>
      </tr>
  </thead>
  <tbody>
   @foreach($images as $value)
    <tr>
        <td class="text-center">{{ $value->id }}</td> 
        <td class="text-center">
          <img src="upload/img/{{ $value->image }}" style="width: 60px; height: 60px">
        </td>
        <td class="text-center">{{ $value->title }}</td>
        
        <td class="text-center">
          @if($value->status == 1)
            <span class="label label-success label-draft">Hiển thị</span>
          @else
            <span class="label label-primary label-draft">Ẩn</span>
          @endif
        </td>
        <td class="text-center">
          <a href="{{ route('image.edit',$value->id) }}" class="btn btn-info btn-xs" style="margin:2px !important">
              <i class="fa fa-eye fa-fw"></i><span>Sửa</span>
          </a>
          
            <a href="{{ route('img.destroy',$value->id) }}" class="btn btn-danger btn-xs  del" style="margin:2px !important" >
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