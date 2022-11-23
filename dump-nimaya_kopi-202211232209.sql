-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: nimaya_kopi
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (2,1,'Pentingnya Mengontrol Kadar Air Pada Biji Kopi','Mengontrol Kadar Air','article/W8oVBWwOP1XvU7l1rvkFiqs9xpIFqrDprkv00vJ7.png','<p>Roasting kopi adalah perpaduan seni, naluri, dan sains. Seni untuk menciptakan rasa, dengan naluri dan sains, berperan memastikan semua unsur berjalan saling melengkapi satu sama lain.Tiga hal ini sangat berguna, untuk mempersempit parameter profil roasting yang tepat dan sesuai keinginan yang ingin dicapai.</p><p>Dari sekian banyak unsur yang perlu diperhatikan dari naluri dan sains, salah satu nya yaitu kadar air, fakta nya Kadar air pada biji kopi yang kurang dari 10% memiliki resiko hilangnya kualitas dan cita rasa, selain itu, biji kopi menjadi terlalu rapuh dan kurang segar stelah menjadi roast bean, sedangkan kelembapan di atas 12% memiliki resiko yang lebih tinggi untuk tumbuh jamur, bahkan dapat mencapai kondisi yang tidak layak konsumsi dengan waktu yang singkat.</p><p>Jaga kandungan kadar air dalam biji kopi pada angka yang tepat. Kadar air dalam biji kopi dapat mempengaruhi daya tahan, dan cita rasa. hal ini penting untuk diperhatikan, guna mendukung parameter yang menghasilkan roast bean yang nikmat dan berkualitas.</p>','2022-11-14 04:56:19','2022-11-14 04:56:19'),(3,1,'2 Konsep Pelayanan Coffee Shop','Konsep Pelayanan','article/tCENDsTYh8P1yXYWwfbpiTCRXBruiH1x5BQVoszg.png','<p>Pelayanan dalam sebuah coffee shop terbagi menjadi dua, yaitu slow bar dan fast bar. Kedua konsep tersebut memiliki karakter yang berbeda, sehingga jangan menyama-ratakan sebuah kedai kopi. Tentunya sebuah konsep memiliki kelebihan dan kekurangannya masing – masing. Meskipun banyak sekali coffee shop yang mencoba menggabungkan dua konsep tersebut, tetapi hanya beberapa saja yang sukses, sisanya hanya sekedar pelengkap pilihan untuk konsumen saja.</p><p>Slow Bar<br>Gambaran umum slow bar adalah proses peracikan kopi membutuhkan waktu yang tidak sebentar, Hal ini terjadi karena setiap detail langkah dalam menyeduh membutuhkan perhatian khusus barista. Alat seduh yang sering digunakan berbasis manual brew, seperti pour over, shipon, tubruk, dll.&nbsp;<br>Ukuran kedai slow bar biasanya berukuran kecil, hal ini terkadang memicu interaksi antara konsumen dan barista untuk berbincang sembari menunggu proses penyeduhan kopi.</p><p>Fast bar<br>Sesuai dengan namanya, fast bar adalah proses penyajian kopi dengan cepat dan tidak memerlukan banyak waktu. Seharusnya coffeeshop yang bertama ini sudah menggunakan mesin espreso untuk mempercepat produksi kopinya, dari espresso bisa menjadi banyak sekali varian racikan jenis minuman kopi, sehingga menu yang ditawarkan juga akan semakin banyak. Ukuran kedai fast bar kebanyakan berurukan besar dan mampu menampung banyak konsumen</p>','2022-11-14 07:15:25','2022-11-14 07:15:25'),(4,1,'Kenapa Tidak Dianjurkan Menyimpan Biji Kopi  Dalam Freezer?','Penyimpanan','article/RnL79dg83nTPq5QEWFlx1dS0ggtTADeWyIakg8R5.png','<p>Roasting kopi adalah perpaduan seni, naluri, dan sains. Seni untuk menciptakan rasa, dengan naluri dan sains, berperan memastikan semua unsur berjalan saling melengkapi satu sama lain.Tiga hal ini sangat berguna, untuk mempersempit parameter profil roasting yang tepat dan sesuai keinginan yang ingin dicapai.</p><p>Dari sekian banyak unsur yang perlu diperhatikan dari naluri dan sains, salah satu nya yaitu kadar air, fakta nya Kadar air pada biji kopi yang kurang dari 10% memiliki resiko hilangnya kualitas dan cita rasa, selain itu, biji kopi menjadi terlalu rapuh dan kurang segar stelah menjadi roast bean, sedangkan kelembapan di atas 12% memiliki resiko yang lebih tinggi untuk tumbuh jamur, bahkan dapat mencapai kondisi yang tidak layak konsumsi dengan waktu yang singkat.</p><p>Jaga kandungan kadar air dalam biji kopi pada angka yang tepat. Kadar air dalam biji kopi dapat mempengaruhi daya tahan, dan cita rasa. hal ini penting untuk diperhatikan, guna mendukung parameter yang menghasilkan roast bean yang nikmat dan berkualitas.</p>','2022-11-14 07:16:31','2022-11-14 07:16:31'),(5,1,'3 Faktor Yang Mempengaruhi Ekstraksi Kopi','Faktor Ekstraksi','article/bIOBiiDtsgz3XDkAb9FH5yiJCnxifEYn12GeJK1B.png','<p>Kami juga sadar akan hal ini, yang menjadi penentu enak dan tidak enak-nya kopi adalah selera dari penikmat kopi itu sendiri. Oleh karna itu, masing masing kedai kopi memiliki standar seduh yang harus di penuhi untuk memastikan kopi yang sampai di cangkir teman-teman adalah kopi yang spesial.</p><p>Variabel yang mempengaruhi rasa kopi tidak sedikit, salah satu nya yaitu ekstraksi. Proses ini adalah tahap larutnya bubuk kopi saat terkena air yang kemudian menjadi air kopi. Dua kemungkinan yang terjadi pada saat proses extraksi, yakni under dan over extracted. Untuk meminimalkan hal tersebut ada 3 faktor yang mempengaruhi proses extraksi kopi.</p><p>1. Grind size<br>Proses ekstraksi dilakukan dengan cara merendam (immersion) atau melewatkan air (pour over). Semakin banyak bidang yang terkena air, berarti ekstraksi akan semakin besar. Pada dasarnya semakin halus ukuran giling, maka ekstraksi akan semakin besar, hal terpenting adalah memilih metode seduh dan grind size yang tepat agar tidak terjadi over maupun under extracted.</p><p>2. Suhu Air<br>Semakin tinggi suhu air yang digunakan semakin cepat pula proses pelarutan kopi. Menurut National Coffee Association suhu air paling baik dalam membuat kopi ideanya adalah 195°F sampai 205°F atau 90 – 96 derajat celcius, namun beberapa orang menggunakan suhu di bawah 90C dengan teknik manual brewing.</p><p>3. Rasio Air<br>Menemukan rasio yang tepat untuk seduhan kopi diperlukan beberapa kali percobaan. Semakin kecil rasio maka kopi akan semakin kental atau intens. Sama seperti grind size, jenis single origin yang berbeda belum tentu sesuai dengan rasio yang sama, metode seduhan yang berbeda, berbeda pula rasio yang sesuai untuk metode seduhan tertentu. SCAA (Asosiasi Speciality Coffee di Amerika) menemukan bahwa golden ratio pada kopi adalah 1:18, yaitu menyeduh 18 gram air untuk setiap 1 gram kopi.</p><p>Dengan memaksimalkan ke tiga bagian tersebut dapat menstabilkan hasil seduhan agar tidak over maupun under extracted.</p>','2022-11-14 07:17:44','2022-11-14 07:17:44'),(6,1,'Pengaruh Grindsize Pada Resep Seduh','Pengaruh Grindsize','article/fJJfkj0SRDVEMyN3udQmPKadLuFIQKnvAWUY8f6o.png','<p>Ukuran gilingan biji kopi atau biasa di sebut grind size dapat mempengaruhi rasa hasil seduhan kopi. Menariknya, metode seduh yang satu dengan yang lain memerlukan grind size yang berbeda.</p><p>Kesalahan menentukan grind size dalam menyeduh akan menghasilkan seduhan yang under-extracted atau over-extracted.<br>Seduhan kopi yang under-extracted terjadi karena grind size kopi terlalu kasar. Sehingga contact time antara kopi dan air menjadi lebih cepat, begitu juga dengan flow rate-nya. Rasa yang dihasilkan cenderung sour, acid dan salty.</p><p>Sebaliknya, seduhan kopi yang over-extracted terjadi karena grind size kopi yang terlalu halus. Menghasilkan rasa kopi yang cenderung hambar, pahit dan rasa segar kopi hilang.<br>&nbsp;</p>','2022-11-14 07:18:29','2022-11-14 07:18:29');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_class`
--

DROP TABLE IF EXISTS `course_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_class` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_class_course_id_foreign` (`course_id`),
  CONSTRAINT `course_class_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_class`
