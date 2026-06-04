<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand -->
    <a href="#" class="brand-link text-center text-white">
        <span class="brand-text font-weight-light">My Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        @if(auth()->user()->role === 'admin')

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/registrations/" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Registartions</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/appointments/" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Appointments</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/blogs" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Blog</p>
                    </a>
                </li>
        @endif

        @if(auth()->user()->role === 'employee')

                <li class="nav-item">

                    <a class="nav-link" href="{{ url('/employee/dashboard') }}">
                     <i class="nav-icon fas fa-briefcase"></i>

                    <p>Dashboard</p>
                    </a>
                </li>

               

                <li class="nav-item">
                    <a href="/admin/registrations/" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Registartions</p>
                    </a>
                </li>
                <!-- <li class="nav-item">

                    <a class="nav-link" href="{{ url('/employee/profile') }}">
                        
                      <i class="nav-icon fas fa-briefcase"></i>
                      <p>Profile</p>
                    </a>
                </li> -->

                

        @endif

            </ul>
        </nav>
    </div>
</aside>