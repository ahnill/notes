# Composer常用命令 #

<br>

源更改成阿里云的国内镜像：
> composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/  

或  
> composer config -g repo.packagist composer https://packagist.phpcomposer.com

<br>

改回原来的源：
> composer config -g repo.packagist composer https://repo.packagist.org

<br>

修改composer.json文件后刷新：
> composer dump-autoload 

<br>

命令从当前目录读取composer.json文件，处理了依赖关系，并把其安装/更新到vendor目录下：
> composer install 

<br>

## Composer版本更新 ##

查看当前安装的版本
> composer -v

<br>

将Composer更新到最新版本
> composer self-update  
> composer selfupdate
