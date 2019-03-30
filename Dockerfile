FROM csunmetalab/environment:base-20190130 as base
COPY . /var/www/html
RUN apt-get update && apt-get install -y \
      git \
      python \
      vim
