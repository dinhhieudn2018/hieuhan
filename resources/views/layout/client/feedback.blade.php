<!-- testimonials -->
	<div class="test">
		<div class="container">
			<h5 class="title-w3">Khách hàng phản hồi</h5>
			<div class=" test-gr">
				<div class=" test-gri1">
					<div id="owl-demo2" class="owl-carousel">
						<div class="agile">
							@foreach($feedbacks as $fb)
							<div class="col-md-6 test-grid">
								<div class="test-grid1-agileinfo">
									<img src="upload/img/{{ $fb->image }}" alt="" class="img-r">
									<p>{!! $fb->description !!}</p>
									<h4>{{ $fb->name_customer }}</h4>
									<span>{{ $fb->type }}</span>
								</div>
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonials -->