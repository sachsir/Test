-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2023 at 01:13 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment6`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int UNSIGNED NOT NULL,
  `state_id` int UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`) VALUES
(1, 1, 'Patna'),
(2, 2, 'Welington'),
(5, 3, 'Kollupitiya'),
(6, 4, 'Arabic Al-Dawḥah');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'india'),
(2, 'Newzeland'),
(3, 'Srilanka'),
(4, 'qatar');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int NOT NULL,
  `course_category_id` int NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_category_id`, `course_name`, `image`, `description`) VALUES
(10, 9, 'Cloud Computing', 'cloudcomputing.jpg', 'Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user. Large clouds often have functions distributed over multiple locations, each of which is a data center.'),
(11, 9, 'Data Science', 'What-is-data-science-2.jpg', 'Data science is an interdisciplinary academic field that uses statistics, scientific computing, scientific methods, processes, algorithms and systems to extract or extrapolate knowledge and insights from noisy, structured, and unstructured data.'),
(12, 9, 'Cyber Security', 'cyber.jpeg', 'Cyber security is the practice of defending computers, servers, mobile devices, electronic systems, networks, and data from malicious attacks. It\'s also known as information technology security or electronic information security. The term applies in a variety of contexts, from business to mobile computing, and can be divided into a few common categories.'),
(13, 9, 'Machine Learning', 'MachineLearning.jpg', 'Machine learning is a field of inquiry devoted to understanding and building methods that \"learn\" – that is, methods that leverage data to improve performance on some set of tasks. It is seen as a part of artificial intelligence.'),
(14, 9, 'System Analysis', 'SystemAnalysis.png', 'Systems analysis is \"the process of studying a procedure or business to identify its goal and purposes and create systems and procedures that will efficiently achieve them\".'),
(15, 9, 'Data and Computational Science', 'Computational Science.png', 'Data Science is the art of generating insight, knowledge and predictions by processing of data gathered about a system or a process. Computational Science is the art of developing validated (simulation) models in order to gain a better understanding of a phenomenon (system\'s or processes).'),
(16, 9, 'System Design', 'System-Design-1.jpg', 'Systems design interfaces, and data for an electronic control system to satisfy specified requirements. System design could be seen as the application of system theory to product development. There is some overlap with the disciplines of system analysis, system architecture and system engineering. '),
(17, 9, 'Object Oriented Programming', 'object-oriented-programming.png', 'Object-oriented programming is a programming paradigm based on the concept of \"objects\", which can contain data and code. The data is in the form of fields, and the code is in the form of procedures. A common feature of objects is that procedures are attached to them and can access and modify the object\'s data fields.'),
(18, 9, 'Data Structure', 'DataStructures.jpg', 'A data structure is not only used for organizing the data. It is also used for processing, retrieving, and storing data. There are different basic and advanced types of data structures that are used in almost every program or software system that has been developed. So we must have good knowledge about data structures. '),
(19, 9, 'Computer Graphics', 'computer-graphics-tutorial.png', 'Computer graphics deals with generating images and art with the aid of computers. Today, computer graphics is a core technology in digital photography, film, video games, digital art, cell phone and computer displays, and many specialized applications.');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `category_name`) VALUES
(1, 'Web Development'),
(9, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `course_id` int NOT NULL,
  `result_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `content_id` int DEFAULT NULL,
  `question` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `answer` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `course_id`, `content_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`) VALUES
