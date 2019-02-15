<?php
include "banner.php";
echo"
";
echo "root@F_Hub-# ";
$pilih = trim(fgets(STDIN));

if($pilih == 1){
	system("git clone http://github.com/FajarTheGGman/LazadaChecker");
	system("cd LazadaChecker");
	system("sh install");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan tools : node lazada.js";
}elseif($pilih == 2){
	system("git clone http://github.com/FajarTheGGman/SpamCallJS");
	system("cd SpamCallJS");
	system("sh install");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : node spam.js";
}elseif($pilih == 3){
	system("git clone http://github.com/FajarTheGGman/HashCracker");
	system("cd HashCracker");
	system("sh install");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : node hash.js";
}elseif($pilih == 4){
	system("git clone http://github.com/FajarTheGGman/IGINFORM");
	system("cd IGINFORM");
	system("sh install");
	echo "Instalasi Selesai !!!";
	echo "
Cara menjalankan : node ig.js";
}elseif($pilih == 5){
	system("git clone http://github.com/FajarTheGGman/F-Tools");
	system("cd F-Tools");
	echo "Username nya : F-Tools";
	echo "Password nya : fajarfirdaus";
	echo "Instalasi Selesai !!!";
	echo "
Cara menjalankan : sh F-Tools.sh";
}elseif($pilih == 6){
	system("git clone http://github.com/FajarTheGGman/SpamCall");
	system("cd SpamCall");
	system("apt-get install php -y");
	echo "Instalasi Selesai !!!";
	echo "
Cara menjalankan : php spam.php";
}elseif($pilih == 7){
	system("git clone http://github.com/FajarTheGGman/FakeCall");
	system("cd FakeCall");
	echo "Instalasi Selesai !!!";
	echo "
Cara menjalankan : sh spam.sh";
}elseif($pilih == 8){
	system("git clone http://github.com/FajarTheGGman/IpTracker");
	system("cd IpTracker");
	system("apt-get install php");
	echo "Instalasi Selesai !!!";
	echo "
Cara menjalankan : php ip.php";
}elseif($pilih == 9){
	system("git clone http://github.com/FajarTheGGman/F-Dos");
	system("cd F-Dos");
	system("apt-get install python2");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : python2 F-Dos.py";
}elseif($pilih == 10){
	system("git clone http://github.com/FajarTheGGman/IpChecker");
	system("apt-get install php");
	system("cd IpChecker");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php ip.php";
}elseif($pilih == 11){
	system("git clone http://github.com/FajarTheGGman/ProxyPicker");
	system("cd ProxyPicker");
	system("apt-get insta php");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php proxypicker.php";
}elseif($pilih == 12){
	system("git clone http://github.com/FajarTheGGman/OpenHash");
	system("apt-get install php");
	system("cd OpenHash");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php openhash.php";
}elseif($pilih == 13){
	system("git clone http://github.com/FajarTheGGman/IslamKiblat");
	system("apt-get install php");
	system("cd IslamKiblat");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php islamkiblat.php";
}elseif($pilih == 14){
	system("git clone http://github.com/FajarTheGGman/IslamPray");
	system("apt-get install php");
	system("cd IslamPray");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php islam.php";
}elseif($pilih == 15){
	system("git clone http://github.com/FajarTheGGman/ScDeface323");
	system("cd ScDeface323");
	system("ls");
}elseif($pilih == 16){
	system("git clone http://github.com/FajarTheGGman/IGStalker");
	system("cd IGStalker");
	system("apt-get install php");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php ig.php";
}elseif($pilih == 17){
	system("git clone http://github.com/FajarTheGGman/HashMaker");
	system("cd HashMaker");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : sh hashmaker.sh";
}elseif($pilih == 18){
	system("git clone http://github.com/FajarTheGGman/GitInform");
	system("apt-get install php");
	system("cd GitInform");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php gitinform.php";
}elseif($pilih == 19){
	system("git clone http://github.com/FajarTheGGman/Xploit");
	system("cd XSploit");
	echo "Instalasi selesai !!!";
	echo "Username : XSploit
	Password : fajarfirdaus";
	echo "
Cara menjalankan : sh xsploit.sh";
}elseif($pilih == 20){
	system("git clone http://github.com/FajarTheGGman/NetWorkSpoofing");
	system("cd NetWorkSpoofing");
	system("Instalasi selesai !!!");
	echo "Username : NetWorkSpoofing
	Password : fajarfirdaus";
	echo "
Cara menjalankan : sh NetWorkSpofing.sh";
}elseif($pilih == 21){
	system("git clone http://github.com/FajarTheGGman/MetaBot");
	system("cd MetaBot");
	echo "Instalasi selesai !!!";
	echo "Username : MetaBot
	password : fajarfirdaus";
	echo "
Cara menjalankan : sh metabot.sh";
}elseif($pilih == 22){
	system("git clone https://github.com/FajarTheGGman/Csrf-file-upload-exploiter");
	system("cd Crsf-file-upload-exploiter");
	system("ls");
}elseif($pilih == 23){
	system("git clone https://github.com/FajarTheGGman/PasTen");
	system("cd PasTen");
	echo "Instalasi Selesai !!!";
	echo "
Cara menjalankan : sh pasten.sh";
}elseif($pilih == 24){
	system("git clone https://github.com/FajarTheGGman/WLoad");
	system("cd WLoad");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : sh WLoad.sh";
}elseif($pilih == 25){
	system("git clone https://github.com/FajarTheGGman/DefaceTools");
	system("cd DefaceTools");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : sh defacetools.sh";
}elseif($pilih == 26){
	system("git clone https://github.com/FajarTheGGman/CekCuaca");
	system("cd CekCuaca");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan :  sh cuaca.sh";
}elseif($pilih == 27){
	system("git clone https://github.com/FajarTheGGman/TheToxicBot");
	system("cd TheToxicBot");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : php thetoxicbot.php";
}elseif($pilih == 28){
	system("git clone https://github.com/FajarTheGGman/FuckingPentest");
	system("cd FuckingPentest");
	echo "Instalasi selesai !!!";
	echo "Username : FuckingPentest
	Password : fajarfirdaus";
	echo "
Cara menjalankan : sh fuckingpentenst.sh";
}elseif($pilih == 29){
	system("git clone https://github.com/FajarTheGGman/BugMaker");
	system("cd BugMaker");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : sh bugmaker.sh";
}elseif($pilih == 30){
	system("git clone https://github.com/FajarTheGGman/WebDavExploiter");
	system("cd WebDavExploiter");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : sh webdavexploiter.sh";
}elseif($pilih == 31){
	system("git clone https://github.com/FajarTheGGman/Sqlbot");
	system("cd Sqlbot");
	echo "Instalasi selesai !!!";
	echo "
Cara menjalankan : sh sqlbot.sh";
}elseif($pilih == 0){
echo "Terimakasih Telah Menggunakan tools gw :)";
sleep(1);
echo "
Jangan di recode yak :)";
sleep(1);
	system("exit");
}
?>
