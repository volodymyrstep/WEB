
<?php
function generateAboutSection() {
    $aboutSection = '
    <section class="bg-green-500 -mt-12 py-16">
        <h1 class="text-center uppercase text-white text-4xl font-bold leading-none tracking-normal">About</h1>
        <div class="flex flex-row items-center justify-center py-4">
            <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
            <svg class="h-12 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
            </svg>
            <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
        </div>
        <div class="flex flex-col lg:flex-row max-w-lg md:max-w-2xl lg:max-w-3xl mx-auto">
            <div class="mx-6 text-white text-xl py-4">Freelancer is a free tailwind css theme created from Freelancer theme by Start Bootstrap. The entire template was written using only the default configuration file.</div>
            <div class="mx-6 text-white text-xl py-4">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</div>
        </div>
        <div class="flex justify-center py-8">
            <button class="bg-transparent hover:bg-white hover:text-black text-white border-2 border-white font-normal py-3 px-5 rounded-lg inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                </svg>
                <span>Free Download!</span>
            </button>
        </div>
    </section>
    ';

    return $aboutSection;
}



if (!function_exists('getUserLocation')) {
    function getUserLocation() {
       $ip = "2.16.212.0";
       $response = file_get_contents("http://ip-api.com/json/$ip");
       $data = json_decode($response);
        $locationInfo = array(
            'country' => $data->country,
            'region' => $data->regionName,
            'city' => $data->city,
            'latitude' => $data->lat,
            'longitude' => $data->lon
        );

        return $locationInfo;
    }
}
function current_year() {
    return date("Y");
}
?>


<?php

class House {
    public $price;
    public $name;
    public $address;
    public $contactPhone;
    public $image;
    public $bedrooms;
    public $bathrooms;
    public $discount;

    // Конструктор класу
    public function __construct($price, $name, $address, $contactPhone, $image, $bedrooms, $bathrooms,$discount) {
        $this->price = $price;
        $this->name = $name;
        $this->address = $address;
        $this->contactPhone = $contactPhone;
        $this->image = $image;
        $this->bedrooms = $bedrooms;
        $this->bathrooms = $bathrooms;
        $this->discount = $discount;
    }
   
    
  
    public function renderHTML() {
        $price = ($this->discount) ? renderPrice($this->price) : $this->price;
        $discount = ($this->discount) ? calculateDiscount($this->price) : '';
        
        return '
        <div class="max-w-sm w-full py-6 px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url(' . $this->image . ')">
                    <div class="flex justify-end">
                        <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <p class="uppercase tracking-wide text-sm font-bold text-gray-700">' . $this->name . '</p>

                    <p class="text-3xl text-gray-900">$' . $price . '</p>
                    <p class="text-3xl text-gray-900">' . $discount . '</p>
                    <p class="text-gray-700">' . $this->address . '</p>
                </div>
            
                <div class="flex p-4 border-t border-gray-300 text-gray-700">
                    <div class="flex-1 inline-flex items-center">
                        <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                        </svg>
                        <p><span class="text-gray-900 font-bold">' . $this->bedrooms . '</span> Bedrooms</p>
                    </div>
                    <div class="flex-1 inline-flex items-center">
                        <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                        </svg>
                        <p><span class="text-gray-900 font-bold">' . $this->bathrooms . '</span> Bathrooms</p>
                    </div>
                </div>
                <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                    <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                    <div class="flex items-center pt-2">
                        <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Tiffany Heffner</p>
                            <p class="text-sm text-gray-700">' . $this->contactPhone . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
}

?>

<?php
 function ifDiscount() {
    $discounted = rand(0, 1);
return $discounted;
}
function renderPrice($price) {
    return '<span style="color: red; text-decoration: line-through;">' . number_format($price, 3) . '</span>';
}

function calculateDiscount($price) {
    $discountPercentage = 0;
    $discountPercentage = rand(1, 30); 
    $discountedPrice = $price * (1 - $discountPercentage / 100);
    $finalprice=$price-$discountedPrice;
    return '<span style="font-size: 15px;">'.'Discounted price: $' . number_format(($price - $finalprice), 3).'</span>';
}
?>

<?php

class ContactInformation {
    public $name;
    public $email;
    public $phone;
    public $message;

    public function __construct($name, $email, $phone, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    echo "<section class='bg-white py-16'>";
    echo "<h2 class='text-center uppercase text-black text-2xl font-bold leading-none tracking-normal'>Інформація</h2>";
    echo "<div class='max-w-2xl mx-auto mt-8'>";
    echo "<pre>";
    echo "Name: $name\n";
    echo "Email: $email\n";
    echo "Phone: $phone\n";
    echo "Message: $message\n";
    echo "</pre>";
    echo "</div>";
    echo "</section>";

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bd_SQL";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>