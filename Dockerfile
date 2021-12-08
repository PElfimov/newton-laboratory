FROM nginx

RUN apt update && \
    apt install -y vim iputils-ping fcgiwrap procps