    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Nombre del Proyecto</a> -->
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>', array('action' => 'index', 'controller'=>'clientes'), array('title' => 'Clientes', 'escape' => false)); ?></li>
            <!-- <li><?php //echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cliente['Cliente']['dni']), array('title' => 'Editar', 'escape' => false)); ?></li>
            <li><?php //echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cliente['Cliente']['dni']), array('title' => 'Editar', 'escape' => false)); ?></li>
            <li><?php //echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cliente['Cliente']['dni']), array('title' => 'Editar', 'escape' => false)); ?></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
