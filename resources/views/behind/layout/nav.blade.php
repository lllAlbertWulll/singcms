<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

        <a class="navbar-brand" >singcms内容管理平台</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 用户名 <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/admin.php?c=admin&a=personal"><i class="fa fa-fw fa-user"></i> 个人中心</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="/admin.php?c=login&a=loginout"><i class="fa fa-fw fa-power-off"></i> 退出</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav nav_list">
            <li>
                <a href="/admin/index"><i class="fa fa-fw fa-dashboard"></i> 首页</a>
            </li>
            <li>
                <a href="/blog/index"><i class="fa fa-fw fa-bar-chart-o"></i>文章管理</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>