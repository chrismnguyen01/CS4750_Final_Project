<?php
require("connect-db.php");
require("lol-db.php");

$role = getAllRole();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['actionBtn']) && ($_POST['actionBtn'] == "get_champ_data_by_name")) {
    if (!empty($_POST['champ_name'])) {
      $role = getRoleByName($_POST['champ_name']);
    } else {
      $role = getAllRole();
    }
  }
}
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
        <h1>Champion Data</h1>
      </div>
      <div class="col text-end">
        <a href="http://localhost/leagueoflegends/gamedata.php">Game Data</a>
        <a href="http://localhost/leagueoflegends/championdata.php">Champion Data</a>
        <a href="http://localhost/leagueoflegends/spelldata.php">Spell Data</a>
      </div>
    </div>

    <form name="mainForm" action="championdata.php" method="post">
      <div class="row mb-3 mx-3">
        Champion Name:
        <input type="text" class="form-control" name="champ_name" />
      </div>
      <div class="row mb-3 mx-3">
        <input type="submit" class="btn btn-primary" name="actionBtn" value="get_champ_data_by_name"
          title="click to search" />
      </div>
    </form>

    <div class="row justify-content-center">
      <table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
        <thead>
          <tr style="background-color:#B0B0B0">
            <th>Champ ID</th>
            <th>Champ Name</th>
            <th>Role</th>
            <th>Tier</th>
            <th>Win Percent</th>
            <th>Role Percent</th>
            <th>Pick Percent</th>
            <th>Ban Percent</th>
          </tr>
        </thead>
        <?php foreach ($role as $item): ?>
          <tr>
            <td>
              <?php echo $item['champ_ID']; ?>
            </td>
            <td>
              <?php echo $item['champ_name']; ?>
            </td>
            <td>
              <?php echo $item['role_name']; ?>
            </td>
            <td>
              <?php echo $item['tier']; ?>
            </td>
            <td>
              <?php echo $item['win_percent']; ?>
            </td>
            <td>
              <?php echo $item['role_percent']; ?>
            </td>
            <td>
              <?php echo $item['pick_percent']; ?>
            </td>
            <td>
              <?php echo $item['ban_percent']; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

  </div>
</body