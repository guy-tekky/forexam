SELECT emp.name  FROM employees as emp INNER JOIN departments as dept ON emp.department_id=dept.id WHERE dept.department="IT" AND emp.date_hired>="2018-01-01";

