SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `employeeinfo` (
  `EmpID` varchar(20) NOT NULL,
  `EmployeeName` varchar(20) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `employeeinfo` (`EmpID`, `EmployeeName`, `ContactNo`, `UserName`, `Password`) VALUES
('EMP1', 'asif', '01783869974', 'karim', '01781885687'),
('EMP3', 'md asif karim', '017000000', 'afif', '12345678');


ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`EmpID`);
COMMIT;

