SELECT UPPER(`last_name`) AS `NAME`, `first_name`, `price`
FROM user_card U, subscription S, member M
WHERE U.id_user = M.id_user_card
AND M.id_sub = S.id_sub
AND `price` > 42
ORDER BY
`last_name` ASC,
`first_name` ASC;