<?php
date_default_timezone_set("Asia/Riyadh");
$pdo = new PDO('mysql:host=HOST;port=PORT;dbname=DBNAME;charset=utf8', 'UN', 'PW');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function newuser($fname, $lname, $phone, $email, $gender, $country, $city, $parrot, $subscribe)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO users (firstname, lastname, email , pnumber, country, city, parrot, gender, subscribe, create_date)
    VALUES (:firstname, :lastname, :email , :pnumber, :country, :city,:parrot, :gender, :subscribe, :create_date)");
    $statement->bindValue(':firstname', $fname);
    $statement->bindValue(':lastname', $lname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':pnumber', $phone);
    $statement->bindValue(':country', $gender);
    $statement->bindValue(':city', $country);
    $statement->bindValue(':parrot', $parrot);
    $statement->bindValue(':gender', $city);
    $statement->bindValue(':subscribe', $subscribe);
    $statement->bindValue(':create_date', date('Y-m-d H:i:s'));
    $statement->execute();
}

function checkuser($email)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * From users WHERE email = :email");
    $statement->bindValue(':email', $email);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function newfeedback($fname, $lname, $phone, $email, $gender, $country, $city, $parrot, $title, $message, $subscribe)
{
    global $errors;
    $user = checkuser($email);
    if ($user == false) {
        try {
            newuser($fname, $lname, $phone, $email, $gender, $country, $city, $parrot, $subscribe);
            global $pdo;
            $statement = $pdo->prepare("INSERT INTO feedbacks (title, message, user_email, create_date)
            VALUES (:title, :message, :user_email, :create_date)");
            $statement->bindValue(':title', $title);
            $statement->bindValue(':message', $message);
            $statement->bindValue(':user_email', $email);
            $statement->bindValue(':create_date', date('Y-m-d H:i:s'));
            $statement->execute();
            return true;
        } catch (Exception $e) {
            $errors[] = "Error while trying to instert feedback information";
            return false;
        }
    } else {
        $errors[] = "This user $email has been sent a feedback before try another email address";
        return false;
    }
}

function getAllFeedbacks()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT u.*,f.*
        FROM users u
        INNER JOIN feedbacks f on f.user_email = u.email");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
