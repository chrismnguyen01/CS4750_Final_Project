<?php
require("connect-db.php");
require("lol-db.php");

$spells = getAllSpells();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <title>League of Legends</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" type="image/png" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" />


</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Spell Data</h1>
      </div>
      <div class="col text-end">
        <a href="http://localhost/leagueoflegends/gamedata.php">Game Data</a>
        <a href="http://localhost/leagueoflegends/championdata.php">Champion Data</a>
        <a href="http://localhost/leagueoflegends/spelldata.php">Spell Data</a>
      </div>
    </div>

    <div class="row justify-content-center">
      <table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
        <thead>
          <tr style="background-color:#B0B0B0">
            <th>Spell ID</th>
            <th>Spell Name</th>
            <th>Description</th>
          </tr>
        </thead>
        <?php foreach ($spells as $item): ?>
          <tr>
            <td>
              <?php echo $item['spell_ID']; ?>
            </td>
            <td>
              <?php echo $item['spell_name']; ?>
            </td>
            <td>
              <?php echo $item['description']; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

  </div>
</body