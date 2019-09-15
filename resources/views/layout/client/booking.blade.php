<div class="bnr-btm-w3layouts" id="appoint">
		<div class="bnr-lft-agileits">
			<h2>Yêu cầu một cuộc hẹn!</h2>
			<p class="para-agileits-w3layouts">Chỉ cần một cuộc hẹn để nhận được sự giúp đỡ từ các chuyên gia của chúng tôi</p>
			<h3 class="subheading-agileits-w3layouts">Dịch vụ của chúng tôi</h3>
			<ul>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Root Canal</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Teeth Whitening</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Wisdom Teeth</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Crowns Bridges</li>
				<li>
					<span class="fa fa-stethoscope" aria-hidden="true"></span>Cosmetic Dentis</li>
				<li>
					<span class="fa fa-user-md" aria-hidden="true"></span>Dental Implants</li>
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