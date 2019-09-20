<base href="{{ asset('') }}">
<div marginheight="0" marginwidth="0" style="background:#f0f0f0">
    <div id="wrapper" style="background-color:#f0f0f0">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="margin:0 auto;width:600px!important;min-width:600px!important" class="container">
            <tbody>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px;border-bottom:1px solid #ff3333" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle" style="width:500px;height:60px">
                                        <a href="#" style="border:0" target="_blank" width="130" height="35" style="display:block;border:0px">
                                            <img src="https://www.madisonkidsdentist.com/blog/wp-content/uploads/2017/04/happyenamel.jpg" height="100" width="115" style="display:block;border:0px;float: left;"> <b style="float: left;line-height: 100px;color: red;font-size: 20px;">Nha Khoa Hiếu Hân kính chào quý khách</b>
                                        </a>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;color:#ff3333;text-transform:uppercase;font-weight:bold;padding:25px 10px 15px 10px">
                                        Thông báo đặt lịch hẹn thành công
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding:0 10px 20px 10px;line-height:17px">
                                        Chào {{ $customer->name }},
                                        <br> Cám ơn quý khách đã đặt lịch hẹn tại Nha Khoa Hiếu Hân
                                        <br>
                                        <br> Lịch hẹn của quý khách đang 
                                        <b>chờ quản trị viên</b>  
                                        <b>xác nhận</b> (trong vòng 24h)
                                        <br> Chúng tôi sẽ thông tin <b>trạng thái lịch hẹn</b> trong email tiếp theo.
                                        <br> Quý khách vui lòng kiểm tra email thường xuyên.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px;border:1px solid #ff3333;border-top:3px solid #ff3333" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 20px 15px;line-height:17px"> 
                                        <b>Lịch hẹn của bạn #</b> 
                                        <a href="#" style="color:#ed2324;font-weight:bold;text-decoration:none" target="_blank">
                                        </a>
                                        <span style="font-size:12px">{{ Carbon\Carbon::createFromTimestamp(strtotime($customer->created_at))->format('j-m-Y') }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td align="left" valign="top">
                                        <table style="width:100%" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td align="left" valign="top" style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding-left:15px;padding-right:10px;line-height:20px;padding-bottom:5px"> 
                                                        <b>Họ và tên</b>
                                                    </td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">:</td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                         <a href="#" style="color:#115fff;text-decoration:none" target="_blank">
                                                            {{ $customer->name }}
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding-left:15px;padding-right:10px;line-height:20px;padding-bottom:5px"> 
                                                        <b>Địa chỉ</b>
                                                    </td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">:</td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px"> 
                                                        <a href="#" style="color:#115fff;text-decoration:none" target="_blank">
                                                            {{ $customer->address }}
                                                        </a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:15px;padding-right:10px;padding-bottom:5px"> 
                                                        <b>Lịch hẹn</b>
                                                    </td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">:</td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                        {{ Carbon\Carbon::createFromTimestamp(strtotime($customer->date))->format('j-m-Y') }} -- 
                                                        {{ $customer->appointment_schedule }} 
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:15px;padding-right:10px;padding-bottom:5px"> 
                                                        <b>Người nhận</b>
                                                    </td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">:</td>
                                                    <td align="left" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px"> 
                                                        <b>{{ $customer->name }}</b> - {{ $customer->phone }}
                                                        
                                                       
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff;padding-top:20px">
                        <table style="width:500px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="center" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px"> 
                                        Đây là thư tự động từ hệ thống. Vui lòng không trả lời email này.
                                        <br> Nếu có bất kỳ thắc mắc hay cần giúp đỡ, Bạn vui lòng ghé thăm 
                                        <b style="font-family:Arial,Helvetica,sans-serif;font-size:13px;text-decoration:none;font-weight:bold">Trung tâm trợ giúp</b> của chúng tôi tại địa chỉ: 
                                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#0066cc;text-decoration:none;font-weight:bold" target="_blank">
                                            nhakhoahieuhandanang@gmail.com
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> 
</div>