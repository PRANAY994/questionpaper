    <?php
    session_start();

    // Check if the username is set in the session or if the user came from the login page
    if (isset($_SESSION['username']) || isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'login.php') !== false) {
        // If the username is set in the session or the user came from the login page, display the user's name
        $welcomeMessage = '<li style="float:right;font-size:20px;background-color:rgb(85, 83, 86);padding-top:5px;display:block; padding: 16px 16px;"><a href="">' . $_SESSION['username'] . '</a></li>';
    } else {
        // If the username is not set in the session and the user didn't come from the login page, show the signup button
        $welcomeMessage = '<li style="float:right;padding-top:20px;font-size:20px;color: #f8f8f8;"><a href="signup">Sign Up</a></li>';
    }
    ?>


        
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>

            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                }

                header {
                    background-color: #0074D9;
                    color: #fff;
                    text-align: center;
                    padding: 20px;
                }

                h2 {
                    color: #0074D9;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                }

                .bu {
                    background-color: #0074D9;
                    color: #fff;
                    padding: 10px 20px;
                    border: none;
                    cursor: pointer;
                }


                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0px;
                    overflow: hidden;
                    background-color: rgb(85, 83, 86);
                }

                li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 16px 16px;
                    text-decoration: none;
                }

                li {
                    float: left;
                }

                body {
                    font-family: Arial, sans-serif;
                    transition: background-color 0.5s;
                }

                /* Light mode styles */
                .light-mode {
                    background-color: white;
                    color: black;
                }

                /* Dark mode styles */
                .dark-mode {
                    background-color: #222;
                    color: white;
                }

                .dark-mode-toggle {
                    position: fixed;
                    top: 5px;
                    right: 10px;
                    border-radius: 10px;
                }

                .select2-container--default .select2-selection--single {
                    background-color: white;
                    /* Replace with your desired background color */
                }

                .h {
                    width: 190px;
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    height: 30px;
                    border-radius: 5px;
                }

                .navbar ul li {
                    list-style: none;
                    margin: 0 20px;
                    display: inline-block;
                    position: relative;

                }

                .navbar ul li a {
                    text-decoration: none;
                    color: black;
                    text-transform: uppercase;
                    background-color: rgb(255, 255, 255);
                    border-radius: 30px;
                    left: 0;
                    bottom: 0;
                    transition: 0.5s;
                    border: none;
                    padding: 10px;
                    font-weight: bold;
                    font-size: 16px;

                }

                .navbar ul li::after {
                    content: '';
                    height: 3px;
                    width: 0;
                    background: rgb(255, 255, 255);
                    position: absolute;
                    left: 0;
                    bottom: -18px;
                    transition: 0.5s;
                }

                .navbar ul li:hover::after {
                    width: 100%;
                }

                .dark-mode-toggle {
                    position: fixed;
                    float: right;
                    top: 70px;

                }

                .lang {
                    border-radius: 30px;
                    display: block;
                    background-color: rgb(254, 254, 254);
                    color: rgb(0, 0, 0);
                    text-align: center;
                    padding: 13px;
                    text-decoration: none;
                    position: relative;
                    bottom: 2px;
                    font-weight: bold;

                }
            </style>
        </head>

        <body>
            <section class="homepage">
                <div class="navbar">
                    <ul>
                        <li><button class="dark-mode-toggle" onclick="toggleDarkMode()"> Dark Mode</button></li>
                        <li><img src="https://dt19wmazj2dns.cloudfront.net/wp-content/uploads/2023/10/logo.svg" width="200"
                                height="100" style="padding-left:30px;"></li>
                                <?php echo $welcomeMessage; ?>
                        <li style="float:right;padding-top:20px;font-size:20px;color: #f8f8f8;"><a href="signup">Contact us</a>
                        </li>
                        <li style="float:right;padding-top:20px;font-size:20px;color: #f8f8f8;"><a href="">About us</a></li>
                        <li style="float:right;padding-top:20px;">
                            <select class="lang">
                                <option value="English">English</option>
                                <option value="Korean">Korean</option>
                                <option value="UK">UK</option>
                                <option value="telugu">Telugu</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="boddy">
                <div
                    style="position: absolute; top: 110px; left:10px; width:400px; padding: 20px;height: 600px; background-color:rgb(187, 184, 184); color: black; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <form action="student.php" class="form-container" method="post" id="formcontainer1">
                        <h2 style="margin-top: 0; font-size: 24px;">Get Question Papers</h2>
                        <label for="degree" style="font-size: 18px; display: block; margin-bottom: 0;">DEGREE</label>
                        <p id="degree" style="margin-bottom: 0; margin-top: 0;">
                            <select id="degree_select"  name="degree_select" class="h" style="margin-bottom:5 px;">
                                <option value=""></option>
                                <option value="1">UNDER GRADUATE</option>
                                <option value="2">POST GRADUATE</option>
                            </select>
                        </p>
                        <br>
                        <label for="program" style="font-size: 18px; margin-top: 0; margin-bottom: 0;">PROGRAM</label>
                        <p id="program" style="margin-top: 0; margin-bottom: 0;">
                            <select id="program_select" class="h"  name="program_select">
                                <option value=""></option>
                                <option value="1" class="ug">B.TECH</option>
                                <option value="2" class="ug">BSC.Agri</option>
                                <option value="3" class="ug">BSC.Mass</option>
                                <option value="4" class="pg">M.tech</option>
                                <option value="5" class="pg">MSC</option>
                            </select>


                        </p>
                        <br>
                        <label for="semester"   name="semester_select" style="font-size: 18px; margin-top: 0; margin-bottom: 0;">SEMESTER</label>
                        <p id="semester" style="margin-top: 0; margin-bottom: 0;">
                            <select id="semester_select" class="h" name="semester_select">
                                <option value=""></option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                                <option value="7">VII</option>
                                <option value="8">VIII</option>
                            </select>
                        </p>
                        <br>
                        <label for="course_name" style="font-size: 18px; margin-top: 0; margin-bottom: 0;">COURSE NAME</label>
                        <p id="course_name" style="margin-top: 0; margin-bottom: 0;">
                            <select id="course_name" name="course_name" class="h" style="margin-bottom: 5px;">
                                <option value=""></option>
                                <option value="1" class="btech">DBMS</option>
                                <option value="2" class="btech">Digital Electronic Systems</option>
                                <option value="3" class="btech">Optimization Techniques</option>
                                <option value="4" class="btech">Advanced Programming</option>
                                <option value="5" class="bscagri">Horticulture</option>
                            </select>
                            </p>
                            <br>
                            <label for="course_code" style="font-size: 18px; margin-top: 0; margin-bottom: 0;">COURSE
                                CODE</label>
                        <p id="course_code" style="margin-top: 0; margin-bottom: 0;">
                            <select id="course_code" name="course_code" class="h" style="margin-bottom: 5px;">
                                <option value="" disabled selected></option>
                                <option value="19cse201">19cse201</option>
                                <option value="19cse202">19cse202</option>
                                <option value="19cse205">19cse205</option>
                                <option value="19ece284">19ece284</option>
                            </select>
                            </p>
                            <br>
                            <label for="year_val" style="font-size: 18px; margin-top: 0; margin-bottom: 0;">Year</label>
                        <p id="year_val" style="margin-top: 0; margin-bottom: 0;">
                            <select id="year_val" name="year_val" class="h" style="margin-bottom: 5px;">
                                <option value=" "></option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2029</option>
                            </select>
                            </p><br>
                            <label for="difficulty_level">Difficulty (Optional):</label>
                            <input type="radio" name="difficulty_level" value="easy">Easy
                            <input type="radio" name="difficulty_level" value="medium">Medium
                            <input type="radio" name="difficulty_level" value="hard">Hard<br><br>
                            <button type="submit" class="bu">Search</button>
                    </form>
                </div>
            
            </section>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
            <script>
                // Function to toggle dark mode
                function toggleDarkMode() {
                    const body = document.body;
                    if (body.classList.contains('dark-mode')) {
                        body.classList.remove('dark-mode');
                        body.classList.add('light-mode');
                    } else {
                        body.classList.remove('light-mode');
                        body.classList.add('dark-mode');
                    }
                }

                // Initialize select2 for course_name and course_code
                $(document).ready(function () {
                    $('#degree_select').on('change', function () {
                        var selectedDegree = $(this).val();
                        if (selectedDegree === '2') {
                            $('.pg').show(); // Show options with class 'pg'
                            $('.ug').hide(); // Hide options with class 'ug'
                            $('#semester_select option[value="five"]').hide(); // Hide semesters 5 and above
                            $('#semester_select option[value="six"]').hide();
                            $('#semester_select option[value="seven"]').hide();
                            $('#semester_select option[value="eight"]').hide();
                        } else if (selectedDegree === '1') {
                            $('.ug').show(); // Show options with class 'ug'
                            $('.pg').hide(); // Hide options with class 'pg'
                            $('#semester_select option').show(); // Show all semester options for UG
                        } else {
                            $('.pg, .ug').hide(); // Hide both PG and UG options if neither is selected
                            $('#semester_select option').show(); // Show all semester options
                        }
                    }).change(); // Trigger change on page load


                    $('#program_select').on('change', function () {
                        var selectedProgram = $(this).val();
                        if (selectedProgram === '1') {
                            $('.btech').show(); // Show options with class 'btech'
                            $('.bscagri').hide(); // Hide options with class 'bscagri'
                        } else if (selectedProgram === '2') {
                            $('.btech').hide(); // Hide options with class 'btech'
                            $('.bscagri').show(); // Show options with class 'bscagri'
                        } else {
                            $('.btech, .bscagri').hide(); // Hide both options if neither 'btech' nor 'agri' is selected
                        }
                    }).change(); // Trigger change on page load
                });
            </script>



            </script>


            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Function to handle form submission and AJAX request
                $('#formcontainer1').submit(function(event) {
                    event.preventDefault(); // Prevent the form from submitting traditionally

                    // Fetch form values
                    var formData = $(this).serialize();

                    // AJAX request to student.php
                    $.ajax({
                        type: 'POST',
                        url: 'student.php',
                        data: formData,
                        success: function(response) {
                            // Handle the received response (file paths)
                            var resultHTML = '<h2>Question Paper</h2><ul>';
                            if (response.length > 0) {
                                // Generate HTML for each file path
                                $.each(response, function(index, path) {
                                    resultHTML += '<li><a href="' + path + '" target="_blank">Question Paper ' + (index + 1) + ' LINK</a></li>';
                                });
                            } else {
                                resultHTML += '<li>No question paper found for the selected criteria.</li>';
                            }
                            resultHTML += '</ul>';

                            // Update the content on the page
                            $('#searchResult').html(resultHTML);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script>
    <!-- Place the searchResult div inside the section containing the form -->
    <section class="boddy" style="position: relative;">
        <!-- Existing form content -->

        <!-- Placeholder for search result -->
        <div id="searchResult" style="position: absolute; top: 0; right: 10px; width: 300px;">
            <!-- The search result will be displayed here -->
        </div>
    </section>


        </body>

        </html>
        