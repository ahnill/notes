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

<br>

## Web服务器 ##

重启nginx  
> nginx -s reload

<br>
