# MySQL常用命令 #

<br>

## 备份还原 ##

MySQL备份  
> mysqldump -uroot -ppassword                db_name     > /path/to/file.sql  
> mysqldump -uroot -p123456                  sdb_example > D:/bakups/sdb_example.sql  
> mysqldump -uroot -p --skip-extended-insert db_name     > /path/to/file.sql  
> --skip-extended-insert (一行一条记录)  
> --skip-add-drop-table  

<br>

MySQL还原  
> mysql -uroot -ppassword db_name     < /path/to/file.sql  
> mysql -uroot -p123456   sdb_example < D:/bakups/sdb_example.sql

<br>
