@extends('layouts.student.app')

@section('navbar-title', 'FAQs - Violation Process')

@section('content')

<div class="container-fluid px-3 px-lg-4 pb-5">
    <div class="d-flex justify-content-center align-items-center mb-4">
        <h2 class="fw-bold m-0 fs-3 fs-md-2 mt-3 text-center " >
            Frequently Asked Questions
        </h2>
    </div>


    <div class="row g-4 justify-content-center">
        <div class="col-12 col-lg-8">
            <!-- FILING VIOLATIONS -->
            <div class="mb-4">
                <h4 class="fw-bold mb-3" style="color: #951313;">Filing Violations</h4>

                <div class="accordion" id="filingViolationsAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#filing-faq1" aria-expanded="false">
                                How can a student file a report?
                            </button>
                        </h2>
                        <div id="filing-faq1" class="accordion-collapse collapse" data-bs-parent="#filingViolationsAccordion">
                            <div class="accordion-body">
                                <ul class="mb-0">
                                    <li>Formal complaints regarding violations shall be filed with the Office of Student Services (OSS).</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#filing-faq2">
                                What information must be included in an Incident Report?
                            </button>
                        </h2>
                        <div id="filing-faq2" class="accordion-collapse collapse" data-bs-parent="#filingViolationsAccordion">
                            <div class="accordion-body">
                                <p>To ensure a thorough investigation, all reports submitted to the Office of Student Services (OSS) should contain the following details:</p>
                                <ul class="mb-0">
                                    <li><strong>Complainant/Student Information:</strong> Full legal name and official student identification number.</li>
                                    <li><strong>Temporal Details:</strong> The exact date and specific time the incident occurred.</li>
                                    <li><strong>Nature of the Violation:</strong> A clear identification of the specific policy or rule allegedly breached.</li>
                                    <li><strong>Incident Location:</strong> The precise campus building, room number, or area where the event took place.</li>
                                    <li><strong>Factual Narrative:</strong> A comprehensive and objective description of the events as they transpired.</li>
                                    <li><strong>Reporting Personnel:</strong> The name and signature of the individual filing the report.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- APPEALS -->
            <div class="mb-4">
                <h4 class="fw-bold mb-3" style="color: #951313;">Appeals</h4>

                <div class="accordion" id="appealsAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#appeals-faq1" aria-expanded="false">
                                I believe a violation has been issued to me in error. How can I appeal?
                            </button>
                        </h2>
                        <div id="appeals-faq1" class="accordion-collapse collapse" data-bs-parent="#appealsAccordion">
                            <div class="accordion-body">
                                <ul class="mb-0">
                                    <li>If you believe a violation record is inaccurate or was issued without sufficient cause, you have the right to file a formal appeal. Appeals must be formally submitted within three (3) business days of the violation record's date of issuance. Failure to file within this designated timeframe may result in the forfeiture of your right to contest the record.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#appeals-faq2">
                                What happens if I fail to submit an appeal within the three-day window?
                            </button>
                        </h2>
                        <div id="appeals-faq2" class="accordion-collapse collapse" data-bs-parent="#appealsAccordion">
                            <div class="accordion-body">
                                <p>If a formal appeal is not filed within the three (3) business days following the issuance of a violation, the student is deemed liable by default. Consequently, the violation will be permanently entered into the student's disciplinary record, and any associated penalties will be applied.</p>
                                <p class="mb-0">To resolve the matter and address the outstanding record, the student is required to report to the Office of Student Services (OSS) immediately. A mandatory meeting will be necessary to discuss the violation and fulfill any disciplinary requirements or administrative obligations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#appeals-faq3">
                                What happens if my appeal is denied?
                            </button>
                        </h2>
                        <div id="appeals-faq3" class="accordion-collapse collapse" data-bs-parent="#appealsAccordion">
                            <div class="accordion-body">
                                <p>If the Office of Student Services (OSS) or the relevant appeals committee denies the request for reconsideration, the original decision is upheld. The sanctions originally imposed will be applied immediately, and the disciplinary process will proceed to its final stages.</p>
                                <p class="mb-0">Upon receiving a notice of denial, the student is mandatorily required to report to the Office of Student Services (OSS). This visit is necessary to receive formal instructions regarding the fulfillment of sanctions and to ensure the disciplinary record is accurately processed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SANCTIONS -->
            <div class="mb-4">
                <h4 class="fw-bold mb-3" style="color: #951313;">Sanctions</h4>

                <div class="accordion" id="sanctionsAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#sanctions-faq1" aria-expanded="false">
                                I have completed my sanctions. How do I clear my record?
                            </button>
                        </h2>
                        <div id="sanctions-faq1" class="accordion-collapse collapse" data-bs-parent="#sanctionsAccordion">
                            <div class="accordion-body">
                                <p>Once you have complied with the given sanctions, you must:</p>
                                <ul class="mb-0">
                                    <li><strong>Report to the OSS:</strong> Visit the office to present all required documentation.</li>
                                    <li><strong>Provide Proof of Compliance:</strong> Submit evidence (e.g., certificates, letters, or logs) proving the sanctions were served.</li>
                                    <li><strong>Administrative Verification:</strong> The OSS Admin will review your submission to verify that all requirements have been met and officially update your disciplinary status.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 border-bottom mb-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#sanctions-faq2">
                                Consequences of Non-Compliance with Sanctions
                            </button>
                        </h2>
                        <div id="sanctions-faq2" class="accordion-collapse collapse" data-bs-parent="#sanctionsAccordion">
                            <div class="accordion-body">
                                <p>If a student fails to serve their sanctions or provide proof of completion, the university typically takes the following actions:</p>
                                <ul class="mb-0">
                                    <li><strong>Escalation of Penalties:</strong> The original sanction may be doubled or replaced with a more severe penalty. For example, a "Written Warning" may escalate to "Disciplinary Probation."</li>
                                    <li><strong>Suspension:</strong> For persistent non-compliance, the university may impose a Mandatory Suspension, barring you from campus and classes for a specific term (e.g., one semester).</li>
                                    <li><strong>Dismissal/Exclusion:</strong> In extreme cases of willful defiance, the university may move toward Permanent Dismissal (Exclusion), where the student is removed from the school rolls and issued transfer credentials.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection