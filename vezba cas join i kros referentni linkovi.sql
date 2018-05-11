SELECT
	p.id, 
	p.title,
    c.category
FROM
	categories c,
	posts p,
    posts_category_link pc
WHERE
	p.id = pc.pid and
    c.id = pc.cid;

-- ***********************    
    
SELECT
	p.title,
    u.id,
    u.firstname,
    u.lastname    
FROM
	posts p,
    users u
WHERE
	u.id = p.uid;
    
-- ***********************

SELECT
	u.firstname,
    c.category
    
FROM
	posts p,
	users u,
    posts_category_link pc,
    categories c
where
	u.id = p.uid and
    p.id = pc.pid and
    c.id = pc.cid;
    
-- **************************

SELECT
	p.id, 
	p.title,
    c.category
FROM
	posts p
JOIN
	posts_category_link pc
    ON p.id = pc.pid
JOIN
	categories c
    ON c.id = pc.cid;
    
-- *************************

SELECT
	p.title,
    u.id,
    u.firstname,
    u.lastname    
FROM
	users u
JOIN
	posts p
    on u.id = p.uid;
    
-- *********************


SELECT
	u.firstname,
    c.category
FROM
	users u
JOIN
	posts p
	on p.uid = u.id
JOIN
	posts_category_link pc
    on p.id = pc.pid
JOIN
    categories c
    on c.id = pc.cid;
    
-- *************************
    
    

    
    


    

    
    