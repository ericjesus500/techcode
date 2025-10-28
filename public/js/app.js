document.addEventListener('DOMContentLoaded', function () {
  // Elementos del DOM
  const select = document.getElementById('tecno-select');
  const modoBtn = document.getElementById('modo-btn');    

  //boton que oculta y muestra el sidebar
  const toggleBtn = document.getElementById('toggle-sidebar');
  const sidebar = document.querySelector('aside');

  //Elementos para obtener la URL
  const sidebarItems = document.querySelectorAll('.sidebar-link');
  const currentPath = window.location.pathname;

  sidebarItems.forEach(item => {
    const link = item.querySelector('a'); // ← Selecciona el <a> dentro del <li>
    if (!link) return;

    const linkHref = new URL(link.href, window.location.href).pathname;

    if (
      currentPath === linkHref ||
      (currentPath === '/' && linkHref === '/') ||
      (currentPath.startsWith(linkHref) && linkHref !== '/')
    ) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });

  // Estado inicial desde localStorage
  const isSidebarHidden = localStorage.getItem('sidebarHidden') === 'false';
  if (!isSidebarHidden) {
    sidebar.classList.remove('-translate-x-full');
    // Rotar icono
    toggleBtn.querySelector('svg').classList.remove('rotate-180');
  } else {
    sidebar.classList.remove('-translate-x-full');
  }

  toggleBtn.addEventListener('click', function () {
    const svg = this.querySelector('svg');
    const contentWrapper = document.getElementById('content-wrapper');

    if (sidebar.classList.contains('-translate-x-full')) {
      // Está oculto → mostrarlo
      sidebar.classList.remove('-translate-x-full');
      svg.classList.remove('rotate-180');
      contentWrapper.classList.add('ml-60');
      localStorage.setItem('sidebarHidden', 'false');
    } else {
      // Está visible → ocultarlo
      sidebar.classList.add('-translate-x-full');
      svg.classList.add('rotate-180');
      contentWrapper.classList.remove('ml-60');
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
    if (manualContenido) {
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
            radio.addEventListener('change', function () {
              if (this.checked) {
                const slug = this.dataset.slug;
                const nivel = this.dataset.nivel;
                cargarNivel(slug, nivel);
              }
            });
          });

          /*Funcionalidad del modal "Buscar Tema con IA"*/
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
          manualContenido.innerHTML = `<div class="p-6 text-red-600">❌ Error al cargar el contenido del manual.</div>`;
        });
    }
  });

  // Cargar Nivel (Básico, Intermedio, Avanzado)
  function cargarNivel(slug, nivel) {
    const nivelContenido = document.getElementById('nivel-contenido');    
    
    fetch(`/manual/verNivel/${slug}/${nivel}`, {
      method: 'GET',
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
      .then(response => response.text())
      .then(html => {
        //Obtener Lista de Capitulos del Nivel Seleccionado
        nivelContenido.innerHTML = `
          <div class="flex items-center justify-center py-10">
            <div class="animate-spin rounded-full h-10 w-10 border-t-2 border-b-2 border-blue-500"></div>
            <span class="ml-3">Cargando nivel ${nivel}...</span>
          </div>
        `;
        nivelContenido.innerHTML = html;        

        //MANEJO DE LA LISTA DE CAPITULOS

        //Obtenero elementos para la carga dinamica
        const listaCapitulos = document.getElementById('lista-capitulos');
        const toggleButton = document.getElementById('toggleCapitulos');
        const linksCapitulos = document.querySelectorAll('#lista-capitulos a');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        // Inicialmente la lista de capítulos está visible
        let listaVisible = true;
        iconMenu.classList.add('hidden'); // Oculta el ícono de menú al inicio
        iconClose.classList.remove('hidden'); // Muestra el ícono de cerrar al inicio

        // Función para animar el cambio de visibilidad
        const toggleVisibility = () => {
          if (listaVisible) {
            listaCapitulos.classList.remove('opacity-100', 'scale-100');
            listaCapitulos.classList.add('opacity-0', 'scale-95');
            // Oculta el menú después de la transición
            setTimeout(() => listaCapitulos.style.display = 'none', 300);
          } else {
            listaCapitulos.style.display = 'flex';
            // Usa un pequeño retraso para permitir que el 'display' se aplique antes de iniciar la transición
            setTimeout(() => {
              listaCapitulos.classList.remove('opacity-0', 'scale-95');
              listaCapitulos.classList.add('opacity-100', 'scale-100');
            }, 10);
          }
          iconMenu.classList.toggle('hidden');
          iconClose.classList.toggle('hidden');
          listaVisible = !listaVisible;
        };

        toggleButton.addEventListener('click', toggleVisibility);

        // Maneja la selección de capítulos
        linksCapitulos.forEach(link => {
          link.addEventListener('click', (e) => {
            e.preventDefault();

            // Oculta la lista con animación
            if (listaVisible) {
              toggleVisibility();
            }
          });
        });

        obtenerCapitulo();
      })
      .catch(error => {
        console.error('Error al cargar el nivel:', error);
        nivelContenido.innerHTML = `<div class="p-6 text-red-600">❌ Error al cargar el nivel ${nivel}.</div>`;
      });
  }

  //Obtener capitulos del manual
  function obtenerCapitulo() {
    const capitulos = document.querySelectorAll('.capitulos li a');
    const htmlCapitulo = document.querySelector('#content-capitulo');

    let data = []
    capitulos.forEach(capitulo => {
      capitulo.addEventListener('click', () => {
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
            htmlCapitulo.innerHTML = `
            <div class="flex items-center justify-center py-10">
              <div class="animate-spin rounded-full h-10 w-10 border-t-2 border-b-2 border-blue-500"></div>
              <span class="ml-3">Cargando Capitulo solicitado ...</span>
            </div>
          `;
            htmlCapitulo.innerHTML = html;
            // ✅ Inicializar Prism.js después de inyectar HTML
            if (typeof Prism !== 'undefined') {
              Prism.highlightAll();
            }
          })
          .catch(error => {
            htmlCapitulo.innerHTML = `<div class="p-6 text-red-600">❌ Error al cargar el capítulo.</div>`;
          });

        data = [];
      })
    })
  }  
});

