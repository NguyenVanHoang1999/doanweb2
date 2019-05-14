-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2019 lúc 05:18 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdathang`
--

CREATE TABLE `ctdathang` (
  `masanpham` varchar(10) NOT NULL,
  `madathang` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `dongia` float NOT NULL,
  `thanhtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctsanpham`
--

CREATE TABLE `ctsanpham` (
  `masanpham` varchar(10) NOT NULL,
  `baohanh` text NOT NULL,
  `thuonghieu` varchar(10) NOT NULL,
  `monitor` text NOT NULL,
  `cpu` text NOT NULL,
  `ram` text NOT NULL,
  `graphics` text NOT NULL,
  `harddisk` text NOT NULL,
  `congketnoi` text NOT NULL,
  `banphim` text NOT NULL,
  `hedieuhanh` text NOT NULL,
  `trongluong` varchar(10) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `khac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ctsanpham`
--

INSERT INTO `ctsanpham` (`masanpham`, `baohanh`, `thuonghieu`, `monitor`, `cpu`, `ram`, `graphics`, `harddisk`, `congketnoi`, `banphim`, `hedieuhanh`, `trongluong`, `pin`, `khac`) VALUES
('SP001', '12 tháng', 'Asus', '14 INCH (1920x1080), Webcam, Finger print', 'Core i5-8250U (1.6GHz up to 3.4GHz, 6MB Cache)', '4GB Onboard DDR4 2400MHz, 1 Slot', 'Intel UHD Graphics 620, SHARE', '1TB 5400rpm, Khe mở rộng: M.2 2280 Sata', '2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'led, không phím số', 'Windows 10 Home SL 64bit', '1.43kg', '3 cell', 'NO LAN, Wifi AC, Reader, 326(W) x 226(D) x 18.8(H) mm'),
('SP002', '12 tháng', 'Asus', '14 INCH (1920 x 1080), Webcam', 'Intel Core i7-7500U (2.70 Ghz up to 3.50 Ghz, 4MB Cache)', '8GB LPDDR3 (Không nâng cấp được)', 'Intel HD Graphics 620', 'SSD M.2 NVMe 512GB', '1 x USB Type C, 2 x Thunderbolt', 'thuong', 'Win 10 Home', '1.17kg', '4cell', 'Wifi AC, Bluetooth 4.2, DVD-RW'),
('SP003', '12 tháng', 'Apple', '15 INCH ( 2880 x 1800 ) không cảm ứng', 'Intel Core i7-7820HQ ( 2.9 GHz - 3.9 GHz / 4 nhân, 8 luồng ) 8MB', '16GB', 'Intel HD Graphics 630 / AMDRadeon Pro 560 4GB', '512GB SSD', '', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR:	không hỗ trợ'),
('SP004', '12 tháng', 'Asus', '14 INCH (1920 x 1080), Webcam ', ' Intel Core i7-8550U (1.80 Ghz up to 4.0 Ghz, 8MB Cache)', ' 8GB onboard LPDDR3 (Không nâng cấp được)', ' Intel UHD Graphics 620', 'SSD M.2 SATA 512GB ', '1 x HDMI, 1 x USB Type C ', 'bàm phím', 'Win 10 Home', '3 cell ', '1.49 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.2, Card reader '),
('SP005', '12 tháng', 'Asus', '13,3 INCH, 1920x1080, Webcam', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '8GB Onboard, LPDDR3', ' Intel UHD Graphics 620', '512GB M.2', 'USB Type C / DisplayPort, 2 x Thunderbolt, Audio combo ', 'bàm phím', 'Windows 10 Home SL 64 bit ', '4 Cell ', '1.0 Kg ', ' NO LAN, Wifi AC, Reader, 31.1 x 21.3 x 1.29 cm '),
('SP006', '12 tháng', 'Asus', '15.6 INCH (1920 x 1080), Webcam HD ', ' Intel Core i5-7300HQ (2.50 Ghz up to 3.50 Ghz, 6M Cache)', ' 8GB DDR4 2400 MHz (2 slots - max 32GB)', ' NVIDIA GeForce GTX 1060 6GB + Intel HD Graphics 630', 'HDD 1TB 5400rpm ', 'HDMI, 2x USB 3.0, USB 2.0', 'Led Keyboard ', 'Win 10 Home', '4 cell ', '2.6 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.2, Card reader '),
('SP007', '12 tháng', 'Asus', '14 INCH (1920 x 1080), Webcam', ' Intel Core i7-8550U (1.8 Ghz up to 4.0 Ghz, 8MB Cache)', ' 8GB LPDDR3', ' NVIDIA GeForce MX150 2G + Intel UHD Graphics 620', 'SSD M.2 256GB ', 'HDMI,, 1x USB 3.0, 1x USB 2.0, 1x USB-Type C ', 'bàm phím', 'Win 10 Home', '3 cell ', '1.28 kg ', ' Wifi AC, Bluetooth 4.2'),
('SP008', '12 tháng', 'Asus', '13 INCH (1920 x 1080), Webcam', ' Intel Core i7-8550U (1.80 Ghz up to 4.00 Ghz, 8MB Cache)', ' 8GB LPDDR3 (Không nâng cấp)', ' Intel UHD Graphics 620', 'SSD 512GB', 'HDMI, USB Type-C, 2x USB 3.0', 'Led Keyboard ', 'Win 10 Home', '3 cell ', '0.98 Kg ', ' Wifi AC, Bluetooth 4.2, Finger print, Card reader '),
('SP009', '12 tháng', 'Asus', '14 INCH, 1920x1080, Touch Screen, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '8GB Onboard, LPDDR3, 2133MHz ', ' Intel UHD Graphics 620, SHARE ', '512GB M.2 2280', '2x USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.48 Kg ', ' NO LAN, Wifi AC, Reader, 327(W) x 226(D) x 13.9(H) mm '),
('SP010', '12 tháng', 'Asus', '14 INCH (1920 x 1080) ', ' Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6M Cache)', ' 8GB DDR3L 1866 MHz (Không nâng cấp được) ', ' Intel HD Graphics 620 ', 'SSD M.2 2280 512GB ', 'micro HDMI, USB 2.0, USB 3.0, USB Type-C 3.1 Gen1 Port/DP  ', 'bàm phím', 'Win 10 Home', '3 cell ', '1.29 Kg ', ' Wifi AC, Bluetooth 4.2, Webcam, Card reader  '),
('SP011', '12 tháng', 'Asus', '14 INCH, 1920x1080, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '8GB Onboard, LPDDR3', ' NVIDIA GeForce MX150 // Intel UHD Graphics 620, 2GB ', '256GB M.2', 'USB 2.0, USB 3.0, USB-C 3.1 Gen 1 port/DP, Micro HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64 bit ', '3 Cell ', '1.3 Kg ', ' NO LAN, Wifi AC, Reader, 324(W) x 225(D) x 15.9(H) mm '),
('SP012', '12 tháng', 'Asus', '15.6 INCH, 1920x1080, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x 4GB, DDR4, 2400MHz, 2 Slots ', ' NVIDIA GeForce MX150// Intel UHD Graphics 620, 2GB ', '256GB M.2 2280 Sata, Khe M.2: M.2 2280 Sata ', '2x USB 2.0, USB 3.0, USB-C, HDMI, Audio Combo, BT 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.8 Kg ', ' NO LAN, Wifi AC, Reader, 361.4(W) x 243.5(D) x 18(H) mm '),
('SP013', '12 tháng', 'Asus', '14 INCH, 1920x1080, Touch Screen, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '4GB Onboard, DDR4, 2400MHz, 1 Slot ', ' Intel HD Graphics 620, SHARE ', '256GB M.2 2280 (Sata, PCIe)', ' USB 3.0, 2x USB 2.0, USB-C, HDMI, Audio Combo, BT 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.5 Kg ', ' NO LAN, Wifi AC, Reader, 327(W) x 224.75(D) x 17.6(H) mm '),
('SP014', '12 tháng', 'Asus', '14 INCH (1366 x 768), Webcam', ' Intel Core i7-8550U (1.80 Ghz up to 4.0 Ghz, 8MB Cache)', ' 4GB DDR4 2400 MHz (2 slots)', ' NVIDIA GeForce MX110 2GB + Intel ỤHD Graphics 620', 'HDD 1TB 5400rpm ', '1x HDMI, 1x USB 3.0, 1x USB 2.0', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 cell ', '1.52 Kg ', ' Wifi n, Bluetooth 4.0, Card reader '),
('SP015', '12 tháng', 'Asus', '15.6 INCH, 1366 x 768, DVD-WR, Webcam', 'Core I7, 8550U, 1.8 GHz, 8M, Up to: 4 GHz ', '1x 4GB, DDR4, 2400MHz, 2 Slots ', ' NVIDIA GeForce 940MX // Intel HD Graphics 620, 2GB ', '1TB 5400rpm Sata3, Khe mở rộng: M2 2280 SATA ', 'USB 2.0, 2 x USB 3.0, USB-C, D-Sub, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64 bit ', '2 Cell ', '2.3 Kg ', '1 GB, AC, Reader, 380(W) x 251(D) x 23.2~23.2(H) mm '),
('SP016', '12 tháng', 'Asus', '15.6 INCH, 1920x1080, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', ' NVIDIA GeForce 940MX // Intel UHD Graphics 620, 2GB ', '1TB 5400rpm, Khe mở rộng: M.2 2280 Sata ', '2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.6 Kg ', ' NO LAN, Wifi AC, Reader, 362(W) x 245(D) x 17(H) mm '),
('SP017', '12 tháng', 'Asus', '14 INCH, 1920x1080, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '4GB Onboard, DDR4, 2400MHz ', ' Intel UHD Graphics 620, SHARE ', '1 Slot, 256GB M.2 2280', '2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.43 Kg ', ' NO LAN, Wifi AC, Reader, 326(W) x 226(D) x 18.8(H) mm '),
('SP018', '12 tháng', 'Asus', '15.6 INCH, 1920x1080, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' NVIDIA GeForce MX150 // Intel UHD Graphics 620, 2GB ', '1TB 5400rpm, Khe mở rộng: M.2 2280 Sata ', '2x USB 2.0, USB 3.0, USB-C, HDMI, Audio Combo, BT 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.65 Kg ', ' NO LAN, Wifi AC, 361.4(W) x 243.5(D) x 19.4(H) mm '),
('SP019', '12 tháng', 'Asus', '14 INCH, 1920x1080, Webcam HD ', ' Core i5-8250U, 1.6GHz, 6MB, Up to: 3.4GHz ', '4GB Onboard, DDR4, 2400MHz, 1 Slot ', ' Intel UHD Graphics 620, Share', ' 1TB 5400rpm, Khe mở rộng: M.2 2280 Sata/PCle ', '2x USB 2.0, USB 3.0, USB-C, HDMI, Finger print, Audio Combo, BT 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323(W) x 226(D) x 18(H) mm '),
('SP020', '12 tháng', 'MSI', '14 INCH, 1920x1080, Webcam HD', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x8GB, DDR4, 2666MHz, 1 Slot', 'Intel UHD Graphics 620, Share', '256GB M.2 2280 PCIe, Khe mở rộng: M.2 2280 Sata/PCIe', '2x USB-C, 2x USB 3.0, HDMI, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bit', '4 cell', '1.9 kg', 'LAN: No LAN, Wifi AC, Reader, 322(W) x 222(D) x 15.9(H) mm'),
('SP021', '12 tháng', 'MSI', '18.4 INCH, 1920x1080, Webcam HD', 'CM246, i7 8850H, 2.6GHz, 9M, Up to: 4.3GHz', '2x16GB, DDR4, 2666MHz, 4 Slots', ': NVIDIA GeForce GTX 1080 SLI, 8GB', '1TB + 512GB NBMe PCIe Gen 3', '3x USB-A 3.1 Gen 1, 2x USB-A 3.1 Gen 2, USB-C, Mini DisplayPort, HDMI, Bluetooth 5.0', 'Led Keyboard', 'Windows 10 Home SL 64bit', '8 cell', '5.5 kg', 'LAN: Multi-Gig LAN, Wifi AC, Reader, 458(W) x 339(D) x 42-69(H) mm'),
('SP022', '12 tháng', 'MSI', '17.3 INCH, 1920x1080, Webcam HD', 'CM246, i9 8950HK, 2.9GHz, 12M, Up to: 4.8GHz', '2x16GB, DDR4, 2666MHz, 4 Slots', 'NVIDIA GeForce GTX 1080, 8GB', '1TB + 256GB NVMe PCIe Gen 3', '5x USB-A 3.1 Gen 2, USB-C, HDMI, Mini DisplayPort, Bluetooth 5.0', 'Led Keyboard', 'Windows 10 Home SL 64bit', '8 cell', '4.56 kg', 'LAN: Multi-Gig LAN, Wifi AC, Reader, 428(W) x 314(D) x 31-58(H) mm'),
('SP023', '12 tháng', 'MSI', '17.3 INCH, 1920x1080, Webcam HD', 'CM246, i7 8750H, 2.2GHz, 9M, Up to: 4.1GHz', '2x16GB, DDR4, 2666MHz, 4 Slots', 'NVIDIA GeForce GTX 1070, 8GB', '1TB + 256GB NBMe PCIe Gen 3', '5x USB-A 3.1 Gen 2, USB-C, HDMI, Mini DisplayPort, BT 5.0', 'Led Keyboard', 'Windows 10 Home SL 64bit', '8 cell', '4.56 kg', 'LAN: Multi-Gig LAN, Wifi AC, Reader, 428(W) x 314(D) x 31-58(H) mm'),
('SP024', '12 tháng', 'MSI', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i7-8750H (2.20 Ghz up to 4.10 Ghz, 9MB Cache)', '16GB DDR4 2666 MHz (2 slots - tối đa 32GB)', 'GeForce GTX 1070 8GB + Intel UHD Graphics 630', 'SDD 512GB M.2 2280 NVMe', '1x HDMI, 1x Mini DisplayPort, 1x USB Type C(Gen2/DisplayPort/ThunderBolt 3), 2x USB 3.1 (Gen1), 1x USB 3.1 (Gen2', 'thường', 'Windows 10 Home SL 64-bits', '4 cell', '1.88 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, FingerPrint'),
('SP025', '12 tháng', 'MSI', '17.3 INCH (1920 x 1080), Webcam', 'Intel Core i7-8750H (2.20 Ghz up to 4.10 Ghz, 9MB Cache)', '2x 8GB DDR4 2666 MHz (2 slots)', 'NVIDIA GeForce GTX 1070 8GB + Intel UHD Graphics 630', 'HDD 1TB 7200rpm + SSD 256GB. Hỗ trợ khe cắm M.2', 'HDMI, miniDisplayport, USB Type-C, 3x USB 3.0', 'thường', 'Win 10 Home', '6 cell', '2.89 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, Card reader, RGB Keyboard'),
('SP026', '12 tháng', 'MSI', '15.6 INCH (1920 x 1080) 144 Hz, Webcam', 'Intel Core i7-8750H (2.20 Ghz up to 4.10 Ghz, 9MB Cache)', '2x 8GB DDR4 2400 MHz (2 slots - tối đa 32GB)', 'NVIDIA GeForce GTX 1060 6GB + Intel UHD Graphics 630', 'SSD M.2 NVMe 256GB. Hỗ trợ khe cắm M.2: M.2 NVMe', 'mini Displayport, HDMI, Thunderbolt 3, 3x USB 3.1', 'Led Keyboard', 'Win 10 Home', '4 cell', '1.88 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, Card reader'),
('SP027', '12 tháng', 'MSI', '17.3 INCH, 1920x1080, Webcam HD', 'Core i7, 8750H, 2.2GHz, 9M, Up to: 4.1GHz', '1x8GB, DDR4, 2666MHz, 2 Slots', 'NVIDIA GeForce GTX 1060, 6GB', '128GB M.2 + 1TB 7200rpm, Khe mở rộng: 2x M.2 2280 (Sata/PCIe)', 'USB-C Gen2, 3x USB-A Gen1/Gen2, HDMI, Mini DisplayPort, BT 5.0', 'Led Keyboard', 'Windows 10 Home SL 64bit', '6 cell', '2.67 kg', 'LAN: 1G, Wifi AC, Reader, 419(W) x 287(D) x 32(H) mm'),
('SP028', '12 tháng', 'MSI', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i7-8750H (2.20 Ghz up to 4.10 Ghz, 9MB Cache)', '2x8GB DDR4 2666 MHz (2 slots)', 'NVIDIA GeForce GTX 1060 6GB + Intel UHD Graphics 630', 'HDD 1TB 7200rpm + SSD M.2 PCIe 128GB. Hỗ trợ khe cắm M.2: M.2 PCIe/SATA', 'HDMI, miniDisplayport, USB Type-C, 3x USB 3.0', 'Led Keyboard', 'Win 10 Home', '6 cell', '2.2 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, Card reader'),
('SP029', '12 tháng', 'MSI', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i7-8750H (2.20 Ghz up to 4.10 Ghz, 9MB Cache)', '16GB DDR4 2666 MHz (2 slots - tối đa 32GB)', 'NVIDIA GeForce GTX 1050 Ti 4GB + Intel UHD Graphics 630', 'HDD 1TB 7200rpm + SSD M.2 NVMe 128GB. Hỗ trợ khe cắm M.2: M.2 NVMe/SATA', 'HDMI, miniDisplayport, USB Type-C, 3x USB 3.1', 'Led Keyboard', 'Win 10 Home', '6 cell', '2.2 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, Card reader'),
('SP030', '12 tháng', 'MSI', '14 INCH (1920 x 1080), HD Webcam', 'Intel Core i7-8550U (1.8 Ghz up to 4.0 Ghz, 8MB Cache)', '8GB DDR4 2666 MHz (1 slots - tối đa 16GB)', 'NVIDIA GeForce MX150 2GB + Intel UHD Graphics 620', 'SSD M.2 NVMe 256GB. Hỗ trợ khe cắm M.2: M.2 SSD SATA/NVMe', 'HDMI, 2x USB Type-C, 2x USB 3.1', 'thường', 'Win 10 Home', '4 cell', '1.19 kg', 'Wifi AC, Bluetooth 4.2, SD Card reader'),
('SP031', '12 tháng', 'MSI', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i7-8750H (2.20 Ghz up to 4.10 Ghz, 9MB Cache)', '8GB DDR4 2666 MHz (2 slots - tối đa 32GB)', 'NVIDIA GeForce GTX 1050 4GB + Intel UHD Graphics 630', 'HDD 1TB 5400rpm + SSD M.2 128GB. Hỗ trợ khe cắm M.2: Có', 'HDMI, miniDisplayport, USB Type-C, 3x USB 3.0', 'Led Keyboard', 'Win 10 Home', '6 cell', '2.2 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, Card reader'),
('SP032', '12 tháng', 'MSI', '15.6 INCH, 1920x1080, Webcam', 'Core i7, 7700HQ, 2.8GHz, 6M, Up to: 3.8GHz', '32GB, 1x8GB, DDR4, 2400MHz, 2 Slots', 'NVIDIA GeForce GTX 1050 Ti // Intel HD Graphics 630, 4GB', '1TB 7200rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', 'USB 2.0, 2x USB 3.0, USB-C, Mini DP, HDMI, Bluetooth 4.2', 'Led Keyboard', 'MacOS', '6 cell', '2.2 kg', 'LAN: 1G, Wifi AC, Reader, 383 x 260 x 22-29 mm'),
('SP033', '12 tháng', 'MSI', '14 INCH, 1920x1080, Webcam HD', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x8GB, DDR4, 2666MHz, 1 Slot', 'NVIDIA GeForce MX150// Intel UHD Graphics 620, 2GB', '256GB M.2 2280 PCIe, Khe mở rộng: M.2 2280 Sata/PCIe', '2x USB-C, 2x USB 3.0, HDMI, BT 4.2, 4 Cell', 'Led Keyboard', 'Windows 10 Home SL 64bit', '4 cell', '1.19 kg', 'LAN: No LAN, Wifi AC, Reader, 322(W) x 222(D) x 15.9(H) mm'),
('SP034', '12 tháng', 'MSI', '15.6 INCH, 1920x1080, Webcam HD', 'Core i5, 8300H, 2.3GHz, 8M, Up to: 4.0GHz', '1x8GB, DDR4, 2666MHz, 2 Slots', 'NVIDIA GeForce GTX 1050Ti // Intel UHD Graphics 630, 4GB', '1TB 7200rpm, Khe mở rộng: M.2 2280 (Sata, PCIe)', '3x USB 3.0, USB-C, HDMI, Audio Combo, Bluetooth 5.0', 'Led Keyboard', 'Windows 10 Home SL 64bit', '3 cell', '1.86 kg', 'LAN: 1G, Wifi AC, 359(W) x 254(D) x 21.7(H) mm'),
('SP035', '12 tháng', 'MSI', '15.6 INCH, 1920x1080, Webcam HD', 'Core i5, 8300H, 2.3GHz, 8M, Up to: 4.0GHz', '1x8GB, DDR4, 2666MHz, 2 Slots', 'NVIDIA GeForce GTX 1050 // Intel UHD Graphics 630, 4GB', '128GB M.2 2280 (Sata, PCIe) + 1TB 5400rpm', '3x USB 3.0, USB-C, HDMI, Audio Combo', 'Led Keyboard', 'Windows 10 Home SL 64bit', '3 cell', '1.86 kg', 'LAN: 1G, Wifi AC, 359(W) x 254(D) x 21.7(H) mm'),
('SP036', '12 tháng', 'DELL', ' 14 INCH, 1366x768, DVD-RW, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots, ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm ', 'USB 2.0, 2x USB 3.0, HDMI, Audio Combo, BT 4.1', 'bàm phím', ' Ubuntu ', '4 Cell ', ' 2.0 Kg ', ' LAN: 100M, Wifi AC, Reader, 345(W) x 243(D) x 23.35(H) mm '),
('SP037', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam, Finger print, Led_KB ', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '16GB, DDR4, 2400MHz ', ' Intel UHD Graphics 620, SHARE ', '512GB M.2 2280', 'USB 3.1 Gen1 Type C (Port, DP), 2x USB 3.1 Gen1, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.5 Kg ', ' LAN: NO LAN, Wifi AC, Reader, 309.66(W) x 215.7(D) x 15.19(H) mm '),
('SP038', '12 tháng', 'DELL', '15.6 INCH, 1920x1080, Webcam HD, Led_KB ', 'Core i7, 8750H, 2.2GHz, 9M, Up to: 4.1GHz ', '1x8GB, DDR4, 2666MHz, 2 Slots ', 'NVIDIA GeForce GTX 1050Ti // Intel UHD Graphics 630, 4GB', '1TB 5400rpm + 128GB M.2 SATA, Khe mở rộng: M.2 2280 SATA/PCle ', ' Thunderbolt, 3x USB 3.0, HDMI, Audio Combo, Finger print, BT 5.0', 'bàm phím', 'Windows 10 Home SL 64bit ', '4 Cell ', '2.7 Kg ', ' LAN: 1G, Wifi AC, Reader, 389(W) x 274.7(D) x 24.95(H) mm '),
('SP039', '12 tháng', 'DELL', '15.6 INCH, 1920x1080, Webcam HD, Led_KB ', ' Intel Core i7-8550U (1.80 Ghz up to 4.0 Ghz, 8MB Cache)', ' 8GB DDR4 2400 MHz (2 slots - tối đa 32GB ', ' NVIDIA GeForce MX130 4GB + Intel UHD Graphics 620', 'HDD 1TB 5400rpm + SSD M.2 128GB', 'HDMI, DVI-D, 3x USB 3.0, 1x USB Type C ', 'bàm phím', 'Win 10 Home', '3 cell ', '1.95 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.1, DVD-RW, Card reader '),
('SP040', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Touch Screen, Webcam, Led_KB ', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '1x8GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm ', 'USB 2.0, 2x USB 3.0, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.68 Kg ', ' NO LAN, Wifi AC, Reader, 324(W) x 224.7(D) x 19.5(H) mm '),
('SP041', '12 tháng', 'DELL', '15.6 INCH, 1920x1080, DVD-RW, Webcam, Led_KB ', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '1x8GB, DDR4, 2400MHz, 2 Slots ', 'AMD Radeon(R) 530 // Intel UHD Graphics 620, 4GB ', '2TB 5400rpm, Khe mở rộng: M.2 2280 (Sata/PCIe 3 x4)', ' USB 2.0, 2x USB 3.0, USB 3.1 Gen1 (Type C) port/DisplayPort, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '2.12 Kg ', ' LAN: 100M, Wifi AC, Reader, 22.70 x 380 x 258 mm '),
('SP042', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', 'AMD Radeon(R) 530 // Intel UHD Graphics 620, 2GB ', '256GB M.2 2280', 'HDMI, 2x USB 3.0 (1x Power Share), USB-C 3.1 Gen1 Port/DP, Bluetooth 4.1', 'Led_KB ', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.42 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP043', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam', ' Intel Core i5-8250U (1.6 Ghz up to 3.4 Ghz, 6MB Cache)', ' 4GB DDR4 2400 MHz (2 slots - tối đa 16GB)', ' Intel UHD Graphics 620', 'SSD M.2 SATA 256GB ', 'HDMI, 2x USB 3.0, USB 2.0', 'bàm phím', ' Win 10', '3 cell ', '1.62 Kg ', ' Wifi AC, LAN 1Gb, Bluetooth 4.1, Card reader '),
('SP044', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, Share ', '128GB, Khe mở rộng: M.2 2280 (Sata, PCIe)', ' 2x USB 3.0, USB-C/ DP, HDMI, Finger print, BT 4.1', 'Led_KB ', 'Windows 10 Home SL English 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP045', '12 tháng', 'DELL', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', 'AMD Radeon 530 // Intel UHD Graphics 620, 2GB ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' USB-C 3.1 Gen1 Port/DP, 2x USB 3.1 Gen1, USB 2.0, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '2.33 Kg ', ' LAN: 100Mbps, Wifi AC, Reader, 380(W) x 258(D) x 22.7(H) mm '),
('SP046', '12 tháng', 'DELL', '14 INCH, 1920x1080, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4, Sata)', ' 2x USB 3.0, USB-C 3.1 Gen1 Port/DP, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.66 Kg ', ' LAN: 1G, Wifi AC, Reader, 343(W) x 240.8(D) x 16.1(H) mm '),
('SP047', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam HD ', 'Core i3, 8130U, 2.2GHz, 4M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '128GB M.2 2280', '2x USB 3.0, USB-C/DP, HDMI, Audio Combo, BT 4.2 ', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP048', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, Share ', '128GB, Khe mở rộng: M.2 2280 (Sata, PCIe)', ' 2x USB 3.0, USB-C/ DP, HDMI, Finger print, BT 4.1', 'Led_KB ', 'Windows 10 Home SL English 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP049', '12 tháng', 'DELL', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', 'AMD Radeon 530 // Intel UHD Graphics 620, 2GB ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' USB-C 3.1 Gen1 Port/DP, 2x USB 3.1 Gen1, USB 2.0, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '2.33 Kg ', ' LAN: 100Mbps, Wifi AC, Reader, 380(W) x 258(D) x 22.7(H) mm '),
('SP050', '12 tháng', 'DELL', '14 INCH, 1920x1080, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4, Sata)', ' 2x USB 3.0, USB-C 3.1 Gen1 Port/DP, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.66 Kg ', ' LAN: 1G, Wifi AC, Reader, 343(W) x 240.8(D) x 16.1(H) mm '),
('SP051', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam HD ', 'Core i3, 8130U, 2.2GHz, 4M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '128GB M.2 2280', '2x USB 3.0, USB-C/DP, HDMI, Audio Combo, BT 4.2 ', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP052', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam HD ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, Share ', '128GB, Khe mở rộng: M.2 2280 (Sata, PCIe)', ' 2x USB 3.0, USB-C/ DP, HDMI, Finger print, BT 4.1', 'Led_KB ', 'Windows 10 Home SL English 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP053', '12 tháng', 'DELL', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', 'AMD Radeon 530 // Intel UHD Graphics 620, 2GB ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' USB-C 3.1 Gen1 Port/DP, 2x USB 3.1 Gen1, USB 2.0, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '2.33 Kg ', ' LAN: 100Mbps, Wifi AC, Reader, 380(W) x 258(D) x 22.7(H) mm '),
('SP054', '12 tháng', 'DELL', '14 INCH, 1920x1080, Webcam, Finger print ', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4, Sata)', ' 2x USB 3.0, USB-C 3.1 Gen1 Port/DP, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.66 Kg ', ' LAN: 1G, Wifi AC, Reader, 343(W) x 240.8(D) x 16.1(H) mm '),
('SP055', '12 tháng', 'DELL', '13.3 INCH, 1920x1080, Webcam HD ', 'Core i3, 8130U, 2.2GHz, 4M, Up to: 3.4GHz ', '1x4GB, DDR4, 2400MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '128GB M.2 2280', '2x USB 3.0, USB-C/DP, HDMI, Audio Combo, BT 4.2 ', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.4 Kg ', ' NO LAN, Wifi AC, Reader, 323.9(W) x 219.9(D) x 15.81(H) mm '),
('SP056', '12 tháng', 'HP', '13 INCH (Màn hình gương), 3000x2000, Touch Screen, Webcam HD', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz', '8GB Onboard, LPDDR3, (No upgrade),', 'Intel UHD Graphics 620, SHARE', '256GB PCIe SSD', 'USB-C/DP, 2x Thunderbolt, Audio Combo, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Pro 64bit', '4 cell', '1.25 kg', 'LAN: NO LAN, Wifi AC, 305.8(W) x 205(D) x 15.8(H) mm'),
('SP057', '12 tháng', 'HP', '13 INCH 3000x2000, Touch Screen, Webcam 5MP Front +8MP', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '8 GB Onboard, LPDDR3, No Upgrade', 'Intel UHD Graphics 620, Share', '256GB', '1x USB-C/ DP/ Data/ Power Delivery, 2x Thunderbolt, BT 4.2', 'Led Keyboard', 'Windows 10 Pro 64 bit', '4 cell', '0.82 kg', 'LAN: No LAN, Wifi AC, Reader, 300(W) x 231.4(D) x 7.9(H) mm'),
('SP058', '12 tháng', 'HP', '13.3 INCH (1920 x 1080), Cảm ứng, Webcam', 'Intel Core i7-8550U (1.80 Ghz up to 4.00 Ghz, 8MB Cache)', '8GB LPDDR3 (Không nâng cấp được)', 'Intel HD Graphics 620', 'SSD M.2 256GB. Hỗ trợ khe cắm M.2: Có', '2x Thunderbolt, USB Type-C, kèm cáp USB Type-C to HDMI', 'Led Keyboard', 'Win 10 Home', '3 cell', '1.3 kg', 'Wifi AC, Bluetooth 4.2, Finger print, Card reader'),
('SP059', '12 tháng', 'HP', '13.3 INCH (1920 x 1080), Webcam', 'Intel Core i7-8550U (1.80 Ghz up to 4.0 Ghz, 8MB Cache)', '8GB LPDDR3 (Không nâng cấp được)', 'Intel UHD Graphics 620', 'SSD M.2 NVMe 256GB. Hỗ trợ khe cắm M.2: M.2 SATA / NVMe', '1x USB Type C, 2x Thunderbolt', 'thường', 'Win 10 Home', '4 cell', '1.11 kg', 'Wifi AC, Bluetooth 4.2'),
('SP060', '12 tháng', 'HP', '13.3 INCH (1920 x 1080)', 'Intel Core i7-8550U (1.80 Ghz up to 4.00 Ghz, 8MB Cache)', '8GB LPDDR3 2133 MHz (Không nâng cấp được)', 'Intel UHD Graphics 620', 'SSD M.2 256GB. Hỗ trợ khe cắm M.2: Có', 'CKN', 'Led Keyboard', 'Win 10 Home', '4 cell', '1.29 kg', 'Wifi AC, Bluetooth 4.2, Finger print, Webcam, Card reader'),
('SP061', '12 tháng', 'HP', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i5-8300H (2.3 Ghz up to 4.0 Ghz, 8MB Cache)', '8GB DDR4 2666 MHz (2 slots - tối đa 16GB)', 'NVIDIA GeForce GTX 1050 4GB + Intel UHD Graphics 630', 'HDD 1TB 7200rpm. Hỗ trợ khe cắm M.2: M.2 SATA/PCIe', 'HDMI, 3x USB 3.0, USB Type C/DisplayPort', 'thường', 'Win 10', '3 cell', '1.27 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 5.0, Card reader'),
('SP062', '12 tháng', 'HP', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i5-7300HQ (2.50 Ghz up to 3.50 Ghz, 6MB Cache)', '8GB DDR4 2666 MHz (2 slots)', ': NVIDIA GeForce GTX 1050 4GB + Intel UHD Graphics 630', 'HDD 1TB 7200rpm + SSD M.2 128GB. Hỗ trợ khe cắm M.2: M.2 PCIe/SATA', 'HDMI, USB Type-C/DP, 3x USB 3.0', 'Led Keyboard', 'Win 10 Home', '4 cell', '2.29 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 4.2, DVD-RW, Card reader'),
('SP063', '12 tháng', 'HP', '13.3 INCH 1920x1080, Webcam, Finger print', 'Core i7, 8550U, 1.8GHz, 6M, Up to: 4GHz', '1x8GB, DDR4, 2400MHz, 2 Slots', 'Intel UHD Graphics 620, SHARE', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', 'USB-C 3.1 Gen 1 Port/DisplayPort, 2x USB 3.1 Gen 1, HDMI, D-Sub, Bluetooth 4.1', 'Led Keyboard', 'MacOS', '3 cell', '1.6 kg', 'LAN: 1G, Wifi AC, Reader, 326(W) x 234(D) x 19.8(H) mm'),
('SP064', '12 tháng', 'HP', '13.3 INCH (1920 x 1080)', 'Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 3MB Cache)', '8GB LPDDR3 2133 MHz (Không nâng cấp được)', 'Intel UHD Graphics 620', 'SSD M.2 128GB. Hỗ trợ khe cắm M.2: Có', 'USB Type-C/DP, 2x USB 3.1', 'Led Keyboard', 'Win 10 Home', '4 cell', '1.23 kg', 'Wifi AC, Bluetooth 4.2, Finger print, Webcam, Card reader'),
('SP065', '12 tháng', 'HP', '15.6 INCH (1920 x 1080), Webcam', 'Intel Core i5-7500U (2.70 Ghz up to 3.50 Ghz, 4MB Cache)', '4GB DDR4 2666 MHz (2 slots)', 'NVIDIA GeForce 940MX 2GB + Intel HD Graphics 620', 'HDD 1TB 5400rpm. Hỗ trợ khe cắm M.2: Có', 'HDMI, USB Type-C, 2x USB 3.0', 'thường', 'Win 10 Home', '3 cell', '2.15 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 4.2, DVD-RW, Card reader'),
('SP066', '12 tháng', 'HP', '14 INCH 1920x1080, Touch Screen, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x4GB, DDR4, 2400MHz, 2 Slots', 'Intel UHD Graphics 620, SHARE', '500GB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4)', '2x USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'thường', 'Windows 10 Home SL 64bit', '3 cell', '1.78 kg', 'LAN: NO LAN, Wifi AC, Reader, 334.8(W) x 226.9(D) x 19.9(H) mm'),
('SP067', '12 tháng', 'HP', '13.3 INCH 1920x1080, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '4GB Onboard, LPDDR3', 'Intel UHD Graphics 620, SHARE', '128GB M.2', '2x USB-C 3.1 Gen 1 Port/DisplayPort, 2x USB 3.1 Gen 1, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bit', '6 cell', '1.23 kg', 'LAN: NO LAN, Wifi AC, Reader, 305.4(W) x 215.6(D) x 13.9(H) mm'),
('SP068', '12 tháng', 'HP', '14 INCH (1920 x 1080), Cảm ứng, Webcam', 'Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6MB Cache)', '4GB DDR4 2666 MHz (2 slots)', 'Intel UHD Graphics 620', 'HDD 1TB 5400rpm. Hỗ trợ khe cắm M.2: M.2 NVMe/SATA', 'Win 10 Home', 'thường', 'HDH', '3 cell', '1.76 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 4.2, Card reader'),
('SP069', '12 tháng', 'HP', '14 INCH 1920x1080, Touch Screen, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x4GB, DDR4, 2400MHz, 2 Slots', 'Intel UHD Graphics 620, SHARE', '500GB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4)', '2x USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'thường', 'Windows 10 Home SL 64bit', '3 cell', '1.78 kg', 'LAN: NO LAN, Wifi AC, Reader, 334.8(W) x 226.9(D) x 19.9(H) mm'),
('SP070', '12 tháng', 'HP', '13 INCH 1920x1080, Webcam', 'Core i5, 7200U, 2.5GHz, 3M, Up to: 3.1GHz', '4GB, LPDDR3, (No upgrade)', 'Intel HD Graphics 620', '128GB M.2, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', 'USB 3.0, 2x USB-C, USB-C to D-Sub, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bits', '4 cell', '1.23 kg', 'LAN: NO LAN, Wifi AC, Reader, 305.4(W) x 215.6(D) x 13.9(H) mm'),
('SP071', '12 tháng', 'HP', '13.3 INCH, 1366x768, Webcam, Finger print', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x4GB, DDR4, 2400MHz', 'Intel UHD Graphics 620, SHARE', '2 Slots, 256GB M.2', 'USB-C 3.1 Gen 1 Port/DisplayPort, 2x USB 3.1 Gen 1, HDMI, D-Sub, Bluetooth 4.1', 'Led Keyboard', 'MacOS', '3 cell', '1.5 kg', 'LAN: 1G, Wifi AC, Reader, 326(W) x 234(D) x 19.8(H) mm'),
('SP072', '12 tháng', 'HP', '13.3 INCH, 1366x768, Webcam, Finger print', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x4GB, DDR4, 2400MHz, 2 Slots', 'Intel UHD Graphics 620, SHARE', '500GB 7200rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', 'USB-C 3.1 Gen1 Port/DP, 2x USB 3.0, HDMI, D-Sub, Bluetooth 4.1', 'Led Keyboard', 'MacOS', '3 cell', '1.6 kg', 'LAN: 1G, Wifi AC, Reader, 326(W) x 234(D) x 19.8(H) mm'),
('SP073', '12 tháng', 'Lenovo', '14 INCH, 1366x768, Webcam', 'Core i3, 6006U, 2.0GHz, 3M', '4GB, DDR4, 2133MHz', 'Intel HD Graphics 520, SHARE', '1 Slot, 500GB 5400rpm', 'USB 2.0, USB-C, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit', '2 Cell', '2.1 kg', 'LAN: 1G, Wifi AC, Reader, 338.3(W) x 249.9(D) x 22.7(H) mm'),
('SP074', '12 tháng', 'Lenovo', '15.6 INCH (1920 x 1080)', 'Intel Core i7-7700HQ (2.80 Ghz up to 3.80 Ghz, 6M Cache)', '8GB DDR4 2400 MHz (2 slots - max 32GB)', 'NVIDIA GeForce GTX 1050 4GB + Intel HD Graphics 630', 'HDD 1TB 5400rpm + SSD M.2 128GB', 'HDMI, USB Type-C/DP, 2x USB 3.0, USB 2.0', 'Led Keyboard', 'Win 10 Home', '3 cell', '2.4 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 4.2, Webcam HD, Card reader'),
('SP075', '12 tháng', 'Lenovo', '13.3 INCH (1920 x 1080), Webcam', 'Intel Core i7-8550U (1.80 Ghz up to 4.00 Ghz, 8MB Cache)', '8GB DDR4 2400 MHz (2 slots)', 'Intel UHD Graphics 620', 'SSD M.2 256GB ', 'HDMI, 2x USB Type-C, 2x USB 3.0', 'Led Keyboard', 'Không', '3 cell', '1.47 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 4.2, DVD-RW, Card reader'),
('SP076', '12 tháng', 'Lenovo', '13.3 INCH, 1920x1080, Webcam, Finger print', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz', '8GB Onboard, DDR4, 2400MHz', 'Intel UHD Graphics 620, SHARE', '256GB M.2 2280', '2x USB 3.0, USB-C 3.1 (DP + Power Delivery + Thunderbolt), USB-C 3.1 (Power Delivery), Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bit', '4 Cell', '1.11 kg', 'LAN: NO LAN, Wifi AC, Reader, 305.9(W) x 213.8(D) x 13.6(H) mm'),
('SP077', '12 tháng', 'Lenovo', '15.6 INCH, 1920x1080, Webcam', 'Core i5, 7300HQ, 2.5GHz, 6M, Up to: 3.5GHz', '1x8GB, DDR4, 2400MHz, 2 Slots', 'NVIDIA GeForce GTX 1050// Intel HD Graphics 630, 4GB', '128GB M.2 + 1TB 5400rpm', '2x USB 3.0, USB 2.0, USB-C 3.1 Gen 1 port/DP, HDMI, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64 bit', '3 Cell', '2.4 kg', 'LAN: 1G, Wifi AC, Reader, 380(W) x 265(D) x 25.8(H) mm'),
('SP078', '12 tháng', 'Lenovo', '15.6 INCH, 1920x1080, Webcam', ': Core i7, 7700HQ, 2.8GHz, 6M, Up to: 3.8GHz', '1x8GB, DDR4, 2666MHz, 2 Slots', 'NVIDIA Geforce GTX 1050 // Intel HD Graphics 630, 4GB', '128GB M.2 + 1TB 5400rpm', '2x USB 3.0, USB 2.0, USB-C Gen1 Port/DP, HDMI, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bit', '3 cell', '2.4 kg', 'LAN: 1G, Wifi AC, Reader, 380(W) x 265(D) x 25.8(H) mm'),
('SP079', '12 tháng', 'Lenovo', '13.3 INCH, 1920x1080, Webcam, Finger print', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '8GB Onboard, DDR4, 2400MHz', 'Intel UHD Graphics 620, SHARE', '256GB M.2 2280', '2x USB 3.0, 2x USB-C 3.1, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bit', '4 Cell', '1.11 kg', 'LAN: NO LAN, Wifi AC, Reader, 305.9(W) x 213.8(D) x 13.6(H) mm'),
('SP080', '12 tháng', 'Lenovo', '13.3 INCH (1920 x 1080)', 'Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6M Cache)', '4GB DDR4 2400 MHz (2 slots - max 16GB)', 'Intel HD Graphics 620', 'SSD M.2 256GB', 'HDMI, 2x USB Type-C, 2x USB 3.0', 'Led Keyboard', 'không', '3 cell', '1.47 kg', 'Wifi AC, miniLAN 1Gbit, Bluetooth 4.2, Webcam HD, Card reader'),
('SP081', '12 tháng', 'Lenovo', '15.6 INCH, 1920x1080, Webcam', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz', '4GB Onboard, DDR4, 2133MHz, 1 Slot', 'NVIDIA GeForce MX150 // Intel UHD Graphics 620, 2GB', '1TB 5400rpm', 'USB 3.0, USB-C, HDMI, Bluetooth 4.1', 'thường', 'Windows 10 Home SL 64bit', '2 cell', '1.9 kg', 'LAN: 1G, Wifi AC, Reader, 378(W) x 260(D) x 22.9(H) mm'),
('SP082', '12 tháng', 'Lenovo', '13.3 INCH, 1920x1080, Webcam', 'Core i3, 7100U, 2.4 GHz, 3M', '4 GB, LPDDR3, No upgrade', 'Intel HD Graphics 620, Share', '128GB M.2', '2x USB 3.0, Micro HDMI, Bluetooth 4.2', 'Led Keyboard', 'Windows 10 Home SL 64bits', '4 cell', '1.2 kg', 'Wifi AC, Reader, 307(W) x 214(D) x 13.9(H) mm'),
('SP083', '12 tháng', 'Lenovo', '14 INCH (1366 x 768)', 'Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 3M Cache)', '4GB DDR4 2400 MHz (2 slots - max 32GB)', 'Intel HD Graphics 620', 'HDD 1TB 5400rpm', 'HDMI, USB Type-C, 2x USB 3.0, USB 2.0', 'thường', 'không', '3 cell', '1.75 kg', 'Wifi AC, LAN 1Gbit, Bluetooth 4.1, Webcam HD, Card reader'),
('SP084', '12 tháng', 'Lenovo', '14 INCH, 1920x1080, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '1x4GB, DDR4, 2400MHz, 1 Slot', 'Intel UHD Graphics 620, SHARE', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4)', 'USB 3.0, USB 2.0, USB-C, HDMI, Bluetooth 4.1', 'Led Keyboard', 'Windows 10 Home SL 64bit', '2 cell', '1.53 kg', 'LAN: NO LAN, Wifi AC, Reader, 327.4(W) x 236.5(D) x 19.3(H) mm'),
('SP085', '12 tháng', 'Lenovo', '14 INCH, 1920x1080, Touch Screen, Webcam, Finger print', 'Core i3, 7130U, 2.7GHz, 3M', '1x4GB, DDR4, 2400MHz, 1 Slot', 'Intel HD Graphics 620, SHARE', '256GB SSD, Khe mở rộng: M.2 2280 (PCIe 3 x4)', 'USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.1', 'Led Keyboard', 'Windows 10 Home SL 64bit', '2 cell', '1.73 kg', 'LAN: NO LAN, Wifi AC, Reader, 330(W) x 235(D) x 19.9(H) mm'),
('SP086', '12 tháng', 'Lenovo', '14 INCH, 1920x1080, Touch Screen, Webcam, Finger print', 'Core i5, 7200U, 2.5GHz, 3M, Up to: 3.1GHz', '1x4GB, DDR4, 2400MHz, 1 Slot', 'Intel HD Graphics 620, SHARE', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe 3 x4)', 'USB 3.0, USB 2.0, USB-C, HDMI, Bluetooth 4.1', 'Led Keyboard', 'Windows 10 Home SL 64bit', '2 cell', '1.74 kg', 'LAN: NO LAN, Wifi AC, Reader, 330(W) x 235(D) x 19.9(H) mm'),
('SP087', '12 tháng', 'Lenovo', '15.6 INCH, 1920x1080, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz', '4GB Onboard, DDR4, 2133MHz', 'NVIDIA GeForce MX150 // Intel UHD Graphics 620, 2GB', '1 Slot, 1TB 5400rpm', '2x USB 3.0, USB-C, HDMI, Bluetooth 4.1', 'thường', 'Windows 10 Home SL 64bit', '2 cell', '2.61 kg', 'LAN: 1G, Wifi AC, Reader, 534(W) x 338(D) x 68(H) mm'),
('SP088', '12 tháng', 'Acer', '15.6 INCH 1920x1080', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', ': 1x4GB, DDR3L, 1600MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' USB 2.0, 2x USB 3.0, USB-C, D-Sub, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '4 Cell ', '2.17 Kg ', ' LAN: 1G, Wifi AC, Reader, 381.6(W) x 259(D) x 30.2(H) mm '),
('SP089', '12 tháng', 'Acer', '17 INCH, UHD 4K(3480x2160), Webcam HD, Led_KB ', ' Core i9, 8950HK, 2.9GHz, 12M, Up to: 4.8GHz ', '2x16GB, DDR4, 2666MHz, 2 Slots ', ' NVIDIA GeForce GTX 1070, 8GB ', ' 256GB M.2 2280 (PCIe) + 2TB 5400rpm ', ' LAN: 1G, Wifi AC, Reader, 428(W) x 298(D) x 38.7(H) mm 3x USB 3.0, 2x USB Type-C, HDMI, Displayport, Audio Combo, BT 5.0', 'bàm phím', 'Windows 10 Home SL 64bit ', '4 Cell ', '3.6 Kg', ' LAN: 1G, Wifi AC, Reader, 428(W) x 298(D) x 38.7(H) mm '),
('SP090', '12 tháng', 'Acer', '17.3 INCH, 1920x1080, Webcam HD, Led_KB ', 'Core i7, 8750H, 2.2GHz, 9M, Up to: 4.1GHz ', '2x16GB, DDR4, 2666MHz, 2 Slots ', ' NVIDIA GeFore GTX 1070, 8GB ', '256GB M.2 2280 (PCIe)', '3x USB 3.0, 2x USB Type-C, HDMI, Displayport, Audio Combo, BT 5.0', 'bàm phím', ' Linux', '4 Cell ', '3.6 Kg ', ' LAN: 1G, Wifi AC, Reader, 428(W) x 298(D) x 38.7(H) mm '),
('SP091', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, Webcam, Led_KB ', 'Core i7, 7700HQ, 2.8GHz, 6M, Up to: 3.8GHz ', '1x8GB, DDR4, 2666MHz, 2 Slots ', ' NVIDIA GeForce GTX 1060 // Intel HD Graphics 630, 6GB ', '128GB M.2 + 1TB 5400rpm ', ' 2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'bàm phím', ' Linux ', '4 Cell ', '2.57 Kg', ' LAN: 1G, Wifi AC, Reader, 390(W) x 266(D) x 26.75(H) mm '),
('SP092', '12 tháng', 'Acer', '14 INCH, 1920x1080, Touch Screen, Webcam, Finger print, Led_KB ', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '8GB Onboard, LPDDR3, 1866MHz ', ' Intel UHD Graphics 620, SHARE ', '256GB M.2 2280', ' 2x USB 3.0, USB-C 3.1 Gen1 (Port/DP), HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', '2 Cell ', '0.94 Kg ', ' LAN: NO LAN, Wifi AC, 327(W) x 228(D) x 14.58(H) mm '),
('SP093', '12 tháng', 'Acer', '14 INCH (1920 x 1080), Cảm ứng ', ' Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 3MB Cache)', ' 8GB LPDDR3 1866 MHz (Không nâng cấp được)', ' Intel UHD Graphics 620', 'SSD M.2 256GB ', 'HDMI, USB Type-C/DP, 2x USB 3.0 ', 'bàm phím', 'Win 10 Home', '2 cell ', '0.94 Kg ', ' Wifi AC, Bluetooth 4.2, Finger print '),
('SP094', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, Webcam, Led_KB ', 'Core i7, 7700HQ, 2.8GHz, 6M, Up to: 3.8GHz', '1x8GB, DDR4, 2133MHz, 2 Slots ', 'NVIDIA Force GTX 1050Ti // Intel HD Graphics 630, 4GB', '128GB M.2 2280 + 1TB 5400rpm ', ' 2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.1', 'bàm phím', ' Linux', '4 Cell ', '3.85 Kg ', ' LAN: 1G, Wifi AC, Reader, 550(W) x 320(D) x 75(H) mm '),
('SP095', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, Webcam, Led_KB ', 'Core i7, 7700HQ, 2.8GHz, 6M, Up to: 3.8GHz ', '1x8GB, DDR4, 2133(2400) MHz, 2 Slots ', 'NVIDIA GTX 1050 // Intel HD Graphics 630, 2GB', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe Gen3 x4, Sata)', ' USB 3.0, 2x USB 2.0, USB-C, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bits ', '4 Cell ', '2.45 Kg ', ' LAN: 1G, Wifi AC, Reader, 390(W) x 266(D) x 26.75(H) mm '),
('SP096', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, Webcam HD, Led_KB ', 'Core i5, 8300H, 2.3GHz, 8M, Up to: 4.0GHz ', '1x8GB, DDR4, 2666MHz, 2 Slots ', ' NVIDIA GeForce GTX 1050Ti // Intel UHD Graphics 630, 4GB GDDR5', '128GB M.2 2280 + 1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata/PCIe)', ' 2x USB 2.0, USB 3.0, USB-C, HDMI, Audio Combo, BT 5.0', 'bàm phím', ' Linux ', '4 Cell ', '2.45 Kg ', ' LAN: 1G, Wifi AC, Reader, 390(W) x 226(D) x 26.75(H) mm '),
('SP097', '12 tháng', 'Acer', '13.3 INCH (1920 x 1080) - Cảm ứng ', ' Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6M Cache)', ' 8GB DDR4 2400 MHz (Không nâng cấp được)', ' Intel HD Graphics 620', 'SSD M.2 256GB ', 'HDMI, USB Type-C/DP, 2x USB 3.0, USB 2.0', 'LedKeyboard ', 'Win 10 Home', '3 cell ', '1.54 Kg ', ' Wifi AC, NO LAN, Bluetooth 4.1, Finger print, Webcam HD, Card reader '),
('SP098', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, Webcam, Finger print, Led_KB ', 'Core i5, 7300HQ, 2.5GHz, 6M, Up to: 3.5GHz ', '1x8GB, DDR4, 2133MHz, 2 Slots ', 'NVIDIA GeForce GTX 1050 // Intel HD Graphics 630, 2GB', '1TB 5400rpm, Khe mở rộng: M.2 2280 (PCIe Gen3 x4, Sata)', ' 2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.2', 'bàm phím', 'Windows 10 Home SL 64bit ', ': 4 Cell ', '2.37 Kg ', ' LAN: 1GB, Wifi AC, Reader, 381.6(W) x 262.8(D) x 23.95(H) mm '),
('SP099', '12 tháng', 'Acer', '15.6 INCH (1920 x 1080), Webcam', ' Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6MB Cache)', ' 8GB DDR4 2666 MHz (2 slots)', ' Intel UHD Graphics 620', 'SSD 256GB ', 'HDMI, USB Type-C, 2x USB 3.0, USB 2.0', 'Led Keyboard ', 'Win 10 Home', '4 cell ', '1.7 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.2, Finger print Card reader '),
('SP100', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, DVD-RW, Webcam', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '1x4GB, DDR3L, 1600MHz, 2 Slots ', ' NVIDIA GeForce MX150 // Intel UHD Graphics 620, 2GB', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' USB 2.0, 2x USB 3.0, USB-C, D-Sub, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '4 Cell ', ': 2.17 Kg ', ' LAN: 1G, Wifi AC, Reader, 381.6(W) x 259(D) x 30.2(H) mm '),
('SP101', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, DVD-RW, Webcam', 'Core i7, 8550U, 1.8GHz, 8M, Up to: 4.0GHz ', '1x4GB, DDR3L, 1600MHz, 2 Slots ', ' NVIDIA GeForce MX 150 // Intel UHD Graphics 620, 2GB ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe Gen3 x4)', ' 2x USB 3.0, USB 2.0, USB-C, D-Sub, HDMI, Bluetooth 4.2', 'bàm phím', ' Linux ', '4 Cell ', '2.19 Kg ', ' LAN: 1G, Wifi AC, Reader, 381.6(W) x 259(D) x 30.2(H) mm '),
('SP102', '12 tháng', 'Acer', '15.6 INCH (1920 x 1080)', ' Intel Core i7-7500U (2.70 GHz up to 3.50 GHz, 4M Cache,)', ' 4GB DDR4 2133 MHz (2 slots - max 16GB)', ' Intel HD Graphics 620 + NVIDIA GeForce 940MX 2GB ', 'HDD 500GB 5400rpm ', 'D-Sub, HDMI, 2x USB 3.0, USB 2.0, USB Type-C', 'bàm phím', 'Win 10 Home', '4 cell ', '2.23 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.1, DVD-RW, Webcam HD, Card reader '),
('SP103', '12 tháng', 'Acer', '14 INCH, 1920x1080, Touch Screen, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '4GB Onboard, DDR4, 2400MHz ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata/PCIe 3 x4)', ' USB 2.0, 2x USB 3.0, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '3 Cell ', '1.72 Kg ', ' LAN: NO LAN, Wifi AC, Reader, 335(W) x 230(D) x 20.8(H) mm '),
('SP104', '12 tháng', 'Acer', '15.6 INCH (1920 x 1080), Webcam', ' Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6MB Cache)', ' 4GB Onboard DDR4 2400 MHz (1 slot trống)', ' NVIDIA GeForce MX150 2GB + Intel UHD Graphics 620', 'HDD 1TB 5400rpm ', 'HDMI, USB Type-C, USB 3.0, 2x USB 2.0', 'bàm phím', 'HDH', '4 cell ', '2.2 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.1, Card reader '),
('SP105', '12 tháng', 'Acer', '15.6 INCH (1920 x 1080), Webcam', ' Intel Core i5-8250U (1.60 Ghz up to 3.40 Ghz, 6M Cache)', ' 4GB DDR3L 1600 MHz (2 slots - max 16GB)', ' NVIDIA GeForce MX130 2GB + Intel HD Graphics 620', 'HDD 1TB 5400rpm ', 'HDMI, VGA/D-Sub, USB Type-C, 2x USB 3.0, USB 2.0', 'bàm phím', 'Win 10 Home', '4 cell ', '2.22 Kg ', ' Wifi AC, LAN 1Gbit, Bluetooth 4.2, DVD-RW, Webcam HD, Card reader '),
('SP106', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, DVD-RW, Webcam', 'Core i5, 8250U, 1.6GHz, 6M, Up to: 3.4GHz ', '1x4GB, DDR3L, 1600MHz, 2 Slots ', ' Intel UHD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' 2x USB 3.0, USB 2.0, USB-C, HDMI, Bluetooth 4.0', 'bàm phím', ' Linux', '4 Cell ', '2.19 Kg ', ' LAN: 1G, Wifi AC, Reader, 381.6(W) x 259(D) x 30.2(H) mm '),
('SP107', '12 tháng', 'Acer', '15.6 INCH, 1920x1080, Webcam', 'Core i3, 7130U, 2.7GHz, 3M ', '4GB Onboard, DDR4, 2133MHz, 1 Slot ', ' Intel HD Graphics 620, SHARE ', '1TB 5400rpm, Khe mở rộng: M.2 2280 (Sata, PCIe 3 x4)', ' 2x USB 2.0, USB 3.0, USB-C, HDMI, Bluetooth 4.1', 'bàm phím', 'Windows 10 Home SL 64bit ', '4 Cell ', '2.45 Kg ', ' LAN: 1G, Wifi AC, Reader, 390(W) x 266(D) x 26.8(H) mm '),
('SP108', '12 tháng', 'Apple', '12 INCH ( 2304 x 1440 ) không cảm ứng', 'Core M ( 1.2 GHz)', '8GB', 'Intel HD Graphics 615', '512GB SSD', '1 x SD card slot', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR:	không hỗ trợ'),
('SP109', '12 tháng', 'Apple', '13.3 INCH ( 2560 x 1600 ) không cảm ứng', 'Core i5 (2.3 GHz)', '8GB', 'Intel HD Graphics', '256GB SSD', '1 x SD card slot', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.4 kg', 'VR:	không hỗ trợ'),
('SP110', '12 tháng', 'Apple', '13.3 INCH ( 2560 x 1600 ) không cảm ứng', 'Core i5 ( 2.3 GHz)', '8GB', 'Intel Iris Plus Graphics 640', '256GB SSD', '', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.4 kg', 'VR:	không hỗ trợ'),
('SP111', '12 tháng', 'Apple', '12 INCH ( 2304 x 1440 ) không cảm ứng', 'Core i5 ( 1.3 GHz)', '8GB', 'Intel HD Graphics 615', '512GB SSD', '1 x SD card slot', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR:	không hỗ trợ'),
('SP112', '12 tháng', 'Apple', '13.3 INCH ( 2560 x 1600 ) không cảm ứng', 'Core i5 ( 2.3 GHz)', '8GB', 'Intel Iris Plus Graphics 640', '128GB SSD', '1 x SD card slot', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR:	không hỗ trợ'),
('SP113', '12 tháng', 'Apple', '13.3 INCH ( 2560 x 1600 ) không cảm ứng', 'Core i5 ( 2.3 GHz)', '8GB', 'Intel Iris Plus Graphics 640', '128GB SSD', '1 x SD card slot', 'không đèn thường , không phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR:	không hỗ trợ'),
('SP114', '12 tháng', 'Apple', '13.3 INCH ( 1440 x 900 ) không cảm ứng', 'Core i5 ( 1.8 GHz)', '8GB DDR3L 1600MHz', 'Intel HD Graphics', '256GB SSD', '2 x USB 3.0 , 1 x Thunderbolt , 1 x SD card slot', 'không đèn thường , có phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR: không hỗ trợ'),
('SP115', '12 tháng', 'Apple', '13.3 INCH ( 1440 x 900 ) không cảm ứng', 'Core i5 ( 1.8 GHz)', '8GB DDR3L 1600MHz', 'Intel HD Graphics 6000', '128GB SSD', '2 x USB 3.0 , 1 x Thunderbolt , 1 x SD card slot', 'không đèn thường , có phím số', 'macOS', 'Pin liền', '1.3 kg', 'VR: Không hỗ trợ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `madathang` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `manhanvien` int(10) DEFAULT NULL,
  `ngaydathang` text NOT NULL,
  `tongtien` double NOT NULL,
  `diachigiaohang` text NOT NULL,
  `hinhthucvanchuyen` text NOT NULL,
  `hinhthucthanhtoan` text NOT NULL,
  `trangthai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `manguoidung` int(10) NOT NULL,
  `hoten` text NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `marole` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`manguoidung`, `hoten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `marole`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 1),
(7, 'nguyen van honag', 'hoang', '25f9e794323b453885f5181f1b624d0b', '0963203425', 'thuki113@yahoo.com', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `marole` int(3) NOT NULL,
  `tenrole` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`marole`, `tenrole`, `mota`) VALUES
(1, 'admin', 'người có quyển cao nhất trên website'),
(2, 'nvbanhang', 'người có quyển thêm xóa sửa và bán sản phẩm'),
(3, 'Người dùng', 'người mua hang tren web site');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` varchar(10) NOT NULL,
  `tensanpham` text NOT NULL,
  `gia` varchar(50) NOT NULL,
  `dongia` float NOT NULL,
  `hinh` text NOT NULL,
  `matheloai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `gia`, `dongia`, `hinh`, `matheloai`) VALUES
('SP001', 'Laptop Asus S410UA-EB003T', '15.190.000', 15190000, 'images/ASUS/0.jpg', 'AS'),
('SP002', 'Laptop Asus UX490UA-BE009TS', '41.990.000', 41990000, 'images/ASUS/1.jpg', 'AS'),
('SP003', 'Laptop MacBook 15 MPTT2', '70.300.000', 70300000, 'images/MK/0.jpg', 'MK'),
('SP004', 'Laptop Asus UX461UA-E1126T', '30.490.000', 30490000, 'images/ASUS/2.jpg', 'AS'),
('SP005', 'Laptop Asus UX391UA-EG030T', '39.990.000', 39990000, 'images/ASUS/3.jpg', 'AS'),
('SP006', 'Laptop Asus FX503VM-E4087T', '26.990.000', 26990000, 'images/ASUS/4.jpg', 'AS'),
('SP007', 'Laptop Asus UX430UN-GV097T', '27.290.000', 27290000, 'images/ASUS/5.jpg', 'AS'),
('SP008', 'Laptop Asus UX331UAL-EG020TS', '27.490.000', 27490000, 'images/ASUS/6.jpg', 'AS'),
('SP009', 'Laptop Asus UX461UA-E1127T', '25.990.000', 25990000, 'images/ASUS/7.jpg', 'AS'),
('SP010', 'Laptop Asus UX430UA-GV428T', '23.490.000', 23490000, 'images/ASUS/8.jpg', 'AS'),
('SP011', 'Laptop Asus UX430UN-GV081T', '22.290.000', 22290000, 'images/ASUS/9.jpg', 'AS'),
('SP012', 'Laptop Asus S530UN-BQ255T', '17.990.000', 17990000, 'images/ASUS/10.jpg', 'AS'),
('SP013', 'Laptop Asus TP412UA-EC070T', '16.890.000', 16890000, 'images/ASUS/11.jpg', 'AS'),
('SP014', 'Laptop Asus X407UB-BV147T', '16.690.000', 16690000, 'images/ASUS/12.jpg', 'AS'),
('SP015', 'Laptop Asus X542UQ-GO242T', '16.390.000', 16390000, 'images/ASUS/13.jpg', 'AS'),
('SP016', 'Laptop Asus S510UQ-BQ475T', '16.290.000', 16290000, 'images/ASUS/14.jpg', 'AS'),
('SP017', 'Laptop Asus S410UA-EB015T ', '16.190.000', 16190000, 'images/ASUS/15.jpg', 'AS'),
('SP018', 'Laptop Asus A510UN-EJ463T', '15.790.000', 15790000, 'images/ASUS/16.jpg', 'AS'),
('SP019', 'Laptop Asus S430UA-EB099T', '15.390.000', 15390000, 'images/ASUS/17.jpg', 'AS'),
('SP020', 'Laptop MSI PS42 8M-288VN', '21.284.000', 21284000, 'images/MSI/0.jpg', 'MSI'),
('SP021', 'Laptop MSI GT83 8RG-037VN', '144.900.000', 144900000, 'images/MSI/1.jpg', 'MSI'),
('SP022', 'Laptop MSI GT75 8RG-252VN', '104.590.000', 104590000, 'images/MSI/2.jpg', 'MSI'),
('SP023', 'Laptop MSI GT75 8RF-231VN', '79.990.000', 79990000, 'images/MSI/3.jpg', 'MSI'),
('SP024', 'Laptop MSI P65 8RF-488VN', '62.990.000', 62990000, 'images/MSI/4.jpg', 'MSI'),
('SP025', 'Laptop MSI GE73 8RF-428VN', '53.990.000', 53990000, 'images/MSI/5.jpg', 'MSI'),
('SP026', 'Laptop MSI GS65 8RE-242VN', '49.990.000', 49990000, 'images/MSI/6.jpg', 'MSI'),
('SP027', 'Laptop MSI GP73 8RE-429VN', '37.990.000', 37990000, 'images/MSI/7.jpg', 'MSI'),
('SP028', 'Laptop MSI GP63 8RE-411VN', '36.590.000', 36590000, 'images/MSI/8.jpg', 'MSI'),
('SP029', 'Laptop MSI GP63 8RD-434VN', '32.990.000', 32990000, 'images/MSI/9.jpg', 'MSI'),
('SP030', 'Laptop MSI PS42 8RB-490VN', '26.990.000', 26990000, 'images/MSI/10.jpg', 'MSI'),
('SP031', 'Laptop MSI GL63 8RC-436VN', '24.790.000', 24790000, 'images/MSI/11.jpg', 'MSI'),
('SP032', 'Laptop MSI GV62 7RE-2443XVN', '24.690.000', 24690000, 'images/MSI/12.jpg', 'MSI'),
('SP033', 'Laptop MSI PS42 8RB-234VN', '24.490.000', 24490000, 'images/MSI/13.jpg', 'MSI'),
('SP034', 'Laptop MSI GF63 8RD-242VN', '22.990.000', 22990000, 'images/MSI/14.jpg', 'MSI'),
('SP035', 'Laptop MSI GF63 8RC-243VN', '21.670.000', 21670000, 'images/MSI/15.jpg', 'MSI'),
('SP036', 'Laptop Dell Inspiron 3476-C4I51121', '12.990.000', 12990000, 'images/DELL/0.jpg', 'DELL'),
('SP037', 'Laptop Dell Inspiron 13 7370-7D61Y2', '33.390.000', 33390000, 'images/DELL/1.jpg', 'DELL'),
('SP038', 'Laptop Dell Inspiron 7588-N7588A', '33.390.000', 33390000, 'images/DELL/2.jpg', 'DELL'),
('SP039', 'Laptop Dell Inspiron 15 7570-782P82', '26.290.000', 26290000, 'images/DELL/3.jpg', 'DELL'),
('SP040', 'Laptop Dell Inspiron 13 5379-C3TI7501W', '23.290.000', 23290000, 'images/DELL/4.jpg', 'DELL'),
('SP041', 'Laptop Dell Inspiron 15 5570-N5570B', '23.590.000', 23590000, 'images/DELL/5.jpg', 'DELL'),
('SP042', 'Laptop Dell Inspiron 5370-F5YX01', '20.990.000', 20990000, 'images/DELL/6.jpg', 'DELL'),
('SP043', 'Laptop Dell Inspiron 13 5379-JYN0N2', '20.490.000', 20490000, 'images/DELL/7.jpg', 'DELL'),
('SP044', 'Laptop Dell Inspiron 15 5370-N5370B', '19.190.000', 19190000, 'images/DELL/8.jpg', 'DELL'),
('SP045', 'Laptop Dell Inspiron 15 5570-M5I5238W', '16.990.000', 16990000, 'images/DELL/9.jpg', 'DELL'),
('SP046', 'Laptop Dell Vostro 5471-VTI5207W', '16.790.000', 16790000, 'images/DELL/10.jpg', 'DELL'),
('SP047', 'Laptop Dell Inspiron 5370-N3I3002W', '15.890.000', 15890000, 'images/DELL/11.jpg', 'DELL'),
('SP048', 'Laptop Dell Inspiron 5370-N3I3002W', '15.890.000', 15890000, 'images/DELL/12.jpg', 'DELL'),
('SP049', 'Laptop Dell Vostro 15-3578', '14.990.000', 14990000, 'images/DELL/13.jpg', 'DELL'),
('SP050', 'Laptop Dell Inspiron 5370-N3I3001W', '14.990.000', 14990000, 'images/DELL/14.jpg', 'DELL'),
('SP051', 'Laptop Dell Vostro 3478-R3M961', '14.990.000', 14990000, 'images/DELL/15.jpg', 'DELL'),
('SP052', 'Laptop Dell Vostro 5568-077M512', '14.590.000', 14590000, 'images/DELL/16.jpg', 'DELL'),
('SP053', 'Laptop Dell Vostro 15-3578', '14.290.000', 14290000, 'images/DELL/17.jpg', 'DELL'),
('SP054', 'Laptop Dell Vostro 3468', '13.390.000', 13390000, 'images/DELL/18.jpg', 'DELL'),
('SP055', 'Laptop HP Pavilion 15-CS0101TX', '15.390.000', 15390000, 'images/HP/0.jpg', 'HP'),
('SP056', 'Laptop HP EliteBook 1030 G3', '46.990.000', 46990000, 'images/HP/1.jpg', 'HP'),
('SP057', 'Laptop HP EliteBook X2 1013 G3', '42.990.000', 42990000, 'images/HP/2.jpg', 'HP'),
('SP058', 'Laptop HP Spectre X360 13-AE516TU', '39.990.000', 39990000, 'images/HP/3.jpg', 'HP'),
('SP059', 'Laptop HP Spectre 13-AF511TU', '38.490.000', 38490000, 'images/HP/4.jpg', 'HP'),
('SP060', 'Laptop HP Envy 13-AH0027TU', '26.290.000', 26290000, 'images/HP/5.jpg', 'HP'),
('SP061', 'Laptop HP Pavilion Gaming 15-CX0179TX', '24.490.000', 24490000, 'images/HP/6.jpg', 'HP'),
('SP062', 'Laptop HP Pavilion 15-CB541TX', '22.990.000', 22990000, 'images/HP/7.jpg', 'HP'),
('SP063', 'Laptop HP Probook 430 G5-2XR79PA', '20.990.000', 20990000, 'images/HP/8.jpg', 'HP'),
('SP064', 'Laptop HP Envy 13-AH0025TU', '20.290.000', 20290000, 'images/HP/9.jpg', 'HP'),
('SP065', 'Laptop HP Pavilion 15-CC058TX', '18.490.000', 18490000, 'images/HP/10.jpg', 'HP'),
('SP066', 'Laptop HP Pavilion X360 14-BA120TU', '17.490.000', 17490000, 'images/HP/11.jpg', 'HP'),
('SP067', 'Laptop HP Envy 13-AD138TU', '17.390.000', 17390000, 'images/HP/12.jpg', 'HP'),
('SP068', 'Laptop HP Pavilion X360 14-BA129TU', '16.990.000', 16990000, 'images/HP/13.jpg', 'HP'),
('SP069', 'Laptop HP Pavilion X360 14-BA121TU', '16.990.000', 16990000, 'images/HP/14.jpg', 'HP'),
('SP070', 'Laptop HP Envy 13-AD076TU', '16.790.000', 16790000, 'images/HP/15.jpg', 'HP'),
('SP071', 'Laptop HP Probook 430 G5-2XR78PA', '16.290.000', 16290000, 'images/HP/16.jpg', 'HP'),
('SP072', 'Laptop HP Probook 430 G5-2ZD49PA', '15.590.000', 15590000, 'images/HP/17.jpg', 'HP'),
('SP073', 'Laptop Lenovo Ideapad 320-14ISK 80XG0083VN', '9.500.000', 9500000, 'images/LNV/0.jpg', 'LNV'),
('SP074', 'Laptop Lenovo Ideapad Y520-15IKBN 80WK015GVN', '26.000.000', 26000000, 'images/LNV/1.jpg', 'LNV'),
('SP075', 'Laptop Lenovo Thinkpad L380-20M5S02E00', '24.990.000', 24990000, 'images/LNV/2.jpg', 'LNV'),
('SP076', 'Laptop Lenovo Ideapad 720s-13IKB 81BV0062VN', '23.690.000', 23690000, 'images/LNV/3.jpg', 'LNV'),
('SP077', 'Laptop Lenovo Ideapad Y520-15IKBN 80WK015FVN', '22.999.000', 22999000, 'images/LNV/4.jpg', 'LNV'),
('SP078', 'Laptop Lenovo Ideapad Y520-15IKBN 80WK0109VN', '22.390.000', 22390000, 'images/LNV/5.jpg', 'LNV'),
('SP079', 'Laptop Lenovo Ideapad 720s-13IKB 81BV0061VN', '20.590.000', 20590000, 'images/LNV/6.jpg', 'LNV'),
('SP080', 'Laptop Lenovo Thinkpad L380-20M5S01500', '18.790.000', 18790000, 'images/LNV/7.jpg', 'LNV'),
('SP081', 'Laptop Lenovo Ideapad 320-15IKB 81BG00E1VN', '16.990.000', 16990000, 'images/LNV/8.jpg', 'LNV'),
('SP082', 'Laptop Lenovo Ideapad 710S-13IKB 80VQ0095VN', '15.490.000', 15490000, 'images/LNV/9.jpg', 'LNV'),
('SP083', 'Laptop Lenovo Thinkpad E480-20KN005GVA', '14.690.000', 14690000, 'images/LNV/10.jpg', 'LNV'),
('SP084', 'Laptop Lenovo Ideapad 520s-14IKB 81BL0086VN', '14.490.000', 14490000, 'images/LNV/11.jpg', 'LNV'),
('SP085', 'Laptop Lenovo Yoga 520-14IKB-80X80108VN', '14.190.000', 14190000, 'images/LNV/12.jpg', 'LNV'),
('SP086', 'Laptop Lenovo Yoga 520-14IKB-80X80109VN', '14.050.000', 14050000, 'images/LNV/13.jpg', 'LNV'),
('SP087', 'Laptop Lenovo Ideapad 320-15IKB 81BG009LVN', '13.690.000', 13690000, 'images/LNV/14.jpg', 'LNV'),
('SP088', 'Laptop Acer E5-576-50JK', '11.390.000', 11390000, 'images/ACER/0.jpg', 'AC'),
('SP089', 'Laptop Acer Predator Helios 500 PH517-51-90KL', '99.990.000', 99990000, 'images/ACER/1.jpg', 'AC'),
('SP090', 'Laptop Acer Predator Helios 500 PH517-51-71S9', '52.999.000', 52999000, 'images/ACER/2.jpg', 'AC'),
('SP091', 'Laptop Acer Predator Helios 300 G3-572-79S6', '31.990.000', 31990000, 'images/ACER/3.jpg', 'AC'),
('SP092', 'Laptop Acer Swift 5 SF514-52T-87TF', '28.499.000', 28499000, 'images/ACER/4.jpg', 'AC'),
('SP093', 'Laptop Acer Swift 5 SF514-52T-592W', '25.690.000', 25690000, 'images/ACER/5.jpg', 'AC'),
('SP094', 'Laptop Acer Nitro 5 AN515-51-79WJ', '24.990.000', 24990000, 'images/ACER/6.jpg', 'AC'),
('SP095', 'Laptop Acer Nitro 5 AN515-51-739L', '23.490.000', 23490000, 'images/ACER/7.jpg', 'AC'),
('SP096', 'Laptop Acer Nitro AN515-52-51LW', '22.999.000', 22999000, 'images/ACER/8.jpg', 'AC'),
('SP097', 'Laptop Acer Spin 5 SP513-52N-556V', '20.999.000', 20999000, 'images/ACER/9.jpg', 'AC'),
('SP098', 'Laptop Acer A7 A715-71G-57LL', '19.490.000', 19490000, 'images/ACER/10.jpg', 'AC'),
('SP099', 'Laptop Acer Swift SF315-52-50T9', '18.399.000', 18399000, 'images/ACER/11.jpg', 'AC'),
('SP100', 'Laptop Acer E5-576G-82UE', '17.990.000', 17990000, 'images/ACER/12.jpg', 'AC'),
('SP101', 'Laptop Acer E5-576G-87FG', '16.990.000', 16990000, 'images/ACER/13.jpg', 'AC'),
('SP102', 'Laptop Acer E5-575G-73J8', '16.490.000', 16490000, 'images/ACER/14.jpg', 'AC'),
('SP103', 'Laptop Acer Spin 3 SP314-51-57RM', '16.489.000', 16489000, 'images/ACER/15.jpg', 'AC'),
('SP104', 'Laptop Acer Aspire A515-51G-52QJ', '14.899.000', 14899000, 'images/ACER/16.jpg', 'AC'),
('SP105', 'Laptop Acer E5-576G-58R4', '14.690.000', 14690000, 'images/ACER/17.jpg', 'AC'),
('SP106', 'Laptop Acer E5-576-56GY', '12.590.000', 12590000, 'images/ACER/18.jpg', 'AC'),
('SP107', 'Laptop Acer A515-51-37DW', '11.799.000', 11799000, 'images/ACER/19.jpg', 'AC'),
('SP108', 'Laptop MacBook 12 MNYN2', '38.300.000', 38300000, 'images/MK/1.jpg', 'MK'),
('SP109', 'Laptop MacBook 13.3 MPXU2', '38.100.000', 38100000, 'images/MK/2.jpg', 'MK'),
('SP110', 'Laptop MacBook 13.3 MPXT2LL/A', '37.200.000', 37200000, 'images/MK/3.jpg', 'MK'),
('SP111', 'Laptop MacBook 12 MNYL2ZP/A', '36.000.000', 36000000, 'images/MK/4.jpg', 'MK'),
('SP112', 'Laptop MacBook 13.3 MPXR2', '33.700.000', 33700000, 'images/MK/5.jpg', 'MK'),
('SP113', 'Laptop MacBook 13.3 MPXQ2', '31.700.000', 31700000, 'images/MK/6.jpg', 'MK'),
('SP114', 'Laptop MacBook Air MQD42LL/A', '328.890.000', 328890000, 'images/MK/7.jpg', 'MK'),
('SP115', 'Laptop MacBook Air MQD32HN/A', '23.890.000', 23890000, 'images/MK/8.jpg', 'MK');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` varchar(10) NOT NULL,
  `tentheloai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`matheloai`, `tentheloai`) VALUES
('AC', 'ACER'),
('AS', 'ASUS'),
('DELL', 'DELL'),
('HP', 'HP'),
('LNV', 'LENOVO'),
('MK', 'MACBOOK'),
('MSI', 'MSI');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctdathang`
--
ALTER TABLE `ctdathang`
  ADD PRIMARY KEY (`masanpham`,`madathang`),
  ADD KEY `ctdh_dh` (`madathang`);

--
-- Chỉ mục cho bảng `ctsanpham`
--
ALTER TABLE `ctsanpham`
  ADD UNIQUE KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`madathang`),
  ADD KEY `nguoidung_hoadon` (`makhachhang`),
  ADD KEY `nhanvien_hoadon` (`manhanvien`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`manguoidung`),
  ADD KEY `marole` (`marole`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`marole`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `tlsp` (`matheloai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `madathang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `manguoidung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctdathang`
--
ALTER TABLE `ctdathang`
  ADD CONSTRAINT `ctdh_dh` FOREIGN KEY (`madathang`) REFERENCES `dathang` (`madathang`),
  ADD CONSTRAINT `ctdh_sp` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

--
-- Các ràng buộc cho bảng `ctsanpham`
--
ALTER TABLE `ctsanpham`
  ADD CONSTRAINT `ctsanpham_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `marole` FOREIGN KEY (`marole`) REFERENCES `role` (`marole`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `tlsp` FOREIGN KEY (`matheloai`) REFERENCES `theloai` (`matheloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
