@extends('layouts.main')
@section('content')
	<!-- Loader --->
	<div id="loader" class="fixed top-0 left-0 w-full h-full bg-[#f3f3f3] bg-opacity-70 z-[9999999999] flex justify-center items-center dark:bg-slate-700 dark:bg-opacity-70">
		<span class="loader"></span>
	</div>
	<!-- Loader --->

	<!-- Trailer Start --->
	<div id="trailer" class="trailer invisible lg:visible">
		<i id="trailer-icon" class="fa-solid fa-arrow-down" style="color: #fff;"></i>
	</div>
	<!-- Trailer End --->

	<!-- Back to top Start --->
	<a href="#home"
		class="fixed bottom-8 right-8 z-[99999] flex h-14 w-14 items-center justify-center rounded-full transition duration-300 ease-in-out hover:border-none bg-primary hover:bg-violet-400 text-white"
		id="arrow-btn" data-type="arrow-top">
		<i class="fa-solid fa-caret-up text-lg"></i>
	</a>

	<!-- Back to top End --->

	<!-- Header Start -->
	<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
		<div class="container">
			<div class="relative flex items-center justify-between">
				<div class="px-4">
					<a href="#home" class="block py-6 text-lg lg:text-2xl font-bold text-primary" style="font-family: 'Lato', sans-serif;">roshit<span class="text-dark dark:text-white">.</span></a>
				</div>
				<div class="flex items-center px-4">
					<button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
						<span class="hamburger-line origin-top-left rounded-3xl transition duration-300 ease-in-out"></span>
						<span class="hamburger-line rounded-3xl transition duration-300 ease-in-out"></span>
						<span class="hamburger-line origin-bottom-left rounded-3xl transition duration-300 ease-in-out"></span>
					</button>

					<nav id="nav-menu"
						class="absolute top-full right-4 hidden w-full max-w-[250px] rounded-lg bg-white py-5 font-semibold shadow-lg transition duration-300 ease-in-out lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none dark:bg-dark dark:lg:bg-transparent dark:shadow-slate-600">
						<ul class="block lg:flex">
							<li class="group">
								<a href="#about"
									class="mx-8 flex py-2 text-base text-dark transition duration-200 ease-in-out group-hover:text-primary dark:text-white"
									id="interactable" data-type="about" data-target="#about">
									About</a>
							</li>
							<li class="group">
								<a href="#projects"
									class="mx-8 flex py-2 text-base text-dark transition duration-200 ease-in-out group-hover:text-primary dark:text-white"
									id="interactable" data-type="projects" data-target="#about">Projects</a>
							</li>
							<li class="group">
								<a href="#achievement"
									class="mx-8 flex py-2 text-base text-dark transition duration-200 ease-in-out group-hover:text-primary dark:text-white"
									id="interactable" data-type="achievement" data-target="#about">Achievement</a>
							</li>
							<li class="group">
								<a href="#contact"
									class="mx-8 flex py-2 text-base text-dark transition duration-200 ease-in-out group-hover:text-primary dark:text-white"
									id="interactable" data-type="contact" data-target="#about">Contact</a>
							</li>
							<li class="flex mt-3 lg:mt-0 items-center pl-8 transition duration-300">
    							<button id="dark-mode-toggle">
      								<i id="dark-mode-icon" class="fa-solid fa-sun dark:text-white text-lg"></i>
    							</button>
  							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Hero Section Start -->
	<section id="home" class="pt-36 dark:bg-dark">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full self-center px-4 lg:w-1/2" data-aos="fade-right">
					<h1 class="text-base font-semibold text-primary md:text-xl selection:text-white">
						Hi Everyone! I'm
					</h1>
					<h5 id="roshit" data-value="Roshit" class="poppins mt-1 block text-5xl font-bold text-dark lg:text-6xl dark:text-white subpixel-antialiased">Roshit
					</h5>
					<p class="mb-10 font-medium leading-relaxed text-slate-700 dark:text-slate-200 subpixel-antialiased">
						No gf just <i class="fa-solid fa-code" style="color: #c20000;"></i>
					</p>

					<a href="#about"
						class="rounded-full bg-primary px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg"
						id="interactable" data-type="arrow-down">Knows Me Better <i class="fa-solid fa-caret-down"></i></a>
				</div>
				<div class="mt-10 w-full self-end px-4 lg:w-1/2">
					<div class="relative flex justify-center">
						<img src="{{ asset('assets/pp.png') }}" alt="Roshit"
							class="relative z-10 border-2 border-slate-500 w-52 max-w-full rounded-full shadow-xl lg:w-60" draggable="false" data-aos="fade-left">

						<!-- Animated Blob Start --->
						<span class="absolute top-0 right-5 md:scale-125">
							<svg id="visual" viewBox="0 0 900 600" width="600" height="400" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
								<g transform="translate(455.27406452910225 294.22254964874855)">
									<path id="blob1"
										d="M122.8 -193C159.8 -167.3 190.9 -134.3 213.6 -94.6C236.4 -54.9 250.8 -8.4 243.7 34.4C236.6 77.2 207.8 116.2 174.2 145.8C140.5 175.4 102 195.7 59.3 213.4C16.6 231.2 -30.1 246.6 -78.5 243.4C-126.9 240.1 -176.8 218.3 -210.8 181.4C-244.9 144.4 -263 92.4 -253.6 46.7C-244.3 1 -207.4 -38.5 -177.9 -72.1C-148.3 -105.8 -126.1 -133.6 -97.6 -163.3C-69.2 -193 -34.6 -224.5 4.1 -231C42.9 -237.4 85.8 -218.8 122.8 -193"
										fill="#8b5cf6">
									</path>
								</g>

								<g transform="translate(458.61703375248453 298.4761126659022)" class="invisible">
									<path id="blob2"
										d="M148.7 -231.6C193.3 -202.8 230.4 -162.5 239.1 -116.9C247.9 -71.4 228.4 -20.7 213 25C197.7 70.7 186.5 111.3 165.6 153.6C144.7 196 114 240 70.8 262.3C27.6 284.6 -28.2 285.3 -65.7 258.4C-103.2 231.6 -122.5 177.2 -150.5 135.6C-178.6 94 -215.5 65.1 -237.4 23.9C-259.2 -17.3 -266.1 -71 -248.7 -115.5C-231.3 -159.9 -189.7 -195.2 -144.2 -223.6C-98.8 -252 -49.4 -273.5 1.4 -275.6C52.1 -277.7 104.2 -260.4 148.7 -231.6"
										fill="#8b5cf6"></path>
								</g>
							</svg>

							<script>
								const tween = KUTE.fromTo(
									'#blob1', {
										path: '#blob1'
									}, {
										path: '#blob2'
									}, {
										repeat: 999,
										duration: 3000,
										yoyo: true
									}
								)
								tween.start()
							</script>
						</span>
						<!-- Animated Blob End --->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->

	<!-- About Section Start -->
	<section id="about" class="pb-32 pt-36 dark:bg-dark">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="mb-10 w-full px-4 lg:w-1/2">
					<h4 class="mb-3 text-lg font-bold uppercase text-primary selection:text-white" data-aos="fade-right">
						About Me
					</h4>
					<h2 class="mb-5 max-w-md text-3xl font-bold text-dark lg:text-4xl dark:text-white" data-aos="fade-right">
						A guy who love code
					</h2>
					<article data-aos="fade-right" class="selection:text-white">
						<p class="max-w-xl text-base font-medium text-secondary lg:text-lg subpixel-antialiased lg:indent-5">
							My name is Muhammad Aulia Rasyid Alzahrowi, but I prefer to go by Roshit.
						</p>
						<p class="mt-2 max-w-xl text-base font-medium text-secondary lg:text-lg subpixel-antialiased lg:indent-5">
							I'm currently studying Software Engineering at SMK N 1 Bantul in Yogyakarta. I love to learn
							new
							things, which led me to the world of programming.
							I enjoy studying programming languages and
							constantly push myself to improve my skills.
						</p>
						<p class="mt-2 max-w-xl text-base font-medium text-secondary lg:text-lg subpixel-antialiased lg:indent-5">
							I have advanced proficiency in HTML, CSS, and Bootstrap, but my current focus is on learning
							the backend stack. Although it's been challenging, I'm
							enjoying the process of acquiring the skills necessary to build <span
								class="bg-slate-700 p-[2px] text-white opacity-75 dark:bg-slate-500">super-duper-mega-cool</span> web applications.
							With my frontend expertise and newfound backend knowledge, I'm eager to take on any project
							that comes my way.
						</p>
					</article>

				</div>
				<div class="w-full px-4 lg:w-1/2">
					<h3 class="mb-4 text-2xl font-semibold text-dark lg:pt-10 lg:text-3xl dark:text-white" data-aos="fade-up">
						Let's be friends!
					</h3>
					<p class="mb-6 max-w-xl text-base font-medium text-secondary lg:text-lg selection:text-white" data-aos="fade-up">
						I would love to be friends with anyone, so click the button below and let's connect!
					</p>
					<div class="flex items-center justify-center lg:justify-start" data-aos="fade-up">
						<!-- Instagram -->
						<a href="https://instagram.com/roshitx" target="_blank"
							class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 transition duration-200 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" class="fill-current" width="20"
								xmlns="http://www.w3.org/2000/svg">
								<title>Instagram</title>
								<path
									d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
							</svg>
						</a>
						<!-- Instagram End -->
						<!-- Facebook -->
						<a href="https://www.facebook.com/roshitx/" target="_blank"
							class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 transition duration-200 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
								class="fill-current">
								<title>Facebook</title>
								<path
									d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
							</svg>
						</a>
						<!-- Facebook End -->
						<!-- Github -->
						<a href="https://github.com/roshitx" target="_blank"
							class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 transition duration-200 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
								class="fill-current">
								<title>GitHub</title>
								<path
									d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
							</svg>
						</a>
						<!-- Github End -->
						<!-- LinkedIn -->
						<a href="https://www.linkedin.com/in/rsht/" target="_blank"
							class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 transition duration-200 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
								class="fill-current">
								<title>LinkedIn</title>
								<path
									d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
							</svg>
						</a>
						<!-- LinkedIn End -->
						<!-- Spotify -->
						<a href="https://sptfy.com/roshit" target="_blank"
							class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 transition duration-200 ease-in-out hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20"
								class="fill-current">
								<title>Spotify</title>
								<path
									d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z" />
							</svg>
						</a>
						<!-- Spotify End -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->

	<!-- Project Section Start -->
	<section id="projects" class="bg-slate-100 pb-16 pt-36 dark:bg-slate-800">
		<div class="container">
			<div class="w-full px-4">
				<div class="mx-auto mb-16 max-w-xl text-center" data-aos="fade-up">
					<h4 class="mb-2 text-lg font-semibold uppercase text-primary selection:text-white">Projects</h4>
					<h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">My Projects</h2>
					<p class="text-base font-medium text-secondary md:text-lg selection:text-white">Example of my project all the time, for much more see
						in my
						<span class="block font-bold text-dark dark:text-white">
							<a href="https://github.com/roshitx/" class="group transition duration-300 ease-in-out" target="_blank">
								<span
									class='bg-gradient-to-r from-dark to-dark dark:from-white dark:to-white bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-translate duration-500 ease-out group-hover:bg-[length:100%_2px]'>
									GitHub
								</span>
							</a>
						</span>
					</p>
				</div>
			</div>

			<div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
				<a href="https://github.com/roshitx/web-profil-kesenian" target="_blank" class="mb-12 p-4 md:w-1/2"
					id="interactable" data-type="link" data-aos="fade-up">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="{{ asset('assets/projects/1.png') }}" alt="Web Profil Sekolah" width="w-full"
							class="transition duration-300 ease-in-out hover:scale-110">
					</div>
					<h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Web Profil Sekolah</h3>
					<p class="text-base font-medium text-secondary">School extracurricular website, made to fulfill my
						school assignments.</p>
				</a>
				<a href="https://cuaca-ku.vercel.app/" target="_blank" class="mb-12 p-4 md:w-1/2" id="interactable"
					data-type="link" data-aos="fade-up">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="{{ asset('assets/projects/2.png') }}" alt="Weather Forecast Web" width="w-full"
							class="transition duration-300 ease-in-out hover:scale-110">
					</div>
					<h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Weather Forecast</h3>
					<p class="text-base font-medium text-secondary">Real-time weather forecast website, built using
						vanilla JS and API.</p>
				</a>
				<a href="https://batuguntingkertas.vercel.app" target="_blank" class="mb-12 p-4 md:w-1/2" id="interactable"
					data-type="link" data-aos="fade-up">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="{{ asset('assets/projects/3.png') }}" alt="Game Kertas Batu Gunting" width="w-full"
							class="transition duration-300 ease-in-out hover:scale-110">
					</div>
					<h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Rock Papers Scissors Game</h3>
					<p class="text-base font-medium text-secondary">Rock paper scissors game website. Yeah, nothing
						special.</p>
				</a>
				<a href="https://convert-matauang.vercel.app/" target="_blank" class="mb-12 p-4 md:w-1/2" id="interactable"
					data-type="link" data-aos="fade-up">
					<div class="overflow-hidden rounded-md shadow-md">
						<img src="{{ asset('assets/projects/4.png') }}" alt="Exchange Rate Web" width="w-full"
							class="transition duration-300 ease-in-out hover:scale-110">
					</div>
					<h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Exchange Rate</h3>
					<p class="text-base font-medium text-secondary">Website for converting currencies from various
						countries, made to fulfill school assignments as well.</p>
				</a>
			</div>
		</div>
	</section>
	<!-- Project Section End -->

	<!-- Achievement Section Start -->
	<section id="achievement" class="bg-slate-800 pb-32 pt-36 dark:bg-slate-300">
		<div class="container flex flex-wrap justify-center">
			<div class="w-full px-4" data-aos="fade-up">
				<div class="mx-auto mb-16 text-center">
					<h4 class="mb-2 text-lg font-semibold uppercase text-primary selection:text-white">Achievements</h4>
					<h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl dark:text-dark">My Certificates</h2>
					<p class="text-base font-medium text-secondary md:text-lg selection:text-white">Some of the certificates I've gotten from
						online courses.
					</p>
				</div>
			</div>

			<!-- Carousel Certificate Start -->
			<div class="w-full px-4 lg:w-1/2" data-aos="fade-up">
				<div id="carouselExampleIndicators" class="relative" data-te-carousel-init data-te-carousel-slide>
					<div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
						data-te-carousel-indicators>
						<button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="0" data-te-carousel-active
							class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-dark bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
							aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="1"
							class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-dark bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
							aria-label="Slide 2"></button>
						<button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="2"
							class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-dark bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
							aria-label="Slide 3"></button>
						<button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="3"
							class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-dark bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
							aria-label="Slide 4"></button>
						<button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="4"
							class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-dark bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
							aria-label="Slide 5"></button>
					</div>
					<div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
						<div
							class="relative float-left -mr-[100%] w-full transition-transform duration-[500ms] ease-in-out motion-reduce:transition-none"
							data-te-carousel-item data-te-carousel-active>
							<img src="{{ asset('assets/certificates/dasar-javascript.jpg') }}" class="block w-full"
								alt="Dasar Dasar Javascript Dicoding" />
						</div>
						<div
							class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[500ms] ease-in-out motion-reduce:transition-none"
							data-te-carousel-item>
							<img src="{{ asset('assets/certificates/dasar-backend-nodejs.jpg') }}" class="block w-full"
								alt="Dasar Dasar Membuat Aplikasi Backend Menggunakan Node.js" />
						</div>
						<div
							class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[500ms] ease-in-out motion-reduce:transition-none"
							data-te-carousel-item>
							<img src="{{ asset('assets/certificates/dasar-devops.jpg') }}" class="block w-full"
								alt="Dasar Dasar DevOps Dicoding" />
						</div>
						<div
							class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[500ms] ease-in-out motion-reduce:transition-none"
							data-te-carousel-item>
							<img src="{{ asset('assets/certificates/dasar-aws.jpg') }}" class="block w-full"
								alt="Dasar Dasar Amazon Web Services Dicoding" />
						</div>
						<div
							class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[500ms] ease-in-out motion-reduce:transition-none"
							data-te-carousel-item>
							<img src="{{ asset('assets/certificates/php-sololearn.jpg') }}" class="block w-full" alt="PHP Sololearn" />
						</div>
					</div>
					<button
						class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-dark opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-dark hover:no-underline hover:opacity-90 hover:outline-none focus:text-dark focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
						type="button" data-te-target="#carouselExampleIndicators" data-te-slide="prev" id="interactable"
						data-type="arrow-left">
						<span class="inline-block h-8 w-8">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="h-6 w-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
							</svg>
						</span>
						<span
							class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
					</button>
					<button
						class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-dark opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-dark hover:no-underline hover:opacity-90 hover:outline-none focus:text-dark focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
						type="button" data-te-target="#carouselExampleIndicators" data-te-slide="next" id="interactable"
						data-type="arrow-right">
						<span class="inline-block h-8 w-8">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="h-6 w-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
							</svg>
						</span>
						<span
							class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
					</button>
				</div>
			</div>
			<!-- Carousel Certificate End -->
		</div>
	</section>
	<!-- Achievement Section End -->

	<!-- Contact Section Start -->
	<section id="contact" class="pt-36 pb-32 dark:bg-dark">
		<div class="container">
			<div class="w-full px-4" data-aos="fade-up">
				<div class="mx-auto mb-16 max-w-xl text-center">
					<h4 class="mb-2 text-lg font-semibold uppercase text-primary selection:text-white">Contact</h4>
					<h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Reach Me</h2>
					<p class="text-base font-medium text-secondary md:text-lg selection:text-white">I will love your messages, send me a
						message!
					</p>

				</div>

			</div>

			<form method="POST" action="{{ route('contact.send') }}" data-aos="fade-up">
				@csrf
				<div class="w-full lg:mx-auto lg:w-2/3">
					{{-- Success Alert --}}
					@if (session('success'))
						<div
							class="border-1 mb-3 hidden w-full items-center rounded-lg bg-[#22bb33] py-5 px-5 text-base text-dark data-[te-alert-show]:inline-flex"
							role="alert" data-te-alert-init data-te-alert-show>
							<p class="text-center text-slate-300 font-semibold">{{ (session('success')) }}</p>
							<button type="button"
								class="ml-auto box-content rounded-none border-none p-1 text-slate-200 opacity-50 hover:text-green-300 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
								data-te-alert-dismiss aria-label="Close">
								<span
									class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#dc2626" class="h-6 w-6">
										<path fill-rule="evenodd"
											d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
											clip-rule="evenodd" />
									</svg>
								</span>
							</button>
						</div>
					@elseif (session('error'))
						<div
							class="border-1 mb-3 hidden w-full items-center rounded-lg bg-[#bb2124] py-5 px-5 text-base text-dark data-[te-alert-show]:inline-flex"
							role="alert" data-te-alert-init data-te-alert-show>
							<p class="text-center text-slate-300 font-semibold">{{ session('error') }}</p>
							<button type="button"
								class="ml-auto box-content rounded-none border-none p-1 text-slate-200 opacity-50 hover:text-red-300 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
								data-te-alert-dismiss aria-label="Close">
								<span
									class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
										<path fill-rule="evenodd"
											d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
											clip-rule="evenodd" />
									</svg>
								</span>
							</button>
						</div>
					@endif

					<div class="mb-8 w-full px-4">
						<label class="text-base font-bold text-primary selection:text-white">Name</label>
						<input type="text" id="interactable" name="name"
							class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary caret-primary"
							placeholder="Your Name" required data-type="fill">
					</div>
					<div class="mb-8 w-full px-4">
						<label class="text-base font-bold text-primary selection:text-white">Email</label>
						<input type="email" id="interactable" name="email"
							class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary caret-primary"
							placeholder="Your Email" required data-type="fill">
					</div>
					<div class="mb-8 w-full px-4">
						<label class="text-base font-bold text-primary selection:text-white">Message</label>
						<textarea type="text" id="interactable" name="message"
						 class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary caret-primary"
						 placeholder="Type a message here" required data-type="fill"></textarea>
					</div>
					<div class="w-full px-4">
						<button
							class="w-full rounded-lg bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg"
							id="interactable" data-type="send">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Contact Section End -->

	<!-- Footer Section Start -->
	<footer class="bg-dark py-3">
		<div class="container">
			<div class="w-full">
				<p class="text-center text-sm font-medium text-slate-400 selection:text-white">Copyright &copy; 2023
					<a class='group font-bold text-primary transition-all duration-300 ease-in-out' href='https://linktr.ee/roshit'>
						<span
							class='bg-gradient-to-r from-primary to-primary bg-[length:0%_2px] bg-left-bottom bg-no-repeat transition-all duration-500 ease-out group-hover:bg-[length:100%_2px]'>
							Roshit
						</span>
					</a>
				</p>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->


@endsection
