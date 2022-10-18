<section class="cta">
  <div class="bg-grey section-cta">
    <picture class="cta-image">
      <source width="720" height="626" type="image/webp" srcset="img/cta.webp">
      <source width="720" height="626" type="image/jpeg" srcset="img/cta.png">
      <img width="720" height="626" src="img/cta.png"  alt="cta">
    </picture>
    <div class="cta-form-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
        <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input 
              id="user-name"
              type="text" 
              class="input"
              name="username" 
              placeholder=" "
              maxlenght="100"
              required
              >
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <!-- /.input-group -->
          <div class="input-group">
            <input 
              id="user-phone" 
              type="tel" 
              class="input phone-mask"
              name="userphone"
              placeholder=" "
              maxlenght="30"
              required
              >
            <label class="input-group-label" for="user-phone">Номер телефона</label>
          </div>
          <!-- /.input-group -->
        </div>
        <!-- /.input-group-wrapper -->
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">Отправить заявку</button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<?php include_once ('./template-parts/footer-block.php');?>
<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
    </p>
    <form action="handler.php" method="POST" class="modal-form">
      <div class="input-group-wrapper input-group-vertical">
        <div class="input-group modal-input-group">
          <input 
            id="modal-user-name"
            type="text" 
            class="input modal-input" 
            name="username" 
            placeholder=" "
            required=""
            >
          <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
        </div>
        <!-- /.input-group -->
        <div class="input-group modal-input-group">
          <input 
            id="modal-user-phone" 
            type="tel" 
            class="input modal-input phone-mask"
            name="userphone" 
            placeholder=" "
            required=""
            >
          <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
        </div>
        <!-- /.input-group -->
      </div>
      <!-- /.input-group-wrapper -->
      <div class="modal-form-footer">
        <button type="submit" class="button modal-form-button">Отправить заявку</button>
        <div class="notify">
          <svg class="notify-icon" width="14" height="14">
            <use href="img/sprite.svg#shield"></use>
          </svg>
          <p class="notify-text">
            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
          </p>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal" id="alert-modal">
  <div class="modal-dialog">
    <picture>
      <source width="360" height="310" type="image/webp" srcset="img/thanks.webp">
      <source width="360" height="310" type="image/jpeg" srcset="img/thanks.jpg">
      <img width="360" height="310" src="img/thanks.jpg"  alt="thanks">
    </picture>
    <h2 class="modal-title">Спасибо за заявку!</h2>
    <a href="" class="modal-close" data-toggle="modal" data-target="#alert-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">
      Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
    </p>
    <button href="./index.php" type="submit" class="button modal-form-button">Вернуться на главную</button>
  </div>
</div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>