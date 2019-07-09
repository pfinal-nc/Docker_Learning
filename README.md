# Docker_Learning
Docker 学习ING

[参考链接](https://github.com/heropoo/dockers-for-dev)

### 镜像



```
docker images #列出本地镜像
docker rmi training/sinatra #删除（在删除镜像之前要先用 docker rm 删掉依赖于这个镜像的所有容器）
docker run -t -i ubuntu:14.04 /bin/bash #
docker commit -m "Added json gem" -a "Docker Newbee" 0b2616b0e5a8 ouruser/sinatra:v2 #更新镜像
docker tag 5db5f8471261 ouruser/sinatra:devel #修改标签
docker build ${dockerfile_dir} #Dockerfile 构建
docker save -o ubuntu_14.04.tar ubuntu:14.04 #保存
docker load --input ubuntu_14.04.tar #导入
```

### 容器

```
docker ps #查看容器信息
docker rm #删掉容器（-f 删除运行中）
docker inspect #查看指定容器详细信息（可获取ip，pid等信息）
docker logs insane_babbage #查看容器log
docker port CONTAINER [PRIVATE_PORT[/PROTO]] #查看端口映射
docker start|stop|restart insane_babbage #启动终止重启
docker attach insane_babbage #进入后台运行的容器 -d（推荐nsenter）
docker export 7691a814370e > ubuntu.tar #导出快照
cat ubuntu.tar | sudo docker import - test/ubuntu:v1.0 #导入快照
```



## docker hub 

```
docker search #搜索镜像
docker pull #下载
docker push #推送（需登录）
```

# Laradock 常用命令

```
docker-compose:

  build              Build or rebuild services
  bundle             Generate a Docker bundle from the Compose file
  config             Validate and view the Compose file
  create             Create services
  down               Stop and remove containers, networks, images, and volumes
  events             Receive real time events from containers
  exec               Execute a command in a running container
  help               Get help on a command
  images             List images
  kill               Kill containers
  logs               View output from containers
  pause              Pause services
  port               Print the public port for a port binding
  ps                 List containers
  pull               Pull service images
  push               Push service images
  restart            Restart services
  rm                 Remove stopped containers
  run                Run a one-off command
  scale              Set number of containers for a service
  start              Start services
  stop               Stop services
  top                Display the running processes
  unpause            Unpause services
  up                 Create and start containers
  version            Show the Docker-Compose version information
```

