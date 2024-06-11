<?php

function countData($table)
{
    $db = \Config\Database::connect();
    return  $db->table($table)->countAllResults();
}


function getData($table)
{
    $db = \Config\Database::connect();
    return $db->table($table)->get()->getResult();
}

function getNextUserId()
{
    $db = \Config\Database::connect();

    $query = $db->query("SELECT MAX(id_user) AS max_id FROM tbl_user");
    $result = $query->getRow();
    $maxId = $result->max_id;

    if ($maxId) {
        $nextId = $maxId + 1;
    } else {
        $nextId = 1;
    }

    return $nextId;
}
