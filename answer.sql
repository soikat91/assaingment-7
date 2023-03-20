-- a.Quesion: Write a query to select all columns and rows from the employees table.
SELECT * FROM `employees`

-- Explanation:First I have selected table and  used * for show all table record.




-- b.Quesion: Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

 SELECT name , salary FROM `employees` WHERE salary>50000

--Explanation:First I have selected  employees name and salary then i have used where condition which employees salary greater than 50000 taka.




--c.Quesion: Write a query to calculate the average salary of all employees.

SELECT AVG(salary) as Average_Salary FROM `employees`

--Explanation: I have used AVG Aggregate Functions  for find  all employee salary average.





--d.Quesion: Write a query to count the number of employees who work in the "Marketing" department.

    SELECT
        department.name,
        COUNT(*) AS Total_Employee
    FROM
        employees
    JOIN department ON employees.department_id = department.id
    WHERE
        department.name = "Marketing"

--Explanation: I have joined two tables using Join Aggregate Functions and count all employee who is work Marketing department using COUNT Aggregate Functions .





--e.Quesion: Write a query to update the salary column of the employee with an id of 1001 to 60000

  UPDATE  employees SET salary=60000 WHERE id=1001

--Explanation: I have updated salary using UPDATE and SET  update value . 




--f.Quesion :  Write a query to delete all employees whose salary is less than 30000.

 DELETE FROM employees where salary<30000

--Explanation: I have deleted employee salary which was less than 30000 using DELETE .




--a.Quesion:Write a query to select all columns and rows from the departments table.

SELECT * FROM department

--Explanation: I have showed all  table  data using  * Aggregate Functions




--b.Quesion:Write a query to select only the name and manager columns of the "Finance" department.

SELECT
    employees.name,
    department.manager
FROM
    department
JOIN employees ON department.id = employees.department_id
WHERE
    department.name = "Finance"

--Explanation: I have joined two table which is department and employee.Select employee name and department manager and found which employee worked in Finance department






--c.Quesion:Write a query to calculate the total number of employees in each department.

SELECT
    department.name,
    COUNT(*) AS Total_Employee
FROM
    employees
JOIN department ON department.id = employees.department_id
GROUP BY
    department.name

--Explanation:joined two table which is employee and department. found total employee work in each department using GROUP By Aggregate Functions






--d.Quesion:Write a query to insert a new department called "Research" with a manager named "John Doe".

INSERT INTO `department`(`id`, `name`, `manager`) VALUES ('1','Research','Jhon Doe')

--Explanation:I have inserted data department table using Insert .