<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('Admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard administrateur</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Hotels</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Ajouter</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Admin.verifyHotel.index') }}">
                        <i class="bi bi-circle"></i><span>Verifier hotel</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Plus</span>
                    </a>
                </li>


            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Gestionnaires</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Ajouter</span>
                    </a>
                </li>

                <li>
                    <a href=" ">
                        <i class="bi bi-circle"></i><span>Plus</span>
                    </a>
                </li>


            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-layout-text-window-reverse"></i><span> Utilisateur</span>
            </a>

        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-chat-left-text"></i> </i><span>Messages</span>
            </a>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('Admin.dashboard.notification') }}">
                <i class="bi bi-bell"></i><span>Motifications</span>
            </a>
        </li><!-- End Charts Nav -->




</aside><!-- End Sidebar-->
