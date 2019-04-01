SELECT DATEDIFF(MAX(last_projection), MIN(release_date)) AS 'uptime'
FROM film
WHERE release_date != '0000-00-00'