# GIT常用命令 #


<br>

设置用户名和电子邮箱：
> git config --global user.name "your-github-username"  
> git config --global user.email "your-github@email.com"

<br>

生成并添加SSHkey：
> cd ~/.ssh/  
> ssh-keygen -t rsa -C "your-github@email.com"

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
> git pull

<br>

撤销/恢复修改：
> git checkout -- readme.txt

<br>

查看修改状态：
> git status -s  
> git status

<br>

关联远程库：
> git remote add origin git@github.com:githubUserName/projectName.git

<br>

推送到远程库：
> git push -u origin master

<br>

克隆远程库：
> git clone git@github.com:githubUserName/projectName.git

<br>

查看分支：
> git branch

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
