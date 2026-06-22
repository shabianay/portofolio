<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateDataSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama agar tidak duplikat
        Certificate::truncate();

        // 1. Data E-Course (Tipe: url)
        $courses = [
            ['title' => 'Build and Secure Networks in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4962250', 'type' => 'url'],
            ['title' => 'Create and Manage Cloud Resources', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4958923', 'type' => 'url'],
            ['title' => 'Google Cloud Computing Foundations: Data, ML, and AI in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4955691', 'type' => 'url'],
            ['title' => 'Perform Foundational Data, ML, and AI Tasks in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4962963', 'type' => 'url'],
            ['title' => 'Perform Foundational Infrastructure Tasks in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4959606', 'type' => 'url'],
            ['title' => 'Google Cloud Computing Foundations: Cloud Computing Fundamentals', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4885818', 'type' => 'url'],
            ['title' => 'Google Cloud Computing Foundations: Infrastructure in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4905577', 'type' => 'url'],
            ['title' => 'Google Cloud Computing Foundations: Networking & Security in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'image' => 'portfolio/certs/Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4942534', 'type' => 'url'],
            ['title' => 'System Administration and IT Infrastructure Services', 'provider' => 'Coursera', 'image' => 'portfolio/certs/LOGO-COURSERA-150x150.png', 'url' => 'https://www.coursera.org/account/accomplishments/certificate/6GQTAEP8B5MG', 'type' => 'url'],
            ['title' => 'The Bits and Bytes of Computer Networking', 'provider' => 'Coursera', 'image' => 'portfolio/certs/LOGO-COURSERA-150x150.png', 'url' => 'https://www.coursera.org/account/accomplishments/certificate/DRWRWDUPDA6V', 'type' => 'url'],
            ['title' => 'Menjadi Google Cloud Engineer', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/JLX1WQ485P72', 'type' => 'url'],
            ['title' => 'Belajar Membuat Aplikasi Back-End untuk Pemula dengan Google Cloud', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/98XWV50DJPM3', 'type' => 'url'],
            ['title' => 'Belajar Dasar Pemrograman JavaScript', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/1OP816Q1VZQK', 'type' => 'url'],
            ['title' => 'Belajar Dasar Pemrograman Web', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/MRZMLG6M0XYQ', 'type' => 'url'],
            ['title' => 'Belajar Dasar Git dengan GitHub', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/0LZ090500Z65', 'type' => 'url'],
            ['title' => 'Memulai Dasar Pemrograman untuk Menjadi Pengembang Software', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/1RXY6V3E3ZVM', 'type' => 'url'],
            ['title' => 'Pengenalan ke Logika Pemrograman (Programming Logic 101)', 'provider' => 'Dicoding Indonesia', 'image' => 'portfolio/certs/LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/1OP80OM78XQK', 'type' => 'url'],
        ];

        foreach ($courses as $course) {
            Certificate::create($course);
        }

        // 2. Data Academic (Tipe: image)
        $academicCerts = [
            'Sertifikat-Mentor-INLAB-Shabian-Arsyl-Yonanta_page-0001-1-1-scaled.png',
            'Frame-1-11-scaled.png',
            'Frame-1-30-scaled.png',
            'Frame-1-15-scaled.png',
            'Frame-1-4-scaled.png',
            'Frame-1-14-scaled.png',
            'Frame-1-5-scaled.png',
            'Frame-1-8-1-scaled.png',
            'Frame-1-5-1-scaled.png',
            'Frame-1-6-1-scaled.png',
            'Frame-1-10-scaled.png',
            'Frame-1-7-scaled.png',
            'Frame-1-9-scaled.png',
            'Frame-1-6-scaled.png',
            'Frame-1-3-scaled.png',
            'Frame-1-2-scaled.png',
            'Frame-1-1-scaled.png',
            'Frame-1-29-scaled.png',
            'Frame-1-28-scaled.png',
            'Frame-1-27-scaled.png',
            'Frame-1-26-scaled.png',
            'Frame-1-25-scaled.png',
            'Frame-1-24-scaled.png',
            'Frame-1-23-scaled.png',
            'Frame-1-22-scaled.png',
            'Frame-1-21-scaled.png',
            'Frame-1-20-scaled.png',
            'Frame-1-19-scaled.png',
            'Frame-1-18-scaled.png',
            'Frame-1-17-scaled.png',
            'Frame-1-16-scaled.png',
            'Frame-1-13-scaled.png',
            'Frame-1-12-scaled.png',
            'Frame-1-8-scaled.png',
            'Sertifikat_Shabian-Arsyl-Yonantaa_page-0023.jpg',
        ];

        foreach ($academicCerts as $img) {
            Certificate::create([
                'title' => 'Professional Certificate',
                'provider' => 'Certification Authority',
                'image' => 'portfolio/certs/' . $img,
                'type' => 'image',
                'url' => null,
            ]);
        }
    }
}
