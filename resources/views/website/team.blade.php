@extends('layouts.app')

@section('title', 'Our Team - Esra Academy')
@section('meta_description', 'Meet our dedicated team of qualified teachers specializing in Quran, Arabic, and Islamic studies')
@section('meta_keywords', 'Quran teachers, Arabic teachers, Islamic studies, qualified instructors')

@section('content')
<section class="team-header section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">Our Team</h1>
                <p class="lead">Meet our dedicated team of qualified teachers</p>
            </div>
        </div>
    </div>
</section>

<section class="team-members section">
    <div class="container">
        <div class="team-scroll-container">
            <div class="row flex-nowrap">
                <!-- Sister Esraa -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem1.jpeg') }}" class="card-img-top" alt="Sister Esraa">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Esraa</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#esraaModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Brother Ahmed -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_m1.jpeg') }}" class="card-img-top" alt="Brother Ahmed">
                        <div class="card-body text-center">
                            <h5 class="card-title">Brother Ahmed</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ahmedModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Ms. Norhan Eid -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem2.jpeg') }}" class="card-img-top" alt="Ms. Norhan Eid">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ms. Norhan Eid</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#norhanModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Brother Muhammad -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_m2.jpeg') }}" class="card-img-top" alt="Brother Muhammad">
                        <div class="card-body text-center">
                            <h5 class="card-title">Brother Muhammad</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#muhammadModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Sister Khadijah -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem3.jpeg') }}" class="card-img-top" alt="Sister Khadijah">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Khadijah</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#khadijahModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Brother Yusuf -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_m3.jpeg') }}" class="card-img-top" alt="Brother Yusuf">
                        <div class="card-body text-center">
                            <h5 class="card-title">Brother Yusuf</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#yusufModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Sister Noor -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem4.jpeg') }}" class="card-img-top" alt="Sister Noor">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Noor</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noorModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Brother Zayd -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_m4.jpeg') }}" class="card-img-top" alt="Brother Zayd">
                        <div class="card-body text-center">
                            <h5 class="card-title">Brother Zayd</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#zaydModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Sister Zahra -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem5.jpeg') }}" class="card-img-top" alt="Sister Zahra">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Zahra</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#zahraModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Sister Asmaa -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem1.jpeg') }}" class="card-img-top" alt="Sister Asmaa">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Asmaa</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#asmaaModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Sister Sameha -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem2.jpeg') }}" class="card-img-top" alt="Sister Sameha">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Sameha</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#samehaModal">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Sister Aya -->
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('tet_fem3.jpeg') }}" class="card-img-top" alt="Sister Aya">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sister Aya</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ayaModal">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->
<!-- Sister Esraa Modal -->
<div class="modal fade" id="esraaModal" tabindex="-1" aria-labelledby="esraaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="esraaModalLabel">Sister Esraa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem1.jpeg') }}" class="img-fluid rounded" alt="Sister Esraa">
                    </div>
                    <div class="col-md-8">
                        <p>Sister Esraa is a dedicated tutor specializing in Quran, Arabic, and Islamic studies. She holds an Ijazah in Hafs 'an Asim for Quranic recitation, demonstrating a high level of mastery. She earned her Bachelor's degree in Languages and Simultaneous Interpretation from Al-Azhar University. With over 4 years of experience, she has successfully taught a vast number of students from diverse backgrounds across the globe.</p>
                        <p>She delivers comprehensive instruction in Fiqh, Hadith, Tafsir, and Aqeedah.</p>
                        <p>Her teaching methodology is known for being engaging and enjoyable, particularly resonating with children, fostering a love for learning in a fun and interactive environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brother Ahmed Modal -->
<div class="modal fade" id="ahmedModal" tabindex="-1" aria-labelledby="ahmedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ahmedModalLabel">Brother Ahmed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_m1.jpeg') }}" class="img-fluid rounded" alt="Brother Ahmed">
                    </div>
                    <div class="col-md-8">
                        <p>Brother Ahmed focuses on Islamic Creed (Aqeedah), Fiqh, Tafseer and Hadith. He holds an Ijazah in Hafs 'an Asim, affirming his high mastery of Quranic recitation. A graduate of Al-Azhar University's Faculty of Languages and Simultaneous Interpretation, he effectively teaches a vast number of students globally. With over 3 years of experience.</p>
                        <p>Brother Ahmed's dynamic approach makes learning complex subjects like Fiqh, Hadith, Tafsir, and Aqeedah clear and captivating for all ages.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ms. Norhan Eid Modal -->
