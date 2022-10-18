<?php 
$page_title = 'О компании';
$header_style = 'page-header-bg-image';
include_once('header-page.php');?>
<div class="container">
  <section class="section-experts">
    <picture>
      <source width="480" height="480" type="image/webp" srcset="img/experts-logo.webp">
      <source width="480" height="480" type="image/jpeg" srcset="img/experts-logo.jpg">
      <img width="480" height="480" src="img/experts-logo.jpg"  alt="experts-logo">
    </picture>
    <div class="experts-content">
      <div class="seporator"></div>
      <h2 class="section-title experts-title">мы - эксперты в области <br> производства химии</h2>
      <p class="section-text">
        Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
      </p>
    </div>
  </section>
</div>
<?php 
include_once('./template-parts/features-block.php');
?>
<div class="container">
  <section class="section-mission">
    <div class="mission-content">
      <div class="seporator"></div>
      <h2 class="section-title mission-title">Наше производство</h2>
      <p class="section-text">
      Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
      </p>
      <p class="section-text">
      Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
      </p>
      <ul class="clients-list mission-list">
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#car"></use>
          </svg>
          Автомобильная химия
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#home"></use>
          </svg>
          Бытовая химия
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#dis"></use>
          </svg>
          Дезинфицирующие средства
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon cosmetic-bs">
            <use href="img/sprite.svg#aerozol"></use>
          </svg>
          Пищевые аэрозоли
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#cosmetic-bs"></use>
          </svg>
          Косметическая продукция
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#brush"></use>
          </svg>
          Краски аэрозольные
        </li>
      </ul>
    </div>
    <picture>
      <source width="600" height="750" type="image/webp" srcset="img/mission-logo.webp">
      <source width="600" height="750" type="image/jpeg" srcset="img/mission-logo.jpg">
      <img width="600" height="750" src="img/mission-logo.jpg"  alt="mission-logo">
    </picture>
  </section>
</div>
<?php include_once('./template-parts/founder-block.php');?>
<?php include_once('./template-parts/center-block.php');?>
<?php include_once('./template-parts/clients-block.php');?>
<?php include_once('footer.php');?>