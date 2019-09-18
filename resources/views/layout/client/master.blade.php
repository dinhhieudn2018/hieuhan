<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Nha Khoa Hiếu Hân</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Địa chỉ nha khoa uy tín tại khu vực Dương Sơn xã Hòa Châu huyện Hòa Vang thành phố Đà Nẵng" />
	<base href="{{ asset('') }}">
	
	<!-- //Meta Tags -->
	<link href="assets/client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/client/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/client/css/jquery-ui.css" />
	<link href="assets/client/css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<link href="assets/client/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--Online-fonts-->
	<link href="assets/client/css/font-Oswald.css" rel="stylesheet">
	<link href="assets/client/css/Open-Sans.css" rel="stylesheet">
	<link rel="shortcut icon" href="assets/client/images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="assets/client/css/toastr.min.css">
	<!--//Online-fonts-->
</head>

<body>
	@include('layout.client.header')
	
	<!-- Banner bottom -->
	@include('layout.client.booking')
	
	@include('layout.client.price')
	
	@include('layout.client.image')
	
	@include('layout.client.feedback')
	
	@include('layout.client.footer')
	
</body>

</html>