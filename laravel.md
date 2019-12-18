# Laravel常用命令 #

## 数据库迁移 ##

生成迁移
> php artisan make:migration create_[name]_table

运行迁移
> php artisan migrate


## 服务提供者 ##

创建服务提供者
> php artisan make:provider RiakServiceProvider


## 中间件 ##

创建中间件
> php artisan make:middleware CheckAge
