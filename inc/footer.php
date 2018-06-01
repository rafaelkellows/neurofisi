      <footer>
        <div>
          <?php
            $v = (!isset($version) ? '' : $version);
            $figureHome = '<figure>';
            $figureHome .= '  <a href="./"><img src="images/footer/f_home.jpg" border="0" title="Home" /></a>';
            $figureHome .= '  <figcaption><a href="./">Home</a></figcaption>';
            $figureHome .= '</figure>';

            $figureSobre = '<figure>';
            $figureSobre .= '<a href="sobrenos.php"><img src="images/footer/f_sobrenos.jpg" border="0" title="Sobre Nós" /></a>';
            $figureSobre .= '<figcaption><a href="sobrenos.php">Sobre Nós</a></figcaption>';
            $figureSobre .= '</figure>';

            $figureFilosofia = '<figure>';
            $figureFilosofia .= '<a href="filosofia.php"><img src="images/footer/f_nossafilosofia.jpg" border="0" title="Nossa Filosofia" /></a>';
            $figureFilosofia .= '<figcaption><a href="filosofia.php">Nossa Filosofia</a></figcaption>';
            $figureFilosofia .= '</figure>';

            $figureOquefazemos = '<figure>';
            $figureOquefazemos .= '<a href="oquefazemos.php"><img src="images/footer/f_oquefazemos.jpg" border="0" title="O que fazemos" /></a>';
            $figureOquefazemos .= '<figcaption><a href="oquefazemos.php">O que fazemos</a></figcaption>';
            $figureOquefazemos .= '</figure>';

            $figureQuemSomos = '<figure>';
            $figureQuemSomos .= '<a href="quemsomos.php"><img src="images/footer/f_quemsomos.jpg" border="0" title="Quem Somos" /></a>';
            $figureQuemSomos .= '<figcaption><a href="quemsomos.php">Quem Somos</a></figcaption>';
            $figureQuemSomos .= '</figure>';

            switch ($v) {
              case 'a':
                echo $figureOquefazemos.$figureQuemSomos.$figureHome.$figureSobre;
                break;
              case 'b':
                echo $figureHome.$figureSobre.$figureFilosofia.$figureOquefazemos;
                break;
              case 'c':
                echo $figureFilosofia.$figureOquefazemos.$figureQuemSomos.$figureHome;
                break;
              case 'd':
                echo $figureQuemSomos.$figureHome.$figureSobre.$figureFilosofia;
                break;
              default:
                echo $figureSobre.$figureFilosofia.$figureOquefazemos.$figureQuemSomos;
                break;
            }
          ?>
        </div>
        <h1>
          <figure>
            <a href="./"><img src="images/logomarca.png" border="0" title="NeuroFisi - Saúde Integrada" /></a>
            <figcaption>NeuroFisi - Saúde Integrada</figcaption>
          </figure>
        </h1>
        <address>
          <p>Rua Dr. Alceu de Campos Rodrigues, 309 &bull; 6° andar &bull; Vila Nova Conceição &bull; São Paulo</p>
          <p>Tels. (11) 3845-1442 / 3045-9437 &bull; <a href="mailto:contato@neurofisi.com.br" title="">contato@neurofisi.com.br</a> &bull; <a href="http://www.neurofisi.com.br" target="_blank"><span>www.neurofisi.com.br</span></a></p>
        </address>
      </footer>
