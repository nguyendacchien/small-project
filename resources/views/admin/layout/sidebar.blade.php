<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            My-Home
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('food.list')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('category.list')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Table Category</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('user.list')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Table User</p>
                </a>
            </li>
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="admin/material-dashboard-master/examples/typography.html">--}}
{{--                    <i class="material-icons">library_books</i>--}}
{{--                    <p>Typography</p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="admin/material-dashboard-master/examples/icons.html">--}}
{{--                    <i class="material-icons">bubble_chart</i>--}}
{{--                    <p>Icons</p>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="admin/material-dashboard-master/examples/rtl.html">--}}
{{--                    <i class="material-icons">language</i>--}}
{{--                    <p>RTL Support</p>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item active-pro ">
                <a class="nav-link" href="#">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>

