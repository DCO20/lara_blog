<div>
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('assets/img/contato.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Entre em contato</h1>
            <span class="subheading">A sua opinião é muito importante para a nós.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Quer entrar em contato? Preencha o formulário abaixo para me enviar uma mensagem e entrarei em contato com você o mais breve possível!
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nome:</label>
              <input type="text" class="form-control" placeholder="Digite seu nome" id="name">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="Digite seu email" id="email" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Telefone:</label>
              <input type="tel" class="form-control" placeholder="Digite seu telefone" id="phone">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mensagem:</label>
              <textarea rows="5" class="form-control" placeholder="Digite sua mensagem" id="message"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
