<div class="sidebar">
    <div class="sidebar-header">
        <div>
            <a href="{{route('home')}}" class="sidebar-logo"><span>GC Research and Development</span></a>
{{--            <small class="sidebar-logo-headline">welcome!!!</small>--}}
        </div>
    </div><!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
            <li class="nav-label"><label class="content-label">Our feature Pages</label></li>
            <li class="nav-item show">
                <a href="{{route('home')}}" class="nav-link"><i data-feather="box"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layout"></i>About Us</a>
                <nav class="nav nav-sub">
                    <a href="{{route('about.create')}}" class="nav-sub-link">New About</a>
                    <a href="{{route('about.index')}}" class="nav-sub-link">All About</a>
                </nav>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="lock"></i>Contact List</a>
                <nav class="nav nav-sub">
{{--                    <a href="{{route('contact.create')}}" class="nav-sub-link">New Contact</a>--}}
                    <a href="{{route('contact.index')}}" class="nav-sub-link">All Contact list</a>
{{--                    <a href="#" class="nav-sub-link">Purchase Return</a>--}}
                </nav>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layout"></i>Award</a>
                <nav class="nav nav-sub">
                    <a href="{{route('award.create')}}" class="nav-sub-link">New Award</a>
                    <a href="{{route('award.index')}}" class="nav-sub-link">All Award</a>
                </nav>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="user"></i> Gallery Category</a>
                <nav class="nav nav-sub">
                    <a href="{{route('category.index')}}" class="nav-sub-link">Category</a>
                    <a href="{{route('gallery.create')}}" class="nav-sub-link">New Gallery</a>
                    <a href="{{route('gallery.index')}}" class="nav-sub-link">All Gallery</a>
                </nav>
            </li>
            <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i data-feather="file-text"></i>Blogs</a>
                    <nav class="nav nav-sub">
                    <a href="{{route('blog.create')}}" class="nav-sub-link">New Blog</a>
                    <a href="{{route('blog.index')}}" class="nav-sub-link">All Blogs</a>
              </nav>
            </li>

            <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i data-feather="file-text"></i>Comment</a>
                    <nav class="nav nav-sub">
                    <a href="{{route('comment.index')}}" class="nav-sub-link">All Comments</a>
              </nav>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="file-text"></i>User Details</a>
                <nav class="nav nav-sub">
                    <a href="{{route('userdetails.index')}}" class="nav-sub-link">All Notice</a>
                </nav>
            </li>

            <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i data-feather="file-text"></i>Our Partners</a>
                    <nav class="nav nav-sub">
                    <a href="{{route('partner.create')}}" class="nav-sub-link">New Partners</a>
                    <a href="{{route('partner.index')}}" class="nav-sub-link">All Partners</a>
              </nav>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="layout"></i>Product Details</a>
                <nav class="nav nav-sub">
                    <a href="{{route('productdetail.create')}}" class="nav-sub-link">New Product</a>
                    <a href="{{route('productdetail.index')}}" class="nav-sub-link">All Product</a>
                </nav>
            </li>


          {{--  <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i data-feather="file-text"></i>Downloads</a>
                    <nav class="nav nav-sub">
                    <a href="{{route('download.create')}}" class="nav-sub-link">New Downloads</a>
                    <a href="{{route('download.index')}}" class="nav-sub-link">All Downloads</a>
              </nav>
            </li>--}}

