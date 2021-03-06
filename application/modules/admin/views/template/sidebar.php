<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url(); ?>admin">SB Admin v2.0</a>
  </div>
  <!-- /.navbar-header -->

  <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-messages">
        <li>
          <a href="#">
            <div>
              <strong>John Smith</strong>
              <span class="pull-right text-muted">
                <em>Yesterday</em>
              </span>
            </div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a class="text-center" href="#">
            <strong>Read All Messages</strong>
            <i class="fa fa-angle-right"></i>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-messages -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-tasks">
        <li>
          <a href="#">
            <div>
              <p>
                <strong>Task 1</strong>
                <span class="pull-right text-muted">40% Complete</span>
              </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <p>
                <strong>Task 2</strong>
                <span class="pull-right text-muted">20% Complete</span>
              </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <p>
                <strong>Task 3</strong>
                <span class="pull-right text-muted">60% Complete</span>
              </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <p>
                <strong>Task 4</strong>
                <span class="pull-right text-muted">80% Complete</span>
              </p>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete (danger)</span>
                </div>
              </div>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a class="text-center" href="#">
            <strong>See All Tasks</strong>
            <i class="fa fa-angle-right"></i>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-tasks -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-alerts">
        <li>
          <a href="#">
            <div>
              <i class="fa fa-comment fa-fw"></i> New Comment
              <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="fa fa-twitter fa-fw"></i> 3 New Followers
              <span class="pull-right text-muted small">12 minutes ago</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="fa fa-envelope fa-fw"></i> Message Sent
              <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="fa fa-tasks fa-fw"></i> New Task
              <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="fa fa-upload fa-fw"></i> Server Rebooted
              <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a class="text-center" href="#">
            <strong>See All Alerts</strong>
            <i class="fa fa-angle-right"></i>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-alerts -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>-->
        <li><a href="<?php echo base_url(); ?>admin/usuarios/form/<?php echo $this->session->userdata('id_session') ?>"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('nome_session') ?></a></li>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <!--<li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>-->
        <li class="logoff"><a href="<?php echo base_url(); ?>admin/home/logoff"><i class="fa fa-fw fa-power-off"></i> Sair</a></li>
        </li>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
          <!-- /input-group -->
        </li>

        <li><a href="<?php echo base_url(); ?>admin/teste"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>

        <li>
          <a href="#"><i class="fa fa-sitemap fa-fw"></i> Exemplos<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse" style="height: auto;">
            <li><a href="<?php echo base_url(); ?>admin/teste/tables"><i class="fa fa-table fa-fw"></i> Tables</a></li>
            <li><a href="<?php echo base_url(); ?>admin/teste/forms"><i class="fa fa-edit fa-fw"></i> Forms</a></li>
            <li><a href="<?php echo base_url(); ?>admin/teste/mymodel"><i class="fa fa-edit fa-fw"></i> My Model</a></li>
            <li><a href="<?php echo base_url(); ?>admin/teste/login">Login Page</a></li>
            <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <li><a href="<?php echo base_url(); ?>admin/teste/flot">Flot Charts</a></li>
                <li><a href="<?php echo base_url(); ?>admin/teste/morris">Morris.js Charts</a></li>
              </ul>
              <!-- /.nav-third-level -->
            </li>
            <li>
              <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <li><a href="<?php echo base_url(); ?>admin/teste/panelswells">Panels and Wells</a></li>
                <li><a href="<?php echo base_url(); ?>admin/teste/buttons">Buttons</a></li>
                <li><a href="<?php echo base_url(); ?>admin/teste/notifications">Notifications</a></li>
                <li><a href="<?php echo base_url(); ?>admin/teste/typography">Typography</a></li>
                <li><a href="<?php echo base_url(); ?>admin/teste/grid">Grid</a></li>
              </ul>
              <!-- /.nav-third-level -->
            </li>
          </ul>
        </li>

        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#portfolio"><i class="fa fa-list fa-fw"></i> Portfolio<span class="fa arrow"></span></a>
          <ul id="portfolio" class="nav nav-second-level collapse">
            <li><a href="<?php echo base_url(); ?>admin/portfolio/form">Cadastro</a></li>
            <li><a href="<?php echo base_url(); ?>admin/portfolio">Listagem</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#noticias"><i class="fa fa-list fa-fw"></i> Notícias<span class="fa arrow"></span></a>
          <ul id="noticias" class="nav nav-second-level collapse">
            <li><a href="<?php echo base_url(); ?>admin/noticias/form">Cadastro</a></li>
            <li><a href="<?php echo base_url(); ?>admin/noticias">Listagem</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#clientes"><i class="fa fa-fw fa-list"></i> Clientes <span class="fa arrow"></span></a>
          <ul id="clientes" class="nav nav-second-level collapse">
            <li><a href="<?php echo base_url(); ?>admin/clientes/form">Cadastro</a></li>
            <li><a href="<?php echo base_url(); ?>admin/clientes">Listagem</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#galerias"><i class="fa fa-fw fa-list"></i> Galerias <span class="fa arrow"></span></a>
          <ul id="galerias" class="nav nav-second-level collapse">
            <li><a href="<?php echo base_url(); ?>admin/galerias/form">Cadastro</a></li>
            <li><a href="<?php echo base_url(); ?>admin/galerias">Listagem</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#paginas"><i class="fa fa-fw fa-list"></i> Páginas <span class="fa arrow"></span></a>
          <ul id="paginas" class="nav nav-second-level collapse">
            <li><a href="<?php echo base_url(); ?>admin/paginas/form">Cadastro</a></li>
            <li><a href="<?php echo base_url(); ?>admin/paginas">Listagem</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#usuarios"><i class="fa fa-fw fa-list"></i> Usuários <span class="fa arrow"></span></a>
          <ul id="usuarios" class="nav nav-second-level collapse">
            <li><a href="<?php echo base_url(); ?>admin/usuarios/form">Cadastro</a></li>
            <li><a href="<?php echo base_url(); ?>admin/usuarios">Listagem</a></li>
            <li><a href="<?php echo base_url(); ?>admin/usuarios/logs">Logs</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->

</nav>