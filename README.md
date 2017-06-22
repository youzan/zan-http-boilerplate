# Youzan Zan HTTP Boilerplate

- 该boilerplate项目是配合 [zan-installer](https://packagist.org/packages/youzan/zan-installer) 使用的，直接克隆下来后无法直接运行。
- master分支配合 zan-installer 修正了一个namespace的bug，所以请确保你的 [zan-installer](https://packagist.org/packages/youzan/zan-installer) 的版本在 v1.0.6 以上。

# 如何使用

1. 安装 [*zan扩展*](https://github.com/youzan/zan)，编译参数：(`sockets` 与 `openssl` 可选)
`./configure --enable-sockets --enable-openssl` 
2. 安装[composer](https://getcomposer.org/)
```bash
curl -sS https://getcomposer.org/installer | php
```
3. 在根目录下执行composer update
4. 配置php.ini
```ini
zanphp.RUN_MODE = test
zanphp.DEBUG = true
```
5. 启动http server
`php bin/httpd`
6. 访问`127.0.0.1:8030`