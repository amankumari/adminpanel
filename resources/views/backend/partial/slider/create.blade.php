@extends('backend.layout.master')
@section('title','Slider-Image')

@section('content')

<!-- Mobile Menu end -->
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list map-mg-t-40-gl shadow-reset">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div class="breadcome-heading">
<form role="search" class="">
<input type="text" placeholder="Search..." class="form-control">
<a href=""><i class="fa fa-search"></i></a>
</form>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<ul class="breadcome-menu">
<li><a href="#">Home</a> <span class="bread-slash">/</span>
</li>
<li><span class="bread-blod">Dashboard</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Breadcome End-->
<!-- Basic Form Start -->
<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-7">
<div class="sparkline8-list basic-res-b-30 shadow-reset">


</div>
</div>
<div class="col-lg-5">
<div class="sparkline9-list shadow-reset">


</div>
</div>
</div>


<div class="row">
<div class="col-lg-12">
<div class="sparkline12-list shadow-reset mg-t-30">
<div class="sparkline12-hd">
<div class="main-sparkline12-hd">
<h1>All Form Element</h1>
<br><br>


<div class="sparkline12-outline-icon">
<span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
<span><i class="fa fa-wrench"></i></span>
<span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
</div>
</div>
</div>

<div class="sparkline12-graph">
<div class="basic-login-form-ad">
<div class="row">
<div class="col-lg-12">
<div class="all-form-element-inner">
<form action="{{url('admin/slider')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="form-group-inner">
    
@if(Session::has('message'))
<div class="alert alert-success">
  <strong>Success!</strong>{{ Session::get('message') }}.
</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
<div class="col-lg-3">
<label class="login2 pull-right pull-right-pro">Image Name</label>
</div>
<div class="col-lg-9">
<input type="text" class="form-control"  name="image_name" />
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3">
<label class="login2 pull-right pull-right-pro">Image Alt</label>
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="image_alt" />
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3">
<label class="login2 pull-right pull-right-pro">Description</label>
</div>
<div class="col-lg-9">
<input type="text" class="form-control" name="description" />
</div>
</div>
</div>



<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-right pull-right-pro">File Upload System</label>
</div>
<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
<div class="file-upload-inner file-upload-inner-right ts-forms">
<div class="input append-big-btn">
<label class="icon-left" for="append-big-btn">
<i class="fa fa-download"></i>
</label>
<div class="file-button">
Browse
<input type="file" onchange="document.getElementById('append-big-btn').value = this.value;" name="file">
</div>
<input type="text" id="append-big-btn" placeholder="no file selected">
</div>
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="login-btn-inner">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-9">
<div class="login-horizental cancel-wp pull-left">
<button class="btn btn-white" type="submit">Cancel</button>
<button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Basic Form End-->
@stop