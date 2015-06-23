<?php
    $type = $_POST["type"];
    $id = $_POST["id"];
    session_start();
    include("config.php");
    $id_c_oder = $_SESSION['id_current_oder'];
    if($type == "increase")
    {
        if(mysql_query("update oder_list_item set number = number + 1 where ID_oder = '$id_c_oder' and ID_item ='$id' "))
        {
            mysql_query("UPDATE oder,
                (SELECT ID_oder, SUM(number*price ) as sum FROM oder_list_item, item WHERE ID_oder = '$id_c_oder' and ID_item = item.ID) as a 
                set oder.Total = a.sum
                WHERE oder.ID = 21");
            header('Content-Type: application/json');
            $result = array("status"=>"success");
            echo json_encode($result);
        }
        else
        {
            header('Content-Type: application/json');
            $result = array("status"=>$id_c_oder);
            echo json_encode($result);
        }
    }
    else if($type == "down")
    {
        if(mysql_query("update oder_list_item set number = number - 1 where ID_oder = '$id_c_oder' and ID_item ='$id' "))
        {
            mysql_query("UPDATE oder,
                (SELECT ID_oder, SUM(number*price ) as sum FROM oder_list_item, item WHERE ID_oder = '$id_c_oder' and ID_item = item.ID) as a 
                set oder.Total = a.sum
                WHERE oder.ID = 21");
            header('Content-Type: application/json');
            $result = array("status"=>"success");
            echo json_encode($result);
        }
        else
        {
            header('Content-Type: application/json');
            $result = array("status"=>"false");
            echo json_encode($result);
        }
    }
    else if($type == "delete")
    {
        if(mysql_query("DELETE from oder_list_item where ID_oder = '$id_c_oder' and ID_item ='$id' "))
        {
            header('Content-Type: application/json');
            $result = array("status"=>"success");
            echo json_encode($result);
        }
        else
        {
            header('Content-Type: application/json');
            $result = array("status"=>"false");
            echo json_encode($result);
        }
    }
?>