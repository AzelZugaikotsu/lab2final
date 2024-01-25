<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Sabanal's Personal Website"; ?></title>
  <style>
    body {
      background-color: BlanchedAlmond;
      padding: 20px;
      margin: 0;
      text-align: left; 
    }
    h1 {font-family: Times New Roman;} 
    h2 {font-family: Verdana;} 
    h3 {font-family: Courier New;} 
    strong {color: red;}
    em {color: purple;}
    p {font-family: Garamond;}
    img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
    }
    ol {
      list-style-position: inside;
      padding: 0;
      text-align: center;
    }
    .flex-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
	 .flex-container2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
	  text-align: center;
      display: none; /* Hide initially */
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .hidden {
      display: none;
    }
  </style>
  <script>
    // JavaScript class for handling website functionality
    class PersonalWebsite {
      constructor() {
        this.hobbiesArray = [
          { name: "Writing", image: "https://i.ibb.co/8bKTx9g/images-2.jpg" },
          { name: "Gaming", image: "https://i.ibb.co/1z22VLb/images.jpg" },
          { name: "Walking around town", image: "https://i.ibb.co/JxMkzQV/images-1.jpg" }
          // Add more hobbies as needed
        ];
      }

      toggleSections(sectionId) {
        const sections = document.querySelectorAll('.flex-container2');
        sections.forEach(section => {
          section.style.display = (section.id === sectionId) ? 'flex' : 'none';
        });

        const additionalContent = document.querySelectorAll('.hidden');
        additionalContent.forEach(content => {
          content.style.display = (sectionId === 'dog') ? 'block' : 'none';
        });
      }

      displayHobbies() {
        const hobbiesList = document.getElementById("hobbies-list");
        hobbiesList.innerHTML = "";

        this.hobbiesArray.forEach(hobby => {
          const listItem = document.createElement("li");
          listItem.innerHTML = `<strong>${hobby.name}</strong> <a href="${hobby.image}" target="_blank"><img src="${hobby.image}" alt="${hobby.name}"></a>`;
          hobbiesList.appendChild(listItem);
        });
      }

      // Function to change the background color
      changeBackgroundColor(color) {
        document.body.style.backgroundColor = color;
      }
    }

    // Create an instance of the PersonalWebsite class
    const myWebsite = new PersonalWebsite();

    // Display a welcome message using BOM
    window.onload = function() {
      alert("Welcome to My Personal Website!");
    };
  </script>
</head>
<body>

  <!-- Navigation dropdown -->
  <div class="dropdown">
    <h1> Menu </h1>
    <div class="dropdown-content">
      <a href="javascript:void(0);" onclick="myWebsite.toggleSections('introduction')">Introduction</a>
      <a href="javascript:void(0);" onclick="myWebsite.toggleSections('hobbies'); myWebsite.displayHobbies()">Hobbies</a>
      <a href="javascript:void(0);" onclick="myWebsite.toggleSections('dog')">Dog</a>
    </div>
  </div>

  <!-- Introduction section -->
  <div class="flex-container2" id="introduction">
    <div>
      <h2> Good Afternoon, My name is <strong>Alexus Sabanal</strong>.</h2>
      <p>I am a 23-year-old BSCS SF Student of Asia Pacific College. And I fully intend on completing this class through any means necessary. That being said, I do have a few weaknesses such as the habit of spacing out all the time. But of course, I do the best that I can to supplement them.</p>
    </div>
    <a href="https://ibb.co/x7F4XMP"><img src="https://i.ibb.co/MCBXZRW/20230531-111239.jpg" alt="20230531-111239" width="400" height="400"></a>
  </div>

  <!-- Hobbies section -->
  <div class="flex-container2" id="hobbies">
    <div style="margin: 0 auto;"> <!-- Center the content within the div -->
      <h2>These are some of my current hobbies:</h2>
      <ol id="hobbies-list">
        <?php foreach ($hobbiesArray as $hobby): ?>
          <li><strong><?php echo $hobby['name']; ?></strong> <a href="<?php echo $hobby['image']; ?>" target="_blank"><img src="<?php echo $hobby['image']; ?>" alt="<?php echo $hobby['name']; ?>"></a></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>

  <!-- Dog section -->
  <div class="flex-container2" id="dog">
    <div>
      <h2>But of course at the end of the day, I am nothing more than a regular old human being who, like most, strives to leave a good mark in this world during my fleeting lifetime. Just as how my dog wishes to do so too with his rather strange antics.</h2>
      <a href="https://imgbb.com/"><img src="https://i.ibb.co/Cm33XB4/20230623-170243.jpg" alt="20230623-170243" border="0" width="400" height="400"></a>
      <h1>Regardless, That Would Be All. Thank You Very Much and have a nice day.</h1>

      <!-- Display the current date -->
      <?php
        $currentDate = date('l, F j, Y');
        echo "<p style='text-align: center;'>Current Date: $currentDate</p>";
      ?>

      <!-- Buttons for Facebook and LinkedIn. -->
      <div style="text-align: center; margin-top: 20px;">
        <a href="https://www.facebook.com/alexusnorsaid/" target="_blank"><button>Facebook</button></a>
        <a href="https://www.linkedin.com/in/alexus-sabanal-b15712194/" target="_blank"><button>LinkedIn</button></a>
      </div>

      <!-- Button to change background color -->
      <div style="text-align: center; margin-top: 20px;">
        <button onclick="myWebsite.changeBackgroundColor('LightSkyBlue')">Change Background Color</button>
      </div>
    </div>
  </div>

</body>
</html>
