# Settings up

Create a `docker-compose.yml` file extending `docker-compose.base.yml`

```
nginx: 
  extends:
    file: ./web/infrastructure/docker-compose.base.yml
    service: base_nginx
  environment:
    VIRTUAL_HOST: ''
  links:
    - php

php: 
  extends:
    file: ./web/infrastructure/docker-compose.base.yml
    service: base_php
  environment:
    ENV_TYPE: ''
  #external_links:
    #- central-mysql:mysql
    #- mailhog:mailhog

composer: 
  extends:
    file: ./web/infrastructure/docker-compose.base.yml
    service: base_composer
```