<?php
/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_users()
{
    global $db_connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $password - password number of the user
 * @return object - mysqli_result
 */
function add_user($first_name, $last_name, $email, $password)
{
    global $db_connection;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = 'INSERT INTO users';
    $query .= ' (first_name, last_name, password, email)';
    $query .= " VALUES ('{$first_name}', '{$last_name}', '{$hashed_password}', '{$email}' )";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Get user by id
 * @param integer $id
 * @return Array or false
 */
// function get_user_by_id($id)
// {
//     global $db_connection;
//     $query = "SELECT * FROM users WHERE id = $id";
//     $result = mysqli_query($db_connection, $query);
//     if ($result->num_rows > 0) {
//         $user = mysqli_fetch_assoc($result);
//         return $user;
//     } else {
//         return false;
//     }
// }


function verify_password($password)
{
    global $db_connection;
    $query = "SELECT password FROM users WHERE id = {$_SESSION['user']['id']}";
    $result = mysqli_query($db_connection, $query);
    $password = mysqli_fetch_assoc($result);
    return password_verify($_POST['password'], $password['password']);
}

function get_user_by_email_and_password($email, $password)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db_connection, $query);

    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        $existing_hashed_password = $user['password'];
        $isPasswordCorrect = password_verify($password, $existing_hashed_password);
        if ($isPasswordCorrect) {
            return $user;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function create_guest_user(){
    global $db_connection;
    $query = 'INSERT INTO users';
    $query .= ' (guest)';
    $query .= " VALUES ('1')";
    $result = mysqli_query($db_connection, $query);
    if ($result) {
        $recentId = $db_connection->insert_id;
        get_user_by_id($recentId);
        // Create a user array in the SESSION variable and assign values to it
    }
         
}


function get_user_by_id($id)
{
    global $db_connection;
    
    $query = "SELECT * FROM users WHERE id = '$id'";
    
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = [
            'id' => $user['id'],
        ];
        return $user;
    }
    create_guest_user();
}

function delete_user_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}


?>