<nav>
    <ul class="metismenu" id="menu">
        <li class="<?php if ($page == 'dashboard') {
                        echo 'active';
                    } ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="<?php if ($page == 'student') {
                        echo 'active';
                    } ?>"><a href="students.php"><i class="ti-id-badge"></i> <span>Students Section</span></a></li>

        <li class="<?php if ($page == 'studentList') {
                        echo 'active';
                    } ?>"><a href="studentList.php"><i class="ti-id-badge"></i> <span>Students list</span></a></li>


        <li class="<?php if ($page == 'house') {
                        echo 'active';
                    } ?>"><a href="house.php"><i class="fa fa-th-large"></i> <span>Houses/Hall Section</span></a></li>

        <li class="<?php if ($page == 'exeat') {
                        echo 'active';
                    } ?>"><a href="exeat-section.php"><i class="fa fa-sign-out"></i> <span>Exeat Types</span></a></li>

        <li class="<?php if ($page == 'manage-exeat') {
                        echo 'active';
                    } ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Exeat</span></a>

            <ul class="collapse">
                <li><a href="pending-history.php"><i class="fa fa-spinner"></i> Pending</a></li>
                <li><a href="approved-history.php"><i class="fa fa-check"></i> Approved</a></li>
                <li><a href="declined-history.php"><i class="fa fa-times-circle"></i> Declined</a></li>
                <li><a href="exeat-history.php"><i class="fa fa-history"></i> Exeat History</a></li>
            </ul>

        </li>

        <li class="<?php if ($page == 'manage-admin') {
                        echo 'active';
                    } ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>Manage Admin</span></a></li>

    </ul>
</nav>