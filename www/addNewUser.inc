<?php
    sleep(2);
    
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    
    //�������� id ������������
    // ���� - ������� �� ������ / ������� � �����������
    // ��� - ���������������� � ����� - user    
    exit('���������� ������ � ������������ �� �����������');
    
    $sql = "insert into orders values(Null, '{$subject}','{$description}', NOW(), '{$userId}')";
    $res = mysql_query($sql) or exit('������ ��� ���������� ������� � ���� ������.');
?>