#! /bin/bash

export RUN_PATH=`dirname "$0" || echo .`
set -a
. ${RUN_PATH}/_config.sh
set +a

docker stop ${KUBERNETES_DEPLOYMENT}
docker rm ${KUBERNETES_DEPLOYMENT}
docker run -d --name ${KUBERNETES_DEPLOYMENT} -p 8080:80 \
  -v ${PWD}/etc/simplesamlphp-config:/feide/vendor/simplesamlphp/simplesamlphp/config \
  -v ${PWD}/etc/simplesamlphp-metadata:/feide/vendor/simplesamlphp/simplesamlphp/metadata \
  -v ${PWD}/packages/simplesamlphp/lib/SimpleSAML:/feide/vendor/simplesamlphp/simplesamlphp/lib/SimpleSAML \
  -v ${PWD}/packages/simplesamlphp-module-cassandrastore:/feide/vendor/simplesamlphp/simplesamlphp/modules/simplesamlphp-module-cassandrastore \
  --env-file ENV ${IMAGE}
docker logs -f ${KUBERNETES_DEPLOYMENT}
