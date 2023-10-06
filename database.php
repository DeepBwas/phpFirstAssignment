<?php
class Database {
    // Private property to hold the database connection
    private $connection;

    // Constructor method that is automatically called when an object is created
    function __construct() {
        // Call the connect_db() method to establish a database connection
        $this->connect_db();
    }

    // Method to establish a database connection
    public function connect_db(){
        // Attempt to connect to the database using mysqli_connect
        $this->connection = mysqli_connect('172.31.22.43', 'Deep200554124', 'cj2pYFO2vY', 'Deep200554124');

        // Check if the connection was successful; if not, display an error message and exit
        if(mysqli_connect_error()){
            die("Database Connection Failed" . mysqli_connect_error());
        }
    }

    // Method to insert a new record into the database
    public function create($pizzaName, $firstName, $lastName, $email, $phone, $streetAddress, $city, $province, $pizzaPrice) {
        // Sanitize user inputs to prevent SQL injection
        $pizzaName = $this->sanitize($pizzaName);
        $firstName = $this->sanitize($firstName);
        $lastName = $this->sanitize($lastName);
        $email = $this->sanitize($email);
        $phone = $this->sanitize($phone);
        $streetAddress = $this->sanitize($streetAddress);
        $city = $this->sanitize($city);
        $province = $this->sanitize($province);
        $pizzaPrice = (float) $pizzaPrice;

        // Use a prepared statement to safely insert data into the database
        $stmt = $this->connection->prepare("INSERT INTO pizzaEaters (pizzaName, firstName, lastName, email, phone, streetAddress, city, province, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssd", $pizzaName, $firstName, $lastName, $email, $phone, $streetAddress, $city, $province, $pizzaPrice);

        // Execute the prepared statement; if successful, return true; otherwise, return false
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Method to retrieve data from the database
    public function read($id = null) {
        $sql = "SELECT * FROM pizzaEaters";
        if ($id) {
            $sql .= " WHERE id = $id";
        }
        // Execute the SQL query and store the result in $res
        $res = mysqli_query($this->connection, $sql);
        return $res; // Return the query result
    }

    // Method to sanitize user input to prevent SQL injection
    public function sanitize($var) {
        // Use mysqli_real_escape_string to escape special characters in the input
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return; // Return the sanitized input
    }
}

// Create an instance of the Database class and store it in the $database variable
$database = new Database();
?>
