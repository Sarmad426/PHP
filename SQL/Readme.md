# SQL

SQL (Structured Query Language) is a domain-specific language used for managing and manipulating relational databases. It allows you to perform various operations on the data stored in a database, such as creating, retrieving, updating, and deleting records. Below, I'll provide examples of common CRUD (Create, Read, Update, Delete) operations using SQL, documented in Markdown format.

## SQL Queries Guide

### Create Table

To create a new table in a database, you can use the `CREATE TABLE` statement.

```sql
CREATE TABLE employees (
    employee_id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    hire_date DATE
);
```

### Insert Data

You can add new records to a table using the `INSERT INTO` statement.

```sql
INSERT INTO employees (employee_id, first_name, last_name, email, hire_date)
VALUES (1, 'John', 'Doe', 'johndoe@example.com', '2023-01-15');

INSERT INTO employees (employee_id, first_name, last_name, email, hire_date)
VALUES (2, 'Jane', 'Smith', 'janesmith@example.com', '2023-02-20');
```

### Read Data (SELECT)

To retrieve data from a table, you can use the `SELECT` statement.

```sql
-- Retrieve all records from the employees table
SELECT * FROM employees;

-- Retrieve specific columns
SELECT first_name, last_name FROM employees;

-- Filter records using WHERE clause
SELECT * FROM employees WHERE hire_date > '2023-01-01';
```

### Update Data

You can modify existing records using the `UPDATE` statement.

```sql
-- Update an employee's email
UPDATE employees
SET email = 'newemail@example.com'
WHERE employee_id = 1;
```

### Delete Data

To remove records from a table, you can use the `DELETE` statement.

```sql
-- Delete an employee record
DELETE FROM employees
WHERE employee_id = 2;
```

### Delete Table

To delete an entire table from the database, you can use the `DROP TABLE` statement.

```sql
DROP TABLE employees;
```

### Other Common Database Operations

Here are some other common SQL operations:

- Create a database:

  ```sql
  CREATE DATABASE mydatabase;
  ```

- Switch to a different database:

  ```sql
  USE mydatabase;
  ```

- Rename a table:

  ```sql
  ALTER TABLE old_table RENAME TO new_table;
  ```

- Add a new column to a table:

  ```sql
  ALTER TABLE employees ADD COLUMN phone_number VARCHAR(15);
  ```

- Create an index for faster data retrieval:

  ```sql
  CREATE INDEX idx_email ON employees (email);
  ```

- Join tables to combine data from multiple sources:

  ```sql
  SELECT employees.first_name, departments.department_name
  FROM employees
  JOIN departments ON employees.department_id = departments.department_id;
  ```

These are just a few of the common SQL operations. SQL is a powerful language for managing and manipulating data in relational databases.
