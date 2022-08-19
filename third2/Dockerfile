FROM ubuntu:20.04
WORKDIR /root
COPY . .
RUN apt update \
	&& apt-get install -y python3
CMD python3 -m http.server 80

