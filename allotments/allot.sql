-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 07:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitcmun`
--

-- --------------------------------------------------------

--
-- Table structure for table `allot`
--

CREATE TABLE `allot` (
  `appcode` varchar(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `allotment` varchar(500) NOT NULL,
  `council` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allot`
--

INSERT INTO `allot` (`appcode`, `name`, `phoneno`, `allotment`, `council`) VALUES
('VITCAIP0001', 'Vamsidhar.a', '7397389512', 'Alphons Kannanthanam', 'AIPPM'),
('VITCAIP0002', 'Adit Bhatia', '7397431072', 'Giriraj Singh', 'AIPPM'),
('VITCAIP0003', 'Megha Shyam M', '9790143298', 'Kummanam Rajasekharan', 'AIPPM'),
('VITCAIP0004', 'Varsha', '9677211212', 'Meenakshi Lekhi', 'AIPPM'),
('VITCAIP0005', 'Sakshi Singh', '7550182341', 'Rajnath Singh', 'AIPPM'),
('VITCAIP0006', 'S.Siva rama rajeswaran', '9445170714', 'Raman Singh', 'AIPPM'),
('VITCAIP0007', 'Chetan Prakash', '8220128949', 'Shivraj Singh Chouhan', 'AIPPM'),
('VITCAIP0008', 'Rohan Mishra', '7376237511', 'Subramanian Swamy', 'AIPPM'),
('VITCAIP0009', 'Anirudh Hosur', '9952011684', 'Varun Gandhi', 'AIPPM'),
('VITCAIP0010', 'AYUSH VERMA', '7550167179', 'Vasundhara Raje', 'AIPPM'),
('VITCAIP0011', 'Ishwarya kanda', '8870991019', 'Yashwant Sinha', 'AIPPM'),
('VITCAIP0012', 'AKRITI SINHA ', '7004266414', 'Jairam Ramesh', 'AIPPM'),
('VITCAIP0013', 'Mokshita Agnihotri', '8299637870', 'Lal Thanhawla', 'AIPPM'),
('VITCAIP0014', 'Sathyajith M S ', '8217860850', 'Meira Kumar', 'AIPPM'),
('VITCAIP0015', 'P. Subin Joseph', '9531843783', 'Oomen Chandy', 'AIPPM'),
('VITCAIP0016', 'Aadithya vurgese', '9496655833', 'Ramesh Chennithala', 'AIPPM'),
('VITCAIP0017', 'S MOHAMED BILAL ALI', '9003048873', 'Sachin Pilot', 'AIPPM'),
('VITCAIP0018', 'A I AHMED', '9789776183', 'Tarun Gogoi', 'AIPPM'),
('VITCAIP0019', 'Paras Varshney', '9068222659', 'Virbhadra Singh', 'AIPPM'),
('VITCAIP0020', 'KESAV PRASADH', '9840646464', 'Munisamy Thambidurai', 'AIPPM'),
('VITCAIP0021', 'R.venkatesh kumar', '9496383721', 'E. Madhusudhanan', 'AIPPM'),
('VITCAIP0022', 'Vanshika Gupta', '9914042201', 'Rabri Devi', 'AIPPM'),
('VITCAIP0023', 'Rohit Agarwal', '8334011404', 'Mamta Banerjee', 'AIPPM'),
('VITCAIP0024', 'Tamoghna Chattopadhyay', '9874122815', 'Sudeep Banerjee', 'AIPPM'),
('VITCAIP0025', 'Shravani Sharma', '8903658467', 'Manish Sisodia', 'AIPPM'),
('VITCAIP0026', 'Abdul raziq', '9962443242', 'Deepak Bajpai', 'AIPPM'),
('VITCAIP0027', 'N.K.Sharithira', '7904333078', 'Brinda Karat', 'AIPPM'),
('VITCAIP0028', 'Vignesh B', '9487112301', 'Suravaram Sudhakar Reddy', 'AIPPM'),
('VITCAIP0029', 'Nanda Kishoore', '9710511230', 'Swami Prasad Maurya', 'AIPPM'),
('VITCAIP0030', 'Utkarsh Mishra', '6393030136', 'Farooq Abdullah', 'AIPPM'),
('VITCAIP0031', 'Najla Ahmed', '9840612724', 'Mehbooba Mufti', 'AIPPM'),
('VITCAIP0032', 'Ansh Pujara', '7698120884', 'Shibu Soren', 'AIPPM'),
('VITCAIP0033', 'Raunaq Nayak', '9582990415', 'Asaduddin Owaisi', 'AIPPM'),
('VITCAIP0034', 'Sakthi sathyamurthy', '9042714228', 'K. Anbazhagan', 'AIPPM'),
('VITCAIP0035', 'Janakiraman R', '9884441026', 'Dr. Anbumani Ramadoss', 'AIPPM'),
('VITCDIS0001', 'Deekshitha s', '7338887527', '(Islamic Republic of) Afghanistan', 'DISEC'),
('VITCDIS0002', 'H.Heera', '6385311599', 'Albania', 'DISEC'),
('VITCDIS0003', 'Pranav Vijayaraghavan', '9840820734', 'Argentine Republic', 'DISEC'),
('VITCDIS0004', 'Shyam Kumar R', '9176086399', 'Armenia', 'DISEC'),
('VITCDIS0005', 'Siva Chidambaram', '8678981619', 'Austria', 'DISEC'),
('VITCDIS0006', 'Arundhati Raj', '9162616666', 'Bahrain( Kingdom of)', 'DISEC'),
('VITCDIS0007', 'Hitesh R R', '9551517140', 'Azerbaijan', 'DISEC'),
('VITCDIS0008', 'Soumyadip Das', '9836017473', 'Bangladesh(People''s Republic of)', 'DISEC'),
('VITCDIS0009', 'Pragadeesh.B', '9790547602', 'Barbados', 'DISEC'),
('VITCDIS0010', 'Nithin Kamlesh', '9176496312', 'Belarus', 'DISEC'),
('VITCDIS0011', 'Sathya Keerthi', '9445411897', 'Belgium', 'DISEC'),
('VITCDIS0012', 'Nimisha Pabbichetty', '9840780834', 'Bolivia (Plurinational State Of)', 'DISEC'),
('VITCDIS0013', 'MEGHNA GOVIND', '9962309298', 'Bulgaria', 'DISEC'),
('VITCDIS0014', 'Adithya', '7358572679', 'Combodia', 'DISEC'),
('VITCDIS0015', 'Reshma S', '9789017924', 'Cameroon', 'DISEC'),
('VITCDIS0016', 'Anuragini Suresh', '7338819936', 'Canada', 'DISEC'),
('VITCDIS0017', 'Rishit Chithirala', '9176029900', 'Pakistan', 'DISEC'),
('VITCDIS0018', 'Nethraa Sivakumar', '8939073910', 'Chad', 'DISEC'),
('VITCDIS0019', 'Abhinav Aditya', '9791056031', 'Chile (Republic of)', 'DISEC'),
('VITCDIS0020', 'Akshay N', '8667454763', 'Colombia', 'DISEC'),
('VITCDIS0021', 'S Naveen Siddarth', '9384837795', 'Republic of Congo', 'DISEC'),
('VITCDIS0022', 'Aishwarya Vasudevan ', '9080939778', 'Costa Rica', 'DISEC'),
('VITCDIS0023', 'Rahila Sultana ', '9945702700', 'Denmark', 'DISEC'),
('VITCDIS0024', 'Rajiv Kundu', '9810998684', 'Ethiopia', 'DISEC'),
('VITCDIS0025', 'Prakash', '9677080076', 'Fiji', 'DISEC'),
('VITCDIS0026', 'Niharika D Souza', '9902704031', 'Finland', 'DISEC'),
('VITCDIS0027', 'N Srividhya', '9998981845', 'Former Yugoslavia Republic of Macedonia', 'DISEC'),
('VITCDIS0028', 'Shashank Ravi Shankar', '9820842889', 'France', 'DISEC'),
('VITCDIS0029', 'R.Adithya Shri', '9003515180', 'Georgia', 'DISEC'),
('VITCDIS0030', 'Aditya Pal', '9654442580', 'Germany', 'DISEC'),
('VITCDIS0031', 'Tarun Nair', '7338438440', 'Greece', 'DISEC'),
('VITCDIS0032', 'Aksheyaa Akilan', '8939991166', 'India', 'DISEC'),
('VITCDIS0033', 'Joshua Jacob', '8428699980', 'Ireland', 'DISEC'),
('VITCDIS0034', 'Archishma Iyer', '9962817892', 'Italy', 'DISEC'),
('VITCDIS0035', 'Ayush Anupam Gupta ', '7016034287', 'Jordan', 'DISEC'),
('VITCDIS0036', 'M Palani', '9445636554', 'Kazakhstan', 'DISEC'),
('VITCDIS0037', 'Evangelin Leethiyal S', '9092516678', 'Kiribati', 'DISEC'),
('VITCDIS0038', 'H Anirudh', '7418208959', 'Latvia', 'DISEC'),
('VITCDIS0039', 'sai arun', '7010054851', 'Liberia', 'DISEC'),
('VITCDIS0040', 'Subhitsha R', '9566083743', 'Lithuania', 'DISEC'),
('VITCDIS0041', 'Navin Koushik M', '9791188138', 'Luxembourg', 'DISEC'),
('VITCDIS0042', 'B. Hari Vandana', '7036267651', 'Maldives', 'DISEC'),
('VITCDIS0043', 'PARTHEESWARAN', '9500309595', 'Mauritius', 'DISEC'),
('VITCDIS0044', 'Adithya Vikram', '9884520487', 'New Zealand', 'DISEC'),
('VITCDIS0045', 'Kshitij Nanda', '6382487397', 'Norway', 'DISEC'),
('VITCDIS0046', 'Akshay P M', '9092215570', 'Paraguay', 'DISEC'),
('VITCDIS0047', 'Paulson K Antony', '8851204119', 'Portugal', 'DISEC'),
('VITCDIS0048', 'Sudarshan Raghu ', '9940183889', 'Qatar', 'DISEC'),
('VITCDIS0049', 'Vivek Ravi ', '9962430780', 'Romania', 'DISEC'),
('VITCDIS0050', 'Shirish Dinakaran', '8220465735', 'Spain', 'DISEC'),
('VITCDIS0051', 'AymanShafeeShaik', '9566102326', 'Sierra Leone', 'DISEC'),
('VITCDIS0052', 'Vanathi G', '8939684993', 'Sweden', 'DISEC'),
('VITCDIS0053', 'Alfiya Simran Mohammed Ashraf ', '9074717001', 'United Arab Emirates', 'DISEC'),
('VITCDIS0054', 'Karthik pingle ', '8247839837', 'Bolivarian Republic of Venezuela', 'DISEC'),
('VITCCSW0001', 'H Heera', '6385311599', 'Albania', 'UNCSW'),
('VITCCSW0002', 'Divya M', '8124864277', 'Algeria', 'UNCSW'),
('VITCCSW0003', 'L.Swetha', '9884644777', 'Bahrain', 'UNCSW'),
('VITCCSW0004', 'Kaushik Sarma', '8939276958', 'Belgium', 'UNCSW'),
('VITCCSW0005', 'Aayush Sharma', '9082500574', 'Canada', 'UNCSW'),
('VITCCSW0006', 'ARVIND KRISHNAN', '9940592103', 'Chile', 'UNCSW'),
('VITCCSW0007', 'Iswarya NG', '9042085019', 'Comoros', 'UNCSW'),
('VITCCSW0008', 'Akshay Jayasoorya', '7397428622', 'Ecuador', 'UNCSW'),
('VITCCSW0009', 'Vikashni Mariyappan ', '8668104404', 'Equatorial Guinea', 'UNCSW'),
('VITCCSW0010', 'Harshitha Pramodh', '9080487198', 'Eritrea', 'UNCSW'),
('VITCCSW0011', 'Aathira R. Nair', '9426862500', 'Estonia', 'UNCSW'),
('VITCCSW0012', 'Veda Nair', '7338976510', 'Ireland', 'UNCSW'),
('VITCCSW0013', 'A Deepthi ', '7845042422', 'Kenya', 'UNCSW'),
('VITCCSW0014', 'Gaanapriya ', '9940666416', 'Kuwait', 'UNCSW'),
('VITCCSW0015', 'Sidhant Sharma', '8178585270', 'Norway', 'UNCSW'),
('VITCCSW0016', 'V. Shilpitha Prasad ', '9600082698', 'Qatar', 'UNCSW'),
('VITCCSW0017', 'Monisha', '9840558042', 'Liberia', 'UNCSW'),
('VITCCSW0018', 'Sarthak Kawatra', '9899160678', 'Spain', 'UNCSW'),
('VITCCSW0019', 'Adil Nadish', '7907418626', 'Tunisia', 'UNCSW'),
('VITCCSW0020', 'Shreyas Ashok Kumar', '9845324003', 'United Kingdom', 'UNCSW'),
('VITCSC0001', 'Pratik Sen', '7003708181', 'Arab Republic of Egypt', 'UNSC'),
('VITCSC0002', 'Austin Joseph', '9645354626', 'Australia', 'UNSC'),
('VITCSC0003', 'Nidhi Nallasivam', '9940586333', 'Kuwait', 'UNSC'),
('VITCSC0004', 'Rohan bhojwani', '7000463453', 'Netherlands', 'UNSC'),
('VITCSC0005', 'Varun Chandrasekar', '9940189301', 'Brazil', 'UNSC'),
('VITCSC0006', 'A R Sri nandhini ', '8056136268', 'Germany', 'UNSC'),
('VITCSC0007', 'Sreyas Venkataraman', '9444088003', 'Republic of India', 'UNSC'),
('VITCSC0008', 'Priyamvadha Sundar', '9445796803', 'Russian Federation', 'UNSC'),
('VITCSC0009', 'Imran Shaik', '8056151993', 'Moldova', 'UNSC'),
('VITCSC0010', 'Ananda Barat ', '8610425349', 'Arab Republic of Egypt', 'UNSC'),
('VITCSC0011', 'Mansi Parashar ', '8939286992', 'Australia', 'UNSC'),
('VITCSC0012', 'Abhilaash Jaishankar', '9080645289', 'Kuwait', 'UNSC'),
('VITCSC0013', 'DIVYANSH', '8294414892', 'Netherlands', 'UNSC'),
('VITCSC0014', 'Shreyaa Saravanan', '9176555845', 'Brazil', 'UNSC'),
('VITCSC0015', 'Adithya A Menon ', '8056136268', 'Germany', 'UNSC'),
('VITCSC0016', 'Rajagopal Subramanian Chandrashekhar', '9789947130', 'Republic of India', 'UNSC'),
('VITCSC0017', 'Pranesh HP', '8056177602', 'Russian Federation', 'UNSC'),
('VITCSC0018', 'Joe Anton Jeriff G', '9566012322', 'Moldova', 'UNSC'),
('VITCEC0001', 'Neha Ramesh ', '7200094122', 'Sebastian Kurz, Austria', 'EC'),
('VITCEC0002', 'Niresh Swamy', '8939338933', 'Charles Michel, Belgium', 'EC'),
('VITCEC0003', 'Thirulogasundhar Balakamatchi', '8939350725', 'Nicos Anastasiades, Cyprus', 'EC'),
('VITCEC0004', 'Sarthak Ghoshal', '7604015111', 'Emmanuel Macron, French Republic', 'EC'),
('VITCEC0005', 'Navneeth Venkatesan', '9791047458', 'Angela Merkel, Germany', 'EC'),
('VITCEC0006', 'S. Arjun Srivatsan ', '9841954195', 'Alexis Tsipras, Greece', 'EC'),
('VITCEC0007', 'Abhishek Venkatesh', '9790893943', 'Giuseppe Conte, Italy', 'EC'),
('VITCEC0008', 'Anand Krishnan', '8129229285', 'M?ris Ku?inskis, Latvia ', 'EC'),
('VITCEC0009', 'Srilekha A', '9442670104', 'Dalia Grybauskait?, Lithuania', 'EC'),
('VITCEC0010', 'sanjana vijay', '9840472950', 'Xavier Bettel, Luxembourg ', 'EC'),
('VITCEC0011', 'Naresh Barath.V.P', '9080514695', 'Joseph Muscat, Malta', 'EC'),
('VITCEC0012', 'Prema Anirudh ', '9080816879', 'Mark Rutte, Netherlands', 'EC'),
('VITCEC0013', 'Sushil Kumar rai', '9436830436', 'Peter Pellegrini, Slovakia', 'EC'),
('VITCEC0014', 'Sai Abhishek', '8248319559', 'Pedro S?nchez,Spain', 'EC'),
('VITCWH0001', 'Abhishek Sudke', '8838078743', 'ADM John M. Richardson, Chief of Naval Operations', 'WHSR'),
('VITCWH0002', 'Kushal Bahirwani', '9952901965', 'Gen David L. Goldfein, Chief of Staff- Air Force', 'WHSR'),
('VITCWH0003', 'Shivank Singh Chauhan', '9600267772', 'LTG Richard D. Clarke, Commander, US Special Operations Command', 'WHSR'),
('AP0000', 'Dwij Sheth', '7889037976', 'Amit Shah', 'AIPPM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
