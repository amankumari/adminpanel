<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('backend.layout.css')
</head>

<body class="materialdesign">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header top area start-->
<div class="wrapper-pro">
@include('backend.layout.sidemenu')
<div class="content-inner-all">
<div class="header-top-area">
<div class="fixed-header-top">
<div class="container-fluid">
<div class="row">
@include('backend.layout.rightside')
</div>
</div>
</div>
</div>
<!-- Header top area end-->
<!-- Breadcome start-->
@include('backend.layout.mobile')
@yield('content')
</div>
</div>
<!-- Footer Start-->
@include('backend.layout.footer')
<!-- Footer End-->
<!-- Chat Box Start-->
@include('backend.layout.chat')
@include('backend.layout.script')
</body>

</html>
