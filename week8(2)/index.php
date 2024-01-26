<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

// PersonalWebsite class
class PersonalWebsite {
    public $hobbiesArray;

    public function __construct() {
        $this->hobbiesArray = [
            ["name" => "Writing", "image" => "https://i.ibb.co/8bKTx9g/images-2.jpg"],
            ["name" => "Gaming", "image" => "https://i.ibb.co/1z22VLb/images.jpg"],
            ["name" => "Walking around town", "image" => "https://i.ibb.co/JxMkzQV/images-1.jpg"]
        ];
    }

    public function displayHobbies() {
        $hobbiesList = "";
        foreach ($this->hobbiesArray as $hobby) {
            $hobbiesList .= "<li><strong>{$hobby['name']}</strong> <a href=\"{$hobby['image']}\" target=\"_blank\"><img src=\"{$hobby['image']}\" alt=\"{$hobby['name']}\"></a></li>";
        }
        return $hobbiesList;
    }

    public function changeBackgroundColor($color) {
        echo "<script>document.body.style.backgroundColor = '{$color}';</script>";
    }
}

// Test input function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Form validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validation logic...
}

// Create an instance of the PersonalWebsite class
$myWebsite = new PersonalWebsite();
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<!-- Display hobbies -->
<h2>These are some of my current hobbies:</h2>
<ol>
  <?php echo $myWebsite->displayHobbies(); ?>
</ol>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
