-- --------------------------------------------------------
create database demo;
use demo;

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `date`, `views`) VALUES
(1, '2021-11-09', 5),
(2, '2021-10-21', 23),
(3, '2021-11-08', 12),
(4, '2021-11-10', 63);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
