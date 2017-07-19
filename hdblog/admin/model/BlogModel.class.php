<?php
class BlogModel extends Model
{
    protected $table = "hd_blog";

    function getAll($data) {
        return $this->insert($data);
    }
}
?>