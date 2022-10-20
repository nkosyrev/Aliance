<?php 
$page_title = 'Автомобильная химия';
$header_style = 'page-header-bg-grey';?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aliance Production - Комплексное обеспечение товарами и расходными материалами бизнеса">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $page_title ?> - Aliance Production</title>
  </head>
<body>
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="./about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#address"></use>
      </svg>
      <address class="mobile-info-address">
        г. Москва, Холодильный пер. 4к1с8
      </address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#email"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-social-link">
        <svg class="button-icon button-mobile" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
        <svg class="button-icon button-mobile" width="24" height="24">
          <use href="img/sprite.svg#inst"></use>
        </svg>
    </div>
  </div>
  <nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="./about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">
        +7 (499) 686-10-14
      </a>
    </div>
    <!-- /.header-phone -->
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <!-- /.navbar -->
  <header class="page-header <?= $header_style;?>">
      <div class="container">
        <div class="section-avtohim">
          <div class="avtohim-header">
            <div class="seporator"></div>
            <h1 class="page-header-title"><?= $page_title ?></h1>
            <ul class="breadcrumbs">
              <li class="breadcrumbs-item">
                <a href="./index.php" class="breadcrumbs-link">Главная</a>
              </li>
              <li class="breadcrumbs-item active">
                <a href="" class="breadcrumbs-link"><?= $page_title ?></a>
              </li>
            </ul>
          </div>
          <div>
            <picture class="avto-him-logo">
              <source type="image/webp" srcset="">
              <source type="image/jpeg" srcset="img/avto-him-logo.jpg">
              <img src="img/avto-him-logo.jpg"  alt="avtohim-logo">
            </picture>
          </div>
        </div>
      </div>
  </header>
<div class="container">
  <section class="section-mission section-mission-avtohim">
    <picture>
      <source width="600" height="750" type="image/webp" srcset="img/mission-avtohim.webp">
      <source width="600" height="750" type="image/jpeg" srcset="img/mission-avtohim.jpg">
      <img width="600" height="750" src="img/mission-avtohim.jpg"  alt="mission-avtohim">
    </picture>
    <div class="mission-content">
      <div class="seporator"></div>
      <h2 class="section-title">Контрактное производство автомобильной химии</h2>
      <p class="section-text">
        Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных  социальных резервов неоднозначны и будут описаны максимально подробно.
      </p>
      <p class="section-text">
        Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие   возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов)  участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения   представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных  рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно   открывает новые горизонты для поставленных обществом задач.
      </p>
    </div>
  </section>
</div>
<?php 
include_once('./template-parts/features-block.php.');?>
<section class="section product-avtohim">
  <div class="container">
    <div class="product-avtohim-content-wrapper">
      <div class="product-avtohim-content">
        <div class="seporator"></div>
        <h2 class="section-title">Изготовление автохимии</h2>
        <p class="product-avtohim-text">
          Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
        </p>
        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
             <use href="img/sprite.svg#him"></use>
            </svg>
            Полное описание товаров
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#car"></use>
            </svg>
            Актуальные цены
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Полное описание товаров
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon cosmetic-bs">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Актуальные цены
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Химические производства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Химические производства
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.container -->
  <picture>
    <source width="840" height="660" type="image/webp" srcset="img/product-avtohim-photo.webp">
    <source width="840" height="660" type="image/jpeg" srcset="img/product-avtohim-photo.jpg">
    <img width="840" height="660" src="img/product-avtohim-photo.jpg"  alt="product-avtohim-photo">
  </picture>
</section>
<section class="section-himlist">
  <div class="container">
  <div class="section-content">
    <div class="seporator"></div>
    <h2 class="section-title">Виды автохимии</h2>
    <p class="himlist-text">
      Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
    </p>
    <div class="himlist-items">
    <ul class="clients-list him-list">
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Антискотч
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Многоцелевая смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Жидкий ключ
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Высокотемпературная смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Универсальный очиститель <br> деталей
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Силиконовая смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Цепная смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Медная смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Графитовая смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель кондиционера <br> пенный
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель тормозных дисков
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель битумных пятен
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель кондционера
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель дросельной <br> заслонки
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель обивки 
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Тефлоновая смазка
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Очиститель двигателя
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Универсальный очиститель
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Чернитель шин 
      </li>
      <li class="clients-list-item">
        <svg width="16" height="26" class="client-list-icon">
          <use href="img/sprite.svg#himlist-icon"></use>
        </svg>
        Чернитель шин + очистка
      </li>
    </ul>
    </div>
  </div>
  </div>
</section>
<?php 
include_once('./template-parts/center-block.php');
include_once('./template-parts/steps-block.php');
include_once('./template-parts/clients-block.php');
include_once('footer.php');?>