CREATE TABLE game (
   game_ID varchar(12) NOT NULL,
   creation_time varchar(20) NOT NULL,
   duration int,
   season_ID int,
   winning_team int,
   PRIMARY KEY (game_ID) );

CREATE TABLE team (
   game_ID varchar(12) NOT NULL,
   team_ID int NOT NULL,
   tower_kills int,
   inhibitor_kills int,
   dragon_kills int,
   baron_kills int,
   riftherald_kills int,
   PRIMARY KEY (game_ID, team_ID) );

CREATE TABLE spell (
   spell_ID int NOT NULL,
   spell_name varchar(20),
   description varchar(300),
   PRIMARY KEY (spell_ID) );

CREATE TABLE champion (
   champ_ID int NOT NULL,
   champ_name varchar(20) NOT NULL,
   class varchar(20),
   PRIMARY KEY (champ_ID) );

CREATE TABLE role (
   champ_ID int NOT NULL,
   champ_name varchar(20),
   role_name varchar(7) NOT NULL,
   tier varchar(3),
   win_percent double(5, 4),
   role_percent double(5, 4),
   pick_percent double(5, 4),
   ban_percent double(5, 4),
   PRIMARY KEY (champ_ID, role_name) );

CREATE TABLE picks (
   game_ID varchar(12) NOT NULL,
   team_ID int NOT NULL,
   s1 int,
   s2 int,
   s3 int,
   s4 int,
   s5 int,
   s6 int,
   s7 int,
   s8 int,
   s9 int,
   s10 int,
   PRIMARY KEY (game_ID, team_ID) );

CREATE TABLE locks_in (
   game_ID varchar(12) NOT NULL,
   team_ID int NOT NULL,
   champid1 varchar(20),
   champid2 varchar(20),
   champid3 varchar(20),
   champid4 varchar(20),
   champid5 varchar(20),
   PRIMARY KEY (game_ID, team_ID) );

CREATE TABLE bans (
   game_ID varchar(12) NOT NULL,
   team_ID int NOT NULL,
   ban1 varchar(20),
   ban2 varchar(20),
   ban3 varchar(20),
   ban4 varchar(20),
   ban5 varchar(20),
   PRIMARY KEY (game_ID, team_ID ) );

CREATE TABLE plays_in (
   game_ID varchar(12) NOT NULL,
   t1_champid1 int,
   t1_champid2 int,
   t1_champid3 int,
   t1_champid4 int,
   t1_champid5 int,
   t2_champid1 int,
   t2_champid2 int,
   t2_champid3 int,
   t2_champid4 int,
   t2_champid5  int,
   PRIMARY KEY (game_ID) );

SELECT * FROM spell;

SELECT * FROM game;

SELECT * FROM champion;

SELECT * FROM role;

SELECT 
  game.*, 
  team.*, 
  picks.*, 
  bans.*, 
  plays_in.*
FROM 
  game 
  JOIN team ON game.game_ID = team.game_ID
  JOIN picks ON game.game_ID = picks.game_ID
  JOIN bans ON game.game_ID = bans.game_ID
  JOIN plays_in ON game.game_ID = plays_in.game_ID
  JOIN (
    SELECT 
      champ_ID, champ_name
    FROM 
      champion
    WHERE 
      champ_name = '[specific champion name]'
  ) AS specific_champion ON (
    specific_champion.champ_ID = plays_in.t1_champid1 OR 
    specific_champion.champ_ID = plays_in.t1_champid2 OR 
    specific_champion.champ_ID = plays_in.t1_champid3 OR 
    specific_champion.champ_ID = plays_in.t1_champid4 OR 
    specific_champion.champ_ID = plays_in.t1_champid5 OR 
    specific_champion.champ_ID = plays_in.t2_champid1 OR 
    specific_champion.champ_ID = plays_in.t2_champid2 OR 
    specific_champion.champ_ID = plays_in.t2_champid3 OR 
    specific_champion.champ_ID = plays_in.t2_champid4 OR 
    specific_champion.champ_ID = plays_in.t2_champid5
  )
WHERE 
  specific_champion.champ_name = '[specific champion name]';
  
SELECT champ_name
FROM role
WHERE role_name = 'Top';

SELECT champ_name
FROM role
WHERE tier = 'GOD';

CREATE TABLE games (
   game_ID varchar(12),
   duration int,
   season_ID int,
   winning_team int,
   champid1 varchar(20),
   s11 int,
   s12 int,
   champid2 varchar(20),
   s21 int,
   s22 int,
   champid3 varchar(20),
   s31 int,
   s32 int,
   champid4 varchar(20),
   s41 int,
   s42 int,
   champid5 varchar(20),
   s51 int,
   s52 int,
   ban1 varchar(20),
   ban2 varchar(20),
   ban3 varchar(20),
   ban4 varchar(20),
   ban5 varchar(20),
   champid6 varchar(20),
   s61 int,
   s62 int,
   champid7 varchar(20),
   s71 int,
   s72 int,
   champid8 varchar(20),
   s81 int,
   s82 int,
   champid9 varchar(20),
   s91 int,
   s92 int,
   champid10 varchar(20),
   s101 int,
   s102 int,
   ban6 varchar(20),
   ban7 varchar(20),
   ban8 varchar(20),
   ban9 varchar(20),
   ban10 varchar(20)
);
