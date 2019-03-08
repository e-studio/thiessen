class UI {


  
     constructor(latitud, longitud) {
                      
          // Crear los mapas en un grupo
          this.markers = new L.LayerGroup(); 
          
          // Iniciar el mapa
          this.mapa = this.inicializarMapa(latitud, longitud);



     }

     inicializarMapa(latitud, longitud) {
           
          // Inicializar y obtener la propiedad del mapa



      
          const map = L.map('mapa').setView([latitud, longitud], 11);

          const enlaceMapa = '<a href="http://openstreetmap.org">OpenStreetMap</a>';

          L.tileLayer(
              'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; ' + enlaceMapa + ' Contributors',
              maxZoom: 18,
              }).addTo(map);

          return map;

     }


     // Muestra los pines
     mostrarPines(latitud, longitud) {
        
          this.markers.clearLayers();
 
          const opcionesPopUp = L.popup()
           .setContent(`<p><h6>${titulo}</h6>
                        <b>Direccion:</b> ${direccion} <br>
                        <b>Precio: </b>$ ${precio}<br>`);

           // Agregar el Pin
               const marker = new L.marker([
                    latitud,
                    longitud
               ] )
               .bindPopup(opcionesPopUp)

               this.markers.addLayer(marker);


          this.markers.addTo(this.mapa)
     }

}