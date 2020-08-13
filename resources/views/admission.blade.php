@extends('layouts.app')
@section('content')
<body class="event-01">
    <!-- Preloader -->
    {{-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> --}}
 <header id="header">
        <div class="header-body">
            <nav class="navbar edu-navbar bg-light" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="/index"><img src="../images/logox.png" width="130" height="130" alt=""></a></li>
                            <li><a data-scroll="" href="/index">Home</a></li>
                            <li><a data-scroll="" href="/admission">Admission</a></li>
                            <li><a data-scroll="" href="/teacher">Teachers</a></li>
                            <li><a data-scroll href="/event">Event</a></li>
                            <li><a data-scroll href="/gallery">Gallery</a></li>
                            <li><a data-scroll href="/blog">Blog</a></li>
                            <li><a data-scroll href="/about">About</a></li>
                            <li><a data-scroll href="/contact">Contact</a></li>
						<li style="display:none"><a data-scroll href="/contact">Contact</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <h1> School Admission</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">Admission</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
</header>

<section class="events-list-03">
	<div class="container">
		<div class="row event-body-content">
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/why.jpg" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>WHY CHOOSE HOLY FIELD ?</h3>


						<p class="font-weight-bold text-justify">	 This is holy field. <br>
                                Attracting children from various nations, returning leaders to the nations.<br>
                                Holy Field is a Co-educational, Montessori, Creche, Nursery, Primary and Secondary school.<br>
                                Providing Equal Opportunities for learning by creating an enabling environment.<br>
                                To help young people discover and harness their potential to develop into useful members of the society.</p>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/unique.jpg" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>HOLY FIELD IS UNIQUE FOR</h3>
							<p class="font-weight-bold text-justify">

							The fear of God <br>
                            Attractive and conducive environment for learning. <br>
                            Well motivated, experienced and dedicated staffers <br>
                            Broad-based Curriculum. <br>
                            Proper supervision and care of children. <br>
                            Prompt responsiveness and care of children.<br>
                            Vibrant Co-curricular activities.<br>
                            Well-stocked Library Modern books for students use. <br>
                            Good maintenance culture.</p>


						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/admission.jpg" alt="" width="457" height="273" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>ADMISSION PROCEDURE</h3>


							<p class="font-weight-bold text-justify">
                                Admission into all classes are on going. You can pick admission forms from the school between the period of 9am and 3:30pm Monday through Friday. <br>
                                Admission is on a first-come first-served basis.</p>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/facilities.jpg" width="457" height="273" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>FACILITIES</h3>


							<p class="font-weight-bold text-justify">
                                Spacious and well-equipped classrooms. <br>
                                Modern Teaching Aids.<br>
                                Well Equipped Laboratories.</p>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/tstaffing.jpg" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>TEACHING STAFF</h3>


							<p class="font-weight-bold text-justify">
                                    Our academic teaching members of staff are professionals in their various fields. <br>
                                    Specialist Teachers are however employed to teach Mathematics, English Language, Yoruba, French, Fine-Art, ICT, Computer Science and Primary Science. In addition, our Nursery school teachers are Montessori trained.</p>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/preschool.jpg" height="260" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>PRE SCHOOOL</h3>

							<p class="font-weight-bold text-justify">Pre-school group consists of children of ages 3 months to 1 year for the creche and 1 - 3 years in the preschool 1 and 2 classes. These classes are essentially playgroups with the help of experienced supervisors who ensure cleanliness, safety and comfort of their children at all times. <br>
                            Pupils are introduced to Montessori tools under the guidance of trained Montessori teachers.</p>

						</div>
					</div>
				</div>
            </div>

            <div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/nursery.jpg" style="height:285px;width:485px;" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>NURSERY</h3>


						<p class="font-weight-bold text-justify">This school consists of chilldren between the ages 3 - 5 years. Formal Academic work start under the guidance of Montessori trained class teacher with at least two class assistants.</p>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/primary.jpg" style="height:285px;width:485px;" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>PRIMARY</h3>
							<p class="font-weight-bold text-justify">

							Children admitted to primary must be above 5 years old. We encourage the class teaching system whereby pupils learn from their class teachers by direct contact through examples. </p>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/secondary.jpg" style="height:285px;width:485px;" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>SECONDARY</h3>


							<p class="font-weight-bold text-justify">
                               Children are admitted into the secondary school and must have passed the prescribed entrance examination. <br>
                                The subjects taught in the secondary school section include:  <br>
                                Mathematics, English Language, Literature in English, Biology, Physics, Chemistry, Yoruba, Computer Studies, ICT,Chirstian Religious Studies, Government,Economics, Geography, Book Keeping, Store Management, Insurance, Marketing, Financial Accounting, Agricultural
                                science, Food and Nutrition, Civic Education, Further Mathematics, Commerce and Home Management.

                                </p>

						</div>
					</div>
				</div>
            </div>

            <div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="images/staffing.jpg" width="457" height="273" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>STAFFING</h3>

							<p class="font-weight-bold text-justify">
                                The management of Holy Field School places high premium on professionalism in staff recruitment. <br> This way, We have gathered a team of loving, Self-motivated, Qualified and Experienced teaching staff to various subjects of their chosen disciplines.

                            </p>

						</div>
					</div>
				</div>
            </div>
		</div>

	</div>
</section>
@endsection
