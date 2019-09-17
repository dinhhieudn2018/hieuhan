<!--Price -->
	  <div class="gallery-w3layouts" id="price">
		<div class="container-fluid">
			<h5 class="title-w3" id="price-table">Bảng giá</h5>
			 <div class="container">
      

      <div class="row">
        <div class="col-12">
          <div class="price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col">Tên dịch vụ</th>
                 
                  <th scope="col">Giá</th>
                </tr>
              </thead>
              <tbody>
                @foreach($prices as $price)
                <tr>
                  <th scope="row">{{ $price->name }}</th>
                  
                  <td>{{ $price->price }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        
      </div>
    </div>
			
			
		</div>
	</div>
	<!-- End price -->