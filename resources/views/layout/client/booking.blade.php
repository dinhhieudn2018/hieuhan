<div class="bnr-btm-w3layouts" id="booking">
		<div class="bnr-lft-agileits">
			<h2>Đặt lịch hẹn ngay!</h2>
			<p class="para-agileits-w3layouts">Nếu bạn gặp vấn đề về sức khỏe răng miệng, đừng ngần ngại liên hệ với chúng tôi</p>
			<h3 class="subheading-agileits-w3layouts">Dịch vụ của chúng tôi</h3>
			<ul>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Răng sứ</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Nhổ răng</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Trám răng</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Tẩy trắng răng</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Đính cườm đã</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Cạo vôi</li>
			</ul>
		</div>
		<div class="bnr-rgt-w3-agile">
			<form action="{{ route('customer.store') }}" method="post">
				@csrf
				<div class="inputs-w3ls one">
					<input type="text" name="name" placeholder="Họ và tên">
					@if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                    @endif
				</div>
				<div class="inputs-w3ls two">
					<input type="email" name="email" placeholder="Địa chỉ email">
					@if($errors->has('email'))
                        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                    @endif
				</div>
				<div class="inputs-w3ls one">
					<input type="text" name="phone" placeholder="Số điện thoại">
					@if($errors->has('phone'))
                        <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                    @endif
				</div>
				<div class="inputs-w3ls two">
					{{-- <input id="datepicker" name="appointment_schedule" type="text" placeholder="Ngày hẹn" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}"
					    required=""> --}}
					<select name="appointment_schedule">
						<option value="0">Chọn lịch hẹn</option>
						<option value="11h - 12h">11h - 12h</option>
                      	<option value="12h - 13h">12h - 13h</option>
                      	<option value="17h - 18h">17h - 18h</option>
                      	<option value="18h - 19h">18h - 19h</option>
					</select>
					<!-- <input type="text" name="booking" placeholder="Ngày hẹn" required=""> -->
				</div>
				<div class="inputs-w3ls">
					<textarea name="message" placeholder="Tin nhắn"></textarea>
				</div>
				<input type="submit" value="Gửi">
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>