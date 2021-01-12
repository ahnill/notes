# Laravel常用命令 #

<br>

## 数据库迁移 ##

生成迁移
> php artisan make:migration create_[name]_table

运行迁移
> php artisan migrate  
> php artisan migrate --path=database/migrations/XXXX_XX_XX_XXXX_create_[name]_table.php

生成填充
> php artisan make:seeder [name]TableSeeder

运行填充
> php artisan db:seed  
> php artisan db:seed --class=[name]TableSeeder

刷新迁移
> php artisan migrate:fresh

刷新并填充
> php artisan migrate:fresh --seed

<br>

## 服务提供者 ##

创建服务提供者
> php artisan make:provider [Name]ServiceProvider

<br>

## 中间件 ##

创建中间件
> php artisan make:middleware [ClassName]

<br>

## 计划任务 ##

执行计划任务
> php artisan schedule:run

<br>

## 命令行 ##

创建自定义命令
> php artisan make:command TestCommandClassName

查看所有命令
> php artisan list

<br>

## 数据库模型 ##

创建模型
> php artisan make:model [ClassName]  
> php artisan make:model Models/[ClassName]

创建模板并生成迁移文件
> php artisan make:model Models/[ClassName] -m

<br>

## L5 Swagger 插件 ##

引入插件
> composer require "darkaonline/l5-swagger"

生成文档
> php artisan l5-swagger:generate

访问地址
> https//your-domain.com/api/docs
