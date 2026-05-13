<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="LS Ecotyres – Pneus de alta performance com os melhores preços. Montagem, balanceamento e muito mais. Solicite seu orçamento agora!" />
  <meta name="keywords" content="pneus, ecotyres, pneus baratos, pneus de carro, montagem de pneus, balanceamento, loja de pneus" />
  <meta name="author" content="LS Ecotyres" />
  <meta property="og:title" content="LS Ecotyres – Pneus de Alta Performance" />
  <meta property="og:description" content="A melhor loja de pneus com qualidade premium e preço justo." />
  <meta property="og:type" content="website" />
  <title>LS Ecotyres – Pneus de Alta Performance</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- ===== HEADER ===== -->
  <header class="header" id="header">
    <div class="header__inner">
      <a href="#home" class="logo">
        <span class="logo__icon"><i class="fa-solid fa-tire"></i></span>
        <span class="logo__text">LS <em>Eco</em>tyres</span>
      </a>

      <nav class="nav" id="nav">
        <ul class="nav__list">
          <li><a href="#home" class="nav__link">Início</a></li>
          <li><a href="#produtos" class="nav__link">Produtos</a></li>
          <li><a href="#promocoes" class="nav__link">Promoções</a></li>
          <li><a href="#vantagens" class="nav__link">Vantagens</a></li>
          <li><a href="#sobre" class="nav__link">Sobre Nós</a></li>
          <li><a href="#depoimentos" class="nav__link">Depoimentos</a></li>
          <li><a href="#contato" class="nav__link nav__link--cta">Contato</a></li>
        </ul>
      </nav>

      <button class="hamburger" id="hamburger" aria-label="Abrir menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- ===== HERO / BANNER ===== -->
  <section class="hero" id="home">
    <div class="hero__parallax" id="heroBg"></div>
    <div class="hero__overlay"></div>
    <div class="hero__content reveal">
      <span class="hero__tag"><i class="fa-solid fa-bolt"></i> Alta Performance</span>
      <h1 class="hero__title">Pneus que<br /><em>dominam</em> a pista</h1>
      <p class="hero__sub">Qualidade premium, melhor preço e montagem especializada.<br />Seu veículo merece o melhor.</p>
      <div class="hero__actions">
        <a href="#contato" class="btn btn--primary"><i class="fa-solid fa-file-invoice"></i> Solicitar Orçamento</a>
        <a href="#produtos" class="btn btn--ghost"><i class="fa-solid fa-magnifying-glass"></i> Ver Produtos</a>
      </div>
    </div>
    <div class="hero__scroll-hint">
      <span>Role para baixo</span>
      <i class="fa-solid fa-chevron-down"></i>
    </div>
  </section>

  <!-- ===== PROMO BANNER ===== -->
  <section class="promo-strip" id="promocoes">
    <div class="promo-strip__inner">
      <div class="promo-card reveal">
        <div class="promo-card__badge">-20%</div>
        <div class="promo-card__icon"><i class="fa-solid fa-tag"></i></div>
        <div class="promo-card__body">
          <h3>Pneus Aro 15</h3>
          <p>Promoção relâmpago – só esta semana!</p>
          <a href="#produtos" class="btn btn--lime btn--sm">Aproveitar</a>
        </div>
      </div>
      <div class="promo-card reveal">
        <div class="promo-card__badge">Grátis</div>
        <div class="promo-card__icon"><i class="fa-solid fa-wrench"></i></div>
        <div class="promo-card__body">
          <h3>Montagem Inclusa</h3>
          <p>Compre 4 pneus e ganhe montagem grátis.</p>
          <a href="#contato" class="btn btn--lime btn--sm">Saiba Mais</a>
        </div>
      </div>
      <div class="promo-card reveal">
        <div class="promo-card__badge">Novo</div>
        <div class="promo-card__icon"><i class="fa-solid fa-truck-fast"></i></div>
        <div class="promo-card__body">
          <h3>Entrega Expressa</h3>
          <p>Receba em casa ou retire na loja.</p>
          <a href="#contato" class="btn btn--lime btn--sm">Consultar</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PRODUTOS ===== -->
  <section class="section" id="produtos">
    <div class="container">
      <div class="section__header reveal">
        <span class="section__tag">Catálogo</span>
        <h2 class="section__title">Nossos <em>Produtos</em></h2>
        <p class="section__desc">Pneus para todos os tipos de veículo com garantia de fábrica e instalação especializada.</p>
      </div>

      <div class="products__grid">

        <!-- Card 1 -->
        <article class="product-card reveal">
          <div class="product-card__badge">Melhor Preço</div>
          <div class="product-card__img-wrap">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80" alt="Pneu Michelin Primacy" class="product-card__img" loading="lazy" />
            <div class="product-card__hover-cta"><i class="fa-solid fa-eye"></i> Ver Detalhes</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__brand">Michelin</span>
            <h3 class="product-card__name">Primacy 4 – 205/55 R16</h3>
            <p class="product-card__desc">Máximo conforto e aderência para uso urbano e rodovias. Tecnologia EverGrip™.</p>
            <div class="product-card__price">
              <span class="price__old">R$ 620,00</span>
              <span class="price__current">R$ 499,90</span>
            </div>
            <button class="btn btn--primary btn--full"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="product-card reveal">
          <div class="product-card__img-wrap">
            <img src="https://images.unsplash.com/photo-1611016186353-9af58c69a533?w=400&q=80" alt="Pneu Bridgestone Turanza" class="product-card__img" loading="lazy" />
            <div class="product-card__hover-cta"><i class="fa-solid fa-eye"></i> Ver Detalhes</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__brand">Bridgestone</span>
            <h3 class="product-card__name">Turanza T005 – 215/50 R17</h3>
            <p class="product-card__desc">Equilíbrio entre desempenho esportivo e durabilidade excepcional em todas as estradas.</p>
            <div class="product-card__price">
              <span class="price__current">R$ 549,90</span>
            </div>
            <button class="btn btn--primary btn--full"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="product-card reveal">
          <div class="product-card__badge product-card__badge--hot">Mais Vendido</div>
          <div class="product-card__img-wrap">
            <img src="https://images.unsplash.com/photo-1600712242805-5f78671b24da?w=400&q=80" alt="Pneu Pirelli Cinturato" class="product-card__img" loading="lazy" />
            <div class="product-card__hover-cta"><i class="fa-solid fa-eye"></i> Ver Detalhes</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__brand">Pirelli</span>
            <h3 class="product-card__name">Cinturato P7 – 225/45 R18</h3>
            <p class="product-card__desc">Alta performance com baixo consumo de combustível e excelente dirigibilidade.</p>
            <div class="product-card__price">
              <span class="price__old">R$ 750,00</span>
              <span class="price__current">R$ 619,90</span>
            </div>
            <button class="btn btn--primary btn--full"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
          </div>
        </article>

        <!-- Card 4 -->
        <article class="product-card reveal">
          <div class="product-card__img-wrap">
            <img src="https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?w=400&q=80" alt="Pneu Continental ContiSport" class="product-card__img" loading="lazy" />
            <div class="product-card__hover-cta"><i class="fa-solid fa-eye"></i> Ver Detalhes</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__brand">Continental</span>
            <h3 class="product-card__name">ContiSport 5 – 245/40 R19</h3>
            <p class="product-card__desc">Pneu esportivo para quem busca máxima performance e resposta imediata na curva.</p>
            <div class="product-card__price">
              <span class="price__current">R$ 849,90</span>
            </div>
            <button class="btn btn--primary btn--full"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
          </div>
        </article>

        <!-- Card 5 -->
        <article class="product-card reveal">
          <div class="product-card__badge">Econômico</div>
          <div class="product-card__img-wrap">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80" alt="Pneu Goodyear EfficientGrip" class="product-card__img" loading="lazy" />
            <div class="product-card__hover-cta"><i class="fa-solid fa-eye"></i> Ver Detalhes</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__brand">Goodyear</span>
            <h3 class="product-card__name">EfficientGrip – 185/65 R15</h3>
            <p class="product-card__desc">Tecnologia de baixa resistência ao rolamento para economia de combustível.</p>
            <div class="product-card__price">
              <span class="price__old">R$ 380,00</span>
              <span class="price__current">R$ 299,90</span>
            </div>
            <button class="btn btn--primary btn--full"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
          </div>
        </article>

        <!-- Card 6 -->
        <article class="product-card reveal">
          <div class="product-card__img-wrap">
            <img src="https://images.unsplash.com/photo-1611016186353-9af58c69a533?w=400&q=80" alt="Pneu Dunlop Sport Maxx" class="product-card__img" loading="lazy" />
            <div class="product-card__hover-cta"><i class="fa-solid fa-eye"></i> Ver Detalhes</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__brand">Dunlop</span>
            <h3 class="product-card__name">Sport Maxx RT2 – 235/35 R20</h3>
            <p class="product-card__desc">Desenvolvido para superesportivos – gripagem extrema em piso seco e molhado.</p>
            <div class="product-card__price">
              <span class="price__current">R$ 1.149,90</span>
            </div>
            <button class="btn btn--primary btn--full"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
          </div>
        </article>

      </div><!-- /products grid -->
    </div>
  </section>

  <!-- ===== VANTAGENS ===== -->
  <section class="section section--dark" id="vantagens">
    <div class="container">
      <div class="section__header reveal">
        <span class="section__tag">Por que a LS?</span>
        <h2 class="section__title">Nossas <em>Vantagens</em></h2>
      </div>
      <div class="advantages__grid">
        <div class="advantage-item reveal">
          <div class="advantage-item__icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h4>Garantia Estendida</h4>
          <p>Todos os pneus com garantia de fábrica e suporte técnico pós-venda.</p>
        </div>
        <div class="advantage-item reveal">
          <div class="advantage-item__icon"><i class="fa-solid fa-dollar-sign"></i></div>
          <h4>Melhor Preço</h4>
          <p>Preços competitivos e parcelamento em até 12x sem juros no cartão.</p>
        </div>
        <div class="advantage-item reveal">
          <div class="advantage-item__icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <h4>Montagem Expert</h4>
          <p>Equipe técnica especializada com equipamentos de última geração.</p>
        </div>
        <div class="advantage-item reveal">
          <div class="advantage-item__icon"><i class="fa-solid fa-clock"></i></div>
          <h4>Atendimento Rápido</h4>
          <p>Serviço ágil, sem longas esperas. Seu carro pronto em minutos.</p>
        </div>
        <div class="advantage-item reveal">
          <div class="advantage-item__icon"><i class="fa-solid fa-leaf"></i></div>
          <h4>Foco em Sustentabilidade</h4>
          <p>Descarte ecológico correto e linha de pneus de baixo consumo.</p>
        </div>
        <div class="advantage-item reveal">
          <div class="advantage-item__icon"><i class="fa-solid fa-headset"></i></div>
          <h4>Suporte 24h</h4>
          <p>Atendimento via WhatsApp todos os dias, a qualquer hora.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SOBRE NÓS ===== -->
  <section class="section" id="sobre">
    <div class="container">
      <div class="about__grid">
        <div class="about__media reveal">
          <div class="about__img-wrap">
            <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=600&q=80" alt="Oficina LS Ecotyres" loading="lazy" />
            <div class="about__badge"><span>+15</span><small>anos de<br />experiência</small></div>
          </div>
        </div>
        <div class="about__text reveal">
          <span class="section__tag">Sobre Nós</span>
          <h2 class="section__title">A LS Ecotyres é <em>paixão sobre rodas</em></h2>
          <p>Fundada há mais de 15 anos, a LS Ecotyres nasceu do amor por carros e do compromisso com a segurança nas estradas. Atendemos milhares de clientes com serviços de montagem, balanceamento, alinhamento e venda de pneus das melhores marcas do mundo.</p>
          <p>Nosso time é formado por técnicos certificados que tratam cada veículo com o cuidado que ele merece. Da moto ao caminhão, temos a solução certa para você.</p>
          <ul class="about__list">
            <li><i class="fa-solid fa-circle-check"></i> Mais de 10.000 clientes satisfeitos</li>
            <li><i class="fa-solid fa-circle-check"></i> Parceiros das maiores marcas do setor</li>
            <li><i class="fa-solid fa-circle-check"></i> Técnicos certificados internacionalmente</li>
            <li><i class="fa-solid fa-circle-check"></i> Estoque com mais de 500 modelos</li>
          </ul>
          <a href="#contato" class="btn btn--primary">Fale Conosco <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== DEPOIMENTOS ===== -->
  <section class="section section--dark" id="depoimentos">
    <div class="container">
      <div class="section__header reveal">
        <span class="section__tag">Clientes</span>
        <h2 class="section__title">O que dizem sobre <em>nós</em></h2>
      </div>
      <div class="testimonials__grid">

        <div class="testimonial-card reveal">
          <div class="testimonial-card__stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p>"Atendimento impecável e preço justo! Troquei os quatro pneus do meu carro em menos de uma hora. Recomendo demais a LS Ecotyres."</p>
          <div class="testimonial-card__author">
            <div class="testimonial-card__avatar">RC</div>
            <div>
              <strong>Rafael Costa</strong>
              <small>São Paulo, SP</small>
            </div>
          </div>
        </div>

        <div class="testimonial-card reveal">
          <div class="testimonial-card__stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p>"Encontrei o pneu que precisava pelo melhor preço da região. A equipe é super atenciosa e o serviço de balanceamento ficou perfeito!"</p>
          <div class="testimonial-card__author">
            <div class="testimonial-card__avatar">AM</div>
            <div>
              <strong>Ana Moreira</strong>
              <small>Campinas, SP</small>
            </div>
          </div>
        </div>

        <div class="testimonial-card reveal">
          <div class="testimonial-card__stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
          </div>
          <p>"Já uso a LS Ecotyres há 5 anos. Sempre me surpreendem com qualidade, rapidez e honestidade. Não troco por nada!"</p>
          <div class="testimonial-card__author">
            <div class="testimonial-card__avatar">MF</div>
            <div>
              <strong>Marcos Ferreira</strong>
              <small>Guarulhos, SP</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== CONTATO ===== -->
  <section class="section" id="contato">
    <div class="container">
      <div class="contact__grid">
        <div class="contact__info reveal">
          <span class="section__tag">Fale Conosco</span>
          <h2 class="section__title">Solicite seu <em>Orçamento</em></h2>
          <p>Preencha o formulário ou entre em contato direto. Respondemos em minutos!</p>
          <ul class="contact__details">
            <li><i class="fa-solid fa-location-dot"></i> Rua das Pistas, 1500 – São Paulo, SP</li>
            <li><i class="fa-solid fa-phone"></i> (11) 99999-0000</li>
            <li><i class="fa-solid fa-envelope"></i> contato@lsecotyres.com.br</li>
            <li><i class="fa-solid fa-clock"></i> Seg–Sex 8h–18h | Sáb 8h–13h</li>
          </ul>
        </div>
        <form class="contact__form reveal" id="contactForm" novalidate>
          <div class="form__group">
            <label for="name">Nome completo</label>
            <input type="text" id="name" name="name" placeholder="Seu nome" required />
            <span class="form__error" id="nameError"></span>
          </div>
          <div class="form__group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com" required />
            <span class="form__error" id="emailError"></span>
          </div>
          <div class="form__group">
            <label for="phone">Telefone / WhatsApp</label>
            <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999" required />
            <span class="form__error" id="phoneError"></span>
          </div>
          <div class="form__group form__group--full">
            <label for="message">Mensagem</label>
            <textarea id="message" name="message" placeholder="Descreva o pneu que procura, medidas, dúvidas..." rows="5" required></textarea>
            <span class="form__error" id="messageError"></span>
          </div>
          <button type="submit" class="btn btn--primary btn--full" id="submitBtn">
            <i class="fa-solid fa-paper-plane"></i> Enviar Mensagem
          </button>
          <div class="form__success" id="formSuccess">
            <i class="fa-solid fa-circle-check"></i> Mensagem enviada! Entraremos em contato em breve.
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="footer__top">
      <div class="container footer__top-inner">
        <div class="footer__brand">
          <a href="#home" class="logo logo--light">
            <span class="logo__icon"><i class="fa-solid fa-tire"></i></span>
            <span class="logo__text">LS <em>Eco</em>tyres</span>
          </a>
          <p>A loja de pneus que une qualidade, performance e o melhor custo-benefício do mercado.</p>
          <div class="footer__social">
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <div class="footer__links">
          <h5>Navegação</h5>
          <ul>
            <li><a href="#home">Início</a></li>
            <li><a href="#produtos">Produtos</a></li>
            <li><a href="#promocoes">Promoções</a></li>
            <li><a href="#sobre">Sobre Nós</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div>
        <div class="footer__links">
          <h5>Serviços</h5>
          <ul>
            <li><a href="#">Montagem de Pneus</a></li>
            <li><a href="#">Balanceamento</a></li>
            <li><a href="#">Alinhamento</a></li>
            <li><a href="#">Rodas e Acessórios</a></li>
            <li><a href="#">Revisão Rápida</a></li>
          </ul>
        </div>
        <div class="footer__links">
          <h5>Marcas</h5>
          <ul>
            <li><a href="#">Michelin</a></li>
            <li><a href="#">Bridgestone</a></li>
            <li><a href="#">Pirelli</a></li>
            <li><a href="#">Continental</a></li>
            <li><a href="#">Goodyear</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <p>© 2025 LS Ecotyres. Todos os direitos reservados.</p>
        <p>Desenvolvido com <i class="fa-solid fa-heart" style="color:#a3e635"></i> para os apaixonados por velocidade</p>
      </div>
    </div>
  </footer>

  <!-- ===== WHATSAPP FLOAT ===== -->
  <a href="https://wa.me/5511999990000" class="whatsapp-float" target="_blank" rel="noopener" aria-label="WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="whatsapp-float__tooltip">Fale conosco!</span>
  </a>

  <!-- ===== BACK TO TOP ===== -->
  <button class="back-to-top" id="backToTop" aria-label="Voltar ao topo">
    <i class="fa-solid fa-chevron-up"></i>
  </button>

  <script src="script.js"></script>
</body>
</html>