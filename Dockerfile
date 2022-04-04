FROM nginx:1.21.4
COPY ./default.conf /etc/nginx/conf.d/
COPY ./nginx-selfsigned.crt /etc/ssl/certs/nginx-selfsigned.crt 
COPY ./nginx-selfsigned.key /etc/ssl/private/nginx-selfsigned.key
COPY ./dhparam.pem /etc/ssl/certs/dhparam.pem