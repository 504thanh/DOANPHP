<?php
    class Books extends Model
    {
        function SelectNewBooks($position,$number)
        {
            //Câu Select
            $sql = "SELECT * FROM ".$this->className." ORDER BY BOOK_ID DESC LIMIT $position,$number ";

            //Thực thi câu lệnh
            $runSql = $this->db->QueryResult($sql);

            //Trả về dữ liệu
            return $runSql->fetchAll(PDO::FETCH_CLASS);
        }

        function SelectHotBooks($position,$number)
        {
            //Câu Select
            $sql = "SELECT * FROM ".$this->className." WHERE STATUS = 'NEW' ORDER BY BOOK_ID DESC LIMIT $position,$number ";

            //Thực thi câu lệnh
            $runSql = $this->db->QueryResult($sql);

            //Trả về dữ liệu
            return $runSql->fetchAll(PDO::FETCH_CLASS);
        }
    }
?>