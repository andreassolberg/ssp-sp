#! /bin/bash

export RUN_PATH=`dirname "$0" || echo .`
set -a
. ${RUN_PATH}/_config.sh
set +a

docker stop ${KUBERNETES_DEPLOYMENT}
docker rm ${KUBERNETES_DEPLOYMENT}
docker run -d --name ${KUBERNETES_DEPLOYMENT} -p 8080:80 \
    -v /Users/andreas/wc/feide/simplesamlphp-module-saml2debug:/app/vendor/simplesamlphp/simplesamlphp/modules/saml2debug \
  --env-file ENV ${IMAGE}
docker logs -f ${KUBERNETES_DEPLOYMENT}
