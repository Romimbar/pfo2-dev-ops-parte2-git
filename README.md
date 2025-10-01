# pfo2-dev-ops-parte2-git

# Práctica Formativa Parte II - Tienda-de-Te Dockerizada

Este proyecto contiene el sitio web de la tienda de té (`HTML`, `CSS` y `JS`) dockerizado para poder ejecutarlo en cualquier máquina con Docker.

---

## Estructura del proyecto

pfo2-dev-ops-parte2-git/
├── Dockerfile
├── docker-compose.yml
├── README.md
└── Tienda-de-Te/├── index.html

Comandos para ejecutar el contenedor
1. Levantar el contenedor (construcción incluida)
docker-compose up -d --build


up → Levanta los contenedores.

-d → Modo desatendido (detached).

--build → Fuerza la construcción de la imagen.

2. Ver contenedores en ejecución
docker ps

3. Detener el contenedor
docker-compose down

Acceso al sitio web

Abrir el navegador e ingresar:

http://localhost:8080


Deberías ver tu sitio web de la tienda de té funcionando.
