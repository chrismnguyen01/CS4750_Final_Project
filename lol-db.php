<?php

function getAllRole()
{
   // db
   global $db;
   // query
   $query = "select * from role";
   // prepare
   $statement = $db->prepare($query);
   // execute
   $statement->execute();
   // retrieve
   $results = $statement->fetchAll(); // fetch()
   // close cursor   
   $statement->closeCursor();

   // return result
   return $results;
}

function getRoleByName($name)
{
   global $db;
   $query = "select * from role where champ_name=:name";
   $statement = $db->prepare($query);
   $statement->bindValue(':name', $name);
   $statement->execute();
   $result = $statement->fetchAll();
   $statement->closeCursor();
   return $result;
}


function getGameByID($id)
{
   global $db;
   $query = "select * from games where game_ID=:id";
   $statement = $db->prepare($query);
   $statement->bindValue(':id', $id);
   $statement->execute();
   $result = $statement->fetchAll();
   $statement->closeCursor();
   return $result;
}

function getAllSpells()
{
   global $db;
   $query = "SELECT * FROM spell";
   $statement = $db->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   $statement->closeCursor();
   return $result;
}

function addGame(
   $game_id,
   $duration,
   $season_id,
   $winner,
   $p1,
   $p2,
   $p3,
   $p4,
   $p5,
   $p6,
   $p7,
   $p8,
   $p9,
   $p10,
   $p11,
   $p12,
   $p13,
   $p14,
   $p15,
   $p16,
   $p17,
   $p18,
   $p19,
   $p20,
   $p21,
   $p22,
   $p23,
   $p24,
   $p25,
   $p26,
   $p27,
   $p28,
   $p29,
   $p30,
   $p31,
   $p32,
   $p33,
   $p34,
   $p35,
   $p36,
   $p37,
   $p38,
   $p39,
   $p40
) {
   global $db;
   $query = "insert into games values (:gid, :duration, :season_id, :winner, 
   :p1,
   :p2,
   :p3,
   :p4,
   :p5,
   :p6,
   :p7,
   :p8,
   :p9,
   :p10,
   :p11,
   :p12,
   :p13,
   :p14,
   :p15,
   :p16,
   :p17,
   :p18,
   :p19,
   :p20,
   :p21,
   :p22,
   :p23,
   :p24,
   :p25,
   :p26,
   :p27,
   :p28,
   :p29,
   :p30,
   :p31,
   :p32,
   :p33,
   :p34,
   :p35,
   :p36,
   :p37,
   :p38,
   :p39,
   :p40
   )";
   $statement = $db->prepare($query);
   $statement->bindValue(':gid', $game_id);
   $statement->bindValue(':duration', $duration);
   $statement->bindValue(':season_id', $season_id);
   $statement->bindValue(':winner', $winner);
   $statement->bindValue(':p1', $p1);
   $statement->bindValue(':p2', $p2);
   $statement->bindValue(':p3', $p3);
   $statement->bindValue(':p4', $p4);
   $statement->bindValue(':p5', $p5);
   $statement->bindValue(':p6', $p6);
   $statement->bindValue(':p7', $p7);
   $statement->bindValue(':p8', $p8);
   $statement->bindValue(':p9', $p9);
   $statement->bindValue(':p10', $p10);
   $statement->bindValue(':p11', $p11);
   $statement->bindValue(':p12', $p12);
   $statement->bindValue(':p13', $p13);
   $statement->bindValue(':p14', $p14);
   $statement->bindValue(':p15', $p15);
   $statement->bindValue(':p16', $p16);
   $statement->bindValue(':p17', $p17);
   $statement->bindValue(':p18', $p18);
   $statement->bindValue(':p19', $p19);
   $statement->bindValue(':p20', $p20);
   $statement->bindValue(':p21', $p21);
   $statement->bindValue(':p22', $p22);
   $statement->bindValue(':p23', $p23);
   $statement->bindValue(':p24', $p24);
   $statement->bindValue(':p25', $p25);
   $statement->bindValue(':p26', $p26);
   $statement->bindValue(':p27', $p27);
   $statement->bindValue(':p28', $p28);
   $statement->bindValue(':p29', $p29);
   $statement->bindValue(':p30', $p30);
   $statement->bindValue(':p31', $p31);
   $statement->bindValue(':p32', $p32);
   $statement->bindValue(':p33', $p33);
   $statement->bindValue(':p34', $p34);
   $statement->bindValue(':p35', $p35);
   $statement->bindValue(':p36', $p36);
   $statement->bindValue(':p37', $p37);
   $statement->bindValue(':p38', $p38);
   $statement->bindValue(':p39', $p39);
   $statement->bindValue(':p40', $p40);
   $result = $statement->execute();
   echo $result;
   $statement->closeCursor();
}


?>