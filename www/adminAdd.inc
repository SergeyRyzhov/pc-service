<?php
    sleep(2);
    
    $userid = $_POST['user'];
    $roleid = $_POST['role'];
    
    $check = "select * from userinroles where userid='{$userid}' and roleid='{$roleid}'";    
    $checkres = mysql_query($check) or exit('������ ��� ���������� ������� � ���� ������.');
    
    if(mysql_num_rows($checkres) == 0)
    {
        $sql = "insert into userinroles values('{$userid}','{$roleid}')";
        $res = mysql_query($sql) or exit('������ ��� ���������� ������� � ���� ������.');
    }
?>