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
                
                <i class="fa fa-users"></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/editors/create"><i class="fa fa-circle-o"></i>Agregar editores</a></li>                
              </ul>
            </li>           

            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-newspaper-o"></i><span>Noticias</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/news/create"><i class="fa fa-circle-o"></i>Agregar Noticias</a></li>
                <li><a href="{{ URL::to('/') }}/admin/categorynews/create"><i class="fa fa-circle-o"></i>Agregar Tipos de Noticia</a></li>                
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-file"></i><span>Pages</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/pages/create"><i class="fa fa-circle-o"></i>Agregar pages</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-plus-square-o"></i><span>Nodes</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/nodes/create"><i class="fa fa-circle-o"></i>Agregar nodes</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-file-image-o"></i><span>Imagenes</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/images/create"><i class="fa fa-circle-o"></i>Agregar imagenes</a></li>                               
              </ul>
            </li>        
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-star"></i><span>Marcas</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/brands/create"><i class="fa fa-circle-o"></i>Agregar marcas</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-sitemap"></i><span>Categorías</span><i class="fa fa-angle-left pull-right"></i>               
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/categories/create"><i class="fa fa-circle-o"></i>Agregar categorías</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-tag"></i><span>Productos</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/products/create"><i class="fa fa-circle-o"></i>Agregar productos</a></li>                               
              </ul>
            </li>  
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-money"></i><span>Precio de Productos</span><i class="fa fa-angle-left pull-right"></i>         
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/productprices/create"><i class="fa fa-circle-o"></i>Agregar precio</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">                
                <i class="fa fa-picture-o"></i><span>Galerías</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/galleries/create"><i class="fa fa-circle-o"></i>Agregar galería</a></li>                               
              </ul>
            </li>                                             
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>