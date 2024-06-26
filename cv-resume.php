<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>cv data</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @media print {
            * {
                color-adjust: exact;
                /* For Firefox and IE */
                -webkit-print-color-adjust: exact;
                /* For Chrome */

            }
        }

        th,
        td {
            border: none !important;
            font-weight: 600 !important;
        }
    </style>

</head>

<body class="dark:bg-slate-800 bg-slate-600 w-full">


    <!-- php data start here -->


    <?php

    include "./data/connection.php";


    $id = $_GET['id'];

    $select = "SELECT * FROM cv_data WHERE id = '$id' ";

    $execute = mysqli_query($con, $select);


    // echo "iftekher mahmud pervez";

    while ($row = mysqli_fetch_array($execute)) { ?>






        <br><br>

        <!-- cv forn start here -->

        <div class="w-full mx-20">
            <button id="print_btn" class=" text-center font-bold rounded-full mx-20 bg-teal-400 py-3  px-20  text-white">Download</button>

        </div>



        <div id="cv_format" class=" lg:px-40 md:px-20 my-10">

            <div class="border-1 -z-20 bg-gray-200 ">

                <!-- top content -->
                <div class="flex overflow-hidden bg-top-color sm:px-2 w-full">

                    <div class="h-40 w-40 aspect-video overflow-hidden mx-10  p-5">
                        <img src="./upload/<?php echo $row['photo']; ?>" class="rounded-lg mb-3 " />
                    </div>

                    <div class="w-2/3 sm:text-center pl-5 mt-10 text-start">

                        <p class="font-poppins text-right  font-bold text-white sm:text-4xl text-2xl">
                            <?php echo $row['fname'] . " " . $row['lname']; ?>
                        </p>
                        <p class="text-heading text-right opacity-90 text-md font-semibold"><?php echo $row['a_designation']; ?></p>
                    </div>

                </div>

                <!-- main content -->
                <div class="">

                    <div class="flex flex-col gap-3 sm:flex-row ">

                        <div class="flex flex-col p-5 relative bg-slate-800 overflow-hidden text-white text-opacity-80  sm:w-1/3">

                            <!-- <div class=" top-0 left-0 select-none absolute">
                                <img src="./src/image/slide-color.png" class="h-[] w-full " alt="header-img">
                               </div> -->




                            <!-- My contact -->
                            <div class="py-3 sm:order-none order-3 z-30">
                                <h2 class="text-lg font-poppins font-bold text-top-color">My Contact</h2>
                                <div class="border-2 w-28 border-top-color my-3"></div>

                                <div>

                                    <!-- gmail address -->
                                    <div class="flex items-center my-1">
                                        <i class="fa-regular fa-envelope"></i>
                                        <div class="ml-2 truncate"><?php echo $row['email']; ?></div>
                                    </div>
                                    <!-- gmail address -->



                                    <!-- home address -->

                                    <div class="flex items-center my-1">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <div class="ml-2"><?php echo $row['present_address']; ?></div>
                                    </div>

                                    <!-- home address -->



                                    <!-- phone number -->

                                    <div class="flex items-center my-1">
                                        <i class="fa-solid fa-phone"></i>
                                        <div class="ml-2"><?php echo $row['phone']; ?></div>
                                    </div>

                                    <!-- phome number -->


                                    <!-- website -->
                                    <!-- 
                                    <div class="flex items-center my-1">
                  
                                        <i class="fa-solid fa-globe"></i>
                                        <div class="ml-2">website</div>
                                    </div> -->
                                    <!-- website -->

                                </div>

                            </div>

                            <!-- Skills -->
                            <div class="py-3 sm:order-none order-2 z-30">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Skills</h2>
                                <div class="border-2 w-20 border-top-color my-3"></div>

                                <div>
                                    <div class="flex items-center my-1 ">

                                        <div class="ml-2"><?php echo $row['technical_skills']; ?> </div>
                                    </div>



                                </div>
                            </div>
                            <!-- skills -->

                            <!-- hobby -->
                            <div class="py-3 sm:order-none order-2 z-30">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Hobby</h2>
                                <div class="border-2 w-20 border-top-color my-3"></div>

                                <div>
                                    <div class="flex items-center my-1 ">

                                        <div class="ml-2"><?php echo $row['hobby']; ?></div>
                                    </div>



                                </div>
                            </div>
                            <!-- hobby -->


                            <!-- language -->

                            <div class="py-3 sm:order-none order-2 z-30">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Language</h2>
                                <div class="border-2 w-20 border-top-color my-3"></div>

                                <div>
                                    <div class="flex items-center my-1 ">

                                        <div class="ml-2"><?php echo $row['language']; ?></div>
                                    </div>



                                </div>
                            </div>

                            <!-- language  -->




                            <!-- cariculam activity -->

                            <div class="py-3 z-30">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Cariculam Activity</h2>
                                <div class="border-2 w-40 border-top-color my-3"></div>
                                <p><?php echo $row['activity']; ?></p>
                            </div>






                            <!-- cariculam activity -->






                        </div>


                        <div class="flex flex-col sm:w-2/3 order-first sm:order-none p-2">

                            <!-- About me -->
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Career Objective</h2>
                                <div class="border-2 w-36 border-top-color my-3"></div>
                                <p><?php echo $row['career_objective']; ?></p>
                            </div>

                            <!-- Professional Experience -->
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Professional Experience</h2>
                                <div class="border-2 w-52 border-top-color my-3"></div>

                                <div class="flex flex-col">

                                    <div class="flex flex-col mb-2">
                                        <p class="text-lg font-bold text-gray-700"><?php echo $row['c_institute']; ?> | <?php echo $row['c_designation']; ?></p>

                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['c_start_date']; ?> - <?php echo $row['c_end_date']; ?></p>
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['c_duration']; ?></p>
                                        </div>

                                        <p class="font-semibold text-sm text-gray-700 mt-2 mb-1">Key Responsibilities
                                        </p>
                                        <ul class="text-sm list-disc pl-4 space-y-1">
                                            <li>Working on customer facing product</li>
                                            <li>Deliverying highly efficient solutions</li>
                                        </ul>
                                    </div>


                                    <div class="flex flex-col mb-2">
                                        <p class="text-lg font-bold text-gray-700"><?php echo $row['c_institute']; ?> | <?php echo $row['c_designation']; ?></p>

                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['c_start_date']; ?> - <?php echo $row['c_end_date']; ?></p>
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['c_duration']; ?></p>
                                        </div>

                                        <p class="font-semibold text-sm text-gray-700 mt-2 mb-1">Key Responsibilities
                                        </p>
                                        <ul class="text-sm list-disc pl-4 space-y-1">
                                            <li>Working on customer facing product</li>
                                            <li>Deliverying highly efficient solutions</li>
                                        </ul>
                                    </div>


                                    <div class="flex flex-col mb-2">
                                        <p class="text-lg font-bold text-gray-700"><?php echo $row['c_institute']; ?> | <?php echo $row['c_designation']; ?></p>

                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['c_start_date']; ?> - <?php echo $row['c_end_date']; ?></p>
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['c_duration']; ?></p>
                                        </div>

                                        <p class="font-semibold text-sm text-gray-700 mt-2 mb-1">Key Responsibilities
                                        </p>
                                        <ul class="text-sm list-disc pl-4 space-y-1">
                                            <li>Working on customer facing product</li>
                                            <li>Deliverying highly efficient solutions</li>
                                        </ul>
                                    </div>









                                </div>

                            </div>


                            <!-- Education Background -->
                            <div class="py-3 sm:order-none order-1">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Education Background</h2>
                                <div class="border-2 w-52 border-top-color my-3"></div>

                                <div class="flex flex-col space-y-1">

                                    <div class="flex flex-col mb-2">
                                        <p class="font-bold capitalize text-lg text-gray-700"><?php echo $row['e_department']; ?></p>
                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['e_start_date']; ?> - <?php echo $row['e_end_date']; ?></p>
                                            <span class="font-semibold text-sm text-gray-700"><?php echo $row['e_duration']; ?></span>
                                        </div>



                                        <p class="text-md capitalize font-medium">
                                            <span class="text-green-700 text-md"><?php echo $row['degree']; ?></span> , <?php echo $row['e_institute']; ?>
                                        </p>
                                        <p class="font-bold text-sm text-gray-700 mb-2">CGPA/GPA: <?php echo $row['result']; ?></p>
                                    </div>



                                    <div class="flex flex-col mb-2">
                                        <p class="font-bold capitalize text-lg text-gray-700"><?php echo $row['e_department']; ?></p>
                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['e_start_date']; ?> - <?php echo $row['e_end_date']; ?></p>
                                            <span class="font-semibold text-sm text-gray-700"><?php echo $row['e_duration']; ?></span>
                                        </div>



                                        <p class="text-md capitalize font-medium">
                                            <span class="text-green-700 text-md"><?php echo $row['degree']; ?></span> , <?php echo $row['e_institute']; ?>
                                        </p>
                                        <p class="font-bold text-sm text-gray-700 mb-2">CGPA/GPA: <?php echo $row['result']; ?></p>
                                    </div>



                                    <div class="flex flex-col mb-2">
                                        <p class="font-bold capitalize text-lg text-gray-700"><?php echo $row['e_department']; ?></p>
                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700"><?php echo $row['e_start_date']; ?> - <?php echo $row['e_end_date']; ?></p>
                                            <span class="font-semibold text-sm text-gray-700"><?php echo $row['e_duration']; ?></span>
                                        </div>



                                        <p class="text-md capitalize font-medium">
                                            <span class="text-green-700 text-md"><?php echo $row['degree']; ?></span> , <?php echo $row['e_institute']; ?>
                                        </p>
                                        <p class="font-bold text-sm text-gray-700 mb-2">CGPA/GPA: <?php echo $row['result']; ?></p>
                                    </div>




                                </div>
                            </div>
                            <!-- educational background -->


                            <!-- personal details -->
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Personal Details</h2>
                                <div class="border-2 w-36 border-top-color my-3"></div>

                                <div class="flex flex-col">
                                    <ul>

                                        <pre class="capitalize font-normal"><span class="font-semibold">Name             </span> :<?php echo $row['fname'] . " " . $row['lname']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Fother Name      </span> :<?php echo $row['father_name']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Mather name      </span> :<?php echo $row['mother_name']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Date Of Birth    </span> :<?php echo $row['brith_date']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Nationality      </span> :<?php echo $row['nationality']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Marital status   </span> :<?php echo $row['marital_status']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Present Address  </span> :<?php echo $row['present_address']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Parmanent Address</span> :<?php echo $row['parmanent_address']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Religion         </span> :<?php echo $row['religion']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">Gender           </span> :<?php echo $row['gender']; ?></pre>
                                        <pre class="capitalize font-normal"><span class="font-semibold">NID              </span> :<?php echo $row['nid']; ?></pre>

                                    </ul>
                                </div>

                            </div>
                            <!-- personal destails -->


                            <!-- refarence details-->
                            <div class="py-3 text-sm">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Reference</h2>
                                <div class="border-2 w-36 border-top-color my-3"></div>

                                <div class="flex gap-1 pr-3">



                                    <div class="mb-2">

                                        <table class="table-auto mb-2 bg-slate-300">
                                            <tr>
                                                <td>Name</td>
                                                <td>: <?php echo $row['ref_name']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Organigation</td>
                                                <td>: <?php echo $row['ref_company']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>designation</td>
                                                <td>: <?php echo $row['ref_designation']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Mobile</td>
                                                <td>: <?php echo $row['ref_phone']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Relation</td>
                                                <td>: <?php echo $row['ref_relation']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>: <?php echo $row['ref_email']; ?> </td>
                                            </tr>

                                        </table>


                                        <table class="table-auto mb-2 bg-slate-300">
                                            <tr>
                                                <td>Name</td>
                                                <td>: <?php echo $row['technical_skills']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Organigation</td>
                                                <td>: <?php echo $row['technical_skills']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>designation</td>
                                                <td>: <?php echo $row['technical_skills']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Mobile </td>
                                                <td>: <?php echo $row['technical_skills']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Relation</td>
                                                <td>: <?php echo $row['technical_skills']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>: <?php echo $row['technical_skills']; ?> </td>
                                            </tr>

                                        </table>



                                    </div>




                                </div>


                            </div>
                            <!-- refarence destails -->




                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- cv form end here -->

        </div>





    <?php
    }
    ?>




    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./src/js/main.js"></script>
</body>

</html>