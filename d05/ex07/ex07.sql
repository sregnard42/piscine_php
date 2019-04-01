SELECT `title`, `summary`
FROM `film` 
WHERE UPPER(`title`) LIKE '%42%'
OR UPPER(`summary`) LIKE '%42%'
ORDER BY duration ASC