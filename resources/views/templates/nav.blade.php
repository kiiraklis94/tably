<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {{--<a class="navbar-brand" href="/"><img src="/../img/tably-logo.png" height="28" width="108"></a>--}}
        <a class="navbar-brand" href="/"><img src="/../img/tably-logo.svg" height="28" width="108"></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- Top Navbar User Menu -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <li><a href="#"><i class="fa fa-user fa-fw"></i> @lang('nav.user_profile')</a>
                </li>

                <li><a href="#"><i class="fa fa-gear fa-fw"></i> @lang('nav.settings')</a>
                </li>


                <li class="divider"></li>

                <li><a href="/billing"><i class="fa fa-credit-card fa-fw"></i> Billing</a>
                </li>


                <li class="divider"></li>

                <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> @lang('nav.logout')</a>
                </li>

            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">


        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

            {{--<li class="sidebar-search">--}}
            {{--<div class="input-group custom-search-form">--}}
            {{--<input type="text" class="form-control" placeholder="Αναζήτηση...">--}}
            {{--<span class="input-group-btn">--}}
            {{--<button class="btn btn-default" type="button">--}}
            {{--<i class="fa fa-search"></i>--}}
            {{--</button>--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--<!-- /input-group -->--}}
            {{--</li>--}}


            <!-- Dashboard -->
                <li>
                    <a href="/"><i class="fa fa-dashboard fa-fw"></i> @lang('nav.dashboard')</a>
                </li>

                <!-- Team -->
                <li>
                    <a href="/teams"><i class="fa fa-users fa-fw"></i> Teams</a>

                </li>

                <!-- Performance -->
                <li>
                    <a href="#"><i class="fa fa-bar-chart fa-fw"></i> Performance<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="flot.html">Reservations</a>
                        </li>
                        <li>
                            <a href="morris.html">Guestlist</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="/crm"><i class="fa fa-comments fa-fw"></i> CRM</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-building fa-fw"></i> Venues</a>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>