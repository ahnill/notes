# 利用 git 命令把复制更新文件到目的文件夹（桌面），方便 FTP 上传

# 引入模块
import os
import subprocess
from shutil import copyfile

# 指定本地仓库的路径和Git命令
repo_path = "."
git_cmd = ["git", "status", "-su"]
desktop = "C:/Users/Lenovo/Desktop/git/"

# 执行Git命令并捕获输出
proc = subprocess.Popen(git_cmd, cwd=repo_path, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
out, err = proc.communicate()

# 输出Git命令的结果
if proc.returncode != 0:
    print(f"Commend failed: {err.decode('utf-8')}")
else:
    for ooo in out.decode('utf-8').split("\n"):
        if ooo.strip() == "":
            continue
        name = ooo.strip().split(" ")
        if name[0] == "D" or name[1] == "git.py":
            continue
        file = desktop + name[1]
        path = file[0:file.rfind("/")]
        try:
            if os.path.exists(path) == False:
                os.makedirs(path)
            if copyfile(name[1], file):
                print(f"Copied file [{file}]")
        except IOError as e:
            print("Unable to copy file. %s" % e)
            exit(1)
        except:
            print("Unexpected error")
            exit(1)
    print("Git updated files copied successful!")
