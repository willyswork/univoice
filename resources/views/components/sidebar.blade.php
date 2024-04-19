
<div class="menu sidebar ">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li>
                    <a href="#dashboard">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="#products">
                        <i class="iconsminds-shopping-cart"></i> Products
                    </a>
                </li>
                <li>
                    <a href="#clients">
                        <i class="iconsminds-user"></i> Clients
                    </a>
                </li>
                <li>
                    <a href="#billing">
                        <i class="iconsminds-billing"></i> Billing
                    </a>
                </li>
                <li>
                    <a href="#reports">
                        <i class="iconsminds-monitor-analytics"></i> Reports
                    </a>
                </li>
                <li class="active">
                    <a href="#settings">
                        <i class="iconsminds-gear"></i> Settings
                    </a>
                </li>

                <li>
                    <a href="#documentation" >
                        <i class="iconsminds-library"></i> Docs
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        <i class="iconsminds-right"></i> Log Out
                    </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <x-sub-menu/>

</div>








