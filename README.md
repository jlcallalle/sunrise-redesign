             # Front end Core

Core con los archivos necesarios para comenzar un proyecto de front end.

## Iniciando un proyecto

1.  Crear un directorio www y clonar dentro el repositorio desde gitlab.
2.  Abrir el archivo bower.json y cambiar el nombre del proyecto por el nuevo que se desarrollará.
3.  Agregar solo el directorio html a Prepros y cambiar el nombre del proyecto por el nuevo que se desarrollará.
4.  Crear un proyecto nuevo en SublimeText.

## Configuracion global de Prepros

### CSS
*   Output: Replace Segment in Input Path
*   Enter path segment to replace: css
*   Minified Output: Relative to Source File
*   File Suffix: .min
*   AutoPrefixer: last 6 versions, ie >= 9

### HTML

*   Output: Relative to the Folder of Processable Files:   
    jade/vistas
*   Enter HTML path: vacio

### Javascript

*   Minified Ouput: Relative to the Source File
*   Relative path from the folder... : min
*   File Suffix: .min

### Compilers

*   Sass Options

    *   ✓ Auto Compile
    *   ✓ AutoPrefix CSS
    *   ✓ Use LibSass
    *   Output Style of Output File: Compressed

*   Jade Options

    *   ✓ Auto Compile
    *   ✓ Prettify Output

*   Javascript Options

    *   ✓ Uglify JS
    *   ✓ Mangle Variables

Recuerden que los archivos js deben sera puestos en wacth manualmente.
Esto es posible navegando hasta el archivo y seleccionado  ✓ Auto Compile.