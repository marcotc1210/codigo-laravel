  <nav class="border p-2">
    <div class="d-flex justify-content-around">
      <div class="m-2 px-5 py-2 bg-light rounded {{isActive('home') ? 'activo' : '' }} "><a href="/"> Home</a></div>
      <div class="m-2 px-5 py-2 bg-light rounded {{isActive('servicios') ? 'activo' : '' }} "><a href="servicios"> Servicios </a></div>
      <div class="m-2 px-5 py-2 bg-light rounded {{isActive('nosotros') ? 'activo' : '' }} "><a href="nosotros"> Nosotros</a></div>
      <div class="m-2 px-5 py-2 bg-light rounded {{isActive('contacto') ? 'activo' : '' }} "><a href="contacto"> Contacto</a></div>
    </div>
  </nav>