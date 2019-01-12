# nginx rtmp

```
nginx add module rtmp
```
# build

```
 docker build -t nangcheng/nginx-rtmp .
```

# usage

```
docker run -p 8888:80 -p 1935:1935 -v $PWD/nginx.conf:/etc/nginx/nginx.conf  heropoo/nginx-rtmp

```

