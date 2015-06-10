<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-circle-o"></i>Inicio</a></li>                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Usuarios</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/editors/create"><i class="fa fa-circle-o"></i>Agregar editores</a></li>                
              </ul>
            </li>           

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Noticias</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/news/create"><i class="fa fa-circle-o"></i>Agregar Noticias</a></li>
                <li><a href="{{ URL::to('/') }}/admin/categorynews/create"><i class="fa fa-circle-o"></i>Agregar Tipos de Noticia</a></li>                
              </ul>
            </li>                                             
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>