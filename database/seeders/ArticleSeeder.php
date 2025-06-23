<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'The Importance of Learning Quran with Tajweed',
                'content' => '<h2>Understanding Tajweed: The Art of Quranic Recitation</h2>
<p>Tajweed is the set of rules governing the correct pronunciation of the Quran. It is essential for every Muslim to learn and apply these rules when reciting the Holy Book. The word "Tajweed" comes from the Arabic root "j-w-d," meaning to make better or to improve.</p>

<h3>Why is Tajweed Important?</h3>
<p>Learning Tajweed is crucial for several reasons:</p>
<ul>
    <li>Preserves the original pronunciation of the Quran</li>
    <li>Ensures accurate recitation as revealed to Prophet Muhammad (PBUH)</li>
    <li>Helps in understanding the meaning of the verses</li>
    <li>Enhances the spiritual connection with the Quran</li>
</ul>

<h3>Basic Rules of Tajweed</h3>
<p>Some fundamental rules include:</p>
<ul>
    <li>Proper pronunciation of Arabic letters</li>
    <li>Rules of elongation (madd)</li>
    <li>Rules of stopping and starting</li>
    <li>Characteristics of letters (sifat)</li>
</ul>

<h3>Benefits of Learning Tajweed</h3>
<p>Mastering Tajweed brings numerous benefits:</p>
<ul>
    <li>Increased reward for proper recitation</li>
    <li>Better understanding of the Quran</li>
    <li>Enhanced spiritual experience</li>
    <li>Ability to teach others</li>
</ul>

<p>At Esra Academy, we provide comprehensive Tajweed courses for all levels, from beginners to advanced students. Our experienced teachers guide students through each rule with practical examples and personalized feedback.</p>',
                'meta_description' => 'Learn about the importance of Tajweed in Quranic recitation, its rules, and benefits. Discover how proper pronunciation enhances your connection with the Holy Quran.',
                'meta_keywords' => 'Tajweed, Quran recitation, Islamic education, Quran pronunciation, Arabic rules',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'The Journey of Learning Arabic: A Gateway to Understanding Islam',
                'content' => '<h2>Arabic Language: The Key to Islamic Knowledge</h2>
<p>Arabic is not just a language; it is the key to understanding Islamic texts, traditions, and culture. Learning Arabic opens doors to a deeper comprehension of the Quran, Hadith, and classical Islamic literature.</p>

<h3>Why Learn Arabic?</h3>
<p>There are several compelling reasons to learn Arabic:</p>
<ul>
    <li>Direct access to original Islamic texts</li>
    <li>Better understanding of Quranic verses</li>
    <li>Ability to communicate with Arabic-speaking Muslims</li>
    <li>Enhanced appreciation of Islamic culture</li>
</ul>

<h3>Levels of Arabic Learning</h3>
<p>Our Arabic courses are structured in three main levels:</p>
<ol>
    <li><strong>Beginner Level:</strong> Basic vocabulary, grammar, and conversation</li>
    <li><strong>Intermediate Level:</strong> Advanced grammar, reading comprehension, and writing</li>
    <li><strong>Advanced Level:</strong> Classical Arabic, literature, and specialized Islamic texts</li>
</ol>

<h3>Learning Methods</h3>
<p>At Esra Academy, we employ various effective teaching methods:</p>
<ul>
    <li>Interactive classroom sessions</li>
    <li>Practical conversation practice</li>
    <li>Audio-visual learning materials</li>
    <li>Regular assessments and feedback</li>
</ul>

<p>Our experienced teachers use modern teaching techniques while maintaining traditional values, ensuring students develop both linguistic skills and cultural understanding.</p>',
                'meta_description' => 'Discover the importance of learning Arabic for understanding Islam. Explore our comprehensive Arabic language courses and their benefits for Islamic studies.',
                'meta_keywords' => 'Arabic language, Islamic studies, Quran understanding, Arabic courses, Islamic education',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Islamic Studies: Building a Strong Foundation in Faith',
                'content' => '<h2>Comprehensive Islamic Education for Modern Muslims</h2>
<p>Islamic studies form the foundation of a Muslim\'s understanding of their faith. At Esra Academy, we provide a comprehensive curriculum that covers essential aspects of Islamic knowledge.</p>

<h3>Core Components of Islamic Studies</h3>
<p>Our curriculum includes:</p>
<ul>
    <li>Islamic History and Civilization</li>
    <li>Fiqh (Islamic Jurisprudence)</li>
    <li>Aqeedah (Islamic Creed)</li>
    <li>Seerah (Prophetic Biography)</li>
    <li>Islamic Ethics and Morality</li>
</ul>

<h3>Teaching Methodology</h3>
<p>We employ a balanced approach to Islamic education:</p>
<ul>
    <li>Traditional Islamic scholarship</li>
    <li>Modern educational techniques</li>
    <li>Critical thinking and analysis</li>
    <li>Practical application of knowledge</li>
</ul>

<h3>Benefits of Structured Islamic Education</h3>
<p>Students gain numerous benefits from our program:</p>
<ul>
    <li>Strong foundation in Islamic principles</li>
    <li>Better understanding of contemporary issues</li>
    <li>Development of critical thinking skills</li>
    <li>Enhanced spiritual growth</li>
</ul>

<h3>Our Approach</h3>
<p>At Esra Academy, we believe in:</p>
<ul>
    <li>Balancing traditional and modern knowledge</li>
    <li>Encouraging questions and discussion</li>
    <li>Promoting practical application of Islamic values</li>
    <li>Building a supportive learning community</li>
</ul>

<p>Our experienced teachers guide students through their Islamic education journey, ensuring they develop both knowledge and understanding of their faith.</p>',
                'meta_description' => 'Explore comprehensive Islamic studies at Esra Academy. Learn about our curriculum, teaching methodology, and the benefits of structured Islamic education.',
                'meta_keywords' => 'Islamic studies, Islamic education, Islamic curriculum, Islamic knowledge, Muslim education',
                'is_published' => true,
                'published_at' => now(),
            ],
        ];

        foreach ($articles as $article) {
            Article::create([
                'title' => $article['title'],
                'slug' => Str::slug($article['title']),
                'content' => $article['content'],
                'meta_description' => $article['meta_description'],
                'meta_keywords' => $article['meta_keywords'],
                'is_published' => $article['is_published'],
                'published_at' => $article['published_at'],
            ]);
        }
    }
} 