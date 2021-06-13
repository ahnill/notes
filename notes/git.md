## GIT常用命令 ##

<br>

添加/修改文件：
> git add readme.txt

<br>

删除文件：
> git rm readme.txt

<br>

提交修改：
> git commit -m "Git Tracks Changes"

<br>

拉取文件：
> git pull (将远程主机的最新内容拉下来后直接合并)  
> git fetch (将远程主机的最新内容拉到本地，用户在检查了以后决定是否合并到工作本机分支中)

<br>

执行完commit后想撤回commit：
> git reset --soft HEAD^

<br>

强制撤销/恢复修改：
> git checkout -- readme.txt

<br>

强制回滚：
> git reset --hard ***version*code***

<br>

查看修改状态：
> git status -s  
> git status

<br>

克隆远程库：
> git clone git@github.com:user/project.git  
> git clone git@gitee.com:user/project.git

<br>

关联远程库：
> git remote add origin git@github.com:user/project.git  
> git remote add origin git@gitee.com:user/project.git  
> git remote set-url origin git@gitee.com:user/project.git

<br>

关联多个远程库：
> git remote set-url --add origin https://github.com/user/project.git  
> git remote set-url --add origin https://gitee.com/user/project.git

<br>

查看远程库：
> git remote -v

<br>

推送到远程库：
> git push -u origin master

<br>

查看分支：
> git branch (本地分支)  
> git branch -r (远程分支)

<br>

创建分支：
> git branch dev

<br>

切换分支：
> git checkout dev  
> git switch dev

<br>

创建并切换分支：
> git checkout -b dev  
> git switch -c dev

<br>

合并某分支到当前分支：
> git merge dev

<br>

删除分支：
> git branch -d dev

<br>

查看用户名和电子邮箱：
> git config user.name  
> git config user.email

<br>

设置用户名和电子邮箱：
> git config --global user.name "your-github-username"  
> git config --global user.email "your-github@email.com"

<br>

生成并添加SSHkey：
> cd ~/.ssh/  
> ssh-keygen -t rsa -C "your-github@email.com"
