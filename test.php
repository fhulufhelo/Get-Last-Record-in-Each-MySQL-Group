<?php

$sql = "

SELECT
c.id, c.name,  c.email,
r.id, r.companyid, r.name,  r.email
FROM companytable c
LEFT JOIN (
 SELECT *
 FROM revisiontable 
 WHERE id 
 IN ( SELECT MAX(id) 
 FROM revisiontable 
 GROUP BY companyid )
)  r
ON a.cid=b.r.id

";
