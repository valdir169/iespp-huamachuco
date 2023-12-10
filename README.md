# Pagina web, Iespp José Faustino Sánchez Carrión - Huamachuco

Este es un proyecto desarrollado con Laravel + vite, el objetivo principal es mostrar información útil y relevante a los visitantes  sobre las carreras que ofrece el pedagógico de Huamachuco. 

Requisitos para poder usar o ver el respositorio en su equipo local
1. Tener Instalado NodeJs version LTS o Actual.
2. Tener Instalado Git en su equipo.
3. Tener Instalado PHP en su versión 8.1 o superior.    

## Instrucciones de Instalación

1. Clona este repositorio:

    ```bash
    git clone útil https://github.com/valdir169/iespp-huamachuco.git
    ```

2. Muevete al directorio raíz:

    ```bash
    cd iespp-huamachuco
    ```

3. Instala las dependencias de PHP:

    ```bash
    composer install
    ```

4. Instala las dependencias de JavaScript:

     ```bash
    npm install
    ```

## Cómo Levantar el Servidor

1. Copia el archivo de configuración:

    ```bash
    cp .env.example .env
    ```

2. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

3. Levanta el servidor de PHP:

    ```bash
    php artisan serve
    ```

4. Levanta el servidor de NPM:

    ```bash
    npm run dev
    ```

El servidor estará disponible en http://localhost:8000.
