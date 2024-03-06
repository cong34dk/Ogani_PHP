<?php

class dbconnect
{
    // Các thuộc tính để lưu trữ thông tin kết nối cơ sở dữ liệu
    private $host = "localhost";
    private $user = "root";
    private $pass = "123456";
    private $dbname = "dbshop";

    // Phương thức khởi tạo, không có gì được thực hiện trong trường hợp này
    public function construct()
    {
        // Khởi tạo một đối tượng dbconnect
    }

    // Phương thức thực thi truy vấn SQL và trả về kết quả
    public function query($sql)
    {
        // Tạo một kết nối PDO đến cơ sở dữ liệu với thông tin đã cung cấp
        $db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);

        // Thực thi truy vấn SQL và lưu kết quả vào biến $result
        $result = $db->query($sql);

        // Đóng kết nối đến cơ sở dữ liệu
        $db = null;

        // Trả về kết quả của truy vấn
        return $result;
    }

    public function getOne($sql)
    {
        // Tạo một kết nối PDO đến cơ sở dữ liệu với thông tin đã cung cấp
        $db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);

        // Thực thi truy vấn SQL và lưu kết quả vào biến $result
        $result = $db->query($sql)->fetch();

        // Đóng kết nối đến cơ sở dữ liệu
        $db = null;

        // Trả về kết quả của truy vấn
        return $result;
    }

    // Phương thức thực thi truy vấn SQL không trả về kết quả
    public function exec($sql)
    {
        // Tạo một kết nối PDO đến cơ sở dữ liệu với thông tin đã cung cấp
        $db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);

        // Thực thi truy vấn SQL bằng phương thức exec và lưu kết quả vào biến $result
        $result = $db->query($sql);

        // Đóng kết nối đến cơ sở dữ liệu
        $db = null;

        // Trả về kết quả của truy vấn
        return $result;
    }
}
?>
