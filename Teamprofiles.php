<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>GROUP 7 - TEAM PROFILE</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
    rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<section> 
    <div class="row">
        <h1>OUR TEAM</h1>
    </div>
    <div class="row">
        <?php
        $teamMembers = [
            [
                "name" => "Dannica Arciaga",
                "age" => "21 years old",
                "birthdate" => "June 18, 2003",
                "quote" => "Do good, and good will come back to you.",
                "image" => "https://assets.onecompiler.app/42qcmpfpx/42qcnbvnw/DANNICA.1%20(2).jpg"
            ],
            [
                "name" => "Guinever Bacunawa",
                "age" => "20 years old",
                "birthdate" => "August 13, 2004",
                "quote" => "Find joy in the ordinary.",
                "image" => "https://assets.onecompiler.app/42qcmpfpx/42qcnbvnw/GWEN1.jfif"
            ],
            [
                "name" => "Lauren P. Flores",
                "age" => "22 years old",
                "birthdate" => "April 17, 2002",
                "quote" => "Treat others the way you want to be treated.",
                "image" => "https://assets.onecompiler.app/42qcmpfpx/42qcnbvnw/LAUREN%20(4).jfif"
            ],
            [
                "name" => "Mary Rose A. Venegra",
                "age" => "20 years old",
                "birthdate" => "December 30, 2003",
                "quote" => "Start where you are. Use what you have. Do what you can.",
                "image" => "https://assets.onecompiler.app/42qcmpfpx/42qcnbvnw/MARYROSE1.jpg"
            ],
            [
                "name" => "Chelsea V. Patungan",
                "age" => "23 years old",
                "birthdate" => "August 13, 2001",
                "quote" => "You don't get what you wish for. You get what you work for.",
                "image" => "https://assets.onecompiler.app/42qcmpfpx/42qcnbvnw/CHELS1%20(4).jpg"
            ]
        ];

        foreach ($teamMembers as $member) {
            echo '<div class="column">';
            echo '<div class="card">';
            echo '<div class="img-container">';
            echo '<img src="' . $member["image"] . '"/>';
            echo '</div>';
            echo '<h3>' . $member["name"] . '</h3>';
            echo '<p>' . $member["age"] . '</p>';
            echo '<p>' . $member["birthdate"] . '</p>';
            echo '<p>"' . $member["quote"] . '"</p>';
            echo '<div class="icons">';
            echo '<a href="#"><i class="fab fa-instagram"></i></a>';
            echo '<a href="#"><i class="fab fa-linkedin"></i></a>';
            echo '</div>';
            echo '</div>'; // .card
            echo '</div>'; // .column
        }
        ?>
    </div>
</section>
</body>
</html>
