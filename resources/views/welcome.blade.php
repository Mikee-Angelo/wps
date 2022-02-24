<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SBCI - Web-based Payment System</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <style>
        @import url("https://rsms.me/inter/inter.css");

        html {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
        }

        .gradient {
            /* background-image: linear-gradient(-225deg, #cbbacc 0%, #000038 100%); */
            background-color: #000038
        }

        button,
        .gradient2 {
            background-color: #fff;
            /* background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%); */
        }

        /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

        .browser-mockup {
            border-top: 2em solid rgba(230, 230, 230, 0.7);
            position: relative;
            height: 60vh;
        }

        .browser-mockup:before {
            display: block;
            position: absolute;
            content: "";
            top: -1.25em;
            left: 1em;
            width: 0.5em;
            height: 0.5em;
            border-radius: 50%;
            background-color: #f44;
            box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
        }

        .browser-mockup>* {
            display: block;
        }

        /* Custom code for the demo */

    </style>
</head>

<body class="gradient leading-relaxed tracking-wide flex flex-col">
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6">
            <div class="pl-4 flex items-center">
                <a class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <svg class="h-6 w-6 inline-block fill-current text-yellow-700" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z" />
                    </svg>
                    SBCI - WPS
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">

                </ul>
                <button {{-- href="{{route('login')}}" --}} id="navAction"
                    class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">
                    Login
                </button>
            </div>
        </div>
    </nav>

    <div class="container mx-auto h-screen">
        <div class="text-center px-3 lg:px-0">
            <h1 class="my-4 text-2xl md:text-3xl lg:text-5xl font-black text-white leading-tight">
                Web-based Payment System
            </h1>
            <p class="leading-normal text-white text-base md:text-xl lg:text-2xl mb-8">
                Global competency, our aim!
            </p>
        </div>

        <div class="flex items-center w-full mx-auto content-end">
            <div class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl"></div>
        </div>
    </div>

    {{-- Introduction --}}
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">

            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Introduction
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-10">
                The SBCI Web-based payment system is a project that will be useful for more efficient, accurate, and
                automated techniques of paying tuition fees and other related academic fees of students. This kind of
                system is very relevant as of today because it will give lots of benefits for both students/parent and
                school. The proposed system offers efficiency, the convenience of paying tuition fees. The proposed
                system is also secured from any threats of theft and hacking and we assure you that this project will be
                worth and guaranteed safe. The proposed system will replace the manual payment of fees, instead of
                paying over the counter of school the students can pay such fees through this system.
            </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                The SUBIC BAY COLLEGES INC. WEB-BASED PAYMENT SYSTEM is a project that will help both the
                students/parents and the school to minimize the hassle of paying tuition fees and other academic fees.
                This proposed system were be able to accept payment through Gcash.
            </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                The student or parent and the Subic Bay Colleges Inc. can only access to the proposed system if you are
                officially enrolled to SBCI, it can only run if you have an active username and password. It allows you
                to view all the information whether it’s tuition fees(breakdown), receipts, balances, recent
                transactions, or credentials.
            </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                The students can also use this proposed system to check if they have a remaining document and
                application that should be filed on the school. While this system shall be the guide of the student to
                track their status, this proposed system can also their identity, it’s saved all the necessary
                information of student regarding his/her academics status.
            </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                However, this system has more limitations that the user should learn and know, it can be accessed upon
                logging in the username and the one-time password (changeable upon the first login), the student should
                always be sensitive with his/her account when it comes to its securities because it takes a lot of time
                to request for retrieval of account and that would be a huge problem for the student to request for an
                appointment to pay manually in the office of accounting.</p>


        </div>
    </section>

    {{-- Background of the study --}}
    <section class="bg-white py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Background of the Study
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-10">
                Our project defines the objective, the context and describes the uses and how will this project
                function. This project shall be exclusive to our school Subic Bay Colleges (SBCI) Inc. nothing more and
                nothing less. We come up to a system that may be useful to both school and students\parents to reduce
                their task as well as to secure their payment of tuition fees of every student and this system will
                provide necessary information of the students.
            </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                Paying accounts or fees nowadays is one of the biggest challenges that most often experience by small
                time business and enterprises because of its cost and of course to those up until now are paying fees
                manually. At this point in our life that we are facing pandemics we have no certainty how this crisis
                long. Our school is busy assessing their student regarding the academic matter and other related
                matters.</p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">This system project will answer those
                questions that rely on this issue on how they help this to pay without going out and commuting, it also
                helps students and parent to pay their tuition on time without hesitation and apprehension. And this
                system allows them to view their remaining balances, transactions, credentials, and other related
                thereof. And this system will provide some necessary information about students and this system will
                also allow the user to track their billings and invoices. </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">Entering information manually are is
                an inefficient process, time-consuming and prone to errors. Manual data entry not only consumes a lot of
                valuable resources, but can also open the doors to mistakes and mix-ups. And also managing invoices
                manually, you probably have a long and complicated system of processing payments.</p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">Upon determining these issues that
                might encounter in the manual transaction by the administration of the school and the students\parents
                we come up with the system that is absolutely indeed needed by both schools and students. This system
                provides an e-card that is linked to the mobile number that may notify the payees that their payments
                are processing. And also the accounting department of our school shall lessen the workload and they can
                render their time to other work in the office. Electronic payments are much faster than the traditional
                methods of payments such as cash. In the case of online payments, you do not have any constraint of time
                or location. You can easily make payments at any time from anywhere. </p>

        </div>
    </section>

    {{-- Objective of the study --}}
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Objective of the study
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-10">
                General Objectives
            </h3>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2">
                To provide a technological solution in monitoring the payment and other miscellaneous, the general
                objective of the study is to design and develop the sbci web-based payment system.
            </p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-10">
                Specific Objectives
            </h3>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• To create a module for students’ tuition fees
                and miscellaneous fees.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• To create a module for students’ balance.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• To create a cashier's module to accept
                payment from students or parents on cash basis.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• To include online payment schemes (like
                GCASH, Paymaya, or what is applicable).</p>
        </div>
    </section>

    {{-- Scope and limitation of the study --}}
    <section class="bg-white py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Scope and limitation of the study
            </h2>
            <div class="w-full mb-4 ">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-10">
                This system focuses on development of an Online payment system that will automate the manual transaction
                However, the study has focused on the following:
            </p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-10">
                Scope
            </h3>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2">
                The general intent of this study focuses on the development of SBCI Student Management System that will
                serves as a portal for the students. However, the study focuses on the following:
            </p>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-6">• It will automate the calculation of tuition
                fee</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• It will update the student especially their
                parents for the remaining balance, coming exam week, and other event fees.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• It will generate a receipt on every
                transaction inputted into the system.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• The software will display the breakdown of
                the fees for every transaction.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• For security and privacy of the management,
                billing system comply two log-in users with different access level.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• This system is applicable to both MAC and
                Windows operating systems.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• The system can also access through android
                mobile phones, tablet, iOS devices such as iPad and iPhones.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• Both the accounting head and the cashier has
                the access to the proposed system.</p>
            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• Access control: Only the Accounting
                department and the Administrator can only access the system.</p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-10">
                Limitation
            </h3>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• The project will be limited to Subic Bay
                Colleges Inc. And Students/Parents.
            </p>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• The student can own one account only.</p>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• Password can only change through linked email
                or linked mobile numbers.
            </p>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• This system proposed is not a downloadable
                mobile application.
            </p>

            <p class="w-full text-md md:text-lg text-gray-600 px-6 mt-2">• This proposed system cannot also accept
                payment from any Bank or remittances.
            </p>

        </div>
    </section>



    {{-- Significance of the study --}}
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">

            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Significance of the study
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-10">
                SBCI Web-based Payment System will provide a systematic process of payment of fees and other related thereof. It is more convenient and efficient for both Accounting Office and students/parents. This system will reduce the time consumed because the user may simply sign a form and pay through this web-based payment system. It also allows the payees to view the transactions and invoices through a notification sent by this system to the registered mobile number and registered email. This study will help the following:
            </p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-10">
                Students and Parents
            </h3>

             <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2">
                Using their account, the student and parents can view the necessary information about the payment transaction and other related matters. The proposed system will also allow the user to view such information as the balances, recent transactions, discounts, breakdown of fees, and other related matters that identify the status of Students. It is also for transparency.
            </p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-5">
               Accounting Office
            </h3>

             <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2">
            The accounting staff will lessen their workload because of this systematic payment of tuition fees. It will notify the staff immediately upon payment of student through this system. </p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-5">
               Subic Bay Colleges, Inc.
            </h3>

             <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2">The school's workload will reduce from manual registration of students, manual payment of fees. It also upholds the standard of academic competence in technology.</p>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-5">
               Future Researchers
            </h3>

             <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2">The Future Researcher will help to achieve brighter projects through this study. It will give them an idea to create more innovative.</p>

             <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-5">
               The Researchers
            </h3>

             <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-2"> The Researcher will become more abide by their field of profession. It will help them to upgrade their skill and knowledge that they can use as a tool for their future jobs and of course they were able to help themselves to utelized the purpose of Information Technology.</p>

             
        </div>
    </section>

    {{-- Conceptual Framework of the study --}}
    <section class="bg-white py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Conceptual Framework of the Study
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <h3 class="w-full px-6 my-2 text-lg font-black leading-tight text-gray-800 mt-10">
                Definition of terms
            </h3>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Program. </span>A set of instructions or activities to be able to do or perform a particular task.</p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Electronically. </span>The new way of how we save and send documents, processing and inputting data. From manually to electronically.</p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Efficient. </span>Successfully accomplish something with the least waste of time and effort.</p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Security. </span>The protection of computers or systems that prevent different kinds of cyber-Viruses. </p>

            <p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Innovation. </span>It is the development of society and or industry in a more technological way. </p>

