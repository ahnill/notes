# ����GitHub��Ŀ #

<br>

Ŀ¼ [notes] ������ѧϰ�ʼ��ļ���

<br>

Composer�������[notes/composer.md](https://github.com/ahnill/notes/blob/master/notes/composer.md)  
Laravel�������[notes/laravel.md](https://github.com/ahnill/notes/blob/master/notes/laravel.md)  
Redis�������[notes/redis.md](https://github.com/ahnill/notes/blob/master/notes/redis.md)  
GIT�������[notes/git.md](https://github.com/ahnill/notes/blob/master/notes/git.md)

<br>

## GIT�������� ##

<br>

���/�޸��ļ���
> git add readme.txt

<br>

ɾ���ļ���
> git rm readme.txt

<br>

�ύ�޸ģ�
> git commit -m "Git Tracks Changes"

<br>

��ȡ�ļ���
> git pull

<br>

ִ����commit���볷��commit��
> git reset --soft HEAD^

<br>

ǿ�Ƴ���/�ָ��޸ģ�
> git checkout -- readme.txt

<br>

�鿴�޸�״̬��
> git status -s  
> git status

<br>

��¡Զ�̿⣺
> git clone git@github.com:user/project.git 
> git clone git@gitee.com:user/project.git

<br>

����Զ�̿⣺
> git remote add origin git@github.com:user/project.git 
> git remote add origin git@gitee.com:user/project.git

<br>

���͵�Զ�̿⣺
> git push -u origin master

<br>

�鿴��֧��
> git branch

<br>

������֧��
> git branch dev

<br>

�л���֧��
> git checkout dev  
> git switch dev

<br>

�������л���֧��
> git checkout -b dev  
> git switch -c dev

<br>

�ϲ�ĳ��֧����ǰ��֧��
> git merge dev

<br>

ɾ����֧��
> git branch -d dev

<br>

�����û����͵������䣺
> git config --global user.name "your-github-username"  
> git config --global user.email "your-github@email.com"

<br>

���ɲ����SSHkey��
> cd ~/.ssh/  
> ssh-keygen -t rsa -C "your-github@email.com"
