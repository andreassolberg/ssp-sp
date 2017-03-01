# Feide development environment

This is a prepared environment to perform development on the SimpleSAMLphp Service Provider.

## Configuration

Create a file `ENV` with the following configuration:

```
ADMINPASSWD=xxxxx
SSP_SALT=3a15cc68-d270-4b3a-9726-f135863c21ab
SERVER_ADMIN="andreas.solberg@uninett.no"
HOST="sp.andreas.labs.uninett.no"
HTTPS="http"
HTTPSON="off"
```


## Deploy to kubernetes

```
kubectl create -f etc-kube/deployment.json
kubectl create -f etc-kube/service.json

kubectl get -o jsonpath="{.spec.ports[0].nodePort}" services feidespdev
32684

gcloud compute firewall-rules create service-feidespdev --source-ranges 130.211.0.0/22 --allow tcp:31882
```
