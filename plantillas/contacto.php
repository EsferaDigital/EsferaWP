<div class="container-contacto">
  <h3 class="title">Contacto</h3>
  <h4 class="subtitle">Cuéntanos sobre tu proyecto y nos pondremos en contacto</h4>
  <div class="form">
    <form class="form-container" action="contacto.php" method="post">
      <div class="form-item">
        <input id="name" type="text" class="form-input" required>
        <label for="name" class="form-label">Nombre</label>
      </div>
      <div class="form-item">
        <input id="lastname" type="text" class="form-input" required>
        <label for="lastname" class="form-label">Apellido</label>
      </div>
      <div class="form-item">
        <input id="email" type="email" class="form-input" required>
        <label for="email" class="form-label">Email</label>
      </div>
      <div class="form-item">
        <textarea name="" id="mensaje" required class="form-text"></textarea>
        <label for="mensaje" class="form-label">Mensaje</label>
      </div>
      <div class="form-item">
        <input type="submit" value="Enviar" class="form-button">
      </div>
    </form>
  </div>
</div>