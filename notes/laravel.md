# Laravel常用命令 #

<br>

## 数据库迁移 ##

生成迁移
> php artisan make:migration create_[name]_table

运行迁移
> php artisan migrate

<br>

## 服务提供者 ##

创建服务提供者
> php artisan make:provider [Name]ServiceProvider

<br>

## 中间件 ##

创建中间件
> php artisan make:middleware [ClassName]

<br>

## 数据库模型 ##

创建模型
> php artisan make:model [ClassName]  
> php artisan make:model Models/[ClassName]

创建模板并生成迁移文件
> php artisan make:model Models/[ClassName] -m
