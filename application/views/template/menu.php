<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SI</b>MON</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SI</b>MON</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->


                <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <!--<span class="hidden-xs">Alexander Pierce</span>-->
              <?php
                echo ($this->session->nome . '<br/>');
                ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                

                <p>
                  
                 <?php
                echo ($this->session->nome . '<br/>');
                echo ($this->session->email . '<br/>');
                ?>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                </div>
                <div class="pull-right">
                  <a href="<?= base_url()?>home/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
            </nav>
        </header>
        
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">ADMINISTRADOR</li>
                    <li class="active treeview">
                        <a href="<?= base_url() ?>">
                            <i class="fa fa-dashboard"></i> <span>Home</span>

                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?= base_url() ?>home"><i class="fa fa-circle-o"></i> Inicio</a></li>

                        </ul>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Requerimento <br>da Abertura da Monitoria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Humanas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>

                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 1);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRA/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Saúde
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 2);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRA/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Exatas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 3);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRA/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Requerimentos <br>de Inscrição da Monitoria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Humanas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">

                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 1);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRI/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>

                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Saúde
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 2);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRI/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Exatas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 3);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRI/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Relatórios <br>Finais da Monitoria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Humanas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 1);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRE/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Saúde
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 2);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRE/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Exatas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 3);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemRE/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                        </ul>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Formulários de <br>Acompanhamento Mensal<br> da Monitoria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Humanas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 1);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemFA/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Saúde
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 2);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemFA/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Exatas
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <?php
                                    $this->db->select("*");
                                    $this->db->from('curso');
                                    $this->db->where('area', 3);
                                    $menu = $this->db->get()->result_object();

                                    foreach ($menu AS $value) {
                                        ?>
                                        <li><a href="<?= base_url() ?>Home/listagemFA/<?= $value->idCurso ?>"><i class="fa fa-circle-o"></i> <?= $value->nomeCurso ?></a></li>
                                        <?php } ?>
                            

                        </ul>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

