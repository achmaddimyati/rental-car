<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="{{ route('admin.dashboard.index') }}" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin.cars.index') }}" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Master Mobil</a>
                </li>
                <li>
                    <a href="{{ route('admin.messages.index') }}" class="waves-effect"><i class="fa fa-th m-r-10" aria-hidden="true"></i>Daftar Pesan</a>
                </li>
            </ul>
            <div class="text-center m-t-30">
                <a href="#" onclick="document.getElementById('logout-form').submit()" class="btn btn-danger"> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="post" >
                    @csrf

                </form>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
