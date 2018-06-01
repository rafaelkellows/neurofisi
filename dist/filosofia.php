<?php
  require_once 'inc/head.php';
?>
  <body>
    
    <main class="filosofia">
      <?php
        $page = "filosofia";
        require_once 'inc/header.php';
      ?>

      <figure class="banner">
        <img src="images/banners/filosofia.jpg" border="0" title="Nossa Filosofia" />
        <figcaption>Nossa Filosofia</figcaption>
      </figure>

      <section class="blockC">
        <p>Nossa filosofia é traduzida em estrutura de qualidade, que atenda pacientes que precisam de reabilitação, equipe multidisciplinar altamente qualificada e integrada para oferecer mais saúde e longevidade a todas as pessoas, além de protocolos e processos atualizados constantemente.</p>
        <div>
          <dl>
            <dt>
              <h3>No que acreditamos</h3>
            </dt>
            <dd>
              <p>Acreditamos que a saúde integrada é a causa da longevidade saudável. Queremos nossos pacientes com qualidade de vida sempre.</p>
            </dd>
          </dl>
          <dl>
            <dt>
              <h3>Nosso diferencial</h3>
            </dt>
            <dd>
              <p>Temos um modelo multidisciplinar com profissionais qualificados que assistem os pacientes durante todo seu tratamento.</p>
            </dd>
          </dl>
          <dl>
            <dt>
              <h3>Nossa Visão de Futuro</h3>
            </dt>
            <dd>
              <p>Ajudar cada vez mais pessoas a encontrar sua qualidade de vida, conforto em seu dia-a-dia e a obter mente e corpo saudáveis.</p>
            </dd>
          </dl>
        </div>
      </section>

      <?php
        $version = 'a';
        require_once 'inc/footer.php';
      ?>
    </main>

  </body>
</html>