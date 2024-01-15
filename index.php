<?php
require "php/Courses.php";

?>

<?php
    $course_code = null;

    if(isset($_POST['submit'])){

    $course_code = $_POST["selectOption"];

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDM-Newbie-Gator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="head_nav">

        <div id="udm_logo_schoolname" >
            <img class="SEAL_LOGO" src="material_images/Universidad_de_Manila_seal.png" alt="udm_seal">
            <!-- <h1 id="NewbieGator">NewbieGator</h1> -->

            <div>

                <h1 class="school_name">Universidad De Manila</h1> 
                <h3 class="school_name">Former City Collge of Manila</h3>

            </div>
            <!-- <img class="SEAL_LOGO" id="Manila_Logo" src="material_images/manila_logo.png" alt="manila_logo   "> -->

            <!-- this is the div for main navigatio -->

           
        </div>

        <div class="course_form_child">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
                <select id="selectOption" name="selectOption" class="selection_style">
                    <option class="option_style" disabled selected>Select Course</option>
                    <option class="option_style" value="BSIT">Bachelor of Science in Information Technology</option>
                    <option class="option_style" value="BSEE">Bachelor of Science in Electronic Engineering</option>
                    <option class="option_style" value="BSCE">Bachelor of Science in Computer Engineering</option>
                    <option class="option_style" value="BSIN">Bachelor of Science in Nursing</option>
                    <option class="option_style" value="BSPT">Bachelor of Science in Physical Therapy</option>
                    <option class="option_style" value="BSCrim">Bachelor of Science in Criminology</option>
                    <option class="option_style" value="BSEDPE">Bachelor in Physical Education Major in School of Physical Education</option>
                    <option class="option_style" value="BSED_English">Bachelor of Science Major in English</option>
                    <option class="option_style" value="BSED_GeneralScience">Bachelor of Science Major in General Science</option>
                    <option class="option_style" value="BSED_Mathematics">Bachelor of Science Major in Mathematics</option>
                    <option class="option_style" value="BSED_SocialStudies">Bachelor of Science Major in Social Studies</option>
                    <option class="option_style" value="CBA_Accountancy">Bachelor of Science in Accountancy</option>
                    <option class="option_style" value="CBA_AccountancyInfo">Bachelor of Science in Accountancy Information System</option>
                    <option class="option_style" value="BSBA_Economics">BS in Bussiness Administration Major in Economics</option>
                    <option class="option_style" value="BSBA_HumResources">Bs in Business Administration Major in Human Resources</option>
                    <option class="option_style" value="CollegeOfLaw">College of Law</option>
                    <option class="option_style" value="CAS_Com">Bachelor of Arts in Communications</option>
                    <option class="option_style" value="CAS_PolScie">Bachelor of Arts in Political Science</option>
                    <option class="option_style" value="CAS_Admin">Bachelor of Arts in Administration</option>
                    <option class="option_style" value="CAS_Psycho">Bachelor of Science in Psychology</option>
                    <option class="option_style" value="CAS_SocialWork">Bachelor of Science in Social Work</option>
        

                </select>
                <input class="load_button" type="submit" name="submit" value="Load Info">
            </form>

        </div>

        



    </div>

    <div class="container">

        <div class="MissionVision">

            <div class="paragraphMissionVision">
                
                <h2 class="MissionVision_header">Mission</h2>
                
                <p class="school_MissionVision">Universidad de Manila is committed to provide equal opportunities by developing the learners’ knowledge, skills, and values, through quality education and dynamic technology-driven systems, in a diverse yet inclusive environment for learning, research, and community engagement. </p>

                <h2 class="MissionVision_header">Vision</h2>

                <p class="school_MissionVision">A leading Higher Education Institution that prepares visionary and ethical leaders who  shall create a positive impact to society.</p>


            </div>
            

            <div>
                <img class="udm_tour" src="material_images/udm.gif">
            </div>
        

        </div>

        


        <div class="Course_info_panel">

           <div class="InfoBoard">
            <h1>Information Board</h1>
           </div>


            <div class="udm_history_location">

                <div class="udm_history">
                    <h2 id="university_history">University History</h2>

                    <p id="udm_history_value">Universidad de Manila, also referred to by its acronym UdM, is a public coeducational city government funded higher education institution in Manila, Philippines. It was founded in April 26, 1995 with the approval by Mayor Alfredo Lim of Manila City Ordinance (MCO) No. 7885 “An Ordinance Authorizing the City Government of Manila to Establish and Operate the Dalubhasaan ng Maynila (City College of Manila)". It offers both academic and technical-vocational courses and programs.</p>

                </div>

                <div class="UDM_Location_Info">

                    <img class="map_image" src="material_images/map_image.png">
                    <h2 id="university_location">Location</h2>
                    <p class="university_location_value"> Cecilia Muñoz Street corner Antonio J. Villegas Street, Mehan Gardens, Ermita.</p>

                    
                    <p class="direct_maps"><a href="https://www.google.com/maps/dir//659-A+Cecilia+Mu%C3%B1oz+St,+Ermita,+Manila,+1000+Metro+Manila/@14.5915515,120.8991687,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397ca18d1ebbc55:0xd017325c95111277!2m2!1d120.9815705!2d14.5915659?entry=ttu" target="_blank">Direct to maps!</a></p>

                </div>


                    <div class="udm_history">
                    <h2 id="university_history">General Announcements</h2>

                    <p id="udm_history_value">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. </p>

                </div>

            </div>

        </div>

        <!-- this the area to display the result of the selection form-->

        <div class="CourseInfoPanel">

            <?php
                
                if($course_code != null){
                    $SELECTED_COURSE = new SelectedCourse();
                    $COURSE = $SELECTED_COURSE->get_CourseInfo($course_code);
                    ?>

                    <div class="course_info">

                        <h2 id="university_history">Overview</h2>
                        <p class="overview_header">The <em><?php echo $COURSE->course_name; ?> </em> is part of <em><?php echo $COURSE->college_dept; ?></em></p>
                        <p class="overview_description"><?php echo $COURSE->overview;?></p>

                    </div>

                    <div class="faculty_list">

                        <?php
                            $i = 0;
                            while($i < $COURSE->faculty_count){

                        ?>
                        
                            <div class="faculty_row">

                                <?php 
                                if($i < $COURSE->faculty_count){
                                ?>
                                
                                    <div class="faculty_col">
                                        <img class="profile" src="material_images/teacher-profile.png">
                                        <p class="faculty_name">Faculty <?php echo $i + 1; ?></p>
                                    </div>

                                <?php
                                $i++;
                                }
                                ?>
                                
                                <?php 
                                if($i < $COURSE->faculty_count){
                                ?>
                                
                                    <div class="faculty_col">
                                        <img class="profile" src="material_images/teacher-profile.png">
                                        <p class="faculty_name">Faculty <?php echo $i + 1; ?></p>
                                    </div>

                                <?php
                                $i++;
                                }
                                ?>
                                                           
                            </div>

                        <?php
                        }
                        ?>

                        

                    </div>
                    
                <?php
                }
            ?>

        


            



        </div>


    </div>

    <div class="Abouts">

            <div class="other_service">
                <p class="font_highlights">Services</p>
                <p><a class="link_white" href="">Admission</a></p>
                <p><a class="link_white" href="">Student Portal</a></p>
                <p><a class="link_white" href="">Faculty Portal</a></p>
            
            </div>

            <div class="contacts_area">
                <p class="font_highlights">Contacts</p>
                <p class="emails">registraroffice@udm.edu.ph</p>
                <p class="emails">treasuryoffice@udm.edu.ph</p>
                <p class="emails">udmmalumni.official@gmail.com</p>
                
            </div>

            <div class="social_media">
                <p class="font_highlights">Visit Social Media</p>
                <p><a class="link_white" href="https://www.facebook.com/udmanila?_rdc=1&_rdr">Facebook</a></p>
                <p><a class="link_white" href="https://www.facebook.com/udmanila?_rdc=1&_rdr">Instagram</a></p>
                <p><a class="link_white" href="https://www.facebook.com/udmanila?_rdc=1&_rdr">X</a></p>
                
            </div>


    </div>


    
</body>
</html>