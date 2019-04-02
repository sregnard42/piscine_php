SELECT
    `title` AS `Title`, `summary` AS `Summary`, `prod_year`
FROM
    `film` F, `genre` G
WHERE
    F.id_genre = G.id_genre
AND
    lower(G.name) = 'erotic'
ORDER BY
    `prod_year` DESC;