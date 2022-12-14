<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blogging website</title>
  <link rel="stylesheet" href="css/aboutUs.css">
  

  <script src="https://cdn.tailwindcss.com"></script>

  <style type="text/tailwindcss">
    @layer components {

      .card {
        @apply flex items-center justify-center flex-col gap-2 p-5 w-full sm:w-72 h-full bg-gray-100 border rounded-2xl
      }

    }
</style>
<!--Tailwind CSS-->

<!--Font-Awesome-->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>

</head>

<body>
  <!-- navbar section start -->
  <header>
    <div class="header">
      <a class="navbar-brand" href="index.php">BLOGGERS.</a>
      <div class="navbar">
        <ul class="main-nav">
          <li class="nav-item "><a href="index.php">Home</a> </li>
          <li class="nav-item active"> About Us</li>
          <li class="nav-item"><a href="contactUs.php">Contact Us</a></li>
        </ul>
        <div class="indicator"></div>
      </div>

      <span><a href="login.php" target="_blank"></a></span>
    </div>
  </header>
  <!-- navbar section end -->


  <div class="mb-3 center">
    <dh-component>
        <div class="container flex justify-center mx-auto  ">
            <div>
                <h1 class="xl:text-4xl text-3xl text-center text-gray-800 font-extrabold pb-6  mx-1">Our Team</h1>
            </div>
        </div>
         <div class="w-full  px-10 pt-10"> 
            <div class="container mx-auto w-full ">
                <div role="list" aria-label="Behind the scenes People " class=" lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                    <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5 ">
                        <div class="rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="images/raviraj.jpg" alt="Display Picture of Andres Berlin" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <h1 class="font-bold text-3xl text-center mb-1">Raviraj Mhalsekar</h1>
                                <p class="text-purple-600 text-sm text-center">Full Stack Developer</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">Full Stack Developers have to have some skills in a wide variety of coding niches, from Front End to server side, from databases to graphic design and UI/UX management in order to do their job well.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Github" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Twitter" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Instagram" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="listitem" class="xl:w-1/3 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5 cards">
                        <div class="rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="images/rohit.jpg" alt="Display Picture of Silene Tokyo" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <h1 class="font-bold text-3xl text-center mb-1">Rohit Naik</h1>
                                <p class="text-purple-600 text-sm text-center">Frontend Developer</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">The emphasis on innovation and technology in our companies has resulted in a few of them establishing global benchmarks in product design and development.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Github" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Twitter" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Instagram" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5 ">
                        <div class="rounded overflow-hidden shadow-md bg-white">
                            <div class="absolute -mt-20 w-full flex justify-center">
                                <div class="h-32 w-32">
                                    <img src="images/rahul.jpg" alt="Display Picture of Johnson Stone" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                                </div>
                            </div>
                            <div class="px-6 mt-16">
                                <h1 class="font-bold text-3xl text-center mb-1">Rahul Parab</h1>
                                <p class="text-purple-600 text-sm text-center">UI/UX designer</p>
                                <p class="text-center text-gray-600 text-base pt-3 font-normal">A UI/UX designer is the voice of the customer. Our job is to look beyond the business goals. We don't just experience user interface but also questions it.</p>
                                <div class="w-full flex justify-center pt-5 pb-5">
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Github" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Twitter" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="mx-5">
                                        <div aria-label="Instagram" role="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </dh-component>
</div>
  <script src="js/aboutUs.js"></script>
</body>

</html>