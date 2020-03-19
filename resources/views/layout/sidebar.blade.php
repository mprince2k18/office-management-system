<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('report.index')}}">

          @foreach ($logos  = App\Logo::where('status',1)->get() as $logo)
            <img class="logo" src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" width="25" alt="Logo">
        @endforeach

          <span class="m-l-10">Softtech IT</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#">

                        <img class="logo" src="http://127.0.0.1:8000/uploads/logo/9.png" alt="Logo">

                    </a></div>
                    <div class="detail">
                        <h6>{{ Auth::user()->name }}</h6>
                        <small>{{ Auth::user()->relationBetweenRole->role_name }}</small>
                    </div>
                </div>
            </li>

            <!-- BEGIN::My sidebar -->
            <!-- BEGIN::My sidebar -->
            <!-- BEGIN::My sidebar -->

            @anypermission('desk-admin','admin')

            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Student Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('student.index')}}">New Student</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('student.all')}}">All Student</a></li>
                  @endcan
                </ul>
            </li>

            @endanypermission


            @anypermission('desk-admin','admin')

            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Teacher Area</span></a>
                <ul class="ml-menu">
                    @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('teacher.index')}}">New Teacher</a></li>
                    @endcan
                    @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('teacher.all')}}">All Teacher</a></li>
                    @endcan
                </ul>
            </li>
            @endanypermission


            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Course Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('course.index')}}">New Course</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('course.all')}}">All Course</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Batch Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('batch.index')}}">New Batch</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('batch.all')}}">All Batch</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Visitor Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('visitor.index')}}">New Visitor</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('visitor.all')}}">All Visitor</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Seminar Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('seminar.index')}}">New Seminar</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('seminar.all')}}">All Seminar</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Enrollment Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('enroll.index')}}">New Enrollment</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('enroll.all')}}">All Enroll</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Employee Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('employee.index')}}">New Employee</a></li>
                    @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('employee.all')}}">All Employee</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('desk-admin','admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Requisition Area</span></a>
                <ul class="ml-menu">
                  @can('admin')
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('requisition.index')}}">New Requisition</a></li>
                  @endcan
                  @can('desk-admin')
                    <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('requisition.all')}}">All Requisition</a></li>
                  @endcan
                </ul>
            </li>
            @endanypermission

            @anypermission('admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Activity Log</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('activity.index')}}">Logs</a></li>
                </ul>
            </li>
            @endanypermission

            @anypermission('admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Report Area</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('report.index')}}">Report</a></li>
                </ul>
            </li>
            @endanypermission

            @anypermission('admin')
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Admin Area</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('users.index')}}">Users</a></li>
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('users.create')}}">User Create</a></li>
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('groups.index')}}">Groups</a></li>
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('groups.create')}}">Group Create</a></li>
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('permissions.index')}}">Permission</a></li>
                    <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('permissions.create')}}">Permission Create</a></li>
                </ul>
            </li>
            @endanypermission


            <!-- END::My sidebar -->






        </ul>
    </div>
</aside>
