@extends('layouts.app')

@section('title', 'Marcus Grau | Software Developer & CS Graduate')

@section('content')
<main class="relative z-10">
    {{-- =========================================================================
         HERO SECTION
         ========================================================================= --}}
    <section id="home" class="min-h-[92vh] flex flex-col justify-center px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto pt-28 pb-16">
        <div class="max-w-4xl">
            <!-- Open to Work Status Badge -->
            <div class="inline-flex items-center space-x-2 status-beacon mb-6 reveal-item">
                <span class="status-dot"></span>
                <span>Available for Full-Time Software Engineering Roles</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white tracking-tight leading-[1.1] mb-6 reveal-item">
                Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 via-purple-300 to-indigo-400">Marcus Grau</span>.<br>
                <span class="text-slate-300 text-3xl sm:text-5xl lg:text-6xl font-bold">Building software with precision & passion.</span>
            </h1>

            <!-- Bio Lead -->
            <p class="text-lg sm:text-xl text-slate-300 max-w-2xl leading-relaxed mb-8 font-normal reveal-item">
                Software Developer with an <strong class="text-white font-semibold">8-year coding background</strong> and a graduate in <strong class="text-white font-semibold">Computer Science Informational Systems Engineering</strong> from Sheridan College. Hands-on experience delivering commercial web applications, backend APIs, and automation tools. Actively seeking full-time opportunities.
            </p>

            <!-- CTA Actions -->
            <div class="flex flex-wrap items-center gap-4 mb-12 reveal-item">
                <a href="#projects" class="btn-primary text-sm sm:text-base py-3 px-6">
                    <span>View Projects</span>
                    <i class="fa-solid fa-arrow-down text-xs"></i>
                </a>
                <a href="#contact" class="btn-secondary text-sm sm:text-base py-3 px-6">
                    <i class="fa-solid fa-envelope text-xs text-violet-400"></i>
                    <span>Contact Me</span>
                </a>
                <button onclick="copyToClipboard('graum@sheridancollege.ca', 'Email copied!')" class="btn-secondary text-sm py-3 px-4" title="Copy Email">
                    <i class="fa-regular fa-copy text-sm text-slate-400"></i>
                    <span class="hidden sm:inline">Copy Email</span>
                </button>
            </div>

            <!-- Quick Info Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 pt-6 border-t border-slate-800/80 reveal-item">
                <div class="glass-card p-4 rounded-xl">
                    <div class="text-2xl font-bold text-violet-400 font-mono">8+</div>
                    <div class="text-xs text-slate-400 mt-1">Years Coding</div>
                </div>
                <div class="glass-card p-4 rounded-xl">
                    <div class="text-2xl font-bold text-indigo-400 font-mono">95%</div>
                    <div class="text-xs text-slate-400 mt-1">Grade in Java OOP</div>
                </div>
                <div class="glass-card p-4 rounded-xl">
                    <div class="text-2xl font-bold text-purple-400 font-mono">Graduate</div>
                    <div class="text-xs text-slate-400 mt-1">Sheridan College CS ISE</div>
                </div>
                <div class="glass-card p-4 rounded-xl">
                    <div class="text-2xl font-bold text-emerald-400 font-mono">GTA / Remote</div>
                    <div class="text-xs text-slate-400 mt-1">Woodstock, ON</div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         ABOUT ME SECTION
         ========================================================================= --}}
    <section id="about" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-slate-800/60">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-mono uppercase tracking-widest text-violet-400 font-semibold">// 01. ABOUT ME</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-2 tracking-tight">
                Turning complex problems into clean, high-performance software.
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-7 space-y-5 text-slate-300 text-base sm:text-lg leading-relaxed">
                <p class="reveal-item">
                    With over eight years of coding passion and self-directed projects, I have developed an intuitive understanding of code architecture, system performance, and algorithmic problem solving. My journey began with a curiosity for how computers execute instructions, which has grown into a disciplined career path building reliable, production-ready applications.
                </p>
                <p class="reveal-item">
                    A graduate of <strong class="text-white">Sheridan College</strong> with a degree in <strong class="text-white">Computer Science Informational Systems Engineering</strong>, I have fortified my development background with rigorous computer science theory: data structures, algorithm optimization, software engineering lifecycles, and database management, achieving an exceptional <strong class="text-violet-400">95% in Object-Oriented Java</strong>.
                </p>
                <p class="reveal-item">
                    Having delivered commercial web applications, integrated backend databases, and collaborated on native mobile interfaces in Kotlin, I bridge theoretical software engineering with practical execution. I prioritize clean architecture, thorough testing, and intuitive user experiences.
                </p>
            </div>

            <!-- Pillars Grid -->
            <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4">
                <div class="glass-card p-5 rounded-xl reveal-item">
                    <div class="w-10 h-10 rounded-lg bg-violet-600/20 border border-violet-500/30 flex items-center justify-center text-violet-400 mb-3">
                        <i class="fa-solid fa-layer-group text-lg"></i>
                    </div>
                    <h3 class="font-bold text-white text-base mb-1">Full-Stack Architecture</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        End-to-end web and backend engineering using Laravel, PHP, MySQL, JavaScript, and modern component frameworks.
                    </p>
                </div>

                <div class="glass-card p-5 rounded-xl reveal-item">
                    <div class="w-10 h-10 rounded-lg bg-indigo-600/20 border border-indigo-500/30 flex items-center justify-center text-indigo-400 mb-3">
                        <i class="fa-solid fa-brain text-lg"></i>
                    </div>
                    <h3 class="font-bold text-white text-base mb-1">Data Structures & Algorithms</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Strong grasp of computational complexity, Stack, Queue, and List Abstract Data Types in Java and Python.
                    </p>
                </div>

                <div class="glass-card p-5 rounded-xl reveal-item">
                    <div class="w-10 h-10 rounded-lg bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-3">
                        <i class="fa-solid fa-users-gear text-lg"></i>
                    </div>
                    <h3 class="font-bold text-white text-base mb-1">Collaborative Leadership</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Proven entrepreneurial track record at M&S Development communicating directly with clients and cross-functional teams.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         EXPERIENCE SECTION
         ========================================================================= --}}
    <section id="experience" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-slate-800/60">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-mono uppercase tracking-widest text-violet-400 font-semibold">// 02. EXPERIENCE & TRACK RECORD</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-2 tracking-tight">
                Work Experience & Practical Roles
            </h2>
            <p class="text-slate-400 mt-2 text-base">
                Hands-on leadership, software engineering, and collaborative projects.
            </p>
        </div>

        <div class="space-y-8">
            <!-- Experience Item: Sheridan College Academic Projects -->
            <div class="glass-card p-6 sm:p-8 rounded-2xl reveal-item relative overflow-hidden">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-3">
                            <h3 class="text-xl sm:text-2xl font-bold text-white">Software & Systems Developer</h3>
                            <span class="badge-tech bg-indigo-950/60 border-indigo-700/50 text-indigo-300">Academic Engineering</span>
                        </div>
                        <p class="text-indigo-400 font-medium text-sm sm:text-base mt-0.5">Sheridan College &bull; Oakville, ON</p>
                    </div>
                    <span class="font-mono text-xs text-slate-400 bg-slate-800/60 px-3 py-1.5 rounded-md self-start sm:self-auto">
                        2022 - 2024
                    </span>
                </div>

                <div class="mt-5 space-y-3 text-slate-300 text-sm sm:text-base">
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-indigo-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Developed robust backend interfaces using <strong class="text-white">Python</strong> and <strong class="text-white">Java</strong>, implementing classes, objects, and utilizing Stack, Queue, and List Abstract Data Types (ADTs).</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-indigo-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Achieved a grade of <strong class="text-emerald-400 font-semibold">95% in Object-Oriented Java</strong>, demonstrating deep mastery of object-oriented principles, polymorphism, encapsulation, and inheritance.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-indigo-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Created and designed multiple websites using front-end programming, responsive UI layouts, and interactive clientside JavaScript.</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 mt-6 pt-4 border-t border-slate-800/60">
                    <span class="badge-tech">Java</span>
                    <span class="badge-tech">Python</span>
                    <span class="badge-tech">Data Structures (ADTs)</span>
                    <span class="badge-tech">JavaScript</span>
                    <span class="badge-tech">SQL</span>
                    <span class="badge-tech">VBA</span>
                </div>
            </div>

            <!-- Experience Item: M&S Development -->
            <div class="glass-card p-6 sm:p-8 rounded-2xl reveal-item relative overflow-hidden">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-3">
                            <h3 class="text-xl sm:text-2xl font-bold text-white">CEO &bull; Programmer &bull; Designer</h3>
                            <span class="badge-tech bg-violet-950/60 border-violet-700/50 text-violet-300">Client Production</span>
                        </div>
                        <p class="text-violet-400 font-medium text-sm sm:text-base mt-0.5">M&S Development &bull; Woodstock, ON</p>
                    </div>
                    <span class="font-mono text-xs text-slate-400 bg-slate-800/60 px-3 py-1.5 rounded-md self-start sm:self-auto">
                        2018 - 2022
                    </span>
                </div>

                <div class="mt-5 space-y-3 text-slate-300 text-sm sm:text-base">
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-violet-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Designed and assessed client websites for errors, performance, and responsive user experience daily.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-violet-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Troubleshot and resolved technical challenges with user logins, session handling, and database integration.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-violet-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Integrated cross-platform application data to seamlessly synchronize and display app information on the website.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-violet-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Collaborated on the design and development of an Android app, focusing on UI implementation using <strong class="text-white">Kotlin</strong>.</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 mt-6 pt-4 border-t border-slate-800/60">
                    <span class="badge-tech">Kotlin</span>
                    <span class="badge-tech">Android SDK</span>
                    <span class="badge-tech">JavaScript</span>
                    <span class="badge-tech">SQL</span>
                    <span class="badge-tech">HTML5 / CSS3</span>
                    <span class="badge-tech">Authentication</span>
                </div>
            </div>

            <!-- Experience Item: Craig Owan Golf Club -->
            <div class="glass-card p-6 sm:p-8 rounded-2xl reveal-item relative overflow-hidden">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-3">
                            <h3 class="text-xl sm:text-2xl font-bold text-white">Groundskeeper &bull; Operations</h3>
                            <span class="badge-tech bg-slate-800 text-slate-300">Operations & Safety</span>
                        </div>
                        <p class="text-slate-400 font-medium text-sm sm:text-base mt-0.5">Craig Owan Golf Club &bull; Woodstock, ON</p>
                    </div>
                    <span class="font-mono text-xs text-slate-400 bg-slate-800/60 px-3 py-1.5 rounded-md self-start sm:self-auto">
                        2022 - 2024
                    </span>
                </div>

                <div class="mt-5 space-y-3 text-slate-300 text-sm sm:text-base">
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-slate-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Maintained pristine course conditions through expert landscaping and diligent groundskeeping across two hundred acres.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-slate-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Operated a variety of machinery for mowing, edging, and soil cultivation to ensure optimal play-ability.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-slate-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Collaborated with course managers and landscapers to implement effective maintenance strategies.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-slate-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Conducted regular inspections of the course to identify and repair an average of 3 damages or hazards per cycle.</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i class="fa-solid fa-check text-slate-400 text-xs mt-1.5 flex-shrink-0"></i>
                        <span>Prepared the course for inclement weather and performed necessary clean-up to maintain safety and accessibility.</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 mt-6 pt-4 border-t border-slate-800/60">
                    <span class="badge-tech">Risk Management</span>
                    <span class="badge-tech">Teamwork</span>
                    <span class="badge-tech">Problem Solving</span>
                    <span class="badge-tech">Operations</span>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         FEATURED PROJECTS SECTION
         ========================================================================= --}}
    <section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-slate-800/60">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-mono uppercase tracking-widest text-violet-400 font-semibold">// 03. FEATURED WORK</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-2 tracking-tight">
                Software Built for Impact
            </h2>
            <p class="text-slate-400 mt-2 text-base">
                Real-world web applications, automation bots, and production client websites.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Project 1: Pickuppuck -->
            <div class="glass-card rounded-2xl p-7 flex flex-col justify-between reveal-item group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="badge-tech bg-violet-900/40 text-violet-300 border-violet-700/50">Full-Stack Application</span>
                        <div class="flex space-x-2">
                            <a href="https://github.com/MAGAweSome/Pickup-Puck" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white p-1" title="View Source on GitHub">
                                <i class="fa-brands fa-github text-lg"></i>
                            </a>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-violet-300 transition-colors mb-3">
                        Pickuppuck
                    </h3>

                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        A full-stack sports league management platform designed to automate and organize pickup hockey operations. Replaced cumbersome manual coordination with real-time digital tracking.
                    </p>

                    <div class="space-y-2 mb-6 text-xs text-slate-400">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-violet-400"></i>
                            <span>Automated attendance & player roster management</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-violet-400"></i>
                            <span>Ice time scheduling & rink venue coordination</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-violet-400"></i>
                            <span>Payment record tracking and player ledger</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex flex-wrap gap-1.5 mb-6 pt-4 border-t border-slate-800/80">
                        <span class="badge-tech">PHP</span>
                        <span class="badge-tech">Laravel</span>
                        <span class="badge-tech">MySQL</span>
                        <span class="badge-tech">JavaScript</span>
                        <span class="badge-tech">Tailwind</span>
                    </div>

                    <a href="https://github.com/MAGAweSome/Pickup-Puck" target="_blank" rel="noopener noreferrer" class="btn-primary w-full justify-center text-xs py-2.5">
                        <i class="fa-brands fa-github text-sm"></i>
                        <span>View on GitHub</span>
                    </a>
                </div>
            </div>

            <!-- Project 2: NAC-Catechism Saver -->
            <div class="glass-card rounded-2xl p-7 flex flex-col justify-between reveal-item group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="badge-tech bg-indigo-900/40 text-indigo-300 border-indigo-700/50">Automation & Scraping</span>
                        <div class="flex space-x-2">
                            <a href="https://github.com/MAGAweSome/NAC-Catechism-Saver" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white p-1" title="View Source on GitHub">
                                <i class="fa-brands fa-github text-lg"></i>
                            </a>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-indigo-300 transition-colors mb-3">
                        NAC-Catechism Saver
                    </h3>

                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        An intelligent Python automation bot engineered to crawl, verify, and bulk download audio media archives, structuring them automatically into an organized file hierarchy.
                    </p>

                    <div class="space-y-2 mb-6 text-xs text-slate-400">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-indigo-400"></i>
                            <span>Web scraping engine built with BeautifulSoup</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-indigo-400"></i>
                            <span>Intelligent regex naming & directory structuring</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-indigo-400"></i>
                            <span>Robust network handling with stream saving</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex flex-wrap gap-1.5 mb-6 pt-4 border-t border-slate-800/80">
                        <span class="badge-tech">Python</span>
                        <span class="badge-tech">BeautifulSoup</span>
                        <span class="badge-tech">Requests</span>
                        <span class="badge-tech">Automation</span>
                        <span class="badge-tech">OS / File I/O</span>
                    </div>

                    <a href="https://github.com/MAGAweSome/NAC-Catechism-Saver" target="_blank" rel="noopener noreferrer" class="btn-primary w-full justify-center text-xs py-2.5">
                        <i class="fa-brands fa-github text-sm"></i>
                        <span>View on GitHub</span>
                    </a>
                </div>
            </div>

            <!-- Project 3: Jordan's Mobile Fleet Service -->
            <div class="glass-card rounded-2xl p-7 flex flex-col justify-between reveal-item group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="badge-tech bg-emerald-900/40 text-emerald-300 border-emerald-700/50">Commercial Client Site</span>
                        <div class="flex space-x-2">
                            <a href="https://jordansmobilefleetservice.com" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white p-1" title="Visit Live Website">
                                <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                            </a>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-white group-hover:text-emerald-300 transition-colors mb-3">
                        Jordan's Mobile Fleet
                    </h3>

                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        A production digital storefront developed for a commercial mobile truck mechanic enterprise. Focused on rapid mobile accessibility and high customer conversion.
                    </p>

                    <div class="space-y-2 mb-6 text-xs text-slate-400">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-emerald-400"></i>
                            <span>Comprehensive commercial service catalog</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-emerald-400"></i>
                            <span>Responsive touch-friendly inquiry funnel</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-angle-right text-emerald-400"></i>
                            <span>Speed-optimized static deployment</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex flex-wrap gap-1.5 mb-6 pt-4 border-t border-slate-800/80">
                        <span class="badge-tech">HTML5</span>
                        <span class="badge-tech">Tailwind CSS</span>
                        <span class="badge-tech">JavaScript</span>
                        <span class="badge-tech">Responsive UX</span>
                        <span class="badge-tech">SEO</span>
                    </div>

                    <a href="https://jordansmobilefleetservice.com" target="_blank" rel="noopener noreferrer" class="btn-primary w-full justify-center text-xs py-2.5">
                        <i class="fa-solid fa-globe text-sm"></i>
                        <span>Visit Live Site</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         TECHNICAL SKILLS MATRIX
         ========================================================================= --}}
    <section id="skills" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-slate-800/60">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-mono uppercase tracking-widest text-violet-400 font-semibold">// 04. TECHNICAL SKILLS</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-2 tracking-tight">
                Technologies & Competencies
            </h2>
            <p class="text-slate-400 mt-2 text-base">
                Languages, frameworks, databases, and tooling utilized across 8 years of software development.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Column 1: Languages & Databases -->
            <div class="glass-card p-6 sm:p-7 rounded-2xl reveal-item">
                <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-800">
                    <div class="w-10 h-10 rounded-lg bg-violet-600/20 border border-violet-500/30 flex items-center justify-center text-violet-400">
                        <i class="fa-solid fa-code text-lg"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Languages & DBs</h3>
                        <p class="text-xs text-slate-400">Core programming foundations</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-java text-xl text-red-500"></i>
                        <span class="text-xs font-medium text-slate-200">Java</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-python text-xl text-blue-400"></i>
                        <span class="text-xs font-medium text-slate-200">Python</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-php text-xl text-indigo-400"></i>
                        <span class="text-xs font-medium text-slate-200">PHP</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-js text-xl text-yellow-400"></i>
                        <span class="text-xs font-medium text-slate-200">JavaScript</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-android text-xl text-emerald-400"></i>
                        <span class="text-xs font-medium text-slate-200">Kotlin</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-database text-xl text-amber-400"></i>
                        <span class="text-xs font-medium text-slate-200">SQL / MySQL</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-code text-xl text-cyan-400"></i>
                        <span class="text-xs font-medium text-slate-200">C / C++</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-hashtag text-xl text-purple-400"></i>
                        <span class="text-xs font-medium text-slate-200">C#</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-html5 text-xl text-orange-500"></i>
                        <span class="text-xs font-medium text-slate-200">HTML5</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-sass text-xl text-pink-400"></i>
                        <span class="text-xs font-medium text-slate-200">CSS3 / SCSS</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Frameworks & Libraries -->
            <div class="glass-card p-6 sm:p-7 rounded-2xl reveal-item">
                <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-800">
                    <div class="w-10 h-10 rounded-lg bg-indigo-600/20 border border-indigo-500/30 flex items-center justify-center text-indigo-400">
                        <i class="fa-solid fa-cubes text-lg"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Frameworks & Libs</h3>
                        <p class="text-xs text-slate-400">Full-stack & UI toolkits</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-laravel text-xl text-red-500"></i>
                        <span class="text-xs font-medium text-slate-200">Laravel 12</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-angular text-xl text-red-600"></i>
                        <span class="text-xs font-medium text-slate-200">Angular</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-react text-xl text-cyan-400"></i>
                        <span class="text-xs font-medium text-slate-200">React</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-vuejs text-xl text-emerald-400"></i>
                        <span class="text-xs font-medium text-slate-200">Vue.js</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-node-js text-xl text-green-500"></i>
                        <span class="text-xs font-medium text-slate-200">Node.js</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-wind text-xl text-sky-400"></i>
                        <span class="text-xs font-medium text-slate-200">Tailwind CSS</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-bootstrap text-xl text-purple-500"></i>
                        <span class="text-xs font-medium text-slate-200">Bootstrap</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-bolt text-xl text-yellow-400"></i>
                        <span class="text-xs font-medium text-slate-200">Vite</span>
                    </div>
                </div>
            </div>

            <!-- Column 3: Tools & Methodologies -->
            <div class="glass-card p-6 sm:p-7 rounded-2xl reveal-item">
                <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-800">
                    <div class="w-10 h-10 rounded-lg bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-400">
                        <i class="fa-solid fa-screwdriver-wrench text-lg"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Tools & Platforms</h3>
                        <p class="text-xs text-slate-400">DevOps & workflows</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-git-alt text-xl text-orange-500"></i>
                        <span class="text-xs font-medium text-slate-200">Git</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-github text-xl text-white"></i>
                        <span class="text-xs font-medium text-slate-200">GitHub</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-gitlab text-xl text-orange-400"></i>
                        <span class="text-xs font-medium text-slate-200">GitLab</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-docker text-xl text-blue-400"></i>
                        <span class="text-xs font-medium text-slate-200">Docker</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-brands fa-linux text-xl text-yellow-300"></i>
                        <span class="text-xs font-medium text-slate-200">Linux</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-server text-xl text-violet-400"></i>
                        <span class="text-xs font-medium text-slate-200">REST APIs</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-code-compare text-xl text-emerald-400"></i>
                        <span class="text-xs font-medium text-slate-200">OOP / ADTs</span>
                    </div>
                    <div class="skill-icon-wrap p-2.5 rounded-xl bg-slate-900/60 border border-slate-800 flex items-center space-x-2.5">
                        <i class="fa-solid fa-laptop-code text-xl text-blue-500"></i>
                        <span class="text-xs font-medium text-slate-200">VS Code</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         EDUCATION & CREDENTIALS SECTION
         ========================================================================= --}}
    <section id="education" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-slate-800/60">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-mono uppercase tracking-widest text-violet-400 font-semibold">// 05. ACADEMIC CREDENTIALS</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-2 tracking-tight">
                Education & Theory
            </h2>
        </div>

        <div class="glass-card p-6 sm:p-9 rounded-2xl reveal-item">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-slate-800">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-600 to-indigo-600 flex items-center justify-center text-white text-xl flex-shrink-0 shadow-lg shadow-violet-900/30">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-3">
                            <h3 class="text-2xl font-bold text-white">Computer Science Informational Systems Engineering</h3>
                            <span class="badge-tech bg-violet-950/80 border-violet-700/50 text-violet-300">Graduate</span>
                        </div>
                        <p class="text-violet-400 font-medium text-base mt-0.5">Sheridan College &bull; Oakville, ON</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="badge-tech bg-emerald-950/80 border-emerald-500/40 text-emerald-300 font-semibold py-1.5 px-3">
                        <i class="fa-solid fa-award"></i> 95% in Java OOP
                    </span>
                    <span class="font-mono text-xs text-slate-400 bg-slate-800/60 px-3 py-1.5 rounded-md">
                        Graduated
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 text-slate-300 text-sm">
                <div>
                    <h4 class="font-semibold text-white mb-2 flex items-center space-x-2">
                        <i class="fa-solid fa-microchip text-violet-400 text-xs"></i>
                        <span>Core Foundations</span>
                    </h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Data structures, algorithm complexity, software architectures, object-oriented principles, and memory utilization in Java and Python.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-2 flex items-center space-x-2">
                        <i class="fa-solid fa-shield-halved text-indigo-400 text-xs"></i>
                        <span>Technology & Business</span>
                    </h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Relational database management, enterprise software engineering, systems analysis, and network security driving practical business solutions.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-2 flex items-center space-x-2">
                        <i class="fa-solid fa-diagram-project text-purple-400 text-xs"></i>
                        <span>Applied Engineering</span>
                    </h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Translating theoretical principles into production-ready web applications, backend APIs, and team-based development sprints.
                    </p>
                </div>
            </div>
        </div>

        <!-- Engineering Interests Badges -->
        <div class="mt-10 reveal-item">
            <h4 class="text-xs font-mono uppercase tracking-widest text-slate-400 mb-4">Engineering Interests & Curiosity:</h4>
            <div class="flex flex-wrap gap-2.5">
                <span class="badge-tech py-1.5 px-3 text-xs bg-slate-900 border-slate-700 text-slate-300">
                    <i class="fa-solid fa-robot text-violet-400"></i> AI & Machine Learning
                </span>
                <span class="badge-tech py-1.5 px-3 text-xs bg-slate-900 border-slate-700 text-slate-300">
                    <i class="fa-solid fa-lock text-indigo-400"></i> Cyber Security
                </span>
                <span class="badge-tech py-1.5 px-3 text-xs bg-slate-900 border-slate-700 text-slate-300">
                    <i class="fa-solid fa-house-signal text-cyan-400"></i> Home Automation & IoT
                </span>
                <span class="badge-tech py-1.5 px-3 text-xs bg-slate-900 border-slate-700 text-slate-300">
                    <i class="fa-solid fa-terminal text-emerald-400"></i> Systems Programming
                </span>
                <span class="badge-tech py-1.5 px-3 text-xs bg-slate-900 border-slate-700 text-slate-300">
                    <i class="fa-solid fa-futbol text-yellow-400"></i> Competitive Sports & Team Dynamics
                </span>
                <span class="badge-tech py-1.5 px-3 text-xs bg-slate-900 border-slate-700 text-slate-300">
                    <i class="fa-solid fa-plane text-pink-400"></i> Global Travel
                </span>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         CONTACT SECTION
         ========================================================================= --}}
    <section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-slate-800/60">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-mono uppercase tracking-widest text-violet-400 font-semibold">// 06. GET IN TOUCH</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-2 tracking-tight">
                Let's Connect
            </h2>
            <p class="text-slate-400 mt-2 text-base">
                I am actively seeking full-time software engineering roles. Whether you have an open position or want to discuss a project, my inbox is open!
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Email Card -->
            <div class="glass-card p-6 rounded-2xl flex flex-col justify-between reveal-item group">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-violet-600/20 border border-violet-500/30 flex items-center justify-center text-violet-400 mb-4 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-envelope text-xl"></i>
                    </div>
                    <h3 class="font-bold text-white text-base">Email</h3>
                    <p class="text-xs text-slate-400 mt-1 mb-4 font-mono break-all">graum@sheridancollege.ca</p>
                </div>
                <div class="flex gap-2">
                    <a href="mailto:graum@sheridancollege.ca" class="btn-primary text-xs py-2 px-3 flex-1 justify-center">
                        <i class="fa-solid fa-paper-plane text-[10px]"></i>
                        <span>Send</span>
                    </a>
                    <button onclick="copyToClipboard('graum@sheridancollege.ca', 'Email copied!')" class="btn-secondary text-xs py-2 px-3" title="Copy email address">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>

            <!-- LinkedIn Card -->
            <div class="glass-card p-6 rounded-2xl flex flex-col justify-between reveal-item group">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 mb-4 group-hover:scale-105 transition-transform">
                        <i class="fa-brands fa-linkedin-in text-xl"></i>
                    </div>
                    <h3 class="font-bold text-white text-base">LinkedIn</h3>
                    <p class="text-xs text-slate-400 mt-1 mb-4 font-mono">/in/marcus-grau</p>
                </div>
                <a href="https://linkedin.com/in/marcus-grau" target="_blank" rel="noopener noreferrer" class="btn-primary text-xs py-2 px-3 justify-center">
                    <i class="fa-brands fa-linkedin text-xs"></i>
                    <span>Connect</span>
                </a>
            </div>

            <!-- GitHub Card -->
            <div class="glass-card p-6 rounded-2xl flex flex-col justify-between reveal-item group">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-white mb-4 group-hover:scale-105 transition-transform">
                        <i class="fa-brands fa-github text-xl"></i>
                    </div>
                    <h3 class="font-bold text-white text-base">GitHub</h3>
                    <p class="text-xs text-slate-400 mt-1 mb-4 font-mono">/MAGAweSome</p>
                </div>
                <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="btn-secondary text-xs py-2 px-3 justify-center">
                    <i class="fa-brands fa-github text-xs"></i>
                    <span>Follow Repos</span>
                </a>
            </div>

            <!-- Phone / Location Card -->
            <div class="glass-card p-6 rounded-2xl flex flex-col justify-between reveal-item group">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-emerald-600/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-phone text-xl"></i>
                    </div>
                    <h3 class="font-bold text-white text-base">Phone & Location</h3>
                    <p class="text-xs text-slate-400 mt-1 mb-4 font-mono">(226) 600-4526<br><span class="text-slate-500">Woodstock, ON</span></p>
                </div>
                <div class="flex gap-2">
                    <a href="tel:+12266004526" class="btn-primary text-xs py-2 px-3 flex-1 justify-center">
                        <i class="fa-solid fa-phone text-[10px]"></i>
                        <span>Call</span>
                    </a>
                    <button onclick="copyToClipboard('(226) 600-4526', 'Phone copied!')" class="btn-secondary text-xs py-2 px-3" title="Copy phone number">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