(5, 10, 10, 'What is Cloud Computing?', 'Cloud Computing means providing services like storage, servers, database, networking, etc', 'Cloud Computing means storing data in a database', 'Cloud Computing is a tool used to create an application', 'None of the mentioned', 'A'),
(13, 10, NULL, 'Which of the following are the features of cloud computing?', 'Security', 'Availability', 'Large Network Access', 'All of the mentioned', 'D'),
(14, 10, NULL, 'Which of the following is a type of cloud computing service?', 'Service-as-a-Software (SaaS)', 'Software-and-a-Server (SaaS)', 'Software-as-a-Service (SaaS)', 'Software-as-a-Server (SaaS)', 'C'),
(15, 10, NULL, 'Which of the following is the application of cloud computing?', 'Adobe', 'Paypal', 'Google G Suite', 'All of the above', 'D'),
(16, 10, NULL, 'Which of the following is an example of the cloud?', 'Amazon Web Services (AWS)', 'Dropbox', 'Cisco WebEx', 'All of the above', 'D'),
(17, 10, 11, 'Which of the following is an example of a PaaS cloud service?', 'Heroku', 'AWS Elastic Beanstalk', 'Windows Azure', 'All of the above', 'D'),
(18, 10, NULL, ' Which of the following is an example of an IaaS Cloud service?', 'DigitalOcean', 'Linode', 'Rackspace', 'All of the above', 'D'),
(19, 10, NULL, 'Which of the following is the correct statement about cloud computing?', 'Cloud computing abstracts systems by pooling and sharing resources', 'Cloud computing is nothing more than the Internet', 'The use of the word “cloud” makes reference to the two essential concepts', 'All of the mentioned', 'A'),
(20, 10, NULL, 'Which of the following model attempts to categorize a cloud network based on four dimensional factors?', 'Cloud Cube', 'Cloud Square', 'Cloud Service', 'All of the mentioned', 'A'),
(21, 10, NULL, 'All cloud computing applications suffer from the inherent _______ that is intrinsic in their WAN connectivity.', 'noise', 'propagation', 'latency', 'all of the mentioned', 'C'),
(22, 11, 12, 'Data science is the process of diverse set of data through ?', 'organizing data', 'processing data', 'analysing data', 'All of the above', 'D'),
(23, 11, NULL, 'The modern conception of data science as an independent discipline is sometimes attributed to?', 'William S.', 'John McCarthy', 'Arthur Samuel', 'Satoshi Nakamoto', 'A'),
(24, 11, NULL, 'Which of the following language is used in Data science?', 'C', 'C++', 'R', 'Ruby', 'C'),
(25, 11, NULL, 'Which of the following is false?', 'Subsetting can be used to select and exclude variables and observations', 'Raw data should be processed only one time.', 'Merging concerns combining datasets on the same observations to produce a result with more variables', 'None Of the above', 'B'),
(26, 11, NULL, 'What is the work of Data Architect?', 'utilize large data sets to gather information that meets their company\'s needs', 'work with businesses to determine the best usage of the information yielded from data', 'build data solutions that are optimized for performance and design applications', 'All of the above', 'C'),
(27, 11, 13, 'Which of the following are correct component for data science?', 'Data Engineering', 'Advanced Computing', 'Domain expertise', 'All of the above', 'D'),
(28, 11, NULL, 'Which of the following is not a part of data science process?', ' Discovery', 'Model Planning', 'Communication Building', 'Operationalize', 'C'),
(29, 11, NULL, 'Which of the following are the Data Sources in data science?', 'Structured', 'UnStructured', 'Both A and B', 'None Of the above', 'C'),
(30, 11, NULL, ' Point out the correct statement.', ' Raw data is original source of data', 'Preprocessed data is original source of data', 'Raw data is the data obtained after processing steps', 'None of the above', 'A'),
(31, 11, NULL, 'Raw data should be processed only one time.', 'True', 'False', 'Can be true or false', 'Can not say', 'B'),
(32, 12, 14, 'In which of the following, a person is constantly followed/chased by another person or group of several peoples?', 'Phishing', 'Bulling', 'Stalking', 'Identity theft', 'C'),
(35, 12, NULL, 'Which one of the following can be considered as the class of computer threats?', 'Dos Attack', 'Phishing', 'Soliciting', 'Both A and C', 'A'),
(36, 12, NULL, 'Which of the following is considered as the unsolicited commercial email?', 'Virus', 'Malware', 'Spam', 'All of the above', 'C'),
(37, 12, NULL, 'Which of the following usually observe each activity on the internet of the victim, gather all information in the background, and send it to someone else?', 'Malware', 'Spyware', 'Adware', 'All of the above', 'B'),
(38, 12, NULL, '_______ is a type of software designed to help the user\'s computer detect viruses and avoid them.', 'Malware', 'Adware', 'Antivirus', 'Both B and C', 'C'),
(39, 12, 15, 'Which one of the following is a type of antivirus program?', 'Quick heal', 'Mcafee', 'Kaspersky', 'All of the above', 'D'),
(40, 12, NULL, 'It can be a software program or a hardware device that filters all data packets coming through the internet, a network, etc. it is known as the_______:', 'Antivirus', 'Firewall', 'Cookies', 'Malware', 'B'),
(41, 12, NULL, ' Which of the following refers to exploring the appropriate, ethical behaviors related to the online environment and digital media platform?', 'Cyber low', 'Cyberethics', 'Cybersecurity', 'Cybersafety', 'B'),
(42, 12, NULL, 'Which of the following refers to the violation of the principle if a computer is no more accessible?', 'Access control', 'Confidentiality', 'Availability', 'All of the above', 'C'),
(43, 12, NULL, 'Which one of the following refers to the technique used for verifying the integrity of the message?', 'Digital signature', 'Decryption algorithm', 'Protocol', 'Message Digest', 'D'),
(44, 13, 16, 'What is Machine learning?', 'The autonomous acquisition of knowledge through the use of computer programs', 'The autonomous acquisition of knowledge through the use of manual programs', 'The selective acquisition of knowledge through the use of computer programs', 'The selective acquisition of knowledge through the use of manual programs', 'A'),
(45, 13, NULL, 'Which of the factors affect the performance of learner system does not include?', 'Representation scheme used', 'Training scenario', 'Type of feedback', 'Good data structures', 'D'),
(46, 13, NULL, 'Different learning methods does not include?', 'Memorization', 'Analogy', 'Deduction', 'Introduction', 'D'),
(47, 13, NULL, 'In language understanding, the levels of knowledge that does not include?', 'Phonological', 'Syntactic', 'Empirical', 'Logical', 'C'),
(48, 13, NULL, 'What is a top-down parser?', 'Begins by hypothesizing a sentence (the symbol S) and successively predicting lower level constituents until individual preterminal symbols are written', 'Begins by hypothesizing a sentence (the symbol S) and successively predicting upper level constituents until individual preterminal symbols are written', 'Begins by hypothesizing lower level constituents and successively predicting a sentence (the symbol S)', 'Begins by hypothesizing upper level constituents and successively predicting a sentence (the symbol S)', 'A'),
(49, 13, 17, 'The action ‘STACK(A, B)’ of a robot arm specify to _______________', 'Place block B on Block A', 'Place blocks A, B on the table in that order', 'Place blocks B, A on the table in that order', 'Place block A on block B', 'D'),
(50, 13, NULL, 'In language understanding, the levels of knowledge that does not include?', 'Phonological', 'Syntactic', 'Empirical', 'Logical', 'C'),
(51, 13, NULL, ' Among the following which is not a horn clause?', 'p', 'Øp V q', 'p → q', 'p → Øq', 'D'),
(52, 14, 18, 'The Data flow diagram (DFD) shows;', 'The flow of data', 'The processes', 'The areas where they are stored', 'All of the above', 'D'),
(53, 14, NULL, 'Which of the following statements is true?', 'A parallel run involves two different terminals accessing a common database', 'Computers are essential for Systems Analysis', 'Flow of information in an organization is always vertical', 'A system flowchart is not a part of a program documentation package', 'D'),
(54, 14, NULL, ' To avoid errors in transcription and transposition, during data entry, the System Analyst should', 'Provide for a check digit', 'Provide for a hash totals', 'Provide batch totals', 'All of the above', 'D'),
(55, 14, NULL, 'The model base cannot be prepared until', ' The computer has been selected', 'The MIS staff has been acquired and organized', 'Both (a) and (b)', 'The preparation of physical facilities', 'C'),
(56, 14, NULL, 'Which of the following is used when a company goes outside its organization to develop a new system?', 'Which of the following is used when a company goes outside its organization to develop a new system?', 'Which of the following is used when a company goes outside its organization to develop a new system?', 'Which of the following is used when a company goes outside its organization to develop a new system?', 'Which of the following is used when a company goes outside its organization to develop a new system?', 'C'),
(57, 14, NULL, 'Nassi-Shneiderman charts', 'Are being replaced by flowcharts', 'Often describe over lapping control structures', 'Are made up of boxes within boxes', 'Both (a) and (c)', 'C'),
(58, 14, NULL, 'Which of the following statements is true?', 'Alpha testing is the verification process a system goes through for the first time', ' As parallel run involves two different terminals accessing a common database', 'Computers are essential for systems Analysis', ' Flow of information in an organization is always vertical', 'A'),
(59, 14, NULL, 'Sequential organization', 'Means storing records in contiguous blocks according to a key', 'Stores records sequentially but uses an index to locate records', 'Uses an index for each key type', 'Has records placed randomly throughout the file', 'A'),
(60, 15, 19, 'Data science is the process of diverse set of data through ?', 'organizing data', 'processing data', 'analysing data', 'All of the above', 'D'),
(61, 15, NULL, 'The modern conception of data science as an independent discipline is sometimes attributed to?', 'William S.', 'John McCarthy', 'Arthur Samuel', 'Satoshi Nakamoto', 'A'),
(62, 15, NULL, 'Which of the following language is used in Data science?', 'C', 'C++', 'R', ' Ruby', 'C'),
(63, 15, NULL, 'Which of the following is false?', 'Subsetting can be used to select and exclude variables and observations', 'Raw data should be processed only one time.', 'Merging concerns combining datasets on the same observations to produce a result with more variables', 'None Of the above', 'B'),
(64, 15, NULL, 'What is the work of Data Architect?', 'utilize large data sets to gather information that meets their company\'s needs', ' work with businesses to determine the best usage of the information yielded from data', 'build data solutions that are optimized for performance and design applications', 'All of the above', 'C'),
(65, 15, 20, 'Which of the following is correct skills for a Data Scientist?', 'Probability & Statistics', ' Machine Learning / Deep Learning', 'Data Wrangling', 'All of the above', 'D'),
(66, 15, NULL, 'Which of the following are correct component for data science?', 'Data Engineering', ' Advanced Computing', ' Domain expertise', 'All of the above', 'D'),
(67, 15, NULL, 'Which of the following is not a part of data science process?', 'Discovery', 'Model Planning', 'Communication Building', 'Operationalize', 'C'),
(68, 16, 21, ' Which of the following shows levels of management and formal lines of authority?', 'Organization chart', 'decision table', 'pyramid diagram', 'grid chart', 'A'),
(69, 16, NULL, 'External entities may be a', ' source of input data only', 'source of input data or destination of results', 'destination of results only', 'repository of data', 'B'),
(70, 16, NULL, 'Advantages of system flowcharts…..', 'Effective communication', 'Effective analysis', 'Queasier group or relationships', 'All of the above', 'D'),
(71, 16, NULL, 'A list of questions used in the analysis is called a(n)', 'organization chart', 'interview guideline', 'grid table', 'checklist', 'D'),
(72, 16, 22, 'By an external entity, we mean a', 'The unit outside the system being designed which can be controlled by an analyst.', ' The unit outside the system whose behavior is independent of the system is designed', 'A unit external to the system is designed', 'A unit which is not part of a DFD', 'C'),
(73, 16, NULL, 'A context diagram is used', 'as the first step in developing a detailed DFD of a system', ' in systems analysis of very complex systems', 'as an aid to system design', 'as an aid to the programmer', 'C'),
(74, 16, NULL, 'What type of analysis starts with the “big picture” and then breaks it down into smaller pieces?', 'financial', 'reverse', 'top-down', 'executive', 'C'),
(75, 16, NULL, 'A data flow can', 'Only a data store', 'Only leave a data store', 'Enter or leave a data store', 'Either enter or leave a data store but not both', 'C'),
(76, 17, 23, 'Who invented OOP?', 'Andrea Ferro', 'Adele Goldberg', 'Alan Kay', 'Dennis Ritchie', 'C'),
(77, 17, NULL, 'Which is not a feature of OOP in general definitions?', 'Efficient Code', 'Code reusability', 'Modularity', 'Duplicate/Redundant data', 'D'),
(78, 17, NULL, 'Which was the first purely object oriented programming language developed?', 'Kotlin', 'SmallTalk', 'Java', 'C++', 'B'),
(79, 17, 24, 'Which feature of OOP indicates code reusability?', 'Abstraction', 'Polymorphism', 'Encapsulation', 'Inheritance', 'D'),
(80, 17, NULL, ' Which header file is required in C++ to use OOP?', 'OOP can be used without using any header file', 'stdlib.h', 'iostream.h', 'stdio.h', 'A'),
(81, 17, NULL, 'Why Java is Partially OOP language?', 'It allows code to be written outside classes', 'It supports usual declaration of primitive data types', 'It does not support pointers', 'It doesn’t support all types of inheritance', 'B'),
(82, 17, NULL, 'Which among the following doesn’t come under OOP concept?', 'Data hiding', 'Message passing', 'Platform independent', 'Data binding', 'C'),
(83, 17, NULL, 'Which is the correct syntax of inheritance?', 'class base_classname :access derived_classname{ /*define class body*/ };', 'class derived_classname : access base_classname{ /*define class body*/ };', 'class derived_classname : base_classname{ /*define class body*/ };', 'class base_classname : derived_classname{ /*define class body*/ };', 'B'),
(84, 18, 25, 'How can we describe an array in the best possible way?', 'The Array shows a hierarchical structure.', 'Arrays are immutable.', 'Container that stores the elements of similar types', 'The Array is not a data structure', 'C'),
(85, 18, NULL, 'Which of the following is the correct way of declaring an array?', 'int javatpoint[10];', 'int javatpoint;', 'javatpoint{20};', 'array javatpoint[10];', 'A'),
(86, 18, NULL, 'How can we initialize an array in C language?', 'int arr[2]=(10, 20)', 'int arr(2)={10, 20}', 'int arr[2] = {10, 20}', 'int arr(2) = (10, 20)', 'C'),
(87, 18, NULL, 'Which of the following is the advantage of the array data structure?', 'Elements of mixed data types can be stored.', 'Easier to access the elements in an array', 'Index of the first element starts from 1.', 'Elements of an array cannot be sorted', 'B'),
(88, 18, 26, 'Which of the following highly uses the concept of an array?', 'Binary Search tree', 'Caching', 'Spatial locality', 'Scheduling of Processes', 'C'),
(89, 18, NULL, 'Which of the following is the disadvantage of the array?', 'Stack and Queue data structures can be implemented through an array.', 'Index of the first element in an array can be negative', 'Wastage of memory if the elements inserted in an array are lesser than the allocated size', 'Elements can be accessed sequentially.', 'C'),
(90, 18, 27, 'What is the output of the below code?', 'Garbage value', '10', '50', 'None of the above', 'A'),
(91, 18, NULL, 'Which one of the following is the process of inserting an element in the stack?', 'Insert', 'Add', 'Push', 'None of the above', 'C'),
(92, 19, 28, 'GUI stands for -', 'Graphics uniform interaction', 'Graphical user interaction', 'Graphical user interface', 'None of the above', 'C'),
(93, 19, NULL, 'Graphics can be -', 'Simulation', 'Drawing', 'Movies, photographs', 'All of the above', 'D'),
(94, 19, NULL, 'CAD stands for -', 'Computer art design', 'Computer-aided design', 'Car art design', 'Car art design', 'B'),
(95, 19, NULL, 'The components of Interactive computer graphics are -', 'A monitor', 'Display controller', 'Frame buffer', 'Frame buffer', 'D'),
(96, 19, 29, 'A user can make any change in the image using -', 'Interactive computer graphics', 'Non-Interactive computer graphics', 'Both (a) & (b)', 'None of the above', 'A'),
(97, 19, NULL, 'What is a pixel mask?', 'a string containing only 0\'s', 'a string containing only 0\'s', 'a string containing only 0\'s', 'a string containing both 1\'s and 0\'s', 'D'),
(98, 19, NULL, 'The higher number of pixels gives us a ____ image -', 'Better', 'Worst', 'Smaller', 'None of the above', 'A'),
(99, 19, NULL, 'Which one of the following is the primarily used output device?', 'Video monitor', 'Scanner', 'Speaker', 'Printer', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `question_content`
--

CREATE TABLE `question_content` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `question_content`
--

INSERT INTO `question_content` (`id`, `course_id`, `text`) VALUES
(10, 10, 'Cloud computing is the on-demand delivery of IT resources over the Internet with pay-as-you-go pricing. Instead of buying, owning, and maintaining physical data centers and servers, you can access technology services, such as computing power, storage, and databases, on an as-needed basis from a cloud provider like Amazon Web Services (AWS). \r\nWho is using cloud computing?\r\nOrganizations of every type, size, and industry are using the cloud for a wide variety of use cases, such as data backup, disaster recovery, email, virtual desktops, software development and testing, big data analytics, and customer-facing web applications. For example, healthcare companies are using the cloud to develop more personalized treatments for patients. Financial services companies are using the cloud to power real-time fraud detection and prevention. And video game makers are using the cloud to deliver online games to millions of players around the world. \r\nBenefits of cloud computing:\r\nAgility-\r\nThe cloud gives you easy access to a broad range of technologies so that you can innovate faster and build nearly anything that you can imagine. You can quickly spin up resources as you need them–from infrastructure services, such as compute, storage, and databases, to Internet of Things, machine learning, data lakes and analytics, and much more.\r\n\r\nYou can deploy technology services in a matter of minutes, and get from idea to implementation several orders of magnitude faster than before. This gives you the freedom to experiment, test new ideas to differentiate customer experiences, and transform your business.\r\nElasticity-\r\nWith cloud computing, you don’t have to over-provision resources up front to handle peak levels of business activity in the future. Instead, you provision the amount of resources that you actually need. You can scale these resources up or down to instantly grow and shrink capacity as your business needs change.\r\nCost savings-\r\nThe cloud allows you to trade fixed expenses (such as data centers and physical servers) for variable expenses, and only pay for IT as you consume it. Plus, the variable expenses are much lower than what you would pay to do it yourself because of the economies of scale. \r\nDeploy globally in minutes\r\nWith the cloud, you can expand to new geographic regions and deploy globally in minutes. For example, AWS has infrastructure all over the world, so you can deploy your application in multiple physical locations with just a few clicks. Putting applications in closer proximity to end users reduces latency and improves their experience. \r\n'),
(11, 10, 'Types of cloud computing:-\r\nInfrastructure as a Service (IaaS)-\r\nIaaS contains the basic building blocks for cloud IT. It typically provides access to networking features, computers (virtual or on dedicated hardware), and data storage space. IaaS gives you the highest level of flexibility and management control over your IT resources. It is most similar to the existing IT resources with which many IT departments and developers are familiar. \r\nPlatform as a Service (PaaS)-\r\nPaaS removes the need for you to manage underlying infrastructure (usually hardware and operating systems), and allows you to focus on the deployment and management of your applications. This helps you be more efficient as you don’t need to worry about resource procurement, capacity planning, software maintenance, patching, or any of the other undifferentiated heavy lifting involved in running your application. \r\nSoftware as a Service (SaaS)-\r\nSaaS provides you with a complete product that is run and managed by the service provider. In most cases, people referring to SaaS are referring to end-user applications (such as web-based email). With a SaaS offering, you don’t have to think about how the service is maintained or how the underlying infrastructure is managed. You only need to think about how you will use that particular software. \r\n\r\n'),
(12, 11, 'Data science is the study of data to extract meaningful insights for business. It is a multidisciplinary approach that combines principles and practices from the fields of mathematics, statistics, artificial intelligence, and computer engineering to analyze large amounts of data. This analysis helps data scientists to ask and answer questions like what happened, why it happened, what will happen, and what can be done with the results.\r\nHistory- While the term data science is not new, the meanings and connotations have changed over time. The word first appeared in the ’60s as an alternative name for statistics. In the late ’90s, computer science professionals formalized the term. A proposed definition for data science saw it as a separate field with three aspects: data design, collection, and analysis. It still took another decade for the term to be used outside of academia. \r\nWhy is data science important?\r\nData science is important because it combines tools, methods, and technology to generate meaning from data. Modern organizations are inundated with data; there is a proliferation of devices that can automatically collect and store information. Online systems and payment portals capture more data in the fields of e-commerce, medicine, finance, and every other aspect of human life. We have text, audio, video, and image data available in vast quantities.  '),
(13, 11, 'Future of data science:-\r\nArtificial intelligence and machine learning innovations have made data processing faster and more efficient. Industry demand has created an ecosystem of courses, degrees, and job positions within the field of data science. Because of the cross-functional skillset and expertise required, data science shows strong projected growth over the coming decades.\r\nWhat is data science used for?\r\n1. Descriptive analysis\r\nDescriptive analysis examines data to gain insights into what happened or what is happening in the data environment. It is characterized by data visualizations such as pie charts, bar charts, line graphs, tables, or generated narratives. For example, a flight booking service may record data like the number of tickets booked each day. Descriptive analysis will reveal booking spikes, booking slumps, and high-performing months for this service.\r\n2. Diagnostic analysis-\r\nDiagnostic analysis is a deep-dive or detailed data examination to understand why something happened. It is characterized by techniques such as drill-down, data discovery, data mining, and correlations. Multiple data operations and transformations may be performed on a given data set to discover unique patterns in each of these techniques.For example, the flight service might drill down on a particularly high-performing month to better understand the booking spike. This may lead to the discovery that many customers visit a particular city to attend a monthly sporting event.\r\n3. Predictive analysis\r\nPredictive analysis uses historical data to make accurate forecasts about data patterns that may occur in the future. It is characterized by techniques such as machine learning, forecasting, pattern matching, and predictive modeling. In each of these techniques, computers are trained to reverse engineer causality connections in the data.For example, the flight service team might use data science to predict flight booking patterns for the coming year at the start of each year. The computer program or algorithm may look at past data and predict booking spikes for certain destinations in May. Having anticipated their customer’s future travel requirements, the company could start targeted advertising for those cities from February.'),
(14, 12, 'Cyber security is the practice of defending computers, servers, mobile devices, electronic systems, networks, and data from malicious attacks. It\'s also known as information technology security or electronic information security. The term applies in a variety of contexts, from business to mobile computing, and can be divided into a few common categories.\r\n\r\n·        Network security is the practice of securing a computer network from intruders, whether targeted attackers or opportunistic malware.\r\n·Application security focuses on keeping software and devices free of threats. A compromised application could provide access to the data its designed to protect. Successful security begins in the design stage, well before a program or device is deployed.\r\n·Information security protects the integrity and privacy of data, both in storage and in transit.\r\n·Operational security includes the processes and decisions for handling and protecting data assets. The permissions users have when accessing a network and the procedures that determine how and where data may be stored or shared all fall under this umbrella.\r\n· Disaster recovery and business continuity define how an organization responds to a cyber-security incident or any other event that causes the loss of operations or data. Disaster recovery policies dictate how the organization restores its operations and information to return to the same operating capacity as before the event. Business continuity is the plan the organization falls back on while trying to operate without certain resources.\r\n· End-user education addresses the most unpredictable cyber-security factor: people. Anyone can accidentally introduce a virus to an otherwise secure system by failing to follow good security practices. Teaching users to delete suspicious email attachments, not plug in unidentified USB drives, and various other important lessons is vital for the security of any organization.'),
(15, 12, 'The scale of the cyber threat:\r\nThe global cyber threat continues to evolve at a rapid pace, with a rising number of data breaches each year. A report by RiskBased Security revealed that a shocking 7.9 billion records have been exposed by data breaches in the first nine months of 2019 alone. This figure is more than double (112%) the number of records exposed in the same period in 2018.\r\n\r\nMedical services, retailers and public entities experienced the most breaches, with malicious criminals responsible for most incidents. Some of these sectors are more appealing to cybercriminals because they collect financial and medical data, but all businesses that use networks can be targeted for customer data, corporate espionage, or customer attacks.\r\n\r\nWith the scale of the cyber threat set to continue to rise, global spending on cybersecurity solutions is naturally increasing. Gartner predicts cybersecurity spending will reach $188.3 billion in 2023 and surpass $260 billion globally by 2026. Governments across the globe have responded to the rising cyber threat with guidance to help organizations implement effective cyber-security practices.\r\n\r\nIn the U.S., the National Institute of Standards and Technology (NIST) has created a cyber-security framework. To combat the proliferation of malicious code and aid in early detection, the framework recommends continuous, real-time monitoring of all electronic resources.\r\n\r\n'),
(16, 13, 'Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn, gradually improving its accuracy.\r\n\r\nIBM has a rich history with machine learning. One of its own, Arthur Samuel, is credited for coining the term, “machine learning” with his research (PDF, 481 KB) (link resides outside IBM) around the game of checkers. Robert Nealey, the self-proclaimed checkers master, played the game on an IBM 7094 computer in 1962, and he lost to the computer. Compared to what can be done today, this feat seems trivial, but it’s considered a major milestone in the field of artificial intelligence.\r\n\r\nOver the last couple of decades, the technological advances in storage and processing power have enabled some innovative products based on machine learning, such as Netflix’s recommendation engine and self-driving cars.\r\n\r\nMachine learning is an important component of the growing field of data science. Through the use of statistical methods, algorithms are trained to make classifications or predictions, and to uncover key insights in data mining projects. These insights subsequently drive decision making within applications and businesses, ideally impacting key growth metrics. As big data continues to expand and grow, the market demand for data scientists will increase. They will be required to help identify the most relevant business questions and the data to answer them.\r\n\r\nMachine learning algorithms are typically created using frameworks that accelerate solution development, such as TensorFlow and PyTorch.'),
(17, 13, 'A Decision Process: In general, machine learning algorithms are used to make a prediction or classification. Based on some input data, which can be labeled or unlabeled, your algorithm will produce an estimate about a pattern in the data.\r\nAn Error Function: An error function evaluates the prediction of the model. If there are known examples, an error function can make a comparison to assess the accuracy of the model.\r\nA Model Optimization Process: If the model can fit better to the data points in the training set, then weights are adjusted to reduce the discrepancy between the known example and the model estimate. The algorithm will repeat this “evaluate and optimize” process, updating weights autonomously until a threshold of accuracy has been met.  '),
(18, 14, 'What Does Systems Analysis Mean?\r\nSystems analysis the process of observing systems for troubleshooting or development purposes. It is applied to information technology, where computer-based systems require defined analysis according to their makeup and design.\r\nTechopedia Explains Systems Analysis\r\nIn IT, systems analysis can include looking at end-user implementation of a software package or product; looking in-depth at source code to define the methodologies used in building software; or taking feasibility studies and other types of research to support the use and production of a software product, among other things.\r\nSystems analysis professionals are often called upon to look critically at systems, and redesign or recommend changes as necessary. Inside and outside of the business world, systems analysts help to evaluate whether a system is viable or efficient within the context of its overall architecture, and help to uncover the options available to the employing business or other party.\r\nSystems analysts are different than systems administrators, who maintain systems day to day, and their roles generally involve a top-level view of a system to determine its overall effectiveness according to its design.\r\n\r\n'),
(19, 15, 'The graduates from Data and Computational Science course are called computational and data scientists. These scientists have the responsibility to work on mathematical models, develop quantitative analysis techniques and learn the usage of computers to analyse and solve real-life scientific problems. The knowledge of innovative tools which can be used and how they should collaborate with clients and fulfil their demands is one of the most important aspects of Data and Computational Science course. They facilitate the students by helping them learn how to follow an interdisciplinary approach and solve problems using mathematics, physics, chemistry, computing and statistics. Extraordinary technology like modelling, simulation and data mining can also be studied in Data and Computational Science course. '),
(20, 15, 'Scope of Data and Computational Science in India and Abroad\r\nSince more technologies are being used in today’s world, the need for a Data scientist is increasing tremendously. Therefore, the scope of Data and Computational Science is huge. Data and Computational Science course is very attractive for the young generation as well as the professionals of this field. The demand is created in sectors of Information technology, telecom, manufacturing, finance and insurance, retail and much more. Data Science is used in the fields of E-Commerce, manufacturing, banking and finance, healthcare, and transport. Data and Computational Science professionals can find employment in the top companies like Amazon, Walmart, and Mate Labs with a variety of job roles of Software engineer, data scientist, business analyst, and many more. '),
(21, 16, 'Systems design interfaces, and data for an electronic control system to satisfy specified requirements. System design could be seen as the application of system theory to product development. There is some overlap with the disciplines of system analysis, system architecture and system engineering. '),
(22, 16, 'Advantages of System Design:\r\nBetter understanding of requirements: System design helps to clarify the requirements and constraints of a system, which can lead to a better understanding of the problem space.\r\nImproved efficiency: By designing a system with appropriate technology and optimized data structures, system design can improve the efficiency and performance of a system.\r\nBetter scalability: System design can help ensure that a system is scalable and can accommodate future growth and changing requirements.\r\nImproved maintainability: By defining clear interfaces and data models, system design can improve the maintainability of a system and make it easier to update and modify over time.\r\nBetter communication: System design helps to communicate the design of a system to stakeholders, including developers and users, which can help ensure that the system meets their needs and expectations.\r\n'),
(23, 17, 'Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.\r\n\r\nOOP focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. This approach to programming is well-suited for programs that are large, complex and actively updated or maintained. This includes programs for manufacturing and design, as well as mobile applications; for example, OOP can be used for manufacturing system simulation software.\r\n\r\nThe organization of an object-oriented program also makes the method beneficial to collaborative development, where projects are divided into groups. Additional benefits of OOP include code reusability, scalability and efficiency.\r\n\r\nThe first step in OOP is to collect all of the objects a programmer wants to manipulate and identify how they relate to each other -- an exercise known as data modeling.\r\n\r\nExamples of an object can range from physical entities, such as a human being who is described by properties like name and address, to small computer programs, such as widgets.\r\n\r\nOnce an object is known, it is labeled with a class of objects that defines the kind of data it contains and any logic sequences that can manipulate it. Each distinct logic sequence is known as a method. Objects can communicate with well-defined interfaces called messages'),
(24, 17, 'What are the main principles of OOP?\r\nObject-oriented programming is based on the following principles:\r\n\r\nEncapsulation. This principle states that all important information is contained inside an object and only select information is exposed. The implementation and state of each object are privately held inside a defined class. Other objects do not have access to this class or the authority to make changes. They are only able to call a list of public functions or methods. This characteristic of data hiding provides greater program security and avoids unintended data corruption.\r\nAbstraction. Objects only reveal internal mechanisms that are relevant for the use of other objects, hiding any unnecessary implementation code. The derived class can have its functionality extended. This concept can help developers more easily make additional changes or additions over time.\r\nInheritance. Classes can reuse code from other classes. Relationships and subclasses between objects can be assigned, enabling developers to reuse common logic while still maintaining a unique hierarchy. This property of OOP forces a more thorough data analysis, reduces development time and ensures a higher level of accuracy.\r\nPolymorphism. Objects are designed to share behaviors and they can take on more than one form. The program will determine which meaning or usage is necessary for each execution of that object from a parent class, reducing the need to duplicate code. A child class is then created, which extends the functionality of the parent class. Polymorphism allows different types of objects to pass through the same interface.'),
(25, 18, 'Data Structure is a branch of Computer Science. The study of data structure allows us to understand the organization of data and the management of the data flow in order to increase the efficiency of any process or program. Data Structure is a particular way of storing and organizing data in the memory of the computer so that these data can easily be retrieved and efficiently utilized in the future when required. The data can be managed in various ways, like the logical or mathematical model for a specific organization of data is known as a data structure.\r\n\r\nThe scope of a particular data model depends on two factors:\r\n\r\nFirst, it must be loaded enough into the structure to reflect the definite correlation of the data with a real-world object.\r\nSecond, the formation should be so straightforward that one can adapt to process the data efficiently whenever necessary.\r\nSome examples of Data Structures are Arrays, Linked Lists, Stack, Queue, Trees, etc. Data Structures are widely used in almost every aspect of Computer Science, i.e., Compiler Design, Operating Systems, Graphics, Artificial Intelligence, and many more.\r\n\r\nData Structures are the main part of many Computer Science Algorithms as they allow the programmers to manage the data in an effective way. It plays a crucial role in improving the performance of a program or software, as the main objective of the software is to store and retrieve the user\'s data as fast as possible.'),
(26, 18, 'As applications are becoming more complex and the amount of data is increasing every day, which may lead to problems with data searching, processing speed, multiple requests handling, and many more. Data Structures support different methods to organize, manage, and store data efficiently. With the help of Data Structures, we can easily traverse the data items. Data Structures provide Efficiency, Reusability, and Abstraction.\r\n\r\nWhy should we learn Data Structures?\r\nData Structures and Algorithms are two of the key aspects of Computer Science.\r\nData Structures allow us to organize and store data, whereas Algorithms allow us to process that data meaningfully.\r\nLearning Data Structures and Algorithms will help us become better Programmers.\r\nWe will be able to write code that is more effective and reliable.\r\nWe will also be able to solve problems more quickly and efficiently.\r\n'),
(27, 18, '#include <stdio.h>  \r\nint main()  \r\n{  \r\n   int arr[5]={10,20,30,40,50};  \r\n   printf(\"%d\", arr[5]);  \r\n  \r\n    return 0;  \r\n}  '),
(28, 19, 'Computer Graphics involves technology to access. The Process transforms and presents information in a visual form. The role of computer graphics insensible. In today life, computer graphics has now become a common element in user interfaces, T.V. commercial motion pictures.\r\n\r\nComputer Graphics is the creation of pictures with the help of a computer. The end product of the computer graphics is a picture it may be a business graph, drawing, and engineering.\r\n\r\nIn computer graphics, two or three-dimensional pictures can be created that are used for research. Many hardware devices algorithm has been developing for improving the speed of picture generation with the passes of time. It includes the creation storage of models and image of objects. These models for various fields like engineering, mathematical and so on.'),
(30, 11, 'Abc');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `total_questions` int NOT NULL,
  `right_answers` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int UNSIGNED NOT NULL,
  `country_id` int UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`) VALUES
(1, 1, 'Bihar'),
(2, 2, 'Mount Mangui'),
(3, 3, 'Colombo'),
(4, 4, 'doha'),
(7, 3, 'Galle'),
(8, 4, 'Umm Salal');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int NOT NULL,
  `question_id` int NOT NULL,
  `user_id` int NOT NULL,
  `selected_option` char(1) NOT NULL,
  `date` datetime NOT NULL,
  `result_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '1',
  `token` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `country`, `state`, `city`, `zip_code`, `password`, `status`, `deleted`, `token`) VALUES
