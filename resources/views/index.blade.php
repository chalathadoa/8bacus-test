<!DOCTYPE html>
<html class="h-full w-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Jscript --}}
        @vite('resources/js/app.js')
        @vite('resources/js/swiper.js')
        @vite('resources/js/load-photo.js')
        @vite('resources/js/modal.js')

        {{-- Icons --}}
        <script src="https://kit.fontawesome.com/cbec424e8d.js" crossorigin="anonymous"></script>

        {{-- Swiper --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    </head>
    <body class="h-full">
        <div class="min-h-full">
            {{-- START NAVBAR --}}
            <nav class="bg-black fixed top-0 left-0 right-0 z-50" x-data="{ isOpen: false }" style="height:108px;">
                <div class="max-w-7xl ml-4 py-5 ">
                    <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                        <img style="height: 50px;" src="{{ asset('img/logo.png') }}" alt="8Bacus">
                        </div>
                        <div class="hidden md:block lg:ml-80">
                            <div class="flex items-baseline space-x-3">
                                <a href="#home" class="px-3 py-2 text-lg text-white hover:text-orange-500" aria-current="page">HOME</a>
                                <a href="#services" class="px-3 py-2 text-lg text-white hover:text-orange-500">SERVICES</a>
                                <a href="#about-us" class="px-3 py-2 text-lg text-white hover:text-orange-500">ABOUT US</a>
                                <a href="#events" class="px-3 py-2 text-lg text-white hover:text-orange-500">EVENTS</a>
                                <a href="#careers" class="px-3 py-2 text-lg text-white hover:text-orange-500">CAREERS</a>
                                <a href="#news" class="px-3 py-2 text-lg text-white hover:text-orange-500">NEWS</a>
                                <a href="#contact-us" class="px-3 py-2 text-lg text-white hover:text-orange-500">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen" id="nav-toggle" class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:text-gray mr-5" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>                            
                            <i class="fa-solid fa-bars fa-2xl" aria-hidden="true" style="color: white;"></i>
                        </button>
                    </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div x-show="isOpen" class="md:hidden bg-black h-screen" id="mobile-menu">
                    <div class="space-y-0 px-2 pb-3 pt-2 sm:px-3 h-[50%] bg-black z-50 grid grid-cols-1">
                        <a href="#home" @click="isOpen = false" class="items px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500" aria-current="page">HOME</a>
                        <a href="#services" @click="isOpen = false" class="px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500 hover:text-white">SERVICES</a>
                        <a href="#about-us" @click="isOpen = false" class="px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500 hover:text-white">ABOUT-US</a>
                        <a href="#events" @click="isOpen = false" class="px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500 hover:text-white">EVENTS</a>
                        <a href="#careers" @click="isOpen = false" class="px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500 hover:text-white">CAREERS</a>
                        <a href="#news" @click="isOpen = false" class="px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500 hover:text-white">NEWS</a>
                        <a href="#contact-us" @click="isOpen = false" class="px-5 text-xl py-2 text-white focus:text-orange-500 active:text-orange-500 hover:text-white">CONTACT US</a>
                    </div>
                </div>
            </nav>
            {{-- END NAVBAR --}}
            <main>
                {{-- START SOCIAL MEDIA --}}
                <div x-show="!isOpen" id="social-media" class="fixed ml-0 z-50 transform lg:mt-[20%] mt-[50%]">
                    <a href="https://facebook.com" class="social-button hover:translate-x-2 hover:bg-black">
                        <i class="fa-brands fa-facebook fa-l" style="color: #6c757d;"></i>
                    </a>
                    <a href="https://instagram.com" class="social-button hover:translate-x-2 hover:bg-black">
                        <i class="fa-brands fa-instagram" style="color: #6c757d;"></i>
                    </a>
                    <a href="https://linkedin.com" class="social-button hover:translate-x-2 hover:bg-black">
                        <i class="fa-brands fa-linkedin" style="color: #6c757d;"></i>
                    </a>
                </div>
                {{-- END SOCIAL MEDIA    --}}
                {{-- START HOME --}}
                <section id="home" class="relative w-full h-screen md:h-3/4 overflow-hidden">
                    <video class="absolute inset-0 object-cover w-full h-full" autoplay muted loop>
                        <source src="{{ asset('vid/background.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="relative z-10 flex items-stretch md:justify-start grid grid-cols-1 content-center w-full h-screen px-8 bg-black bg-opacity-50 mt-[1%] ml-[10%] md:ml-[1%] md:mt-[1%]">
                        <div class="md:text-6xl text-5xl w-5/6 md:w-3/5 leading-relaxed md:text-start text-center font-helvetica font-bold mb-4 text-white">
                            <h1>Transforming your Bussines <span class="text-orange-500">Be Our Partner.</span></h1>
                            <button class="px-6 py-4 font-bold text-black text-sm bg-white rounded-full hover:bg-orange-500 hover:text-white md:w-[60%] lg:w-1/2">APPLY FOR A JOB</button>
                            <button class="md:px-14 p-4 mt-5 font-bold text-black text-sm bg-white rounded-full hover:bg-orange-500 hover:text-white md:w-[60%] lg:w-1/2">REQUEST FOR SERVICE CONSULTATION</button>
                        </div>
                    </div>
                </section>
                {{-- END HOME --}}
                {{-- START SERVICES --}}
                <section id="services" class="bg-white relative w-full h-full overflow-hidden">
                    <div class="bg-two bg-cover bg-center h-60 flex items-center justify-center">
                        <h1 class="text-5xl font-bold text-black">What we <span class="text-orange-500">offer?</span></h1>
                    </div>
                    <div class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">

                        <div class="group relative bg-white p-6 px-10 rounded-lg transition transform hover:-translate-y-2 hover:shadow-2xl hover:border-yellow-500 border-2 border-transparent">
                            {{-- <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div> --}}
                            <div class="flex flex-col items-center">
                            <!-- Icon -->
                            <img src="{{ asset('img/recruitment.png') }}" alt="Icon Recruitment" class="w-1/2 mb-5">
                            <h3 class="text-lg font-bold mt-5 mb-2">RECRUITMENT</h3>
                            <div class="w-full h-0.5 bg-black mb-4"></div>
                            <p class="text-gray-600 text-center text-sm hover:text-base" style="margin-bottom:25%;">Our team of recruitment offers recruitment services to help organizations find and hire the right talent.</p>
                            <button class="px-8 py-4 bg-yellow-400 text-black font-bold rounded-full text-sm hover:bg-orange-500 hover:text-white transition">Request for Proposal</button>
                            </div>
                        </div>

                        <div class="group relative bg-white p-6 rounded-lg transition transform hover:-translate-y-2 hover:shadow-2xl hover:border-yellow-500 border-2 border-transparent">
                            {{-- <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div> --}}
                            <div class="flex flex-col items-center">
                            <!-- Icon -->
                            <img src="{{ asset('img/administrative.png') }}" alt="Icon Administrative" class="w-1/2 mb-5">
                            <h3 class="text-lg font-bold mt-5 mb-2">ADMINISTRATIVE</h3>
                            <div class="w-full h-0.5 bg-black mb-4"></div>
                            <p class="text-gray-600 text-center text-sm hover:text-base" style="margin-bottom:15%;">Our team of administrative offers administrative support services that can significantly enhance the efficiency and productivity of the business of our clients.</p>
                            <button class="px-8 py-4 bg-yellow-400 text-black font-bold rounded-full text-sm hover:bg-orange-500 hover:text-white transition">Request for Proposal</button>
                            </div>
                        </div>

                        <div class="group relative bg-white p-6 rounded-lg transition transform hover:-translate-y-2 hover:shadow-2xl hover:border-yellow-500 border-2 border-transparent">
                            {{-- <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div> --}}
                            <div class="flex flex-col items-center">
                            <!-- Icon -->
                            <img src="{{ asset('img/immigration.png') }}" alt="Icon Immigration" class="w-1/2 mb-5">
                            <h3 class="text-lg font-bold mt-5 mb-2">IMMIGRATION</h3>
                            <div class="w-full h-0.5 bg-black mb-4"></div>
                            <p class="text-gray-600 text-center text-sm hover:text-base" style="margin-bottom:20%;">We offers comprehensive visa and work permit application services designed to streamline and simplify the process for an organization.</p>
                            <button class="px-8 py-4 bg-yellow-400 text-black font-bold rounded-full text-sm hover:bg-orange-500 hover:text-white transition">Request for Proposal</button>
                            </div>
                        </div>

                    </div>
                </section>
                {{-- END SERVICES --}}
                {{-- START ABOUT US --}}
                <section id="about-us" class="bg-white relative w-full h-full overflow-hidden">
                    <div class="bg-three bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <div class="container py-16 md:px-20 px-10 grid grid-cols-1 md:grid-cols-2  lg:grid-cols-2 md:gap-10 lg:gap-10 items-center">
                        <div class="md:flex justify-center">
                            <img src="{{ asset('img/about-us.jpg') }}" alt="About Us" class="w-5/6 md:w-[100%] mx-auto h-auto">
                            </div>
                            <div class="text-center md:w-3/2 lg:w-4/5 w-3/2">
                                <h1 class="tracking-tight font-bold md:text-6xl lg:text-custom-xl text-8xl">About</h1>
                                <h1 class="tracking-tight md:text-6xl lg:text-custom-xl text-8xl font-bold text-orange-500 z-30 md:mt-[-50px] lg:pt-[-150px] mt-[-50px]">Us</h1>
                                <p class="text-sm leading-relaxed">
                                    We understand that success in today’s dynamic business environment requires the right talent, seamless administrative support, and expert visa services. As your dedicated partner, we bring unparalleled expertise to streamline your operations and empower your growth journey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative bg-white text-center pt-24 pb-12">
                        <div class="flex grid grid-rows-1 md:grid-cols-3 gap-10 items-center justify-center">
                            <hr class="flex-1 border-t-2 border-orange-500">
                            <h2 class="mx-4 text-3xl font-bold">What Sets Us Apart?</h2>
                            <hr class="flex-1 border-t-2 border-orange-500">
                        </div>
                    </div>
                    <div class="bg-white grid md:grid-cols-3 grid-cols-1 md:gap-8 lg:gap-8 place-content-center content-center px-10">
                        <div class="md:p-6 lg:p-6 bg-white text-center">
                            <img src="{{ asset('img/industry.png') }}" alt="Icon Industry" class="w-40 md:w-20 h-auto mb-4 mx-auto">
                            <h3 class="text-xl font-semibold mb-2 text-orange-500">Industry Expertise</h3>
                            <p class="text-sm">Benefit from our in-depth knowledge of diverse industries. We tailor our services to meet the specific demands of your sector, ensuring a customized and effective approach.</p>
                        </div>
                        <div class="p-6 bg-white text-center">
                            <img src="{{ asset('img/client.png') }}" alt="Icon Client" class="w-40 md:w-20 h-auto mb-4 mx-auto">
                            <h3 class="text-xl font-semibold mb-2 text-orange-500">Client-Centric Approach</h3>
                            <p class="text-sm">Your goals are our goals. We take the time to understand your objectives, tailoring our services to align with your vision. Your success story is at the heart of everything we do.</p>
                        </div>
                        <div class="p-6 bg-white text-center">
                            <img src="{{ asset('img/tech.png') }}" alt="Icon Tech" class="w-40 md:w-20 h-auto mb-4 mx-auto">
                            <h3 class="text-xl font-semibold mb-2 text-orange-500">Technology-Driven Approach</h3>
                            <p class="text-sm">Embrace innovation with our technology-driven solutions. We leverage cutting-edge tools to enhance efficiency and provide you with a competitive edge.</p>
                        </div>
                    </div>
                    <div class="bg-white md:px-32 lg:px-64 grid md:grid-cols-2 grid-cols-1 gap-8 place-content-center content-center">
                        <div class="p-6 bg-white text-center">
                            <img src="{{ asset('img/transparent.png') }}" alt="Icon Transparent" class="w-40 md:w-20 h-auto mb-4 mx-auto">
                            <h3 class="text-xl font-semibold mb-2 text-orange-500">Transparent Processes</h3>
                            <p class="text-sm">Trust is paramount. We maintain transparency in our processes, keeping you informed every step of the way. Your peace of mind is our priority.</p>
                        </div>
                        <div class="p-6 bg-white text-center">
                            <img src="{{ asset('img/tailored.png') }}" alt="Icon Tailored" class="w-40 md:w-20 h-auto mb-4 mx-auto">
                            <h3 class="text-xl font-semibold mb-2 text-orange-500">Tailored Solutions</h3>
                            <p class="text-sm">One size does not fit all. Our solutions are customized to meet the unique needs of your business. Your success story is our top priority.</p>
                        </div>
                    </div>
                    <div class="flex px-5 md:px-24 pt-5 grid md:grid-cols-5 grid-cols-1 pb-20 bg-white">
                        <div class="md:col-span-4 mt-[40%] md:mt-0 md:w-4/5 md:text-start text-center pr-4">
                            <div class="mb-10">
                                <h5 class="text-xl tracking-tight font-bold mb-4">Strategic Recruitment</h5>
                                <p class="text-sm">Elevate your workforce with our strategic recruitment solutions. We go beyond just filling positions – we find the perfect match for your company culture and objectives, ensuring long-term success.</p>
                            </div>
                            <div class="md:ml-20 mb-10">
                                <h5 class="text-xl tracking-tight font-bold mb-4">Effortless Administration</h5>
                                <p class="text-sm">Say goodbye to administrative hassles. Our comprehensive admin services cover everything from documentation management to HR support, allowing you to focus on your core business functions.</p>
                            </div>
                            <div class="md:ml-40 mb-10">
                                <h5 class="text-xl tracking-tight font-bold mb-4">Visa Expertise</h5>
                                <p class="text-sm">Navigating visa processes can be a labyrinth. Let our visa experts guide you through the complexities, offering reliable and timely services for individuals and businesses alike.</p>
                            </div>
                        </div>
                        <div class="md:col-span-1 mt-[-200%] md:mt-0 md:pl-4">
                            <p class="font-semibold text-3xl p-4 text-center md:text-right leading-relaxed tracking-tighter">Unlock Your Business Potential with <span class="text-orange-500">8Bacus Corp.</span> Your Complete Solutions Partner!</p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- END ABOUT US --}}
                {{-- START INDUSTRY --}}
                <section id="industry" class="bg-black relative items-center w-full overflow-hidden">
                    <div class="bg-four bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <div>
                        <h2 class="text-5xl mb-10 text-orange-500 text-center font-bold tracking-tight">Industries We Serve</h2>
                        <div class="px-20 md:px-5 grid md:grid-cols-4 grid-cols-1 md:gap-4 place-content-center">
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/tech-2.png') }}" alt="Icon Technology" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">Technology</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/service.png') }}" alt="Icon Service" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold">Service Type</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/health.png') }}" alt="Icon Healthcare" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">Healthcare</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/bank.png') }}" alt="Icon Banking" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">Banking & Infrastracture</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/financial.png') }}" alt="Icon Financial" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">Financial Technology</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/retail.png') }}" alt="Icon Retail" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">Retail</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/e-commerce.png') }}" alt="Icon E-commerce" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">E-commerce</h3>
                            </div>
                            <div class="p-6 rounded-[20px] h-6/7 mb-4 bg-white text-center">
                                <img src="{{ asset('img/manufacturing.png') }}" alt="Icon Manufacturing" class="h-24 mb-4 mx-auto">
                                <h3 class="text-xl font-bold mb-2">Manufacturing & Others</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-white md:px-20 px-10 md:pb-24 pb-10">Your concerns are our priority. We proactively collaborate with you to understand your challenges and goals, ensuring that our services are perfectly aligned with your vision for success. We pride ourselves on being responsive and attentive partners, ready to address your needs and provide timely solutions.</p>
                </section>
                {{-- END INDUSTRY --}}
                {{-- START PARTNERS --}}
                <section id="partners" class="bg-white relative items-center w-full overflow">
                    <div class="bg-five bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <h2 class="text-5xl py-20 mb-10 text-center font-bold tracking-tight">Our Partners</h2>
                    <div class="lg:mx-40 lg:pb-32 swiper-container relative flex items-center justify-center">
                        <a id="prev" class="px-10"><i class="fa-solid fa-angle-left fa-2xl" style="color: #fb8500;"></i></a>
                        <div class="swiper-container md:w-[50%] w-[75%]">
                            <div class="swiper-wrapper">
                                <div class="sliders">
                                    <img src="{{ asset('img/slider-1.png') }}" alt="Partner 1" class="mx-auto">
                                </div>
                                <div class="sliders">
                                    <img src="{{ asset('img/slider-2.png') }}" alt="Partner 2" class="mx-auto">
                                </div>
                                <div class="sliders">
                                    <img src="{{ asset('img/slider-3.png') }}" alt="Partner 3" class="mx-auto">
                                </div>
                                <div class="sliders">
                                    <img src="{{ asset('img/slider-4.png') }}" alt="Partner 4" class="mx-auto">
                                </div>
                            </div>
                        </div>
                        <a id="next" class="px-10"><i class="fa-solid fa-angle-right fa-2xl" style="color: #fb8500;"></i></a>
                    </div>
                </section>
                {{-- END PARTNERS --}}
                {{-- START EVENTS --}}
                <section id="events" class="bg-white relative items-center w-full h-100 overflow">
                    <div class="bg-six bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <h2 class="text-5xl py-20 mb-10 text-center font-bold tracking-tight">Company Events</h2>
                    <div id="photo-grid" class="lg:px-32 px-5 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                        <div class="photo"><img src="{{ asset('img/photo-1.jpg') }}" alt="Event 1"></div>
                        <div class="photo"><img src="{{ asset('img/photo-2.jpg') }}" alt="Event 2"></div>
                        <div class="photo"><img src="{{ asset('img/photo-3.jpg') }}" alt="Event 3"></div>
                        <div class="photo"><img src="{{ asset('img/photo-4.jpg') }}" alt="Event 4"></div>
                        <div class="photo"><img src="{{ asset('img/photo-5.jpg') }}" alt="Event 5"></div>
                        <div class="photo"><img src="{{ asset('img/photo-6.jpg') }}" alt="Event 6"></div>
                        <div class="photo hidden"><img src="{{ asset('img/photo-7.jpg') }}" alt="Event 7"></div>
                        <div class="photo hidden"><img src="{{ asset('img/photo-8.jpg') }}" alt="Event 8"></div>
                        <div class="photo hidden"><img src="{{ asset('img/photo-9.jpg') }}" alt="Event 9"></div>
                    </div>
                    
                    <div class="text-center mt-8 md:pb-20 pb-10">
                        <button id="load-more" class="px-6 py-3 bg-yellow-500 text-black font-semibold rounded-[23px] hover:bg-orange-500 hover:text-white">Load More</button>
                    </div>
                </section>
                {{-- END EVENTS --}}
                {{-- START CAREERS --}}
                <section id="careers" class="bg-white relative items-center w-full h-100 overflow">
                    <div class="bg-six bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <h2 class="text-5xl py-20 mb-10 text-center font-bold tracking-tight">Careers</h2>
                    <div class="flex flex-col items-center mt-8 pb-8 md:px-32 px-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <button class="job-btn py-4 md:w-5/4 lg:w-5/4 w-75% grid grid-cols-4 rounded-[20px] bg-orange-400 font-bold text-gray-800 text-lg hover:bg-orange-600 place-content-between" data-job="job1"><span class="col-span-3">Front-end Developers</span><i class="fa-solid fa-arrow-right fa-2xl mt-4 col-span-1" style="color: black;"></i></button>
                        <button class="job-btn py-4 md:w-5/4 lg:w-5/4 w-75% grid grid-cols-4 rounded-[20px] bg-orange-400 font-bold text-gray-800 text-lg hover:bg-orange-600 place-content-between" data-job="job2"><span class="col-span-3">Back-end Developers</span><i class="fa-solid fa-arrow-right fa-2xl mt-4 col-span-1" style="color: black;"></i></button>
                        <button class="job-btn py-4 md:w-5/4 lg:w-5/4 w-75% grid grid-cols-4 rounded-[20px] bg-orange-400 font-bold text-gray-800 text-lg hover:bg-orange-600 place-content-between" data-job="job3"><span class="col-span-3">UI/UX Designer</span><i class="fa-solid fa-arrow-right fa-2xl mt-4 col-span-1" style="color: black;"></i></button>
                        <button class="job-btn py-4 md:w-5/4 lg:w-5/4 w-75% grid grid-cols-4 rounded-[20px] bg-orange-400 font-bold text-gray-800 text-lg hover:bg-orange-600 place-content-between" data-job="job4"><span class="col-span-3">Sale Support Specialist</span><i class="fa-solid fa-arrow-right fa-2xl mt-4 col-span-1" style="color: black;"></i></button>
                        <button class="job-btn py-4 md:w-5/4 lg:w-5/4 w-75% grid grid-cols-4 rounded-[20px] bg-orange-400 font-bold text-gray-800 text-lg hover:bg-orange-600 place-content-between" data-job="job5"><span class="col-span-3">E-commerce Marketer</span><i class="fa-solid fa-arrow-right fa-2xl mt-4 col-span-1" style="color: black;"></i></button>
                        <button class="job-btn py-4 md:w-5/4 lg:w-5/4 w-75% grid grid-cols-4 rounded-[20px] bg-orange-400 font-bold text-gray-800 text-lg hover:bg-orange-600 place-content-between" data-job="job6"><span class="col-span-3">Key Accounts Manager</span><i class="fa-solid fa-arrow-right fa-2xl mt-4 col-span-1" style="color: black;"></i></button>
                    </div>
                    {{-- start modal --}}
                    <div id="job1-modal" class="modal w-full pt-[25%] md:pt-[25%] lg:pt-[5%] h-full hidden">
                        <div class="modal-content shadow-lg shadow-white">
                            <span class="close">&times;</span>
                            <h3 class="text-2xl font-bold mb-4">Front End Developer</h3>
                    
                            <h4 class="text-sm font-bold mb-2">Specific Duties & Responsibilities are as follows:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Develop, Upgrade and Deploy high-quality Frontend.</li>
                                <li>Design, develop and test UI for mobile and web applications.</li>
                                <li>Optimize the app for maximum speed.</li>
                                <li>Collaborate with back-end developers and UI/UX designers to improve the usability.</li>
                            </ul>
                    
                            <h4 class="text-sm font-bold mt-4 mb-2">Job Qualifications:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Minimum 2 years experience in web front application development using HTML, CSS, JavaScript, and JQuery.</li>
                                <li>Willing to work with tight deadlines.</li>
                                <li>Can use CSS frameworks such as Bootstrap, Material Ui, or Foundation.</li>
                                <li>Stay up-to-date on emerging technologies.</li>
                                <li>Communication skills fluent in English is a must (Oral and written).</li>
                                <li>Understanding in version control systems such as GIT will be an advantage.</li>
                            </ul>

                            <div class="grid grid-cols-7">
                                <div class="col-span-5">
                                    <button id="apply-now-btn" class="bg-orange-500 text-black font-semibold p-5 mt-5 ml-3 transition-transform transform hover:scale-95 hover:text-white">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="space-x-2 place-content-between mt-2 col-span-2">
                                    <button>
                                        <i class="fa-brands fa-linkedin fa-3x" style="color: #1877F2;"></i>
                                    </button>
                                    <button class="my-5">
                                        <i class="fa-brands fa-facebook fa-3x" style="color: 	#0660d6;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="job2-modal" class="modal w-full pt-[25%] md:pt-[25%] lg:pt-[5%] h-full hidden">
                        <div class="modal-content shadow-lg shadow-white">
                            <span class="close">&times;</span>
                            <h3 class="text-2xl font-bold mb-4">Back End Developer</h3>
                    
                            <h4 class="text-sm font-bold mb-2">Specific Duties & Responsibilities are as follows:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Take responsibility for the tech development of the product</li>
                                <li>Work closely with the founders to define and build the core product</li>
                                <li>Participate in the organization/ planning of development resources and schedules</li>
                                <li>Organize and facilities stand-up meetings, reviews, retrospectives, sprint and release planning, demos, and other related meetings with stakeholders</li>
                                <li>Appetite for learning new things and improving existing ones, and cultivating that same appetite in the development team</li>
                            </ul>
                    
                            <h4 class="text-sm font-bold mt-4 mb-2">Job Qualifications:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>More than 1 year experience in web application development using <span class="font-bold">Laravel framework.</span></li>
                                <li>Have a good understanding in <span class="font-bold">API and its related security</span></li>
                                <li>Experienced in at least one third party integration project (better if payment gateway third party)</li>
                                <li>Knowledge of version control systems such as GIT</li>
                                <li>Knowledge of web scraping</li>
                                <li>Have a strong personality and able to work under pressure till meet deadlines</li>
                                <li class="font-bold">Amenable to work onsite in Makati City</li>
                                <li class="font-bold">Can start as soon as possible</li>
                            </ul>

                            <div class="grid grid-cols-7">
                                <div class="col-span-5">
                                    <button id="apply-now-btn" class="bg-orange-500 text-black font-semibold p-5 mt-5 ml-3 transition-transform transform hover:scale-95 hover:text-white">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="space-x-2 place-content-between mt-2 col-span-2">
                                    <button>
                                        <i class="fa-brands fa-linkedin fa-3x" style="color: #1877F2;"></i>
                                    </button>
                                    <button class="my-5">
                                        <i class="fa-brands fa-facebook fa-3x" style="color: 	#0660d6;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="job3-modal" class="modal w-full pt-[20%] md:pt-[20%] lg:pt-[5%] h-full hidden">
                        <div class="modal-content shadow-lg shadow-white">
                            <span class="close">&times;</span>
                            <h3 class="text-2xl font-bold mb-4">UI/UX Designer</h3>
                            <p class="text-sm">The UI/UX Designer will be working closely with the design and development teams with the primary objective of designing next-generation responsive websites, apps, and other mobile interfaces across multiple platforms such as iOS, Android, Windows, and mobile web. He/she will provide direction to the technical team members from conception to final design and will also be responsible for establishing UI/UX design standards, guidelines, and strategies that will serve as the foundation for creating cohesive experiences.</p>
                            <h4 class="text-sm font-bold mb-2">Specific Duties & Responsibilities are as follows:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Design the information architecture and interaction models for projects which may include websites, mobile experiences, or other touch-points.</li>
                                <li>Collaborate with cross-functional teams throughout the design process.</li>
                                <li>Execute all visual design stages from concept to final hand-off to developers.</li>
                                <li>Present and defend designs and key deliverables to peers and executive-level stakeholders.</li>
                                <li>Create wireframes, storyboards, user flows, process flows and site maps to effectively communicate interaction and design ideas.</li>
                                <li>Lead regular design reviews and participate in or conduct usability tests.</li>
                                <li>Identify and troubleshoot UX problems.</li>
                                <li>Conduct user research and evaluate user feedback.</li>
                                <li>Keep abreast of the latest standards, changes, and trends in the UI, UX, and mobile design fields.</li>
                                <li>Provide strategic thinking and leadership.</li>
                                <li>Able to lead teams and work on projects simultaneously with tight deadlines.</li>
                                <li>Able to understand how to apply business strategy and branding issues with user needs and technological constraints.</li>
                                <li>Solid understanding of common software project management and development practices.</li>
                            </ul>
                    
                            <h4 class="text-sm font-bold mt-4 mb-2">Job Qualifications:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>With 3 to 5 working experience</li>
                                <li>At least 1 Year of working experience in the online gaming industry.</li>
                                <li>Experience in end-to-end interface design in software/web technologies.</li>
                                <li>Proficiency in Figma (is a MUST), Photoshop, Illustrator, or other design tools.</li>
                                <li>Highly skilled in visual design including UI, Icon, Illustration, and Prototyping across different platforms.</li>
                                <li>The candidate must be able to tell the difference between UI and UX design</li>
                                <li>Can start as soon as possible</li>
                                <li>Amenable to work ONSITE in Makati City</li>
                            </ul>

                            <div class="grid grid-cols-7">
                                <div class="col-span-5">
                                    <button id="apply-now-btn" class="bg-orange-500 text-black font-semibold p-5 mt-5 ml-3 transition-transform transform hover:scale-95 hover:text-white">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="space-x-2 place-content-between mt-2 col-span-2">
                                    <button>
                                        <i class="fa-brands fa-linkedin fa-3x" style="color: #1877F2;"></i>
                                    </button>
                                    <button class="my-5">
                                        <i class="fa-brands fa-facebook fa-3x" style="color: 	#0660d6;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="job4-modal" class="modal w-full pt-[25%] md:pt-[25%] lg:pt-[5%] h-full hidden">
                        <div class="modal-content shadow-lg shadow-white">
                            <span class="close">&times;</span>
                            <h3 class="text-2xl font-bold mb-4">Sale Support Specialist</h3>
                            <p class="text-sm">We are seeking a highly qualified Sales Support Specialist to join our team. The ideal candidate should possess extensive experience in sales and customer service, with a deep understanding of best practices in both areas. Responsible for administrative duties to help the work of the sales team. You must respond to customers' questions, resolve their complaints, and maintain sales-related databases on time.</p>
                            <h4 class="text-sm font-bold mb-2">Responsibilities:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Providing valuable support to our sales team and effectively responding to customer and</li>
                                <li>Manage sales tracking tools and report on important information</li>
                                <li>Developing and monitoring performance indicators</li>
                                <li>Performing data entry duties in regard to metrics, sales figures, and other key data</li>
                                <li>Communicating sales projects to marketing, evaluating and seeing through the</li>
                                <li>completion of all marketing request forms and proof, detailed information, and support to</li>
                                <li>ensure sales and marketing success together.</li>
                                <li>Liaise with account managers to develop specific sales strategies</li>
                            </ul>
                    
                            <h4 class="text-sm font-bold mt-4 mb-2">Requirements and Skills:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Proven work experience as a Sales support specialist or Sales support associate</li>
                                <li>Hands-on experience with ERP and CRM systems</li>
                                <li>Proficiency with MS Office Suite, particularly MS Excel</li>
                                <li>In-depth understanding of sales principles and customer service practices</li>
                                <li>Excellent communication skills</li>
                                <li>Analytical and multitasking skills</li>
                                <li>Teamwork and motivational skills</li>
                                <li>Keen to details</li>
                                <li>BS degree in Marketing or associates degree in a relevant field a plus</li>
                            </ul>

                            <div class="working-rule text-sm">
                                <p class="mb-5 mt-5"><span class="font-bold">Working days:</span> Monday – Saturday</p>
                                <p class="mb-5"><span class="font-bold">Working hours:</span> 10:00 a.m. – 7:00 p.m. including 1 hour lunch break</p>
                                <p class="mb-5"><span class="font-bold">Work set-up:</span> Full on-site</p>
                                <p class="mb-5"><span class="font-bold">Salary range:</span> Php 20,000 – Php 25,000 + (allowance)</p>
                            </div>

                            <div class="grid grid-cols-7">
                                <div class="col-span-5">
                                    <button id="apply-now-btn" class="bg-orange-500 text-black font-semibold p-5 mt-5 ml-3 transition-transform transform hover:scale-95 hover:text-white">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="space-x-2 place-content-between mt-2 col-span-2">
                                    <button>
                                        <i class="fa-brands fa-linkedin fa-3x" style="color: #1877F2;"></i>
                                    </button>
                                    <button class="my-5">
                                        <i class="fa-brands fa-facebook fa-3x" style="color: 	#0660d6;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="job5-modal" class="modal w-full pt-[25%] md:pt-[25%] lg:pt-[5%] h-full hidden">
                        <div class="modal-content shadow-lg shadow-white">
                            <span class="close">&times;</span>
                            <h3 class="text-2xl font-bold mb-4">E-Commerce Digital Marketer</h3>
                            <p class="text-sm">As an E-Commerce Digital Marketer, you will be responsible for planning and executing digital marketing strategies for online businesses, particularly those engaged in e-commerce and social media platforms. The primary goal is to drive traffic, increase brand visibility, and ultimately boost online sales and revenue. Their ability to reach and engage potential customers and drive sales is crucial to the success of e-commerce ventures.</p>
                            <h4 class="text-sm font-bold mb-2">Key Responsibilities:</h4>
                            <p class="text-sm mt-5 mb-5"><span class="font-bold">Digital Marketing Strategy:</span>Develop and execute comprehensive digital marketing strategies tailored to the specific needs and goals of the e-commerce business.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Social Media Marketing:</span>Manage social media profiles and create content for platforms like Facebook, Instagram, and Twitter to build brand awareness and drive traffic and sales.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Search Engine Optimization (SEO):</span>Optimize the e-commerce website to improve its organic search engine rankings and visibility, driving more organic traffic.</p>
                            <p class="text-sm mb-5"><span class="font-bold">E-commerce Analytics: </span> Monitor and analyze data from tools like e-commerce tracking, and marketing automation platforms to evaluate the performance of marketing campaigns and make data-driven decisions.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Social Media Advertising:</span>Develop and execute paid social media advertising campaigns on platforms like Facebook Ads, Instagram Ads, and Tiktok Ads to drive targeted traffic and sales.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Online Advertising:</span>Explore other forms of online advertising, such as display advertising, retargeting, and native advertising, to promote products and services.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Affiliate Marketing:</span> Collaborate with affiliate marketers and manage affiliate programs to expand the reach of the e-commerce business.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Customer Engagement:</span> Implement strategies for engaging and retaining customers, including loyalty programs, customer reviews, and feedback mechanisms.</p>
                            <p class="text-sm mb-5"><span class="font-bold">Market Research:</span> Stay updated on industry trends, competitor strategies, and customer preferences to adapt and refine marketing approaches.</p>
                    
                            <h4 class="text-sm font-bold mt-4 mb-2">Qualifications and Requirements:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Must be a woman between the ages of 25 and 30 years old.</li>
                                <li>Has relevant experience in E-Commerce Digital marketing or a related role in managing</li>
                                <li>online multiple platforms like Facebook, Instagram, and TikTok.</li>
                                <li>Strong understanding of e-commerce platforms like Shopify, Shopee, and Lazada.</li>
                                <li>Proficient in using analytics tools to monitor and optimize sales performance.</li>
                                <li>Excellent budget management skills and ability to allocate resources effectively.</li>
                                <li>Strong analytical skills and data-driven decision-making capabilities.</li>
                                <li>Exceptional organizational and time management skills to handle multiple tasks</li>
                                <li>efficiently.</li>
                                <li>Excellent communication and interpersonal skills to collaborate with various teams and</li>
                                <li>vendors.</li>
                            </ul>

                            <div class="working-rule text-sm">
                                <p class="mb-5 mt-5"><span class="font-bold">Working days:</span> Monday – Saturday</p>
                                <p class="mb-5"><span class="font-bold">Working hours:</span> 10:00 a.m. – 7:00 p.m. including 1 hour lunch break</p>
                                <p class="mb-5"><span class="font-bold">Work set-up:</span> Full on-site</p>
                                <p class="mb-5"><span class="font-bold">Salary range:</span> Php 20,000 – Php 25,000 + (allowance)</p>
                            </div>

                            <div class="grid grid-cols-7">
                                <div class="col-span-5">
                                    <button id="apply-now-btn" class="bg-orange-500 text-black font-semibold p-5 mt-5 ml-3 transition-transform transform hover:scale-95 hover:text-white">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="space-x-2 place-content-between mt-2 col-span-2">
                                    <button>
                                        <i class="fa-brands fa-linkedin fa-3x" style="color: #1877F2;"></i>
                                    </button>
                                    <button class="my-5">
                                        <i class="fa-brands fa-facebook fa-3x" style="color: 	#0660d6;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="job6-modal" class="modal w-full pt-[25%] md:pt-[25%] lg:pt-[5%] h-full hidden">
                        <div class="modal-content shadow-lg shadow-white">
                            <span class="close">&times;</span>
                            <h3 class="text-2xl font-bold mb-4">Key Account Executive</h3>
                            <p class="text-sm mb-5">A Key Account Executive is responsible for managing and nurturing the relationships with a</p>
                            <p class="text-sm mb-5">company's most important and strategic customers or clients Their primary goal is to ensure that these key accounts meet their needs for service and remain satisfied with the products or</p>
                            <p class="text-sm mb-5">services provided. A critical role in maintaining and growing revenue for businesses by focusing on their most valuable customers. Their work is vital in retaining key accounts, ensuring customer loyalty, and maximizing the lifetime value of these clients to the company.</p>
                            
                            <div class="key-resp w-1/2">
                                <h4 class="text-sm font-bold mb-2">Key Responsibilities:</h4>
                                <p class="text-sm mt-5 mb-5"><span class="font-bold">Customer Relationship Management:</span> Build and maintain strong, long-term relationships with key clients, understanding their needs and business objectives.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Account Development: </span>Identify opportunities for account growth and expansion, collaborating with the sales and marketing teams to capitalize on these opportunities.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Account Strategy: </span>Develop and implement a strategic plan for each key account, outlining the account's objectives, targets, and action plans.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Market Analysis:</span> Stay informed about industry trends and competitive developments, sharing insights with key clients to enhance their business strategies.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Data Analysis: </span>Analyze data related to key account performance, such as sales metrics and customer satisfaction scores, to inform decision-making and strategy.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Custom Solutions:</span> Collaborate with product development and service teams to create customized solutions and offerings for key clients when necessary. Feedback and Improvement: Gather feedback from key clients to identify areas for improvement, address concerns, and make necessary adjustments.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Team Collaboration: </span>Coordinate efforts with internal teams, including sales, marketing, customer support, and product development, to ensure seamless service delivery to key accounts.</p>
                                <p class="text-sm mb-5"><span class="font-bold">Reporting: </span>Prepare and deliver regular reports to company management and key clients, providing updates on account performance and strategic initiatives.</p>
                            </div>
                    
                            <h4 class="text-sm font-bold mt-4 mb-2">Qualifications:</h4>
                            <ul class="list-disc text-sm list-inside ml-5">
                                <li>Must be foreign living in the Philippines for more than 3 years.</li>
                                <li>At least 2 years of working in a related or unrelated field is preferred.</li>
                                <li>Must possess good communication and people skills. Able to confidently communicate</li>
                                <li>and present in English to clients across all position levels.</li>
                                <li>Highly committed and resilient when faced with challenges. Has the initiative and</li>
                                <li>capacity to thrive in an ever-evolving environment.</li>
                                <li>Highly analytic; displaying the capacity to come up with strategies to grow accounts and</li>
                                <li>thus meet desired outcomes.</li>
                                <li>Should be proactive, possessing a heart for our purpose of helping others succeed.</li>
                            </ul>

                            <div class="working-rule text-sm">
                                <p class="mb-5 mt-5"><span class="font-bold">Working days:</span> Monday – Saturday</p>
                                <p class="mb-5"><span class="font-bold">Working hours:</span> 10:00 a.m. – 7:00 p.m. including 1 hour lunch break</p>
                                <p class="mb-5"><span class="font-bold">Work set-up:</span> Full on-site</p>
                                <p class="mb-5"><span class="font-bold">Salary range:</span> Php 20,000 – Php 25,000 + (allowance)</p>
                            </div>

                            <div class="grid grid-cols-7">
                                <div class="col-span-5">
                                    <button id="apply-now-btn" class="bg-orange-500 text-black font-semibold p-5 mt-5 ml-3 transition-transform transform hover:scale-95 hover:text-white">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="space-x-2 place-content-between mt-2 col-span-2">
                                    <button>
                                        <i class="fa-brands fa-linkedin fa-3x" style="color: #1877F2;"></i>
                                    </button>
                                    <button class="my-5">
                                        <i class="fa-brands fa-facebook fa-3x" style="color: 	#0660d6;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal --}}
                </section>
                {{-- END CAREERS --}}
                {{-- START CHOOSE US --}}
                <section id="choose-us" class="bg-white relative items-center w-full h-100 overflow">
                    <div class="bg-six bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <div class="container py-16 md:px-20 lg:px-20 px-5 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <div class="flex justify-center mb-20">
                            <img src="{{ asset('img/choose-us.jpg') }}" alt="Choose Us" class=" lg:w-[50%] w-[80%] h-auto m-auto">
                            </div>
                            <div class="md:text-start lg:text-start m-auto text-center w-4/5">
                                <h1 class="tracking-tight font-bold text-3xl text-yellow-400">Why Should You Choose Us?</h1>
                                <p class="text-sm my-5 pb-5 leading-relaxed w-6/5">
                                    Welcome to 8Bacus Corp., where excellence meets innovation. We pride ourselves on being the driving force behind your business success by providing unmatched recruitment, admin, and visa services. Choose us for a seamless journey toward growth and efficiency.
                                </p>
                                <button class="bg-yellow-400 text-black font-semibold text-sm py-4 px-12 lg:w-1/2 hover:bg-orange-500 rounded-[40px]">LEARN MORE</button>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- END CHOOSE US --}}
                {{-- START NEWS --}}
                <section id="news" class="bg-white relative items-center w-full h-100 overflow">
                    <div class="bg-eight bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <h2 class="text-5xl lg:py-20 py-10 mb-10 text-center font-bold tracking-tight">News</h2>
                    <div class="md:grid lg:grid flex flex-col md:grid-cols-2 lg:grid-cols-4 items-center md:gap-8 lg:gap-8 md:mx-[10%] lg:mx-10 pb-32">
                        <div class="relative group border border-transparent border border-gray-200 transition-all duration-300 lg:w-[250px] w-6/7">
                            <div class="overflow-hidden relative">
                                <img src="{{ asset('img/news-1.jpg') }}" alt="News 1" class="w-full h-32 my-5 object-cover">
                                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                <div class="absolute inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-arrow-right text-white text-3xl"></i>
                                </div>
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="text-lg tracking-tight text-gray-800 hover:text-gray-300 font-bold mb-2">Tech Talent Has Growing Expectations: Will Employers Rise to the Challenge?</h3>
                                <p class="text-sm mb-6">What happens when tech talent teams, used to analyzing data...</p>
                                <a href="#" class="text-sm font-medium text-blue-800 hover:text-blue-900 font-semibold">Read More</a>
                            </div>
                        </div>
                        <div class="relative group border border-transparent border border-gray-200 transition-all duration-300 lg:w-[250px] w-6/7">
                            <div class="overflow-hidden relative">
                                <img src="{{ asset('img/news-2.jpg') }}" alt="News 1" class="w-full h-32 my-5 object-cover">
                                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                <div class="absolute inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-arrow-right text-white text-3xl"></i>
                                </div>
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="text-lg tracking-tight text-gray-800 hover:text-gray-300 font-bold mb-2">Tech Talent Has Growing Expectations: Will Employers Rise to the Challenge?</h3>
                                <p class="text-sm mb-6">What happens when tech talent teams, used to analyzing data...</p>
                                <a href="#" class="text-sm font-medium text-blue-800 hover:text-blue-900 font-semibold">Read More</a>
                            </div>
                        </div>
                        <div class="relative group border border-transparent border border-gray-200 transition-all duration-300 lg:w-[250px] w-6/7">
                            <div class="overflow-hidden relative">
                                <img src="{{ asset('img/news-3.jpg') }}" alt="News 1" class="w-full h-32 my-5 object-cover">
                                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                <div class="absolute inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-arrow-right text-white text-3xl"></i>
                                </div>
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="text-lg tracking-tight text-gray-800 hover:text-gray-300 font-bold mb-2">Tech Talent Has Growing Expectations: Will Employers Rise to the Challenge?</h3>
                                <p class="text-sm mb-6">What happens when tech talent teams, used to analyzing data...</p>
                                <a href="#" class="text-sm font-medium text-blue-800 hover:text-blue-900 font-semibold">Read More</a>
                            </div>
                        </div>
                        <div class="relative group border border-transparent border border-gray-200 transition-all duration-300 lg:w-[250px] w-6/7">
                            <div class="overflow-hidden relative">
                                <img src="{{ asset('img/news-4.jpg') }}" alt="News 1" class="w-full h-32 my-5 object-cover">
                                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                <div class="absolute inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <i class="fas fa-arrow-right text-white text-3xl"></i>
                                </div>
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="text-lg tracking-tight text-gray-800 hover:text-gray-300 font-bold mb-2">Tech Talent Has Growing Expectations: Will Employers Rise to the Challenge?</h3>
                                <p class="text-sm mb-6">What happens when tech talent teams, used to analyzing data...</p>
                                <a href="#" class="text-sm font-medium text-blue-800 hover:text-blue-900 font-semibold">Read More</a>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- END NEWS --}}
                {{-- START CONNECT --}}
                <section id="connect" class="bg-black relative items-center w-full pb-3 overflow">
                    <div class="bg-eight bg-cover bg-center h-72 flex items-center justify-center">
                    </div>
                    <div class="container mb-10">
                        <div class="flex grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap:4 md:gap-0 lg:gap-0 items-center justify-center mb-8">
                            <h2 class="text-4xl text-white lg:text-right text-center font-bold">Connect with</h2>
                            <div class="md:ml-4 lg:ml-0 pt-5 md:pt-0 lg:pt-0">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-12 pl-20 md:pl-0 lg:pl-0">
                            </div>
                        </div>
                        <p class="text-white text-sm text-center mb-10">We are your dedicated partner on the path to success.</p>
                        
                        <div class="flex justify-center">
                            <div class="map-container w-[90%]"> <!-- Adjust width as needed -->
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.914494760279!2d-122.08385128448913!3d37.38605167983195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb7695a1bcb65%3A0xded8dfbded4a89f!2sGoogleplex!5e0!3m2!1sen!2sus!4v1634165482788!5m2!1sen!2sus&maptype=roadmap&disableDefaultUI=true" 
                                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- END CONNECT --}}
                {{-- START FOOTER --}}
                <footer class="bg-white pt-12">
                    <div class="container px-auto pl-20 md:pb-5 mb-5">
                        <div class="grid grid-cols-1 md:text-start lg:text-start text-center md:grid-cols-4 gap-8 md-gap-10 w-4/5 md:w-full">
                            <div class="flex flex-col">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="mb-4 w-48">
                                <p class="text-sm font-semibold mb-3">
                                    We go beyond services; we provide solutions that empower your business to thrive.
                                </p>
                                <p class="text-sm font-bold ">Company landline number:</p>
                                <p class="text-sm font-semibold w-4/5">02-53104708</p>
                            </div>

                            <div class="flex flex-col">
                                <h4 class="text-lg font-bold mb-4">Our Services</h4>
                                <ul class="space-y-0">
                                    <li><a href="#" class="text-sm hover:text-gray-500">Recruitment</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Payroll Service</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Administrative Support</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Immigration / Visa Processing</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Business Registration</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Accounting & Taxation</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Business Consultancy</a></li>
                                </ul>
                            </div>

                            <div class="flex flex-col">
                                <h4 class="text-lg font-bold mb-4">Legal</h4>
                                <ul class="space-y-0">
                                    <li><a href="#" class="text-sm hover:text-gray-500">Privacy Policy</a></li>
                                    <li><a href="#" class="text-sm hover:text-gray-500">Terms and Conditions</a></li>
                                </ul>
                            </div>

                            <div class="flex flex-col space-y-10 mt-5 lg:pl-[50%]">
                                <button href="#" class="flex items-center justify-center">
                                    <i class="fa-brands fa-square-facebook fa-xl" style="color: black;"></i>
                                </button>
                                <button href="#" class="flex items-center justify-center">
                                    <i class="fa-brands fa-square-instagram fa-xl" style="color: black;"></i>
                                </button>
                                <button href="#" class="flex items-center justify-center">
                                    <i class="fa-brands fa-linkedin fa-xl" style="color: black;"></i>
                                </button>
                                <button href="#" class="flex items-center justify-center">
                                    <i class="fa-brands fa-tiktok fa-xl" style="color: black;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full py-2 pb-4 bg-orange-400 text-center">
                        <p class="text-sm font-bold">&copy;8Bacus Corporation 2024, All rights reserved.</p>
                    </div>
                    <div class="h-10 bg-black w-full"></div>
                </footer>                
                {{-- END FOOTER --}}
            </main>
        </div>
    </body>
</html>
