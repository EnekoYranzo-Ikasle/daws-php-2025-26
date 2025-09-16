Omitir e ir al contenido
Tú dijiste:
Tengo este script de bash, me ha servido mucho para ordenar, podria hacer un script que cuando lo ejecute ./ordenar.sh le pueda poner opciones por ejemplo -e .php ns num inicial de carpeta 01,02... #!/bin/bash

# Directorio base donde buscar los archivos
BASE_DIR="."

# Buscar todos los archivos EjercicioX.php
for archivo in "$BASE_DIR"/Ejercicio[0-9]*.php; do
    # Omitir los archivos .view.php
    if [[ "$archivo" == *.view.php ]]; then
        continue
    fi

    # Extraer número del ejercicio
    nombre_archivo=$(basename "$archivo")
    if [[ $nombre_archivo =~ Ejercicio([0-9]+)\.php ]]; then
        num=${BASH_REMATCH[1]}

        # Asegurar que el número tenga dos dígitos (01, 02, etc.)
        num_padded=$(printf "%02d" "$num")

        # Nombre del directorio destino
        dir_destino="01-Ejercicio${num_padded}"

        # Crear el directorio si no existe
        mkdir -p "$dir_destino"

        # Mover el archivo principal
        mv "$archivo" "$dir_destino/"

        # Mover el archivo .view.php si existe
        view_archivo="${BASE_DIR}/Ejercicio${num}.view.php"
        if [[ -f "$view_archivo" ]]; then
            mv "$view_archivo" "$dir_destino/"
        fi

        echo "✅ Archivos del ejercicio $num movidos a $dir_destino"
    fi
done
ChatGPT Plus
¡Perfecto! Podemos convertir tu script en una herramienta más flexible usando parámetros de línea de comandos, como:

-e para la extensión del archivo (por ejemplo, .php)

-n para el nombre base del archivo (por ejemplo, Ejercicio)

-s para el número inicial de la carpeta (por ejemplo, 01, 02, etc.)

Te dejo una versión mejorada de tu script llamada ordenar.sh con soporte para esas opciones:

✅ Script mejorado: ordenar.sh
#!/bin/bash

# Valores por defecto
EXT=".php"
NOMBRE_BASE="Ejercicio"
NUM_INICIAL=1

# Mostrar ayuda
mostrar_ayuda() {
    echo "Uso: $0 [-e extension] [-n nombre_base] [-s num_inicial]"
    echo "  -e    Extensión del archivo (por defecto: .php)"
    echo "  -n    Nombre base del archivo (por defecto: Ejercicio)"
    echo "  -s    Número inicial de la carpeta (por defecto: 1)"
    exit 1
}

# Procesar argumentos
while getopts ":e:n:s:h" opt; do
  case $opt in
    e) EXT="$OPTARG" ;;
    n) NOMBRE_BASE="$OPTARG" ;;
    s) NUM_INICIAL="$OPTARG" ;;
    h) mostrar_ayuda ;;
    \?) echo "Opción inválida: -$OPTARG" >&2; mostrar_ayuda ;;
    :) echo "La opción -$OPTARG requiere un argumento." >&2; mostrar_ayuda ;;
  esac
done

# Directorio base
BASE_DIR="."

# Contador para numerar carpetas
CONTADOR=$NUM_INICIAL

# Buscar archivos como EjercicioX.php (usando $NOMBRE_BASE y $EXT)
for archivo in "$BASE_DIR"/${NOMBRE_BASE}[0-9]*${EXT}; do
    # Omitir archivos tipo .view.php o similares
    if [[ "$archivo" == *.view${EXT} ]]; then
        continue
    fi

    # Extraer número del archivo
    nombre_archivo=$(basename "$archivo")
    if [[ $nombre_archivo =~ ${NOMBRE_BASE}([0-9]+)${EXT} ]]; then
        num=${BASH_REMATCH[1]}

        # Número de carpeta con padding
        carpeta_num=$(printf "%02d" "$CONTADOR")

        # Crear directorio destino
        dir_destino="${carpeta_num}-${NOMBRE_BASE}${num}"
        mkdir -p "$dir_destino"

        # Mover el archivo principal
        mv "$archivo" "$dir_destino/"

        # Mover archivo .view.php si existe
        view_archivo="${BASE_DIR}/${NOMBRE_BASE}${num}.view${EXT}"
        if [[ -f "$view_archivo" ]]; then
            mv "$view_archivo" "$dir_destino/"
        fi

        echo "✅ Archivos del ejercicio $num movidos a $dir_destino"

        # Incrementar contador
        CONTADOR=$((CONTADOR + 1))
    fi
done
🧪 Ejemplos de uso
./ordenar.sh
Usa los valores por defecto: .php, Ejercicio, carpetas desde 01

./ordenar.sh -e .php -n Practica -s 5
Mueve archivos como Practica1.php, Practica2.php, etc., y crea carpetas desde 05

./ordenar.sh -h
Muestra la ayuda

¿Quieres que también copie otros archivos relacionados (como .css, .js, etc.) si existen con el mismo número?




Adjuntar

Buscar

Estudiemos

Voz
Ningún archivo seleccionadoNingún archivo seleccionado
ChatGPT puede cometer errores. Considera verificar la información importante. Ver preferencias de cookies.
