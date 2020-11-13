FROM mattrayner/lamp:latest-1804

ENV APACHE_ROOT public

COPY . /app

CMD ["/run.sh"]