<div class="modal fade" id="norhanModal" tabindex="-1" aria-labelledby="norhanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="norhanModalLabel">Ms. Norhan Eid</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem2.jpeg') }}" class="img-fluid rounded" alt="Ms. Norhan Eid">
                    </div>
                    <div class="col-md-8">
                        <p>Ms. Norhan Eid is a dedicated teacher specializing in Qur'an, Tajweed, Islamic Studies, Arabic language, and reading skills. She holds a Bachelor's degree from the Faculty of Education – Department of Biology and Geology. With over four years of teaching experience, she has taught and guided numerous students across various levels in both Islamic and linguistic disciplines.</p>
                        <p>Known for her balanced and nurturing teaching style, she strives to instill authentic Islamic values while enhancing her students' language and reading abilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brother Muhammad Modal -->
<div class="modal fade" id="muhammadModal" tabindex="-1" aria-labelledby="muhammadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="muhammadModalLabel">Brother Muhammad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_m2.jpeg') }}" class="img-fluid rounded" alt="Brother Muhammad">
                    </div>
                    <div class="col-md-8">
                        <p>Brother Muhammad is a highly experienced educator specializing in Quranic recitation and Tajweed. He holds a Bachelor's degree in Engineering from Al-Azhar University, complementing his profound Islamic knowledge. He possesses an Ijazah in Hafs 'an Asim, reflecting his mastery of Quranic expertise.</p>
                        <p>Over four years of impactful teaching, he has successfully guided hundreds of students worldwide, helping them perfect their Quranic reading. Brother Muhammad is renowned for his excellent teaching style, making the intricacies of Tajweed accessible and engaging for all learners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sister Khadijah Modal -->
<div class="modal fade" id="khadijahModal" tabindex="-1" aria-labelledby="khadijahModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="khadijahModalLabel">Sister Khadijah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem3.jpeg') }}" class="img-fluid rounded" alt="Sister Khadijah">
                    </div>
                    <div class="col-md-8">
                        <p>Sister Khadijah is a dedicated teacher of Fiqh and Islamic Jurisprudence. She holds a Bachelor's degree in Sharia from Al-Azhar University. With over 6 years of experience, she has guided a vast number of students worldwide, illuminating complex rulings with clarity.</p>
                        <p>Sister Khadijah's teaching is known for its insightful analysis and practical relevance, making Islamic knowledge accessible and applicable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brother Yusuf Modal -->
<div class="modal fade" id="yusufModal" tabindex="-1" aria-labelledby="yusufModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="yusufModalLabel">Brother Yusuf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_m3.jpeg') }}" class="img-fluid rounded" alt="Brother Yusuf">
                    </div>
                    <div class="col-md-8">
                        <p>Brother Yusuf is a distinguished educator specializing in Arabic Language and Conversational Skills. A graduate of the Faculty of Arabic Language at Al-Azhar University, he brings a deep understanding of linguistic. With over 5 years of experience, he's empowered countless students globally to achieve fluency.</p>
                        <p>Brother Yusuf's approach makes learning Arabic dynamic and interactive, ensuring practical application and confident communication.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sister Noor Modal -->
<div class="modal fade" id="noorModal" tabindex="-1" aria-labelledby="noorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="noorModalLabel">Sister Noor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem4.jpeg') }}" class="img-fluid rounded" alt="Sister Noor">
                    </div>
                    <div class="col-md-8">
                        <p>Sister Noor is a dynamic educator focusing on Children's Quran & Arabic, celebrated for her engaging and creative teaching methods. She holds a Bachelor's degree from the Faculty of Education at Cairo University, with a strong background in Islamic studies from Al-Azhar.</p>
                        <p>With over 5 years of experience, she has successfully introduced young learners globally to the joy of Quran and Arabic. Sister Noor's classes are known for being fun, interactive, and highly effective, building a strong, loving connection to Islam from an early age.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brother Zayd Modal -->
