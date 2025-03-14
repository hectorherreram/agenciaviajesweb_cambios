<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles_4.css">
  <title>Agencia de Viajes</title>
</head>

<body>
<header>
        <nav>
            <ul>
                <li><a href="tarea.php">Inicio</a></li>
                <li><a href="view_cart.php">Carrito de Compras</a></li>
                <!-- Agrega más enlaces según sea necesario -->
            </ul>
        </nav>
    </header>
    <div class="search-container">
        <h1>Busca tu próximo destino</h1>
        <form id="search-form" action="cart.php" method="post">
            <label for="destination">Destino:</label>
            <select id="destination" name="destination" class="input-field">
                <option value="" disabled selected>Selecciona un destino</option>
            </select>

            <label for="travel-date-start">Fecha de ida:</label>
            <input type="date" id="travel-date-start" name="travel_date_start" class="input-field">
            <label for="travel-date-end">Fecha de vuelta:</label>
            <input type="date" id="travel-date-end" name="travel_date_end" class="input-field">
            
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            
            <button type="submit" class="btn">Buscar y Agregar al Carrito</button>
        </form>
    </div>
  
  <div id="results-container" class="results-container">
    <!-- Resultados dinámicos se mostrarán aquí -->
  </div>

  <div class="form-container">
    <h1>Registra tu próximo viaje</h1>
    <form action="procesar_viaje.php" method="post">
      <!-- Campo para el nombre del hotel -->
      <label for="nombreHotel">Nombre del Hotel:</label>
      <input type="text" id="nombreHotel" name="nombreHotel" class="input-field" required>
      
      <!-- Campo para la ciudad -->
      <label for="ciudad">Ciudad:</label>
      <input type="text" id="ciudad" name="ciudad" class="input-field" required>
      
      <!-- Campo para el país -->
      <label for="pais">País:</label>
      <input type="text" id="pais" name="pais" class="input-field" required>
      
      <!-- Campo para la fecha de viaje -->
      <label for="fechaViaje">Fecha de Viaje:</label>
      <input type="date" id="fechaViaje" name="fechaViaje" class="input-field" required>
      
      <!-- Campo para la duración del viaje -->
      <label for="duracionViaje">Duración del Viaje (días):</label>
      <input type="number" id="duracionViaje" name="duracionViaje" class="input-field" required>
      
      <!-- Botón de envío -->
      <button type="submit" class="btn">Registrar</button>
    </form>
  </div>

  <div class="notification right"></div>
  </div>
  <script src="script.js"></script>

<!-- Semana_4 respuesta 1-->
  <?php
  function generarNotificacion($mensaje) {
      echo "<script type='text/javascript'>alert('$mensaje');</script>";
  }

  // Ejemplo de uso
  $ofertaEspecial = "¡Aprovecha un 20% de descuento en todos los vuelos este fin de semana!";
  generarNotificacion($ofertaEspecial);
  ?>
  
<!-- Semana_4 respuesta 2-->
</body>
</html>
