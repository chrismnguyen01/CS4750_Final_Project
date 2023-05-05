<?php
require("connect-db.php");
require("lol-db.php");

$game = getGameByID(3326086514);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['actionBtn']) && ($_POST['actionBtn'] == "get_games_by_id")) {
    if (!empty($_POST['game_id'])) {
      $game = getGameByID($_POST['game_id']);
    } else {
      $game = getGameByID(3326086514);
    }
  }
  if (!empty($_POST['actionBtn']) && ($_POST['actionBtn'] == "Add Game")) {
    addGame(
      $_POST['game_id'], $_POST['duration'], $_POST['season_id'], $_POST['winner'],
      $_POST['team_1_player_1_champ'], 
      $_POST['team_1_player_1_ban'],
      $_POST['team_1_player_1_s1'],
      $_POST['team_1_player_1_s2'],
      $_POST['team_1_player_2_champ'],
      $_POST['team_1_player_2_ban'],
      $_POST['team_1_player_2_s1'],
      $_POST['team_1_player_2_s2'],
      $_POST['team_1_player_3_champ'],
      $_POST['team_1_player_3_ban'],
      $_POST['team_1_player_3_s1'],
      $_POST['team_1_player_3_s2'],
      $_POST['team_1_player_4_champ'],
      $_POST['team_1_player_4_ban'],
      $_POST['team_1_player_4_s1'],
      $_POST['team_1_player_4_s2'],
      $_POST['team_1_player_5_champ'],
      $_POST['team_1_player_5_ban'],
      $_POST['team_1_player_5_s1'],
      $_POST['team_1_player_5_s2'],
      $_POST['team_2_player_6_champ'],
      $_POST['team_2_player_6_ban'],
      $_POST['team_2_player_6_s1'],
      $_POST['team_2_player_6_s2'],
      $_POST['team_2_player_7_champ'],
      $_POST['team_2_player_7_ban'],
      $_POST['team_2_player_7_s1'],
      $_POST['team_2_player_7_s2'],
      $_POST['team_2_player_8_champ'],
      $_POST['team_2_player_8_ban'],
      $_POST['team_2_player_8_s1'],
      $_POST['team_2_player_8_s2'],
      $_POST['team_2_player_9_champ'],
      $_POST['team_2_player_9_ban'],
      $_POST['team_2_player_9_s1'],
      $_POST['team_2_player_9_s2'],
      $_POST['team_2_player_10_champ'],
      $_POST['team_2_player_10_ban'],
      $_POST['team_2_player_10_s1'],
      $_POST['team_2_player_10_s2']
    );
    $game = getGameByID(3214824413);
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

  <style>
    table {
      width: 10%;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
    }

    input[type="text"] {
      font-size: 8px;
      width: 50px;
    }

    label {
      font-size: 10px;
      font-weight: bold;
      text-align: right;
      white-space: nowrap;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Game Data</h1>
      </div>
      <div class="col text-end">
        <a href="http://localhost/leagueoflegends/gamedata.php">Game Data</a>
        <a href="http://localhost/leagueoflegends/championdata.php">Champion Data</a>
        <a href="http://localhost/leagueoflegends/spelldata.php">Spell Data</a>
      </div>
    </div>
    <form method="POST" action="gamedata.php">
      <table>
        <tr>
          <td><label for="game_id">Game ID:</label></td>
          <td><input type="text" name="game_id"></td>
          <td><label for="duration">Duration:</label></td>
          <td><input type="text" name="duration"></td>
          <td><label for="season_id">Season ID:</label></td>
          <td><input type="text" name="season_id"></td>
          <td><label for="winner">Winner:</label></td>
          <td><input type="text" name="winner"></td>
        </tr>
        <tr>
          <td colspan="8" align="center"><label>Team 1</label></td>
          <td></td>
          <td colspan="8" align="center"><label>Team 2</label></td>
        </tr>
        <tr>
          <td><label for="team_1_player_1_champ">Champion 1:</label></td>
          <td><input type="text" name="team_1_player_1_champ"></td>
          <td><label for="team_1_player_1_ban">Ban:</label></td>
          <td><input type="text" name="team_1_player_1_ban"></td>
          <td><label for="team_1_player_1_s1">Spell 1:</label></td>
          <td><input type="text" name="team_1_player_1_s1"></td>
          <td><label for="team_1_player_1_s2">Spell 2:</label></td>
          <td><input type="text" name="team_1_player_1_s2"></td>
          <td></td>
          <td><label for="team_2_player_6_champ">Champion 6:</label></td>
          <td><input type="text" name="team_2_player_6_champ"></td>
          <td><label for="team_2_player_6_ban">Ban:</label></td>
          <td><input type="text" name="team_2_player_6_ban"></td>
          <td><label for="team_2_player_6_s1">Spell 1:</label></td>
          <td><input type="text" name="team_2_player_6_s1"></td>
          <td><label for="team_2_player_6_s2">Spell 2:</label></td>
          <td><input type="text" name="team_2_player_6_s2"></td>
        </tr>
        <tr>
          <td><label for="team_1_player_2_champ">Champion 2:</label></td>
          <td><input type="text" name="team_1_player_2_champ"></td>
          <td><label for="team_1_player_2_ban">Ban:</label></td>
          <td><input type="text" name="team_1_player_2_ban"></td>
          <td><label for="team_1_player_2_s1">Spell 1:</label></td>
          <td><input type="text" name="team_1_player_2_s1"></td>
          <td><label for="team_1_player_2_s2">Spell 2:</label></td>
          <td><input type="text" name="team_1_player_2_s2"></td>
          <td></td>
          <td><label for="team_2_player_7_champ">Champion 7:</label></td>
          <td><input type="text" name="team_2_player_7_champ"></td>
          <td><label for="team_2_player_7_ban">Ban:</label></td>
          <td><input type="text" name="team_2_player_7_ban"></td>
          <td><label for="team_2_player_7_s1">Spell 1:</label></td>
          <td><input type="text" name="team_2_player_7_s1"></td>
          <td><label for="team_2_player_7_s2">Spell 2:</label></td>
          <td><input type="text" name="team_2_player_7_s2"></td>
        </tr>
        <tr>
          <td><label for="team_1_player_3_champ">Champion 3:</label></td>
          <td><input type="text" name="team_1_player_3_champ"></td>
          <td><label for="team_1_player_3_ban">Ban:</label></td>
          <td><input type="text" name="team_1_player_3_ban"></td>
          <td><label for="team_1_player_3_s1">Spell 1:</label></td>
          <td><input type="text" name="team_1_player_3_s1"></td>
          <td><label for="team_1_player_3_s2">Spell 2:</label></td>
          <td><input type="text" name="team_1_player_3_s2"></td>
          <td></td>
          <td><label for="team_2_player_8_champ">Champion 8:</label></td>
          <td><input type="text" name="team_2_player_8_champ"></td>
          <td><label for="team_2_player_8_ban">Ban:</label></td>
          <td><input type="text" name="team_2_player_8_ban"></td>
          <td><label for="team_2_player_8_s1">Spell 1:</label></td>
          <td><input type="text" name="team_2_player_8_s1"></td>
          <td><label for="team_2_player_8_s2">Spell 2:</label></td>
          <td><input type="text" name="team_2_player_8_s2"></td>
        </tr>
        <tr>
          <td><label for="team_1_player_4_champ">Champion 4:</label></td>
          <td><input type="text" name="team_1_player_4_champ"></td>
          <td><label for="team_1_player_4_ban">Ban:</label></td>
          <td><input type="text" name="team_1_player_4_ban"></td>
          <td><label for="team_1_player_4_s1">Spell 1:</label></td>
          <td><input type="text" name="team_1_player_4_s1"></td>
          <td><label for="team_1_player_4_s2">Spell 2:</label></td>
          <td><input type="text" name="team_1_player_4_s2"></td>
          <td></td>
          <td><label for="team_2_player_9_champ">Champion 9:</label></td>
          <td><input type="text" name="team_2_player_9_champ"></td>
          <td><label for="team_2_player_9_ban">Ban:</label></td>
          <td><input type="text" name="team_2_player_9_ban"></td>
          <td><label for="team_2_player_9_s1">Spell 1:</label></td>
          <td><input type="text" name="team_2_player_9_s1"></td>
          <td><label for="team_2_player_9_s2">Spell 2:</label></td>
          <td><input type="text" name="team_2_player_9_s2"></td>
        </tr>
        <tr>
          <td><label for="team_1_player_5_champ">Champion 5:</label></td>
          <td><input type="text" name="team_1_player_5_champ"></td>
          <td><label for="team_1_player_5_ban">Ban:</label></td>
          <td><input type="text" name="team_1_player_5_ban"></td>
          <td><label for="team_1_player_5_s1">Spell 1:</label></td>
          <td><input type="text" name="team_1_player_5_s1"></td>
          <td><label for="team_1_player_5_s2">Spell 2:</label></td>
          <td><input type="text" name="team_1_player_5_s2"></td>
          <td></td>
          <td><label for="team_2_player_10_champ">Champion 10:</label></td>
          <td><input type="text" name="team_2_player_10_champ"></td>
          <td><label for="team_2_player_10_ban">Ban:</label></td>
          <td><input type="text" name="team_2_player_10_ban"></td>
          <td><label for="team_2_player_10_s1">Spell 1:</label></td>
          <td><input type="text" name="team_2_player_10_s1"></td>
          <td><label for="team_2_player_10_s2">Spell 2:</label></td>
          <td><input type="text" name="team_2_player_10_s2"></td>
        </tr>
      </table>
      <div class="row mb-3 mx-3">
        <input type="submit" class="btn btn-primary" name="actionBtn" value="Add Game" title="click to insert game" />
      </div>
      <div class="row mb-3 mx-3">
        Game ID:
        <input type="text" class="form-control" name="game_id" />
      </div>
      <div class="row mb-3 mx-3">
        <input type="submit" class="btn btn-primary" name="actionBtn" value="Search Game By ID"
          title="click to search" />
      </div>
    </form>

    <div class="row justify-content-center">
      <table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
        <?php foreach ($game as $item): ?>
          <tr>
            <td><label for="game_id">Game ID:</label></td>
            <td>
              <?php echo $item['game_ID']; ?>
            </td>
            <td><label for="duration">Duration:</label></td>
            <td>
              <?php echo $item['duration']; ?>
            </td>
            <td><label for="season_id">Season ID:</label></td>
            <td>
              <?php echo $item['season_ID']; ?>
            </td>
            <td><label for="winner">Winner:</label></td>
            <td>
              <?php echo $item['winning_team']; ?>
            </td>
          </tr>
          <tr>
            <td colspan="8" align="center"><label>Team 1</label></td>
            <td></td>
            <td colspan="8" align="center"><label>Team 2</label></td>
          </tr>
          <tr>
            <td><label for="team_1_player_1_champ">Champion 1:</label></td>
            <td>
              <?php echo $item['champid1']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban1']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s11']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s12']; ?>
            </td>
            <td></td>
            <td><label for="team_1_player_1_champ">Champion 6:</label></td>
            <td>
              <?php echo $item['champid6']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban6']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s61']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s62']; ?>
            </td>
          </tr>
          <tr>
            <td><label for="team_1_player_1_champ">Champion 2:</label></td>
            <td>
              <?php echo $item['champid2']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban2']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s21']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s22']; ?>
            </td>
            <td></td>
            <td><label for="team_1_player_1_champ">Champion 7:</label></td>
            <td>
              <?php echo $item['champid7']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban7']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s71']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s72']; ?>
            </td>
          </tr>
          <tr>
            <td><label for="team_1_player_1_champ">Champion 3:</label></td>
            <td>
              <?php echo $item['champid3']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban3']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s31']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s32']; ?>
            </td>
            <td></td>
            <td><label for="team_1_player_1_champ">Champion 8:</label></td>
            <td>
              <?php echo $item['champid8']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban8']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s81']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s82']; ?>
            </td>
          </tr>
          <tr>
            <td><label for="team_1_player_1_champ">Champion 4:</label></td>
            <td>
              <?php echo $item['champid4']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban4']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s41']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s42']; ?>
            </td>
            <td></td>
            <td><label for="team_1_player_1_champ">Champion 9:</label></td>
            <td>
              <?php echo $item['champid9']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban9']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s91']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s92']; ?>
            </td>
          </tr>
          <tr>
            <td><label for="team_1_player_1_champ">Champion 5:</label></td>
            <td>
              <?php echo $item['champid5']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban5']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s51']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s52']; ?>
            </td>
            <td></td>
            <td><label for="team_1_player_1_champ">Champion 10:</label></td>
            <td>
              <?php echo $item['champid10']; ?>
            </td>
            <td><label for="team_1_player_1_ban">Ban:</label></td>
            <td>
              <?php echo $item['ban10']; ?>
            </td>
            <td><label for="team_1_player_1_s1">Spell 1:</label></td>
            <td>
              <?php echo $item['s101']; ?>
            </td>
            <td><label for="team_1_player_1_s2">Spell 2:</label></td>
            <td>
              <?php echo $item['s102']; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

  </div>
</body