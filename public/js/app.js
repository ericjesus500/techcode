document.addEventListener('DOMContentLoaded', function () {
    const select = document.getElementById('tecno-select');
    const modoBtn = document.getElementById('modo-btn');

    //boton que oculta y muestra el sidebar
    const toggleBtn = document.getElementById('toggle-sidebar');
    const sidebar = document.querySelector('aside');

    // Estado inicial desde localStorage
    const isSidebarHidden = localStorage.getItem('sidebarHidden') === 'false';
    if (!isSidebarHidden) {
        sidebar.classList.remove('-translate-x-full');        
        // Rotar icono
        toggleBtn.querySelector('svg').classList.remove('rotate-180');
    } else {
        sidebar.classList.remove('-translate-x-full');
    }

    toggleBtn.addEventListener('click', function() {        
        const svg = this.querySelector('svg');
        const contentWrapper = document.getElementById('content-wrapper');
        
        if (sidebar.classList.contains('-translate-x-full')) {
            // Está oculto → mostrarlo
            sidebar.classList.remove('-translate-x-full');
            svg.classList.remove('rotate-180');
            contentWrapper.classList.add('ml-64');
            localStorage.setItem('sidebarHidden', 'false');
        } else {
            // Está visible → ocultarlo
            sidebar.classList.add('-translate-x-full');
            svg.classList.add('rotate-180');
            contentWrapper.classList.remove('ml-64');
            localStorage.setItem('sidebarHidden', 'true');
        }
    });

    // Alternar modo oscuro
    modoBtn.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
    });

    // Cargar modo oscuro guardado
    const darkMode = localStorage.getItem('darkMode') === 'true';
    if (darkMode) {
        document.documentElement.classList.add('dark');
    }

    // Cargar manual al cambiar el select
    select.addEventListener('change', () => {
        const slug = select.value;
        if (!slug) return;

        const manualContenido = document.getElementById('manual-contenido');
        manualContenido.innerHTML = `
            <div class="flex items-center justify-center py-10">
                <div class="animate-spin rounded-full h-10 w-10 border-t-2 border-b-2 border-blue-500"></div>
                <span class="ml-3">Cargando manual...</span>
            </div>
        `;

        fetch(`/manual/verManual/${slug}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            manualContenido.innerHTML = html;
            const radios = document.querySelectorAll('.nivel-radio');

            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        const slug = this.dataset.slug;
                        const nivel = this.dataset.nivel;
                        cargarNivel(slug, nivel);                        
                    }
                });
            });
            /*Funcionalidad del modal*/
            const abrirModalBtn = document.getElementById('abrirModal');
            const cerrarModalBtn = document.getElementById('cerrarModal');
            const modalContainer = document.getElementById('modalContainer');

            // Función para abrir el modal
            abrirModalBtn.addEventListener('click', () => {
              modalContainer.classList.remove('hidden');
            });

            // Función para cerrar el modal
            cerrarModalBtn.addEventListener('click', () => {
              modalContainer.classList.add('hidden');
            });

            // Opcional: Cerrar el modal haciendo clic fuera de él
            modalContainer.addEventListener('click', (e) => {
              if (e.target === modalContainer.children[0]) {
                modalContainer.classList.add('hidden');
              }
            });
        })
        .catch(error => {
            manualContenido.innerHTML = `<div class="p-6 text-red-600">❌ Error al cargar el manual.</div>`;
        });
    });

    function cargarNivel(slug, nivel) {        
        const nivelContenido = document.getElementById('nivel-contenido');
        nivelContenido.innerHTML = `
            <div class="flex items-center justify-center py-10">
                <div class="animate-spin rounded-full h-10 w-10 border-t-2 border-b-2 border-blue-500"></div>
                <span class="ml-3">Cargando nivel ${nivel}...</span>
            </div>
        `;

        fetch(`/manual/verNivel/${slug}/${nivel}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            nivelContenido.innerHTML = html;            
            //Obtener capitulos
            obtenerCapitulo();            
        })
        .catch(error => {
            console.error('Error al cargar el nivel:', error);
            nivelContenido.innerHTML = `<div class="p-6 text-red-600">❌ Error al cargar el nivel ${nivel}.</div>`;
        });
    }

    //Obtener capitulos del manual y nivel seleccionados
    function obtenerCapitulo(){        
        const capitulos = document.querySelectorAll('.capitulos li a');
        const htmlCapitulo = document.querySelector('#content-capitulo');
        let data = []
        capitulos.forEach( capitulo => {
            capitulo.addEventListener('click', ()=>{
                const curso = capitulo.dataset.curso;
                const nivel = capitulo.dataset.nivel;
                const cap = capitulo.dataset.capitulo;
                data.push(curso);
                data.push(nivel);
                data.push(cap);
                //console.log(data);                
                fetch(`/capitulo/verCapitulo/${data}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ curso: curso, nivel: nivel, capitulo: cap })
                })
                .then(response => response.text())
                .then(html => {                    
                    htmlCapitulo.innerHTML = html;
                    // ✅ Inicializar Prism.js después de inyectar HTML
                    if (typeof Prism !== 'undefined') {
                        Prism.highlightAll();
                    }
                    
                })
                .catch(error => {
                    htmlContenido.innerHTML = `<div class="p-6 text-red-600">❌ Error al cargar el capítulo.</div>`;
                });
                
                data = [];
            })
        })
    }   
    
});

