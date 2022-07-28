<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table, th, tr, td {
            border: 2px solid #2c2222;
            padding: 5px 10px;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php

class Employee
{
    public $firstName;
    public $lastname;
    public $age;
    public $salary;
    public $company_name;
    public $designaion;


    function __construct($firstName, $lastname, $age, $salary, $company_name, $designation)
    {
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->salary = $salary;
        $this->company_name = $company_name;
        $this->designaion = $designation;
    }

//    getters

    function getFirstName()
    {
        return $this->firstName;
    }

    function getLastName()
    {
        return $this->lastname;
    }

    function getAge()
    {
        return $this->age;
    }

    function getCompany()
    {
        return $this->company_name;
    }

    function getSalary()
    {
        return $this->salary;
    }

    function getDesignation()
    {
        return $this->designaion;
    }

}


//objects

$employee1 = new Employee('Sagar', 'Sain', '23', '30000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee2 = new Employee('Akansha', 'Wadkar', '22', '30000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee3 = new Employee('Shivam Singh', 'Parihar', '23', '30000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee4 = new Employee('Ritesh', 'Rana', '23', '30000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee5 = new Employee('Rohan', 'Dhakad', '23', '40000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee6 = new Employee('Yash', 'Nagar', '24', '50000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee7 = new Employee('Rahul', 'Sharma', '24', '30000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee8 = new Employee('Ram', 'Kishan', '26', '90000', 'Sigma Infosolutions Ltd', 'Senior Software Engineer');
$employee9 = new Employee('Rohit', 'Agrawal', '24', '30000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');
$employee10 = new Employee('Mohit', 'Setti', '24', '40000', 'Sigma Infosolutions Ltd', 'Associate Software Engineer');


//priting


?>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Company Name</th>
        <th>Designation</th>
    </tr>
    <tr>
        <td><?php echo $employee1->getFirstName(); ?></td>
        <td><?php echo $employee1->getLastName(); ?></td>
        <td><?php echo $employee1->getAge(); ?></td>
        <td><?php echo $employee1->getSalary(); ?></td>
        <td><?php echo $employee1->getCompany(); ?></td>
        <td><?php echo $employee1->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee2->getFirstName(); ?></td>
        <td><?php echo $employee2->getLastName(); ?></td>
        <td><?php echo $employee2->getAge(); ?></td>
        <td><?php echo $employee2->getSalary(); ?></td>
        <td><?php echo $employee2->getCompany(); ?></td>
        <td><?php echo $employee2->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee3->getFirstName(); ?></td>
        <td><?php echo $employee3->getLastName(); ?></td>
        <td><?php echo $employee3->getAge(); ?></td>
        <td><?php echo $employee3->getSalary(); ?></td>
        <td><?php echo $employee3->getCompany(); ?></td>
        <td><?php echo $employee3->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee4->getFirstName(); ?></td>
        <td><?php echo $employee4->getLastName(); ?></td>
        <td><?php echo $employee4->getAge(); ?></td>
        <td><?php echo $employee4->getSalary(); ?></td>
        <td><?php echo $employee4->getCompany(); ?></td>
        <td><?php echo $employee4->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee5->getFirstName(); ?></td>
        <td><?php echo $employee5->getLastName(); ?></td>
        <td><?php echo $employee5->getAge(); ?></td>
        <td><?php echo $employee5->getSalary(); ?></td>
        <td><?php echo $employee5->getCompany(); ?></td>
        <td><?php echo $employee5->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee6->getFirstName(); ?></td>
        <td><?php echo $employee6->getLastName(); ?></td>
        <td><?php echo $employee6->getAge(); ?></td>
        <td><?php echo $employee6->getSalary(); ?></td>
        <td><?php echo $employee6->getCompany(); ?></td>
        <td><?php echo $employee6->getDesignation(); ?></td>
    </tr>
    <tr>
        <td><?php echo $employee7->getFirstName(); ?></td>
        <td><?php echo $employee7->getLastName(); ?></td>
        <td><?php echo $employee7->getAge(); ?></td>
        <td><?php echo $employee7->getSalary(); ?></td>
        <td><?php echo $employee7->getCompany(); ?></td>
        <td><?php echo $employee7->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee8->getFirstName(); ?></td>
        <td><?php echo $employee8->getLastName(); ?></td>
        <td><?php echo $employee8->getAge(); ?></td>
        <td><?php echo $employee8->getSalary(); ?></td>
        <td><?php echo $employee8->getCompany(); ?></td>
        <td><?php echo $employee8->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee9->getFirstName(); ?></td>
        <td><?php echo $employee9->getLastName(); ?></td>
        <td><?php echo $employee9->getAge(); ?></td>
        <td><?php echo $employee9->getSalary(); ?></td>
        <td><?php echo $employee9->getCompany(); ?></td>
        <td><?php echo $employee9->getDesignation(); ?></td>
    </tr>

    <tr>
        <td><?php echo $employee10->getFirstName(); ?></td>
        <td><?php echo $employee10->getLastName(); ?></td>
        <td><?php echo $employee10->getAge(); ?></td>
        <td><?php echo $employee10->getSalary(); ?></td>
        <td><?php echo $employee10->getCompany(); ?></td>
        <td><?php echo $employee10->getDesignation(); ?></td>
    </tr>
</table>

<?php
?>
</body>
</html>