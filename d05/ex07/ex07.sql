SELECT `last_name`, `first_name`, DATE(`birthdate`)
FROM user_card
WHERE YEAR(`birthdate`) = '1933'
ORDER BY `last_name` ASC