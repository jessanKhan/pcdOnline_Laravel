<?php namespace Database\Seeders;

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
                'course_name' => 'Accounting and Finance',
                'slug' => Str::slug('Accounting and Finance 2', '-'),
                'category_id' => $business_and_management->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/accounting 2.jpg',
                'overview' => '<p style="color: black">
                                An integrated course focusing on financial accounting, management
                                accounting and financial management implication for professional students,
                                small business owners and business executives who want to sharpen
                                their accounting and finance knowledge.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for students who understand accounting and finance i.e. for
                                intermediate (NFQ level 6) level learners.
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
                                <li style="font-size: 14px; color: black;">● Course duration: 10 weeks (30 hours taught, 80
                                    hours self-directed
                                    learning, and 10 hours final project).</li>
                                <li style="font-size: 14px; color: black;">Entry level: NFQ level 5 completed/Leaving Certificate/understanding
                                    level.</li>
                                <li style="font-size: 14px; color: black;">● Lesson duration: 1.5 hours lecture; 2 lessons
                                    per week.</li>


                                <li style="font-size: 14px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 14px; color: black;">● Course timetable:: Wednesday Evening and Sunday
                                    Morning.
                                </li>
                                <li style="font-size: 14px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
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
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/digital en 1.jpg',
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
                                This course is designed for beginners (Irish NFQ level 5) learners only and delivered in both Online and Virtual Classroom                                            environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                This course will be supported by
                                practical case work, formative and
                                summative assessment.
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
                                <li style="font-size: 12px; color: black;">● Course timetable:: Morning, Afternoon or
                                    Evening..
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Introduction to Marketing.</li>
                                    <li style="font-size: 14px; ">● The Digital World.</li>
                                    <li style="font-size: 14px; ">● Digital Business.</li>
                                    <li style="font-size: 14px; ">● Digital Marketing 1.</li>
                                    <li style="font-size: 14px; ">● Digital Marketing 2.</li>
                                    <li style="font-size: 14px; ">● E-Commerce.</li>
                                    <li style="font-size: 14px; ">● Business Development.</li>
                                    <li style="font-size: 14px; ">● Digital Business Models &amp; Monetisation.</li>
                                    <li style="font-size: 14px; ">● Business Accounting &amp; Finance 1.</li>
                                    <li style="font-size: 14px; ">● Business Accounting &amp; Finance 2.</li>
                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Skills in Core Marketing.

                                <br>● Digital Media Planning &amp; Activation.

                                <br>● Reach, Engagement &amp; Business Development.

                                <br>● Business Model Design &amp; Business Development.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    ● Highly useful for ACA, ACCA, CPA and CIMA examiners.

                                    <br>● Truly beneficial for building a solid accounting and finance knowledge
                                    for business owners.

                                    <br>● A complete knowledge building package for the job seekers who
                                    wants to join workforce.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice accounting and finance in areas of special interest including
                                    the development of own business ideas.

                                    <br>● Improve related skills while enjoying free time with leisure activities.

                                    <br>● Partial use of computer lab and access to material posted on our
                                    school online platform.
                                    <br>● Support and feedback from qualified teachers.
                                </p>',
            ],
            [
                'course_name' => 'Digital Enterprise and Business Support',
                'slug' => Str::slug('Digital Enterprise and Business Support 2', '-'),
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
            ],
            [
                'course_name' => 'Machine Learning with Python',
                'slug' => Str::slug('Machine Learning with Python', '-'),
                'category_id' => $coding_and_computing->id,
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/python1.jpg',
                'overview' => '<p style="color: black">
                                A well designed course for novice level to step into the world of


                                computing.The course mainly focuses on:

                                <br>● Applying logical thinking skills to solve computational problems.
                                <br>● Understanding object-oriented programming terminologies and conventions.

                                <br>● Applying data handling and visualization techniques to work on machine learning.

                                <br>● Understanding of machine learning techniques

                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for beginners (Irish NFQ level 5) learners only and delivered Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term
                                quiz (20% ) and a project task (60% ).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">● Entry level: Open to all.</li>
                                <li style="font-size: 12px; color: black;">● Lesson time: 2 hours per lecture and 1 hour
                                    assignment per week.</li>


                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:Wednesday Evening and Sunday
                                    Morning.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Object Orientated Programming: Familiarising with
                                        definitions and concepts.</li>
                                    <li style="font-size: 14px; ">● LogicalThinking,Logical Operation: How to write codes.
                                    </li>
                                    <li style="font-size: 14px; ">● Conditions,Loops: Writing codes with loops and
                                        conditions.</li>
                                    <li style="font-size: 14px; ">● Python Data structure: Working with different data
                                        structure.</li>
                                    <li style="font-size: 14px; ">● Function Calling: Working with multiple function.</li>
                                    <li style="font-size: 14px; ">● Data Set Handling and Visualization: Learn to install
                                        new libraries and plot data.</li>
                                    <li style="font-size: 14px; ">● Data Pre-processing: Data preparation to use machine
                                        learning.</li>
                                    <li style="font-size: 14px; ">● Classification Problems: Understanding classification
                                        algorithms.</li>
                                    <li style="font-size: 14px; ">● Regression Problems:Understanding regression algorithms.
                                    </li>
                                    <li style="font-size: 14px; ">● Project Discussion: Understanding classification
                                        algorithms.</li>

                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Understanding of Machine Learning and Python.

                                <br>● Logical thinking and

                                <br>● Programming skills.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    ● Gain strong foundation on machine learning.

                                    <br>● Advance knowledge and skills in python coding.

                                    <br>● Enter high demand IT Jobs market as Python developer.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice programming in areas of special interest.

                                    <br>● Improve coding language skills while enjoying free time with leisure activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                </p>',
            ],
            [
                'course_name' => 'Machine Learning with Python',
                'slug' => Str::slug('Machine Learning with Python 2', '-'),
                'category_id' => $coding_and_computing->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/python2.jpg',
                'overview' => '<p style="color: black">
                                A well designed course for novice level to step into the world of


                                computing.The course mainly focuses on:

                                <br>● Applying logical thinking skills to solve computational problems.
                                <br>● Understanding object-oriented programming terminologies and conventions.

                                <br>● Applying data handling and visualization techniques to work on machine learning.

                                <br>● Understanding of machine learning techniques

                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for interm ediate level(NFQ
                                level 6) learners only and delivered in Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term
                                quiz (20% ) and a project task (60% ).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">● Entry level: Open to all(NFQ level 5 completed students).</li>
                                <li style="font-size: 12px; color: black;">● Lesson time: 2 hours per lecture and 1 hour
                                    assignment per week.</li>


                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:Wednesday Evening and Sunday
                                    Morning.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Object Orientated Programming: Familiarising with
                                        definitions and concepts.</li>
                                    <li style="font-size: 14px; ">● LogicalThinking,Logical Operation: How to write codes.
                                    </li>
                                    <li style="font-size: 14px; ">● Conditions,Loops: Writing codes with loops and
                                        conditions.</li>
                                    <li style="font-size: 14px; ">● Python Data structure: Working with different data
                                        structure.</li>
                                    <li style="font-size: 14px; ">● Function Calling: Working with multiple function.</li>
                                    <li style="font-size: 14px; ">● Data Set Handling and Visualization: Learn to install
                                        new libraries and plot data.</li>
                                    <li style="font-size: 14px; ">● Data Pre-processing: Data preparation to use machine
                                        learning.</li>
                                    <li style="font-size: 14px; ">● Classification Problems: Understanding classification
                                        algorithms.</li>
                                    <li style="font-size: 14px; ">● Regression Problems:Understanding regression algorithms.
                                    </li>
                                    <li style="font-size: 14px; ">● Project Discussion: Understanding classification
                                        algorithms.</li>

                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Understanding of Machine Learning and Python.

                                <br>● Logical thinking and

                                <br>● Programming skills.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    ● Gain strong foundation on machine learning.

                                    <br>● Advance knowledge and skills in python coding.

                                    <br>● Enter high demand IT Jobs market as Python developer.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice programming in areas of special interest.

                                    <br>● Improve coding language skills while enjoying free time with leisure activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                </p>',
            ],
            [
                'course_name' => '.NET PROGRAMMING',
                'slug' => Str::slug('DOT NET PROGRAMMING', '-'),
                'category_id' => $coding_and_computing->id,
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/dotnet 1.jpg',
                'overview' => '<p style="color: black">
                                Microsoft Visual C# is the most versatile, cross-platform programming
                                language in the world. The C# can be used to write almost any type of
                                software including console apps, back end services, mobile apps
                                including iOS and Android, windows apps, and Websites, Enterprise
                                software, blockchains, AI, and cloud applications.
                            </p>
                            <p style="color: black">
                                The C# language is one of the fastest evolving programming languages.
                                C# is easy to learn and adapt. C# also has strong support within the
                                community, as well as support from the most valuable company in the
                                world, Microsoft. According to Indeed, the average C# .Net developer
                                earns a salary of €56,534 per year in Ireland, which shows that over time
                                your skills will become valuable.
                            </p>
                            <p style="color: black">
                                Prudence College is introducing ‘C# .Net for Everyone’ for the first time in
                                Ireland to facilitate leaners without prior knowledge to become proficient
                                in this customised course.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for beginners (Irish NFQ level 5) learners only and delivered in Virtual Classroom                                                            environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term
                                quiz (20% ) and a project task (60% ).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration:10 weeks (30 hours taught,80
                                    hours
                                    self-directed
                                    learning,and
                                    10
                                    hours final project).</li>
                                <li style="font-size: 12px; color: black;">● Entry level: Open to all professionals (employees
                                    of private and
                                    commercial semi-state organisations) andpost-leaving certificate
                                    students. Some understanding of common programming concepts, such
                                    as variables and looping will be helpful.</li>
                                <li style="font-size: 12px; color: black;">● Certificate/understanding level.</li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 1.5 hours lecture;2 lessons
                                    per week.
                                </li>
                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:: Sunday Morning and Thursday
                                    Evening.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Overview of Visual C# Programming.</li>
                                    <li style="font-size: 14px; ">● C# Applications, Classes and Objects, Control
                                        Statements.</li>
                                    <li style="font-size: 14px; ">● Methods, Arrays.</li>
                                    <li style="font-size: 14px; ">● LINQ , Entity Framework and Generic Collections.</li>
                                    <li style="font-size: 14px; ">● Inheritance, Polymorphism, Interfaces &amp; Operator
                                        Overloading.</li>
                                    <li style="font-size: 14px; ">● Exception Handling.</li>
                                    <li style="font-size: 14px; ">● Introduction to Web Development MVC technique.</li>
                                    <li style="font-size: 14px; ">● Model View and Controller.</li>
                                    <li style="font-size: 14px; ">● Thread and Asynchronous Programming.</li>
                                    <li style="font-size: 14px; ">● Introduction to SQL Server.</li>

                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Major elements of the .NET Framework.

                                <br>● Explain the basic concepts and terminology of object-oriented programming.


                                <br>● Describe data-centric applications, ADO.NET architecture, and ADO.NET and SQL.

                                <br>● Connect to SQL Server and other data sources

                                <br>● Build several projects to help practice and test knowledge using quizzes.

                                <br>● Deploy Windows and ASP.NET web applications.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    A number of open positions are available in different sectors such as Startup companies
                                    working on a range of web applications areas such as:
                                    ● Top Tech Companies: Microsoft, IBM, Facebook, and

                                    <br>● Banks, Financial Services Companies, State and Local Governments, Enterprise,
                                    Cross Platform Mobile Development (iOS, Android, UWP) in general use C#.


                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Evaluate field problems with .NET programming.

                                    <br>● Improve technical/soft/hard skills while enjoying free time with leisure
                                    activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                </p>',
            ],
            [
                'course_name' => '.NET PROGRAMMING',
                'slug' => Str::slug('DOT NET PROGRAMMING 2', '-'),
                'category_id' => $coding_and_computing->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/dotnet 2.jpg',
                'overview' => '<p style="color: black">
                                Microsoft Visual C# is the most versatile, cross-platform programming
                                language in the world. The C# can be used to write almost any type of
                                software including console apps, back end services, mobile apps
                                including iOS and Android, windows apps, and Websites, Enterprise
                                software, blockchains, AI, and cloud applications.
                            </p>
                            <p style="color: black">
                                The C# language is one of the fastest evolving programming languages.
                                C# is easy to learn and adapt. C# also has strong support within the
                                community, as well as support from the most valuable company in the
                                world, Microsoft. According to Indeed, the average C# .Net developer
                                earns a salary of €56,534 per year in Ireland, which shows that over time
                                your skills will become valuable.
                            </p>
                            <p style="color: black">
                                Prudence College is introducing ‘C# .Net for Everyone’ for the first time in
                                Ireland to facilitate leaners without prior knowledge to become proficient
                                in this customised course.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for interm ediate level(NFQ
                                level 6) learners only and delivered Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term
                                quiz (20% ) and a project task (60% ).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration:10 weeks (30 hours taught,80
                                    hours
                                    self-directed
                                    learning,and
                                    10
                                    hours final project).</li>
                                <li style="font-size: 12px; color: black;">● Entry level: Open to all professionals (employees
                                    of private and
                                    commercial semi-state organisations) and (NFQ level 5 completed students)post-leaving certificate
                                    students. Some understanding of common programming concepts, such
                                    as variables and looping will be helpful.</li>
                                <li style="font-size: 12px; color: black;">● Certificate/understanding level.</li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 1.5 hours lecture;2 lessons
                                    per week.
                                </li>
                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:: Sunday Morning and Thursday
                                    Evening.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Overview of Visual C# Programming.</li>
                                    <li style="font-size: 14px; ">● C# Applications, Classes and Objects, Control
                                        Statements.</li>
                                    <li style="font-size: 14px; ">● Methods, Arrays.</li>
                                    <li style="font-size: 14px; ">● LINQ , Entity Framework and Generic Collections.</li>
                                    <li style="font-size: 14px; ">● Inheritance, Polymorphism, Interfaces &amp; Operator
                                        Overloading.</li>
                                    <li style="font-size: 14px; ">● Exception Handling.</li>
                                    <li style="font-size: 14px; ">● Introduction to Web Development MVC technique.</li>
                                    <li style="font-size: 14px; ">● Model View and Controller.</li>
                                    <li style="font-size: 14px; ">● Thread and Asynchronous Programming.</li>
                                    <li style="font-size: 14px; ">● Introduction to SQL Server.</li>

                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Major elements of the .NET Framework.

                                <br>● Explain the basic concepts and terminology of object-oriented programming.


                                <br>● Describe data-centric applications, ADO.NET architecture, and ADO.NET and SQL.

                                <br>● Connect to SQL Server and other data sources

                                <br>● Build several projects to help practice and test knowledge using quizzes.

                                <br>● Deploy Windows and ASP.NET web applications.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    A number of open positions are available in different sectors such as Startup companies
                                    working on a range of web applications areas such as:
                                    <br>● Top Tech Companies: Microsoft, IBM, Facebook, and

                                    <br>● Banks, Financial Services Companies, State and Local Governments, Enterprise,
                                    Cross Platform Mobile Development (iOS, Android, UWP) in general use C#.


                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Evaluate field problems with .NET programming.

                                    <br>● Improve technical/soft/hard skills while enjoying free time with leisure
                                    activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                </p>',
            ],
            [
                'course_name' => 'Blockchain for Everyone',
                'slug' => Str::slug('Blockchain for Everyone', '-'),
                'category_id' => $coding_and_computing->id,
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/blockchain 1.jpg',
                'overview' => '<p style="color: black">
                                Globally, Blockchain (BC) development skills rank in the top three job
                                openings with predicted growth of 517% over time (Computerworld).
                            </p>
                            <p style="color: black">
                                It is the next wave of technology innovation that will underpin almost
                                every industry. This course is specifically designed for people from all
                                sectors such as Finance, Fashion, Food, Telecom and Automation.
                            </p>
                            <p style="color: black">
                                Importantly, based on the enormous technological significance and the
                                application across sectors, IDA Ireland has been promoting ‘Ireland’ as
                                the major EU Hub for Blockchain.
                            </p>
                            <p style="color: black">
                                Prudence is for the first time in Ireland, introducing ‘Blockchain for
                                Everyone’, to facilitate learners without prior knowledge to become
                                proficient in this specialised industry area.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for beginners (Irish NFQ level 5) learners only and delivered in both Online and Virtual Classroom                                            environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term
                                quiz (20% ) and a project task (60% ).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">Entry level: Open to all professionals (employees
                                    of private and commercial semi-state organisations) and post-leaving certificate
                                    students. Open to all.</li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 2 hours lecture + 1 hour
                                    assignment per week.</li>

                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable: Saturday Morning) and
                                    Wednesday Evening.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Psychological Story.</li>
                                    <li style="font-size: 14px; ">● Money and Blockchain Connection.</li>
                                    <li style="font-size: 14px; ">● Gold and Crypto, War on Cash.</li>
                                    <li style="font-size: 14px; ">● BC types, Layers, Problems and Fundamental Properties.
                                    </li>
                                    <li style="font-size: 14px; ">● Application of BC technology and Evaluation of Use
                                        Cases.</li>
                                    <li style="font-size: 14px; ">● Applications in all Verticals.</li>
                                    <li style="font-size: 14px; ">● Consensus Algorithms.</li>
                                    <li style="font-size: 14px; ">● Initial Coin Offering.</li>
                                    <li style="font-size: 14px; ">● Smart Contracts (Write Your Own).</li>
                                    <li style="font-size: 14px; ">● How to become a BC developer/Architect.</li>

                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Gain strong foundation on Distributed Ledger Technology i.e. Blockchain.

                                <br>● Advance knowledge and skills in understanding of Smart Contracts.

                                <br>● Identification of application areas.

                                <br>● Learn where Blockchain Technology can be applied.

                                <br>● Build your path to becoming a Blockchain Developer.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    Number of open positions available in different sectors such as, Start-up
                                    companies working on range of security areas such as
                                    <br>● Top Tech Companies: IBM, Microsoft, Facebook and MasterCard,

                                    <br>● Governments: All sectors specifically Finance Departments that are
                                    planning to replace payments with Blockchain Technology, and

                                    <br>● Banks: Banks that are investing in Blockchain.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Evaluate field problems with Blockchain.

                                    <br>● Improve technical/soft/hard skills while enjoying free time with leisure
                                    activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                    <br>● Interactive course, practical approach enabling learning from any part of the
                                    world.

                                </p>',
            ],
            [
                'course_name' => 'Blockchain for Everyone',
                'slug' => Str::slug('Blockchain for Everyone 2', '-'),
                'category_id' => $coding_and_computing->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/blockchain 2.jpg',
                'overview' => '<p style="color: black">
                                Globally, Blockchain (BC) development skills rank in the top three job
                                openings with predicted growth of 517% over time (Computerworld).
                            </p>
                            <p style="color: black">
                                It is the next wave of technology innovation that will underpin almost
                                every industry. This course is specifically designed for people from all
                                sectors such as Finance, Fashion, Food, Telecom and Automation.
                            </p>
                            <p style="color: black">
                                Importantly, based on the enormous technological significance and the
                                application across sectors, IDA Ireland has been promoting ‘Ireland’ as
                                the major EU Hub for Blockchain.
                            </p>
                            <p style="color: black">
                                Prudence is for the first time in Ireland, introducing ‘Blockchain for
                                Everyone’, to facilitate learners without prior knowledge to become
                                proficient in this specialised industry area.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for interm ediate level(NFQ level 6) learners only and delivered in both Online and Virtual Classroom                                          environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term
                                quiz (20% ) and a project task (60% ).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">Entry level: Open to all professionals (employees
                                    of private and
                                    commercial semi-state organisations) and post-leaving certificate
                                    students. Open to all NFQ level 5 completed students.</li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 2 hours lecture + 1 hour
                                    assignment per week.</li>

                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable: Saturday Morning) and
                                    Wednesday Evening.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<ul>
                                    <li style="font-size: 14px; ">● Psychological Story.</li>
                                    <li style="font-size: 14px; ">● Money and Blockchain Connection.</li>
                                    <li style="font-size: 14px; ">● Gold and Crypto, War on Cash.</li>
                                    <li style="font-size: 14px; ">● BC types, Layers, Problems and Fundamental Properties.
                                    </li>
                                    <li style="font-size: 14px; ">● Application of BC technology and Evaluation of Use
                                        Cases.</li>
                                    <li style="font-size: 14px; ">● Applications in all Verticals.</li>
                                    <li style="font-size: 14px; ">● Consensus Algorithms.</li>
                                    <li style="font-size: 14px; ">● Initial Coin Offering.</li>
                                    <li style="font-size: 14px; ">● Smart Contracts (Write Your Own).</li>
                                    <li style="font-size: 14px; ">● How to become a BC developer/Architect.</li>

                                </ul>',
                'learning_outcome' => '<p style="color: black">
                                ● Gain strong foundation on Distributed Ledger Technology i.e. Blockchain.

                                <br>● Advance knowledge and skills in understanding of Smart Contracts.

                                <br>● Identification of application areas.

                                <br>● Learn where Blockchain Technology can be applied.

                                <br>● Build your path to becoming a Blockchain Developer.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    Number of open positions available in different sectors such as, Start-up
                                    companies working on range of security areas such as
                                    <br>● Top Tech Companies: IBM, Microsoft, Facebook and MasterCard,

                                    <br>● Governments: All sectors specifically Finance Departments that are
                                    planning to replace payments with Blockchain Technology, and

                                    <br>● Banks: Banks that are investing in Blockchain.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Evaluate field problems with Blockchain.

                                    <br>● Improve technical/soft/hard skills while enjoying free time with leisure
                                    activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                    <br>● Interactive course, practical approach enabling learning from any part of the
                                    world.

                                </p>',
            ],
            [
                'course_name' => 'Scientific Data Handling and Programming',
                'slug' => Str::slug('Scientific Data Handling and Programming', '-'),
                'category_id' => $applied_sciences_and_technology->id,
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/scientificdata1.jpg',
                'overview' => '<p style="color: black">
                                The ability to form research questions and test our hypothesis with data is a
                                keystone skill in science. This course will equip students to understand data
                                collection and analysis in the context of research. The course will be a practical
                                guide to completing data collection and analysis for research with a “hands-on”
                                approach.
                            </p>
                            <p style="color: black">
                                Fundamental skills in R, Python, GIS, and other relevant computer programming
                                languages will be discussed as tools to extract knowledge from the data.
                                Statistical theory will be discussed in the context of problems students will
                                encounter throughout the course to assure a comprehensive understanding
                                without being overwhelmed. Students will learn the research process from
                                beginning to end which will culminate in a short research project being
                                completed to compile the skills learned throughout.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for under- and
                                post-graduate students, as well as
                                scientific and technical professionals
                                (NFQ levels 5) and delivered in
                                both Online and
                                Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                Classes will be a mix of lectures,
                                practical and supervised research. The
                                course will be assessed through inclass exercises and through the
                                completion of a small research project
                                where the skills acquired in class will be
                                practiced.
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">● Entry level: Open to all/Understanding level.
                                </li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: : 2 hours per lecture + 1 hour
                                    assignment per week.</li>

                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable: Tuesday Evening and Saturday
                                    Morning.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<p style="color: black">
                                    Introduction to research methodology

                                    <br>● Understanding experimental design.

                                    <br>● Understanding the data required to answer questions.

                                    <br>● Learning data collection methods.

                                </p>
                                <p style="color: black">
                                    Introduction to data handling

                                    <br>● Building a database.

                                    <br>● Reading and writing data.

                                    <br>● Understanding dataset curation.

                                </p>
                                <p style="color: black">
                                    Introduction to programming

                                    <br>● Introduction to R stats for science.

                                    <br>● Introduction to Python for science.

                                    <br>● Introduction to GIS for science.

                                </p>
                                <p style="color: black">
                                    ● Research mini-project + assignments

                                    <br>● Online class exercises.

                                    <br>● Research mini-project on a topic chosen.

                                </p>',
                'learning_outcome' => '<p style="color: black">
                                ● Understanding research.

                                <br>● Hypothesis formation.

                                <br>● Basic programming skills.

                                <br>● Data science skills and

                                <br>● Scientific writing.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    ● Academic research e.g. Research MSc and PhD.
                                    <br>● Data science jobs across industries including academic and research institutes.

                                    <br>● Government research jobs.

                                    <br>● Consultancy jobs.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice data analysis and programming in areas of special interest.

                                    <br>● Improve skills while enjoying free time with leisure activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                </p>',
            ],
            [
                'course_name' => 'Scientific Data Handling and Programming',
                'slug' => Str::slug('Scientific Data Handling and Programming 2', '-'),
                'category_id' => $applied_sciences_and_technology->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/scientificdata2.jpg',
                'overview' => '<p style="color: black">
                                The ability to form research questions and test our hypothesis with data is a
                                keystone skill in science. This course will equip students to understand data
                                collection and analysis in the context of research. The course will be a practical
                                guide to completing data collection and analysis for research with a “hands-on”
                                approach.
                            </p>
                            <p style="color: black">
                                Fundamental skills in R, Python, GIS, and other relevant computer programming
                                languages will be discussed as tools to extract knowledge from the data.
                                Statistical theory will be discussed in the context of problems students will
                                encounter throughout the course to assure a comprehensive understanding
                                without being overwhelmed. Students will learn the research process from
                                beginning to end which will culminate in a short research project being
                                completed to compile the skills learned throughout.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for under- and
                                post-graduate students, as well as
                                scientific and technical professionals
                                (NFQ levels 6) and delivered in
                                both Online and
                                Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                Classes will be a mix of lectures,
                                practical and supervised research. The
                                course will be assessed through inclass exercises and through the
                                completion of a small research project
                                where the skills acquired in class will be
                                practiced.
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">● Entry level: Open to NFQ level 5 completed all/Understanding level.
                                </li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: : 2 hours per lecture + 1 hour
                                    assignment per week.</li>

                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable: Tuesday Evening and Saturday
                                    Morning.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<p style="color: black">
                                    Introduction to research methodology

                                    <br>● Understanding experimental design.

                                    <br>● Understanding the data required to answer questions.

                                    <br>● Learning data collection methods.

                                </p>
                                <p style="color: black">
                                    Introduction to data handling

                                    <br>● Building a database.

                                    <br>● Reading and writing data.

                                    <br>● Understanding dataset curation.

                                </p>
                                <p style="color: black">
                                    Introduction to programming

                                    <br>● Introduction to R stats for science.

                                    <br>● Introduction to Python for science.

                                    <br>● Introduction to GIS for science.

                                </p>
                                <p style="color: black">
                                    ● Research mini-project + assignments

                                    <br>● Online class exercises.

                                    <br>● Research mini-project on a topic chosen.

                                </p>',
                'learning_outcome' => '<p style="color: black">
                                ● Understanding research.

                                <br>● Hypothesis formation.

                                <br>● Basic programming skills.

                                <br>● Data science skills and

                                <br>● Scientific writing.

                            </p>',
                'opportunities' => '<p style="color: black">
                                    <p style="color: black">
                                    ● Academic research e.g. Research MSc and PhD.
                                    <br>● Data science jobs across industries including academic and research institutes.

                                    <br>● Government research jobs.

                                    <br>● Consultancy jobs.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice data analysis and programming in areas of special interest.

                                    <br>● Improve skills while enjoying free time with leisure activities.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.

                                </p>',
            ],
            [
                'course_name' => 'Business English',
                'slug' => Str::slug('Business English', '-'),
                'category_id' => $languages_and_culture->id,
                'course_for'  => 'For Beginners/Intermediate Learners',
                'course_image'  => 'assets/images/b eng 1.jpg',
                'overview' => '<p style="color: black">
                                This course is aimed at students who want to excel in the English-speaking work
                                environment. You will learn how to speak and write professional English, with a
                                task-based approach guaranteed to increase your confidence in real world
                                work-related situations. The syllabus has been specifically designed to help you
                                to get the practical skills you will need to become a workplace communication
                                expert.
                            </p>
                            <p style="color: black">
                                Our senior lecturers are highly qualified and trained, and depending on your
                                needs you can choose between taking either: intensive over two weeks,
                                standard over four weeks or weekend over ten weeks.
                            </p>
                            <p style="color: black">
                                We provide our students with dynamic activities, expert guidance and
                                continuous feedback meaning you will increase your fluency from day one and
                                make quick and steady progress.
                            </p>
                            <p style="color: black">
                                Take our course from anywhere in the world. With virtual
                                learning options as well as online classes are available, our
                                course can work to your schedule.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for under- and post-graduate students, as well as scientific and technical professionals (NFQ levels 5) and                                   delivered Virtual Classroom environments.
                                Students will have the option to join a
                                class based on their own ability
                                (intermediate or advanced).
                            </p>
                            <p style="color: black">
                                You will also be able to choose the
                                format in which you learn as the course
                                is delivered both Online as well as virtually (live
                                stream interactive online classes).
                            </p>
                            <p style="color: black">
                                Course materials will be given to provide
                                students with further study options.
                                These will be found online (Virtuline Hub)
                                or will be given as hard copies (charges
                                may apply).
                            </p>
                            <p style="color: black">
                                The lessons will include practical
                                exercises and assessments. Students
                                will have different types of lesson plans
                                to choose from including: intensive (over
                                two weeks), standard (over four weeks),
                                or weekend (over ten weeks).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course Duration: 60 hours.</li>
                                <li style="font-size: 12px; color: black;">
                                    <p style="font-size: 12px; color: black;">
                                        This can be taken as a:

                                        <br>● Standard Course (over 4 weeks)

                                        <br>● Intensive Course (over 2 weeks)

                                        <br>● Weekend Course (over 10 weeks)
                                    </p>.
                                </li>
                                <li style="font-size: 12px; color: black;">● Entry Level: Beginners.
                                </li>
                                <li style="font-size: 12px; color: black;">● Lesson Duration: 3 hours per lecture.</li>


                                <li style="font-size: 12px; color: black;">● Size of the class: up to 21 students at a live
                                    stream interactive online class (Virtual).

                                </li>
                                <li style="font-size: 12px; color: black;">
                                    <p style="font-size: 12px; color: black;">
                                        Course Timetable:

                                        <br>● Standard Course: Monday to Friday, morning or evening

                                        <br>● Intensive Course: Monday to Friday, morning and afternoon

                                        <br>● Weekend Course: Weekend mornings
                                    </p>.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<p style="color: black">
                                Self-introductions, describing your role and responsibilities

                                <br>●  Meetings: Chairing, setting the agenda, controlling the conversation.

                                <br>● Participating in discussions: turn-taking, listening, and taking notes.

                                <br>● Being diplomatic, agreeing and disagreeing.

                                <br>●  Reading and writing reports and proposals,

                                <br>● Business correspondence: emails, register, style, standard phrasing.

                                <br>● Business-specific vocabulary and conventions.

                                <br>●  Telephoning: Checking and clarifying information.

                                <br>● Giving presentations: introducing a topic, sequencing ideas and concluding.

                                <br>● Describing processes and stages.

                                <br>● Negotiating language and persuading.

                                <br>● Social English: networking and small talk.
                            </p>',
                'learning_outcome' => '<p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
                                communicate in the English-speaking workplace. You will learn: reading,
                                listening, speech and writing skills.</p>
                            <p style="color: black">
                            </p><h4 style="color: black">Reading: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand a variety of contemporary everyday business
                                    topics.</li>
                                <li style="font-size: 14px; ">● Read and condense large pieces of information, such as
                                    business reports.</li>
                                <li style="font-size: 14px; ">● Comprehend large pieces of information in a short amount of
                                    time, such as
                                    presentations.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Listening: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand professional language.</li>
                                <li style="font-size: 14px; ">● Follow fast-paced conversations.</li>
                                <li style="font-size: 14px; ">● Comprehend specific pieces of information.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Speaking: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Use professional language e.g. giving presentations, great
                                    interviews and
                                    negotiating.</li>
                                <li style="font-size: 14px; ">● Demonstrate knowledge of business vocabulary.</li>
                                <li style="font-size: 14px; ">● Appropriately use of formal and informal language.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Writing: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Write in a professional manner.</li>
                                <li style="font-size: 14px; ">● Write in a different tone depending on the intended
                                    audience.</li>
                                <li style="font-size: 14px; ">● Write using coherent viewpoints with a beginning, middle and
                                    end.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h5 style="color: black; font-size: 16px;">Students will get the opportunity to improve their overall grammar,
                                pronunciation and vocabulary as this course also provides lessons in these
                                areas:</h5>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Grammar: Students will learn how to properly structure
                                    sentences.</li>
                                <li style="font-size: 14px; ">● Pronunciation: Students will be provided with helpful hints
                                    and tips to help
                                    them sound more natural.</li>
                                <li style="font-size: 14px; ">● Vocabulary: Students will broaden their vocabulary range
                                    with lessons
                                    focused on: lexical sets, collocations and functional phrases commonly
                                    used in business settings.</li>
                            </ul>
                            <p></p>',
                'opportunities' => '<p style="color: black">
                                    ● Understanding and speaking English can empower students and help them achieve their
                                    professional and personal goals.

                                    <br>● Pursuing new career opportunities worldwide and improving job prospects.

                                    <br>● Increasing chances of professional success and career advancement.

                                    <br>● communicating with professionals from all over the world and succeeding in
                                    networking.

                                    <br>● Enrolling in course in your specialisation to improve both your English and your
                                    industry
                                    know-how.

                                    <br>● gaining access to resources online available only in English.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                ● With our general business practice scenarios, students will have the opportunity to
                                practice what they have learnt, helping them to increase their fluency from day one.

                                <br>● Exposure to correct and authentic pronunciation will allow students to pick up a
                                more
                                natural way of speaking.

                                <br>● Students will have access to all course materials online for further study.

                                <br>● With access to support and feedback from our senior lecturers, students are
                                guaranteed
                                to make quick and steady progress.

                            </p>',
            ],
            [
                'course_name' => 'Business English',
                'slug' => Str::slug('Business English 2', '-'),
                'category_id' => $languages_and_culture->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/b eng 2.jpg',
                'overview' => '<p style="color: black">
                                This course is aimed at students who want to excel in the English-speaking work
                                environment. You will learn how to speak and write professional English, with a
                                task-based approach guaranteed to increase your confidence in real world
                                work-related situations. The syllabus has been specifically designed to help you
                                to get the practical skills you will need to become a workplace communication
                                expert.
                            </p>
                            <p style="color: black">
                                Our senior lecturers are highly qualified and trained, and depending on your
                                needs you can choose between taking either: intensive over two weeks,
                                standard over four weeks or weekend over ten weeks.
                            </p>
                            <p style="color: black">
                                We provide our students with dynamic activities, expert guidance and
                                continuous feedback meaning you will increase your fluency from day one and
                                make quick and steady progress.
                            </p>
                            <p style="color: black">
                                Take our course from anywhere in the world. With virtual
                                learning options as well as online classes are available, our
                                course can work to your schedule.
                            </p>',
                'course_format' => '<p style="color: black">
                                This course is designed for under- and post-graduate students, as well as scientific and technical professionals (NFQ levels 6) and                                   delivered Virtual Classroom environments.
                                Students will have the option to join a
                                class based on their own ability
                                (intermediate or advanced).
                            </p>
                            <p style="color: black">
                                You will also be able to choose the
                                format in which you learn as the course
                                is delivered both Online as well as virtually (live
                                stream interactive online classes).
                            </p>
                            <p style="color: black">
                                Course materials will be given to provide
                                students with further study options.
                                These will be found online (Virtuline Hub)
                                or will be given as hard copies (charges
                                may apply).
                            </p>
                            <p style="color: black">
                                The lessons will include practical
                                exercises and assessments. Students
                                will have different types of lesson plans
                                to choose from including: intensive (over
                                two weeks), standard (over four weeks),
                                or weekend (over ten weeks).
                            </p>',
                'key_facts' => '<ul>
                                <li style="font-size: 12px; color: black;">● Course Duration: 60 hours.</li>
                                <li style="font-size: 12px; color: black;">
                                    <p style="font-size: 12px; color: black;">
                                        This can be taken as a:

                                        <br>● Standard Course (over 4 weeks)

                                        <br>● Intensive Course (over 2 weeks)

                                        <br>● Weekend Course (over 10 weeks)
                                    </p>.
                                </li>
                                <li style="font-size: 12px; color: black;">● Entry Level: Intermediate or Advanced Speakers(NFQ level 5 completed students).
                                </li>
                                <li style="font-size: 12px; color: black;">● Lesson Duration: 3 hours per lecture.</li>


                                <li style="font-size: 12px; color: black;">● Size of the class: up to 21 students at a live
                                    stream interactive online class (Virtual).

                                </li>
                                <li style="font-size: 12px; color: black;">
                                    <p style="font-size: 12px; color: black;">
                                        Course Timetable:

                                        <br>● Standard Course: Monday to Friday, morning or evening

                                        <br>● Intensive Course: Monday to Friday, morning and afternoon

                                        <br>● Weekend Course: Weekend mornings
                                    </p>.
                                </li>
                            </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<p style="color: black">
                                Self-introductions, describing your role and responsibilities

                                <br>●  Meetings: Chairing, setting the agenda, controlling the conversation.

                                <br>● Participating in discussions: turn-taking, listening, and taking notes.

                                <br>● Being diplomatic, agreeing and disagreeing.

                                <br>●  Reading and writing reports and proposals,

                                <br>● Business correspondence: emails, register, style, standard phrasing.

                                <br>● Business-specific vocabulary and conventions.

                                <br>●  Telephoning: Checking and clarifying information.

                                <br>● Giving presentations: introducing a topic, sequencing ideas and concluding.

                                <br>● Describing processes and stages.

                                <br>● Negotiating language and persuading.

                                <br>● Social English: networking and small talk.
                            </p>',
                'learning_outcome' => '<p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
                                communicate in the English-speaking workplace. You will learn: reading,
                                listening, speech and writing skills.</p>
                            <p style="color: black">
                            </p><h4 style="color: black">Reading: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand a variety of contemporary everyday business
                                    topics.</li>
                                <li style="font-size: 14px; ">● Read and condense large pieces of information, such as
                                    business reports.</li>
                                <li style="font-size: 14px; ">● Comprehend large pieces of information in a short amount of
                                    time, such as
                                    presentations.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Listening: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand professional language.</li>
                                <li style="font-size: 14px; ">● Follow fast-paced conversations.</li>
                                <li style="font-size: 14px; ">● Comprehend specific pieces of information.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Speaking: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Use professional language e.g. giving presentations, great
                                    interviews and
                                    negotiating.</li>
                                <li style="font-size: 14px; ">● Demonstrate knowledge of business vocabulary.</li>
                                <li style="font-size: 14px; ">● Appropriately use of formal and informal language.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Writing: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Write in a professional manner.</li>
                                <li style="font-size: 14px; ">● Write in a different tone depending on the intended
                                    audience.</li>
                                <li style="font-size: 14px; ">● Write using coherent viewpoints with a beginning, middle and
                                    end.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h5 style="color: black; font-size:16px;">Students will get the opportunity to improve their overall grammar,
                                pronunciation and vocabulary as this course also provides lessons in these
                                areas:</h5>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Grammar: Students will learn how to properly structure
                                    sentences.</li>
                                <li style="font-size: 14px; ">● Pronunciation: Students will be provided with helpful hints
                                    and tips to help
                                    them sound more natural.</li>
                                <li style="font-size: 14px; ">● Vocabulary: Students will broaden their vocabulary range
                                    with lessons
                                    focused on: lexical sets, collocations and functional phrases commonly
                                    used in business settings.</li>
                            </ul>
                            <p></p>',
                'opportunities' => '<p style="color: black">
                                    ● Understanding and speaking English can empower students and help them achieve their
                                    professional and personal goals.

                                    <br>● Pursuing new career opportunities worldwide and improving job prospects.

                                    <br>● Increasing chances of professional success and career advancement.

                                    <br>● communicating with professionals from all over the world and succeeding in
                                    networking.

                                    <br>● Enrolling in course in your specialisation to improve both your English and your
                                    industry
                                    know-how.

                                    <br>● gaining access to resources online available only in English.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                ● With our general business practice scenarios, students will have the opportunity to
                                practice what they have learnt, helping them to increase their fluency from day one.

                                <br>● Exposure to correct and authentic pronunciation will allow students to pick up a
                                more
                                natural way of speaking.

                                <br>● Students will have access to all course materials online for further study.

                                <br>● With access to support and feedback from our senior lecturers, students are
                                guaranteed
                                to make quick and steady progress.

                            </p>',
            ],
            [
                'course_name' => 'General English',
                'slug' => Str::slug('General English', '-'),
                'category_id' => $languages_and_culture->id,
                'course_for'  => 'For Beginners',
                'course_image'  => 'assets/images/geng 1.jpg',
                'overview' => '<p style="color: black">
                                The General English course has been specifically designed to help you hone
                                and develop your English speaking skills needed for everyday life. The General
                                English course also gets you qualified, providing you with a qualification in a
                                level 4 NFQ Ireland equivalent, depending upon your ability. With
                                dynamic activities, expert guidance, and continuous feedback, our students are
                                guaranteed to make quick and steady progress. Our senior lectures are highly
                                qualified and trained, and can teach students at any level, so no matter if you
                                are a beginner, novice or advanced speaker this is the course for you. Take our
                                course from the classroom or anywhere (Virtual) in the world. With virtual
                                learning options as well as both morning and evening classes available, our
                                course can work to your schedule.
                            </p>
                            <p style="color: black">
                                Our classes prioritise a hands-on approach which allows you to practice and
                                improve your fluency from day one. We focus on the practical side with a taskbased
                                approach to learning. This allows you to learn up to date topics that will
                                apply to any real-life situation. If you want a practical English course that will:
                                give you a qualification, prepare you for the real world, and give you the ability to
                                speak both confidently and fluently, apply today and don’t delay.
                            </p>',
                'course_format' => '<p style="color: black">
                                Students will have the option to join a
                                class based on their own ability
                                (intermediate or advanced).
                            </p>
                            <p style="color: black">
                                You will also be able to choose the
                                format in which you learn as the course
                                is delivered as virtually (live
                                stream interactive online classes).
                            </p>
                            <p style="color: black">
                                Course materials will be given to provide
                                students with further study options.
                                These will be found online (Virtuline Hub)
                                or will be given as hard copies (charges
                                may apply).
                            </p>
                            <p style="color: black">
                                The lessons will include practical
                                exercises and assessments. Students
                                will have different types of lesson plans
                                to choose from including: intensive (over
                                two weeks), standard (over four weeks).
                            </p>',
                'key_facts' => '<ul>
                                    <li style="font-size: 12px; color: black;">● Course duration: 60 hours (Standard: 4
                                        weeks;
                                        Intensive: 2 weeks; and weekend: 10 weeks).</li>
                                    <li style="font-size: 12px; color: black;">● Entry Level: Beginner.</li>
                                    <li style="font-size: 12px; color: black;">● Lesson Duration: 3 hours per lecture.</li>
                                    <li style="font-size: 12px; color: black;">● Size of the class: up to 21 students at a
                                        live
                                        stream interactive online class (Virtual).</li>
                                    <li style="font-size: 12px; color: black;">
                                        <p style="font-size: 12px; color: black;">25 in a Virtual Classroom
                                            Course Timetable:

                                            <br>● Standard Course: Monday to Friday morning, afternoon, or evening,

                                            <br>● Intensive Course: : Monday to Friday morning and afternoon

                                            <br>● Weekend Course: Weekend morning
                                        </p>.
                                    </li>
                                </ul>',
                'module_label' => 'MODULES (Part 1)',
                'module_description' => '<p style="color: black">
                                </p><h4>Beginner level (Basic user)</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● understanding language input related to familiar
                                        subjects.</li>
                                    <li style="font-size: 14px; ">● employing frequently used and everyday expressions.</li>
                                    <li style="font-size: 14px; ">● communicating in tasks requiring a direct exchange of
                                        information on familiar matters.</li>
                                    <li style="font-size: 14px; ">● describing in simple terms aspects of their background,
                                        immediate environment and matters in areas of immediate need.</li>

                                </ul>
                                <p></p>',
                'learning_outcome' => '<p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
                                communicate in the English-speaking workplace. You will learn: reading,
                                listening, speech and writing skills.</p>
                            <p style="color: black">
                            </p><h4 style="color: black">Reading: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand a variety of contemporary topics.</li>
                                <li style="font-size: 14px; ">● Read and condense large pieces of informations.</li>
                                <li style="font-size: 14px; ">● Comprehend large pieces of information in a short amount of
                                    time.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Listening: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand discussions on various topics and identify
                                    different speakers’ viewpoints.</li>
                                <li style="font-size: 14px; ">● Follow fast-paced conversations.</li>
                                <li style="font-size: 14px; ">● Comprehend specific pieces of information.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Speaking: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Present ideas and opinions on a variety of various topics.
                                </li>
                                <li style="font-size: 14px; ">● Engage in conversation and take an active part in
                                    discussions on various topics.</li>
                                <li style="font-size: 14px; ">● Articulate ideas and opinions in a coherent manner.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Writing: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Write detailed descriptions on various topics.</li>
                                <li style="font-size: 14px; ">● Write in a different tone depending on the intended
                                    audience.</li>
                                <li style="font-size: 14px; ">● Write using coherent viewpoints with a beginning, middle and
                                    end.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h5 style="color: black; font-size: 16px;">Students will get the opportunity to improve their overall grammar,
                                pronunciation and vocabulary as this course also provides lessons in these areas:</h5>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Grammar: Students will learn how to properly structure
                                    sentences.</li>
                                <li style="font-size: 14px; ">● Pronunciation: Students will be provided with helpful hints
                                    and tips to help
                                    them sound more natural.</li>
                                <li style="font-size: 14px; ">● Vocabulary: Students will broaden their vocabulary range
                                    with lessons
                                    focused on: lexical sets, collocations and functional phrases commonly
                                    used in everyday scenarios.</li>
                            </ul>
                            <p></p>',
                'opportunities' => '<p style="color: black">
                                    Understanding and speaking English can empower students and help
                                    them achieve their professional and personal goals, such as:

                                    <br>● pursuing new career opportunities worldwide.

                                    <br>● increasing chances of professional success and improving job prospects.

                                    <br>● communicating with people from all over the world and exploring their cultures.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice language in areas of special interest.

                                    <br>● Improve language skills while enjoying free time with leisure activities.

                                    <br>● Exposure to authentic language input.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.


                                </p>',
            ],
            [
                'course_name' => 'General English',
                'slug' => Str::slug('General English 2', '-'),
                'category_id' => $languages_and_culture->id,
                'course_for'  => 'For Intermediate Learners',
                'course_image'  => 'assets/images/geng 2.jpg',
                'overview' => '<p style="color: black">
                                The General English course has been specifically designed to help you hone
                                and develop your English speaking skills needed for everyday life. The General
                                English course also gets you qualified, providing you with a qualification in a
                                level 5 NFQ Ireland equivalent, depending upon your ability. With
                                dynamic activities, expert guidance, and continuous feedback, our students are
                                guaranteed to make quick and steady progress. Our senior lectures are highly
                                qualified and trained, and can teach students at any level, so no matter if you
                                are a beginner, novice or advanced speaker this is the course for you. Take our
                                course from the classroom or anywhere (Virtual) in the world. With virtual
                                learning options as well as both morning and evening classes available, our
                                course can work to your schedule.
                            </p>
                            <p style="color: black">
                                Our classes prioritise a hands-on approach which allows you to practice and
                                improve your fluency from day one. We focus on the practical side with a taskbased
                                approach to learning. This allows you to learn up to date topics that will
                                apply to any real-life situation. If you want a practical English course that will:
                                give you a qualification, prepare you for the real world, and give you the ability to
                                speak both confidently and fluently, apply today and don’t delay.
                            </p>',
                'course_format' => '<p style="color: black">
                                Students will have the option to join a
                                class based on their own ability
                                (intermediate or advanced).
                            </p>
                            <p style="color: black">
                                You will also be able to choose the
                                format in which you learn as the course
                                is delivered as virtually (live
                                stream interactive online classes).
                            </p>
                            <p style="color: black">
                                Course materials will be given to provide
                                students with further study options.
                                These will be found online (Virtuline Hub)
                                or will be given as hard copies (charges
                                may apply).
                            </p>
                            <p style="color: black">
                                The lessons will include practical
                                exercises and assessments. Students
                                will have different types of lesson plans
                                to choose from including: intensive (over
                                two weeks), standard (over four weeks).
                            </p>',
                'key_facts' => '<ul>
                                    <li style="font-size: 12px; color: black;">● Course duration: 60 hours (Standard: 4
                                        weeks;
                                        Intensive: 2 weeks; and weekend: 10 weeks).</li>
                                    <li style="font-size: 12px; color: black;">● Entry Level: NFQ Level 4 completed students.</li>
                                    <li style="font-size: 12px; color: black;">● Lesson Duration: 3 hours per lecture.</li>
                                    <li style="font-size: 12px; color: black;">● Size of the class: up to 21 students at a
                                        live
                                        stream interactive online class (Virtual).</li>
                                    <li style="font-size: 12px; color: black;">
                                        <p style="font-size: 12px; color: black;">25 in a Virtual Classroom
                                            Course Timetable:

                                            <br>● Standard Course: Monday to Friday morning, afternoon, or evening,

                                            <br>● Intensive Course: : Monday to Friday morning and afternoon

                                            <br>● Weekend Course: Weekend morning
                                        </p>.
                                    </li>
                                </ul>',
                'module_label' => 'MODULES (Part 2)',
                'module_description' => '<p style="color: black">
                                </p><h4>Intermediate level (Independent user)</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● understanding the main points of clear standard input on
                                        concrete and abstract topics.</li>
                                    <li style="font-size: 14px; ">● producing connected text on topics which are familiar or
                                        of personal interest.</li>
                                    <li style="font-size: 14px; ">● communicating with a degree of fluency and spontaneity.
                                    </li>
                                    <li style="font-size: 14px; ">● nteracting without putting strain on the listener.</li>

                                </ul>
                                <p></p>',
                'learning_outcome' => '<p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
                                communicate in the English-speaking workplace. You will learn: reading,
                                listening, speech and writing skills.</p>
                            <p style="color: black">
                            </p><h4 style="color: black">Reading: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand a variety of contemporary topics.</li>
                                <li style="font-size: 14px; ">● Read and condense large pieces of informations.</li>
                                <li style="font-size: 14px; ">● Comprehend large pieces of information in a short amount of
                                    time.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Listening: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand discussions on various topics and identify
                                    different speakers’ viewpoints.</li>
                                <li style="font-size: 14px; ">● Follow fast-paced conversations.</li>
                                <li style="font-size: 14px; ">● Comprehend specific pieces of information.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Speaking: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Present ideas and opinions on a variety of various topics.
                                </li>
                                <li style="font-size: 14px; ">● Engage in conversation and take an active part in
                                    discussions on various topics.</li>
                                <li style="font-size: 14px; ">● Articulate ideas and opinions in a coherent manner.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Writing: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Write detailed descriptions on various topics.</li>
                                <li style="font-size: 14px; ">● Write in a different tone depending on the intended
                                    audience.</li>
                                <li style="font-size: 14px; ">● Write using coherent viewpoints with a beginning, middle and
                                    end.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h5 style="color: black; font-size:16px;">Students will get the opportunity to improve their overall grammar,
                                pronunciation and vocabulary as this course also provides lessons in these areas:</h5>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Grammar: Students will learn how to properly structure
                                    sentences.</li>
                                <li style="font-size: 14px; ">● Pronunciation: Students will be provided with helpful hints
                                    and tips to help
                                    them sound more natural.</li>
                                <li style="font-size: 14px; ">● Vocabulary: Students will broaden their vocabulary range
                                    with lessons
                                    focused on: lexical sets, collocations and functional phrases commonly
                                    used in everyday scenarios.</li>
                            </ul>
                            <p></p>',
                'opportunities' => '<p style="color: black">
                                    Understanding and speaking English can empower students and help
                                    them achieve their professional and personal goals, such as:

                                    <br>● pursuing new career opportunities worldwide.

                                    <br>● increasing chances of professional success and improving job prospects.

                                    <br>● communicating with people from all over the world and exploring their cultures.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice language in areas of special interest.

                                    <br>● Improve language skills while enjoying free time with leisure activities.

                                    <br>● Exposure to authentic language input.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.


                                </p>',
            ],
            [
                'course_name' => 'General English',
                'slug' => Str::slug('General English 3', '-'),
                'category_id' => $languages_and_culture->id,
                'course_for'  => 'For Advanced Learners',
                'course_image'  => 'assets/images/geng 3.jpg',
                'overview' => '<p style="color: black">
                                The General English course has been specifically designed to help you hone
                                and develop your English speaking skills needed for everyday life. The General
                                English course also gets you qualified, providing you with a qualification in a
                                level 6 NFQ Ireland equivalent, depending upon your ability. With
                                dynamic activities, expert guidance, and continuous feedback, our students are
                                guaranteed to make quick and steady progress. Our senior lectures are highly
                                qualified and trained, and can teach students at any level, so no matter if you
                                are a beginner, novice or advanced speaker this is the course for you. Take our
                                course from the classroom or anywhere (Virtual) in the world. With virtual
                                learning options as well as both morning and evening classes available, our
                                course can work to your schedule.
                            </p>
                            <p style="color: black">
                                Our classes prioritise a hands-on approach which allows you to practice and
                                improve your fluency from day one. We focus on the practical side with a taskbased
                                approach to learning. This allows you to learn up to date topics that will
                                apply to any real-life situation. If you want a practical English course that will:
                                give you a qualification, prepare you for the real world, and give you the ability to
                                speak both confidently and fluently, apply today and don’t delay.
                            </p>',
                'course_format' => '<p style="color: black">
                                Students will have the option to join a
                                class based on their own ability
                                (intermediate or advanced).
                            </p>
                            <p style="color: black">
                                You will also be able to choose the
                                format in which you learn as the course
                                is delivered as virtually (live
                                stream interactive online classes).
                            </p>
                            <p style="color: black">
                                Course materials will be given to provide
                                students with further study options.
                                These will be found online (Virtuline Hub)
                                or will be given as hard copies (charges
                                may apply).
                            </p>
                            <p style="color: black">
                                The lessons will include practical
                                exercises and assessments. Students
                                will have different types of lesson plans
                                to choose from including: intensive (over
                                two weeks), standard (over four weeks).
                            </p>',
                'key_facts' => '<ul>
                                    <li style="font-size: 12px; color: black;">● Course duration: 60 hours (Standard: 4
                                        weeks;
                                        Intensive: 2 weeks; and weekend: 10 weeks).</li>
                                    <li style="font-size: 12px; color: black;">● Entry Level: NFQ Level 5 completed students.</li>
                                    <li style="font-size: 12px; color: black;">● Lesson Duration: 3 hours per lecture.</li>
                                    <li style="font-size: 12px; color: black;">● Size of the class: up to 21 students at a
                                        live
                                        stream interactive online class (Virtual).</li>
                                    <li style="font-size: 12px; color: black;">
                                        <p style="font-size: 12px; color: black;">25 in a Virtual Classroom
                                            Course Timetable:

                                            <br>● Standard Course: Monday to Friday morning, afternoon, or evening,

                                            <br>● Intensive Course: : Monday to Friday morning and afternoon

                                            <br>● Weekend Course: Weekend morning
                                        </p>.
                                    </li>
                                </ul>',
                'module_label' => 'MODULES (Part 3)',
                'module_description' => '<p style="color: black">
                                </p><h4>Intermediate level (Independent user)</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● understanding the main points of clear standard input on
                                        concrete and abstract topics.</li>
                                    <li style="font-size: 14px; ">● producing connected text on topics which are familiar or
                                        of personal interest.</li>
                                    <li style="font-size: 14px; ">● communicating with a degree of fluency and spontaneity.
                                    </li>
                                    <li style="font-size: 14px; ">● nteracting without putting strain on the listener.</li>

                                </ul>
                                <p></p>',
                'learning_outcome' => '<p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
                                communicate in the English-speaking workplace. You will learn: reading,
                                listening, speech and writing skills.</p>
                            <p style="color: black">
                            </p><h4 style="color: black">Reading: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand a variety of contemporary topics.</li>
                                <li style="font-size: 14px; ">● Read and condense large pieces of informations.</li>
                                <li style="font-size: 14px; ">● Comprehend large pieces of information in a short amount of
                                    time.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Listening: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Understand discussions on various topics and identify
                                    different speakers’ viewpoints.</li>
                                <li style="font-size: 14px; ">● Follow fast-paced conversations.</li>
                                <li style="font-size: 14px; ">● Comprehend specific pieces of information.</li>

                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Speaking: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Present ideas and opinions on a variety of various topics.
                                </li>
                                <li style="font-size: 14px; ">● Engage in conversation and take an active part in
                                    discussions on various topics.</li>
                                <li style="font-size: 14px; ">● Articulate ideas and opinions in a coherent manner.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h4 style="color: black">Writing: Students will learn to</h4>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Write detailed descriptions on various topics.</li>
                                <li style="font-size: 14px; ">● Write in a different tone depending on the intended
                                    audience.</li>
                                <li style="font-size: 14px; ">● Write using coherent viewpoints with a beginning, middle and
                                    end.</li>
                            </ul>
                            <p></p>
                            <p style="color: black">
                            </p><h5 style="color: black; font-size:16px;">Students will get the opportunity to improve their overall grammar,
                                pronunciation and vocabulary as this course also provides lessons in these areas:</h5>
                            <ul style="color: black">
                                <li style="font-size: 14px; ">● Grammar: Students will learn how to properly structure
                                    sentences.</li>
                                <li style="font-size: 14px; ">● Pronunciation: Students will be provided with helpful hints
                                    and tips to help
                                    them sound more natural.</li>
                                <li style="font-size: 14px; ">● Vocabulary: Students will broaden their vocabulary range
                                    with lessons
                                    focused on: lexical sets, collocations and functional phrases commonly
                                    used in everyday scenarios.</li>
                            </ul>
                            <p></p>',
                'opportunities' => '<p style="color: black">
                                    Understanding and speaking English can empower students and help
                                    them achieve their professional and personal goals, such as:

                                    <br>● pursuing new career opportunities worldwide.

                                    <br>● increasing chances of professional success and improving job prospects.

                                    <br>● communicating with people from all over the world and exploring their cultures.

                                </p>',
                'additional_facilities' => '<p style="color: black">
                                    ● Opportunity to practice language in areas of special interest.

                                    <br>● Improve language skills while enjoying free time with leisure activities.

                                    <br>● Exposure to authentic language input.

                                    <br>● Access to material posted on our school online platform.

                                    <br>● Support and feedback from qualified teachers.


                                </p>',
            ],
        ];

        $output = Course::insert($courses);

        return $output;
    }
}
