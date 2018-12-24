
#### 测试

### 克隆Git仓库。需要提前安装好Git。
```linux
# git clone https://github.com/geYoungheart/lnmp-docker.git
# cd lnmp-docker
# docker-compose up -d

```

### 要在本地主机上访问test.com，需要在hosts文件中添加域名指向。
### 不需要 phpmyadmin 到docker-compose.yml 自行注释
> * phpinfo : http://test.com/index.php
> * mysql : http://test.com/mysql.php
> * redis : http://test.com/redis.php
> * phpmyadmin : http://test.com:8080

