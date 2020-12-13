FROM thelfensdrfer/orsee:latest

RUN apt-get update && apt-get install -y cron

COPY ./cron /etc/cron.d/orsee-cron

RUN chmod 0644 /etc/cron.d/orsee-cron \
    && crontab /etc/cron.d/orsee-cron

CMD ["cron", "-f"]
