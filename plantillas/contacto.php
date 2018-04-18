<div class="contacto">
  <h3 class="title">Contacto</h3>
  <h4 class="subtitle">Cuéntanos sobre tu proyecto y nos pondremos en contacto</h4>
  <?php if(isset($_GET['errormsg'])):?>
  <div>
    <p><?php echo $_GET['errormsg']; ?></p>
  </div>
  <?php endif; ?>
  <?php if(isset($_GET['exito'])):?>
  <div>
    <p>Su email ha sido enviado</p>
  </div>
  <?php endif; ?>
  <div class="form">
    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="form-container">
      <div class="form-item">
        <input type="text" id="txtnombre" name="txtnombre" class="form-input" required>
        <label for="txtnombre" class="form-label">Nombre</label>
      </div>
      <div class="form-item">
        <input id="email" type="email" name="email" class="form-input" required>
        <label for="email" class="form-label">Email</label>
      </div>
      <div class="form-item">
        <textarea name="txtmensaje" id="txtmensaje" required class="form-text"></textarea>
        <label for="txtmensaje" class="form-label">Mensaje</label>
      </div>
      <div class="form-item">
        <input type="hidden" name="action" value="contactform">
        <input type="submit" value="Enviar" class="form-button">
      </div>
    </form>
  </div>
</div>