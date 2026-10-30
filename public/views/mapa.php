<?php include '../includes/header.php'; ?>

<script src='/controllers/auth.js'></script>
<script>verificarAutenticacion();</script>

<style>
    .mapa-seccion {
        padding: 40px 0;
        background-color: #f8f9fa;
        min-height: calc(100vh - 76px); 
    }

    .map-container {
        position: relative;
        width: 100%;
        height: 75vh;
        border-radius: 12px;
        overflow: hidden;
        background-color: #e9ecef;
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    .btn-ruta {
        text-align: left;
        padding: 12px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
        border-radius: 8px;
    }

    .btn-ruta svg {
        margin-right: 10px; /* Separación entre icono y texto */
    }

    .btn-ruta:hover {
        transform: translateX(5px);
    }
    .btn-descarga {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<main class="mapa-seccion">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row">
            
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4 font-weight-bold text-dark">Rutas Disponibles</h3>
                        
                        <div class="d-flex flex-column">
                            <button class="btn btn-primary mb-3 btn-ruta active" onclick="cambiarMapa('mapa1', this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>    
                                Zona Centro
                            </button>
                            <button class="btn btn-outline-primary mb-3 btn-ruta" onclick="cambiarMapa('mapa2', this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>    
                                Zona Norte
                            </button>
                            <button class="btn btn-outline-primary mb-4 btn-ruta" onclick="cambiarMapa('mapa3', this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>    
                                Zona Sur
                            </button>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h5 class="h6 text-muted mb-3">Lleva Route Finder contigo</h5>
                        <button class="btn btn-success btn-block shadow-sm py-2 font-weight-bold" id="downloadButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            Descargar App Móvil
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="card shadow-sm border-0 p-2">
                    <div class="map-container">
                        <iframe id="mapaFrame" src="https://www.google.com/maps/d/embed?mid=1aRY6IAXcA3quC_3DkJPZ6hwJI3xVMtk&ehbc=2E312F"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<script>
    function cambiarMapa(mapaId, elementoBoton) {
        const iframe = document.getElementById('mapaFrame');
        
        const botones = document.querySelectorAll('.btn-ruta');
        botones.forEach(btn => {
            btn.classList.remove('btn-primary', 'active');
            btn.classList.add('btn-outline-primary');
        });


        elementoBoton.classList.remove('btn-outline-primary');
        elementoBoton.classList.add('btn-primary', 'active');

        switch (mapaId) {
            case 'mapa1':
                iframe.src = 'https://www.google.com/maps/d/embed?mid=1aRY6IAXcA3quC_3DkJPZ6hwJI3xVMtk&ehbc=2E312F';
                break;
            case 'mapa2':
                iframe.src = 'https://www.google.com/maps/d/embed?mid=11SJ35p3-fvnGVlYEPxuxgz2XjPGwff4&ehbc=2E312F';
                break;
            case 'mapa3':
                iframe.src = 'https://www.google.com/maps/d/embed?mid=1DLOu9GDx2s9A-LxH0Xi5s0v_7A89xVg&ehbc=2E312F';
                break;
        }
    }

    document.getElementById('downloadButton').addEventListener('click', function () {
        window.location.href = '../assets/RouteFinder.apk';
    });
</script>

<?php include '../includes/footer.php'; ?>