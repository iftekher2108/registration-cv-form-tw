<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>cv data</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="dark:bg-slate-800 bg-slate-600 w-full">


<!-- php data start here -->


<?php

include "./connection.php";


$id = $_GET['id'];

 $select = "SELECT * FROM cv_data WHERE id = '$id' ";

 $execute = mysqli_query($con,$select);


// echo "iftekher mahmud pervez";

 while ($row = mysqli_fetch_array($execute)) { ?>





    <div class="container mx-auto w-full">
        <h1 class="
            text-center 
            rounded-lg 
             font-bold 
             capitalize 
             h-full 
             py-5 
             mx-20
              bg-teal-400 
              text-4xl mt-20
               text-white 
               text-opacity-85 ">
            user name cv resume</h1>
        <br><br>

        <!-- cv forn start here -->

        <div class="w-full mx-20">
            <button
                class=" text-center font-bold rounded-full mx-20 bg-teal-400 py-3  px-20  text-white">Download</button>

        </div>



        <div class=" lg:px-40 md:px-20 my-10">

            <div class="border-1 -z-20 bg-gray-200 ">

                <!-- top content -->
                <div class="flex relative overflow-hidden sm:px-2 w-full">
                    <div class=" top-0 -left-2  select-none  absolute">
                        <img src="./src/image/teal-color.png" alt="header-img">
                    </div>
                    <div class="h-36 w-36 overflow-hidden rounded-full ml-5  z-20  mx-10  p-5">
                        <img src="./src/image/photo.png" class="rounded-full" />
                    </div>

                    <div class="w-2/3 sm:text-center pl-5 z-10 mt-10 text-start">
                        <p class="font-poppins text-right  font-bold text-white sm:text-4xl text-2xl">
                            Fname Lname
                        </p>
                        <p class="text-heading text-right opacity-90 text-md font-semibold">Apply designation</p>
                    </div>

                </div>

                <!-- main content -->
                <div class="">

                    <div class="flex flex-col gap-3 sm:flex-row ">

                        <div
                            class="flex flex-col p-5 relative bg-slate-700 overflow-hidden text-white text-opacity-80  sm:w-1/3">

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
                                        <div class="ml-2 truncate">gmail address</div>
                                    </div>
                                    <!-- gmail address -->



                                    <!-- home address -->

                                    <div class="flex items-center my-1">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <div class="ml-2">present address</div>
                                    </div>

                                    <!-- home address -->



                                    <!-- phone number -->

                                    <div class="flex items-center my-1">
                                        <i class="fa-solid fa-phone"></i>
                                        <div class="ml-2">phone numbers</div>
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

                                        <div class="ml-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Impedit, dicta?</div>
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

                                        <div class="ml-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Impedit, dicta?</div>
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

                                        <div class="ml-2">Lorem ipsum, dolor </div>
                                    </div>



                                </div>
                            </div>

                            <!-- language  -->




                            <!-- cariculam activity -->

                            <div class="py-3 z-30">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Cariculam Activity</h2>
                                <div class="border-2 w-40 border-top-color my-3"></div>
                                <p>To get a career opportunity which would help me to utilize my academic background to
                                    assist
                                    me to gain experience, employ my excellent skills, and enable me to make positive
                                    contribution.</p>
                            </div>






                            <!-- cariculam activity -->






                        </div>


                        <div class="flex flex-col sm:w-2/3 order-first sm:order-none">

                            <!-- About me -->
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Career Objective</h2>
                                <div class="border-2 w-36 border-top-color my-3"></div>
                                <p>To get a career opportunity which would help me to utilize my academic background to
                                    assist
                                    me to gain experience, employ my excellent skills, and enable me to make positive
                                    contribution.</p>
                            </div>

                            <!-- Professional Experience -->
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Professional Experience</h2>
                                <div class="border-2 w-52 border-top-color my-3"></div>

                                <div class="flex flex-col">

                                    <div class="flex flex-col">
                                        <p class="text-lg font-bold text-gray-700">Netcracker Technology | Software
                                            Engineer</p>

                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700">2021 - Present</p>
                                            <p class="font-semibold text-sm text-gray-700">c duration </p>
                                        </div>

                                        <p class="font-semibold text-sm text-gray-700 mt-2 mb-1">Key Responsibilities
                                        </p>
                                        <ul class="text-sm list-disc pl-4 space-y-1">
                                            <li>Working on customer facing product</li>
                                            <li>Deliverying highly efficient solutions</li>
                                        </ul>
                                    </div>


                                    <div class="flex flex-col">
                                        <p class="text-lg font-bold text-gray-700">Netcracker Technology | Software
                                            Engineer</p>

                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700">2021 - Present</p>
                                            <p class="font-semibold text-sm text-gray-700">c duration </p>
                                        </div>

                                        <p class="font-semibold text-sm text-gray-700 mt-2 mb-1">Key Responsibilities
                                        </p>
                                        <ul class="text-sm list-disc pl-4 space-y-1">
                                            <li>Working on customer facing product</li>
                                            <li>Deliverying highly efficient solutions</li>
                                        </ul>
                                    </div>

                                    <div class="flex flex-col">
                                        <p class="text-lg font-bold text-gray-700">Netcracker Technology | Software
                                            Engineer</p>

                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700">2021 - Present</p>
                                            <p class="font-semibold text-sm text-gray-700">c duration </p>
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

                                    <div class="flex flex-col">
                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700">start date - end date</p>
                                            <span class="font-semibold text-sm text-gray-700">duration</span>
                                        </div>

                                        <h4 class="font-bold">deparment</h4>

                                        <p class="text-sm font-medium">
                                            <span class="text-green-700 text-sm">Degree</span> , institute
                                        </p>
                                        <p class="font-bold text-sm text-gray-700 mb-2">CGPA/GPA: </p>
                                    </div>

                                    <div class="flex flex-col">
                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700">start date - end date</p>
                                            <span class="font-semibold text-sm text-gray-700">duration</span>
                                        </div>

                                        <h4 class="font-bold">deparment</h4>

                                        <p class="text-sm font-medium">
                                            <span class="text-green-700 text-sm">Degree</span> , institute
                                        </p>
                                        <p class="font-bold text-sm text-gray-700 mb-2">CGPA/GPA: </p>
                                    </div>

                                    <div class="flex flex-col">
                                        <div class="flex gap-x-32">
                                            <p class="font-semibold text-sm text-gray-700">start date - end date</p>
                                            <span class="font-semibold text-sm text-gray-700">duration</span>
                                        </div>

                                        <h4 class="font-bold">deparment</h4>

                                        <p class="text-sm font-medium">
                                            <span class="text-green-700 text-sm">Degree</span> , institute
                                        </p>
                                        <p class="font-bold text-sm text-gray-700 mb-2">CGPA/GPA: </p>
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

                                        <pre><span class="font-semibold">Name             </span> :  </pre>
                                        <pre><span class="font-semibold">Mother Name      </span> :  </pre>
                                        <pre><span class="font-semibold">Father name      </span> :  </pre>
                                        <pre><span class="font-semibold">Date Of Birth    </span> :  </pre>
                                        <pre><span class="font-semibold">Nationality      </span> :  </pre>
                                        <pre><span class="font-semibold">Marital status   </span> :  </pre>
                                        <pre><span class="font-semibold">Present Address  </span> :  </pre>
                                        <pre><span class="font-semibold">Parmanent Address</span> :  </pre>
                                        <pre><span class="font-semibold">Religion         </span> :  </pre>
                                        <pre><span class="font-semibold">Gender           </span> :  </pre>
                                        <pre><span class="font-semibold">NID              </span> :  </pre>

                                    </ul>
                                </div>

                            </div>
                            <!-- personal destails -->


                            <!-- refarence details-->
                            <div class="py-3">
                                <h2 class="text-lg font-poppins font-bold text-top-color">Reference</h2>
                                <div class="border-2 w-36 border-top-color my-3"></div>

                                <div class="flex gap-2">

                                    <div class="flex w-1/2 flex-col mb-4">
                                        <ul>

                                            <pre><span class="font-semibold">Name             </span> :  </pre>
                                            <!-- <pre><span class="font-semibold">Mother Name      </span> :  </pre> -->
                                            <!-- <pre><span class="font-semibold">Father name      </span> :  </pre> -->
                                            <pre><span class="font-semibold">Organization     </span> :  </pre>
                                            <!-- <pre><span class="font-semibold">Nationality      </span> :  </pre> -->
                                            <!-- <pre><span class="font-semibold">Marital status   </span> :  </pre> -->
                                            <pre><span class="font-semibold">Designation      </span> :  </pre>
                                            <pre><span class="font-semibold">Mobile           </span> :  </pre>
                                            <!-- <pre><span class="font-semibold">Religion         </span> :  </pre> -->
                                            <pre><span class="font-semibold">Relation          </span> :  </pre>
                                            <pre><span class="font-semibold">E-mail           </span> :  </pre>

                                        </ul>
                                    </div>

                                    <div class="flex w-1\/2 flex-col mb-4">
                                        <ul>

                                            <pre><span class="font-semibold">Name             </span> :  </pre>
                                            <!-- <pre><span class="font-semibold">Mother Name      </span> :  </pre> -->
                                            <!-- <pre><span class="font-semibold">Father name      </span> :  </pre> -->
                                            <pre><span class="font-semibold">Organization     </span> :  </pre>
                                            <!-- <pre><span class="font-semibold">Nationality      </span> :  </pre> -->
                                            <!-- <pre><span class="font-semibold">Marital status   </span> :  </pre> -->
                                            <pre><span class="font-semibold">Designation      </span> :  </pre>
                                            <pre><span class="font-semibold">Mobile           </span> :  </pre>
                                            <!-- <pre><span class="font-semibold">Religion         </span> :  </pre> -->
                                            <pre><span class="font-semibold">Relation         </span> :  </pre>
                                            <pre><span class="font-semibold">E-mail           </span> :  </pre>

                                        </ul>
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




    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="src/js/main.js"></script>
</body>

</html>