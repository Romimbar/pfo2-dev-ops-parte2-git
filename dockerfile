# Imagen base de Nginx
FROM nginx:alpine

# Copiamos los archivos del sitio a la carpeta pública de Nginx
COPY sitio-web/ /usr/share/nginx/html

# Exponemos el puerto 80 (HTTP)
EXPOSE 80
