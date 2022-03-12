<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ active('iqra.*') }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Settings</li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>

        <li class="nav-item nav-category">Pages</li>
        <li class="nav-item {{ active('course.*') }}">
            <a class="nav-link" href="{{ route('course.index') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">
                    Course
                </span>
            </a>
        </li>
        <li class="nav-item {{ active('student.*') }}">
            <a class="nav-link" href="{{ route('student.index') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">
                    Students
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">
                    Contact
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">
                    About Us
                </span>
            </a>
        </li>

        <li class="nav-item nav-category">Basic Options</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Add Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            List Categories
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Popular Courses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Add New Course
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
