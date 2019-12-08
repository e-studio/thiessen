class UI {
     constructor() {
          // Instanciar la API
          this.api = new API();
          
          // Crear los mapas en un grupo
          this.markers = new L.LayerGroup(); 
          
          // Iniciar el mapa
          this.mapa = this.inicializarMapa();

     }

     inicializarMapa() {       
          // Inicializar y obtener la propiedad del mapa 
          const map = L.map('mapa').setView([28.390519, -106.3739778], 6);

          const enlaceMapa = '<a href="http://openstreetmap.org">OpenStreetMap</a>';

          L.tileLayer(
              'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; ' + enlaceMapa + ' Contributors',
              maxZoom: 18,
              }).addTo(map);

          return map;

     }

     // Mostrar Establecimientos de la api
     mostrarEstablecimientos() {
          this.api.obtenerDatos()
                    .then(datos =>  {
                         const resultado = datos.respuestaJSON;
                         // Muestra los pines en el Mapa
                         this.mostrarPines(resultado);
                    } )
     }
     // Muestra los pines
     mostrarPines(datos) {

          this.markers.clearLayers();
         
          // Recorrer establecimientos
          datos.forEach(dato => {
               // Destucturing 
               const {id, latitud, longitud, direccion, precio, titulo} = dato;

               const opcionesPopUp = L.popup()
               .setContent(`<p><b>${titulo}</b></p> 
                            <p>direccion: ${direccion}</p>
                            <p>precio: $ ${precio}</p>
                            <a href="http://thiessen.com.mx/detalles-propiedad.php?id=${id}">Detalles</a`);
       
               // Agregar el Pin
               const marker = new L.marker([
                    parseFloat(latitud),
                    parseFloat(longitud)
               ] )
               .bindPopup(opcionesPopUp)

               this.markers.addLayer(marker); 
          });
          this.markers.addTo(this.mapa)
     }

      // Obtiene las sugerencias de la REST API
      obtenerSugerencias(busqueda) {
          this.api.obtenerDatos()
               .then(datos => {
                    // Obtener los resultados
                    const resultados = datos.respuestaJSON;

                    // Enviar el JSON y la busqueda al Filtro
                    this.filtrarSugerencias(resultados, busqueda);
               })
     }

     // Filtrar las sugerencias de busqueda
      filtrarSugerencias(resultados, busqueda) {
          const filtro = resultados.filter( filtro => filtro.calle.indexOf(busqueda) !== -1 );

          // Mostrar pines del Filtro
          this.mostrarPines(filtro);
     }
}