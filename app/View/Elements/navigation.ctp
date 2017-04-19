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
          <ul id="menu" class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"> Clientes</span>', array('action' => 'index', 'controller'=>'clientes'), array('title' => 'Clientes', 'escape' => false)); ?></li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-wrench"> Parametros</span>', array('action' => '#'), array('title' => 'Editar', 'escape' => false)); ?>
              <ul>
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-text-width"> Talles</span>', array('action' => 'index','controller'=>'talles'), array('title' => 'Talles', 'escape' => false)); ?></li>
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-tent"> Colores</span>', array('action' => 'index','controller'=>'colores'), array('title' => 'Colores', 'escape' => false)); ?></li>
              </ul>
            </li>
          <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-sunglasses"> Prenda</span>', array('action' => 'index', 'controller'=>'prendas'), array('title' => 'Prendas', 'escape' => false)); ?></li>
    <!--  <li><?php //echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cliente['Cliente']['dni']), array('title' => 'Editar', 'escape' => false)); ?></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<style media="screen">
*{
margin: 0;
padding: 0;
}
/*header{
font-family: Helvetica;
width: 480px;
margin: 0 auto;
}*/
ul{
list-style: none;
}
#menu li>a{
background-color: grey;
color: white;
padding: 10px;
display: block;
text-decoration: none;
min-width: 100px;
}
#menu li>a:hover{
color: #000;
background-color: #eaeaea;
}
#menu>li{
float: left;
text-align:center
}
#menu>li>ul{
display: none;
}
#menu>li:hover>ul {
display:block;
}
</style>


<!-- <html>
  <body>
    <header>
      <nav>
        <ul id="menu">
          <li><a href="">Inicio</a></li>
          <li><a href="">Cursos</a>
            <ul>
              <li><a href="">Frontend</a></li>
              <li><a href="">Backend</a></li>
              <li><a href="">Mobile</a></li>
            </ul>
          </li>
          <li><a href="">Tutoriales</a></li>
          <li><a href="">Contacto</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html> -->
