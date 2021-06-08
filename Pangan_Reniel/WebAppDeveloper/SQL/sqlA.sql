SELECT emp.*, dept.department, MAX(sal.salary)  FROM employees as emp INNER JOIN salary as sal ON emp.salary_id=sal.id INNER JOIN departments as dept ON emp.department_id=dept.id;

