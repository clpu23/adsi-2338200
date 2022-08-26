-- Show all pokemons
SELECT *
    -> FROM pokemons;

-- Show a column name of pokemon
SELECT name
    -> FROM pokemons;

    
-- Show many columns
SELECT name, speed
    -> FROM pokemons;

-- Show values distincts
SELECT DISTINCT type FROM pokemons;

-- Show only type reigsters
SELECT *
FROM pokemons
WHERE type = 'Water';

SELECT *
FROM pokemons
WHERE type = 'Water'
OR tyoe = 'Electric';

-- More than >
SELECT * 
FROM pokemons
WHERE strength > 1000;

-- <> (DIfferent)
SELECT *
FROM pokemons
WHERE type <> 'Water';

--AND 
SELECT *
FROM pokemons
WHERE type = 'Water'
AND speed > 80;

--BETWEEN
SELECT *
FROM pokemons
WHERE stamina
BETWEEN 200
AND 300;

--ORDER BY: Ascendant
SELECT * 
FROM pokemons
ORDER BY strength
ASC;

SELECT *
FROM pokemons
ORDER BY strength
ASC; 

--ORDER BY: Descendant
SELECT * 
FROM pokemons
ORDER BY strength;
DESC; 

SELECT *
FROM pokemons
ORDER BY speed > 100
ORDER BY speed DESC; 

--LIMIT
SELECT *
FROM pokemons
LIMIT 10;

--OFFSET
SELECT *
FROM pokemons
LIMIT 10 OFFSET 10;

--LIKE: search
--show all records init with 'A'
SELECT * 
FROM pokemons 
WHERE type 
LIKE "w%";

--show all results that end with 'c'
SELECT * 
FROM pokemons 
WHERE type 
LIKE "%c%";

--show all results that contains 'ma'
SELECT * 
FROM pokemons 
WHERE name 
LIKE "%ma%";

--show resul 'pikachu'
SELECT *
FROM pokemons
WHERE name
LIKE "P_K_C_U";

--show all results that not contains 'ma'
SELECT *
FROM pokemons
WHERE name
NOT LIKE  "%ma%";

--show results with many values using 'IN'
SELECT *
FROM pokemons
WHERE type
IN ('Fire', 'Electric');

--Alias
SELECT t.name AS name_trainer,
       p.name AS name_pokemon,
       p.type AS type_pokemon
FROM trainers AS t, pokemons AS p 
WHERE t.id = p.trainer_id;

SELECT COUNT (p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t 
WHERE t.ID

# inner join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
INNER JOIN gyms
ON trainers.gym_id = gyms.id
INNER JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

# left join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id;

SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

SELECT name FROM trainers
UNION
SELECT name FROM gyms
UNION
SELECT name FROM pokemons;

CREATE VIEW view_pokemons AS
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;