-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2010 at 09:14 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `skh_patients`
--

CREATE TABLE `skh_patients` (
  `MRNO` char(255) default NULL,
  `AGE_AT_PRESENTATION` char(255) default NULL,
  `SEX` char(255) default NULL,
  `TEHSIL` char(255) default NULL,
  `DISTRICT` char(255) default NULL,
  `PROVINCE` char(255) default NULL,
  `COUNTRY` char(255) default NULL,
  `OCCUPATION` char(255) default NULL,
  `RELATION1` char(50) default NULL,
  `RELATION2` char(50) default NULL,
  `RELATION3` char(50) default NULL,
  `RELATION4` char(50) default NULL,
  `FAMILY_HISTORY_ICD1` char(255) default NULL,
  `FAMILY_HISTORY_ICD2` char(255) default NULL,
  `FAMILY_HISTORY_ICD3` char(255) default NULL,
  `FAMILY_HISTORY_ICD4` char(255) default NULL,
  `FAMILY_HISTORY_ICD_DESC1` char(50) default NULL,
  `FAMILY_HISTORY_ICD_DESC2` char(50) default NULL,
  `FAMILY_HISTORY_ICD_DESC4` char(50) default NULL,
  `FAMILY_HISTORY_ICD_DESC3` char(50) default NULL,
  `ADDICTION1` char(50) default NULL,
  `ADDICTION2` char(50) default NULL,
  `ADDICTION3` char(50) default NULL,
  `VALID_BASIS_OF_DIAGNOSIS1` char(255) default NULL,
  `VALID_BASIS_OF_DIAGNOSIS2` char(255) default NULL,
  `VALID_BASIS_OF_DIAGNOSIS3` char(255) default NULL,
  `VALID_BASIS_OF_DIAGNOSIS4` char(255) default NULL,
  `DIAGNOSIS_AT_SKM` char(255) default NULL,
  `DEFINITIVE_DIAGNOSIS_INSTITUTE` char(255) default NULL,
  `ORGAN` char(255) default NULL,
  `SUBSITE` char(255) default NULL,
  `MORPHOLOGY` char(255) default NULL,
  `GRADE` char(255) default NULL,
  `CLINICAL_STAGE` char(255) default NULL,
  `PATHOLOGICAL_STAGE` char(255) default NULL,
  `SEER_SUMMARY_STAGE` char(255) default NULL,
  `A_DEATH_CAUSE` char(255) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skh_patients`
--

