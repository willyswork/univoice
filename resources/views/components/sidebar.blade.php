<aside>
<div class="menu sidebar">
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
                    <a href="#" target="_blank">
                        <i class="iconsminds-library"></i> Docs
                    </a>
                </li>

                <li>
                    <a href="Blank.Page.html">
                        <i class="iconsminds-right"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>


</div>
</aside>


<x-slot name="scripts">
    <script>

    $('.toggle-btn').click(function(){


$('.sidebar').toggleClass('navactive');
console.log('toggler active clicked');

 });
        </script>
</x-slot>




