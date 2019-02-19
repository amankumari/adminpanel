 <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{url('backend/img/message/1.jpg')}}" alt="" />
                    </a>
                    <h3> {{ Auth::user()->name }} </h3>
                    
                    <strong>Laravel+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{url('/admin')}}" class="dropdown-item">Dashboard</a>
                               
                            </div>
                        </li>
                      
                  
                        
                       
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="{{url('admin/slider')}}" class="dropdown-item">Image Slider</a>
                                 <a href="basic-form-element.html" class="dropdown-item">Blog</a>
                                
                            </div>
                        </li>
                        
                       
                    </ul>
                </div>
            </nav>
        </div>