<?php
namespace App;


require_once __DIR__."/vendor/autoload.php";

echo "Hello world \n";

/*
✅ 1.Files Class

$file1 = new Files();
echo $file1->displayContent("test.txt");
*/


/*
// ✅2.Employee Salary

$emp1=new Employee(101, "Faisal ahmed", 4);
echo $emp1->getName();
*/


/*
✅3. Student Class

$student1 = new Student(51, 32, 88);

$student1Results = $student1->examResults();

echo "🎯Student1 Result : \n";
foreach ($student1Results as $subject => $result) {
    echo "{$subject} : {$result} \n";
}
*/


/*

/*
✅4. Implement Method Chaining for Posts Class

$post1 = new Posts("This is the Post Content");

$content = $post1->printContent()->content;
echo $content . "\n";
// echo $post1->content;

*/

/*
//✅5. Inheritance

echo "Dog \n";
$dog1 = new Dog("Hush Puppies");
$dog1->makeSound();
$dog1->doesHunting();
echo "xxxxxxxxxxxxx \n";
echo "Tiger \n";
$tiger1 = new Tiger("Royal Bengal Tiger", true);
$tiger1->makeSound();
$tiger1->doesHunting();

*/


// ✅ 6. Overriding

/*
$doctor=new Doctor();
echo $doctor->calculateFees(2);
echo "\n";

$specialist=new Specialist();

echo $specialist->calculateFees(2);
*/


/*
// ✅ 7. Final Keyword

$bank=new Bank("Exim Bank");

$user1= new User("Faisal ahmed");
$user2=new User("Abdur Rahman Talha",3000);

$bank->addUser($user1);
$bank->addUser($user2);

$user1->deposit(500);
$user2->withdraw(200);

echo "Bank: ".$bank->getName()."\n";
echo "Users: \n";

foreach($bank->getUsers() as $user){
    echo  "-". $user->getName(). ": \$" .$user->getBalance()."\n";
}

*/


/*
// ✅ 8. Interface

// Example : Car

$sportsCar = new SportsCar();
$sportsCar->setModel("Ferrari");
echo $sportsCar->getModel();


// Example: Phone

$iPhone7 = new Ios();
$iPhone7->makeCall(12321313);
$iPhone7->sendMessage(12321313, "Learning Interface.");
*/

/*
✅ 9. Abstract

// Example: Car

$car1 = new SportsCar();
$car1->applyBreak();
$car1->hello();


// Example: Database

$db1=new DBConnection();
$db1->setConnection("Test");
echo $db1->getConnection();
*/

/*
// ✅ 10. Static Method and Properties

// Example a: Calculator

Calculator::add(1, 2);
echo Calculator::$result;

// Example b: FileHelper

echo FilesHelper::hasData("test.txt");


// Example c: StringHelper

$string = "Hello world";

echo "The number of vowel in {$string} is : " . StringHelper::countVowel($string);
*/


/*
✅ 11. Polymorphism

// Example 1: Phone

function makePhoneCall(Phone $phone, $number){
    $phone->makeCall($number);
}

function sendPhoneMessage(Phone $phone, $number, $message){
    $phone->sendMessage($number, $message);
}

$IPhone=new IPhone();

makePhoneCall($IPhone,1234567890);
sendPhoneMessage($IPhone,1234567890,"Hello from iPhone");

$androidPhone=new AndroidPhone();
makePhoneCall($androidPhone,1234567890);
sendPhoneMessage($androidPhone,1234567890, "Hello from Android");


// Example 2: Animal


(new Dog())->bark();
(new Cat())->bark();

*/


/*
✅ 12. Magic Methods

// Example 1.: __call 

$posts = new Posts();
$posts->createPosts("This is a sample posts");


// Example 2: __debugInfo()

$db = new Database("Oracle", "Students", "tbl_users");

var_dump($db);

// Example 3: Magic Methods

$user1 = new Users("Faisal ahmed");
$user1->username = "Talha";
echo $user1->username;
echo $user1;
var_dump($user1);


// Example 4 : __set() and __get() method

$student1 = new Student();
$student1->id = "Test \n";
echo $student1->id . "\n";

// Example 5 : __toString() method

$teacher = new Teacher();
echo $teacher;

*/










