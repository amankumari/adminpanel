@extends('backend.layout.master')
@section('title','Slider-Image')

@section('content')


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
                                            <li><span class="bread-blod">Slider</span>
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
 <!-- Static Table Start -->
<div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Slider <span class="table-project-n">Data</span> Table</h1>
                                        <div class="sparkline13-outline-icon">
                                        	<span class=""><a href="{{Route('slider.create')}}"><i class="fa fa-plus" style="color:#3E3C3C;"></i></a></span>
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">SR NO</th>
                                                    <th data-field="name" data-editable="true">Name</th>
                                                    <th data-field="email" data-editable="true">Alt</th>
                                                    <th data-field="phone" data-editable="true">Description</th>
                                                    <th data-field="company" data-editable="true">Image</th>
                                                    <th data-field="complete">Completed</th>
                                                    <th data-field="date" data-editable="true">Date</th>

                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @php  $i=1; @endphp
                                              @foreach($slider as $value)


                                                <tr>
                                                    <td></td>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$value->image_name}}</td>
                                                    <td>{{$value->image_alt}}</td>
                                                    <td>{{$value->description}}</td>
                                                    <td>{{$value->file}}</td>
                                                    <td class="datatable-ct"><span class="pie">1/6</span>
                                                    </td>
                                                    <td>{{  date('M d, Y', strtotime($value->created_at))}}</td>

                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                    </td>
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
            </div>
            <!-- Static Table End -->




@stop
