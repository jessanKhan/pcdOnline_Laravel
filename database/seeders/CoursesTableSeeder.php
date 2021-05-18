<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_categories = CourseCategory::all();

        $business_and_management = $course_categories->where('name', 'Business and Management')->first();
        $coding_and_computing = $course_categories->where('name', 'Coding and Computing')->first();
        $applied_sciences_and_technology = $course_categories->where('name', 'Applied Sciences and Technology')->first();
        $languages_and_culture = $course_categories->where('name', 'Languages and Culture')->first();

        $courses = [
            [
                'course_name' => 'Accounting and Finance',
                'slug' => Str::slug('Accounting and Finance', '-'),
                'category_id' => $business_and_management->id,
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/accounting 1.jpg',
                'overview' => '<p style="color: black">
                                An integrated course focusing on financial accounting, management
                                accounting and financial management implication for professional students,
                                small business owners and business executives who want to sharpen
                                their accounting and finance knowledge.

                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for students who understand accounting and finance i.e. for
                                beginners (Irish NFQ level 5) level learners.
                            </p>
                            <p style="color: black">
                                The course is delivered in both Online and Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                Lessons include theoretical and practical exercises with assessment instances.
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (30 hours taught, 80
                                    hours self-directed
                                    learning, and 10 hours final project).</li>
                                <li style="font-size: 12px; color: black;">Entry level: : Leaving Certificate/understanding
                                    level.</li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 1.5 hours lecture; 2 lessons
                                    per week.</li>


                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:: Wednesday Evening and Sunday
                                    Morning.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<p style="color: black">
                                </p><h4>Finance</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● Financial Environment: General Macro-economic Factors
                                        and Potential Conflicts Between Management and Shareholders.</li>
                                    <li style="font-size: 14px; ">● Capital Investment Appraisal: Methodologies, and
                                        Calculation of Payback Period, Discounted Payback Period, NPV and IRR.</li>
                                    <li style="font-size: 14px; ">● Capital Structure Approach: Concept, Significance and
                                        Calculation of WACC.</li>
                                    <li style="font-size: 14px; ">● Analysing financial and non-financial performance of a
                                        Business.</li>
                                    <li style="font-size: 14px; ">● External Sources of Finance: Role of Investors, Venture
                                        Capital and Alternatives.</li>
                                </ul>
                                <p></p>
                                <p style="color: black">
                                </p><h4>Management Accounting</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● Organisational Context of Management Accounting.</li>
                                    <li style="font-size: 14px; ">● Budget Setting, Processes and Preparation.</li>
                                    <li style="font-size: 14px; ">● Control using standard costs and variance analysis.</li>
                                    <li style="font-size: 14px; ">● Cost Accounting and Cost Management.</li>
                                    <li style="font-size: 14px; ">● Decision Making: CVP and breakeven analyses, assumptions
                                        and limitations.</li>
                                </ul>
                                <p></p>
                                <p style="color: black">
                                </p><h4>Financial Accounting</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● Double Entry Book-keeping and Recording Information.
                                    </li>
                                    <li style="font-size: 14px; ">● Accounts Statement of Cash Flows Preparation for Sole
                                        Trader and Company accounts.</li>
                                </ul>
                                <p></p>',
                'learning_outcome' => '<p style="color: black">
                                This course is designed to develop student’s skills across business and
                                corporate sectors including digital currency, financial accounting and
                                reporting, investment appraisal, capital structuring, dividend decisions,
                                budgeting, financial performance analysis and decision making.
                            </p>',
                'opportunities' => '<p style="color: black">
                                    ● Highly useful for ACA, ACCA, CPA and CIMA examiners.

                                    <br>● Truly beneficial for building a solid accounting and finance knowledge
                                    for business owners.

                                    <br>● A complete knowledge building package for the job seekers who
                                    wants to join workforce.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice accounting and finance in areas of special interest.

                                    <br>● Improve accountancy skills while enjoying free time with leisure activities.

                                    <br>● Access to material posted on our school online platform.
                                </p>',
            ],
            [
                'course_name' => 'Digital Enterprise and Business Support',
                'slug' => Str::slug('Digital Enterprise and Business Support', '-'),
                'category_id' => $business_and_management->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/digital en 2.jpg',
                'overview' => '<p style="color: black">
                                Course provides an opportunity to develop practical entrepreneurial and
                                digital skills, aimed at supporting new business development and growth
                                within start-up and small / medium businesses.

                                <br>● Global eCommerce market is expected to reach US$2.7 trillion in
                                revenues by 2023.
                                <br>● Global Digital Media market is expected to reach a value of US$157
                                billion by 2023.

                                <br>● Global Digital Payments market volume will grow to over US$6.7
                                trillion by 2023.

                                <br>● Projected Employment growth in digitally enabled businesses of
                                ~30%.

                                <br>● Upskilling/reskilling is a necessity for people in business sectors.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for beginners (Irish N FQ level5) and interm ediate level(N FQ
                                level6) learners only and delivered in both Online and Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for
                                further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                This course will be supported by
                                practical case work, formative and
                                summative assessment.
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (30 hours taught,
                                    80
                                    hours self-directed
                                    learning, and 10 hours final project).
                                </li>
                                <li style="font-size: 12px; color: black;">Entry level: : Leaving
                                    Certificate/understanding
                                    level.
                                </li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 1.5 hours lecture; 2
                                    lessons
                                    per week.
                                </li>

                                </li>
                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:: Morning, Afternoon or
                                    Evening..
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Introduction to Marketing.</li>
                                    <li style="font-size: 14px; ">● The Digital World.</li>
                                    <li style="font-size: 14px; ">● Digital Business.</li>
                                    <li style="font-size: 14px; ">● Digital Marketing 1.</li>
                                    <li style="font-size: 14px; ">● Digital Marketing 2.</li>
                                    <li style="font-size: 14px; ">● E-Commerce.</li>
                                    <li style="font-size: 14px; ">● Business Development.</li>
                                    <li style="font-size: 14px; ">● Digital Business Models & Monetisation.</li>
                                    <li style="font-size: 14px; ">● Business Accounting & Finance 1.</li>
                                    <li style="font-size: 14px; ">● Business Accounting & Finance 2.</li>
                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                    ● Skills in Core Marketing.

                                    <br/>● Digital Media Planning & Activation.

                                    <br/>● Reach, Engagement & Business Development.

                                    <br/>● Business Model Design & Business Development.

                                </p>',
                'opportunities' => '<p style="color: black">
                                    ● Highly useful for ACA, ACCA, CPA and CIMA examiners.

                                    <br/>● Truly beneficial for building a solid accounting and finance knowledge
                                    for business owners.

                                    <br/>● A complete knowledge building package for the job seekers who
                                    wants to join workforce.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice accounting and finance in areas of special interest
                                    including
                                    the development of own business ideas.

                                    <br/>● Improve related skills while enjoying free time with leisure activities.

                                    <br/>● Partial use of computer lab and access to material posted on our
                                    school online platform.
                                    <br/>● Support and feedback from qualified teachers.
                                </p>',
            ]
        ];

        $output = Course::insert($courses);

        return $output;
    }
}