(10, 'Sarik', 'Khullar', 'sarikkhullar9955@gmail.com', '9999999999', 'Ferozepur', '1', '1', '1', '152023', '$2y$10$tookFrMiBVBG7C1fL8aXPuAAz8Pk8jtzBFzvGZ1jB24ZSZ4q1Myo.', '0', '1', 66988),
(11, 'Prabhat', 'Moudgill', 'moudgil3108@gmail.com', '9999999999', 'Pinjore', '2', '2', '2', '152023', '$2y$10$cirg1fhcznnSSR3jFSs1muj76qH4WU3VzvCktGtPpoMXV61cAmipe', '1', '1', 12117),
(12, 'Anukul', 'Antwal', 'akshayjaggi@gmail.com', '9999999999', 'Haryana', '2', '2', '2', '152023', '$2y$10$AKuXp/i2D48/gzxwDiFnJeF79Vh11mCo7lGqVf29MTfE1dY3XH63q', '1', '1', 65049),
(13, 'Sarik', 'Khullar', 'sarikkhullar9911@gmail.com', '7777777777', 'Haryana', '2', '2', '2', '125314', '$2y$10$LQTwmeMt2Rr71OKYYXQNGuj7FZuG7l4VHweJsFNV3nzCd2Pclsc06', '1', '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_content`
--
ALTER TABLE `question_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `question_content`
--
ALTER TABLE `question_content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
