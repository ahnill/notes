# Linux收藏命令 #

<br>

## 文件磁盘 ##

查看当前目录个文件夹所占空间  
> du -ah --max-depth=1  

查看当前所有磁盘  
> fdisk -l  

格式化新加入磁盘  
> mkfs.ext4 /dev/vdc  

新建文件夹  
> mkdir /data/vdcroot  

挂载新磁盘到空文件夹  
> mount /dev/vdc /data/vdcroot  

查看所有挂载分区  
> df -h  

设置开机挂载  
> vim /etc/fstab  

<br>

## 端口 ##

查看80端口是否开启  
> lsof -i:80  

<br>

## 修改root密码 ##

> sudo passwd root #当root密码为空  

<br>

## Web服务器 ##

重启nginx  
> nginx -s reload

<br>

## OpenSSL的Nginx证书生成 ##

1. 先生成一个公钥、密钥对  
> openssl genrsa -out server.key 1024  

2. 基于该私钥生成一个CSR（证书签名请求）  
> openssl req -new -key server.key -out server.csr  

3. 把自己当作一个CA，自己给自己注册一下  
> openssl x509 -req -days 365 -in server.csr -signkey server.key -out server.crt  

4. 查看证书的相关信息  
> openssl x509 -in server.crt -text  
