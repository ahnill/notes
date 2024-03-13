# Laravel常用命令 #

  

## 数据库迁移 ##

生成迁移
> php artisan make:migration create_[name]_table

运行迁移
> php artisan migrate  
> php artisan migrate --path=database/migrations/XXXX_XX_XX_XXXX_create_[name]_table.php  
> php artisan migrate --path=database/migrations/0000_00_00_000000_create_table.php

生成填充
> php artisan make:seeder [name]TableSeeder

运行填充
> php artisan db:seed  
> php artisan db:seed --class=[name]TableSeeder  
> php artisan db:seed --class=BasicTableSeeder  
> php artisan db:seed --class=UserSeeder  
> php artisan db:seed --class=TestSeeder

刷新迁移
> php artisan migrate:fresh

刷新并填充
> php artisan migrate:fresh --seed

数据可以导出
> mysqldump -uroot -p saas > /www/wwwroot/saas-server/saas.sql

  

## 服务提供者 ##

创建服务提供者
> php artisan make:provider [Name]ServiceProvider

  

## 中间件 ##

创建中间件
> php artisan make:middleware [ClassName]

  

## 队列任务 ##

生成数据表
> php artisan queue:table  
> php artisan migrate --path=database/migrations/0000_00_00_000000_create_jobs_table.php

创建任务类
> php artisan make:job SystemJob  
> php artisan make:job SystemJobAnother

任务加入队列
> SystemJob::dispatch([`$`dataList], 'dataMark')->onQueue('SystemJob');  
> SystemJobAnother::dispatch([`$`dataNew], 'dataMarkNew')->onQueue('SystemJobAnother');

任务处理逻辑
> SystemJob::__construct(`$`dataList, method) {}  
> SystemJob::handle() { /* TODO */ }

启动任务进程
> php artisan queue:work --queue=SystemJob,SystemJobAnother

重启任务进程
> php artisan  queue:restart

  

## 命令行 ##

创建自定义命令
> php artisan make:command TaobaoGoodsImport

自定义命令列表
> php artisan what:import  
> php artisan what:export

  
## 计划任务 ##

执行计划任务
> php artisan schedule:run

  

## 数据库模型 ##

创建模型
> php artisan make:model [ClassName]  
> php artisan make:model Models/[ClassName]

创建模板并生成迁移文件
> php artisan make:model Models/[ClassName] -m

  

## 计划任务 ##

运行计划任务(计划任务无法执行可考虑清除缓存)  
> php /www/wwwroot/www.fewwho.com/artisan schedule:run  
> php artisan schedule:run

定期执行任务
> * * * * * php /www/wwwroot/www.fewwho.com/artisan schedule:run > /dev/null 2>&1 &

  

## 清理缓存 ##

清除运行缓存  
> php artisan cache:clear

清除视图缓存
> php artisan view:clear

清除配置缓存
> php artisan config:clear

清除路由缓存
> php artisan route:clear

清除事件缓存
> php artisan event:clear

清除所有缓存
> php artisan optimize:clear

  

## L5 Swagger 插件 ##

引入插件  
> composer require "darkaonline/l5-swagger"

生成文档  
> php artisan l5-swagger:generate

访问地址  
> https//www.fewwho.com/api/docs

## Linux命令 ##

切换目录  
> cd /www/wwwroot/www.fewwho.com

GIT拉取  
> git pull

改变文件所有者  
> chown -R www:www ./
