@extends('layout.admin.master')

@section('content')
	<div class="container" style="padding-top: 30px;width: 100%">
       
       <div id="content" class="table-responsive">
            <table class="table table-bordered table-hover">
   <thead>
      <tr style="background-color: #3c8dbc;color:white;">
        <th class="text-center">STT</th>
        <th class="text-center">Tên dịch vụ</th>
        <th class="text-center">Giá</th>
        <th class="text-center">Tình trạng</th>
        
        <th class="text-center">
          <a href="{{ route('service.create') }}" class="btn btn-sm btn-success">
              <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm
          </a>
        </th>
      </tr>
  </thead>
  <tbody>
   @foreach($services as $value)
    <tr>
        <td class="text-center">{{ $value->id }}</td>
        <td class="text-center">{{ $value->name }}</td>
        <td class="text-center">{{ $value->price }}</td>
        <td class="text-center">{{ $value->status }}</td>
        <td class="text-center">
          <a href="{{ route('service.edit',$value->id) }}" class="btn btn-info btn-xs" style="margin:2px !important">
              <i class="fa fa-eye fa-fw"></i><span>Sửa</span>
          </a>
          
            <a href="{{ route('destroy.service',$value->id) }}" class="btn btn-danger btn-xs  del" style="margin:2px !important" >
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