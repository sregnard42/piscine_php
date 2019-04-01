SELECT
G.id_genre AS 'id_genre',
G.name AS 'name_genre',
D.id_distrib AS 'id_distrib',
D.name AS 'name_distrib',
F.title AS 'title_film'

FROM
film F,
genre G,
distrib D

WHERE
G.id_genre BETWEEN 4 AND 8
AND F.id_genre = G.id_genre
AND F.id_distrib = D.id_distrib