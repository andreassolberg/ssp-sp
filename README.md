# Feide development environment

This is a prepared environment to perform development on the SimpleSAMLphp Service Provider.


## Configuration

Create a file `ENV` with the following configuration:

```
ADMINPASSWD=xxxxx
SSP_SALT=3a15cc68-d270-4b3a-9726-f135863c21ab
```

## Build and run

Scripts:

```
bin/build.sh
bin/build.sh publish
bin/run.sh
bin/rundev.sh
bin/shell.sh
```


Build and run

```
docker build -t uninettno/sspsp:testing .
docker run -d --name sspsp -p 8080:80 \
  -v ${PWD}/etc/simplesamlphp-config:/feide/vendor/simplesamlphp/simplesamlphp/config \
  -v ${PWD}/etc/simplesamlphp-metadata:/feide/vendor/simplesamlphp/simplesamlphp/metadata \
  -v ${PWD}/packages/simplesamlphp-module-feide:/feide/packages/simplesamlphp-module-feide \
  --env-file ENV uninettno/sspsp:testing
```

```
docker stop sspsp
docker rm sspsp
docker logs -f sspsp
```

Example URL:

* <http://testsp.example.org:8080/simplesaml/module.php/core/authenticate.php?as=default-sp>


## Deploy to kubernetes

```
kubectl create -f etc-kube/deployment.json
kubectl create -f etc-kube/service.json

kubectl get -o jsonpath="{.spec.ports[0].nodePort}" services feidespdev
32684


gcloud compute firewall-rules create service-feidespdev --source-ranges 130.211.0.0/22 --allow tcp:31882
```
