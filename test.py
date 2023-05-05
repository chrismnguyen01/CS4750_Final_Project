for i in range(1, 6):
    print("$_POST['team_1_player_" + str(i) + "_champ'], ")
    print("$_POST['team_1_player_" + str(i) + "_ban'], ")
    print("$_POST['team_1_player_" + str(i) + "_s1'], ")
    print("$_POST['team_1_player_" + str(i) + "_s2'], ")
for i in range(6, 11):
    print("$_POST['team_2_player_" + str(i) + "_champ'], ")
    print("$_POST['team_2_player_" + str(i) + "_ban'], ")
    print("$_POST['team_2_player_" + str(i) + "_s1'], ")
    print("$_POST['team_2_player_" + str(i) + "_s2'], ")

for i in range(1, 41):
    print("$statement->bindValue(':p" + str(i) + "', $p" + str(i) + ");")