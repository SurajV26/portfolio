@extends('layouts.mainlayout')

@section('title_bar')
    <title>portfolio</title>
    <link rel="shortcut icon" href="sv-logo.png" type="image/x-icon">
@endsection

@section('content')
    <section>
        <div class="container1">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <div class="heading" data-aos="fade-down"><h1>Hii! I'm a web <span style="color: rgb(241, 86, 86)">Developer</span></h1></div>
                        <p class="content text"  data-aos="fade-up" data-aos-anchor-placement="top-center">I'm a versatile Web Developer, fluent in the language of both frontend and backend development. I approach every project like a seasoned chef, blending the perfect mix of creativity and precision to craft exceptional digital experiences. Outside of coding, I'm a dedicated explorer of emerging technologies, driven by a passion for innovation and continuous learning. With a commitment to excellence and a knack for problem-solving, I'm eager to leverage my skills to make a meaningful impact in the world of web development.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right" data-aos="fade-left">
                        <img src="developer-person.png" alt="developer-person-setting">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="padding: 0% 5% 0% 5%; background-color: #dee2e624"  data-aos="zoom-in-up">
        <div style="padding: 5%">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in-right">
                    <img src="web-development.png" alt="web-development" class="d-block w-100 img-fluid" style="max-height: 500px; border-radius: 10px;">
                </div>
                <div class="col-md-6" data-aos="zoom-in-left">
                    <div class="container-heading"><p>Development: Crafting Digital Experiences</p></div>
                    <div class="elementor-divider" style="margin-bottom: 5%; margin-left: 10%">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <div class="elementor-widget-container" style="text-align: start">
                        <div class="container-center">
                            <div><p class="text">I enjoy working with a team because I believe that a strong team is essential for success. Collaborating with teammates allows for the exchange of diverse ideas and perspectives, ultimately leading to better outcomes. I thrive in an environment where cooperation and understanding prevail, as it enables us to support each other and make informed decisions. Therefore, I am eager to contribute to the team's development by being a reliable and cohesive member.</p></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="padding: 0% 5% 0% 5%">
        <div style="padding: 5%" class="d-flex align-items-center">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-out-right">
                    <div class="container-heading"><p>Efficient Data Storage and Error Handling in Backend Development</p></div>
                    <div class="elementor-divider" style="margin-bottom: 5%; margin-left: 10%">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <div class="elementor-widget-container" style="text-align: start;">
                        <div class="container-center text">
                            <div>
                                <ul>
                                    <li>Effective data storage mechanisms ensure the seamless persistence of information, fostering data integrity and reliability.</li>
                                    <li>Rigorous error handling protocols mitigate the occurrence of errors, promoting uninterrupted backend operation and smooth user experience.</li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-out-left">
                    <img src="backend-development.jpg" alt="backend-development" class="d-block mx-auto img-fluid" style="max-height: 500px; border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>
    
    {{--        about    page            --}}


    <section id="about">
        <div class="background" data-aos="fade-up" data-aos-duration="3000"></div>
        <div class="about-us">
            <div class="about-me" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">About Me</div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5">
                    <div class="box"  data-aos="zoom-in-left"></div>
                    <div class="img-box" data-aos="zoom-in-right">
                        <img src="my-pic.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7 space" data-aos="zoom-in-left">
                    <div class="container-heading"><h2>Get to Know: Your Friendly Web <span style="color: rgb(241, 86, 86)">Developer</span></h2></div>
                    <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px; margin-left: 10%">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <div class="elementor-widget-container">
                        <div class="container-center text">
                           <p>👋 Hello everyone! I'm Suraj Verma, a passionate web developer who loves to create amazing websites. I enjoy learning and trying out new things in web development.</p>
                           <p>In frontend development, I use HTML, CSS, JavaScript, and Bootstrap framework to make websites look great and work smoothly. For backend, I work with PHP-Laravel framework and MySQL database.</p>
                           <p>During my internship as a full stack developer, I had a lot of fun learning and exploring new concepts. I've worked on projects where I built CRUD systems, stored data in databases, and even added new features to e-commerce websites.</p>
                           <p>One of my favorite projects involved creating a CRUD system where I could store, retrieve, and update data from a database. I also enjoy updating websites with fresh content, styles, and new sections to keep them interesting.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-boxes">
        <div class="container-heading"><h1>Crafting Web Excellence Through Collaboration and Expertise</h1></div>
        <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px; margin-left: 10%">
            <span class="elementor-divider-separator"></span>
        </div>
        <div class="elementor-widget-container" style="text-align: start">
        <div class="boxes section-padding">
            <div class="boxy" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="img1.jpg" alt="" class="boxy-img img-fluid">
                <div class="boxy-text"><p>In my portfolio, I've crafted captivating projects leveraging HTML, CSS, JavaScript, and Bootstrap. These showcase my proficiency and demonstrate my ability to create visually stunning experiences.</p></div>
            </div>
            <div class="boxy" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="team-work.jpg" alt="" class="boxy-img img-fluid">
                <div class="boxy-text"><p>In team environments, I thrive, enjoying the collaborative process to achieve shared goals. My passion for teamwork is evident in my dedication to fostering a supportive and productive atmosphere, where diverse perspectives are valued and utilized to drive success.</p></div>
            </div>
            <div class="boxy" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="time-work.jpg" alt="" class="boxy-img img-fluid">
                <div class="boxy-text"><p>In my work approach, I thrive on efficiently managing my time to accomplish tasks within deadlines, ensuring productivity and timely delivery.</p></div>
            </div>
            <div class="boxy" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="database-secure.jpg" alt="" class="boxy-img img-fluid">
                <div class="boxy-text"><p>I am proficient in handling databases, ensuring their smooth operation and effective management, thereby maintaining the integrity and efficiency of the systems I develop.</p></div>
            </div>
            <div class="boxy" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="new-project.jpg" alt="" class="boxy-img img-fluid">
                <div class="boxy-text"><p>I have a passion for creating new projects, constantly seeking out fresh opportunities to innovate and develop impactful solutions.</p></div>
            </div>
        </div>
    </section>

    <section class="section-padding-boxes">
        <div class="container-heading "><h1>Expertise in Web Development</h1></div>
        <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px; margin-left: 10%">
            <span class="elementor-divider-separator"></span>
        </div>
        <div class="card-box">
            <div class="cards" data-aos="zoom-out-up">
                <img src="frontend-card-img.jpg" alt="frontend-developer">
                <div class="card-text"><h5>Dynamic Web Interfaces</h5></div>
                <div class="card-text-2 text">
                    <ul>
                        <li>Proficient in HTML, CSS, JavaScript</li>
                        <li>Skilled in crafting responsive designs</li>
                        <li>Experienced in enhancing user experience with Bootstrap framework</li>
                    </ul>
                </div>
            </div>
            <div class="cards" data-aos="zoom-out-up">
                <img src="backend-card-img.png" alt="backend-developer">
                <div class="card-text"><h5>Backend Ace</h5></div>
                <div class="card-text-2 text">
                    <ul>
                        <li>Created CRUD operations with PHP-Laravel framework</li>
                        <li>Stored data securely in databases</li>
                        <li>Implemented form data retrieval and storage in websites</li>
                    </ul>
                </div>
            </div>
            <div class="cards" data-aos="zoom-out-up">
                <img src="team-card-img.png" alt="team-work">
                <div class="card-text"><h5>Effective Team Collaboration</h5></div>
                <div class="card-text-2 text">
                    <ul>
                        <li>Proven track record in collaborative projects</li>
                        <li>Valuable team contributor</li>
                        <li>Committed to achieving shared objectives</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    {{--                 projects    -----------         page                --}}

    <section class="about" id="project">
        <div class="background" data-aos="fade-up" data-aos-duration="3000"></div>
        <div class="about-us">
            <div class="about-me" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Projects</div>
        </div>
    </section>

    <section style="padding-top: 6%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <h1>Explore Our Projects</h1>
                    <div class="elementor-divider-wrapper">
                        <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px;">
                            <span class="elementor-divider-separator"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center" style="padding-top: 5%;">
                <div class="col-md-3 " data-aos="zoom-out-right">
                    <img src="content-project.gif" alt="content-write" class="img-fluid project-img">
                </div>
                <div class="col-md-6 project-cont" data-aos="zoom-out-up">
                    <h3 style="padding-top: 20px">Your Website, Your Way: Discover Our Latest Updates!</h3>
                    <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px;">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <p class="text">Get ready for an exciting journey through our website updates! We've been working tirelessly to make sure every change we make is something you'll love. From refreshing content to eye-catching images, we're all about giving you the best online experience possible. And guess what? Our website is super smart too - it looks great on your computer, phone, or tablet! So come on in, check out what's new, and see how we're making your online world even more awesome!</p>
                </div>
                <div class="col-md-3 " data-aos="zoom-out-left">
                    <img src="content-project-2.png" alt="content-write" class="img-fluid project-img">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 6% 0%; background-color: #dee2e624">
        <div class="container">
            <div class="row justify-content-center" style="padding-top: 5%;">
                <div class="col-md-4" data-aos="zoom-in-right">
                    <img src="landing-page-2.gif" alt="landing-page" class="img-fluid img-pad">
                </div>
                <div class="col-md-3" data-aos="zoom-in-left">
                    <img src="landing-page-project.jpg" alt="landing-page" class="img-fluid img-pad">
                </div>
                <div class="col-md-5" data-aos="zoom-in-left">
                    <img src="landing-page-3.gif" alt="landing-page" class="img-fluid img-pad">
                </div>
                <div class="col-md-9 project-cont" data-aos="zoom-out-up">
                    <h3 style="padding-top: 20px">Elevating Web Experiences: Crafting Dynamic, Responsive Pages and Tailored Forms</h3>
                    <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px;">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <p class="text">With a passion for innovation, I've crafted captivating landing pages, fully-responsive websites, and an array of forms, all enhanced with CSS and Bootstrap. I specialize in crafting unique designs for forms, constantly pushing boundaries to refine user experiences. Explore my portfolio and witness the evolution of web design firsthand!</p>
                </div>
                <div class="col-md-4 " data-aos="zoom-in-left" style="padding-top: 8%;">
                    <img src="form-project.png" alt="form" class="img-fluid project-img">
                </div>
                <div class="col-md-6 " data-aos="zoom-in-left" style="padding-top: 5%;">
                    <img src="form-project-2.png" alt="form" class="img-fluid project-img">
                </div>
            </div>
        </div>
    </section>

    <section style="padding-top: 6%;">
        <div class="container">
            <div class="row justify-content-center align-items-center" style="padding-top: 5%;">
                <div class="col-md-5" data-aos="zoom-out-right">
                    <img src="crud-project.png" alt="crud-img" class="img-fluid img-pad">
                </div>
                <div class="col-md-5" data-aos="zoom-out-left">
                    <img src="crud-project-2.png" alt="crud=img" class="img-fluid img-pad">
                </div>
                <div class="col-md-8 project-cont" data-aos="zoom-in-left">
                    <h3 style="padding-top: 20px">My CRUD Expertise</h3>
                    <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px;">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <p class="text">I have a strong command over CRUD operations and have worked extensively with them. I am proficient in managing data through CRUD, including storing and deleting data in MySQL. I understand how data management works in CRUD and have created numerous CRUD systems.</p>
                    <p class="text">specialize in handling website forms and seamlessly storing or processing their data in databases. Whether it's collecting user information or managing submissions, I ensure smooth integration between website forms and databases for efficient data handling.</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in-right">
                    <img src="mysql-project.png" alt="mysql-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section style="padding-top: 6%;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3" style="padding: 5% 2%" data-aos="zoom-in-right">
                    <img src="git-img.png" alt="git-hub-img" class="img-fluid">
                </div>
                <div class="col-md-3" style="padding: 5% 2%" data-aos="zoom-in-right">
                    <img src="git-hub-img.png" alt="git-hub-img" class="img-fluid">
                </div>
                <div class="col-md-6 project-cont" data-aos="zoom-in-left" style="padding: 5%">
                    <h3 style="padding-top: 20px">Leveraging Git and GitHub for Collaborative Project Development</h3>
                    <div class="elementor-divider" style="margin-top:20px; margin-bottom: 10px;">
                        <span class="elementor-divider-separator"></span>
                    </div>
                    <p class="text">I possess knowledge of Git and GitHub, essential tools for collaborative project development. Leveraging these platforms, I facilitate seamless collaboration within teams, aiding in the successful execution of large-scale projects. My proficiency in Git and GitHub enhances team productivity and ensures effective version control and project management.</p>
                </div>
            </div>
        </div>
    </section>


    {{--        contact   ------  page         --}}

    
    <section class="px-5" id="contact" data-aos="fade-up" data-aos-anchor-placement="bottom-center">
        <span>
            <h1 class="big-text font-effect-shadow-multiple">GET IN TOUCH</h1>
        </span>
        <span>
            <img src="star-get.png" alt="star" class="img-fluid" style="max-height: 50px; max-width: 100%; padding-bottom:15px;">
        </span>
    </section>

    <section style="background-color: #dee2e624">
        <div class="contact-pad">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="get-in-touch.png" alt="get-in-touch" class="img-fluid" style="max-height: 600px; max-width: 100%; border-radius: 10px;">
                </div>
                <div class="col-md-6 text">
                    <form method="POST" action="{{ route('portfolio.store') }}">
                        @csrf
                        <div class="form-group" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                            <label for="name" >Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine">
                            <label for="mobile">Mobile Number:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
                        </div>
                        <div class="form-group" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="sub">Submit</button>
                    </form>
                    
                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