--

LOCK TABLES `course_class` WRITE;
/*!40000 ALTER TABLE `course_class` DISABLE KEYS */;
INSERT INTO `course_class` VALUES (1,3,'Arabica','<ul><li>Siapkan Bibit</li></ul><p><img src=\"http://localhost:8000/media/img-class-beginner-1_1668339152.png\"></p><p>Kopi arabika (Coffea arabica), juga dikenal sebagai kopi Arab, kopi semak Arab, atau kopi gunung, adalah spesies dari genus Coffea. Spesies ini diyakini sebagai spesies kopi pertama yang dibudidayakan, dan merupakan kultivar dominan, mewakili sekitar 60% dari produksi kopi global. Jenis kopi lain yang banyak dibudidayakan adalah kopi robusta (C. canephora) (kurang asam, lebih pahit, dan lebih berkafein tinggi dibanding kopi arabika). Kopi arabika berasal dari Ethiopia. Kopi ini tercatat pertama kali dibudidayakan di Yaman, dan didokumentasikan pada abad ke-12. Coffea arabica disebut ‏بُنّ‎ (būnn) dalam bahasa Arab, yang diambil dari bahasa Oromo \"Buna\".</p><ul><li>Varietas di Indonesia</li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/img-class-beginner-2_1668339180.png\"></figure><p>Di Indonesia, perkebunan kopi arabika banyak ditemui di daerah pegunungan toraja, Sumatra Utara, Aceh dan di beberapa daerah di pulau Jawa. Beberapa varietas kopi arabika yang dikembangkan di Indonesia antara lain kopi arabica jenis Abesinia, arabika jenis Pasumah, Marago, Typica dan kopi arabika Congensis.</p><p>Karakter Rasa Arabika</p><p>Kopi arabika memiliki cita rasa yang sedikit asam. Tingkat keasaman kopi arabika ini masih dibawah jus jeruk dan juga soda. Namun, jika dibandingkan dengan kopi robusta, kopi arabika ini memiliki rasa yang lebih asam.<br>Dari segi cita rasa, kopi arabika dikenal dengan cita rasa yang kompleks, mulai dari rasa buah-buahan, rempah, karamel, dan juga sentuhan rasa lainnya. Uniknya, kopi arabika terasa asam namun ada kesan manis gula tipis. Cita rasa kopi arabika yang kompleks ini yang membuatnya sempurna untuk dinikmati sebagai single origin.</p><ul><li>Habitat Tumbuh</li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/img-class-beginner-3_1668339259.png\"></figure><p>Bisa dibilang, kopi arabika adalah salah satu jenis kopi yang cukup sulit ditanam karena hanya bisa ditanam di dataran tinggi dengan hawa yang sejuk. Di Indonesia, tanaman Kopi Arabika hanya bisa tumbuh dengan baik di ketinggian 1.000-2.000 meter dari permukaan laut. Tanaman tersebut masih bisa tumbuh di dataran lebih rendah, hanya saja pertumbuhannya tidak optimal dan mudah terserang penyakit karat daun.<br>&nbsp;</p>'),(2,3,'Robusta','<ul><li>Siapkan Bibit</li></ul><p>Tanaman ini memiliki sistem akar yang dangkal dan tumbuh menjadi pohon atau perdu hingga mencapai 10 meter. Masa berbunganya tidak teratur dan membutuhkan sekitar 10-11 bulan bagi buahnya untuk masak, hingga menghasilkan biji kopi yang diinginkan. Kopi robusta menghasilkan lebih banyak panen daripada jenis arabika, dan mengandung lebih banyak kafein, yakni 2,7% dibandingkan dengan arabika yang mengandung 1,5% saja. Selain itu, robusta juga lebih tahan terhadap serangan hama dan penyakit, sehingga membutuhkan lebih sedikit herbisida dan pestisida daripada perkebunan arabika.</p><ul><li>Varietas di Indonesia</li></ul><p>Kopi robusta diturunkan dari beberapa spesies terutama Canephora. Mungkin karena alasan itu, sumber bibit tanaman untuk robusta tidak disebut varietas melainkan klon.<br>Sama dengan varietas pada arabika, klon unggul robusta di Indonesia dikembangkan oleh Puslit Koka. Berikut ini beberapa jenis klon robusta yang dibudidaya lembaga tersebut: Klon BP308, Klon BP42, Klon SA436, Klon BP234</p><ul><li>Karakter Rasa Robusta</li></ul><p>Robusta berasal dari kata ‘robust’ yang artinya kuat, sesuai dengan gambaran postur (body) atau tingkat kekentalannya yang kuat. Kopi robusta bukan merupakan spesies karena jenis ini turunan dari spesies Coffea canephora. Aroma robusta tidak sekuat arabika, dengan tingkat kekentalan (body) sedang hingga berat dan citarasa pahit. Kandungan kafein robusta lebih dari dua kali lipat arabika, yaitu berkisar 1,7-4%.</p><ul><li>Habitat Tumbuh</li></ul><p>Robusta dapat tumbuh di dataran rendah, dan lokasi paling baik untuk membudidayakan tanaman ini pada ketinggian 400-800 meter dpl. Suhu optimal pertumbuhan kopi robusta berkisar 24-30oC dengan curah hujan 2000-3000 mm per tahun. Tanaman kopi robusta cocok ditanam pada tanah yang gembur dengan tingkat keasaman tanah (pH) yang ideal untuk tanaman ini 5,5-6,5. Kopi robusta dianjurkan dibudidayakan dibawah naungan pohon lain.</p>'),(3,3,'Liberika','<ul><li>Siapkan Bibit</li></ul><p>Kopi Liberika adalah jenis kopi yang berasal dari Liberia, Dan Afrika Barat. Kopi ini dapat tumbuh setinggi 9 meter dari tanah. Pada abad-19, jenis kopi ini didatangkan ke Indonesia untuk menggantikan kopi Arabika yang terserang oleh hama penyakit.<br>Meski memiliki ketahanan yang lebih baik dibanding arabika, namun pada akhirnya jenis tanaman liberika diganti dengan jenis kopi robusta.Kopi jenis liberika saat ini dibudidayakan secara terbatas dan tidak sebanyak arabika atau robusta. Beberapa negara yang menanam kopi jenis liberika, antara lain Indoneisa</p><ul><li>Varietas di Indonesia</li></ul><p>Beberapa varietas liberika yang populer, antara lain Ardoniana dan Duvrei. Selain itu, Pusat Penelitian Kopi dan Kakao Indonesia (Puslit Koka) pada tahun 2014 juga telah berhasil mencetak spesies kopi liberika dengan nama varietas “Libtukom”, yaitu kependekan dari Liberika Tunggal Komposit.<br>Liberika libtukom dikembangakan di daerah Tanjung Jabung Barat, Jambi. Keunggulannya adalah tahan terhadap hama karat daun dan dapat ditaman di dataran rendah serta tanah gambut. Liberika libtukom memiliki kemiripan dengan jenis kopi excelsa, akan tetapi libtukom memiliki daging buah yang lebih tebal.</p><ul><li>Karakter Rasa Liberika</li></ul><p>Pada umumnya, karakteristik kopi liberika cenderung mirip dengan robusta ketimbang arabika. Ada beberapa hal yang membedakan liberika dengan robusta. Saat kopi liberika diseduh, akan tercium aroma buah dan bunga. Rasa yang dikeluarkan agak lebih \'woody\'. Bahkan beberapa orang menggambarkan rasanya seperti tembakau</p><ul><li>Habitat Tumbuh</li></ul><p>Daerah tropis dataran rendah dengan ketinggian 400 hingga 600 mdpl merupakan wilayah ideal agar tanaman liberika dapat tumbuh baik. Namun, kopi ini juga dapat tumbuh dan berbuah di daerah dengan ketinggian 1.200 mdpl.<br>Suhu ideal yang diperlukan agar tumbuh secara maksimal adalah 27 derajat hingga 30 derajat celcius, dengan curah hujan 1500 hingga 2500 mm per tahun.<br>Seperti pada jenis kopi lainnya, tanaman liberika tumbuh dengan baik pada lahan yang memperoleh sinar matahari secara penuh dan dibawah naungan pohon lain. Liberika dikenal juga dengan sebutan kopi nangka, karena biji kopinya yang berukuran besar serta dapat tumbuh setinggi 9 meter.<br>&nbsp;</p>'),(4,4,'Natural','<ul><li><strong>Pengertian</strong></li></ul><p>Metode pengolahan kopi yang paling sederhana dan paling organik adalah proses kering (dry processing). Proses kering ini sering disebut juga sebagai proses natural, karena selain simpel, buah kopinya pun tetap utuh. Bayangkan seperti mengeringkan buah anggur hingga menjadi kismis. Selain itu proses fermentasinya juga tidak menggunakan air seperti halnya pada proses basah atau giling basah.</p><ul><li><strong>Penyortiran Biji</strong></li></ul><p><img src=\"http://localhost:8000/media/Mask group_1668435900.png\"></p><p>Hal ini bertujuan untuk mengambil cerry merah dan membuang biji kopi cacat dengan cara merendamnya kemudian membuang yang mengapung hal ini dilakukan agar cerry yang dipakai adalah produk yang berkualitas.</p><ul><li><strong>Penjemuran (Fermentasi)</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(1)_1668435922.png\"></figure><p>Proses penjemuran biji pada proses natural berlangsung antara 5 - 6 minggu, disini para processor diwajibkan untuk terus menjaga kopi dari hujan. karena biji kopi sangat rentan terkena jamur karena iklim Indonesia sangat lembab.</p><ul><li><strong>Penggilingan</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(2)_1668435950.png\"></figure><p>Proses penggilingan bertujuan untuk memisahkan biji kopi dengan kulit dan daging buah agar mendapatkan green bean yang siap untuk menuju proses roasting</p>'),(5,4,'Full Wash','<ul><li><strong>Pengertian</strong></li></ul><p>Umumnya, proses ini bertujuan untuk menghilangkan semua kulit-kulit daging yang melekat pada biji kopi sebelum dikeringkan. Setelah dipanen, ceri-ceri kopi biasanya \'diseleksi\' terlebih dahulu dengan merendamnya di dalam air. hal tersebut bertujuan untuk mendapatkan rasa yang clean pada kopi</p><ul><li><strong>Penyortiran Biji</strong></li></ul><p><img src=\"http://localhost:8000/media/Mask group_1668436467.png\"></p><p>Di tahap ini, biji kopi dimasukkan ke dalam air dan jika biji kopi mengapung, ini menandakan biji kopi tersebut cacat. Biji kopi yang cacat ini kemudian dipisahkan dari biji kopi yang lain.</p><ul><li><strong>Pulping atau Pengupasan Kulit</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(1)_1668436492.png\"></figure><p>Pengupasan kulit dan daging biji kopi dengan menggunakan pulper atau alat pengupas. Saat dikupas dengan mesin pulper, biji kopi akan dimasukkan ke dalam bak penampung yang sudah diisi oleh air. Proses ini dilakukan untuk melarutkan lendir yang masih menempel pada kulit kopi (parchment).</p><ul><li><strong>Prendaman</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(3)_1668436506.png\"></figure><p>Kopi-kopi yang sudah dibersihkan ini masuk ke tahap berikutnya yaitu proses perendaman. Perendaman biasanya dilakukan selama 12 - 34 jam, tergantung dari faktor kelembapan dan suhu udara di lingkungan tersebut. Selama proses perendaman, air rendaman ini diganti sebanyak satu kali.</p><ul><li><strong>Penjemuran</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(4)_1668436525.png\"></figure><p>Tahap selanjutnya adalah penjemuran. Proses ini dilakukan untuk mengurangi kadar air pada biji kopi agar berada pada rasio 10-12%.</p>'),(6,4,'Honey','<ul><li><strong>Pengertian</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group_1668437302.png\"></figure><p>Proses ini ditemukan pertama kali di Brasil, yang dikenal dengan istilah Cereja Descascada, yang berarti ceri yang dikupas. Proses ini hampir mirip dengan proses basah (washed), namun di tahap ini lendir pada ceri kopi dihilangkan dengan menggunakan alat pencuci, tanpa melalui proses fermentasi sama sekali. Ceri kopi, memiliki lima lapisan yaitu kulit (pulp), lendir (mucilage), perkamen (parchment), kulit berwarna perak (chaff), dan biji kopi (coffee bean). Contohnya dapat dilihat pada gambar di bawah ini</p><ul><li><strong>Penyortiran Biji</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(1)_1668437316.png\"></figure><p>Sama dengan proses yang lain, Proses honey juga melakukan sortir ketat pada biji kopi untuk diolah. Hal ini dikarenakan lapisan mucilage pada biji kopi yang masih hijau (Belum Matang) tidak memiliki rasa manis malah terkesan pahit.</p><ul><li><strong>Penjemuran (Fermentasi)</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(2)_1668437330.png\"></figure><p>Disini adalah bagian yang cukup sulit dari 4 metode tradisional pengolahan biji pasca panen, dikarenakan proses pulping pada metode honey memiliki 3 kategori, Yaitu Yellow Honey, Red Honey dan Black Honey. Perbedaan dari 3 jenis itu sebagai berikut</p><ul><li>Yellow Honey<br>Dalam proses ini, hanya 25% lapisan mucilage yang tersisa. Proses pengeringan biasanya dilakukan di tempat yang tidak terlalu teduh supaya lebih cepat. Lama pengerjaan sekitar 8 hari.</li><li>Red Honey<br>Untuk Red Honey, terdapat 50% lapisan mucilage yang tersisa. Pengeringan dilakukan di cuaca mendung atau di tempat yang lumayan teduh. Proses ini selesai dalam waktu kurang lebih 12 hari.</li><li>Black Honey<br>Proses ini adalah yang paling lama dan paling beresiko dibandingkan yang lainnya. 100% lapisan mucilage menempel pada biji dan dikeringkan selama kurang lebih 30 hari di bawah shelter untuk hasil yang maksimal.<br>&nbsp;</li></ul>'),(7,5,'Cuping','<ul><li><strong>Pengertian</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group_1668437884.png\"></figure><p>Cupping memang dilakukan oleh para professional yang telah terlatih tapi praktek ini—untuk skala non komersial—juga bisa dilakukan oleh siapapun. Termasuk Anda. Dalam coffee cupping (atau sering disebut juga dengan coffee tasting), bisa dikatakan, prosesnya terjadi di dua tempat, yaitu di mulut dan di hidung. Adalah penting untuk mengetahui “proses yang terjadi di dalam dua tempat ini” jika Anda pengin mencoba menseriusi coffee cupping atau sekedar ingin lebih tahu jika sedang membicarakan kopi.<br>Bagian pertama dari proses pencicipan (cupping) adalah di dalam lidah, di sini kita akan merasakan karakteristik-karakteristik dasar dari kopi seperti acidity (karakter asam), sweetness (karakter manis), bitterness (karakter pahit), saltiness (karakter asin—jika ada), dan savories atau rasa intinya. Proses standar dari coffee cupping dimulai dengan mengendusnya dalam, lalu menyeruputnya dengan kuat sehingga kopi yang disesap itu bisa “terlempar” ke seluruh langit-langit mulut.</p><ul><li><strong>Mengenal Sifat Kopi</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(1)_1668437895.png\"></figure><p>Dalam pekerjaan coffee cupping, para coffee cuppers umumnya harus menuliskan notes yang mereka dapatkan dalam sebuah kertas tabel atau score sheet. Masing-masing proses membutuhkan kertas tabel yang berbeda-beda pula. Berikut karakteristik yang umumnya dinilai dari sebuah kopi:</p><ul><li>Sweetness<br>Seberapa banyak kandungan sweetness atau rasa manis yang dimiliki kopi itu? Ini adalah sifat yang paling diinginkan dari kopi, dan umumnya, semakin banyaknya sweetness-nya maka akan semakin baik.</li><li>Acidity<br>Seberapa acid/asam kopi itu? Dan seberapa menyenangkan keasamannya? Jika ada terlalu banyak keasaman (yang tidak terlalu menyenangkan) yang dikandungnya, maka kopi itu akan dikategorikan sebagai ‘sour’ atau asam sekali. Namun jika asam yang dikandungnya enak, maka itu akan membuat kopi lebih crispy atau juiciness.</li><li>Mouthfeel<br>Apakah kopi itu memiliki rasa yang ringan, lembut, sensasi penuh di mulut yang mirip seperti teh atau ia lebih terasa kaya, creamy dan heavy?</li><li>Flavor<br>Ini mungkin cuma sekedar mengecap, merasa macam-macam rasa kopi dan aroma dari satu jenis kopi tertentu, tapi juga seberapa menyenangkan rasa kopi itu? Masing-masing kopi yang dicoba memang berbeda-beda, tapi bagaimana menuangkan rasa-rasa yang berbeda itu dalam Bahasa sederhana yang mudah dipahami oleh konsumen.</li></ul>'),(8,5,'Defect','<ul><li><strong>Pengertian</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group_1668438368.png\"></figure><p>Defect atau cacat pada kopi adalah karakteristik sensasi rasa kopi yang tidak menyenangkan (negatif) yang terjadi karena beberapa faktor, diantaranya adalah pengolahan green bean yang tidak hati-hati, proses panen yang tidak tepat, kadar air yang kurang tepat selama penyimpanan, atau adanya cacat fisik pada biji kopi yang menyebabkan cacat rasa atau cacat aroma.</p><ul><li><strong>Baked Coffee</strong></li></ul><figure class=\"image\"><img src=\"http://localhost:8000/media/Mask group(1)_1668438376.png\"></figure><p>Cacat ini terjadi ketika kopi disangrai terlalu lama dengan suhu rendah tanpa mencapai first crack. Pernahkah Anda mendengar istilah stalling? Uniknya, cacat ini tidak bisa dilihat dengan kasat mata. Umumnya, kopi dengan cacat seperti ini menghasilkan rasa kopi yang flat, hambar, sedikit rasa manis, atau sering digambarkan sebagai rasa seperti roti tawar atau kertas.</p><ul><li><strong>Underdeveloped Coffee</strong></li></ul><p>Sudah jelas, cacat jenis ini adalah kebalikan dari underdeveloped yang baru saja kami bahas sebelumnya. Sebenarnya, kategori ini termasuk salah satu perdebatan sepanjang masa di industri kopi. Kenapa? Karena antara overdeveloped dan dark roast, perbedaannya tipis sekali. Bahkan, Matt Perger dari Barista Hustle dengan tegas menyatakan bahwa tidak ada kategori biji kopi yang disangrai mengalami overdeveloped.<br>Namun, saat penyangrai memanggang kopi lebih gelap dari tujuan awal, tentunya ini menjadikan kopi tersebut masuk dalam kategori rusak (defect). Hal yang paling terlihat jelas adalah hasil kopi yang sudah disangrai akan berwarna gelap mendekati hitam dan berminyak. Karakter rasa yang dapat dirasakan adalah pahit, rasanya seperti makan arang/batu bara, dan meninggalkan aftertaste yang kurang nyaman.</p><ul><li><strong>Quakers</strong></li></ul><p>Cacat jenis ini umum sekali ditemukan, terutama saat kita membeli kopi (whole beans) yang sudah dikemas. Quaker adalah biji kopi yang belum matang dan umumnya memiliki permukaan yang berkeriput. Sulit sekali mengidentifikasi quaker saat masih dalam bentuk green beans. Quaker umumnya terjadi karena disebabkan oleh kondisi tanah yang buruk sehingga sari gula dan pati dalam biji kopi tidak berkembang sempurna. Secara teknis ini bukan cacat yang dikarenakan metode sangrai, namun umumnya kita hanya dapat menemukan quaker setelah kopi disangrai. Untuk mendapatkan keseluruhan rasa kopi yang maksimal, quaker harus disortir dan dibuang. Jika tidak, kopi yang diseduh akan menghasilkan rasa seperti kertas, sereal, dan dry.</p><ul><li><strong>Overmented</strong></li></ul><p>Fermentasi kopi yang seimbang dapat menghasilkan karakter rasa buah yang eksotis dan kompleks serta memiliki acidity seperti buah anggur yang segar. Namun, apa yang terjadi jika fermentasi dibiarkan terlalu lama? Kopinya akan menghasilkan rasa seperti buah busuk atau cuka.</p><ul><li><strong>Baggy/ Past Corp</strong></li></ul><p>Cacat jenis ini dapat kita temukan saat biji kopi disimpan terlalu lama dalam kondisi yang kurang bagus. Saat menyesap kopi tersebut akan menghasilkan rasa kurang sedap seperti kardus atau kayu.</p>');
/*!40000 ALTER TABLE `course_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kursus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (3,'Beginner Class: Pengenalan Kopi','course/99CSwTSe4jF9ay1Iwc8nGIg4myGsPsSRnI6AuHIS.png','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique vestibulum vitae sit arcu volutpat purus faucibus nulla. Condimentum odio at adipiscing mus in scelerisque faucibus id morbi. Mauris, eget mauris etiam tempor</p>'),(4,'Intermediate Class : Pengolahan Kopi','course/RoC955DpcSPTWJecRYFyk8SOitchg9GaaGn3vfWF.png','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique vestibulum vitae sit arcu volutpat purus faucibus nulla. Condimentum odio at adipiscing mus in scelerisque faucibus id morbi. Mauris, eget mauris etiam tempor</p>'),(5,'Expert Class : Mengidentifikasi Kopi','course/MVlFXzYJV7kJgIjFju9tt0FvofomsO7bvAOwD1UW.png','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique vestibulum vitae sit arcu volutpat purus faucibus nulla. Condimentum odio at adipiscing mus in scelerisque faucibus id morbi. Mauris, eget mauris etiam tempor</p>');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_liked`
--

DROP TABLE IF EXISTS `forum_liked`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forum_liked` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_liked_forum_id_foreign` (`forum_id`),
  KEY `forum_liked_user_id_foreign` (`user_id`),
  CONSTRAINT `forum_liked_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`),
  CONSTRAINT `forum_liked_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_liked`
--

LOCK TABLES `forum_liked` WRITE;
/*!40000 ALTER TABLE `forum_liked` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_liked` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_topics`
--

DROP TABLE IF EXISTS `forum_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forum_topics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_topik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_topics`
--

LOCK TABLES `forum_topics` WRITE;
/*!40000 ALTER TABLE `forum_topics` DISABLE KEYS */;
INSERT INTO `forum_topics` VALUES (1,'Kopi'),(2,'Biji'),(3,'Pengolahan');
/*!40000 ALTER TABLE `forum_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forums` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `topic_id` bigint unsigned NOT NULL,
  `tulisan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forums_user_id_foreign` (`user_id`),
  KEY `forums_topic_id_foreign` (`topic_id`),
  CONSTRAINT `forums_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `forum_topics` (`id`),
  CONSTRAINT `forums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,3,1,'<p>Ut est fugiat aute ea id anim deserunt sunt labore amet et laborum. Voluptate velit incididunt ut in tempor laboris proident tempor ut ipsum ea nulla cillum. Est veniam sit cillum eu. Tempor velit qui nisi cupidatat mollit voluptate ullamco laboris consectetur officia aliquip. Reprehenderit cillum nulla ipsum consectetur dolore laboris.</p>','forum/tVmFvzMWUoIoGfyRX7ciwHwUaw0Vtz0PQoMujAQ2.png','2022-11-21 15:30:27','2022-11-21 15:30:27','Tips Pembuatan Kopi Hangat dengan Biji Robusta'),(2,2,2,'<p>Lorem Ipsum</p>','forum/rsny887UOwehQi08S2h5MnGIA8kassl4fNCaGr1r.png','2022-11-23 07:25:19','2022-11-23 07:25:19','Bagamana cara menyeduh kopi paling nikmat?');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (38,'2014_10_12_000000_create_users_table',1),(39,'2019_12_14_000001_create_personal_access_tokens_table',1),(40,'2022_06_19_015703_create_articles_table',1),(41,'2022_06_19_015747_create_courses_table',1),(42,'2022_06_19_015829_create_faqs_table',1),(43,'2022_06_19_015903_create_socmed_table',1),(44,'2022_07_06_144358_create_course_class_table',1),(45,'2022_11_03_151616_create_post_categories_table',1),(46,'2022_11_03_151653_create_posts_table',1),(47,'2022_11_18_000932_create_forum_topics_table',2),(48,'2022_11_18_000654_create_forums_table',3),(49,'2022_11_18_002545_create_forum_liked_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socmeds`
--

DROP TABLE IF EXISTS `socmeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socmeds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socmeds`
--

LOCK TABLES `socmeds` WRITE;
/*!40000 ALTER TABLE `socmeds` DISABLE KEYS */;
INSERT INTO `socmeds` VALUES (1,'Instagram','https://www.instagram.com/nimaya.coffee/'),(2,'Facebook','https://www.facebook.com/profile.php?id=100084218749926'),(3,'Gmail','mailto:linggajauhari9@gmail.com');
/*!40000 ALTER TABLE `socmeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com','$2y$10$7G5y.oY4GX7vLcDXaBG/weMYVh26tbya.FNLYk5Q5.zDSOEzIPcLm','user/8GVxBKImwRMbk6RxJnW5BoiCv1CaTltks4mmPTTL.png',1),(2,'User','user@gmail.com','$2y$10$xfRLA/kz5Ntl0WKrWLsGAefI1.V9BCBARM1jVYZicpI.u7s9rUf8S','user/qoBCAre19KnAHZ1xpDfP4DbOK30kG5ycoIrQrrno.png',0),(3,'Lingga','lingga@gmail.com','$2y$10$zCPllz6CDPe80wPYXou1keyT6dPNHH6yOV1fOkiUFbViG4RittCnG','user/IqgsQzyD4sk959M2eIBvBjz4mgUujXUjofmLXPgv.png',0),(5,'Marko','marko@gmail.com','$2y$10$i5xMpMYk13HVmcKN0SWoUuT8dl3LWob9dsulN6T.S.dD9G2CozO0m','user/8UD6HKUlUpNN4TjpyTI3O8IbgbayIAwwmODXlPz6.png',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'nimaya_kopi'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-23 22:09:16
