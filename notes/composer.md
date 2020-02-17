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
