@extends('theme.' . $theme . '.template')

@section('content')
<article>
<div class="page-thumbnail" style="--image:url('/images/thumbnail_prodi.png');">
    <h1 class="container">
        Frequently Asked Question
    </h1>
</div>
<section class="container">
    <div class="faqs">
        <div class="title">
            <h1>
                <strong>FAQs</strong>
            </h1>
        </div>
        <div class="desc">
            <p>
            Answers to common questions that faculty may ask. If you have any other questions, please <a href="mailto:fpsi@usu.ac.id">Contact Us</a>
            </p>
            <ul>
                <li class="container-xl h6 fw-normal lh-lg mt-2 px-2">
                For information on approved accommodation for students with disabilities, please see: <a href="#">Accommodation</a>
                </li>
                <li class="container-xl h6 fw-normal lh-lg mt-2 px-2">
                For more information on the rights and responsibilities of faculty in providing accommodation to students with disabilities, please see: <a href="#">Rights and Responsibilities</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="latar-abu-abu">
    <div class="container">
        <div class="grid">
            <div class="grid-left">
                <nav class="my-sticky">
                        <a href="#akademik" class="section-anchor">Akademik</a>
                </nav>
            </div>
            <div class="grid-right">
                <section class="vision mt-5">
                    <div class="container">
                        <h2 class="title-accordion-faqs" id="akademik">
                        Academic
                        </h2>
                        <nav class="accordion arrows mb-4">
                        <input type="radio" name="accordion" id="cb1">
                            <section class="accord">
                                    <label class="accord-title" for="cb1">What is the flow of applying for an active college letter?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                    <li><p>Fill in the Active Semester column</p></li>
                                     <li><p>Fill in the Student Study Program Column</p></li>
                                     <li><p>Fill in the Academic Year Column</p></li>
                                     <li><p>Fill in the Active Phone Number Column</p></li>
                                     <li><p>Fill in the Reasons or Requirements Column for the active letter</p></li>
                                     <li><p>Uploading Student Identity Card Files</p></li>
                                     <li><p>Uploading the Last Semester KRS Files</p></li>
                                     <li><p>Uploading the Last Semester KHS Files</p></li>
                                     <li><p>Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb2">
                            <section class="accord">
                                    <label class="accord-title" for="cb2">What is the flow of applying for an Internship letter?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                     <li><p>Fill in the Student Study Program column</p></li>
                                     <li><p>Fill in the Internship Destination Address column</p></li>
                                     <li><p>Fill in the Internship Destination City column.</p></li>
                                     <li><p> Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb3">
                            <section class="accord">
                                    <label class="accord-title" for="cb3">What is the flow of applying for a research permit?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                     <li><p>Fill in the Student Study Program column</p></li>
                                     <li><p>Fill in the Student Address column</p></li>
                                     <li><p>Fill in column Title of Student Proposal or Thesis</p></li>
                                     <li><p>Fill in the Research Location column</p></li>
                                     <li><p>Fill in the column Addressed To Whom the Research Letter</p></li>
                                     <li><p>Fill in the Counselor Name column</p></li>
                                     <li><p>Fill in the Semester column</p></li>
                                     <li><p>Uploading KTM File</p></li>
                                     <li><p>Uploading the Last SPP Slip File</p></li>
                                     <li><p>Uploading Approved Proposal Cover Files</p></li>
                                     <li><p>Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb4">
                            <section class="accord">
                                    <label class="accord-title" for="cb4">What is the flow of applying for an Alumni Certificate Application letter?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                     <li><p>Fill in the Study Program column</p></li>
                                     <li><p>Fill in the Day and Date of Thesis Examination column</p></li>
                                     <li><p>Fill in the Student Address column</p></li>
                                     <li><p>Fill in the Thesis/Final Thesis Title column</p></li>
                                     <li><p>Uploading the Thesis Submission Proof Files</p></li>
                                     <li><p>Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb5">
                            <section class="accord">
                                    <label class="accord-title" for="cb5">What is the flow of applying for a Certificate of Grade/Transcript?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                     <li><p>Fill in the Study Program column</p></li>
                                     <li><p>Fill in the column Reason for Submitting Description Value</p></li>
                                     <li><p>Uploading Semester 1 to Last KHS Files</p></li>
                                     <li><p>Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb6">
                            <section class="accord">
                                    <label class="accord-title" for="cb6">What is the flow of applying for a Scholarship Recommendation letter?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                     <li><p>Fill in the Semester column</p></li>
                                     <li><p>Fill in the Study Program column</p></li>
                                     <li><p>Fill in the Student Address column</p></li>
                                     <li><p>Fill in the Telephone Number column</p></li>
                                     <li><p>Fill in the Name of the Scholarship column you want to go to</p></li>
                                     <li><p>Uploading Statement of Not Receiving Scholarships from Any Party</p></li>
                                     <li><p>Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb7">
                            <section class="accord">
                                    <label class="accord-title" for="cb7">What is the flow of applying for a study program accreditation application letter?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    The flow of submission goes through the following stages:
                                    <ol>
                                     <li><p>Fill in the Study Program column</p></li>
                                     <li><p>Fill in the diploma number column</p></li>
                                     <li><p>Uploading Diploma Files</p></li>
                                     <li><p>Click the Submit Application Button in the ASA Application</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="acc-close" />
                        </nav>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
</article>
@endsection
