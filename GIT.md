# GIT常用命令 #

添加/修改文件：
> git add readme.txt

删除文件：
> git rm readme.txt

提交修改：
> git commit -m "Git Tracks Changes"

撤销/恢复修改：
> git checkout -- readme.txt

查看修改状态：
> git status -s  
> git status

关联远程库：
> git remote add origin git@github.com:githubUserName/projectName.git

推送到远程库：
> git push -u origin master

克隆远程库：
> git clone git@github.com:githubUserName/projectName.git

查看分支：
> git branch

创建分支：
> git branch dev

切换分支：
> git checkout dev  
> git switch dev

创建并切换分支：
> git checkout -b dev  
> git switch -c dev

合并某分支到当前分支：
> git merge dev

删除分支：
> git branch -d dev
