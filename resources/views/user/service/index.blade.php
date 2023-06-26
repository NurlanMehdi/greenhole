@extends('user.master')
@section('content')
    <main class="creasoft-wrap">




        <section style="background-image:url(/assets/img/services/services.jpg);" class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-cnt">
                                <h1>Service</h1>
                                <span><a href="index.html">Home</a><i class="bi bi-arrow-right"></i>Service</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services-grid sec-mar">
            <div class="container">
                <div class="title-wrap">
                    <div class="sec-title">
                        <span>Our Solutions</span>
                        <h2>Services</h2>
                        <p>Our software company offers a wide range of services to cater to your business needs. We specialize in delivering innovative solutions that leverage cutting-edge technologies to drive growth and efficiency. Here are some of the services we provide:</p>
                    </div>
                </div>
                <div class="row g-4">

                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>01</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-2.png" alt>
                            </div>
                            <h4>UI/UX Design</h4>
                            <p>We prioritize user experience and interface design to ensure your software or application is not only functional but also visually appealing. Our designers employ user-centric design principles to create intuitive and engaging interfaces that enhance usability and customer satisfaction.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[1])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>02</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-1.png" alt>
                            </div>
                            <h4>Graphic Design</h4>
                            <p>Creating visually engaging graphics, logos, icons, and other visual elements that enhance the aesthetics of the website and align with the brand identity.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[2])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>03</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-1.png" alt>
                            </div>
                            <h4>Software Development</h4>
                            <p>We develop tailor-made software solutions that are specifically designed to address the unique requirements of our clients. Our experienced team of developers uses cutting-edge technologies and industry best practices to deliver high-quality, scalable, and secure software applications.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[3])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>04</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-3.png" alt>
                            </div>
                            <h4>Web Application Development</h4>
                            <p>We create dynamic and interactive web applications that enable businesses to provide seamless user experiences, drive customer engagement, and optimize their online presence. Our expertise spans across front-end and back-end development, database integration, and responsive web design.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[4])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>05</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-6.png" alt>
                            </div>
                            <h4>Mobile App Development</h4>
                            <p>We specialize in designing and developing mobile applications for both iOS and Android platforms. From concept to deployment, our team crafts user-friendly and feature-rich mobile apps that leverage the latest mobile technologies to meet the demands of today's mobile-first world.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[5])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>06</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-3.png" alt>
                            </div>
                            <h4>Maintenance and Support</h4>
                            <p> We offer ongoing maintenance and support services to our clients to ensure the smooth operation of their software solutions. Our dedicated support team is readily available to address any issues, provide technical assistance, and implement necessary updates or enhancements.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[6])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>07</span>
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-3.png" alt>
                            </div>
                            <h4>Quality Assurance and Testing</h4>
                            <p>We employ rigorous testing methodologies to ensure that our software solutions are robust, reliable, and bug-free. Our quality assurance team conducts comprehensive testing, including functional, performance, and security testing, to deliver software of the highest quality.</p>
                            <div class="read-btn">
                                <a href="{{route('service-details',[7])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container service-items sec-mar-top">
                <div class="service-details-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-details">
                                <h4>Brainstroming & Wirefarme</h4>

                                <h5>1. Brainstorming</h5>
                                <p>Brainstorming is a collaborative process that involves generating and exploring ideas to solve design problems or meet specific goals. It encourages creativity and free thinking without judgment. During brainstorming sessions, designers, developers, and stakeholders come together to share ideas, concepts, and potential solutions. It can be done through structured discussions, sketching, or digital collaboration tools.</p>

                                <h6>1.1 Benefits of Brainstorming:</h6>
                                <ul>
                                    <li>Encourages idea generation from diverse perspectives</li>
                                    <li>Fosters collaboration and team engagement</li>
                                    <li>Sparks creativity and innovation</li>
                                    <li>Facilitates problem-solving and decision-making</li>
                                    <li>Explores different design options and possibilities</li>
                                </ul>

                                <h6>1.2 Tips for Effective Brainstorming:</h6>
                                <ol>
                                    <li>Create a supportive and non-judgmental environment</li>
                                    <li>Encourage active participation from all stakeholders</li>
                                    <li>Set clear goals and problem statements for brainstorming sessions</li>
                                    <li>Use visual aids, sketches, or mood boards to stimulate ideas</li>
                                    <li>Capture and document all ideas for future reference and evaluation</li>
                                </ol>

                                <h5>2. Wireframing</h5>
                                <p>Wireframing is the process of creating low-fidelity visual representations of a digital product's layout and structure. Wireframes are simplified and basic skeletal designs that focus on the placement of elements, content hierarchy, and user flow. They serve as a blueprint for the overall design and functionality of the product.</p>

                                <h6>2.1 Benefits of Wireframing:</h6>
                                <ul>
                                    <li>Visualizes the layout and structure of the digital product</li>
                                    <li>Defines content organization and user flow</li>
                                    <li>Identifies key design elements and their placement</li>
                                    <li>Facilitates early-stage feedback and iteration</li>
                                    <li>Communicates design concepts to stakeholders</li>
                                </ul>

                                <h6>2.2 Tips for Effective Wireframing:</h6>
                                <ol>
                                    <li>Begin with sketching rough ideas on paper or using digital tools</li>
                                    <li>Focus on content organization and user interactions rather than visual aesthetics</li>
                                    <li>Use simple shapes, lines, and placeholders to represent design elements</li>
                                    <li>Consider usability principles and best practices while creating wireframes</li>
                                    <li>Seek feedback and iterate on the wireframes to refine the design concept</li>
                                </ol>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-details-thumb">
                                <img src="{{asset('assets/img/services/brainstorm.jpg')}}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('user.banners.pricingPlan')
        @include('user.banners.about')

    </main>




@endsection
