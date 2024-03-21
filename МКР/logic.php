<?php

// Функція для отримання поточного року
function current_year() {
    return date("j - F - Y ");  
}

// Клас, що представляє будинок
class House {
   
    public $title;
    public $description;
    public $image_url;
    

    public function __construct($title, $description, $image_url) {
        $this->title = $title;
        $this->description = $description;
        $this->image_url = $image_url;
    }
   
    
    // Метод для виведення HTML-представлення будинку
    public function renderHTML() {
        return '
        <div class="max-w-sm w-full py-6 px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url(' . $this->image_url . ')">
                    <div class="flex justify-end">
                        <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <p class="uppercase tracking-wide text-sm font-bold text-gray-700">' . $this->title . '</p>
                    <p class="text-gray-700">' . $this->description . '</p>
                </div>
            </div>
        </div>
        ';
    }
}

// Клас, що представляє контактну інформацію
class ContactInformation {
   
    public $email;
  

    public function __construct($email) {
        $this->email = $email;
    }
}

// Обробник форми, який відправляє контактну інформацію в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    echo "<section class='bg-white py-16'>";
    echo "<h2 class='text-center uppercase text-black text-2xl font-bold leading-none tracking-normal'>Received Information</h2>";
    echo "<div class='max-w-2xl mx-auto mt-8'>";
    echo "<pre>";
    echo "Email: $email\n";
    echo "</pre>";
    echo "</div>";
    echo "</section>";

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "modul_SQL";

    // Підключення до бази даних
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Виконання запиту на вставку інформації в базу даних
    $sql = "INSERT INTO Subscriptions (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Закриття з'єднання з базою даних
    $conn->close();
}
?>
