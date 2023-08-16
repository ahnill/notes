<?php
$servername = "127.0.0.1"; // 数据库服务器名称
$username   = "root"; // 数据库用户名
$password   = "root"; // 数据库密码
$dbname     = "db_name"; // 数据库名称
$filename   = "db_name.sql";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接是否成功
if ($conn->connect_error) {
    exit("Error connect: " . $conn->connect_error);
}
if ($conn->query("SET NAMES UTF8") === false) {
    exit("Error query: " . $conn->error);
}

// 跳过导入数据
$skips_table = ['table_aaa', 'table_bbb'];

// 从SQL文件中读取内容
if (file_exists($filename)) {
    $handle = fopen($filename, "r");
    $text   = '';
    $quote  = false;
    $multi  = false;
    $begin  = false;
    while (($line = fgets($handle)) !== false) {
        if (trim($line) == '') {
            continue;
        }
        if (substr($line, 0, 3) == '-- ') {
            continue;
        }
        $line = strtr($line, ["\r" => '']);
        if (trim($line) == '/*') {
            $quote = true;
            $multi = true;
            $text  = $line;
            continue;
        }
        if (trim($line) == '*/') {
            $quote = false;
            $multi = false;
            $text  .= $line;
            $text  = '';
            continue;
        }
        if ($text == '' && substr($line, -2) != ";\n") {
            $multi = true;
            $text  = $line;
            continue;
        }
        if (substr($line, -2) == ";\n") {
            $multi  = false;
            $text   .= $line;
            $query  = trim($text);
            $option = strtolower(substr($query, 0, strpos($query, ' ')));
            $table  = '';
            $skip   = false;
            if ($option == 'insert') {
                $has = preg_match('/`(.*?)`/', $query, $tmp);
                if ($has > 0) {
                    foreach ($skips_table as $key => $val) {
                        if (strpos($tmp[1], $val) !== false) {
                            $skip = true;
                            break;
                        }
                    }
                    $table = sprintf(' [%s]', $tmp[1]);
                }
            }
            if (!$skip) {
                if ($conn->query($query) === true) {
                    echo sprintf("Success %s%s query: %s char(s)", $option, $table, strlen($query)) . PHP_EOL;
                } else {
                    echo "Error: " . $conn->error . PHP_EOL;
                    echo "Query: " . $query . PHP_EOL;
                    break;
                }
            }
            $text = '';
            continue;
        }
        if ($multi) {
            $text .= $line;
        }
    }
    fclose($handle);
} else {
    echo sprintf("File not found: %s", $filename) . PHP_EOL;
}

// 关闭连接
$conn->close();
