-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2014 at 01:21 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tod_idea`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `post` longtext NOT NULL,
  `media` varchar(200) NOT NULL,
  `submitted` datetime NOT NULL,
  `views` int(10) NOT NULL,
  `quote` varchar(500) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `trashed` tinyint(1) NOT NULL DEFAULT '0',
  `articleCat_id` int(11) NOT NULL,
  `oauth_uid` bigint(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `tags`, `post`, `media`, `submitted`, `views`, `quote`, `published`, `trashed`, `articleCat_id`, `oauth_uid`) VALUES
(2, 'poiyufctgfhgfgbyiuhj', '', 'thj7buihjfvythgfvyjhngb', '1415597469_946X381_93c0eff9ecde41e1672bd91d84e727ee.jpg', '2014-11-10 08:31:09', 0, 'poijhfyvthfedsxzew', 0, 0, 2, 0),
(3, 'New Blog Title', '', 'Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body.', '1415597854_946X381_93c0eff9ecde41e1672bd91d84e727ee.jpg', '2014-11-10 08:37:34', 0, 'Article highlight text here', 0, 1, 1, 0),
(4, 'New Blog Title', '', 'Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body.', '1415597944_946X381_93c0eff9ecde41e1672bd91d84e727ee.jpg', '2014-11-10 08:39:04', 0, 'Article highlight text here', 0, 1, 1, 0),
(5, 'This is a blog post', '', 'Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body.', '1415598076_946X381_0Y2YJ.jpg', '2014-11-10 08:41:16', 0, 'Article highlight text here', 0, 0, 1, 0),
(6, 'This is a blog post', '', 'Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body, Article Body.', '1415598270_946X381_0Y2YJ.jpg', '2014-11-10 08:44:31', 0, 'Article highlight text here', 1, 0, 2, 0),
(7, 'New Blog Title herherehrhehrhrheh', '', 'ioj98ioj09iuj', '1415599369_946X381__65947738_victim_afp624.jpg', '2014-11-10 09:02:49', 0, 'opiuhiuhn', 0, 1, 1, 0),
(8, 'This is my new title', '', 'cyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvd nuikbuyhnuj aohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohncyluj dfggnivb sdiomvdaohn', '1415603954_946X381_2013712138149734_20.jpg', '2014-11-10 10:19:15', 0, 'Ygbiusgyusujndg nuojsnuihnoisjmiklsjniujsnuyiskjn siuj', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `articlecat`
--

CREATE TABLE IF NOT EXISTS `articlecat` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `articlecat`
--

INSERT INTO `articlecat` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Updates');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(11) NOT NULL,
  `title` varchar(767) NOT NULL,
  `days` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `daytime` varchar(767) NOT NULL,
  `target` varchar(767) NOT NULL,
  `venue` varchar(767) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `published` int(1) NOT NULL DEFAULT '0',
  `trashed` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `days`, `month`, `daytime`, `target`, `venue`, `cost`, `description`, `photo`, `published`, `trashed`) VALUES
(1, 'Come buy premium tabs for less... Really less', '', '', 'Monday - Tuesday 7.00am - 9.00am', 'Children 4-6 Years', 'Munyonyo', '200000', 'Come buy premium tabs for less... Really less', '', 0, 1),
(2, 'My Event', '', '', 'Monday 2.00pm -3.00pm', 'Array', 'Sheraton Hotel Kampala', '400,000/=', 'This is a Tod EVENT sample...', '1415607768_946X381_2013712138149734_20.jpg', 0, 1),
(3, 'My Events', '', '', 'Monday 2.00pm -3.00pms', 'Arrays', 'Sheraton Hotel Kampalas', '400,000/=s', 'This is a Tod EVENT sample...sss', '1415607799_946X381_2013712138149734_20.jpg', 0, 1),
(4, 'My Event', '', '', 'Monday 2.00pm -3.00pm', 'Children 8 - 12 Years', 'Sheraton Hotel Kampala', '400,000/=', 'This is a Tod EVENT sample...', '1415607831_946X381_2013712138149734_20.jpg', 0, 1),
(5, 'My Event', '', '', 'Monday 2.00pm -3.00pm', 'Children 8 - 12 Yearsvvvvv', 'Sheraton Hotel Kampala', '400,000/=', 'This is a Tod EVENT sample...', '1415607887_946X381_2013712138149734_20.jpg', 0, 1),
(6, 'Tod Events', '2-24s', 'Jan', 'Tuesdays 7.00pm - 10.00pm', '3-4 years', 'Munyonyo', '500,000/=', 'This is a Tod Event', '1415611272_946X381_ghana_farmer-on-cell-phone.jpg', 0, 1),
(7, 'TECHKIDS HOLIDAY PROGRAM', 'Dec', '-Jan', 'Monday - Friday 8.00am - 1.00pm', 'Kids Aged 5-13 years', 'The Ark Kindergarten Bugolobi/Sunset Apartments Kiwatule', '250,000/=', '<p>Let&#39;s teach your kids how to code.</p>\r\n\r\n<p><strong>RSVP for this even</strong>t to book your child using the button below.<br />\r\nProgram:</p>', '1415611571_946X381_tab.jpg', 1, 0),
(8, 'TECH KIDS HOLIDAY PROGRAM 1', '1-19', 'Dec', 'Monday - Friday 8.00am - 1.00pm', 'Kids Aged 5-13 years', 'The Ark Kindergarten Bugolobi/Sunset Apartments Kiwatule', '250,000/=', 'Let''s teach your kids how to code. RSVP for this event to book your child using the button below. Bring your kid to the first ever coding event to teach Kids how to code.', '1415611699_946X381_kids.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
`id` int(11) NOT NULL,
  `title` varchar(767) NOT NULL,
  `text` longtext NOT NULL,
  `trashed` int(1) NOT NULL DEFAULT '0',
  `published` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `text`, `trashed`, `published`) VALUES
(5, 'Latest Job Offering November 10 2014', '<p>&nbsp;</p>\r\n\r\n<table style="color:rgb(0, 0, 0); font-family:georgia,helvetica,arial,sans-serif; font-size:11px; line-height:15.3999996185303px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/FARfCpXQUqI/non-profit-organization-jobs-chief-operation-officer.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_1" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Non-profit Organization Jobs - Chief Operating Officer</a></p>\r\n\r\n			<p>Posted:&nbsp;07 Nov 2014 12:00 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Chief Operating Officer Organization: Non-profit Organization Duty Station: Kampala, Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About US: A nonprofit Organization based in Kampala Uganda and involved in...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/bAyNKc8s4Ng/admin-jobs-motorcycle-messenger-entrepreneurs-financial-centre-efc.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_2" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Admin Jobs - Motorcycle Messenger at Entrepreneurs Financial Centre (EFC)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 11:50 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title:&nbsp; Motorcycle Messenger Organisation: Entrepreneurs Financial Centre (EFC) Duty Station: Kampala, Uganda About EFC: EFC Limited is a new microfinance institution in Kampala located in...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/cs2GI91-7Ws/finance-manager-job-vacancy-joint-clinical-research-centre-jcrc.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_3" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Finance Manager Job Vacancy - Joint Clinical Research Centre (JCRC)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 11:40 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Finance Manager Organisation: Joint Clinical Research Centre (JCRC) Duty Station:&nbsp; Kampala, Uganda Reports to: Director Finance &amp; Administration About JCRC: Joint Clinical...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/a7upnK_w4Qc/uegcl-job-vacancy-company-secretary.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_4" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">UEGCL Job Vacancy - Company Secretary</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 11:30 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Company Secretary Organisation: Uganda Electricity Generation Company Ltd (UEGCL) Duty Station: Kampala, Uganda Reports to: Board of Directors and Chief Executive Officer About...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/O6s-83MxHbg/entry-level-ngo-jobs-logistics-officer-brac-international.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_5" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Entry Level NGO Jobs - Logistics Officer at BRAC International</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 11:20 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Logistics Officer Organization: BRAC International Duty Station: Kampala, Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About BRAC: BRAC is one the largest Non-Governmental Development Organization in the...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/x4LhT7GPMms/non-profit-jobs-wash-engineer-lutheran-world-federation-lwf.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_6" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Non-profit Jobs - WASH Engineer at Lutheran World Federation (LWF)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 11:10 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: WASH Engineer Organization: Lutheran World Federation (LWF) Duty Station: Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About LWF: Lutheran World Federation (LWF) is part of the Lutheran World Federation...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/B4808qPqrIY/add-international-ngo-jobs-learning-m-e-and-programme-manager.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_7" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">ADD International NGO Jobs - Learning, M&amp;E and Programme Manager</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 11:00 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Learning, M&amp;E and Programme Manager Organisation: ADD International Duty Station: Kampala, Uganda About ADD: ADD International (Action on Disability and Development) has been...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/Ajpvc2LyXGo/2-airport-management-company-career-vacancies-security-investigations-officer.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_8" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">2 Airport Management Company Career Vacancies - Security Investigations Officer</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 10:45 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Security Investigations Officer (2 Career Vacancies) Organisation: Airport Management Company Duty Station:&nbsp; Kampala, Uganda Reports to: Chief of Security &amp; Safety About...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/HAGCB7-Utxw/human-resource-officer-job-vacancy-phoenix-assurance.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_9" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Human Resource Officer Job Vacancy - Phoenix Assurance</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 10:30 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Human Resource Officer Organization: Phoenix Assurance Duty Station: Kampala, Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About US: Phoenix Assurance one of the major players in the Insurance sector in...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/pU2lYJZNSus/world-vision-non-profit-jobs-logistics-and-administration-manager.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_10" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">World Vision Non-profit Jobs - Logistics and Administration Manager</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 10:15 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title:&nbsp; Logistics and Administration Manager Organisation: World Vision Reports to: Associate Director Support Services Duty Station: Kampala, Uganda About WV: World Vision is a...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/8DyNV_w3kmk/several-ngo-jobs-clts-specialists-international-relief-and-development-ird.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_11" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Several NGO Jobs - CLTS Specialists at International Relief and Development (IRD)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 10:00 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;CLTS Specialists (Several Jobs) Organisation: International Relief and Development (IRD) Duty Station: Kampala, Uganda About IRD: International Relief and Development (IRD), is a...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/2GF-_19UGbM/financial-controller-job-opportunity-profiles-international.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_12" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Financial Controller Job Opportunity - Profiles International</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 09:45 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Financial Controller Organization: Profiles International Duty Station: Fort Portal, Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About US: Profiles International seeks to recruit for its valuable client, a...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/RMgTnTzS_gg/several-administrator-career-jobs-lutheran-world-federation-lwf.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_13" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Several Administrator Career Jobs - Lutheran World Federation (LWF)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 09:30 PM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Administrators (Several Career Jobs)&nbsp; Organization: Lutheran World Federation (LWF) Duty Station: Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About LWF: Lutheran World Federation (LWF) is part of the...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/1Ydi_miFdog/un-jobs-logistics-assistance-world-food-programme-wfp.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_14" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">UN Jobs - Logistics Assistant at World Food Programme (WFP)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 01:20 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Logistics Assistant Organisation: World Food Programme (WFP) Duty Station: Gulu, Uganda Reports to: Head of Sub Office Grade: SB2/Mid (G4 Equivalent) Vacancy Announcement No.:&nbsp;...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/HwJN07CYsYk/compliance-officer-jobs-phoenix-assurance.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_15" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Compliance Officer Jobs - Phoenix Assurance</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 01:10 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Compliance Officer Organization: Phoenix Assurance Duty Station: Kampala, Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About US: Phoenix Assurance one of the major players in the Insurance sector in...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/H_BtW2Z46yM/non-profit-jobs-projects-officer-vsf-global-food-justice.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_16" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Non-profit Jobs - Projects Officer at VSF &ndash; Global Food Justice</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 02:33 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title:&nbsp; Projects Officer Organisation: VSF &ndash; Global Food Justice (VSF &ndash; GFJ) Reports to:&nbsp; Regional Coordinator or Administrator Duty Station:&nbsp; Kampala, Uganda About VSF - GFJ: Veterinarios...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/10GfIwGA_kM/umu-university-teaching-jobs-full-time-lecturer.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_17" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">UMU University Teaching Jobs - Full-Time Lecturer</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 12:50 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: Full-Time Lecturer Organization: Uganda Martyrs University (UMU) Duty Station: Kampala, Uganda Reports to: Dean, Faculty of Education About UMU: Uganda Martyrs University (UMU) is a...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/TWylVkbc4co/2-fresher-jobs-assistant-accountant-world-vision.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_18" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">3 Fresh Graduate Job Vacancies - Assistant Accountants at World Vision</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 02:10 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title:&nbsp; Assistant Accountant (3 Job Vacancies) Organisation: World Vision Reports to:&nbsp; Program Accountant Duty Station:&nbsp; Gulu, Adjumani and Butaleja, Uganda About WVU: World Vision Uganda...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/-EJPruSGt9w/world-vision-international-careers-grants-finance-manager.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_19" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">World Vision International Careers - Grants Finance Manager</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 12:30 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title:&nbsp; Grants Finance Manager Organisation: World Vision International&nbsp; Reports to: Finance Director Duty Station: Kampala, Uganda About WV: World Vision is a Christian Relief,...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/gK5nZIylXlk/internal-auditor-job-vacancy-phoenix-assurance.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_20" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">Internal Auditor Job Vacancy - Phoenix Assurance</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 12:20 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Internal Auditor Organization: Phoenix Assurance Duty Station: Kampala, Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About US: Phoenix Assurance one of the major players in the Insurance sector in...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/2_GvvEFpyoE/3-fresher-ngo-career-jobs-legal-assistants-nudipu.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_21" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">3 Fresher NGO Careers Jobs - Legal Assistants at NUDIPU</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 02:12 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Legal Assistant (3 Career Jobs) Organisation: NUDIPU Duty Station:&nbsp; Kampala, Iganga and Lira, Uganda Reports to: Programme Officer- Legal About NUDIPU: The National Union of...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span>\r\n\r\n			<div><span style="color:rgb(80, 0, 80)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://feedproxy.google.com/~r/HottestJobsInUganda/~3/zrxa1S-IYHY/ngo-careers-project-manager-eu-energy-facility-lutheran-world-federation-lwf.html?utm_source=feedburner&amp;utm_medium=email" name="14999ebc96a6aa36_149894e9824d01a7_149894aca09a247d_22" style="color: rgb(17, 85, 204); font-family: Georgia, ''Times New Roman'', serif; font-size: 12px;" target="_blank">NGO Careers - Project Manager-EU Energy Facility at Lutheran World Federation (LWF)</a></p>\r\n\r\n			<p>Posted:&nbsp;06 Nov 2014 12:10 AM PST</p>\r\n\r\n			<div style="margin: 0px; font-family: Georgia, Helvetica, Arial, sans-serif; line-height: 15.3999996185303px;">Job Title: &nbsp;Project Manager-EU Energy Facility&nbsp; Organization: Lutheran World Federation (LWF) Duty Station: Uganda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About LWF: Lutheran World Federation (LWF) is part of the...<br />\r\n			<br />\r\n			<span style="color:rgb(80, 0, 80)">Ugandan Jobline Jobs for All the latest jobs..</span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
`id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'alexshyaka@me.com');

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE IF NOT EXISTS `rsvp` (
`id` int(11) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `numkids` int(4) NOT NULL,
  `kids` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`id`, `parent`, `phone`, `email`, `numkids`, `kids`) VALUES
(2, 'Herbert Musoke', '0709283884', 'me@herbertmusoke.com', 23, 'Sendi John, 12 years\r\nAshaba Dorris, 8 years'),
(3, 'Alex Shyaka', '0179293938', 'alex.shyaka@todidea.org', 4, 'Brenda, 10\r\nSam , 8\r\nMolly, 6\r\nAnita, 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_article_articleCat1` (`articleCat_id`), ADD KEY `fk_article_user1` (`oauth_uid`);

--
-- Indexes for table `articlecat`
--
ALTER TABLE `articlecat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsvp`
--
ALTER TABLE `rsvp`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `articlecat`
--
ALTER TABLE `articlecat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rsvp`
--
ALTER TABLE `rsvp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
