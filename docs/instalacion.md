## Para previsualizar mientras escribes:
Al ejecutar `mkdocs serve`, se levanta un servidor de desarrollo local (usualmente en [http://127.0.0.1:8000](http://127.0.0.1:8000)). Cada vez que guardes un archivo **.md**, el navegador se actualizará automáticamente sin necesidad de recargar.

## Para generar la versión de producción:
Al ejecutar `mkdocs build`, la herramienta tomará todo y generará una nueva carpeta llamada _site/_ en la raíz de tu proyecto.



# automatizar despliegue
Para automatizar el despliegue, necesitas crear un flujo de trabajo (workflow) que le indique a GitHub que instale MkDocs, compile tu sitio y lo publique cada vez que subas cambios a la rama principal.

1. Crear el archivo de configuración
En la raíz de tu repositorio, crea la siguiente estructura de carpetas y el archivo _.yml_ (puedes nombrarlo `deploy.yml` o `ci.yml`):

`.github/workflows/deploy.yml`

Dentro de ese archivo, pega el siguiente código:

[.github/workflows/deploy.yml](.github/workflows/deploy.yml)

2. Configurar el repositorio en GitHub
El comando `mkdocs gh-deploy` compila tu sitio web y automáticamente crea una nueva rama en tu repositorio llamada `gh-pages` donde guarda el código HTML final. Para que esto funcione, debes habilitar GitHub Pages:

Ve a la pestaña Settings de tu repositorio en GitHub.

En el menú lateral izquierdo, haz clic en Pages.

En la sección Build and deployment, asegúrate de que el "Source" esté configurado como Deploy from a branch.

Selecciona la rama `gh-pages` y la carpeta `/(root)`, luego guarda.

Cómo funciona este flujo en la práctica
A partir de este momento, tu flujo de trabajo será el siguiente:

Trabajas tus notas de Markdown en local usando VS Code.

Haces un commit y un `git push` normal a tu rama `main`.

GitHub detecta el push, levanta un contenedor temporal de Ubuntu, instala Python y MkDocs, compila los archivos estáticos y sube el resultado a la rama gh-pages.

En cuestión de 30 a 60 segundos, tu documentación pública se actualiza automáticamente.