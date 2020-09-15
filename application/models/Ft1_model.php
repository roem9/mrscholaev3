<?php
    class Ft1_model extends CI_MODEL{
        public function kata(){
            $data = [
                // 1 - 9
                    [
                        "id" => "1",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَا",
                        "kata_arab" => "مَا",
                        "arti" => "Apa",
                        "huruf" => array_unique(["مَ","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "2",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَنْ",
                        "kata_arab" => "مَنْ",
                        "arti" => "Siapa",
                        "huruf" => array_unique(["مَ","نْ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "3",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَاذَا",
                        "kata_arab" => "مَاذَا",
                        "arti" => "Apa",
                        "huruf" => array_unique(["مَ","ا","ذَ","ا"]),
                        "status" => "off"
                    ],
                    [
                        "id" => "4",
                        "tema" => "Mufrodat 1",
                        "kata" => "لِـمَاذَا",
                        "kata_arab" => "لِمَاذَا",
                        "arti" => "Kenapa",
                        "huruf" => array_unique(["لِ","مَ","ا","ذَ","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "5",
                        "tema" => "Mufrodat 1",
                        "kata" => "مِمَّ",
                        "kata_arab" => "مِمَّ",
                        "arti" => "Dari apa",
                        "huruf" => array_unique(["مِ","مَّ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "6",
                        "tema" => "Mufrodat 1",
                        "kata" => "بِـمَاذَا",
                        "kata_arab" => "بِمَاذَا",
                        "arti" => "Dengan apa",
                        "huruf" => array_unique(["بِ","مَ","ا","ذَ","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "7",
                        "tema" => "Mufrodat 1",
                        "kata" => "لِأَيِّ شَـيْـئٍ",
                        "kata_arab" => "لِأَيِّ شَيْئٍ",
                        "arti" => "Untuk apa",
                        "huruf" => array_unique(["لِ","أَ","يِّ","_","شَ","يْ","ئٍ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "8",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَعَ مَنْ",
                        "kata_arab" => "مَعَ مَنْ",
                        "arti" => "Bersama siapa",
                        "huruf" => array_unique(["مَ","عَ","_","مَ","نْ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "9",
                        "tema" => "Mufrodat 1",
                        "kata" => "لِـمَنْ",
                        "kata_arab" => "لِمَنْ",
                        "arti" => "Untuk siapa",
                        "huruf" => array_unique(["لِ","مَ","نْ"]),
                        "status" => "on"
                    ],
                

                // 10 - 18
                    [
                        "id" => "10",
                        "tema" => "Mufrodat 2",
                        "kata" => "أَيْنَ",
                        "kata_arab" => "أَيْنَ",
                        "arti" => "Dimana",
                        "huruf" => array_unique(["أَ","يْ","نَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "11",
                        "tema" => "Mufrodat 2",
                        "kata" => "إِلَـى أَيْنَ",
                        "kata_arab" => "إِلَى أَيْنَ",
                        "arti" => "Kemana",
                        "huruf" => array_unique(["إِ","لَ","ى","_","أَ","يْ","نَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "12",
                        "tema" => "Mufrodat 2",
                        "kata" => "مِنْ أَيْنَ",
                        "kata_arab" => "مِنْ أَيْنَ",
                        "arti" => "Darimana",
                        "huruf" => array_unique(["مِ","نْ","_","أَ","يْ","نَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "13",
                        "tema" => "Mufrodat 2",
                        "kata" => "كَيْفَ",
                        "kata_arab" => "كَيْفَ",
                        "arti" => "Bagaimana",
                        "huruf" => array_unique(["كَ","يْ","فَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "14",
                        "tema" => "Mufrodat 2",
                        "kata" => "مَتَـى",
                        "kata_arab" => "مَتَى",
                        "arti" => "Kapan",
                        "huruf" => array_unique(["مَ","تَ","ى"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "15",
                        "tema" => "Mufrodat 2",
                        "kata" => "كَـمْ",
                        "kata_arab" => "كَمْ",
                        "arti" => "Berapa",
                        "huruf" => array_unique(["كَ","مْ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "16",
                        "tema" => "Mufrodat 2",
                        "kata" => "بِكَـمْ",
                        "kata_arab" => "بِكَمْ",
                        "arti" => "Berapa (harga)",
                        "huruf" => array_unique(["بِ","كَ","مْ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "17",
                        "tema" => "Mufrodat 2",
                        "kata" => "هَلْ / أَ",
                        "kata_arab" => "هَلَْ",
                        "arti" => "Apakah",
                        "huruf" => array_unique(["هَ","لْ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "18",
                        "tema" => "Mufrodat 2",
                        "kata" => "أَيُّ",
                        "kata_arab" => "أَيُّ",
                        "arti" => "Yang mana",
                        "huruf" => array_unique(["أَ","يُّ"]),
                        "status" => "on"
                    ],

                // mufrodat 3
                    [
                        "id" => "175",
                        "tema" => "Mufrodat 3",
                        "kata" => "أَمَامَ",
                        "kata_arab" => "أَمَامَ",
                        "arti" => "Didepan",
                        "huruf" => array_unique(["أَ","مَ","ا","مَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "176",
                        "tema" => "Mufrodat 3",
                        "kata" => "وَرَاءَ / خَلْفَ",
                        "kata_arab" => "وَرَاءَ",
                        "arti" => "Dibelakang",
                        "huruf" => array_unique(["وَ","رَ","ا","ءَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "177",
                        "tema" => "Mufrodat 3",
                        "kata" => "فَـوْقَ / عَلَـى",
                        "kata_arab" => "فَوْقَ",
                        "arti" => "Diatas",
                        "huruf" => array_unique(["فَ","وْ","قَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "178",
                        "tema" => "Mufrodat 3",
                        "kata" => "تَـحْـتَ",
                        "kata_arab" => "تَحْتَ",
                        "arti" => "Dibawah",
                        "huruf" => array_unique(["تَ","حْ","تَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "179",
                        "tema" => "Mufrodat 3",
                        "kata" => "دَاخِـلَ",
                        "kata_arab" => "دَاخِلَ",
                        "arti" => "Didalam",
                        "huruf" => array_unique(["دَ","ا","خِ","لَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "180",
                        "tema" => "Mufrodat 3",
                        "kata" => "خَارِجَ",
                        "kata_arab" => "خَارِجَ",
                        "arti" => "Diluar",
                        "huruf" => array_unique(["خَ","ا","رِ","جَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "181",
                        "tema" => "Mufrodat 3",
                        "kata" => "بَـيْـنَ",
                        "kata_arab" => "بَيْنَ",
                        "arti" => "Diantara",
                        "huruf" => array_unique(["بَ","يْ","نَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "182",
                        "tema" => "Mufrodat 3",
                        "kata" => "جَانِبَ",
                        "kata_arab" => "جَانِبَ",
                        "arti" => "Disamping",
                        "huruf" => array_unique(["جَ","ا","نِ","بَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "183",
                        "tema" => "Mufrodat 3",
                        "kata" => "هُنَا",
                        "kata_arab" => "هُنَا",
                        "arti" => "Disini",
                        "huruf" => array_unique(["هُ","نَ","ا","كَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "184",
                        "tema" => "Mufrodat 3",
                        "kata" => "هُنَاكَ",
                        "kata_arab" => "هُنَاكَ",
                        "arti" => "Disana",
                        "huruf" => array_unique(["هُ","نَ","ا","كَ"]),
                        "status" => "on"
                    ],

                // Mufrodat 4
                    [
                        "id" => "185",
                        "tema" => "Mufrodat 4",
                        "kata" => "اَلْـيَـوْمَ",
                        "kata_arab" => "اَلْيَوْمَ",
                        "arti" => "Hari ini",
                        "huruf" => array_unique(["اَلْ","يَ","وْ","مَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "186",
                        "tema" => "Mufrodat 4",
                        "kata" => "اَلْآنَ",
                        "kata_arab" => "اَلْآنَ",
                        "arti" => "Sekarang",
                        "huruf" => array_unique(["اَلْ","آ","نَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "187",
                        "tema" => "Mufrodat 4",
                        "kata" => "قَـبْـلَ",
                        "kata_arab" => "قَبْلَ",
                        "arti" => "Sebelum",
                        "huruf" => array_unique(["قَ","بْ","لَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "188",
                        "tema" => "Mufrodat 4",
                        "kata" => "بَـعْـدَ",
                        "kata_arab" => "بَعْدَ",
                        "arti" => "Sesudah",
                        "huruf" => array_unique(["بَ","عْ","دَ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "189",
                        "tema" => "Mufrodat 4",
                        "kata" => "غَـدًا",
                        "kata_arab" => "غَدًا",
                        "arti" => "Besok",
                        "huruf" => array_unique(["غَ","دً","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "190",
                        "tema" => "Mufrodat 4",
                        "kata" => "بَـعْـدَ الْـغَـدِّ",
                        "kata_arab" => "بَعْدَ الْغَدِّ",
                        "arti" => "Besok lusa",
                        "huruf" => array_unique(["بَ","عْ","دَ","_","الْ","غَ","دِّ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "191",
                        "tema" => "Mufrodat 4",
                        "kata" => "بِالْأَمْـسِ",
                        "kata_arab" => "بِالْأَمْسِ",
                        "arti" => "Kemarin",
                        "huruf" => array_unique(["بِ","الْ","أَ","مْ","سِ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "192",
                        "tema" => "Mufrodat 4",
                        "kata" => "أَوَّلَ الْأَمْسِ",
                        "kata_arab" => "أَوَّلَ الْأَمْسِ",
                        "arti" => "Kemarin lusa",
                        "huruf" => array_unique(["أَ","وَّ","لَ","_","الْ","أَ","مْ","سِ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "193",
                        "tema" => "Mufrodat 4",
                        "kata" => "صَبَاحًا",
                        "kata_arab" => "صَبَاحًا",
                        "arti" => "Pagi",
                        "huruf" => array_unique(["صَ","بَ","ا","حً","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "194",
                        "tema" => "Mufrodat 4",
                        "kata" => "نَـهَارًا",
                        "kata_arab" => "نَهَارًا",
                        "arti" => "Siang",
                        "huruf" => array_unique(["نَ","هَ","ا","رً","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "195",
                        "tema" => "Mufrodat 4",
                        "kata" => "مَـسَاءً",
                        "kata_arab" => "مَسَاءً",
                        "arti" => "Sore",
                        "huruf" => array_unique(["مَ","سَ","ا","ءً"]),
                        "status" => "on"
                    ],
                
                // Mufrodat 5
                    [
                        "id" => "196",
                        "tema" => "Mufrodat 5",
                        "kata" => "لَـيْـلًا",
                        "kata_arab" => "لَيْلًا",
                        "arti" => "Malam",
                        "huruf" => array_unique(["لَ","يْ","لً","ا"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "197",
                        "tema" => "Mufrodat 5",
                        "kata" => "لَاحِـقًا",
                        "kata_arab" => "لَاحِقًا",
                        "arti" => "Nanti",
                        "huruf" => array_unique(["لَ","ا","حِ","قً","ا"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "198",
                        "tema" => "Mufrodat 5",
                        "kata" => "آنِـفًا",
                        "kata_arab" => "آنِفًا",
                        "arti" => "Tadi",
                        "huruf" => array_unique(["آ","نِ","فً","ا"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "199",
                        "tema" => "Mufrodat 5",
                        "kata" => "حَـدِيْـثًا",
                        "kata_arab" => "حَدِيْثًا",
                        "arti" => "Baru saja",
                        "huruf" => array_unique(["حَ","دِ","يْ","ثً","ا"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "200",
                        "tema" => "Mufrodat 5",
                        "kata" => "بَـعْـدَ قَـلِـيْـلٍ",
                        "kata_arab" => "بَعْدَ قَلِيْلٍ",
                        "arti" => "Sebentar lagi",
                        "huruf" => array_unique(["بَ","عْ","دَ","_","قَ","لِ","يْ","لٍ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "201",
                        "tema" => "Mufrodat 5",
                        "kata" => "اَلْأُسْـبُـوْعُ الْمَاضِـى",
                        "kata_arab" => "اَلْأُسْبُوْعُ الْمَاضِى",
                        "arti" => "Minggu lalu",
                        "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","مَ","ضِ","ى","ا"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "202",
                        "tema" => "Mufrodat 5",
                        "kata" => "اَلْأُسْـبُـوْعُ الْآتِى",
                        "kata_arab" => "اَلْأُسْبُوْعُ الْآتِى",
                        "arti" => "Minggu depan",
                        "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","آ","تِ","ى"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "203",
                        "tema" => "Mufrodat 5",
                        "kata" => "اَلشَّـهْـرُ الْـمَاضِـى",
                        "kata_arab" => "اَلشَّهْرُ الْمَاضِى",
                        "arti" => "Bulan lalu",
                        "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","مَ","ا","ضِ","ى"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "204",
                        "tema" => "Mufrodat 5",
                        "kata" => "اَلشَّـهْـرُ الْآتِى",
                        "kata_arab" => "اَلشَّهْرُ الْآتِى",
                        "arti" => "Bulan depan",
                        "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","آ","تِ","ى"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "205",
                        "tema" => "Mufrodat 5",
                        "kata" => "اَلسَّـنَـةُ الْـمَاضِـيَـةُ",
                        "kata_arab" => "اَلسَّنَةُ الْمَاضِيَةُ",
                        "arti" => "Tahun lalu",
                        "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","مَ","ا","ضِ","يَ","ةُ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "206",
                        "tema" => "Mufrodat 5",
                        "kata" => "اَلسَّـنَـةُ الْآتِـيَـةُ",
                        "kata_arab" => "اَلسَّنَةُ الْآتِيَةُ",
                        "arti" => "Tahun depan",
                        "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","آ","تِ","يَ","ةُ"]),
                        "status" => "on",
                    ],
                
                // Mufrodat 6
                    [
                        "id" => "207",
                        "tema" => "Mufrodat 6",
                        "kata" => "عَـقْـلٌ",
                        "kata_arab" => "عَقْلٌ",
                        "arti" => "Akal",
                        "huruf" => array_unique(["عَ","قْ","لٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "208",
                        "tema" => "Mufrodat 6",
                        "kata" => "رَأْسٌ",
                        "kata_arab" => "رَأْسٌ",
                        "arti" => "Kepala",
                        "huruf" => array_unique(["رَ","أْ","سٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "209",
                        "tema" => "Mufrodat 6",
                        "kata" => "وَجْـهٌ",
                        "kata_arab" => "وَجْهٌ",
                        "arti" => "Wajah",
                        "huruf" => array_unique(["وَ","جْ","هٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "210",
                        "tema" => "Mufrodat 6",
                        "kata" => "شَـعْـرٌ",
                        "kata_arab" => "شَعْرٌ",
                        "arti" => "Rambut",
                        "huruf" => array_unique(["شَ","عْ","رٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "211",
                        "tema" => "Mufrodat 6",
                        "kata" => "جَـبْـهَـةٌ",
                        "kata_arab" => "جَبْهَةٌ",
                        "arti" => "Dahi",
                        "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "212",
                        "tema" => "Mufrodat 6",
                        "kata" => "أُذُنٌ",
                        "kata_arab" => "أُذُنٌ",
                        "arti" => "Telinga",
                        "huruf" => array_unique(["أُ","ذُ","نٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "213",
                        "tema" => "Mufrodat 6",
                        "kata" => "عَارِضٌ",
                        "kata_arab" => "عَارِضٌ",
                        "arti" => "Jambang",
                        "huruf" => array_unique(["عَ","ا","رِ","ضٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "214",
                        "tema" => "Mufrodat 6",
                        "kata" => "عَـيْـنٌ",
                        "kata_arab" => "عَيْنٌ",
                        "arti" => "Mata",
                        "huruf" => array_unique(["عَ","يْ","نٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "215",
                        "tema" => "Mufrodat 6",
                        "kata" => "أَنْفٌ",
                        "kata_arab" => "أَنْفٌ",
                        "arti" => "Hidung",
                        "huruf" => array_unique(["أَ","نْ","فٌ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "216",
                        "tema" => "Mufrodat 6",
                        "kata" => "خَـدٌّ",
                        "kata_arab" => "خَدٌّ",
                        "arti" => "Pipi",
                        "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"]),
                        "status" => "on",
                    ],
                    [
                        "id" => "217",
                        "tema" => "Mufrodat 6",
                        "kata" => "سِـنٌّ",
                        "kata_arab" => "سِنٌّ",
                        "arti" => "Gigi",
                        "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"]),
                        "status" => "on",
                    ],

                // Mufrodat 7
                    [
                        "id" => "218",
                        "tema" => "Mufrodat 7",
                        "kata" => "حَاجِـبٌ",
                        "kata_arab" => "حَاجِبٌ",
                        "arti" => "Alis",
                        "huruf" => array_unique(["حَ","ا","جِ","بٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "219",
                        "tema" => "Mufrodat 7",
                        "kata" => "هُـدْبٌ",
                        "kata_arab" => "هُدْبٌ",
                        "arti" => "Bulu mata",
                        "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "220",
                        "tema" => "Mufrodat 7",
                        "kata" => "فَـمٌّ",
                        "kata_arab" => "فَمٌّ",
                        "arti" => "Mulut",
                        "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "221",
                        "tema" => "Mufrodat 7",
                        "kata" => "لِـسَانٌ",
                        "kata_arab" => "لِسَانٌ",
                        "arti" => "Lisan",
                        "huruf" => array_unique(["لِ","سَ","ا","نٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "222",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَارِبٌ",
                        "kata_arab" => "شَارِبٌ",
                        "arti" => "Kumis",
                        "huruf" => array_unique(["شَ","ا","رِ","بٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "223",
                        "tema" => "Mufrodat 7",
                        "kata" => "لِـحْـيَـةٌ",
                        "kata_arab" => "لِحْيَةٌ",
                        "arti" => "Jenggot",
                        "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "224",
                        "tema" => "Mufrodat 7",
                        "kata" => "دَمْـعٌ",
                        "kata_arab" => "دَمْعٌ",
                        "arti" => "Air mata",
                        "huruf" => array_unique(["دَ","مْ","عٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "225",
                        "tema" => "Mufrodat 7",
                        "kata" => "ذَقَـنٌ",
                        "kata_arab" => "ذَقَنٌ",
                        "arti" => "Dagu",
                        "huruf" => array_unique(["ذَ","قَ","نٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "226",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَـفَـةٌ",
                        "kata_arab" => "شَفَةٌ",
                        "arti" => "Bibir",
                        "huruf" => array_unique(["شَ","فَ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "227",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَـفَـةٌ عُـلْـيَا",
                        "kata_arab" => "شَفَةٌ عُلْيَا",
                        "arti" => "Bibir atas",
                        "huruf" => array_unique(["شَ","فَ","ةٌ","_","عُ","لْ","يَ","ا"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "228",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَـفَـةٌ سُـفْـلَـى",
                        "kata_arab" => "شَفَةٌ سُفْلَى",
                        "arti" => "Bibir bawah",
                        "huruf" => array_unique(["شَ","فَ","ةٌ","_","سُ","فْ","لَ","ى"]),
                        "status" => "on"
                    ],

                // Mufrodat 8
                    [
                        "id" => "229",
                        "tema" => "Mufrodat 8",
                        "kata" => "مُـخٌّ",
                        "kata_arab" => "مُخٌّ",
                        "arti" => "Otak",
                        "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "230",
                        "tema" => "Mufrodat 8",
                        "kata" => "عُـنُـقٌ",
                        "kata_arab" => "عُنُقٌ",
                        "arti" => "Leher",
                        "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "231",
                        "tema" => "Mufrodat 8",
                        "kata" => "بَـدَنٌ",
                        "kata_arab" => "بَدَنٌ",
                        "arti" => "Badan",
                        "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "232",
                        "tema" => "Mufrodat 8",
                        "kata" => "يَـدٌ",
                        "kata_arab" => "يَدٌ",
                        "arti" => "Tangan",
                        "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "233",
                        "tema" => "Mufrodat 8",
                        "kata" => "ذِرَاعٌ",
                        "kata_arab" => "ذِرَاعٌ",
                        "arti" => "Lengan",
                        "huruf" => array_unique(["ذِ","رَ","ا","عٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "234",
                        "tema" => "Mufrodat 8",
                        "kata" => "بَـطْـنٌ",
                        "kata_arab" => "بَطْنٌ",
                        "arti" => "Perut",
                        "huruf" => array_unique(["بَ","طْ","نٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "235",
                        "tema" => "Mufrodat 8",
                        "kata" => "حَـقْـوٌ",
                        "kata_arab" => "حَقْوٌ",
                        "arti" => "Pinggang",
                        "huruf" => array_unique(["حَ","قْ","وٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "236",
                        "tema" => "Mufrodat 8",
                        "kata" => "كَـتِـفٌ",
                        "kata_arab" => "كَتِفٌ",
                        "arti" => "Pundak",
                        "huruf" => array_unique(["كَ","تِ","فٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "237",
                        "tema" => "Mufrodat 8",
                        "kata" => "ظَـهْـرٌ",
                        "kata_arab" => "ظَهْرٌ",
                        "arti" => "Punggung",
                        "huruf" => array_unique(["ظَ","هْ","رٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "238",
                        "tema" => "Mufrodat 8",
                        "kata" => "صَـدْرٌ",
                        "kata_arab" => "صَدْرٌ",
                        "arti" => "Dada",
                        "huruf" => array_unique(["صَ","دْ","رٌ"]),
                        "status" => "on"
                    ],

                // Mufrodat 9
                    [
                        "id" => "239",
                        "tema" => "Mufrodat 9",
                        "kata" => "ثَـدْيٌ",
                        "kata_arab" => "ثَدْيٌ",
                        "arti" => "Payudara",
                        "huruf" => array_unique(["ثَ","دْ","يٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "240",
                        "tema" => "Mufrodat 9",
                        "kata" => "حَـلَـمَـةُ الثَّـدْيِ",
                        "kata_arab" => "حَلَمَةُ الثَّدْيِ",
                        "arti" => "Puting payudara",
                        "huruf" => array_unique(["حَ","لَ","مَ","ةُ","_","ال","ثَّ","دْ","يِ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "239",
                        "tema" => "Mufrodat 9",
                        "kata" => "سُـرَّةٌ",
                        "kata_arab" => "سُرَّةٌ",
                        "arti" => "Pusar",
                        "huruf" => array_unique(["سُ","رَّ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "240",
                        "tema" => "Mufrodat 9",
                        "kata" => "رُكْـبَـةٌ",
                        "kata_arab" => "رُكْبَةٌ",
                        "arti" => "Lutut",
                        "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "241",
                        "tema" => "Mufrodat 9",
                        "kata" => "مِـرْفَـقٌ",
                        "kata_arab" => "مِرْفَقٌ",
                        "arti" => "Siku",
                        "huruf" => array_unique(["مِ","رْ","فَ","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "243",
                        "tema" => "Mufrodat 9",
                        "kata" => "رِجْـلٌ",
                        "kata_arab" => "رِجْلٌ",
                        "arti" => "Kaki",
                        "huruf" => array_unique(["رِ","جْ","لٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "244",
                        "tema" => "Mufrodat 9",
                        "kata" => "فَـخِـذٌ",
                        "kata_arab" => "فَخِذٌ",
                        "arti" => "Paha",
                        "huruf" => array_unique(["فَ","خِ","ذٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "242",
                        "tema" => "Mufrodat 9",
                        "kata" => "إِبْـطٌ",
                        "kata_arab" => "إِبْطٌ",
                        "arti" => "Ketiak",
                        "huruf" => array_unique(["إِ","بْ","طٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "246",
                        "tema" => "Mufrodat 9",
                        "kata" => "قَـدَمٌ",
                        "kata_arab" => "قَدَمٌ",
                        "arti" => "Telapk kaki",
                        "huruf" => array_unique(["قَ","دَ","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "247",
                        "tema" => "Mufrodat 9",
                        "kata" => "كَـعْـبٌ",
                        "kata_arab" => "كَعْبٌ",
                        "arti" => "Mata kaki",
                        "huruf" => array_unique(["كَ","عْ","بٌ"]),
                        "status" => "on"
                    ],

                // Mufrodat 10
                    [
                        "id" => "245",
                        "tema" => "Mufrodat 10",
                        "kata" => "سَاقٌّ",
                        "kata_arab" => "سَاقٌّ",
                        "arti" => "Betis",
                        "huruf" => array_unique(["سَ","ا","قٌّ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "250",
                        "tema" => "Mufrodat 10",
                        "kata" => "ظُـفْـرٌ",
                        "kata_arab" => "ظُفْرٌ",
                        "arti" => "Kuku",
                        "huruf" => array_unique(["ظُ","فْ","رٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "253",
                        "tema" => "Mufrodat 10",
                        "kata" => "إِبْـهَامٌ",
                        "kata_arab" => "إِبْهَامٌ",
                        "arti" => "Ibu jari",
                        "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "254",
                        "tema" => "Mufrodat 10",
                        "kata" => "سَـبَابَـةٌ",
                        "kata_arab" => "سَبَابَةٌ",
                        "arti" => "Telunjuk",
                        "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "255",
                        "tema" => "Mufrodat 10",
                        "kata" => "وُسْـطَـى",
                        "kata_arab" => "وُسْطَى",
                        "arti" => "Jari tengah",
                        "huruf" => array_unique(["وُ","سْ","طَ","ى"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "256",
                        "tema" => "Mufrodat 10",
                        "kata" => "بِـنْـصِـرٌ",
                        "kata_arab" => "بِنْصِرٌ",
                        "arti" => "Jari manis",
                        "huruf" => array_unique(["بِ","نْ","صِ","رٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "257",
                        "tema" => "Mufrodat 10",
                        "kata" => "خِـنْـصِـرٌ",
                        "kata_arab" => "خِنْصِرٌ",
                        "arti" => "Jari kelingking",
                        "huruf" => array_unique(["خِ","نْ","صِ","رٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "251",
                        "tema" => "Mufrodat 10",
                        "kata" => "مَـسَامٌ",
                        "kata_arab" => "مَسَامٌ",
                        "arti" => "Pori-pori",
                        "huruf" => array_unique(["مَ","سَ","ا","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "249",
                        "tema" => "Mufrodat 10",
                        "kata" => "عَـقِـبٌ",
                        "kata_arab" => "عَقِبٌ",
                        "arti" => "Tumit",
                        "huruf" => array_unique(["عَ","قِ","بٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "252",
                        "tema" => "Mufrodat 10",
                        "kata" => "شَامَـةٌ",
                        "kata_arab" => "شَامَةٌ",
                        "arti" => "Tahi lalat",
                        "huruf" => array_unique(["شَ","ا","مَ","ةٌ"]),
                        "status" => "on"
                    ],

                // Mufrodat 11
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "رُوْحٌ",
                        "kata_arab" => "رُوْحٌ",
                        "arti" => "Ruh",
                        "huruf" => array_unique(["رُ","وْ","حٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "لَـحْـمٌ",
                        "kata_arab" => "لَحْمٌ",
                        "arti" => "Daging",
                        "huruf" => array_unique(["لَ","حْ","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "عَـظْـمٌ",
                        "kata_arab" => "عَظْمٌ",
                        "arti" => "Tulang",
                        "huruf" => array_unique(["عَ","ظْ","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "شَـحْـمٌ",
                        "kata_arab" => "شَحْمٌ",
                        "arti" => "Lemak",
                        "huruf" => array_unique(["شَ","حْ","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "دَمٌ",
                        "kata_arab" => "دَمٌ",
                        "arti" => "Darah",
                        "huruf" => array_unique(["دَ","مٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "قَـيْـحٌ",
                        "kata_arab" => "قَيْحٌ",
                        "arti" => "Nanah",
                        "huruf" => array_unique(["قَ","يْ","حٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "مَـعْـيٌ",
                        "kata_arab" => "مَعْيٌ",
                        "arti" => "Usus",
                        "huruf" => array_unique(["مَ","عْ","يٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "مَـعْـيٌ غَـلِـيْـظٌ",
                        "kata_arab" => "مَعْيٌ غَلِيْظٌ",
                        "arti" => "Usus besar",
                        "huruf" => array_unique(["مَ","عْ","يٌ","_","غَ","لِ","يْ","ظٌ"]),
                        "status" => "on"
                    ],

                // Mufrodat 12
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "مَـعْـيٌ رَقِـيْـقٌ",
                        "kata_arab" => "مَعْيٌ رَقِيْقٌ",
                        "arti" => "Usus halus",
                        "huruf" => array_unique(["مَ","عْ","يٌ","_","رَ","قِ","يْ","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "رِئَـةٌ",
                        "kata_arab" => "رِئَةٌ",
                        "arti" => "Paru-paru",
                        "huruf" => array_unique(["رِ","ئَ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "قَـلْـبٌ",
                        "kata_arab" => "قَلْبٌ",
                        "arti" => "Jantung",
                        "huruf" => array_unique(["قَ","لْ","بٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "كَـبِـدٌ",
                        "kata_arab" => "كَبِدٌ",
                        "arti" => "Hati",
                        "huruf" => array_unique(["كَ","بِ","دٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "عَـضَـلَـةٌ",
                        "kata_arab" => "عَضَلَةٌ",
                        "arti" => "Otot",
                        "huruf" => array_unique(["عَ","ضَ","لَ","ةٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "بَـوْلٌ",
                        "kata_arab" => "بَوْلٌ",
                        "arti" => "Kencing",
                        "huruf" => array_unique(["بَ","وْ","لٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "غَائِـطٌ",
                        "kata_arab" => "غَائِطٌ",
                        "arti" => "Tahi",
                        "huruf" => array_unique(["غَ","ا","ئِ","طٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "ضُـرَاطٌ",
                        "kata_arab" => "ضُرَاطٌ",
                        "arti" => "Kentut (suara)",
                        "huruf" => array_unique(["ضُ","رَ","ا","طٌ"]),
                        "status" => "on"
                    ],

                // Mufrodat 13
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "فُـسَاءٌ",
                        "kata_arab" => "فُسَاءٌ",
                        "arti" => "Kentut (t.suara)",
                        "huruf" => array_unique(["فُ","سَ","ا","ءٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "نَـفْـسٌ",
                        "kata_arab" => "نَفْسٌ",
                        "arti" => "Jiwa",
                        "huruf" => array_unique(["نَ","فْ","سٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "بُـصَاقٌ",
                        "kata_arab" => "بُصَاقٌ",
                        "arti" => "Ludah",
                        "huruf" => array_unique(["بُ","صَ","ا","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "عَـرَقٌ",
                        "kata_arab" => "عَرَقٌ",
                        "arti" => "Keringat",
                        "huruf" => array_unique(["عَ","رَ","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "عِـرْقٌ",
                        "kata_arab" => "عِرْقٌ",
                        "arti" => "Urat",
                        "huruf" => array_unique(["عِ","رْ","قٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "شَـرَيَانٌ",
                        "kata_arab" => "شَرَيَانٌ",
                        "arti" => "Pembuluh",
                        "huruf" => array_unique(["شَ","رَ","يَ","ا","نٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "عَـصَـبٌ",
                        "kata_arab" => "عَصَبٌ",
                        "arti" => "Saraf",
                        "huruf" => array_unique(["عَ","صَ","بٌ"]),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "ضِـلْـعٌ",
                        "kata_arab" => "ضِلْعٌ",
                        "arti" => "Tulang rusuk",
                        "huruf" => array_unique(["ضِ","لْ","عٌ"]),
                        "status" => "on"
                    ],


                // 

            ];

            return $data;
        }

        public function tema(){
            $data = [
                [
                    "tema" => "Mufrodat 1",
                    "back" => "",
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 2"),
                    "title_arab" => "مَا - لِـمَنْ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 2",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 1"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 3"),
                    "title_arab" => "أَيْنَ - أَيُّ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 3",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 2"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 4"),
                    "title_arab" => "أَمَامَ - هُنَاكَ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 4",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 3"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 5"),
                    "title_arab" => "اَلْيَوْمَ - مَسَاءً",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 5",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 4"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 6"),
                    "title_arab" => "لَـيْـلًا - اَلسَّـنَـةُ الْآتِـيَـةُ ",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 6",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 5"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 7"),
                    "title_arab" => "عَـقْـلٌ - سِـنٌّ ",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 7",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 6"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 8"),
                    "title_arab" => "حَاجِـبٌ - شَـفَـةٌ سُـفْـلَـى",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 8",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 7"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 9"),
                    "title_arab" => "مُـخٌّ - صَـدْرٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 9",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 8"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 10"),
                    "title_arab" => "ثَـدْيٌ - كَـعْـبٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 10",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 9"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 11"),
                    "title_arab" => "سَاقٌّ - شَامَـةٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 11",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 10"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 12"),
                    "title_arab" => "رُوْحٌ - مَـعْـيٌ غَـلِـيْـظٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 12",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 11"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 13"),
                    "title_arab" => "مَـعْـيٌ رَقِـيْـقٌ - ضُـرَاطٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 13",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 12"),
                    "next" => "",
                    "title_arab" => "فُـسَاءٌ - ضِـلْـعٌ",
                    "kata" => "8"
                ],

            ];
            
            return $data;
        }
    }