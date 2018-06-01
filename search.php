<?php
  require_once 'inc/head.php';
?>
  <body>
    
    <main class="sobrenos">
      <?php
        $page = "search";
        require_once 'inc/header.php';
      ?>

      <section class="blockE">
      <?php
        
        $buscapor = $_POST['searchWord'];
        $diretorio = "";
        $itens = 0;
        $links = "";
        foreach (glob("$diretorio*.php") as $arquivo) {
          
          //$p1 = explode("/", $arquivo);
          $conteudo = file_get_contents($arquivo);
          if(strstr($conteudo, $buscapor) == TRUE) {
            $itens++;
            $links .= "<a href='".$arquivo."'>".$itens." - ".$arquivo."</a>";
          }
        }
        if($itens==0){
            echo "<p>Sua busca pela palavra <strong>".$buscapor."</strong> resultou em <strong>0</strong> item encontrado.<br></p>";
        }else{
          if($itens==1){
            echo "<p>Sua busca pela palavra <strong>".$buscapor."</strong> resultou em <strong>".$itens."</strong> item encontrado.<br></p>";
          }else{
            echo "<p>Sua busca pela palavra <strong>".$buscapor."</strong> resultou em <strong>".$itens."</strong> itens encontrados.<br></p>";
          }
        }
        echo $links;

      ?>
      </section>

      <?php
        require_once 'inc/footer.php';
      ?>
    </main>

  </body>
</html>