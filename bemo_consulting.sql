-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2020 at 05:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemo_consulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `country`, `title`, `content`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'masanam', 'masanam@gmail.com', NULL, NULL, NULL, 'test', NULL, NULL, NULL, '2020-11-13 10:21:34', '2020-11-13 10:21:34', NULL),
(2, 'Test', 'masanam@mysmsmasking.com', NULL, NULL, NULL, 'test', NULL, NULL, NULL, '2020-11-13 10:30:44', '2020-11-13 10:30:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `headline` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `category_id`, `title`, `seotitle`, `summary`, `content`, `picture`, `picture_description`, `tag`, `active`, `published_at`, `headline`, `hits`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:46:07', '2020-11-13 07:46:07', NULL),
(2, 1, 'Overview:', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\">The purpose of the dental school interview<br />History and rationale of the CDA interview <br />Types of Questions <br />The Seven Competencies<br />Structure of the CDA interview <br /></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a title=\"How To Prepare\" href=\"https://cdainterview.com/how-to-prepare-for-cda-interview.html\" rel=\"self\">How to prepare for your CDA Interview</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><br /></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a title=\"CDA Interview Questions\" href=\"https://cdainterview.com/sample-cda-interview-questions.html\" rel=\"self\">Sample CDA interview questions</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><br /></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\" rel=\"external noopener\">BeMo CDA-structured interview prep program</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><br /></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a title=\"Contact Us\" href=\"https://cdainterview.com/contact-us.php\" rel=\"self\">Contact us</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><br /></span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:47:18', '2020-11-13 07:47:18', NULL),
(3, 1, 'What is the purpose of the dental school interview?', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\">Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate. <br /><br />What are NCSs? By these we mean the following: Communication skills, interpersonal skills, ethical and moral decision making capacity, maturity, professionalism, sense of social responsibility, service to community, leadership, initiative, scholarship, ability to collaborate with others, conflict resolution skills, etc. <br /><br />Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are \"conscientious\" and \"open to new experiences\" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part. <br /><br />Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association\'s structured interview or CDA structured interviews. </span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:47:45', '2020-11-13 07:47:45', NULL),
(4, 1, 'Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant acro', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><br />Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association\'s earlier decision to commission a \"new structured interview based on state-of-the-art contemporary interview techniques\" (i.e. CDA structured interview) <br /><br />What were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, \"a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students\' performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions.\" Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance. <br /><br />The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview. </span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:48:05', '2020-11-13 07:48:05', NULL),
(5, 1, 'Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><br />The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example, <br /><br />\"You are babysitting your sister&rsquo;s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?\" <br /><br />Conversely, PBDI type questions, ask the candidates \"about past behaviour with the assumption that past behaviour is the best predictor of future behaviour.\" An example of a PBDI type questions is: <br /><br /><br />Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome? <br /><br />Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies. </span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:48:31', '2020-11-13 07:48:31', NULL),
(6, 1, 'The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Desc', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\">1. Communication: does the applicant have excellent communication skills?<br />2. Conscientiousness: is the applicant thorough, careful to do tasks well?<br />3. Integrity : is the applicant honest with themselves and others?<br />4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?<br />5. self-control : Does the applicant remain calm and in control in difficult situations?<br />6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?<br />7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?<br /><br />Notice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers. </span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:48:51', '2020-11-13 07:48:51', NULL),
(7, 1, '1. Communication: does the applicant have excellent communication skills? 2. Conscientiousness: is the applicant thorough, careful to do tasks well? 3. Integrity : is the applicant honest wi', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\">The CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed. <br /><br />Click </span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a title=\"How To Prepare\" href=\"https://cdainterview.com/how-to-prepare-for-cda-interview.html\" rel=\"self\">here</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"> to learn how to prepare for your CDA interview<br /><br />Click </span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a title=\"CDA Interview Questions\" href=\"https://cdainterview.com/sample-cda-interview-questions.html\" rel=\"self\">here</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"> to practice with our sample CDA interview questions<br /><br />Click </span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"><a href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\" rel=\"external noopener\">here</a></span><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\"> to learn more about our money-back guarantee CDA interview preparation programs. </span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:49:10', '2020-11-13 07:49:10', NULL),
(8, 1, 'to learn more about our money-back guarantee CDA interview preparation programs.  Reference:', NULL, NULL, '<p><span style=\"font: 16px Arial, Verdana, Helvetica, sans-serif;\">Poole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 07:49:26', '2020-11-13 07:49:26', NULL),
(9, 2, 'BeMo Academic Consulting Inc.', NULL, NULL, '<p><span style=\"font-size: 13px; font-weight: bold;\"><u>Toll Free</u></span><span style=\"font-size: 13px;\">: </span><span style=\"font-size: 14px;\">1-855-900-BeMo (2366)</span><span style=\"font-size: 13px;\"><br /></span><span style=\"font-size: 13px; font-weight: bold;\"><u>Email</u></span><span style=\"font-size: 13px;\">: </span><span style=\"font-size: 14px;\">info@bemoacademicconsulting.com</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-13 09:30:28', '2020-11-13 09:30:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `type`, `title`, `content`, `picture`, `meta_title`, `meta_keyword`, `description`, `link`, `orderid`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Main', NULL, NULL, 'FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview', 'FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview', NULL, 'main', NULL, 1, NULL, NULL, '2020-11-13 07:34:37', '2020-11-13 09:11:37', NULL),
(2, 1, 1, 'Contact Us', NULL, NULL, NULL, NULL, NULL, 'contact-us', NULL, NULL, NULL, NULL, '2020-11-13 07:35:07', '2020-11-13 09:11:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `picture`, `orderid`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CDA Interview Guide', NULL, 'storage/files/shares/pictture/cda-interview-guide.jpg', 1, NULL, NULL, NULL, '2020-11-13 07:55:11', '2020-11-13 08:08:40', NULL),
(2, 'Contact Us', NULL, 'storage/files/shares/pictture/contact-us.png', 2, NULL, NULL, NULL, '2020-11-13 09:24:20', '2020-11-13 09:26:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$Sb3.8WIUzsww7j9c4SwxJeceqVZSp0y8Z8nRCor1VLHD6HkIOr3Wq', NULL, '2020-11-13 03:42:54', '2020-11-13 03:42:54', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
