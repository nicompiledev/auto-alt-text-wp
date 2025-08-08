# 🖼️ Auto Alt Text

![WordPress Plugin](https://img.shields.io/badge/WordPress-Plugin-blue?logo=wordpress)
![License](https://img.shields.io/badge/License-GPLv2-blue.svg)
![Version](https://img.shields.io/badge/Version-1.0.0-green)
![Compatible](https://img.shields.io/badge/Tested%20Up%20To-6.5-brightgreen)

**Auto Alt Text** es un plugin ligero para WordPress que genera automáticamente texto alternativo (alt text) para las imágenes al subirlas. Mejora la accesibilidad y el SEO de tu sitio sin ningún esfuerzo manual.

---

## 🚀 Características

- ✅ Genera automáticamente texto alternativo a partir del nombre del archivo de la imagen.
- 🔤 Limpia los nombres de archivo eliminando extensiones y reemplazando guiones con espacios (por ejemplo, `mi-imagen-archivo.jpg` → **"Mi Imagen Archivo"**).
- 🛡️ Respeta el texto alternativo ingresado manualmente; nunca lo sobrescribirá.
- 🧠 Diseñado para ser extensible y para una futura integración con IA/LLM.

---

## 📦 Instalación

1. Descarga o clona este repositorio.
2. Sube la carpeta `auto-alt-text` al directorio `/wp-content/plugins/` de tu sitio de WordPress.
3. Ve al panel de WordPress y activa el plugin a través del menú **Plugins**.
4. ¡Listo! El plugin establecerá automáticamente el texto alternativo para todas las **nuevas** imágenes que subas.

> 🔧 No requiere configuración; funciona al instante.

---

## ❓ Preguntas Frecuentes

### ¿Afecta a las imágenes existentes?
No. Solo procesa las imágenes que se suban después de que el plugin esté activado.

### ¿El texto alternativo generado es bueno para el SEO?
Sí. Aunque un texto alternativo escrito a mano es ideal, tener un texto legible y no vacío a partir del nombre de archivo es una gran mejora para el SEO y la accesibilidad.

### ¿Puedo editar el texto alternativo manualmente?
Sí. Puedes editarlo en cualquier momento a través de la Biblioteca de Medios. Este plugin nunca sobrescribirá el texto ingresado manualmente.

---

## 🖼️ Capturas de Pantalla

| Ejemplo de Carga | Texto Alternativo Limpiado |
|------------------|----------------------------|
| ![Ejemplo de Carga](assets/screenshot-1.png) | ![Texto Alternativo Limpio](assets/screenshot-2.png) |

---

## 🧱 Estructura del Plugin y Visión Futura

Este plugin está construido pensando en la escalabilidad. Aquí tienes un desglose de la estructura de archivos actual y los planes para futuras mejoras:

auto-alt-text/
│
├── auto-alt-text.php      # Archivo principal del plugin
├── uninstall.php          # Maneja la limpieza al desinstalar
│
├── includes/              # Lógica principal futura (p. ej., análisis de imágenes, integración con LLM)
├── admin/                 # Código futuro del panel de administración (p. ej., UI de configuración)
├── public/                # Scripts y estilos de front-end (si se necesitan más adelante)
└── languages/             # Preparado para traducciones (.pot/.mo/.po)

> 💡 Las futuras versiones podrían incluir la generación de texto alternativo con LLM, reglas de texto personalizadas o análisis de imágenes.

---

## 🧾 Historial de Versiones

### v1.0.0
- Lanzamiento inicial.
- Genera automáticamente texto alternativo a partir de los nombres de archivo.
- Omite la generación si el campo ya contiene una entrada del usuario.

---

## 📄 Licencia

Este plugin está bajo la licencia [GPLv2 o posterior](http://www.gnu.org/licenses/gpl-2.0.html).

---

## ☕ Soporte y Contribuciones

- Si este plugin te resulta útil, [considera apoyarme](https://github.com/nicompiledev/).
- ¡Se aceptan "pull requests", sugerencias de características e informes de errores!

---
