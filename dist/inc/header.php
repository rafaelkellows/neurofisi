      <header>
        <p>AGENDE: <a href="tel.:+551123970229">11 2397 0229</a></p>
        <form action="search.php" method="post" />
          <i class="fa fa-search"></i>
          <input class="iClassA" type="text" placeholder="O que procura?" name="searchWord" value="">
        </form>
        <h1>
          <figure>
            <a href="./"><img src="images/logomarca.png" border="0" title="NeuroFisi - Saúde Integrada" /></a>
            <figcaption>NeuroFisi - Saúde Integrada</figcaption>
          </figure>
        </h1>
        <ul>
          <li><a href="http://www.facebook.com/NeuroFisi" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="javascript:void(0);" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://www.instagram.com/neurofisi" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="javascript:void(0);" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <nav>
          <a class="menu" href="javascript:void(0)" title="Menu de Navegação"><i class="fa fa-bars" aria-hidden="true"></i></a>
          <a <?php if($page == 'sobrenos') { echo 'class="active"'; }; ?> href="sobrenos.php" title="Sobre nós">Sobre nós</a>
          <a <?php if($page == 'filosofia') { echo 'class="active"'; }; ?> href="filosofia.php" title="Nossa Filosofia">Nossa Filosofia</a>
          <a <?php if($page == 'oquefazemos') { echo 'class="active"'; }; ?> href="oquefazemos.php" title="O que fazemos">O que fazemos</a>
          <a <?php if($page == 'especialidades') { echo 'class="active"'; }; ?> href="oquefazemos.php#especialidades" title="Especialidades">Especialidades</a>
          <a <?php if($page == 'quemsomos') { echo 'class="active"'; }; ?> href="quemsomos.php" title="Quem somos">Quem somos</a>
        </nav>
        <!--h2>A marca é nova, a experiência é de 30 anos e o site novo está por vir...</h2-->
      </header>
