<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/admin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ГЛАВНЫЙ МЕНЮ</li>
        <li>
          <a href="{{route('admin.index')}}">
            <i class="fa fa-dashboard"></i> <span>Ҷадвал</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Пользователи</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.users.index')}}"><i class="fa fa-circle-o"></i> Просмотр </a></li>
            <li><a href="{{route('admin.users.create')}}"><i class="fa fa-circle-o"></i> Создать</a></li>
          </ul>
        </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-users"></i> <span>Учители</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('teacher.index')}}"><i class="fa fa-circle-o"></i> Просмотр </a></li>
                  <li><a href="{{route('teacher.create')}}"><i class="fa fa-circle-o"></i> Создать </a></li>
              </ul>
          </li>


        <li>
        <a href="{{route('auth.logout')}}">
            <i class="fa fa-sign-out"></i> <span>Выход</span>
          </a>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>
