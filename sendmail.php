<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "inksv@ukr.net"; // ��� �������� �����
    $subject = $_POST["subject"]; // ���� ������
    $message = $_POST["message"]; // ����� ���������
    $headers = "From: " . $_POST["email"] . "\r\n"; // ����� �����������

    // �������� ������
    if (mail($to, $subject, $message, $headers)) {
        echo "������ ������� ����������";
    } else {
        echo "������ ��� �������� ������";
    }
}
?>
