<?php   include("cabecalho.php"); 
        include("usuario-util.php");

    $idUsuario = $_SESSION['idUsuarioLogado'];
    $usuario = buscaUsuarioPorId($conexao, $idUsuario);

?>

<style>
.nav-justified {
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.nav-justified > li > a {
  padding-top: 15px;
  padding-bottom: 15px;
  margin-bottom: 0;
  font-weight: bold;
  color: #000;
  text-align: center;
  background-color: #e5e5e5; /* Old browsers */
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e5e5e5));
  background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
  background-image:      -o-linear-gradient(top, #f5f5f5 0%, #e5e5e5 100%);
  background-image:         linear-gradient(to bottom, #f5f5f5 0%,#e5e5e5 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */
  background-repeat: repeat-x; /* Repeat the gradient */
  border-bottom: 1px solid #d5d5d5;
}
.nav-justified > .active > a,
.nav-justified > .active > a:hover,
.nav-justified > .active > a:focus {
  background-color: #ddd;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
          box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
}
.nav-justified > li:first-child > a {
  border-radius: 5px 5px 0 0;
}
.nav-justified > li:last-child > a {
  border-bottom: 0;
  border-radius: 0 0 5px 5px;
}

@media (min-width: 768px) {
  .nav-justified {
    max-height: 52px;
  }
  .nav-justified > li > a {
    border-right: 1px solid #d5d5d5;
    border-left: 1px solid #fff;
  }
  .nav-justified > li:first-child > a {
    border-left: 0;
    border-radius: 5px 0 0 5px;
  }
  .nav-justified > li:last-child > a {
    border-right: 0;
    border-radius: 0 5px 5px 0;
  }
}
</style>

           

<img src="<?= $usuario['foto']; ?>" class="img-thumbnail" style="margin-top: 10px; margin-left:30px; width:150px; height:130px";><br>

    <div class="container">
      <div class="masthead">
        <h2><span class="text-capitalize" style="margin-left:-30px; font-weight: bold;"><?php echo $_SESSION['usuarioLogado'];?></h2></span><br>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="conta-usuario.php">Minha Conta</a></li>
            <li><a href="mensagem.php">Mensagens</a></li>
            <li><a href="anuncio-usuario.php">Meus Anúncios</a></li>
          </ul>
        </nav>
      </div>
          
        
<?php   include("rodape.php"); ?>

