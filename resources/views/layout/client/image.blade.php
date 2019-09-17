<!-- gallery -->
	<div class="gallery-w3layouts" id="portfolio">
		<div class="container-fluid">
			<h5 class="title-w3" id="image">Hình ảnh</h5>
			@foreach($images as $img)
			<div class="col-md-3 gallery-columns">
				
				<div class="gal_grid_outer">
					<a title="We’re pleased to offer a wide range of dental services."
					    href="upload/img/{{ $img->image }}">
						<div class="gal_grid_outer1">
							<img src="upload/img/{{ $img->image }}" alt=" " class="img-responsive" style="width: 400px; height: 220px" />
							<div class="gallery_grid_pos">
								<h3>
									<span>{{ $img->title }}</span>
									
								</h3>
							</div>
						</div>
					</a>
				</div>

				
				
			</div>
			@endforeach
		
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //gallery -->