<p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Transactions. </span>Interaction between people who deal businesses, payments, signing of documents, and such other types of dealing with another person. </p>

<p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Data. </span>An information save and input into the computer system. </p>

<p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Automated. </span>Carried out and controlled by machines or computers to be able to run without the person to control.</p>

<p class="w-full indent-96 text-gray-600 text-md md:text-lg px-6 mt-6">
                <span class="font-black">Web-based System. </span>A technological system that provides access to a software system using a computer to view such purposes.</p>



        </div>
    </section>

    <!--Footer-->
    <footer class="gradient ">
        <div class="container mx-auto mt-8 px-8">
            <div class="w-full flex items-center flex-col md:flex-row py-6 ">
                <div class="flex-1 mb-6">
                    <a class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl text-white"
                        href="#">
                        <svg class="h-6 w-6 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z" />
                        </svg>
                        SBCI - ASMS
                    </a>
                </div>

                <div class="flex-1">
                    <p class="uppercase font-extrabold text-white md:mb-6">Links</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-white font-light no-underline hover:underline hover:text-orange-500">FAQ</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-white font-light no-underline hover:underline hover:text-orange-500">Help</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-white font-light no-underline hover:underline hover:text-orange-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase font-extrabold text-white md:mb-6">Legal</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Terms</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase font-extrabold text-white md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Facebook</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Linkedin</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase font-extrabold text-white md:mb-6">
                        Company
                    </p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Official
                                Blog</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">About
                                Us</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="font-light no-underline hover:underline text-white hover:text-orange-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");
        var navAction = document.getElementById('navAction');

        navAction.onclick = () => {
            // console.log('HELLO');
            window.location.href = "{{route('login')}}";
        }

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>
</body>

</html>
