<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Nombre usuario</p>             
            </div>
          </div>
          <!-- search form -->          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu principal</li>
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

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Pages</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/pages/create"><i class="fa fa-circle-o"></i>Agregar pages</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Nodes</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/nodes/create"><i class="fa fa-circle-o"></i>Agregar nodes</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Imagenes</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/images/create"><i class="fa fa-circle-o"></i>Agregar imagenes</a></li>                               
              </ul>
            </li>        
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Marcas</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/brands/create"><i class="fa fa-circle-o"></i>Agregar marcas</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Categorías</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/categories/create"><i class="fa fa-circle-o"></i>Agregar categorías</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Productos</span>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/products/create"><i class="fa fa-circle-o"></i>Agregar productos</a></li>                               
              </ul>
            </li>                                             
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>