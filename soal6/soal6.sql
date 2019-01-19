SELECT
    hobi.id_person,
    person.name,
    GROUP_CONCAT(hobi.nama_hobi SEPARATOR ', ') AS person_hobi
FROM
    `hobi`
JOIN person ON hobi.id_person = person.id_person
GROUP BY
    hobi.id_person
ORDER BY
    person.name ASC