{{--             <li class="nav-item">--}}
{{--                <a href="" class="nav-link with-sub"><i data-feather="x-circle"></i>Services</a>--}}
{{--                <nav class="nav nav-sub">--}}
{{--                    <a href="{{route('service.create')}}" class="nav-sub-link">New services</a>--}}
{{--                    <a href="{{route('service.index')}}" class="nav-sub-link">All Services</a>--}}
{{--                    <a href="#" class="nav-sub-link">Damage Product</a>--}}
{{--                    <a href="#" class="nav-sub-link">Catagories</a>--}}
{{--                </nav>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="nav-link"><i data-feather="layers"></i> Stock</a>--}}
{{--            </li>--}}
            <!-- <li class="nav-label"><label class="content-label">Admin</label></li> -->



            <!-- Gallery -->


            <!-- <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="life-buoy"></i>Gallery</a>
                <nav class="nav nav-sub">
                    {{--                    <a href="{{route('expense.create')}}" class="nav-sub-link">Expense</a>--}}
                    {{--                    <a href="{{route('income.create')}}" class="nav-sub-link">Income</a>--}}
{{--                    <a hrefS="{{route('gallery.create')}}" class="nav-sub-link">New Gallery</a>--}}
{{--                    <a href="{{route('gallery.index')}}" class="nav-sub-link">All Gallery</a>--}}
                </nav>
            </li> -->





            <!-- <li class="nav-item">
                <a href="" class="nav-link with-sub"><i data-feather="life-buoy"></i>Sponsor or Partners</a>
                <nav class="nav nav-sub">
                    {{--                    <a href="{{route('expense.create')}}" class="nav-sub-link">Expense</a>--}}
                    {{--                    <a href="{{route('income.create')}}" class="nav-sub-link">Income</a>--}}
{{--                    <a href="{{route('sponsor.create')}}" class="nav-sub-link">New sponsor or partner</a>--}}
{{--                    <a href="{{route('sponsor.index')}}" class="nav-sub-link">All sponsor or partner</a>--}}
                    {{--                    <a   href="#" class="nav-sub-link">Account Head</a>--}}
                </nav>
            </li> -->
{{--         <li class="nav-item">--}}
{{--                <a href="#" class="nav-link with-sub"><i data-feather="book"></i> Slider</a>--}}
{{--                <nav class="nav nav-sub">--}}
{{--                    <a href="{{route('slider.create')}}" class="nav-sub-link">Slider</a>--}}
{{--                    <a href="{{route('slider.index')}}" class="nav-sub-link">All Slider</a>--}}
{{--                    <a href="#" class="nav-sub-link">Employee Transfer</a>--}}
{{--                </nav>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a href="#" class="nav-link with-sub"><i data-feather="book"></i> Company Social</a>
                <nav class="nav nav-sub">
                    <a href="{{route('social.create')}}" class="nav-sub-link">Social</a>
                    <a href="{{route('social.index')}}" class="nav-sub-link">All Social</a>

                </nav>
            </li>


            {{--            <li class="nav-item">--}}
{{--                <a href="{{route('contact-view')}}" class="nav-link with-sub"><i data-feather="layers"></i>View Contact</a>--}}
{{--                <nav class="nav nav-sub">--}}
{{--                    <a href="{{route('contact-view')}}" class="nav-sub-link">View Contact</a>--}}
{{--                    <a href="#" class="nav-sub-link">Salary Payroll</a>--}}
{{--                    <a href="#" class="nav-sub-link">Attendance</a>--}}
{{--                </nav>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a href="#" class="nav-link with-sub"><i data-feather="x-circle"></i>Testimonial</a>
                <nav class="nav nav-sub">
                    <a href="{{route('testimonial.create')}}" class="nav-sub-link">New Testimonial</a>
                    <a href="{{route('testimonial.index')}}" class="nav-sub-link">All Testimonial</a>
                </nav>
        <!-- </li>
{{--            <li class="nav-item">--}}
{{--                <a href="" class="nav-link with-sub"><i data-feather="monitor"></i> Social link</a>--}}
{{--                <nav class="nav nav-sub">--}}
{{--                    <a href="{{route('social.create')}}" class="nav-sub-link">New Social link</a>--}}
{{--                    <a href="{{route('social.index')}}" class="nav-sub-link">All social link</a>--}}
{{--                    <a href="#" class="nav-sub-link">Expense Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">Income Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">Payin Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">Payout Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">Payment in/out</a>--}}
{{--                    <a href="#}" class="nav-sub-link">Stock</a>--}}
{{--                    <a href="#" class="nav-sub-link">Customer Ledger</a>--}}
{{--                    <a href="#" class="nav-sub-link">Supplier Ledger</a>--}}
{{--                    <a href="#" class="nav-sub-link">Account Ledger</a>--}}
{{--                    <a href="#" class="nav-sub-link">Customer Due Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">Supplier Due Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">Profit/loss Report</a>--}}
{{--                    <a href="#" class="nav-sub-link">All Bills</a>--}}
                </nav>
            </li> -->
{{--            <li class="nav-item">--}}
{{--                <a href="" class="nav-link with-sub"><i data-feather="pie-chart"></i> Configuration</a>--}}
{{--                <nav class="nav nav-sub">--}}
{{--                    <a href="#" class="nav-sub-link">General Setting</a>--}}
{{--                    <a href="#" class="nav-sub-link">Payment Method</a>--}}
{{--                    <a href="#" class="nav-sub-link">User</a>--}}
{{--                    <a href="#" class="nav-sub-link">Role and Premission</a>--}}
{{--                    <a href="#" class="nav-sub-link">Bank</a>--}}
{{--                </nav>--}}
{{--            </li>--}}

        </ul>

        <hr class="mg-t-30 mg-b-25">

        <ul class="nav nav-sidebar">
            <li class="nav-item"><a href="{{route('themes.index')}}" class="nav-link"><i data-feather="aperture"></i> Themes</a></li>
{{--            <li class="nav-item"><a href="#" class="nav-link"><i data-feather="help-circle"></i> Documentation</a></li>--}}
        </ul>


    </div><!-- sidebar-body -->
</div><!-- sidebar -->
