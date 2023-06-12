<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <img class="img-xs rounded-circle" src="../../template/assets/images/logo.png" alt="">
        <h3 class="menu-title text-white font-weight-large m-2"> SFAC | GCS</h3>
    </div>

    <ul class="nav">
    <?php if ($_SESSION['role'] == "Super Admin") {
      echo '  <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/dashboard/index.php">
                <span class="menu-icon">
                    <i class="mdi mdi-view-dashboard"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-plus"></i>
                </span>
                <span class="menu-title">Add User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../super_admin/add.admin.php">Admin</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../guidance/add.guidance.php">Guidance</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../students/add.students.php">Students</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-view-list"></i>
                </span>
                <span class="menu-title">User Lists</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../super_admin/list.admin.php">Admin</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../guidance/list.guidance.php">Guidance</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../students/list.students.php">Student</a></li>
                </ul>
            </div>
        </li>
        ';
    }
    elseif ($_SESSION['role'] == "Administrator") {
        echo '<li class="nav-item menu-items">
        <a class="nav-link" href="../dashboard/index.php">
            <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
            aria-controls="ui-basic">
            <span class="menu-icon">
                <i class="mdi mdi-account-edit"></i>
            </span>
            <span class="menu-title">Manage Student</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../students/add.students.php">Add Students</a></li>
                <li class="nav-item"> <a class="nav-link" href="../evaluation/view.eval.php">Student Evaluation</a></li>
                <li class="nav-item"> <a class="nav-link" href="../notes/view.notes.php">Significant Notes</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../students/list.students.php">Student List</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
            <i class="mdi mdi-book-open-page-variant"></i>
        </span>
        <span class="menu-title">Forms</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../forms/guidance.php">Blank Forms</a></li>
        </ul>
    </div>
    </li>   
        ';
    }
    elseif ($_SESSION['role'] == "Guidance") {
        echo '<li class="nav-item menu-items">
        <a class="nav-link" href="../dashboard/index.php">
            <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
            aria-controls="ui-basic">
            <span class="menu-icon">
                <i class="mdi mdi-account-edit"></i>
            </span>
            <span class="menu-title">Manage Student</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../students/add.students.php">Add Students</a></li>
                <li class="nav-item"> <a class="nav-link" href="../evaluation/view.eval.php">Student Evaluation</a></li>
                <li class="nav-item"> <a class="nav-link" href="../notes/view.notes.php">Significant Notes</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../students/list.students.php">Student List</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
            <i class="mdi mdi-book-open-page-variant"></i>
        </span>
        <span class="menu-title">Forms</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../forms/guidance.php">Blank Forms</a></li>
        </ul>
    </div>
    </li>
        
        
        
        ';
    }
    elseif ($_SESSION['role'] == "Student") {
        echo '<li class="nav-item menu-items">
        <a class="nav-link" href="../dashboard/index.php">
            <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item menu-items">

        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
            <i class="mdi mdi-book-open-page-variant"></i>
        </span>
        <span class="menu-title">Forms</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../forms/guidance.php">Blank Forms</a></li>
        </ul>
    </div>
    </li>
        
        
        
        ';
    }
    ?> 
    </ul>
    
</nav>
<!-- partial -->