<div class="modal fade" id="zaydModal" tabindex="-1" aria-labelledby="zaydModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="zaydModalLabel">Brother Zayd</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_m4.jpeg') }}" class="img-fluid rounded" alt="Brother Zayd">
                    </div>
                    <div class="col-md-8">
                        <p>Brother Zayd specializes in Foundational Islamic Principles and Character Development. A graduate of the Faculty of Da'wah and Islamic Culture from Al-Azhar University, he combines academic rigor with a profound understanding of spiritual growth.</p>
                        <p>With over 4 years of experience, he has inspired countless students worldwide to embody Islamic values. Brother Zayd is particularly valued for his ability to connect with each student individually, fostering both intellectual understanding and practical application of Islamic ethics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sister Zahra Modal -->
<div class="modal fade" id="zahraModal" tabindex="-1" aria-labelledby="zahraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="zahraModalLabel">Sister Zahra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem5.jpeg') }}" class="img-fluid rounded" alt="Sister Zahra">
                    </div>
                    <div class="col-md-8">
                        <p>For parents seeking true conversational fluency in Arabic, Sister Zahra offers unparalleled expertise. A distinguished graduate of Al-Azhar's Faculty of Arabic Language, her specialization extends far beyond grammar to cultivating authentic, natural communication skills.</p>
                        <p>She leverages over 7 years of dynamic and engaging experience to create an immersive learning environment where children thrive. Sister Zahra's classes are not merely about vocabulary acquisition; they are designed to build confident, practical Arabic communication, empowering students to effortlessly engage with the language and its rich cultural heritage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sister Asmaa Modal -->
<div class="modal fade" id="asmaaModal" tabindex="-1" aria-labelledby="asmaaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="asmaaModalLabel">Sister Asmaa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem1.jpeg') }}" class="img-fluid rounded" alt="Sister Asmaa">
                    </div>
                    <div class="col-md-8">
                        <p>Sister Asmaa focuses on Quran, Arabic and Islamic studies. She earned her Bachelor's in language and translation from Al Azhar university. With 3 years of experience, she has educated more than 40 students on Islamic studies. She is a certified Hafiza.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sister Sameha Modal -->
<div class="modal fade" id="samehaModal" tabindex="-1" aria-labelledby="samehaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="samehaModalLabel">Sister Sameha</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem2.jpeg') }}" class="img-fluid rounded" alt="Sister Sameha">
                    </div>
                    <div class="col-md-8">
                        <p>Sister Sameha is 23 years old and from Egypt. She is studying at the faculty of general education, English department, Minya University. She has been working in this field since 2021 and has gained extensive experience in teaching Quran, Tajweed, Arabic and Islamic studies.</p>
                        <p>She is skilled at working with students of all ages and can teach Noor Albayan and Arabic conversation from Almadina book and "Alarabya bayna yadayk" book. She has taught many students from various countries including USA, India, England, Pakistan, Canada, Yemen, Somalia and Sudan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sister Aya Modal -->
<div class="modal fade" id="ayaModal" tabindex="-1" aria-labelledby="ayaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ayaModalLabel">Sister Aya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('tet_fem3.jpeg') }}" class="img-fluid rounded" alt="Sister Aya">
                    </div>
                    <div class="col-md-8">
                        <p>Sister Aya graduated from Al-Azhar University, Faculty of Languages and Translation. Additionally, she holds a one-year teaching diploma from Al-Azhar and has completed several courses to prepare for becoming a Qur'an tutor. As a Hafiz of the Qur'an, she brings four years of experience teaching Qur'an, Tajweed, and Arabic to non-Arabic speakers.</p>
                        <p>She believes in creating supportive and engaging lesson plans to foster a positive environment where students can learn and grow. She also incorporates technology—such as educational games, videos, and interactive websites—to make lessons more dynamic and enjoyable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .team-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 4rem 0;
    }
    .team-members {
        padding: 4rem 0;
    }
    .team-scroll-container {
        overflow-x: auto;
        padding: 1rem 0;
    }
    .team-scroll-container::-webkit-scrollbar {
        height: 8px;
    }
    .team-scroll-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }
    .team-scroll-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }
    .team-scroll-container::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    .card {
        transition: transform 0.3s ease;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        min-width: 250px;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }
    .modal-body img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
</style>
@endsection 