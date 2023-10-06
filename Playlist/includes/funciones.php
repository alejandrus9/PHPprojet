<?php
require_once 'funcionesDB.php';



function getAllSongs(){
    
    $conn = openConnectionDB("notabase");
    
    
    
    $sql = "select * from songs";
    
    
    
    $result = $conn->query($sql);
    
    
    
    while ($row = $result->fetch_assoc()) {
        
        echo $row['name']."<br>";
        
    }
    
    
    
    closeConnection($conn);
    
    
    
}
?>