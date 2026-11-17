# Compilado with MkDocs

For full documentation visit [mkdocs.org](https://www.mkdocs.org).

## Commands

* `mkdocs new [dir-name]` - Create a new project.
* `mkdocs serve` - Start the live-reloading docs server.
* `mkdocs build` - Build the documentation site.
* `mkdocs -h` - Print help message and exit.

## Project layout

    mkdocs.yml    # The configuration file.
    docs/
        index.md  # The documentation homepage.
        ...       # Other markdown pages, images and other files.


## Otros documentos

- [instalacion](instalacion.md)
- [rutas](api/rutas.md)


- [Dentro del repo, fuera de docs, no funciona](../routes/web.php)

En windows, como modo desarrollador activado.
```git config --global core.symlinks true```


* [Ver el diagrama de prueba](test diagrama.html)
* [Descargar el Catálogo de Abonos](Catálogo de Abonos.pdf)


|Característica|Jekyll|MkDocs|
|--|--|--|
|Lenguaje Base|Ruby|Python|
|Enfoque Principal|"Blogs, portafolios, sitios web con fechas"|"Documentación de software, manuales de usuario"|
|Soporte en GitHub Pages|Nativo y automático (no requiere Actions)|Requiere automatización (vía GitHub Actions)|
|Menú y Navegación|Manual (debes programar el HTML/Liquid para el menú)|Automático (se genera solo leyendo tu mkdocs.yml)|
|Buscador Integrado|No (requiere plugins externos como Lunr.js)|Sí (nativo y automático en temas como Material)|
|Motor de Plantillas|Liquid ({{ variable }})|Jinja2|

