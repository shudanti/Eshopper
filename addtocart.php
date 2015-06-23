<?php
    $i = $_POST["i"];
    
    session_start();
    include("config.php");
    $sel_item=mysql_query("select * from item where ID = '$i'");
    
    if ((isset($_SESSION['id_name'])) && (!empty($_SESSION['id_name'])))
    {
        
        
        $ID_name = $_SESSION['id_name'];
        if ((isset($_SESSION['id_current_oder'])) && (!empty($_SESSION['id_current_oder'])))
        {
            $id_c_oder = $_SESSION['id_current_oder'];
            mysql_query("insert into oder_list_item VALUES ('$id_c_oder','$i',1)");
            mysql_query("UPDATE oder,
                (SELECT ID_oder, SUM(number*price ) as sum FROM oder_list_item, item WHERE ID_oder = '$id_c_oder' and ID_item = item.ID) as a 
                set oder.Total = a.sum
                WHERE oder.ID = $id_c_oder");
            
        }
        else 
        {
            
            $total = mysql_result($sel_item,0,"price");
            if(mysql_query("insert into oder(Total, user, ispay, sent) VALUES ('$total','$ID_name',0,0)"))
            {
                $sel=mysql_query("select MAX(ID) from oder where user = '$ID_name'");
                $_SESSION['id_current_oder'] = mysql_result($sel,0,0);
                $id_c_oder = $_SESSION['id_current_oder'];
                mysql_query("insert into oder_list_item VALUES ('$id_c_oder','$i',1)");
            }
        }
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
        exit;
    }
?>