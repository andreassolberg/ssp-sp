#! /bin/bash

export RUN_PATH=`dirname "$0" || echo .`
set -a
. ${RUN_PATH}/_config.sh
set +a

echo "Building image $IMAGE"

docker build -t $IMAGE .
# gcloud docker push $IMAGE
#
# kubectl patch deployment ${KUBERNETES_DEPLOYMENT} -p "{\"spec\":{\"template\":{\"spec\":{\"containers\":[{\"name\":\"${KUBERNETES_DEPLOYMENT}\",\"image\":\"${IMAGE}\"}]}}}}"
#
# export PODNAME=`kubectl get pods -l "appid in ($KUBERNETES_DEPLOYMENT)" -o jsonpath="{.items[0].metadata.name}"`
# echo "New pod name is $PODNAME"
