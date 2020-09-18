<?php
    class Ft1_model extends CI_MODEL{
        public function kata(){
            $data = [
                // 1-9
                    [
                        "id" => "1",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَا",
                        "kata_arab" => "مَا",
                        "arti" => "Apa",
                        // "huruf" => array_unique(["مَ","ا"]),
                        "huruf" => array_unique($this->huruf("مَا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "2",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَنْ",
                        "kata_arab" => "مَنْ",
                        "arti" => "Siapa",
                        // "huruf" => array_unique(["مَ","نْ"]),
                        "huruf" => array_unique($this->huruf("مَنْ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "3",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَاذَا",
                        "kata_arab" => "مَاذَا",
                        "arti" => "Apa",
                        // "huruf" => array_unique(["مَ","ا","ذَ","ا"]),
                        "huruf" => array_unique($this->huruf("مَاذَا")),
                        "status" => "off"
                    ],
                    [
                        "id" => "4",
                        "tema" => "Mufrodat 1",
                        "kata" => "لِـمَاذَا",
                        "kata_arab" => "لِمَاذَا",
                        "arti" => "Kenapa",
                        // "huruf" => array_unique(["لِ","مَ","ا","ذَ","ا"]),
                        "huruf" => array_unique($this->huruf("لِمَاذَا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "5",
                        "tema" => "Mufrodat 1",
                        "kata" => "مِمَّ",
                        "kata_arab" => "مِمَّ",
                        "arti" => "Dari apa",
                        // "huruf" => array_unique(["مِ","مَّ"]),
                        "huruf" => array_unique($this->huruf("مِمَّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "6",
                        "tema" => "Mufrodat 1",
                        "kata" => "بِـمَاذَا",
                        "kata_arab" => "بِمَاذَا",
                        "arti" => "Dengan apa",
                        // "huruf" => array_unique(["بِ","مَ","ا","ذَ","ا"]),
                        "huruf" => array_unique($this->huruf("بِمَاذَا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "7",
                        "tema" => "Mufrodat 1",
                        "kata" => "لِأَيِّ شَـيْـئٍ",
                        "kata_arab" => "لِأَيِّ شَيْئٍ",
                        "arti" => "Untuk apa",
                        // "huruf" => array_unique(["لِ","أَ","يِّ","_","شَ","يْ","ئٍ"]),
                        "huruf" => array_unique($this->huruf("لِأَيِّ شَيْئٍ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "8",
                        "tema" => "Mufrodat 1",
                        "kata" => "مَعَ مَنْ",
                        "kata_arab" => "مَعَ مَنْ",
                        "arti" => "Bersama siapa",
                        // "huruf" => array_unique(["مَ","عَ","_","مَ","نْ"]),
                        "huruf" => array_unique($this->huruf("مَعَ مَنْ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "9",
                        "tema" => "Mufrodat 1",
                        "kata" => "لِـمَنْ",
                        "kata_arab" => "لِمَنْ",
                        "arti" => "Untuk siapa",
                        // "huruf" => array_unique(["لِ","مَ","نْ"]),
                        "huruf" => array_unique($this->huruf("لِمَنْ")),
                        "status" => "on"
                    ],
                

                // 10-18
                    [
                        "id" => "10",
                        "tema" => "Mufrodat 2",
                        "kata" => "أَيْنَ",
                        "kata_arab" => "أَيْنَ",
                        "arti" => "Dimana",
                        // "huruf" => array_unique(["أَ","يْ","نَ"]),
                        "huruf" => array_unique($this->huruf("أَيْنَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "11",
                        "tema" => "Mufrodat 2",
                        "kata" => "إِلَـى أَيْنَ",
                        "kata_arab" => "إِلَى أَيْنَ",
                        "arti" => "Kemana",
                        // "huruf" => array_unique(["إِ","لَ","ى","_","أَ","يْ","نَ"]),
                        "huruf" => array_unique($this->huruf("إِلَى أَيْنَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "12",
                        "tema" => "Mufrodat 2",
                        "kata" => "مِنْ أَيْنَ",
                        "kata_arab" => "مِنْ أَيْنَ",
                        "arti" => "Darimana",
                        // "huruf" => array_unique(["مِ","نْ","_","أَ","يْ","نَ"]),
                        "huruf" => array_unique($this->huruf("مِنْ أَيْنَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "13",
                        "tema" => "Mufrodat 2",
                        "kata" => "كَيْفَ",
                        "kata_arab" => "كَيْفَ",
                        "arti" => "Bagaimana",
                        // "huruf" => array_unique(["كَ","يْ","فَ"]),
                        "huruf" => array_unique($this->huruf("كَيْفَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "14",
                        "tema" => "Mufrodat 2",
                        "kata" => "مَتَـى",
                        "kata_arab" => "مَتَى",
                        "arti" => "Kapan",
                        // "huruf" => array_unique(["مَ","تَ","ى"]),
                        "huruf" => array_unique($this->huruf("مَتَى")),
                        "status" => "on"
                    ],
                    [
                        "id" => "15",
                        "tema" => "Mufrodat 2",
                        "kata" => "كَـمْ",
                        "kata_arab" => "كَمْ",
                        "arti" => "Berapa",
                        // "huruf" => array_unique(["كَ","مْ"]),
                        "huruf" => array_unique($this->huruf("كَمْ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "16",
                        "tema" => "Mufrodat 2",
                        "kata" => "بِكَـمْ",
                        "kata_arab" => "بِكَمْ",
                        "arti" => "Berapa (harga)",
                        // "huruf" => array_unique(["بِ","كَ","مْ"]),
                        "huruf" => array_unique($this->huruf("بِكَمْ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "17",
                        "tema" => "Mufrodat 2",
                        "kata" => "هَلْ / أَ",
                        "kata_arab" => "هَلَْ",
                        "arti" => "Apakah",
                        // "huruf" => array_unique(["هَ","لْ"]),
                        "huruf" => array_unique($this->huruf("هَلَْ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "18",
                        "tema" => "Mufrodat 2",
                        "kata" => "أَيُّ",
                        "kata_arab" => "أَيُّ",
                        "arti" => "Yang mana",
                        // "huruf" => array_unique(["أَ","يُّ"]),
                        "huruf" => array_unique($this->huruf("أَيُّ")),
                        "status" => "on"
                    ],

                // mufrodat 3
                    [
                        "id" => "175",
                        "tema" => "Mufrodat 3",
                        "kata" => "أَمَامَ",
                        "kata_arab" => "أَمَامَ",
                        "arti" => "Didepan",
                        // "huruf" => array_unique(["أَ","مَ","ا","مَ"]),
                        "huruf" => array_unique($this->huruf("أَمَامَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "176",
                        "tema" => "Mufrodat 3",
                        "kata" => "وَرَاءَ / خَلْفَ",
                        "kata_arab" => "وَرَاءَ",
                        "arti" => "Dibelakang",
                        // "huruf" => array_unique(["وَ","رَ","ا","ءَ"]),
                        "huruf" => array_unique($this->huruf("وَرَاءَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "177",
                        "tema" => "Mufrodat 3",
                        "kata" => "فَـوْقَ / عَلَـى",
                        "kata_arab" => "فَوْقَ",
                        "arti" => "Diatas",
                        // "huruf" => array_unique(["فَ","وْ","قَ"]),
                        "huruf" => array_unique($this->huruf("فَوْقَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "178",
                        "tema" => "Mufrodat 3",
                        "kata" => "تَـحْـتَ",
                        "kata_arab" => "تَحْتَ",
                        "arti" => "Dibawah",
                        // "huruf" => array_unique(["تَ","حْ","تَ"]),
                        "huruf" => array_unique($this->huruf("تَحْتَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "179",
                        "tema" => "Mufrodat 3",
                        "kata" => "دَاخِـلَ",
                        "kata_arab" => "دَاخِلَ",
                        "arti" => "Didalam",
                        // "huruf" => array_unique(["دَ","ا","خِ","لَ"]),
                        "huruf" => array_unique($this->huruf("دَاخِلَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "180",
                        "tema" => "Mufrodat 3",
                        "kata" => "خَارِجَ",
                        "kata_arab" => "خَارِجَ",
                        "arti" => "Diluar",
                        // "huruf" => array_unique(["خَ","ا","رِ","جَ"]),
                        "huruf" => array_unique($this->huruf("خَارِجَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "181",
                        "tema" => "Mufrodat 3",
                        "kata" => "بَـيْـنَ",
                        "kata_arab" => "بَيْنَ",
                        "arti" => "Diantara",
                        // "huruf" => array_unique(["بَ","يْ","نَ"]),
                        "huruf" => array_unique($this->huruf("بَيْنَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "182",
                        "tema" => "Mufrodat 3",
                        "kata" => "جَانِبَ",
                        "kata_arab" => "جَانِبَ",
                        "arti" => "Disamping",
                        // "huruf" => array_unique(["جَ","ا","نِ","بَ"]),
                        "huruf" => array_unique($this->huruf("جَانِبَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "183",
                        "tema" => "Mufrodat 3",
                        "kata" => "هُنَا",
                        "kata_arab" => "هُنَا",
                        "arti" => "Disini",
                        // "huruf" => array_unique(["هُ","نَ","ا","كَ"]),
                        "huruf" => array_unique($this->huruf("هُنَا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "184",
                        "tema" => "Mufrodat 3",
                        "kata" => "هُنَاكَ",
                        "kata_arab" => "هُنَاكَ",
                        "arti" => "Disana",
                        // "huruf" => array_unique(["هُ","نَ","ا","كَ"]),
                        "huruf" => array_unique($this->huruf("هُنَاكَ")),
                        "status" => "on"
                    ],

                // Mufrodat 4
                    [
                        "id" => "185",
                        "tema" => "Mufrodat 4",
                        "kata" => "الْـيَـوْمَ",
                        "kata_arab" => "الْيَوْمَ",
                        "arti" => "Hari ini",
                        // "huruf" => array_unique(["الْ","يَ","وْ","مَ"]),
                        "huruf" => array_unique($this->huruf("الْيَوْمَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "186",
                        "tema" => "Mufrodat 4",
                        "kata" => "الْآنَ",
                        "kata_arab" => "الْآنَ",
                        "arti" => "Sekarang",
                        // "huruf" => array_unique(["الْ","آ","نَ"]),
                        "huruf" => array_unique($this->huruf("الْآنَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "187",
                        "tema" => "Mufrodat 4",
                        "kata" => "قَـبْـلَ",
                        "kata_arab" => "قَبْلَ",
                        "arti" => "Sebelum",
                        // "huruf" => array_unique(["قَ","بْ","لَ"]),
                        "huruf" => array_unique($this->huruf("قَبْلَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "188",
                        "tema" => "Mufrodat 4",
                        "kata" => "بَـعْـدَ",
                        "kata_arab" => "بَعْدَ",
                        "arti" => "Sesudah",
                        // "huruf" => array_unique(["بَ","عْ","دَ"]),
                        "huruf" => array_unique($this->huruf("بَعْدَ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "189",
                        "tema" => "Mufrodat 4",
                        "kata" => "غَـدًا",
                        "kata_arab" => "غَدًا",
                        "arti" => "Besok",
                        // "huruf" => array_unique(["غَ","دً","ا"]),
                        "huruf" => array_unique($this->huruf("غَدًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "190",
                        "tema" => "Mufrodat 4",
                        "kata" => "بَـعْـدَ الْـغَـدِّ",
                        "kata_arab" => "بَعْدَ الْغَدِّ",
                        "arti" => "Besok lusa",
                        // "huruf" => array_unique(["بَ","عْ","دَ","_","الْ","غَ","دِّ"]),
                        "huruf" => array_unique($this->huruf("بَعْدَ الْغَدِّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "191",
                        "tema" => "Mufrodat 4",
                        "kata" => "بِالْأَمْـسِ",
                        "kata_arab" => "بِالْأَمْسِ",
                        "arti" => "Kemarin",
                        // "huruf" => array_unique(["بِ","الْ","أَ","مْ","سِ"]),
                        "huruf" => array_unique($this->huruf("بِالْأَمْسِ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "192",
                        "tema" => "Mufrodat 4",
                        "kata" => "أَوَّلَ الْأَمْسِ",
                        "kata_arab" => "أَوَّلَ الْأَمْسِ",
                        "arti" => "Kemarin lusa",
                        // "huruf" => array_unique(["أَ","وَّ","لَ","_","الْ","أَ","مْ","سِ"]),
                        "huruf" => array_unique($this->huruf("أَوَّلَ الْأَمْسِ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "193",
                        "tema" => "Mufrodat 4",
                        "kata" => "صَبَاحًا",
                        "kata_arab" => "صَبَاحًا",
                        "arti" => "Pagi",
                        // "huruf" => array_unique(["صَ","بَ","ا","حً","ا"]),
                        "huruf" => array_unique($this->huruf("صَبَاحًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "194",
                        "tema" => "Mufrodat 4",
                        "kata" => "نَـهَارًا",
                        "kata_arab" => "نَهَارًا",
                        "arti" => "Siang",
                        // "huruf" => array_unique(["نَ","هَ","ا","رً","ا"]),
                        "huruf" => array_unique($this->huruf("نَهَارًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "195",
                        "tema" => "Mufrodat 4",
                        "kata" => "مَـسَاءً",
                        "kata_arab" => "مَسَاءً",
                        "arti" => "Sore",
                        // "huruf" => array_unique(["مَ","سَ","ا","ءً"]),
                        "huruf" => array_unique($this->huruf("مَسَاءً")),
                        "status" => "on"
                    ],
                
                // Mufrodat 5
                    [
                        "id" => "196",
                        "tema" => "Mufrodat 5",
                        "kata" => "لَـيْـلًا",
                        "kata_arab" => "لَيْلًا",
                        "arti" => "Malam",
                        // "huruf" => array_unique(["لَ","يْ","لً","ا"]),
                        "huruf" => array_unique($this->huruf("لَيْلًا")),
                        "status" => "on",
                    ],
                    [
                        "id" => "197",
                        "tema" => "Mufrodat 5",
                        "kata" => "لَاحِـقًا",
                        "kata_arab" => "لَاحِقًا",
                        "arti" => "Nanti",
                        // "huruf" => array_unique(["لَ","ا","حِ","قً","ا"]),
                        "huruf" => array_unique($this->huruf("لَاحِقًا")),
                        "status" => "on",
                    ],
                    [
                        "id" => "198",
                        "tema" => "Mufrodat 5",
                        "kata" => "آنِـفًا",
                        "kata_arab" => "آنِفًا",
                        "arti" => "Tadi",
                        // "huruf" => array_unique(["آ","نِ","فً","ا"]),
                        "huruf" => array_unique($this->huruf("آنِفًا")),
                        "status" => "on",
                    ],
                    [
                        "id" => "199",
                        "tema" => "Mufrodat 5",
                        "kata" => "حَـدِيْـثًا",
                        "kata_arab" => "حَدِيْثًا",
                        "arti" => "Baru saja",
                        // "huruf" => array_unique(["حَ","دِ","يْ","ثً","ا"]),
                        "huruf" => array_unique($this->huruf("حَدِيْثًا")),
                        "status" => "on",
                    ],
                    [
                        "id" => "200",
                        "tema" => "Mufrodat 5",
                        "kata" => "بَـعْـدَ قَـلِـيْـلٍ",
                        "kata_arab" => "بَعْدَ قَلِيْلٍ",
                        "arti" => "Sebentar lagi",
                        // "huruf" => array_unique(["بَ","عْ","دَ","_","قَ","لِ","يْ","لٍ"]),
                        "huruf" => array_unique($this->huruf("بَعْدَ قَلِيْلٍ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "201",
                        "tema" => "Mufrodat 5",
                        "kata" => "الْأُسْـبُـوْعُ الْمَاضِـى",
                        "kata_arab" => "الْأُسْبُوْعُ الْمَاضِى",
                        "arti" => "Minggu lalu",
                        // "huruf" => array_unique(["الْ","أُ","سْ","بُ","وْ","عُ","_","الْ","مَ","ضِ","ى","ا"]),
                        "huruf" => array_unique($this->huruf("الْأُسْبُوْعُ الْمَاضِى")),
                        "status" => "on",
                    ],
                    [
                        "id" => "202",
                        "tema" => "Mufrodat 5",
                        "kata" => "الْأُسْـبُـوْعُ الْآتِى",
                        "kata_arab" => "الْأُسْبُوْعُ الْآتِى",
                        "arti" => "Minggu depan",
                        // "huruf" => array_unique(["الْ","أُ","سْ","بُ","وْ","عُ","_","الْ","آ","تِ","ى"]),
                        "huruf" => array_unique($this->huruf("الْأُسْبُوْعُ الْآتِى")),
                        "status" => "on",
                    ],
                    [
                        "id" => "203",
                        "tema" => "Mufrodat 5",
                        "kata" => "الشَّـهْـرُ الْـمَاضِـى",
                        "kata_arab" => "الشَّهْرُ الْمَاضِى",
                        "arti" => "Bulan lalu",
                        // "huruf" => array_unique(["ال","شَّ","هْ","رُ","_","الْ","مَ","ا","ضِ","ى"]),
                        "huruf" => array_unique($this->huruf("الشَّهْرُ الْمَاضِى")),
                        "status" => "on",
                    ],
                    [
                        "id" => "204",
                        "tema" => "Mufrodat 5",
                        "kata" => "الشَّـهْـرُ الْآتِى",
                        "kata_arab" => "الشَّهْرُ الْآتِى",
                        "arti" => "Bulan depan",
                        // "huruf" => array_unique(["ال","شَّ","هْ","رُ","_","الْ","آ","تِ","ى"]),
                        "huruf" => array_unique($this->huruf("الشَّهْرُ الْآتِى")),
                        "status" => "on",
                    ],
                    [
                        "id" => "205",
                        "tema" => "Mufrodat 5",
                        "kata" => "السَّـنَـةُ الْـمَاضِـيَـةُ",
                        "kata_arab" => "السَّنَةُ الْمَاضِيَةُ",
                        "arti" => "Tahun lalu",
                        // "huruf" => array_unique(["ال","سَّ","نَ","ةُ","_","الْ","مَ","ا","ضِ","يَ","ةُ"]),
                        "huruf" => array_unique($this->huruf("السَّنَةُ الْمَاضِيَةُ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "206",
                        "tema" => "Mufrodat 5",
                        "kata" => "السَّـنَـةُ الْآتِـيَـةُ",
                        "kata_arab" => "السَّنَةُ الْآتِيَةُ",
                        "arti" => "Tahun depan",
                        // "huruf" => array_unique(["ال","سَّ","نَ","ةُ","_","الْ","آ","تِ","يَ","ةُ"]),
                        "huruf" => array_unique($this->huruf("السَّنَةُ الْآتِيَةُ")),
                        "status" => "on",
                    ],
                
                // Mufrodat 6
                    [
                        "id" => "207",
                        "tema" => "Mufrodat 6",
                        "kata" => "عَـقْـلٌ",
                        "kata_arab" => "عَقْلٌ",
                        "arti" => "Akal",
                        // "huruf" => array_unique(["عَ","قْ","لٌ"]),
                        "huruf" => array_unique($this->huruf("عَقْلٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "208",
                        "tema" => "Mufrodat 6",
                        "kata" => "رَأْسٌ",
                        "kata_arab" => "رَأْسٌ",
                        "arti" => "Kepala",
                        // "huruf" => array_unique(["رَ","أْ","سٌ"]),
                        "huruf" => array_unique($this->huruf("رَأْسٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "209",
                        "tema" => "Mufrodat 6",
                        "kata" => "وَجْـهٌ",
                        "kata_arab" => "وَجْهٌ",
                        "arti" => "Wajah",
                        // "huruf" => array_unique(["وَ","جْ","هٌ"]),
                        "huruf" => array_unique($this->huruf("وَجْهٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "210",
                        "tema" => "Mufrodat 6",
                        "kata" => "شَـعْـرٌ",
                        "kata_arab" => "شَعْرٌ",
                        "arti" => "Rambut",
                        // "huruf" => array_unique(["شَ","عْ","رٌ"]),
                        "huruf" => array_unique($this->huruf("شَعْرٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "211",
                        "tema" => "Mufrodat 6",
                        "kata" => "جَـبْـهَـةٌ",
                        "kata_arab" => "جَبْهَةٌ",
                        "arti" => "Dahi",
                        // "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("جَبْهَةٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "212",
                        "tema" => "Mufrodat 6",
                        "kata" => "أُذُنٌ",
                        "kata_arab" => "أُذُنٌ",
                        "arti" => "Telinga",
                        // "huruf" => array_unique(["أُ","ذُ","نٌ"]),
                        "huruf" => array_unique($this->huruf("أُذُنٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "213",
                        "tema" => "Mufrodat 6",
                        "kata" => "عَارِضٌ",
                        "kata_arab" => "عَارِضٌ",
                        "arti" => "Jambang",
                        // "huruf" => array_unique(["عَ","ا","رِ","ضٌ"]),
                        "huruf" => array_unique($this->huruf("عَارِضٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "214",
                        "tema" => "Mufrodat 6",
                        "kata" => "عَـيْـنٌ",
                        "kata_arab" => "عَيْنٌ",
                        "arti" => "Mata",
                        // "huruf" => array_unique(["عَ","يْ","نٌ"]),
                        "huruf" => array_unique($this->huruf("عَيْنٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "215",
                        "tema" => "Mufrodat 6",
                        "kata" => "أَنْـفٌ",
                        "kata_arab" => "أَنْفٌ",
                        "arti" => "Hidung",
                        // "huruf" => array_unique(["أَ","نْ","فٌ"]),
                        "huruf" => array_unique($this->huruf("أَنْفٌ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "216",
                        "tema" => "Mufrodat 6",
                        "kata" => "خَـدٌّ",
                        "kata_arab" => "خَدٌّ",
                        "arti" => "Pipi",
                        // "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"]),
                        "huruf" => array_unique($this->huruf("خَدٌّ")),
                        "status" => "on",
                    ],
                    [
                        "id" => "217",
                        "tema" => "Mufrodat 6",
                        "kata" => "سِـنٌّ",
                        "kata_arab" => "سِنٌّ",
                        "arti" => "Gigi",
                        // "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"]),
                        "huruf" => array_unique($this->huruf("سِنٌّ")),
                        "status" => "on",
                    ],

                // Mufrodat 7
                    [
                        "id" => "218",
                        "tema" => "Mufrodat 7",
                        "kata" => "حَاجِـبٌ",
                        "kata_arab" => "حَاجِبٌ",
                        "arti" => "Alis",
                        // "huruf" => array_unique(["حَ","ا","جِ","بٌ"]),
                        "huruf" => array_unique($this->huruf("حَاجِبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "219",
                        "tema" => "Mufrodat 7",
                        "kata" => "هُـدْبٌ",
                        "kata_arab" => "هُدْبٌ",
                        "arti" => "Bulu mata",
                        // "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"]),
                        "huruf" => array_unique($this->huruf("هُدْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "220",
                        "tema" => "Mufrodat 7",
                        "kata" => "فَـمٌّ",
                        "kata_arab" => "فَمٌّ",
                        "arti" => "Mulut",
                        // "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"]),
                        "huruf" => array_unique($this->huruf("فَمٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "221",
                        "tema" => "Mufrodat 7",
                        "kata" => "لِـسَانٌ",
                        "kata_arab" => "لِسَانٌ",
                        "arti" => "Lisan",
                        // "huruf" => array_unique(["لِ","سَ","ا","نٌ"]),
                        "huruf" => array_unique($this->huruf("لِسَانٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "222",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَارِبٌ",
                        "kata_arab" => "شَارِبٌ",
                        "arti" => "Kumis",
                        // "huruf" => array_unique(["شَ","ا","رِ","بٌ"]),
                        "huruf" => array_unique($this->huruf("شَارِبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "223",
                        "tema" => "Mufrodat 7",
                        "kata" => "لِـحْـيَـةٌ",
                        "kata_arab" => "لِحْيَةٌ",
                        "arti" => "Jenggot",
                        // "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("لِحْيَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "224",
                        "tema" => "Mufrodat 7",
                        "kata" => "دَمْـعَـةٌ",
                        "kata_arab" => "دَمْعَةٌ",
                        "arti" => "Air mata",
                        // "huruf" => array_unique(["دَ","مْ","عَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("دَمْعَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "225",
                        "tema" => "Mufrodat 7",
                        "kata" => "ذَقَـنٌ",
                        "kata_arab" => "ذَقَنٌ",
                        "arti" => "Dagu",
                        // "huruf" => array_unique(["ذَ","قَ","نٌ"]),
                        "huruf" => array_unique($this->huruf("ذَقَنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "226",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَـفَـةٌ",
                        "kata_arab" => "شَفَةٌ",
                        "arti" => "Bibir",
                        // "huruf" => array_unique(["شَ","فَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("شَفَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "227",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَـفَـةٌ عُـلْـيَا",
                        "kata_arab" => "شَفَةٌ عُلْيَا",
                        "arti" => "Bibir atas",
                        // "huruf" => array_unique(["شَ","فَ","ةٌ","_","عُ","لْ","يَ","ا"]),
                        "huruf" => array_unique($this->huruf("شَفَةٌ عُلْيَا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "228",
                        "tema" => "Mufrodat 7",
                        "kata" => "شَـفَـةٌ سُـفْـلَـى",
                        "kata_arab" => "شَفَةٌ سُفْلَى",
                        "arti" => "Bibir bawah",
                        // "huruf" => array_unique(["شَ","فَ","ةٌ","_","سُ","فْ","لَ","ى"]),
                        "huruf" => array_unique($this->huruf("شَفَةٌ سُفْلَى")),
                        "status" => "on"
                    ],

                // Mufrodat 8
                    [
                        "id" => "229",
                        "tema" => "Mufrodat 8",
                        "kata" => "مُـخٌّ",
                        "kata_arab" => "مُخٌّ",
                        "arti" => "Otak",
                        // "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"]),
                        "huruf" => array_unique($this->huruf("مُخٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "230",
                        "tema" => "Mufrodat 8",
                        "kata" => "عُـنُـقٌ",
                        "kata_arab" => "عُنُقٌ",
                        "arti" => "Leher",
                        // "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"]),
                        "huruf" => array_unique($this->huruf("عُنُقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "231",
                        "tema" => "Mufrodat 8",
                        "kata" => "جِـسْـمٌ",
                        "kata_arab" => "جِسْمٌ",
                        "arti" => "Badan",
                        // "huruf" => array_unique(["جِ","سْ","مٌ"]),
                        "huruf" => array_unique($this->huruf("جِسْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "232",
                        "tema" => "Mufrodat 8",
                        "kata" => "يَـدٌ",
                        "kata_arab" => "يَدٌ",
                        "arti" => "Tangan",
                        // "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"]),
                        "huruf" => array_unique($this->huruf("يَدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "233",
                        "tema" => "Mufrodat 8",
                        "kata" => "ذِرَاعٌ",
                        "kata_arab" => "ذِرَاعٌ",
                        "arti" => "Lengan",
                        // "huruf" => array_unique(["ذِ","رَ","ا","عٌ"]),
                        "huruf" => array_unique($this->huruf("ذِرَاعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "234",
                        "tema" => "Mufrodat 8",
                        "kata" => "بَـطْـنٌ",
                        "kata_arab" => "بَطْنٌ",
                        "arti" => "Perut",
                        // "huruf" => array_unique(["بَ","طْ","نٌ"]),
                        "huruf" => array_unique($this->huruf("بَطْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "235",
                        "tema" => "Mufrodat 8",
                        "kata" => "حَـقْـوٌ",
                        "kata_arab" => "حَقْوٌ",
                        "arti" => "Pinggang",
                        // "huruf" => array_unique(["حَ","قْ","وٌ"]),
                        "huruf" => array_unique($this->huruf("حَقْوٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "236",
                        "tema" => "Mufrodat 8",
                        "kata" => "كَـتِـفٌ",
                        "kata_arab" => "كَتِفٌ",
                        "arti" => "Pundak",
                        // "huruf" => array_unique(["كَ","تِ","فٌ"]),
                        "huruf" => array_unique($this->huruf("كَتِفٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "237",
                        "tema" => "Mufrodat 8",
                        "kata" => "ظَـهْـرٌ",
                        "kata_arab" => "ظَهْرٌ",
                        "arti" => "Punggung",
                        // "huruf" => array_unique(["ظَ","هْ","رٌ"]),
                        "huruf" => array_unique($this->huruf("ظَهْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "238",
                        "tema" => "Mufrodat 8",
                        "kata" => "صَـدْرٌ",
                        "kata_arab" => "صَدْرٌ",
                        "arti" => "Dada",
                        // "huruf" => array_unique(["صَ","دْ","رٌ"]),
                        "huruf" => array_unique($this->huruf("صَدْرٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 9
                    [
                        "id" => "239",
                        "tema" => "Mufrodat 9",
                        "kata" => "ثَـدْيٌ",
                        "kata_arab" => "ثَدْيٌ",
                        "arti" => "Payudara",
                        // "huruf" => array_unique(["ثَ","دْ","يٌ"]),
                        "huruf" => array_unique($this->huruf("ثَدْيٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "240",
                        "tema" => "Mufrodat 9",
                        "kata" => "حَـلَـمَـةُ الثَّـدْيِ",
                        "kata_arab" => "حَلَمَةُ الثَّدْيِ",
                        "arti" => "Puting payudara",
                        // "huruf" => array_unique(["حَ","لَ","مَ","ةُ","_","ال","ثَّ","دْ","يِ"]),
                        "huruf" => array_unique($this->huruf("حَلَمَةُ الثَّدْيِ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "239",
                        "tema" => "Mufrodat 9",
                        "kata" => "سُـرَّةٌ",
                        "kata_arab" => "سُرَّةٌ",
                        "arti" => "Pusar",
                        // "huruf" => array_unique(["سُ","رَّ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("سُرَّةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "240",
                        "tema" => "Mufrodat 9",
                        "kata" => "رُكْـبَـةٌ",
                        "kata_arab" => "رُكْبَةٌ",
                        "arti" => "Lutut",
                        // "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("رُكْبَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "241",
                        "tema" => "Mufrodat 9",
                        "kata" => "مِـرْفَـقٌ",
                        "kata_arab" => "مِرْفَقٌ",
                        "arti" => "Siku",
                        // "huruf" => array_unique(["مِ","رْ","فَ","قٌ"]),
                        "huruf" => array_unique($this->huruf("مِرْفَقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "243",
                        "tema" => "Mufrodat 9",
                        "kata" => "رِجْـلٌ",
                        "kata_arab" => "رِجْلٌ",
                        "arti" => "Kaki",
                        // "huruf" => array_unique(["رِ","جْ","لٌ"]),
                        "huruf" => array_unique($this->huruf("رِجْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "244",
                        "tema" => "Mufrodat 9",
                        "kata" => "فَـخِـذٌ",
                        "kata_arab" => "فَخِذٌ",
                        "arti" => "Paha",
                        // "huruf" => array_unique(["فَ","خِ","ذٌ"]),
                        "huruf" => array_unique($this->huruf("فَخِذٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "242",
                        "tema" => "Mufrodat 9",
                        "kata" => "إِبْـطٌ",
                        "kata_arab" => "إِبْطٌ",
                        "arti" => "Ketiak",
                        // "huruf" => array_unique(["إِ","بْ","طٌ"]),
                        "huruf" => array_unique($this->huruf("إِبْطٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "246",
                        "tema" => "Mufrodat 9",
                        "kata" => "قَـدَمٌ",
                        "kata_arab" => "قَدَمٌ",
                        "arti" => "Telapak kaki",
                        // "huruf" => array_unique(["قَ","دَ","مٌ"]),
                        "huruf" => array_unique($this->huruf("قَدَمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "247",
                        "tema" => "Mufrodat 9",
                        "kata" => "كَـعْـبٌ",
                        "kata_arab" => "كَعْبٌ",
                        "arti" => "Mata kaki",
                        // "huruf" => array_unique(["كَ","عْ","بٌ"]),
                        "huruf" => array_unique($this->huruf("كَعْبٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 10
                    [
                        "id" => "245",
                        "tema" => "Mufrodat 10",
                        "kata" => "سَاقٌّ",
                        "kata_arab" => "سَاقٌّ",
                        "arti" => "Betis",
                        // "huruf" => array_unique(["سَ","ا","قٌّ"]),
                        "huruf" => array_unique($this->huruf("سَاقٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "250",
                        "tema" => "Mufrodat 10",
                        "kata" => "ظُـفْـرٌ",
                        "kata_arab" => "ظُفْرٌ",
                        "arti" => "Kuku",
                        // "huruf" => array_unique(["ظُ","فْ","رٌ"]),
                        "huruf" => array_unique($this->huruf("ظُفْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "253",
                        "tema" => "Mufrodat 10",
                        "kata" => "إِبْـهَامٌ",
                        "kata_arab" => "إِبْهَامٌ",
                        "arti" => "Ibu jari",
                        // "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"]),
                        "huruf" => array_unique($this->huruf("إِبْهَامٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "254",
                        "tema" => "Mufrodat 10",
                        "kata" => "سَـبَابَـةٌ",
                        "kata_arab" => "سَبَابَةٌ",
                        "arti" => "Telunjuk",
                        // "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("سَبَابَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "255",
                        "tema" => "Mufrodat 10",
                        "kata" => "وُسْـطَـى",
                        "kata_arab" => "وُسْطَى",
                        "arti" => "Jari tengah",
                        // "huruf" => array_unique(["وُ","سْ","طَ","ى"]),
                        "huruf" => array_unique($this->huruf("وُسْطَى")),
                        "status" => "on"
                    ],
                    [
                        "id" => "256",
                        "tema" => "Mufrodat 10",
                        "kata" => "بِـنْـصِـرٌ",
                        "kata_arab" => "بِنْصِرٌ",
                        "arti" => "Jari manis",
                        // "huruf" => array_unique(["بِ","نْ","صِ","رٌ"]),
                        "huruf" => array_unique($this->huruf("بِنْصِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "257",
                        "tema" => "Mufrodat 10",
                        "kata" => "خِـنْـصِـرٌ",
                        "kata_arab" => "خِنْصِرٌ",
                        "arti" => "Jari kelingking",
                        // "huruf" => array_unique(["خِ","نْ","صِ","رٌ"]),
                        "huruf" => array_unique($this->huruf("خِنْصِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "251",
                        "tema" => "Mufrodat 10",
                        "kata" => "مَـسَامٌ",
                        "kata_arab" => "مَسَامٌ",
                        "arti" => "Pori-pori",
                        // "huruf" => array_unique(["مَ","سَ","ا","مٌ"]),
                        "huruf" => array_unique($this->huruf("مَسَامٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "249",
                        "tema" => "Mufrodat 10",
                        "kata" => "عَـقِـبٌ",
                        "kata_arab" => "عَقِبٌ",
                        "arti" => "Tumit",
                        // "huruf" => array_unique(["عَ","قِ","بٌ"]),
                        "huruf" => array_unique($this->huruf("عَقِبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "252",
                        "tema" => "Mufrodat 10",
                        "kata" => "شَامَـةٌ",
                        "kata_arab" => "شَامَةٌ",
                        "arti" => "Tahi lalat",
                        // "huruf" => array_unique(["شَ","ا","مَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("شَامَةٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 11
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "رُوْحٌ",
                        "kata_arab" => "رُوْحٌ",
                        "arti" => "Ruh",
                        // "huruf" => array_unique(["رُ","وْ","حٌ"]),
                        "huruf" => array_unique($this->huruf("رُوْحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "لَـحْـمٌ",
                        "kata_arab" => "لَحْمٌ",
                        "arti" => "Daging",
                        // "huruf" => array_unique(["لَ","حْ","مٌ"]),
                        "huruf" => array_unique($this->huruf("لَحْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "عَـظْـمٌ",
                        "kata_arab" => "عَظْمٌ",
                        "arti" => "Tulang",
                        // "huruf" => array_unique(["عَ","ظْ","مٌ"]),
                        "huruf" => array_unique($this->huruf("عَظْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "شَـحْـمٌ",
                        "kata_arab" => "شَحْمٌ",
                        "arti" => "Lemak",
                        // "huruf" => array_unique(["شَ","حْ","مٌ"]),
                        "huruf" => array_unique($this->huruf("شَحْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "دَمٌ",
                        "kata_arab" => "دَمٌ",
                        "arti" => "Darah",
                        // "huruf" => array_unique(["دَ","مٌ"]),
                        "huruf" => array_unique($this->huruf("دَمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "قَـيْـحٌ",
                        "kata_arab" => "قَيْحٌ",
                        "arti" => "Nanah",
                        // "huruf" => array_unique(["قَ","يْ","حٌ"]),
                        "huruf" => array_unique($this->huruf("قَيْحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "مَـعْـيٌ",
                        "kata_arab" => "مَعْيٌ",
                        "arti" => "Usus",
                        // "huruf" => array_unique(["مَ","عْ","يٌ"]),
                        "huruf" => array_unique($this->huruf("مَعْيٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 11",
                        "kata" => "مَـعْـيٌ غَـلِـيْـظٌ",
                        "kata_arab" => "مَعْيٌ غَلِيْظٌ",
                        "arti" => "Usus besar",
                        // "huruf" => array_unique(["مَ","عْ","يٌ","_","غَ","لِ","يْ","ظٌ"]),
                        "huruf" => array_unique($this->huruf("مَعْيٌ غَلِيْظٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 12
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "مَـعْـيٌ رَقِـيْـقٌ",
                        "kata_arab" => "مَعْيٌ رَقِيْقٌ",
                        "arti" => "Usus halus",
                        // "huruf" => array_unique(["مَ","عْ","يٌ","_","رَ","قِ","يْ","قٌ"]),
                        "huruf" => array_unique($this->huruf("مَعْيٌ رَقِيْقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "رِئَـةٌ",
                        "kata_arab" => "رِئَةٌ",
                        "arti" => "Paru-paru",
                        // "huruf" => array_unique(["رِ","ئَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("رِئَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "قَـلْـبٌ",
                        "kata_arab" => "قَلْبٌ",
                        "arti" => "Jantung",
                        // "huruf" => array_unique(["قَ","لْ","بٌ"]),
                        "huruf" => array_unique($this->huruf("قَلْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "كَـبِـدٌ",
                        "kata_arab" => "كَبِدٌ",
                        "arti" => "Hati",
                        // "huruf" => array_unique(["كَ","بِ","دٌ"]),
                        "huruf" => array_unique($this->huruf("كَبِدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "عَـضَـلَـةٌ",
                        "kata_arab" => "عَضَلَةٌ",
                        "arti" => "Otot",
                        // "huruf" => array_unique(["عَ","ضَ","لَ","ةٌ"]),
                        "huruf" => array_unique($this->huruf("عَضَلَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "بَـوْلٌ",
                        "kata_arab" => "بَوْلٌ",
                        "arti" => "Kencing",
                        // "huruf" => array_unique(["بَ","وْ","لٌ"]),
                        "huruf" => array_unique($this->huruf("بَوْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "غَائِـطٌ",
                        "kata_arab" => "غَائِطٌ",
                        "arti" => "Tahi",
                        // "huruf" => array_unique(["غَ","ا","ئِ","طٌ"]),
                        "huruf" => array_unique($this->huruf("غَائِطٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 12",
                        "kata" => "ضُـرَاطٌ",
                        "kata_arab" => "ضُرَاطٌ",
                        "arti" => "Kentut (suara)",
                        // "huruf" => array_unique(["ضُ","رَ","ا","طٌ"]),
                        "huruf" => array_unique($this->huruf("ضُرَاطٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 13
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "فُـسَاءٌ",
                        "kata_arab" => "فُسَاءٌ",
                        "arti" => "Kentut (t.suara)",
                        // "huruf" => array_unique(["فُ","سَ","ا","ءٌ"]),
                        "huruf" => array_unique($this->huruf("فُسَاءٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "نَـفْـسٌ",
                        "kata_arab" => "نَفْسٌ",
                        "arti" => "Jiwa",
                        // "huruf" => array_unique(["نَ","فْ","سٌ"]),
                        "huruf" => array_unique($this->huruf("نَفْسٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "بُـصَاقٌ",
                        "kata_arab" => "بُصَاقٌ",
                        "arti" => "Ludah",
                        // "huruf" => array_unique(["بُ","صَ","ا","قٌ"]),
                        "huruf" => array_unique($this->huruf("بُصَاقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "عَـرَقٌ",
                        "kata_arab" => "عَرَقٌ",
                        "arti" => "Keringat",
                        // "huruf" => array_unique(["عَ","رَ","قٌ"]),
                        "huruf" => array_unique($this->huruf("عَرَقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "عِـرْقٌ",
                        "kata_arab" => "عِرْقٌ",
                        "arti" => "Urat",
                        // "huruf" => array_unique(["عِ","رْ","قٌ"]),
                        "huruf" => array_unique($this->huruf("عِرْقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "شَـرَيَانٌ",
                        "kata_arab" => "شَرَيَانٌ",
                        "arti" => "Pembuluh",
                        // "huruf" => array_unique(["شَ","رَ","يَ","ا","نٌ"]),
                        "huruf" => array_unique($this->huruf("شَرَيَانٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "عَـصَـبٌ",
                        "kata_arab" => "عَصَبٌ",
                        "arti" => "Saraf",
                        // "huruf" => array_unique(["عَ","صَ","بٌ"]),
                        "huruf" => array_unique($this->huruf("عَصَبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 13",
                        "kata" => "ضِـلْـعٌ",
                        "kata_arab" => "ضِلْعٌ",
                        "arti" => "Tulang rusuk",
                        // "huruf" => array_unique(["ضِ","لْ","عٌ"]),
                        "huruf" => array_unique($this->huruf("ضِلْعٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 14
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "أَخَـذَ - يَأْخُـذُ - أَخْـذًا",
                        "kata_arab" => "أَخَذَ-يَأْخُذُ-أَخْذًا",
                        "arti" => "Mengambil",
                        "huruf" => array_unique($this->huruf("أَخَذَ-يَأْخُذُ-أَخْذًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "أَسَّـسَ - يُـؤَسِّـسُ - تَأْسِـيْـسًا",
                        "kata_arab" => "أَسَّسَ-يُؤَسِّسُ-تَأْسِيْسًا",
                        "arti" => "Merintis",
                        "huruf" => array_unique($this->huruf("أَسَّسَ-يُؤَسِّسُ-تَأْسِيْسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "اِلْـتَـفَـتَ - يَـلْـتَـفِـتُ - اِلْـتِـفَاتًا",
                        "kata_arab" => "اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا",
                        "arti" => "Menoleh",
                        "huruf" => array_unique($this->huruf("اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "اِنْـتَـقَـلَ - يَـنْـتَـقِـلُ - اِنْـتِـقَالًا",
                        "kata_arab" => "اِنْتَقَلَ-يَنْتَقِلُ-اِنْتِقَالًا",
                        "arti" => "Pindah",
                        "huruf" => array_unique($this->huruf("اِنْتَقَلَ-يَنْتَقِلُ-اِنْتِقَالًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "بَـصَـقَ - يَـبْـصُـقُ - بَـصْـقًا",
                        "kata_arab" => "بَصَقَ-يَبْصُقُ-بَصْقًا",
                        "arti" => "Meludah",
                        "huruf" => array_unique($this->huruf("بَصَقَ-يَبْصُقُ-بَصْقًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "بَـكَـى - يَـبْـكِـي - بُـكَاءً",
                        "kata_arab" => "بَكَى-يَبْكِي-بُكَاءً",
                        "arti" => "Menangis",
                        "huruf" => array_unique($this->huruf("بَكَى-يَبْكِي-بُكَاءً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "تَأَمَّـلَ - يَـتَأَمَّـلُ - تَأَمُّـلًا",
                        "kata_arab" => "تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلًا",
                        "arti" => "Berangan-angan",
                        "huruf" => array_unique($this->huruf("تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "تَـبَـسَّـمَ - يَـتَـبَـسَّـمُ - تَـبَـسُّـمًا",
                        "kata_arab" => "تَبَسَّمَ-يَتَبَسَّمُ-تَبَسُّمًا",
                        "arti" => "Tersenyum",
                        "huruf" => array_unique($this->huruf("تَبَسَّمَ-يَتَبَسَّمُ-تَبَسُّمًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 14",
                        "kata" => "تَـحَـرَّكَ - يَـتَـحَـرَّكُ - تَـحَـرُّكًا",
                        "kata_arab" => "تَحَرَّكَ-يَتَحَرَّكُ-تَحَرُّكًا",
                        "arti" => "Bergerak",
                        "huruf" => array_unique($this->huruf("تَحَرَّكَ-يَتَحَرَّكُ-تَحَرُّكًا")),
                        "status" => "on"
                    ],
                
                // Mufrodat 15
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "تَـذَكَّـرَ - يَـتَـذَكَّـرُ - تَـذَكُّـرًا",
                        "kata_arab" => "تَذَكَّرَ-يَتَذَكَّرُ-تَذَكُّرًا",
                        "arti" => "Mengingat",
                        "huruf" => array_unique($this->huruf("تَذَكَّرَ-يَتَذَكَّرُ-تَذَكُّرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "تَـفَـكَّـرَ - يَـتَـفَـكَّـرُ - تَـفَـكُّـرًا",
                        "kata_arab" => "تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا",
                        "arti" => "Memikirkan",
                        "huruf" => array_unique($this->huruf("تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "تَـكَـلَّـمَ - يَـتَـكَـلَّـمُ - تَـكَـلُّـمًا",
                        "kata_arab" => "تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّمًا",
                        "arti" => "Berbicara",
                        "huruf" => array_unique($this->huruf("تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّمًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "تَـلَا - يَـتْـلُـو - تِـلَاوَةً",
                        "kata_arab" => "تَلَا-يَتْلُو-تِلَاوَةً",
                        "arti" => "Bertilawah",
                        "huruf" => array_unique($this->huruf("تَلَا-يَتْلُو-تِلَاوَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "تَـنَـفَّـسَ - يَـتَـنَـفَّـسُ - تَـنَـفُّـسًا",
                        "kata_arab" => "تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا",
                        "arti" => "Bernafas",
                        "huruf" => array_unique($this->huruf("تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "حَـرَّكَ - يُـحَـرِّكُ - تَـحْـرِيْـكًا",
                        "kata_arab" => "حَرَّكَ-يُحَرِّكُ-تَحْرِيْكًا",
                        "arti" => "Menggerakkan",
                        "huruf" => array_unique($this->huruf("حَرَّكَ-يُحَرِّكُ-تَحْرِيْكًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "حَـسَّ - يَـحُـسُّ - حَـسًّا",
                        "kata_arab" => "حَسَّ-يَحُسُّ-حَسًّا",
                        "arti" => "Menyentuh",
                        "huruf" => array_unique($this->huruf("حَسَّ-يَحُسُّ-حَسًّا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "حَـكَّ - يَـحِـكُّ - حِـكًّا",
                        "kata_arab" => "حَكَّ-يَحِكُّ-حِكًّا",
                        "arti" => "Menggaruk",
                        "huruf" => array_unique($this->huruf("حَكَّ-يَحِكُّ-حِكًّا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 15",
                        "kata" => "خَافَ - يَـخَافُ - خَـوْفًا",
                        "kata_arab" => "خَافَ-يَخَافُ-خَوْفًا",
                        "arti" => "Takut",
                        "huruf" => array_unique($this->huruf("خَافَ-يَخَافُ-خَوْفًا")),
                        "status" => "on"
                    ],

                // Mufrodat 16
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "دَلَّـكَ - يُـدَلِّـكُ - تَـدْلِـيْـكًا",
                        "kata_arab" => "دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا",
                        "arti" => "Memijat",
                        "huruf" => array_unique($this->huruf("دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "ذَكَرَ-يَذْكُرُ-ذِكْرًا",
                        "kata_arab" => "ذَكَرَ-يَذْكُرُ-ذِكْرًا",
                        "arti" => "Menyebut",
                        "huruf" => array_unique($this->huruf("ذَكَرَ-يَذْكُرُ-ذِكْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "رَفَسَ-يَرْفُسُ-رَفْسًا",
                        "kata_arab" => "رَفَسَ-يَرْفُسُ-رَفْسًا",
                        "arti" => "Menendang",
                        "huruf" => array_unique($this->huruf("رَفَسَ-يَرْفُسُ-رَفْسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "سَـمِـعَ - يَـسْـمَـعُ - سَـمْـعًا",
                        "kata_arab" => "سَمِعَ-يَسْمَعُ-سَمْعًا",
                        "arti" => "Mendengar",
                        "huruf" => array_unique($this->huruf("سَمِعَ-يَسْمَعُ-سَمْعًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "شَـمَّ - يَـشُـمُّ - شَـمًّا",
                        "kata_arab" => "شَمَّ-يَشُمُّ-شَمًّا",
                        "arti" => "Mencium (bau)",
                        "huruf" => array_unique($this->huruf("شَمَّ-يَشُمُّ-شَمًّا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "ضَـحِـكَ - يَـضْـحَـكُ - ضَـحْـكًا",
                        "kata_arab" => "ضَحِكَ-يَضْحَكُ-ضَحْكًا",
                        "arti" => "Tertawa",
                        "huruf" => array_unique($this->huruf("ضَحِكَ-يَضْحَكُ-ضَحْكًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "ضَـرَبَ - يَـضْـرِبُ - ضَـرْبًا",
                        "kata_arab" => "ضَرَبَ-يَضْرِبُ-ضَرْبًا",
                        "arti" => "Memukul",
                        "huruf" => array_unique($this->huruf("ضَرَبَ-يَضْرِبُ-ضَرْبًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "ضَـرَطَ - يَـضْـرِطُ - ضُـرَاطًا",
                        "kata_arab" => "ضَرَطَ-يَضْرِطُ-ضُرَاطًا",
                        "arti" => "Kentut (suara)",
                        "huruf" => array_unique($this->huruf("ضَرَطَ-يَضْرِطُ-ضُرَاطًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 16",
                        "kata" => "غَـضَّ - يَـغُـضُّ - غَـضًّا",
                        "kata_arab" => "غَضَّ-يَغُضُّ-غَضًّا",
                        "arti" => "Memejamkan",
                        "huruf" => array_unique($this->huruf("غَضَّ-يَغُضُّ-غَضًّا")),
                        "status" => "on"
                    ],

                // Mufrodat 17
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "فَـسَا - يَـفْـسُـو - فُـسَاءً",
                        "kata_arab" => "فَسَا-يَفْسُو-فُسَاءً",
                        "arti" => "Kentut",
                        "huruf" => array_unique($this->huruf("فَسَا-يَفْسُو-فُسَاءً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "فَـكَّـرَ - يُـفَـكِّـرُ - تَـفْـكِـيْـرًا",
                        "kata_arab" => "فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا",
                        "arti" => "Berfikir",
                        "huruf" => array_unique($this->huruf("فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "قَالَ - يَـقُـوْلُ - قَـوْلًا",
                        "kata_arab" => "قَالَ-يَقُوْلُ-قَوْلًا",
                        "arti" => "Berkata",
                        "huruf" => array_unique($this->huruf("قَالَ-يَقُوْلُ-قَوْلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "قَـبَّـلَ - يُـقَـبِّـلُ - تَـقْـبِـيْلًا",
                        "kata_arab" => "قَبَّلَ-يُقَبِّلُ-تَقْبِيْلًا",
                        "arti" => "Mencium",
                        "huruf" => array_unique($this->huruf("قَبَّلَ-يُقَبِّلُ-تَقْبِيْلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "قَـرَأَ - يَـقْـرَأُ - قِـرَائَـةً",
                        "kata_arab" => "قَرَأَ-يَقْرَأُ-قِرَائَةً",
                        "arti" => "Membaca",
                        "huruf" => array_unique($this->huruf("قَرَأَ-يَقْرَأُ-قِرَائَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "قَـرَصَ - يَـقْـرُصُ -قَـرْصًا",
                        "kata_arab" => "قَرَصَ-يَقْرُصُ-قَرْصًا",
                        "arti" => "Mencubit",
                        "huruf" => array_unique($this->huruf("قَرَصَ-يَقْرُصُ-قَرْصًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "قَـرْفَـصَ - يُـقَـرْفِـصُ - قَـرْفَـصَـةً",
                        "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً",
                        "arti" => "Jongkok",
                        "huruf" => array_unique($this->huruf("قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 17",
                        "kata" => "كَـتَـبَ - يَـكْـتُـبُ - كِـتَابَـةً",
                        "kata_arab" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                        "arti" => "Menulis",
                        "huruf" => array_unique($this->huruf("كَتَبَ-يَكْتُبُ-كِتَابَةً")),
                        "status" => "on"
                    ],

                // Mufrodat 18
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "لَـمَـسَ - يَـلْـمِـسُ - لَـمْـسًا",
                        "kata_arab" => "لَمَسَ-يَلْمِسُ-لَمْسًا",
                        "arti" => "Menyentuh",
                        "huruf" => array_unique($this->huruf("لَمَسَ-يَلْمِسُ-لَمْسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "مَـشَـطَ - يَـمْـشُـطُ - مَـشْـطًا",
                        "kata_arab" => "مَشَطَ-يَمْشُطُ-مَشْطًا",
                        "arti" => "Menyisir",
                        "huruf" => array_unique($this->huruf("مَشَطَ-يَمْشُطُ-مَشْطًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "نَـسِـيَ - يَـنْـسَـى - نِـسْـيَانًا",
                        "kata_arab" => "نَسِيَ-يَنْسَى-نِسْيَانًا",
                        "arti" => "Lupa",
                        "huruf" => array_unique($this->huruf("نَسِيَ-يَنْسَى-نِسْيَانًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "نَـظَـرَ - يَـنْـظُـرُ - نَـظْـرًا",
                        "kata_arab" => "نَظَرَ-يَنْظُرُ-نَظْرًا",
                        "arti" => "Melihat",
                        "huruf" => array_unique($this->huruf("نَظَرَ-يَنْظُرُ-نَظْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "نَـفَـخَ - يَـنْـفَـخُ - نَـفْـحًا",
                        "kata_arab" => "نَفَخَ-يَنْفَخُ-نَفْحًا",
                        "arti" => "Meniup",
                        "huruf" => array_unique($this->huruf("نَفَخَ-يَنْفَخُ-نَفْحًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "نَـفَـخَ - يَـنْـفَـخُ - نَـفْـخًا",
                        "kata_arab" => "نَفَخَ-يَنْفَخُ-نَفْخًا",
                        "arti" => "Bernafas",
                        "huruf" => array_unique($this->huruf("نَفَخَ-يَنْفَخُ-نَفْخًا")),
                        "status" => "off"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "نَـقَـلَ - يَـنْـقُـلُ - نَـقْـلًا",
                        "kata_arab" => "نَقَلَ-يَنْقُلُ-نَقْلًا",
                        "arti" => "Memindahkan",
                        "huruf" => array_unique($this->huruf("نَقَلَ-يَنْقُلُ-نَقْلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 18",
                        "kata" => "هَـمَـسَ - يَـهْـمِـسُ - هَـمْـسًا",
                        "kata_arab" => "هَمَسَ-يَهْمِسُ-هَمْسًا",
                        "arti" => "Berbisik",
                        "huruf" => array_unique($this->huruf("هَمَسَ-يَهْمِسُ-هَمْسًا")),
                        "status" => "on"
                    ],

                // Mufrodat 19 9
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "أَبٌ / وَالِـدٌ",
                        "kata_arab" => "وَالِدٌ",
                        "arti" => "Bapak ",
                        "huruf" => array_unique($this->huruf("وَالِدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "أُمٌّ / وَالِدَةٌ",
                        "kata_arab" => "وَالِدَةٌ",
                        "arti" => "Ibu",
                        "huruf" => array_unique($this->huruf("وَالِدَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "جَـدٌّ",
                        "kata_arab" => "جَدٌّ",
                        "arti" => "Kakek",
                        "huruf" => array_unique($this->huruf("جَدٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "جَـدَّةٌ",
                        "kata_arab" => "جَدَّةٌ",
                        "arti" => "Nenek",
                        "huruf" => array_unique($this->huruf("جَدَّةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "زَوْجٌ",
                        "kata_arab" => "زَوْجٌ",
                        "arti" => "Suami",
                        "huruf" => array_unique($this->huruf("زَوْجٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "زَوْجَـةٌ",
                        "kata_arab" => "زَوْجَةٌ",
                        "arti" => "Istri",
                        "huruf" => array_unique($this->huruf("زَوْجَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "إِبْـنٌ",
                        "kata_arab" => "إِبْنٌ",
                        "arti" => "Anak (lk)",
                        "huruf" => array_unique($this->huruf("إِبْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "بِـنْـتٌ",
                        "kata_arab" => "بِنْتٌ",
                        "arti" => "Anak (pr)",
                        "huruf" => array_unique($this->huruf("بِنْتٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 19",
                        "kata" => "حَـفِـيْـدٌ",
                        "kata_arab" => "حَفِيْدٌ",
                        "arti" => "Cucu (lk)",
                        "huruf" => array_unique($this->huruf("حَفِيْدٌ")),
                        "status" => "on"
                    ],
                
                // Mufrodat 20 9
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "حَـفِـيْـدَةٌ",
                        "kata_arab" => "حَفِيْدَةٌ",
                        "arti" => "Cucu (pr)",
                        "huruf" => array_unique($this->huruf("حَفِيْدَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "عَـمٌّ",
                        "kata_arab" => "عَمٌّ",
                        "arti" => "Paman dr ayah",
                        "huruf" => array_unique($this->huruf("عَمٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "عَـمَّـةٌ",
                        "kata_arab" => "عَمَّةٌ",
                        "arti" => "Bibi dari ayah",
                        "huruf" => array_unique($this->huruf("عَمَّةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "خَالٌ",
                        "kata_arab" => "خَالٌ",
                        "arti" => "Paman dr ibu",
                        "huruf" => array_unique($this->huruf("خَالٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "خَالَـةٌ",
                        "kata_arab" => "خَالَةٌ",
                        "arti" => "Bibi dr ibu",
                        "huruf" => array_unique($this->huruf("خَالَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "أَخٌ",
                        "kata_arab" => "أَخٌ",
                        "arti" => "Saudara (lk)",
                        "huruf" => array_unique($this->huruf("أَخٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "أُخْـتٌ",
                        "kata_arab" => "أُخْتٌ",
                        "arti" => "Saudara (pr)",
                        "huruf" => array_unique($this->huruf("أُخْتٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "أَخٌ كَـبِـيْـرٌ",
                        "kata_arab" => "أَخٌ كَبِيْرٌ",
                        "arti" => "Kakak (lk)",
                        "huruf" => array_unique($this->huruf("أَخٌ كَبِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 20",
                        "kata" => "أَخٌ صَـغِـيْـرٌ",
                        "kata_arab" => "أَخٌ صَغِيْرٌ",
                        "arti" => "Adik (lk)",
                        "huruf" => array_unique($this->huruf("أَخٌ صَغِيْرٌ")),
                        "status" => "on"
                    ],

                // Mufrodat 21 8
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "أُخْـتٌ كَـبِـيْـرَةٌ",
                        "kata_arab" => "أُخْتٌ كَبِيْرَةٌ",
                        "arti" => "Kakak (pr)",
                        "huruf" => array_unique($this->huruf("أُخْتٌ كَبِيْرَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "أُخْـتٌ صَـغِـيْـرَةٌ",
                        "kata_arab" => "أُخْتٌ صَغِيْرَةٌ",
                        "arti" => "Kakak (pr)",
                        "huruf" => array_unique($this->huruf("أُخْتٌ صَغِيْرَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "أَخٌ شَـقِـيْـقٌ",
                        "kata_arab" => "أَخٌ شَقِيْقٌ",
                        "arti" => "Saudara (lk) kandung",
                        "huruf" => array_unique($this->huruf("أَخٌ شَقِيْقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "أُخْـتٌ شَـقِـيْـقَـةٌ",
                        "kata_arab" => "أُخْتٌ شَقِيْقَةٌ",
                        "arti" => "Saudara (pr) kandung",
                        "huruf" => array_unique($this->huruf("أُخْتٌ شَقِيْقَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "رَبِـيْـبٌ",
                        "kata_arab" => "رَبِيْبٌ",
                        "arti" => "Anak tiri (lk)",
                        "huruf" => array_unique($this->huruf("رَبِيْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "رَبِـيْـبَـةٌ",
                        "kata_arab" => "رَبِيْبَةٌ",
                        "arti" => "Anak tiri (pr)",
                        "huruf" => array_unique($this->huruf("رَبِيْبَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "عَـزَبٌ",
                        "kata_arab" => "عَزَبٌ",
                        "arti" => "Perjaka ",
                        "huruf" => array_unique($this->huruf("عَزَبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 21",
                        "kata" => "عَـذْرَاءُ",
                        "kata_arab" => "عَذْرَاءُ",
                        "arti" => "Gadis ",
                        "huruf" => array_unique($this->huruf("عَذْرَاءُ")),
                        "status" => "on"
                    ],
                    
                // Mufrodat 22 8
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "أَرْمَـلٌ",
                        "kata_arab" => "أَرْمَلٌ",
                        "arti" => "Duda",
                        "huruf" => array_unique($this->huruf("أَرْمَلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "أَرْمَـلَـةٌ",
                        "kata_arab" => "أَرْمَلَةٌ",
                        "arti" => "Janda",
                        "huruf" => array_unique($this->huruf("أَرْمَلَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "صِـهْـرٌ",
                        "kata_arab" => "صِهْرٌ",
                        "arti" => "Menantu (lk)",
                        "huruf" => array_unique($this->huruf("صِهْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "صِـهْـرَةٌ",
                        "kata_arab" => "صِهْرَةٌ",
                        "arti" => "Menantu (pr)",
                        "huruf" => array_unique($this->huruf("صِهْرَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "حَـمٌ",
                        "kata_arab" => "حَمٌ",
                        "arti" => "Mertua (lk)",
                        "huruf" => array_unique($this->huruf("حَمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "حَـمَاةٌ",
                        "kata_arab" => "حَمَاةٌ",
                        "arti" => "Mertua (pr)",
                        "huruf" => array_unique($this->huruf("حَمَاةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "فَـتَـى / شَابٌّ",
                        "kata_arab" => "شَابٌّ",
                        "arti" => "Pemuda ",
                        "huruf" => array_unique($this->huruf("شَابٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 22",
                        "kata" => "فَـتَاةٌ / شَابَّةٌ",
                        "kata_arab" => "شَابَّةٌ",
                        "arti" => "Pemudi",
                        "huruf" => array_unique($this->huruf("شَابَّةٌ")),
                        "status" => "on"
                    ],


                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "رَبَّـي - يُـرَبِّـي – تَـرْبِـيَّـةً",
                        "kata_arab" => "رَبَّي-يُرَبِّي–تَرْبِيَّةً",
                        "arti" => "Mendidik ",
                        "huruf" => array_unique($this->huruf("رَبَّي-يُرَبِّي–تَرْبِيَّةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "حَـضَـنَ - يَـحْـضُـنُ - حَـضَانَـةً",
                        "kata_arab" => "حَضَنَ-يَحْضُنُ-حَضَانَةً",
                        "arti" => "Mengasuh",
                        "huruf" => array_unique($this->huruf("حَضَنَ-يَحْضُنُ-حَضَانَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "أَحَـبَّ - يُـحِـبُّ – مَـحَـبَّـةً",
                        "kata_arab" => "أَحَبَّ-يُحِبُّ-مَحَبَّةً",
                        "arti" => "Mencintai ",
                        "huruf" => array_unique($this->huruf("أَحَبَّ-يُحِبُّ-مَحَبَّةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "رَحِـمَ - يَـرْحَـمُ – رَحْـمَـةً",
                        "kata_arab" => "رَحِمَ-يَرْحَمُ-رَحْمَةً",
                        "arti" => "Menyayangi",
                        "huruf" => array_unique($this->huruf("رَحِمَ-يَرْحَمُ-رَحْمَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "اِحْـتَـرَمَ - يَـحْـتَـرِمُ - اِحْـتِـرَامًا",
                        "kata_arab" => "اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا",
                        "arti" => "Menghormati",
                        "huruf" => array_unique($this->huruf("اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "جَـرَحَ - يَـجْـرَحُ - جَـرْحًا",
                        "kata_arab" => "جَرَحَ-يَجْرَحُ-جَرْحًا",
                        "arti" => "Melukai",
                        "huruf" => array_unique($this->huruf("جَرَحَ-يَجْرَحُ-جَرْحًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "أَهَانَ - يُـهِـيْـنُ - إِهَانَـةً",
                        "kata_arab" => "أَهَانَ-يُهِيْنُ-إِهَانَةً",
                        "arti" => "Menghina",
                        "huruf" => array_unique($this->huruf("أَهَانَ-يُهِيْنُ-إِهَانَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 23",
                        "kata" => "دَعَا - يَـدْعُـو - دَعْـوَةً",
                        "kata_arab" => "دَعَا-يَدْعُو-دَعْوَةً",
                        "arti" => "Mengajak/ Memanggil",
                        "huruf" => array_unique($this->huruf("دَعَا-يَدْعُو-دَعْوَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "أَمَـرَ - يَأْمُـرُ - أَمْـرًا",
                        "kata_arab" => "أَمَرَ-يَأْمُرُ-أَمْرًا",
                        "arti" => "Memerintah ",
                        "huruf" => array_unique($this->huruf("أَمَرَ-يَأْمُرُ-أَمْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "رَضِـعَ - يَـرْضَـعُ - رَضَاعَـةً",
                        "kata_arab" => "رَضِعَ-يَرْضَعُ-رَضَاعَةً",
                        "arti" => "Menyusu",
                        "huruf" => array_unique($this->huruf("رَضِعَ-يَرْضَعُ-رَضَاعَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "أَرْضَـعَ - يُـرْضِـعُ - إِرْضَاعًا",
                        "kata_arab" => "أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا",
                        "arti" => "Menyusui",
                        "huruf" => array_unique($this->huruf("أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "نَـصَـحَ - يَـنْـصَـحُ - نَـصِـيْـحَـةً",
                        "kata_arab" => "نَصَحَ-يَنْصَحُ-نَصِيْحَةً",
                        "arti" => "Menasehati",
                        "huruf" => array_unique($this->huruf("نَصَحَ-يَنْصَحُ-نَصِيْحَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "نَـصَـرَ - يَـنْـصُـرُ - نَـصْـرًا",
                        "kata_arab" => "نَصَرَ-يَنْصُرُ-نَصْرًا",
                        "arti" => "Menolong",
                        "huruf" => array_unique($this->huruf("نَصَرَ-يَنْصُرُ-نَصْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "بَلَغَ - يَبْلُغُ – بُلُوغًا",
                        "kata_arab" => "بَلَغَ - يَبْلُغُ – بُلُوغًا",
                        "arti" => "Sampai ",
                        "huruf" => array_unique($this->huruf("بَلَغَ - يَبْلُغُ – بُلُوغًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "مَزَحَ - يَمْزَحُ – مِزَاحًا",
                        "kata_arab" => "مَزَحَ - يَمْزَحُ – مِزَاحًا",
                        "arti" => "Bercanda ",
                        "huruf" => array_unique($this->huruf("مَزَحَ - يَمْزَحُ – مِزَاحًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 24",
                        "kata" => "اِعْـتَـرَفَ - يَـعْـتَـرِفُ - اِعْـتِـرَافًا",
                        "kata_arab" => "اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا",
                        "arti" => "Mengakui ",
                        "huruf" => array_unique($this->huruf("اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "رَجَـى - يَـرْجُـو - رَجَاءً",
                        "kata_arab" => "رَجَى-يَرْجُو-رَجَاءً",
                        "arti" => "Berharap",
                        "huruf" => array_unique($this->huruf("رَجَى-يَرْجُو-رَجَاءً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "صَارَ - يَـصِـيْـرُ - صَـيْـرًا",
                        "kata_arab" => "صَارَ-يَصِيْرُ-صَيْرًا",
                        "arti" => "Menjadi",
                        "huruf" => array_unique($this->huruf("صَارَ-يَصِيْرُ-صَيْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "اِحْـتَاجَ - يَـحْـتَاجُ - اِحْـتِـيَاجًا",
                        "kata_arab" => "اِحْتَاجَ-يَحْتَاجُ-اِحْتِيَاجًا",
                        "arti" => "Butuh",
                        "huruf" => array_unique($this->huruf("اِحْتَاجَ-يَحْتَاجُ-اِحْتِيَاجًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "قَـلَـقَ - يَـقْـلَـقُ – قَـلَـقًا",
                        "kata_arab" => "قَلَقَ-يَقْلَقُ-قَلَقًا",
                        "arti" => "Galau",
                        "huruf" => array_unique($this->huruf("قَلَقَ-يَقْلَقُ-قَلَقًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "كَـلَّـفَ - يُـكَـلِّـفُ - تَـكْـلِـيْـفًا",
                        "kata_arab" => "كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا",
                        "arti" => "Membebani ",
                        "huruf" => array_unique($this->huruf("كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "صَاحَ - يَـصِـيْـحُ - صَـيْـحًا",
                        "kata_arab" => "صَاحَ-يَصِيْحُ-صَيْحًا",
                        "arti" => "Berteriak",
                        "huruf" => array_unique($this->huruf("صَاحَ-يَصِيْحُ-صَيْحًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "ضَـحِـكَ - يَـضْـحَـكُ -ضَـحْـكًا",
                        "kata_arab" => "ضَحِكَ-يَضْحَكُ-ضَحْكًا",
                        "arti" => "Tertawa",
                        "huruf" => array_unique($this->huruf("ضَحِكَ-يَضْحَكُ-ضَحْكًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 25",
                        "kata" => "سَـكَـتَ - يَـسْـكُـتُ - سُـكُـوْتًا",
                        "kata_arab" => "سَكَتَ-يَسْكُتُ-سُكُوْتًا",
                        "arti" => "Diam",
                        "huruf" => array_unique($this->huruf("سَكَتَ-يَسْكُتُ-سُكُوْتًا")),
                        "status" => "on"
                    ],

                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "مُـتَـوَاضِـعٌ",
                        "kata_arab" => "مُتَوَاضِعٌ",
                        "arti" => "Rendah hati",
                        "huruf" => array_unique($this->huruf("مُتَوَاضِعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "حَـكِـيْـمٌ",
                        "kata_arab" => "حَكِيْمٌ",
                        "arti" => "Bijaksana",
                        "huruf" => array_unique($this->huruf("حَكِيْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "صَابِـرٌ",
                        "kata_arab" => "صَابِرٌ",
                        "arti" => "Penyabar",
                        "huruf" => array_unique($this->huruf("صَابِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "مُـتَـوَحِّـشٌ",
                        "kata_arab" => "مُتَوَحِّشٌ",
                        "arti" => "Kejam",
                        "huruf" => array_unique($this->huruf("مُتَوَحِّشٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "مُـتَـكَـبِّـرٌ",
                        "kata_arab" => "مُتَكَبِّرٌ",
                        "arti" => "Sombong",
                        "huruf" => array_unique($this->huruf("مُتَكَبِّرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "غَـضْـبَانُ",
                        "kata_arab" => "غَضْبَانُ",
                        "arti" => "Pemarah ",
                        "huruf" => array_unique($this->huruf("غَضْبَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "مِـغْـنَاجٌ",
                        "kata_arab" => "مِغْنَاجٌ",
                        "arti" => "Genit",
                        "huruf" => array_unique($this->huruf("مِغْنَاجٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "نَـهَّامٌ",
                        "kata_arab" => "نَهَّامٌ",
                        "arti" => "Rakus",
                        "huruf" => array_unique($this->huruf("نَهَّامٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "أَمِـيْـنٌ",
                        "kata_arab" => "أَمِيْنٌ",
                        "arti" => "Dapat dipercaya",
                        "huruf" => array_unique($this->huruf("أَمِيْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 26",
                        "kata" => "صَادِقٌ",
                        "kata_arab" => "صَادِقٌ",
                        "arti" => "Jujur",
                        "huruf" => array_unique($this->huruf("صَادِقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "كَاذِبٌ",
                        "kata_arab" => "كَاذِبٌ",
                        "arti" => "Pembohong",
                        "huruf" => array_unique($this->huruf("كَاذِبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "مُـجْـتَـهِـدٌ",
                        "kata_arab" => "مُجْتَهِدٌ",
                        "arti" => "Sungguh-sungguh",
                        "huruf" => array_unique($this->huruf("مُجْتَهِدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "كَـسْـلَانٌ",
                        "kata_arab" => "كَسْلَانٌ",
                        "arti" => "Malas",
                        "huruf" => array_unique($this->huruf("كَسْلَانٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "حَـسُـوْدٌ",
                        "kata_arab" => "حَسُوْدٌ",
                        "arti" => "Dengki",
                        "huruf" => array_unique($this->huruf("حَسُوْدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "سَـخِـيٌّ",
                        "kata_arab" => "سَخِيٌّ",
                        "arti" => "Dermawan",
                        "huruf" => array_unique($this->huruf("سَخِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "بَـخِـيْـلٌ",
                        "kata_arab" => "بَخِيْلٌ",
                        "arti" => "Pelit",
                        "huruf" => array_unique($this->huruf("بَخِيْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "شُـجَاعٌ",
                        "kata_arab" => "شُجَاعٌ",
                        "arti" => "Berani",
                        "huruf" => array_unique($this->huruf("شُجَاعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "جَـبَّانٌ",
                        "kata_arab" => "جَبَّانٌ",
                        "arti" => "Penakut",
                        "huruf" => array_unique($this->huruf("جَبَّانٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "أَنِـيْـسٌ",
                        "kata_arab" => "أَنِيْسٌ",
                        "arti" => "Ramah",
                        "huruf" => array_unique($this->huruf("أَنِيْسٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 27",
                        "kata" => "مُـشَاغِـبٌ",
                        "kata_arab" => "مُشَاغِبٌ",
                        "arti" => "Nakal ",
                        "huruf" => array_unique($this->huruf("مُشَاغِبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "لَـطِـيْـفٌ",
                        "kata_arab" => "لَطِيْفٌ",
                        "arti" => "Imut",
                        "huruf" => array_unique($this->huruf("لَطِيْفٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "جَـمِـيْـلٌ",
                        "kata_arab" => "جَمِيْلٌ",
                        "arti" => "Ganteng ",
                        "huruf" => array_unique($this->huruf("جَمِيْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "جَـمِـيْـلَـةٌ",
                        "kata_arab" => "جَمِيْلَةٌ",
                        "arti" => "Cantik",
                        "huruf" => array_unique($this->huruf("جَمِيْلَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "مَـرَحٌ",
                        "kata_arab" => "مَرَحٌ",
                        "arti" => "Periang",
                        "huruf" => array_unique($this->huruf("مَرَحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "أَنِـيْـقٌ",
                        "kata_arab" => "أَنِيْقٌ",
                        "arti" => "Anggun",
                        "huruf" => array_unique($this->huruf("أَنِيْقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "مُـهْـمِـلٌ",
                        "kata_arab" => "مُهْمِلٌ",
                        "arti" => "Cuek",
                        "huruf" => array_unique($this->huruf("مُهْمِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "خَـشِـنٌ",
                        "kata_arab" => "خَشِنٌ",
                        "arti" => "Kasar",
                        "huruf" => array_unique($this->huruf("خَشِنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "حَـقُـوْدٌ",
                        "kata_arab" => "حَقُوْدٌ",
                        "arti" => "Dengki",
                        "huruf" => array_unique($this->huruf("حَقُوْدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "ثَـرْثَارٌ",
                        "kata_arab" => "ثَرْثَارٌ",
                        "arti" => "Cerewet",
                        "huruf" => array_unique($this->huruf("ثَرْثَارٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 28",
                        "kata" => "شَـهِـيْـرٌ",
                        "kata_arab" => "شَهِيْرٌ",
                        "arti" => "Terkenal ",
                        "huruf" => array_unique($this->huruf("شَهِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "عَاطِـفِـيٌّ",
                        "kata_arab" => "عَاطِفِيٌّ",
                        "arti" => "Romantis ",
                        "huruf" => array_unique($this->huruf("عَاطِفِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "كَـتُـوْمٌ",
                        "kata_arab" => "كَتُوْمٌ",
                        "arti" => "Pendiam",
                        "huruf" => array_unique($this->huruf("كَتُوْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "دَلُّـوْعٌ",
                        "kata_arab" => "دَلُّوْعٌ",
                        "arti" => "Manja",
                        "huruf" => array_unique($this->huruf("دَلُّوْعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "أَنَانِـيٌّ",
                        "kata_arab" => "أَنَانِيٌّ",
                        "arti" => "Egois ",
                        "huruf" => array_unique($this->huruf("أَنَانِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "مُـتَـعَـنِّـتٌ",
                        "kata_arab" => "مُتَعَنِّتٌ",
                        "arti" => "Bandel",
                        "huruf" => array_unique($this->huruf("مُتَعَنِّتٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "حَـسَّاسٌ",
                        "kata_arab" => "حَسَّاسٌ",
                        "arti" => "Penyentuh",
                        "huruf" => array_unique($this->huruf("حَسَّاسٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "حَـنِـيْـنٌ",
                        "kata_arab" => "حَنِيْنٌ",
                        "arti" => "Penyayang",
                        "huruf" => array_unique($this->huruf("حَنِيْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "مَاهِـرٌ",
                        "kata_arab" => "مَاهِرٌ",
                        "arti" => "Pintar",
                        "huruf" => array_unique($this->huruf("مَاهِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "جَاهِـلٌ",
                        "kata_arab" => "جَاهِلٌ",
                        "arti" => "Bodoh",
                        "huruf" => array_unique($this->huruf("جَاهِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 29",
                        "kata" => "ذَكِـيٌّ",
                        "kata_arab" => "ذَكِيٌّ",
                        "arti" => "Cerdas",
                        "huruf" => array_unique($this->huruf("ذَكِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "غَـبِـيٌّ",
                        "kata_arab" => "غَبِيٌّ",
                        "arti" => "Tolol ",
                        "huruf" => array_unique($this->huruf("غَبِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "طَـفْـشَانُ",
                        "kata_arab" => "طَفْشَانُ",
                        "arti" => "Jenuh",
                        "huruf" => array_unique($this->huruf("طَفْشَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "نَـعْـسَانُ",
                        "kata_arab" => "نَعْسَانُ",
                        "arti" => "Ngantuk ",
                        "huruf" => array_unique($this->huruf("نَعْسَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "تَـعْـبَانُ",
                        "kata_arab" => "تَعْبَانُ",
                        "arti" => "Capek",
                        "huruf" => array_unique($this->huruf("تَعْبَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "جَـوْعَانُ",
                        "kata_arab" => "جَوْعَانُ",
                        "arti" => "Lapar",
                        "huruf" => array_unique($this->huruf("جَوْعَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "عَـطْـشَانُ",
                        "kata_arab" => "عَطْشَانُ",
                        "arti" => "Haus",
                        "huruf" => array_unique($this->huruf("عَطْشَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "مَـجْـنُـوْنٌ",
                        "kata_arab" => "مَجْنُوْنٌ",
                        "arti" => "Gila",
                        "huruf" => array_unique($this->huruf("مَجْنُوْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "أَصَـمٌّ",
                        "kata_arab" => "أَصَمٌّ",
                        "arti" => "Tuli",
                        "huruf" => array_unique($this->huruf("أَصَمٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "أَعْـمَـى",
                        "kata_arab" => "أَعْمَى",
                        "arti" => "Buta",
                        "huruf" => array_unique($this->huruf("أَعْمَى")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 30",
                        "kata" => "أَبْـكَـمٌ",
                        "kata_arab" => "أَبْكَمٌ",
                        "arti" => "Bisu",
                        "huruf" => array_unique($this->huruf("أَبْكَمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "قَـزَمٌ",
                        "kata_arab" => "قَزَمٌ",
                        "arti" => "Kerdil ",
                        "huruf" => array_unique($this->huruf("قَزَمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "أَصْـلَـعُ",
                        "kata_arab" => "أَصْلَعُ",
                        "arti" => "Botak",
                        "huruf" => array_unique($this->huruf("أَصْلَعُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "عَـدِيْـمُ السِّـنِّ",
                        "kata_arab" => "عَدِيْمُ السِّنِّ",
                        "arti" => "Ompong",
                        "huruf" => array_unique($this->huruf("عَدِيْمُ السِّنِّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "مِـسْـكِـيْـنٌ",
                        "kata_arab" => "مِسْكِيْنٌ",
                        "arti" => "Miskin ",
                        "huruf" => array_unique($this->huruf("مِسْكِيْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "غَـنِـيٌّ",
                        "kata_arab" => "غَنِيٌّ",
                        "arti" => "Kaya",
                        "huruf" => array_unique($this->huruf("غَنِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "مِـثَالِـيٌّ",
                        "kata_arab" => "مِثَالِيٌّ",
                        "arti" => "Sempurna",
                        "huruf" => array_unique($this->huruf("مِثَالِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "بَـسِـيْـطٌ",
                        "kata_arab" => "بَسِيْطٌ",
                        "arti" => "Sederhana",
                        "huruf" => array_unique($this->huruf("بَسِيْطٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "مُـبَـذِّرٌ",
                        "kata_arab" => "مُبَذِّرٌ",
                        "arti" => "Boros",
                        "huruf" => array_unique($this->huruf("مُبَذِّرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "مُـقْـتَـصِـدٌ",
                        "kata_arab" => "مُقْتَصِدٌ",
                        "arti" => "Hemat",
                        "huruf" => array_unique($this->huruf("مُقْتَصِدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 31",
                        "kata" => "عَادِلٌ",
                        "kata_arab" => "عَادِلٌ",
                        "arti" => "Adil",
                        "huruf" => array_unique($this->huruf("عَادِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "غَـيْـرُ عَادِلٍ",
                        "kata_arab" => "غَيْرُ عَادِلٍ",
                        "arti" => "Tidak adil",
                        "huruf" => array_unique($this->huruf("غَيْرُ عَادِلٍ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "قَـوِيٌّ",
                        "kata_arab" => "قَوِيٌّ",
                        "arti" => "Kuat",
                        "huruf" => array_unique($this->huruf("قَوِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "ضَـعِـيْـفٌ",
                        "kata_arab" => "ضَعِيْفٌ",
                        "arti" => "Lemah",
                        "huruf" => array_unique($this->huruf("ضَعِيْفٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "عَـجُـوْزٌ",
                        "kata_arab" => "عَجُوْزٌ",
                        "arti" => "Tua",
                        "huruf" => array_unique($this->huruf("عَجُوْزٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "سَـعِـيْـدٌ",
                        "kata_arab" => "سَعِيْدٌ",
                        "arti" => "Bahagia",
                        "huruf" => array_unique($this->huruf("سَعِيْدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "شَـقِـيٌّ",
                        "kata_arab" => "شَقِيٌّ",
                        "arti" => "Sengsara",
                        "huruf" => array_unique($this->huruf("شَقِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "مَـحْـمُـوْدٌ",
                        "kata_arab" => "مَحْمُوْدٌ",
                        "arti" => "Terpuji",
                        "huruf" => array_unique($this->huruf("مَحْمُوْدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "مَـذْمُـوْمٌ",
                        "kata_arab" => "مَذْمُوْمٌ",
                        "arti" => "Tercela",
                        "huruf" => array_unique($this->huruf("مَذْمُوْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "رَابِـحٌ",
                        "kata_arab" => "رَابِحٌ",
                        "arti" => "Untung",
                        "huruf" => array_unique($this->huruf("رَابِحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 32",
                        "kata" => "خَاسِـرٌ",
                        "kata_arab" => "خَاسِرٌ",
                        "arti" => "Rugi",
                        "huruf" => array_unique($this->huruf("خَاسِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "سَـمِـيْـنٌ",
                        "kata_arab" => "سَمِيْنٌ",
                        "arti" => "Gendut",
                        "huruf" => array_unique($this->huruf("سَمِيْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "هَـزِيْـلٌ",
                        "kata_arab" => "هَزِيْلٌ",
                        "arti" => "Kurus",
                        "huruf" => array_unique($this->huruf("هَزِيْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "مَـشْـغُـوْلٌ",
                        "kata_arab" => "مَشْغُوْلٌ",
                        "arti" => "Repot",
                        "huruf" => array_unique($this->huruf("مَشْغُوْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "عَاطِـلٌ",
                        "kata_arab" => "عَاطِلٌ",
                        "arti" => "Nganggur",
                        "huruf" => array_unique($this->huruf("عَاطِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "صِـحَّـةٌ",
                        "kata_arab" => "صِحَّةٌ",
                        "arti" => "Sehat",
                        "huruf" => array_unique($this->huruf("صِحَّةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "مَـرِيْـضٌ",
                        "kata_arab" => "مَرِيْضٌ",
                        "arti" => "Sakit",
                        "huruf" => array_unique($this->huruf("مَرِيْضٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "صَـحِـيْـحٌ",
                        "kata_arab" => "صَحِيْحٌ",
                        "arti" => "Sehat",
                        "huruf" => array_unique($this->huruf("صَحِيْحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "مُـخْـطِـئٌ",
                        "kata_arab" => "مُخْطِئٌ",
                        "arti" => "Salah",
                        "huruf" => array_unique($this->huruf("مُخْطِئٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "فَائِـزٌ",
                        "kata_arab" => "فَائِزٌ",
                        "arti" => "Menang",
                        "huruf" => array_unique($this->huruf("فَائِزٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 33",
                        "kata" => "مَـغْـلُـوْبٌ",
                        "kata_arab" => "مَغْلُوْبٌ",
                        "arti" => "Kalah",
                        "huruf" => array_unique($this->huruf("مَغْلُوْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "ثِـقَّـةُ النَّـفْـسِ",
                        "kata_arab" => "ثِقَّةُ النَّفْسِ",
                        "arti" =>  "Percaya diri",
                        "huruf" => array_unique($this->huruf("ثِقَّةُ النَّفْسِ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "مُـقْـتَـنِـعٌ",
                        "kata_arab" => "مُقْتَنِعٌ",
                        "arti" => "Puas",
                        "huruf" => array_unique($this->huruf("مُقْتَنِعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "مُـسْـتَـعْـجِـلٌ",
                        "kata_arab" => "مُسْتَعْجِلٌ",
                        "arti" => "Terburu-buru",
                        "huruf" => array_unique($this->huruf("مُسْتَعْجِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "جَادٌّ",
                        "kata_arab" => "جَادٌّ",
                        "arti" => "Serius",
                        "huruf" => array_unique($this->huruf("جَادٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "مُـحْـبِـطٌ",
                        "kata_arab" => "مُحْبِطٌ",
                        "arti" => "Frustasi",
                        "huruf" => array_unique($this->huruf("مُحْبِطٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "فُـضُـوْلِـيٌّ",
                        "kata_arab" => "فُضُوْلِيٌّ",
                        "arti" => "Penasaran ",
                        "huruf" => array_unique($this->huruf("فُضُوْلِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "مُـتَـفَـهِّـمٌ",
                        "kata_arab" => "مُتَفَهِّمٌ",
                        "arti" => "Perhatian",
                        "huruf" => array_unique($this->huruf("مُتَفَهِّمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "مُـبَالِـغٌ",
                        "kata_arab" => "مُبَالِغٌ",
                        "arti" => "Lebay",
                        "huruf" => array_unique($this->huruf("مُبَالِغٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "قَـلِـقٌ",
                        "kata_arab" => "قَلِقٌ",
                        "arti" => "Galau",
                        "huruf" => array_unique($this->huruf("قَلِقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 34",
                        "kata" => "مُـخْـجِـلٌ",
                        "kata_arab" => "مُخْجِلٌ",
                        "arti" => "Malu-maluin",
                        "huruf" => array_unique($this->huruf("مُخْجِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـمْـتِـعٌ",
                        "kata_arab" => "مُمْتِعٌ",
                        "arti" => "Menyenangkan",
                        "huruf" => array_unique($this->huruf("مُمْتِعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـجْـرِمٌ",
                        "kata_arab" => "مُجْرِمٌ",
                        "arti" => "Jahat",
                        "huruf" => array_unique($this->huruf("مُجْرِمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـثِـيْـرٌ",
                        "kata_arab" => "مُثِيْرٌ",
                        "arti" => "Menggemaskan",
                        "huruf" => array_unique($this->huruf("مُثِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مَـمْـسُـوْسٌ",
                        "kata_arab" => "مَمْسُوْسٌ",
                        "arti" => "Tersentuh",
                        "huruf" => array_unique($this->huruf("مَمْسُوْسٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مَـلَـلٌ",
                        "kata_arab" => "مَلَلٌ",
                        "arti" => "Bosan",
                        "huruf" => array_unique($this->huruf("مَلَلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـمِـلٌّ",
                        "kata_arab" => "مُمِلٌّ",
                        "arti" => "Membosankan ",
                        "huruf" => array_unique($this->huruf("مُمِلٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـرْتَاحٌ",
                        "kata_arab" => "مُرْتَاحٌ",
                        "arti" => "Betah ",
                        "huruf" => array_unique($this->huruf("مُرْتَاحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـتَأَكِّـدٌ",
                        "kata_arab" => "مُتَأَكِّدٌ",
                        "arti" => "Yakin",
                        "huruf" => array_unique($this->huruf("مُتَأَكِّدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـتَـرَدِّدٌ",
                        "kata_arab" => "مُتَرَدِّدٌ",
                        "arti" => "Ragu-ragu",
                        "huruf" => array_unique($this->huruf("مُتَرَدِّدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 35",
                        "kata" => "مُـتَـفَاجِـئٌ",
                        "kata_arab" => "مُتَفَاجِئٌ",
                        "arti" => "Kaget",
                        "huruf" => array_unique($this->huruf("مُتَفَاجِئٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 36",
                        "kata" => "تَائِـبٌ",
                        "kata_arab" => "تَائِبٌ",
                        "arti" => "Kapok",
                        "huruf" => array_unique($this->huruf("تَائِبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 36",
                        "kata" => "مُـتَـحَـيِّـرٌ",
                        "kata_arab" => "مُتَحَيِّرٌ",
                        "arti" => "Bingung",
                        "huruf" => array_unique($this->huruf("مُتَحَيِّرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 36",
                        "kata" => "زَعْـلَانُ",
                        "kata_arab" => "زَعْلَانُ",
                        "arti" => "Ngambek",
                        "huruf" => array_unique($this->huruf("زَعْلَانُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 36",
                        "kata" => "مُـسْـتَـسْـلِـمٌ",
                        "kata_arab" => "مُسْتَسْلِمٌ",
                        "arti" => "Menyerah",
                        "huruf" => array_unique($this->huruf("مُسْتَسْلِمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 36",
                        "kata" => "سَـرِيْـعُ الـنِّـسْـيَانِ",
                        "kata_arab" => "سَرِيْعُ النِّسْيَانِ",
                        "arti" => "Pelupa",
                        "huruf" => array_unique($this->huruf("سَرِيْعُ النِّسْيَانِ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "جِـدَارٌ",
                        "kata_arab" => "جِدَارٌ",
                        "arti" => "Tembok ",
                        "huruf" => array_unique($this->huruf("جِدَارٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "سُـوْرٌ",
                        "kata_arab" => "سُوْرٌ",
                        "arti" => "Pagar",
                        "huruf" => array_unique($this->huruf("سُوْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "صُـوْرَةٌ",
                        "kata_arab" => "صُوْرَةٌ",
                        "arti" => "Gambar",
                        "huruf" => array_unique($this->huruf("صُوْرَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "سَاعَـةٌ",
                        "kata_arab" => "سَاعَةٌ",
                        "arti" => "Jam",
                        "huruf" => array_unique($this->huruf("سَاعَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "سَاعَـةُ الْـجِـدَارِ",
                        "kata_arab" => "سَاعَةُ الْجِدَارِ",
                        "arti" => "Jam dinding",
                        "huruf" => array_unique($this->huruf("سَاعَةُ الْجِدَارِ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "مَـكْـتَـبٌ",
                        "kata_arab" => "مَكْتَبٌ",
                        "arti" => "Kantor",
                        "huruf" => array_unique($this->huruf("مَكْتَبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "كُـرْسِـيٌّ",
                        "kata_arab" => "كُرْسِيٌّ",
                        "arti" => "Kursi",
                        "huruf" => array_unique($this->huruf("كُرْسِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 37",
                        "kata" => "خِـزَانَـةٌ",
                        "kata_arab" => "خِزَانَةٌ",
                        "arti" => "Almari",
                        "huruf" => array_unique($this->huruf("خِزَانَةٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "دَوْلَـبٌ",
                        "kata_arab" => "دَوْلَبٌ",
                        "arti" => "Bupet",
                        "huruf" => array_unique($this->huruf("دَوْلَبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "مِـرْوَحَـةٌ",
                        "kata_arab" => "مِرْوَحَةٌ",
                        "arti" => "Kipas angin",
                        "huruf" => array_unique($this->huruf("مِرْوَحَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "بَابٌ",
                        "kata_arab" => "بَابٌ",
                        "arti" => "Pintu",
                        "huruf" => array_unique($this->huruf("بَابٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "نَافِـذَةٌ",
                        "kata_arab" => "نَافِذَةٌ",
                        "arti" => "Jendela ",
                        "huruf" => array_unique($this->huruf("نَافِذَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "غُـرْفَـةٌ",
                        "kata_arab" => "غُرْفَةٌ",
                        "arti" => "Kamar",
                        "huruf" => array_unique($this->huruf("غُرْفَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "شُـرْفَـةٌ",
                        "kata_arab" => "شُرْفَةٌ",
                        "arti" => "Teras",
                        "huruf" => array_unique($this->huruf("شُرْفَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "سَاحَـةٌ",
                        "kata_arab" => "سَاحَةٌ",
                        "arti" => "Halaman ",
                        "huruf" => array_unique($this->huruf("سَاحَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 38",
                        "kata" => "أَرِيْـكَـةٌ",
                        "kata_arab" => "أَرِيْكَةٌ",
                        "arti" => "Sofa",
                        "huruf" => array_unique($this->huruf("أَرِيْكَةٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "مِـكْـنَـسَـةٌ",
                        "kata_arab" => "مِكْنَسَةٌ",
                        "arti" => "Sapu",
                        "huruf" => array_unique($this->huruf("مِكْنَسَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "غَالُـوْنٌ",
                        "kata_arab" => "غَالُوْنٌ",
                        "arti" => "Galon",
                        "huruf" => array_unique($this->huruf("غَالُوْنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "بِـلَاطٌ",
                        "kata_arab" => "بِلَاطٌ",
                        "arti" => "Lantai",
                        "huruf" => array_unique($this->huruf("بِلَاطٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "بِـسَاطٌ",
                        "kata_arab" => "بِسَاطٌ",
                        "arti" => "Karpet",
                        "huruf" => array_unique($this->huruf("بِسَاطٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "حَـصِـيْـرَةٌ",
                        "kata_arab" => "حَصِيْرَةٌ",
                        "arti" => "Keset",
                        "huruf" => array_unique($this->huruf("حَصِيْرَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "مِـصْـبَاحٌ",
                        "kata_arab" => "مِصْبَاحٌ",
                        "arti" => "Lampu",
                        "huruf" => array_unique($this->huruf("مِصْبَاحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "سِـلْـكٌ",
                        "kata_arab" => "سِلْكٌ",
                        "arti" => "Kabel ",
                        "huruf" => array_unique($this->huruf("سِلْكٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 39",
                        "kata" => "مَـنْـفَـضَّـةُ السَّـجَائِـرِ",
                        "kata_arab" => "مَنْفَضَّةُ السَّجَائِرِ",
                        "arti" => "Asbak",
                        "huruf" => array_unique($this->huruf("مَنْفَضَّةُ السَّجَائِرِ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "تَـقْـوِيْـمٌ",
                        "kata_arab" => "تَقْوِيْمٌ",
                        "arti" => "Kalender",
                        "huruf" => array_unique($this->huruf("تَقْوِيْمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "ثَـلَّاجَـةٌ",
                        "kata_arab" => "ثَلَّاجَةٌ",
                        "arti" => "Kulkas",
                        "huruf" => array_unique($this->huruf("ثَلَّاجَةٌ", "لَّا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "سُـلَّـمٌ",
                        "kata_arab" => "سُلَّمٌ",
                        "arti" => "Tangga",
                        "huruf" => array_unique($this->huruf("سُلَّمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "شَـمْـعٌ",
                        "kata_arab" => "شَمْعٌ",
                        "arti" => "Lilin",
                        "huruf" => array_unique($this->huruf("شَمْعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "مِـفْـتَاحٌ",
                        "kata_arab" => "مِفْتَاحٌ",
                        "arti" => "Kunci",
                        "huruf" => array_unique($this->huruf("مِفْتَاحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "قُـفْـلٌ",
                        "kata_arab" => "قُفْلٌ",
                        "arti" => "Gembok",
                        "huruf" => array_unique($this->huruf("قُفْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "تِـلْـفَازٌ",
                        "kata_arab" => "تِلْفَازٌ",
                        "arti" => "Televisi",
                        "huruf" => array_unique($this->huruf("تِلْفَازٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 40",
                        "kata" => "بَـوَّابَـةٌ",
                        "kata_arab" => "بَوَّابَةٌ",
                        "arti" => "Gerbang",
                        "huruf" => array_unique($this->huruf("بَوَّابَةٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 41",
                        "kata" => "سَـقْـفٌ",
                        "kata_arab" => "سَقْفٌ",
                        "arti" => "Atap",
                        "huruf" => array_unique($this->huruf("سَقْفٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 41",
                        "kata" => "مِـكْـوَاةٌ",
                        "kata_arab" => "مِكْوَاةٌ",
                        "arti" => "Setrika",
                        "huruf" => array_unique($this->huruf("مِكْوَاةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 41",
                        "kata" => "خُـوْذَةٌ",
                        "kata_arab" => "خُوْذَةٌ",
                        "arti" => "Helm",
                        "huruf" => array_unique($this->huruf("خُوْذَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 41",
                        "kata" => "عُـلْـبَـةٌ",
                        "kata_arab" => "عُلْبَةٌ",
                        "arti" => "Kardus",
                        "huruf" => array_unique($this->huruf("عُلْبَةٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 41",
                        "kata" => "رَفٌّ",
                        "kata_arab" => "رَفٌّ",
                        "arti" => "Rak",
                        "huruf" => array_unique($this->huruf("رَفٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 41",
                        "kata" => "زُقَاقٌ",
                        "kata_arab" => "زُقَاقٌ",
                        "arti" => "Gang",
                        "huruf" => array_unique($this->huruf("زُقَاقٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "كَـنَـسَ - يَـكْـنُـسُ - كَـنْـسًا",
                        "kata_arab" => "كَنَسَ-يَكْنُسُ-كَنْسًا",
                        "arti" => "Menyapu",
                        "huruf" => array_unique($this->huruf("كَنَسَ-يَكْنُسُ-كَنْسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "نَـظَّـفَ - يُـنَـظِّـفُ - تَـنْـظِـيْـفًا",
                        "kata_arab" => "نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا",
                        "arti" => "Membersihkan",
                        "huruf" => array_unique($this->huruf("نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "وَسَّـخَ - يُـوَسِّـخُ - تَـوْسِـيْـخًا",
                        "kata_arab" => "وَسَّخَ-يُوَسِّخُ-تَوْسِيْخًا",
                        "arti" => "Mengotori",
                        "huruf" => array_unique($this->huruf("وَسَّخَ-يُوَسِّخُ-تَوْسِيْخًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "دَخَّـنَ - يُـدَخِّـنُ - تَـدْخِـيْـنًا",
                        "kata_arab" => "دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا",
                        "arti" => "Merokok",
                        "huruf" => array_unique($this->huruf("دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "جَـلَـسَ - يَـجْـلِـسُ - جُـلُـوْسًا",
                        "kata_arab" => "جَلَسَ-يَجْلِسُ-جُلُوْسًا",
                        "arti" => "Duduk",
                        "huruf" => array_unique($this->huruf("جَلَسَ-يَجْلِسُ-جُلُوْسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "قَـعَـدَ - يَـقْـعُـدُ - قُـعُـودًا",
                        "kata_arab" => "قَعَدَ-يَقْعُدُ-قُعُودًا",
                        "arti" => "Duduk",
                        "huruf" => array_unique($this->huruf("قَعَدَ-يَقْعُدُ-قُعُودًا")),
                        "status" => "off"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "قَامَ - يَـقُـوْمُ - قِـيَامًا",
                        "kata_arab" => "قَامَ-يَقُوْمُ-قِيَامًا",
                        "arti" => "Berdiri",
                        "huruf" => array_unique($this->huruf("قَامَ-يَقُوْمُ-قِيَامًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 42",
                        "kata" => "دَخَـلَ - يَـدْخُـلُ - دُخُـوْلًا",
                        "kata_arab" => "دَخَلَ-يَدْخُلُ-دُخُوْلًا",
                        "arti" => "Masuk",
                        "huruf" => array_unique($this->huruf("دَخَلَ-يَدْخُلُ-دُخُوْلًا")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "خَـرَجَ - يَـخْـرُجُ - خُـرُوْجًا",
                        "kata_arab" => "خَرَجَ-يَخْرُجُ-خُرُوْجًا",
                        "arti" => "Keluar",
                        "huruf" => array_unique($this->huruf("خَرَجَ-يَخْرُجُ-خُرُوْجًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "وَضَـعَ - يَـضَـعُ - وَضْـعًا",
                        "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                        "arti" => "Meletakkan",
                        "huruf" => array_unique($this->huruf("وَضَعَ-يَضَعُ-وَضْعًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "نَـقَـلَ - يَـنْـقُـلُ - نَـقْـلًا",
                        "kata_arab" => "نَقَلَ-يَنْقُلُ-نَقْلًا",
                        "arti" => "Memindahkan",
                        "huruf" => array_unique($this->huruf("نَقَلَ-يَنْقُلُ-نَقْلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "بَـدَّلَ - يُـبَـدِّلُ - تَـبْـدِيْـلًا",
                        "kata_arab" => "بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا",
                        "arti" => "Mengganti",
                        "huruf" => array_unique($this->huruf("بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "أَشْـعَـلَ - يُـشْـعِـلُ - إِشْـعَالًا",
                        "kata_arab" => "أَشْعَلَ-يُشْعِلُ-إِشْعَالًا",
                        "arti" => "Menyalakan",
                        "huruf" => array_unique($this->huruf("أَشْعَلَ-يُشْعِلُ-إِشْعَالًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "اِنْـشَـعَـلَ - يَـنْـشَـعِـلُ - اِنْـشِـعَالًا",
                        "kata_arab" => "اِنْشَعَلَ-يَنْشَعِلُ-اِنْشِعَالًا",
                        "arti" => "Menyala",
                        "huruf" => array_unique($this->huruf("اِنْشَعَلَ-يَنْشَعِلُ-اِنْشِعَالًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "أَطْـفَأَ - يُـطْـفِـئُ - إِطْـفَاءً",
                        "kata_arab" => "أَطْفَأَ-يُطْفِئُ-إِطْفَاءً",
                        "arti" => "Memadamkan",
                        "huruf" => array_unique($this->huruf("أَطْفَأَ-يُطْفِئُ-إِطْفَاءً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 43",
                        "kata" => "اِنْـطَـفَأَ - يَـنْـطَـفِـئُ - اِنْـطِـفَاءً",
                        "kata_arab" => "اِنْطَفَأَ-يَنْطَفِئُ-اِنْطِفَاءً",
                        "arti" => "Padam",
                        "huruf" => array_unique($this->huruf("اِنْطَفَأَ-يَنْطَفِئُ-اِنْطِفَاءً")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "صَـعِـدَ - يَـصْـعَـدُ - صُـعُـوْدًا",
                        "kata_arab" => "صَعِدَ-يَصْعَدُ-صُعُوْدًا",
                        "arti" => "Naik",
                        "huruf" => array_unique($this->huruf("صَعِدَ-يَصْعَدُ-صُعُوْدًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "نَـزَلَ - يَـنْـزِلُ - نُـزُوْلًا",
                        "kata_arab" => "نَزَلَ-يَنْزِلُ-نُزُوْلًا",
                        "arti" => "Turun",
                        "huruf" => array_unique($this->huruf("نَزَلَ-يَنْزِلُ-نُزُوْلًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "كَـنَـسَ - يَـكْـنُـسُ - كَـنْـسًا",
                        "kata_arab" => "كَنَسَ-يَكْنُسُ-كَنْسًا",
                        "arti" => "Menyapu",
                        "huruf" => array_unique($this->huruf("كَنَسَ-يَكْنُسُ-كَنْسًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "شَاهَـدَ - يُـشَاهِـدُ - مُـشَاهَـدَةً",
                        "kata_arab" => "شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً",
                        "arti" => "Menonton",
                        "huruf" => array_unique($this->huruf("شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "هَـجَـرَ - يَـهْـجُـرُ – هَـجْـرًا",
                        "kata_arab" => "هَجَرَ-يَهْجُرُ-هَجْرًا",
                        "arti" => "Berpindah",
                        "huruf" => array_unique($this->huruf("هَجَرَ-يَهْجُرُ-هَجْرًا")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "فَـضَّـلَ - يُـفَـضِّـلُ - تَـفْـضِـيْـلاً",
                        "kata_arab" => "فَضَّلَ-يُفَضِّلُ-تَفْضِيْلاً",
                        "arti" => "Mengutamakan",
                        "huruf" => array_unique($this->huruf("فَضَّلَ-يُفَضِّلُ-تَفْضِيْلاً")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 44",
                        "kata" => "وَاجَـهَ - يُـوَاجِـهُ - مُـوَاجَـهَـةً",
                        "kata_arab" => "وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً",
                        "arti" => "Menghadapi",
                        "huruf" => array_unique($this->huruf("وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 45",
                        "kata" => "أَسْـوَدُ",
                        "kata_arab" => "أَسْوَدُ",
                        "arti" => "Hitam",
                        "huruf" => array_unique($this->huruf("أَسْوَدُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 45",
                        "kata" => "أَبْـيَـضُ",
                        "kata_arab" => "أَبْيَضُ",
                        "arti" => "Putih",
                        "huruf" => array_unique($this->huruf("أَبْيَضُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 45",
                        "kata" => "أَحْـمَـرُ",
                        "kata_arab" => "أَحْمَرُ",
                        "arti" => "Merah",
                        "huruf" => array_unique($this->huruf("أَحْمَرُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 45",
                        "kata" => "وَرْدِيٌّ",
                        "kata_arab" => "وَرْدِيٌّ",
                        "arti" => "Pink",
                        "huruf" => array_unique($this->huruf("وَرْدِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 45",
                        "kata" => "أَصْـفَـرُ",
                        "kata_arab" => "أَصْفَرُ",
                        "arti" => "Kuning",
                        "huruf" => array_unique($this->huruf("أَصْفَرُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 45",
                        "kata" => "أَزْرَقُ",
                        "kata_arab" => "أَزْرَقُ",
                        "arti" => "Biru",
                        "huruf" => array_unique($this->huruf("أَزْرَقُ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 46",
                        "kata" => "أَخْـضَـرُ",
                        "kata_arab" => "أَخْضَرُ",
                        "arti" => "Hijau",
                        "huruf" => array_unique($this->huruf("أَخْضَرُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 46",
                        "kata" => "أَسْـمَـرُ",
                        "kata_arab" => "أَسْمَرُ",
                        "arti" => "Coklat",
                        "huruf" => array_unique($this->huruf("أَسْمَرُ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 46",
                        "kata" => "رَمَادِى",
                        "kata_arab" => "رَمَادِى",
                        "arti" => "Abu-abu",
                        "huruf" => array_unique($this->huruf("رَمَادِى")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 46",
                        "kata" => "بُـرْتُـقَالِـيٌّ",
                        "kata_arab" => "بُرْتُقَالِيٌّ",
                        "arti" => "Orange",
                        "huruf" => array_unique($this->huruf("بُرْتُقَالِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 46",
                        "kata" => "بَـنَـفْـسَـجِـيُّ",
                        "kata_arab" => "بَنَفْسَجِيُّ",
                        "arti" => "Ungu",
                        "huruf" => array_unique($this->huruf("بَنَفْسَجِيُّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 46",
                        "kata" => "ذَهَـبِـيٌّ",
                        "kata_arab" => "ذَهَبِيٌّ",
                        "arti" => "Keemasan",
                        "huruf" => array_unique($this->huruf("ذَهَبِيٌّ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "كَـبِـيْـرٌ",
                        "kata_arab" => "كَبِيْرٌ",
                        "arti" => "Besar",
                        "huruf" => array_unique($this->huruf("كَبِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "صَـغِـيْـرٌ",
                        "kata_arab" => "صَغِيْرٌ",
                        "arti" => "Kecil",
                        "huruf" => array_unique($this->huruf("صَغِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "طَـوِيْـلٌ",
                        "kata_arab" => "طَوِيْلٌ",
                        "arti" => "Panjang",
                        "huruf" => array_unique($this->huruf("طَوِيْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "قَـصِـيْـرٌ",
                        "kata_arab" => "قَصِيْرٌ",
                        "arti" => "Pendek",
                        "huruf" => array_unique($this->huruf("قَصِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "وَاسِـعٌ",
                        "kata_arab" => "وَاسِعٌ",
                        "arti" => "Luas",
                        "huruf" => array_unique($this->huruf("وَاسِعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "ضَـيِّـقٌ",
                        "kata_arab" => "ضَيِّقٌ",
                        "arti" => "Sempit",
                        "huruf" => array_unique($this->huruf("ضَيِّقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "عَـمِـيْـقٌ",
                        "kata_arab" => "عَمِيْقٌ",
                        "arti" => "Dalam",
                        "huruf" => array_unique($this->huruf("عَمِيْقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "ضَـحْـلٌ",
                        "kata_arab" => "ضَحْلٌ",
                        "arti" => "Dangkal",
                        "huruf" => array_unique($this->huruf("ضَحْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "كَـثِـيْـرٌ",
                        "kata_arab" => "كَثِيْرٌ",
                        "arti" => "Banyak",
                        "huruf" => array_unique($this->huruf("كَثِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "قَـلِـيْـلٌ",
                        "kata_arab" => "قَلِيْلٌ",
                        "arti" => "Sedikit",
                        "huruf" => array_unique($this->huruf("قَلِيْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 47",
                        "kata" => "نَـظِـيْـفٌ",
                        "kata_arab" => "نَظِيْفٌ",
                        "arti" => "Bersih",
                        "huruf" => array_unique($this->huruf("نَظِيْفٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "وَسِـخٌ",
                        "kata_arab" => "وَسِخٌ",
                        "arti" => "Kotor",
                        "huruf" => array_unique($this->huruf("وَسِخٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "رَخِـيْـصٌ",
                        "kata_arab" => "رَخِيْصٌ",
                        "arti" => "Murah",
                        "huruf" => array_unique($this->huruf("رَخِيْصٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "غَالٍ",
                        "kata_arab" => "غَالٍ",
                        "arti" => "Mahal",
                        "huruf" => array_unique($this->huruf("غَالٍ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "غَـلِـيْـظٌ",
                        "kata_arab" => "غَلِيْظٌ",
                        "arti" => "Tebal",
                        "huruf" => array_unique($this->huruf("غَلِيْظٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "رَقِـيْـقٌ",
                        "kata_arab" => "رَقِيْقٌ",
                        "arti" => "Tipis",
                        "huruf" => array_unique($this->huruf("رَقِيْقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "رَطْـبٌ",
                        "kata_arab" => "رَطْبٌ",
                        "arti" => "Basah",
                        "huruf" => array_unique($this->huruf("رَطْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "يَابِـسٌ",
                        "kata_arab" => "يَابِسٌ",
                        "arti" => "Kering",
                        "huruf" => array_unique($this->huruf("يَابِسٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "جَامِـدٌ",
                        "kata_arab" => "جَامِدٌ",
                        "arti" => "Keras",
                        "huruf" => array_unique($this->huruf("جَامِدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "مَائِـعٌ",
                        "kata_arab" => "مَائِعٌ",
                        "arti" => "Cair",
                        "huruf" => array_unique($this->huruf("مَائِعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 48",
                        "kata" => "نَاعِـمٌ",
                        "kata_arab" => "نَاعِمٌ",
                        "arti" => "Halus",
                        "huruf" => array_unique($this->huruf("نَاعِمٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "خَـشِـنٌ",
                        "kata_arab" => "خَشِنٌ",
                        "arti" => "Kasar",
                        "huruf" => array_unique($this->huruf("خَشِنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "قَـرِيْـبٌ",
                        "kata_arab" => "قَرِيْبٌ",
                        "arti" => "Dekat",
                        "huruf" => array_unique($this->huruf("قَرِيْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "بَـعِـيْـدٌ",
                        "kata_arab" => "بَعِيْدٌ",
                        "arti" => "Jauh",
                        "huruf" => array_unique($this->huruf("بَعِيْدٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "صَافٍ",
                        "kata_arab" => "صَافٍ",
                        "arti" => "Jernih",
                        "huruf" => array_unique($this->huruf("صَافٍ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "كَـدِرٌ",
                        "kata_arab" => "كَدِرٌ",
                        "arti" => "Keruh",
                        "huruf" => array_unique($this->huruf("كَدِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "سَـرِيْـعٌ",
                        "kata_arab" => "سَرِيْعٌ",
                        "arti" => "Cepat",
                        "huruf" => array_unique($this->huruf("سَرِيْعٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "بَـطِـيْـئٌ",
                        "kata_arab" => "بَطِيْئٌ",
                        "arti" => "Lambat",
                        "huruf" => array_unique($this->huruf("بَطِيْئٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "صَـعْـبٌ",
                        "kata_arab" => "صَعْبٌ",
                        "arti" => "Sulit",
                        "huruf" => array_unique($this->huruf("صَعْبٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "سَـهْـلٌ",
                        "kata_arab" => "سَهْلٌ",
                        "arti" => "Mudah",
                        "huruf" => array_unique($this->huruf("سَهْلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 49",
                        "kata" => "ثَـقِـيْـلٌ",
                        "kata_arab" => "ثَقِيْلٌ",
                        "arti" => "Berat",
                        "huruf" => array_unique($this->huruf("ثَقِيْلٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "خَـفِـيْـفٌ",
                        "kata_arab" => "خَفِيْفٌ",
                        "arti" => "Ringan",
                        "huruf" => array_unique($this->huruf("خَفِيْفٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "كَامِـلٌ",
                        "kata_arab" => "كَامِلٌ",
                        "arti" => "Lengkap",
                        "huruf" => array_unique($this->huruf("كَامِلٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "نَاقِـصٌ",
                        "kata_arab" => "نَاقِصٌ",
                        "arti" => "Kurang",
                        "huruf" => array_unique($this->huruf("نَاقِصٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "مُـنِـيْـرٌ",
                        "kata_arab" => "مُنِيْرٌ",
                        "arti" => "Terang",
                        "huruf" => array_unique($this->huruf("مُنِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "مُـظْـلِـمٌ",
                        "kata_arab" => "مُظْلِمٌ",
                        "arti" => "Gelap",
                        "huruf" => array_unique($this->huruf("مُظْلِمٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "آمِـنٌ",
                        "kata_arab" => "آمِنٌ",
                        "arti" => "Aman",
                        "huruf" => array_unique($this->huruf("آمِنٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "خَـطِـيْـرٌ",
                        "kata_arab" => "خَطِيْرٌ",
                        "arti" => "Bahaya",
                        "huruf" => array_unique($this->huruf("خَطِيْرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "لَائِقٌ",
                        "kata_arab" => "لَائِقٌ",
                        "arti" => "Cocok",
                        "huruf" => array_unique($this->huruf("لَائِقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "حَـيٌّ",
                        "kata_arab" => "حَيٌّ",
                        "arti" => "Hidup",
                        "huruf" => array_unique($this->huruf("حَيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 50",
                        "kata" => "مَـيِّـتٌ",
                        "kata_arab" => "مَيِّتٌ",
                        "arti" => "Mati",
                        "huruf" => array_unique($this->huruf("مَيِّتٌ")),
                        "status" => "on"
                    ],

                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "مَـفْـتُـوْحٌ",
                        "kata_arab" => "مَفْتُوْحٌ",
                        "arti" => "Terbuka",
                        "huruf" => array_unique($this->huruf("مَفْتُوْحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "مُـغْـلَـقٌ",
                        "kata_arab" => "مُغْلَقٌ",
                        "arti" => "Tertutup",
                        "huruf" => array_unique($this->huruf("مُغْلَقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "أَصْـلِـيٌّ",
                        "kata_arab" => "أَصْلِيٌّ",
                        "arti" => "Asli",
                        "huruf" => array_unique($this->huruf("أَصْلِيٌّ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "زَائِـفٌ",
                        "kata_arab" => "زَائِفٌ",
                        "arti" => "Palsu",
                        "huruf" => array_unique($this->huruf("زَائِفٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "مُـقْـلِـقٌ",
                        "kata_arab" => "مُقْلِقٌ",
                        "arti" => "Khawatir",
                        "huruf" => array_unique($this->huruf("مُقْلِقٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "عَامِـرٌ",
                        "kata_arab" => "عَامِرٌ",
                        "arti" => "Ramai",
                        "huruf" => array_unique($this->huruf("عَامِرٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "هَادِئٌ",
                        "kata_arab" => "هَادِئٌ",
                        "arti" => "Tenang",
                        "huruf" => array_unique($this->huruf("هَادِئٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "مُـسْـتَـرِيْـحٌ",
                        "kata_arab" => "مُسْتَرِيْحٌ",
                        "arti" => "Santai",
                        "huruf" => array_unique($this->huruf("مُسْتَرِيْحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "صَـحِـيْـحٌ",
                        "kata_arab" => "صَحِيْحٌ",
                        "arti" => "Benar",
                        "huruf" => array_unique($this->huruf("صَحِيْحٌ")),
                        "status" => "on"
                    ],
                    [
                        "id" => "",
                        "tema" => "Mufrodat 51",
                        "kata" => "خَـطَاءٌ",
                        "kata_arab" => "خَطَاءٌ",
                        "arti" => "Salah",
                        "huruf" => array_unique($this->huruf("خَطَاءٌ")),
                        "status" => "on"
                    ],

                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "ثَـوْبٌ",
                        "kata_arab" => "ثَوْبٌ",
                        "arti" => "Baju",
                        "huruf" => array_unique($this->huruf("ثَوْبٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "قَـمِـيْـصٌ",
                        "kata_arab" => "قَمِيْصٌ",
                        "arti" => "Kemeja",
                        "huruf" => array_unique($this->huruf("قَمِيْصٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "بَـنْـطَـلُـوْنٌ",
                        "kata_arab" => "بَنْطَلُوْنٌ",
                        "arti" => "Celana panjang",
                        "huruf" => array_unique($this->huruf("بَنْطَلُوْنٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "سِـرْوَالٌ",
                        "kata_arab" => "سِرْوَالٌ",
                        "arti" => "Celana pendek",
                        "huruf" => array_unique($this->huruf("سِرْوَالٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "خِـمَارٌ",
                        "kata_arab" => "خِمَارٌ",
                        "arti" => "Kerudung",
                        "huruf" => array_unique($this->huruf("خِمَارٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "قَـلَـنْـسُـوَةٌ",
                        "kata_arab" => "قَلَنْسُوَةٌ",
                        "arti" => "Peci",
                        "huruf" => array_unique($this->huruf("قَلَنْسُوَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "فَـنِـيْـلَـةٌ",
                        "kata_arab" => "فَنِيْلَةٌ",
                        "arti" => "Kaos dalam",
                        "huruf" => array_unique($this->huruf("فَنِيْلَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "حَـرِيْـرٌ",
                        "kata_arab" => "حَرِيْرٌ",
                        "arti" => "Sutera",
                        "huruf" => array_unique($this->huruf("حَرِيْرٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "جَـوْرَبٌ",
                        "kata_arab" => "جَوْرَبٌ",
                        "arti" => "Kaos kaki",
                        "huruf" => array_unique($this->huruf("جَوْرَبٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "تَـنُّـوْرَةٌ",
                        "kata_arab" => "تَنُّوْرَةٌ",
                        "arti" => "Rok",
                        "huruf" => array_unique($this->huruf("تَنُّوْرَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 52",
                        "kata" => "لِـفَاعٌ",
                        "kata_arab" => "لِفَاعٌ",
                        "arti" => "Selendang",
                        "huruf" => array_unique($this->huruf("لِفَاعٌ")),
                        "status" => "on"
                    ],
                    
                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "حَـمَّالَـةُ الـصَّـدْرِ",
                        "kata_arab" => "حَمَّالَةُ الصَّدْرِ",
                        "arti" => "BH",
                        "huruf" => array_unique($this->huruf("حَمَّالَةُ الصَّدْرِ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "عِـمَامَـةٌ",
                        "kata_arab" => "عِمَامَةٌ",
                        "arti" => "Serban",
                        "huruf" => array_unique($this->huruf("عِمَامَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "إِزَارٌ",
                        "kata_arab" => "إِزَارٌ",
                        "arti" => "Sarung",
                        "huruf" => array_unique($this->huruf("إِزَارٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "جَاكِـيْـتٌ",
                        "kata_arab" => "جَاكِيْتٌ",
                        "arti" => "Jaket",
                        "huruf" => array_unique($this->huruf("جَاكِيْتٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "كِـسَاءٌ",
                        "kata_arab" => "كِسَاءٌ",
                        "arti" => "Jas",
                        "huruf" => array_unique($this->huruf("كِسَاءٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "مِـعْـطَـفٌ",
                        "kata_arab" => "مِعْطَفٌ",
                        "arti" => "Rompi",
                        "huruf" => array_unique($this->huruf("مِعْطَفٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "قُـبَّـعَـةٌ",
                        "kata_arab" => "قُبَّعَةٌ",
                        "arti" => "Topi",
                        "huruf" => array_unique($this->huruf("قُبَّعَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "مِـظَـلَّـةٌ",
                        "kata_arab" => "مِظَلَّةٌ",
                        "arti" => "Payung",
                        "huruf" => array_unique($this->huruf("مِظَلَّةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "سِـرْوَالٌ دَاخِـلِـيٌّ",
                        "kata_arab" => "سِرْوَالٌ دَاخِلِيٌّ",
                        "arti" => "Celana dalam",
                        "huruf" => array_unique($this->huruf("سِرْوَالٌ دَاخِلِيٌّ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 53",
                        "kata" => "نَـعْـلٌ",
                        "kata_arab" => "نَعْلٌ",
                        "arti" => "Sandal",
                        "huruf" => array_unique($this->huruf("نَعْلٌ")),
                        "status" => "on"
                    ],
                    
                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "حِـذَاءٌ",
                        "kata_arab" => "حِذَاءٌ",
                        "arti" => "Sepatu",
                        "huruf" => array_unique($this->huruf("حِذَاءٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "لِـبَاسٌ رَسْـمِـيٌّ",
                        "kata_arab" => "لِبَاسٌ رَسْمِيٌّ",
                        "arti" => "Seragam",
                        "huruf" => array_unique($this->huruf("لِبَاسٌ رَسْمِيٌّ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "مِـنْـشَـفَـةٌ",
                        "kata_arab" => "مِنْشَفَةٌ",
                        "arti" => "Handuk",
                        "huruf" => array_unique($this->huruf("مِنْشَفَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "حِـزَامٌ",
                        "kata_arab" => "حِزَامٌ",
                        "arti" => "Sabuk",
                        "huruf" => array_unique($this->huruf("حِزَامٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "زِرٌّ",
                        "kata_arab" => "زِرٌّ",
                        "arti" => "Kancing",
                        "huruf" => array_unique($this->huruf("زِرٌّ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "جَـيْـبٌ",
                        "kata_arab" => "جَيْبٌ",
                        "arti" => "Saku",
                        "huruf" => array_unique($this->huruf("جَيْبٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "خَـيْـطٌ",
                        "kata_arab" => "خَيْطٌ",
                        "arti" => "Benang",
                        "huruf" => array_unique($this->huruf("خَيْطٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "إِبْـرَةٌ",
                        "kata_arab" => "إِبْرَةٌ",
                        "arti" => "Jarum",
                        "huruf" => array_unique($this->huruf("إِبْرَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "يَاقَـةٌ",
                        "kata_arab" => "يَاقَةٌ",
                        "arti" => "Kerah",
                        "huruf" => array_unique($this->huruf("يَاقَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 54",
                        "kata" => "رِبَاطٌ",
                        "kata_arab" => "رِبَاطٌ",
                        "arti" => "Dasi",
                        "huruf" => array_unique($this->huruf("رِبَاطٌ")),
                        "status" => "on"
                    ],
                    
                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "سِـوَارٌ",
                        "kata_arab" => "سِوَارٌ",
                        "arti" => "Gelang",
                        "huruf" => array_unique($this->huruf("سِوَارٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "قِـلَادَةٌ",
                        "kata_arab" => "قِلَادَةٌ",
                        "arti" => "Kalung",
                        "huruf" => array_unique($this->huruf("قِلَادَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "حَـلْـقَـةٌ",
                        "kata_arab" => "حَلْقَةٌ",
                        "arti" => "Anting-anting",
                        "huruf" => array_unique($this->huruf("حَلْقَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "خَاتَـمٌ",
                        "kata_arab" => "خَاتَمٌ",
                        "arti" => "Cincin",
                        "huruf" => array_unique($this->huruf("خَاتَمٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "ذَهَـبٌ",
                        "kata_arab" => "ذَهَبٌ",
                        "arti" => "Emas",
                        "huruf" => array_unique($this->huruf("ذَهَبٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "فِـضَّـةٌ",
                        "kata_arab" => "فِضَّةٌ",
                        "arti" => "Perak",
                        "huruf" => array_unique($this->huruf("فِضَّةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "شِـبْـهَانٌ",
                        "kata_arab" => "شِبْهَانٌ",
                        "arti" => "Kuningan",
                        "huruf" => array_unique($this->huruf("شِبْهَانٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "مَاسَـةٌ",
                        "kata_arab" => "مَاسَةٌ",
                        "arti" => "Berlian",
                        "huruf" => array_unique($this->huruf("مَاسَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "أَلْـمَاسٌ",
                        "kata_arab" => "أَلْمَاسٌ",
                        "arti" => "Intan",
                        "huruf" => array_unique($this->huruf("أَلْمَاسٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 55",
                        "kata" => "لُـؤْلُـؤٌ",
                        "kata_arab" => "لُؤْلُؤٌ",
                        "arti" => "Mutiara",
                        "huruf" => array_unique($this->huruf("لُؤْلُؤٌ")),
                        "status" => "on"
                    ],
                    
                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 56",
                        "kata" => "لَـبِـسَ - يَـلْـبَـسُ - لُـبْـسًا",
                        "kata_arab" => "لَبِسَ-يَلْبَسُ-لُبْسًا",
                        "arti" => "Memakai",
                        "huruf" => array_unique($this->huruf("لَبِسَ-يَلْبَسُ-لُبْسًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 56",
                        "kata" => "اِسْـتَـعْـمَـلَ - يَـسْـتَـعْـمِـلُ - اِسْـتِـعْـمَالًا",
                        "kata_arab" => "اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا",
                        "arti" => "Menggunakan",
                        "huruf" => array_unique($this->huruf("اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 56",
                        "kata" => "طَـوَى - يَـطْـوِي - طَـيًّا",
                        "kata_arab" => "طَوَى-يَطْوِي-طَيًّا",
                        "arti" => "Melipat",
                        "huruf" => array_unique($this->huruf("طَوَى-يَطْوِي-طَيًّا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 56",
                        "kata" => "كَـوَى - يَـكْـوِي - كَـوًّا",
                        "kata_arab" => "كَوَى-يَكْوِي-كَوًّا",
                        "arti" => "Menyetrika",
                        "huruf" => array_unique($this->huruf("كَوَى-يَكْوِي-كَوًّا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 56",
                        "kata" => "رَتَّـبَ - يُـرَتِّـبُ - تَـرْتِـيْـبًا",
                        "kata_arab" => "رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا",
                        "arti" => "Merapikan",
                        "huruf" => array_unique($this->huruf("رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 56",
                        "kata" => "طَـوَّلَ - يُـطَـوِّلُ - تَـطْـوِيْـلًا",
                        "kata_arab" => "طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا",
                        "arti" => "Memanjangkan",
                        "huruf" => array_unique($this->huruf("طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا")),
                        "status" => "on"
                    ],

                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 57",
                        "kata" => "قَـصَّـرَ - يُـقَـصِّـرُ - تَـقْـصِـيْـرًا",
                        "kata_arab" => "قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا",
                        "arti" => "Memendekkan",
                        "huruf" => array_unique($this->huruf("قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 57",
                        "kata" => "كَـبَّـرَ - يُـكَـبِّـرُ - تَـكْـبِـيْـرًا",
                        "kata_arab" => "كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا",
                        "arti" => "Membesarkan",
                        "huruf" => array_unique($this->huruf("كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 57",
                        "kata" => "صَـغَّـرَ - يُـصَـغِّـرُ - تَـصْـغِـيْـرًا",
                        "kata_arab" => "صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا",
                        "arti" => "Mengecilkan",
                        "huruf" => array_unique($this->huruf("صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 57",
                        "kata" => "خَاطَ - يَـخِـيْـطُ - خَـيْـطًا",
                        "kata_arab" => "خَاطَ-يَخِيْطُ-خَيْطًا",
                        "arti" => "Menjahit",
                        "huruf" => array_unique($this->huruf("خَاطَ-يَخِيْطُ-خَيْطًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 57",
                        "kata" => "رَقَـعَ - يَـرْقَـعُ - رَقْـعًا",
                        "kata_arab" => "رَقَعَ-يَرْقَعُ-رَقْعًا",
                        "arti" => "Menambal",
                        "huruf" => array_unique($this->huruf("رَقَعَ-يَرْقَعُ-رَقْعًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 57",
                        "kata" => "نَـسَـجَ - يَـنْـسُـجُ - نَـسْـجًا",
                        "kata_arab" => "نَسَجَ-يَنْسُجُ-نَسْجًا",
                        "arti" => "Menenun",
                        "huruf" => array_unique($this->huruf("نَسَجَ-يَنْسُجُ-نَسْجًا")),
                        "status" => "on"
                    ],                    

                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "سَـرِيْـرٌ",
                        "kata_arab" => "سَرِيْرٌ",
                        "arti" => "Ranjang",
                        "huruf" => array_unique($this->huruf("سَرِيْرٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "مُـلَاءَةُ الـسَّـرِيْـرِ",
                        "kata_arab" => "مُلَاءَةُ السَّرِيْرِ",
                        "arti" => "Sprei",
                        "huruf" => array_unique($this->huruf("مُلَاءَةُ السَّرِيْرِ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "فِـرَاشٌ",
                        "kata_arab" => "فِرَاشٌ",
                        "arti" => "Kasur",
                        "huruf" => array_unique($this->huruf("فِرَاشٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "وِسَادَةٌ",
                        "kata_arab" => "وِسَادَةٌ",
                        "arti" => "Bantal",
                        "huruf" => array_unique($this->huruf("وِسَادَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "وِسَادَةٌ مُـسْـتَـطِـيْـلَـةٌ",
                        "kata_arab" => "وِسَادَةٌ مُسْتَطِيْلَةٌ",
                        "arti" => "Guling",
                        "huruf" => array_unique($this->huruf("وِسَادَةٌ مُسْتَطِيْلَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "لِـحَافٌ",
                        "kata_arab" => "لِحَافٌ",
                        "arti" => "Selimut",
                        "huruf" => array_unique($this->huruf("لِحَافٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "حَـصِـيْـرٌ",
                        "kata_arab" => "حَصِيْرٌ",
                        "arti" => "Tikar",
                        "huruf" => array_unique($this->huruf("حَصِيْرٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 58",
                        "kata" => "سَـجَّادَةٌ",
                        "kata_arab" => "سَجَّادَةٌ",
                        "arti" => "Sajadah",
                        "huruf" => array_unique($this->huruf("سَجَّادَةٌ")),
                        "status" => "on"
                    ],

                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "مِـرْآةٌ",
                        "kata_arab" => "مِرْآةٌ",
                        "arti" => "Kaca cermin",
                        "huruf" => array_unique($this->huruf("مِرْآةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "مُـشْـطٌ",
                        "kata_arab" => "مُشْطٌ",
                        "arti" => "Sisir",
                        "huruf" => array_unique($this->huruf("مُشْطٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "مَـسْـحُـوْقٌ",
                        "kata_arab" => "مَسْحُوْقٌ",
                        "arti" => "Bedak",
                        "huruf" => array_unique($this->huruf("مَسْحُوْقٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "الْـقُـطْـنُ",
                        "kata_arab" => "الْقُطْنُ",
                        "arti" => "Kapas",
                        "huruf" => array_unique($this->huruf("الْقُطْنُ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "قَـطِـيْـفَـةٌ",
                        "kata_arab" => "قَطِيْفَةٌ",
                        "arti" => "Permadani",
                        "huruf" => array_unique($this->huruf("قَطِيْفَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "نَامُـوْسِـيَّـةٌ",
                        "kata_arab" => "نَامُوْسِيَّةٌ",
                        "arti" => "Kelambu",
                        "huruf" => array_unique($this->huruf("نَامُوْسِيَّةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "الـسَّاعَـةُ الْـمُـنَـبِّـهَـةُ",
                        "kata_arab" => "السَّاعَةُ الْمُنَبِّهَةُ",
                        "arti" => "Jam Beker",
                        "huruf" => array_unique($this->huruf("السَّاعَةُ الْمُنَبِّهَةُ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 59",
                        "kata" => "جَـوَّالٌ",
                        "kata_arab" => "جَوَّالٌ",
                        "arti" => "HP",
                        "huruf" => array_unique($this->huruf("جَوَّالٌ")),
                        "status" => "on"
                    ],

                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "نَامَ - يَـنَامُ – نَـوْمًا",
                        "kata_arab" => "نَامَ-يَنَامُ-نَوْمًا",
                        "arti" => "Tidur",
                        "huruf" => array_unique($this->huruf("نَامَ-يَنَامُ-نَوْمًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "اِسْـتَـلْـقَـى - يَـسْـتَـلْـقِـى - اِسْـتِـلْـقَاءً",
                        "kata_arab" => "اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً",
                        "arti" => "Terlentang",
                        "huruf" => array_unique($this->huruf("اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "خَـرْخَـرَ - يُـخَـرْخِـرُ - خَـرْخَـرَةً",
                        "kata_arab" => "خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً",
                        "arti" => "Mendengkur",
                        "huruf" => array_unique($this->huruf("خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "هَـذَا - يَـهْـذِى – هَـذْيًا",
                        "kata_arab" => "هَذَا-يَهْذِى-هَذْيًا",
                        "arti" => "Mengigau",
                        "huruf" => array_unique($this->huruf("هَذَا-يَهْذِى-هَذْيًا")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "سَالَ - يَـسِـيْـلُ - سَـيْـلًا لُـعَابُـهُ",
                        "kata_arab" => "سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ",
                        "arti" => "Mengiler",
                        "huruf" => array_unique($this->huruf("سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "قَـرْفَـصَ - يُـقَـرْفِـصُ – قَـرْفَـصَـةً",
                        "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً",
                        "arti" => "Jongkok",
                        "huruf" => array_unique($this->huruf("قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 60",
                        "kata" => "تَـرَبَّـعَ - يَـتَـرَبَّـعُ – تَـرَبُّـعًا",
                        "kata_arab" => "تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا",
                        "arti" => "Bersila",
                        "huruf" => array_unique($this->huruf("تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا")),
                        "status" => "on"
                    ],

                                        
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "مَـوْقِـدٌ",
                        "kata_arab" => "مَوْقِدٌ",
                        "arti" => "Kompor",
                        "huruf" => array_unique($this->huruf("مَوْقِدٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "قِـدْرٌ",
                        "kata_arab" => "قِدْرٌ",
                        "arti" => "Panci",
                        "huruf" => array_unique($this->huruf("قِدْرٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "مِـقْـلاَةٌ",
                        "kata_arab" => "مِقْلاَةٌ",
                        "arti" => "Wajan",
                        "huruf" => array_unique($this->huruf("مِقْلاَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "مَائِـدَةٌ",
                        "kata_arab" => "مَائِدَةٌ",
                        "arti" => "Meja Makan",
                        "huruf" => array_unique($this->huruf("مَائِدَةٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "مِـقْـلَـبٌ",
                        "kata_arab" => "مِقْلَبٌ",
                        "arti" => "Spatula",
                        "huruf" => array_unique($this->huruf("مِقْلَبٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "إِبْـرِيْـقٌ",
                        "kata_arab" => "إِبْرِيْقٌ",
                        "arti" => "Teko",
                        "huruf" => array_unique($this->huruf("إِبْرِيْقٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "كُـوْبٌ",
                        "kata_arab" => "كُوْبٌ",
                        "arti" => "Gelas",
                        "huruf" => array_unique($this->huruf("كُوْبٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "صَـحْـنٌ",
                        "kata_arab" => "صَحْنٌ",
                        "arti" => "Piring",
                        "huruf" => array_unique($this->huruf("صَحْنٌ")),
                        "status" => "on"
                    ],                    
                    [
                        "id" => "",
                        "tema" => "Mufrodat 61",
                        "kata" => "إِنَاءٌ",
                        "kata_arab" => "إِنَاءٌ",
                        "arti" => "Mangkok",
                        "huruf" => array_unique($this->huruf("إِنَاءٌ")),
                        "status" => "on"
                    ],

                    $this->data_kata("", "Mufrodat 62", "طَـبَـقٌ", "طَبَقٌ", "Nampan"),
                    $this->data_kata("", "Mufrodat 62", "فِـنْـجَانٌ", "فِنْجَانٌ", "Cangkir"),
                    $this->data_kata("", "Mufrodat 62", "مِـلْـعَـقَـةٌ", "مِلْعَقَةٌ", "Sendok"),
                    $this->data_kata("", "Mufrodat 62", "كُـوْزٌ", "كُوْزٌ", "Kendi"),
                    $this->data_kata("", "Mufrodat 62", "قَارُوْرَةٌ", "قَارُوْرَةٌ", "Botol"),
                    $this->data_kata("", "Mufrodat 62", "مِـلْـعَـقَـةُ الـشَّايِ", "مِلْعَقَةُ الشَّايِ", "Sendok Teh"),
                    $this->data_kata("", "Mufrodat 62", "مِـلْـعَـقَـةُ الـرُّزِّ", "مِلْعَقَةُ الرُّزِّ", "Sendok Nasi"),
                    $this->data_kata("", "Mufrodat 62", "مِـلْـعَـقَـةُ الْـمَـرَقِ", "مِلْعَقَةُ الْمَرَقِ", "Sendok Kuah"),
                    $this->data_kata("", "Mufrodat 62", "شَـوْكَـةٌ", "شَوْكَةٌ", "Garpu"),
                    
                    $this->data_kata("", "Mufrodat 63", "رَفُّ الـصُّـحُـوْنِ", "رَفُّ الصُّحُوْنِ", "Rak Piring"),
                    $this->data_kata("", "Mufrodat 63", "تِـرْمُـسٌ", "تِرْمُسٌ", "Termos"),
                    $this->data_kata("", "Mufrodat 63", "كِـبْـرِيْـتٌ", "كِبْرِيْتٌ", "Korek Kayu"),
                    $this->data_kata("", "Mufrodat 63", "وَلَّاعَـةٌ", "وَلَّاعَةٌ", "Korek Gas", "لَّا"),
                    $this->data_kata("", "Mufrodat 63", "غَازٌ", "غَازٌ", "Gas"),
                    $this->data_kata("", "Mufrodat 63", "مِـصْـفَاةٌ", "مِصْفَاةٌ", "Saringan"),
                    $this->data_kata("", "Mufrodat 63", "سِـكِّـيْـنٌ", "سِكِّيْنٌ", "Pisau"),
                    $this->data_kata("", "Mufrodat 63", "مَاءٌ", "مَاءٌ", "Air"),

                    $this->data_kata("", "Mufrodat 64", "رُزٌّ", "رُزٌّ", "Nasi"),
                    $this->data_kata("", "Mufrodat 64", "قَـصْـعَـةُ الْـمِـدَقِّ", "قَصْعَةُ الْمِدَقِّ", "Cobek"),
                    $this->data_kata("", "Mufrodat 64", "مِـدَقٌّ", "مِدَقٌّ", "Ulekan"),
                    $this->data_kata("", "Mufrodat 64", "مِـقْـشَـطَـةٌ", "مِقْشَطَةٌ", "Parutan"),
                    $this->data_kata("", "Mufrodat 64", "هَاوُنٌ", "هَاوُنٌ", "Lesung"),
                    $this->data_kata("", "Mufrodat 64", "نَارٌ", "نَارٌ", "Api"),
                    $this->data_kata("", "Mufrodat 64", "فَـحْـمٌ", "فَحْمٌ", "Arang"),
                    $this->data_kata("", "Mufrodat 64", "جَـمْـرَةٌ", "جَمْرَةٌ", "Bara Api"),

                    $this->data_kata("", "Mufrodat 65", "دُخَانٌ", "دُخَانٌ", "Asap"),
                    $this->data_kata("", "Mufrodat 65", "بُـخَارٌ", "بُخَارٌ", "Uap"),
                    $this->data_kata("", "Mufrodat 65", "حَـطَـبٌ", "حَطَبٌ", "Kayu Bakar"),
                    $this->data_kata("", "Mufrodat 65", "رَمَادٌ", "رَمَادٌ", "Abu"),
                    $this->data_kata("", "Mufrodat 65", "سُكَّرٌ","سُكَّرٌ", "Gula"),
                    $this->data_kata("", "Mufrodat 65", "مِـلْـحٌ", "مِلْحٌ", "Garam"),
                    $this->data_kata("", "Mufrodat 65", "قَـهْـوَةٌ", "قَهْوَةٌ", "Kopi"),
                    $this->data_kata("", "Mufrodat 65", "بُـنٌّ", "بُنٌّ", "Biji Kopi"),

                    $this->data_kata("", "Mufrodat 66", "شَايٌ", "شَايٌ", "Teh"),
                    $this->data_kata("", "Mufrodat 66", "فِـلْـفِـلٌ", "فِلْفِلٌ", "Cabe"),
                    $this->data_kata("", "Mufrodat 66", "بَـصَـلٌ", "بَصَلٌ", "Bawang Merah"),
                    $this->data_kata("", "Mufrodat 66", "ثُـوْمٌ", "ثُوْمٌ", "Bawang Putih"),
                    $this->data_kata("", "Mufrodat 66", "زَنْـجَـبِـيْـلٌ", "زَنْجَبِيْلٌ", "Jahe"),
                    $this->data_kata("", "Mufrodat 66", "خَـوْلَـجَانٌ", "خَوْلَجَانٌ", "Lengkuas"),
                    $this->data_kata("", "Mufrodat 66", "كُـزْبَـرَةٌ", "كُزْبَرَةٌ", "Ketumbar"),
                    $this->data_kata("", "Mufrodat 66", "كَـرَفْـسٌ", "كَرَفْسٌ", "Seledri"),

                    $this->data_kata("", "Mufrodat 67", "قَـرَنْـفِـلٌ", "قَرَنْفِلٌ", "Cengkeh"),
                    $this->data_kata("", "Mufrodat 67", "كُـرْكُـمٌ", "كُرْكُمٌ", "Kunyit"),
                    $this->data_kata("", "Mufrodat 67", "سَـبَانَـخٌ", "سَبَانَخٌ", "Bayam"),
                    $this->data_kata("", "Mufrodat 67", "جَـزَرٌ", "جَزَرٌ", "Wortel"),
                    $this->data_kata("", "Mufrodat 67", "بَـطَاطِـسٌ", "بَطَاطِسٌ", "Kentang"),
                    $this->data_kata("", "Mufrodat 67", "خِـيَارٌ", "خِيَارٌ", "Timun"),
                    $this->data_kata("", "Mufrodat 67", "بَاذِنْـجَانٌ", "بَاذِنْجَانٌ", "Terong"),
                    $this->data_kata("", "Mufrodat 67", "كُـرْنُـبٌ", "كُرْنُبٌ", "Kubis"),

                    $this->data_kata("", "Mufrodat 68", "جَـوْزُ الْـهِـنْـدِ", "جَوْزُ الْهِنْدِ", "Kelapa"),
                    $this->data_kata("", "Mufrodat 68", "بُـنْـدُقٌ", "بُنْدُقٌ", "Kemiri"),
                    $this->data_kata("", "Mufrodat 68", "تُـنْـبُـوْلٌ", "تُنْبُوْلٌ", "Sirih"),
                    $this->data_kata("", "Mufrodat 68", "صَـلْـصَـةٌ حَارَّةٌ", "صَلْصَةٌ حَارَّةٌ", "Sambal"),
                    $this->data_kata("", "Mufrodat 68", "كَـتْـشَابٌ", "كَتْشَابٌ", "Saus"),
                    $this->data_kata("", "Mufrodat 68", "صَـلْـصَـةُ الـصُّـوْيَا", "صَلْصَةُ الصُّوْيَا", "Kecap"),
                    $this->data_kata("", "Mufrodat 68", "دَقِـيْـقٌ", "دَقِيْقٌ", "Tepung"),
                    $this->data_kata("", "Mufrodat 68", "زُبْـدَةٌ", "زُبْدَةٌ", "Mentega"),

                    $this->data_kata("", "Mufrodat 69", "أَكَـلَ - يَأْكُـلُ - أَكْـلًا", "أَكَلَ-يَأْكُلُ-أَكْلًا", "Makan"),
                    $this->data_kata("", "Mufrodat 69", "شَـرِبَ - يَـشْـرَبُ – شَـرَبًا", "شَرِبَ-يَشْرَبُ-شَرَبًا", "Minum"),
                    $this->data_kata("", "Mufrodat 69", "طـبَـخَ - يَـطْـبَـخُ – طَـبْـخًا", "طَبَخَ-يَطْبَخُ-طَبْخًا", "Memasak"),
                    $this->data_kata("", "Mufrodat 69", "قَـلَـى - يَـقْـلِـى – قَـلْـيًا", "قَلَى-يَقْلِى-قَلْيًا", "Menggoreng"),
                    $this->data_kata("", "Mufrodat 69", "شَـوَى - يَـشْـوِى - شَـوَاءً", "شَوَى-يَشْوِى-شَوَاءً", "Memanggang"),
                    $this->data_kata("", "Mufrodat 69", "لَـحِـسَ - يَـلْـحَـسُ – لَـحْـسًا", "لَحِسَ-يَلْحَسُ-لَحْسًا", "Menjilat"),
                    $this->data_kata("", "Mufrodat 69", "بَـلَـعَ - يَـبْـلَـعُ – بَـلْـعًا", "بَلَعَ-يَبْلَعُ-بَلْعًا", "Menelan"),
                    $this->data_kata("", "Mufrodat 69", "مَـضَـعَ - يَـمْـضَـعُ – مَـضْـعًا", "مَضَعَ-يَمْضَعُ-مَضْعًا", "Mengunyah"),

                    $this->data_kata("", "Mufrodat 70", "عَـضَّ - يَـعَـضُّ – عَـضًّا", "عَضَّ-يَعَضُّ-عَضًّا", "Menggigit"),
                    $this->data_kata("", "Mufrodat 70", "تَـذَوَّقَ - يَـتَـذَوَّقُ – تَـذَوُّقًا", "تَذَوَّقَ-يَتَذَوَّقُ-تَذَوُّقًا", "Mencicipi"),
                    $this->data_kata("", "Mufrodat 70", "شَـرَّحَ - يُـشَـرِّحُ – تَـشْـرِيْـحًا", "شَرَّحَ-يُشَرِّحُ-تَشْرِيْحًا", "Mengiris"),

                    // dari sini
                    $this->data_kata("", "Mufrodat 70", "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا", "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا", "Mengupas"),
                    $this->data_kata("", "Mufrodat 70", "قَطَعَ-يَقْطَعُ-قَطْعًا", "قَطَعَ-يَقْطَعُ-قَطْعًا", "Memotong"),
                    $this->data_kata("", "Mufrodat 70", "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا", "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا", "Terpotong"),
                    $this->data_kata("", "Mufrodat 70", "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا", "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا", "Menghidangkan"),
                    $this->data_kata("", "Mufrodat 70", "خَلَطَ-يَخْلِطُ-خَلْطًا", "خَلَطَ-يَخْلِطُ-خَلْطًا", "Mencampur"),

                    $this->data_kata("", "Mufrodat 71", "اِخْتَلَطَ-يَخْتَلِطُ-اِخْتِلاَطًا", "اِخْتَلَطَ-يَخْتَلِطُ-اِخْتِلاَطًا", "Tercampur"),
                    $this->data_kata("", "Mufrodat 71", "اِسْتَهْلَكَ-يَسْتَهْلِكُ-اِسْتِهْلَاكًا", "اِسْتَهْلَكَ-يَسْتَهْلِكُ-اِسْتِهْلَاكًا", "Mengkonsumsi"),
                    $this->data_kata("", "Mufrodat 71", "قَنَعَ-يَقْنَعُ-قَنَاعَةً", "قَنَعَ-يَقْنَعُ-قَنَاعَةً", "Puas"),
                    $this->data_kata("", "Mufrodat 71", "مَتَّعَ-يُمَتِّعُ-تَمْتِيْعًا", "مَتَّعَ-يُمَتِّعُ-تَمْتِيْعًا", "Menikmati"),
                    $this->data_kata("", "Mufrodat 71", "مَزَّقَ-يُمَزِّقُ-تَمْزِيْقًا", "مَزَّقَ-يُمَزِّقُ-تَمْزِيْقًا", "Menyobek"),
                    $this->data_kata("", "Mufrodat 71", "تَسَوَّقَ-يَتَسَوَّقُ-تَسَوُّقًا", "تَسَوَّقَ-يَتَسَوَّقُ-تَسَوُّقًا", "Belanja"),

                    $this->data_kata("", "Mufrodat 72", "طَعْمٌ", "طَعْمٌ", "Rasa"),
                    $this->data_kata("", "Mufrodat 72", "حُلْوٌ", "حُلْوٌ", "Manis"),
                    $this->data_kata("", "Mufrodat 72", "مَالِحٌ", "مَالِحٌ", "Asin"),
                    $this->data_kata("", "Mufrodat 72", "مُرٌّ", "مُرٌّ", "Pahit"),
                    $this->data_kata("", "Mufrodat 72", "حَرٌّ", "حَرٌّ", "Panas"),
                    $this->data_kata("", "Mufrodat 72", "بَارِدٌ", "بَارِدٌ", "Dingin"),

                    $this->data_kata("", "Mufrodat 73", "حِرِّيْفٌ", "حِرِّيْفٌ", "Pedas"),
                    $this->data_kata("", "Mufrodat 73", "حَامِضٌ", "حَامِضٌ", "Asam"),
                    $this->data_kata("", "Mufrodat 73", "مَبْلُوْلٌ", "مَبْلُوْلٌ", "Basah"),
                    $this->data_kata("", "Mufrodat 73", "جَافٌّ", "جَافٌّ", "Kering"),
                    $this->data_kata("", "Mufrodat 73", "دَافِئٌ", "دَافِئٌ", "Hangat"),
                    $this->data_kata("", "Mufrodat 73", "رَيَّانٌ", "رَيَّانٌ", "Segar"),

                    $this->data_kata("", "Mufrodat 74", "بِرْكَةٌ", "بِرْكَةٌ", "Bak mandi"),
                    $this->data_kata("", "Mufrodat 74", "مِرْحَاضٌ", "مِرْحَاضٌ", "WC"),
                    $this->data_kata("", "Mufrodat 74", "مَاءٌ", "مَاءٌ", "Air"),
                    $this->data_kata("", "Mufrodat 74", "صَابُوْنٌ", "صَابُوْنٌ", "Sabun"),
                    $this->data_kata("", "Mufrodat 74", "شَامْبُو", "شَامْبُو", "Shampo"),
                    $this->data_kata("", "Mufrodat 74", "فِرْجَوْنٌ", "فِرْجَوْنٌ", "Sikat gigi"),
                    $this->data_kata("", "Mufrodat 74", "مَعْجُوْنٌ", "مَعْجُوْنٌ", "Pasta gigi"),
                    $this->data_kata("", "Mufrodat 74", "فُرْشَةٌ", "فُرْشَةٌ", "Sikat"),
                    $this->data_kata("", "Mufrodat 74", "مِنْشَفَةٌ", "مِنْشَفَةٌ", "Handuk"),
                    $this->data_kata("", "Mufrodat 74", "مِعْلاَقٌ", "مِعْلاَقٌ", "Hanger"),

                    $this->data_kata("", "Mufrodat 75", "دَلْوٌ", "دَلْوٌ", "Ember"),
                    $this->data_kata("", "Mufrodat 75", "مِغْرَفَةٌ", "مِغْرَفَةٌ", "Gayung"),
                    $this->data_kata("", "Mufrodat 75", "حَنَفِيَّةٌ", "حَنَفِيَّةٌ", "Kran"),
                    $this->data_kata("", "Mufrodat 75", "أُنْبُوْبَةٌ", "أُنْبُوْبَةٌ", "Pipa"),
                    $this->data_kata("", "Mufrodat 75", "طُلُنْبَةٌ", "طُلُنْبَةٌ", "Pompa"),
                    $this->data_kata("", "Mufrodat 75", "خُرْطُوْمٌ", "خُرْطُوْمٌ", "Selang"),
                    $this->data_kata("", "Mufrodat 75", "مَنْبَعٌ", "مَنْبَعٌ", "Sumber"),
                    $this->data_kata("", "Mufrodat 75", "بِئْرٌ", "بِئْرٌ", "Sumur"),
                    $this->data_kata("", "Mufrodat 75", "مِيْزَابٌ", "مِيْزَابٌ", "Shower"),

                    $this->data_kata("", "Mufrodat 76", "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا", "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا", "Mandi"),
                    $this->data_kata("", "Mufrodat 76", "غَسَلَ-يَغْسِلُ-غَسْلًا", "غَسَلَ-يَغْسِلُ-غَسْلًا", "Mencuci"),
                    $this->data_kata("", "Mufrodat 76", "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا", "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا", "Sikat gigi"),
                    $this->data_kata("", "Mufrodat 76", "مَسَحَ-يَمْسَحُ-مَسْحًا", "مَسَحَ-يَمْسَحُ-مَسْحًا", "Menggosok"),
                    $this->data_kata("", "Mufrodat 76", "رَمَى-يَرْمِي-رَمْيًا", "رَمَى-يَرْمِي-رَمْيًا", "Membuang"),
                    $this->data_kata("", "Mufrodat 76", "حَذَفَ-يَحْذَفُ-حَذْفًا", "حَذَفَ-يَحْذَفُ-حَذْفًا", "Melempar"),
                    $this->data_kata("", "Mufrodat 76", "وَضَعَ-يَضَعُ-وَضْعًا", "وَضَعَ-يَضَعُ-وَضْعًا", "Meletakkan"),

                    $this->data_kata("", "Mufrodat 77", "بَصَقَ-يَبْصُقُ-بَصْقًا", "بَصَقَ-يَبْصُقُ-بَصْقًا", "Meludah"),
                    $this->data_kata("", "Mufrodat 77", "بَالَ-يَبُوْلُ-بَوْلًا", "بَالَ-يَبُوْلُ-بَوْلًا", "Kencing"),
                    $this->data_kata("", "Mufrodat 77", "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا", "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا", "Buang hajat"),
                    $this->data_kata("", "Mufrodat 77", "فَتَحَ-يَفْتَحُ-فَتْحًا", "فَتَحَ-يَفْتَحُ-فَتْحًا", "Membuka"),
                    $this->data_kata("", "Mufrodat 77", "غَلَقَ-يَغْلِقُ-غَلْقًا", "غَلَقَ-يَغْلِقُ-غَلْقًا", "Menutup"),
                    $this->data_kata("", "Mufrodat 77", "ضَغَطَ-يَضْغَطُ-ضَغْطًا", "ضَغَطَ-يَضْغَطُ-ضَغْطًا", "Mengetuk"),
                    $this->data_kata("", "Mufrodat 77", "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا", "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا", "Mencemari"),

                    $this->data_kata("", "Mufrodat 78", "سَبَحَ-يَسْبَحُ-سِبَاحَةً", "سَبَحَ-يَسْبَحُ-سِبَاحَةً", "Berenang"),
                    $this->data_kata("", "Mufrodat 78", "غَاصَ-يَغُوْصُ-غَوْصًا", "غَاصَ-يَغُوْصُ-غَوْصًا", "Menyelam"),
                    $this->data_kata("", "Mufrodat 78", "قَطَرَ-يَقْطُرُ-قَطْرًا", "قَطَرَ-يَقْطُرُ-قَطْرًا", "Menetes"),
                    $this->data_kata("", "Mufrodat 78", "اِنْكَبَّ-يَنْكَبُّ-اِنْكِبَابًا", "اِنْكَبَّ-يَنْكَبُّ-اِنْكِبَابًا", "Tumpah "),
                    $this->data_kata("", "Mufrodat 78", "سَقَى-يَسْقِى-سَقْيًا", "سَقَى-يَسْقِى-سَقْيًا", "Mengairi "),
                    $this->data_kata("", "Mufrodat 78", "رَسَبَ-يَرْسُبُ-رُسُوْبًا", "رَسَبَ-يَرْسُبُ-رُسُوْبًا", "Mengendap "),
                    $this->data_kata("", "Mufrodat 78", "رَشَّ-يَرُشُّ-رَشًّا", "رَشَّ-يَرُشُّ-رَشًّا", "Menyiram "),

                    $this->data_kata("", "Mufrodat 79", "تَجَمَّدَ-يَتَجَمَّدُ-تَجَمُّدًا", "تَجَمَّدَ-يَتَجَمَّدُ-تَجَمُّدًا", "Membeku"),
                    $this->data_kata("", "Mufrodat 79", "جَمَّدَ-يُجَمِّدُ-تَجْمِيْدًا", "جَمَّدَ-يُجَمِّدُ-تَجْمِيْدًا", "Membekukan"),
                    $this->data_kata("", "Mufrodat 79", "بَلَّلَ-يُبَلِّلُ –تَبْلِيْلًا", "بَلَّلَ-يُبَلِّلُ –تَبْلِيْلًا", "Membasahi"),
                    $this->data_kata("", "Mufrodat 79", "تَسَرَّبَ-يَتَسَرَّبُ-تَسَرُّبًا", "تَسَرَّبَ-يَتَسَرَّبُ-تَسَرُّبًا", "Bocor"),
                    $this->data_kata("", "Mufrodat 79", "ذَابَ-يَذُوْبُ-ذَوْبًا", "ذَابَ-يَذُوْبُ-ذَوْبًا", "Mencair"),
                    $this->data_kata("", "Mufrodat 79", "غَرِقَ-يَغْرَقُ-غَرَقًا", "غَرِقَ-يَغْرَقُ-غَرَقًا", "Tenggelam"),
                    $this->data_kata("", "Mufrodat 79", "سَالَ-يَسِيْلُ-سَيْلًا", "سَالَ-يَسِيْلُ-سَيْلًا", "Banjir"),
                    $this->data_kata("", "Mufrodat 79", "صَبَّ-يَصُبُّ-صَبًّا", "صَبَّ-يَصُبُّ-صَبًّا", "Menuangkan"),

                    $this->data_kata("", "Mufrodat 80", "مَدْرَسَةٌ حُكُوْمِيَّةٌ", "مَدْرَسَةٌ حُكُوْمِيَّةٌ", "Sekolah negeri"),
                    $this->data_kata("", "Mufrodat 80", "مَدْرَسَةٌ أَهْلِيَّةٌ", "مَدْرَسَةٌ أَهْلِيَّةٌ", "Sekolah swasta"),
                    $this->data_kata("", "Mufrodat 80", "رَئِيْسُ الْمَدْرَسَةِ", "رَئِيْسُ الْمَدْرَسَةِ", "Kepala sekolah"),
                    $this->data_kata("", "Mufrodat 80", "وَلِيُّ الْفَصْلِ", "وَلِيُّ الْفَصْلِ", "Wali kelas"),
                    $this->data_kata("", "Mufrodat 80", "وَلِيُّ الطَّالِبِ", "وَلِيُّ الطَّالِبِ", "Walimurid"),
                    $this->data_kata("", "Mufrodat 80", "فَصْلٌ", "فَصْلٌ", "Kelas"),
                    $this->data_kata("", "Mufrodat 80", "مَعْهَدٌ", "مَعْهَدٌ", "Pondok"),
                    $this->data_kata("", "Mufrodat 80", "إِدَارَةٌ", "إِدَارَةٌ", "Kantor"),

                    $this->data_kata("", "Mufrodat 81", "عَمُوْدٌ", "عَمُوْدٌ", "Tiang"),
                    $this->data_kata("", "Mufrodat 81", "لِوَاءٌ", "لِوَاءٌ", "Bendera"),
                    $this->data_kata("", "Mufrodat 81", "مُدَرِّسٌ", "مُدَرِّسٌ", "Guru lk"),
                    $this->data_kata("", "Mufrodat 81", "مُدَرِّسَةٌ", "مُدَرِّسَةٌ", "Guru pr"),
                    $this->data_kata("", "Mufrodat 81", "تِلْمِيْذٌ", "تِلْمِيْذٌ", "Murid lk"),
                    $this->data_kata("", "Mufrodat 81", "تِلْمِيْذَةٌ", "تِلْمِيْذَةٌ", "Murid pr"),
                    $this->data_kata("", "Mufrodat 81", "نُقُوْدٌ", "نُقُوْدٌ", "Uang"),
                    $this->data_kata("", "Mufrodat 81", "مَصْرُوْفُ الْجَيْبِ", "مَصْرُوْفُ الْجَيْبِ", "Uang jajan"),

                    $this->data_kata("", "Mufrodat 82", "رَشْوَةٌ", "رَشْوَةٌ", "Uang suap"),
                    $this->data_kata("", "Mufrodat 82", "عُرْبُوْنٌ", "عُرْبُوْنٌ", "Uang muka"),
                    $this->data_kata("", "Mufrodat 82", "طَالِبٌ جَامِعِيٌّ", "طَالِبٌ جَامِعِيٌّ", "Mahasiswa"),
                    $this->data_kata("", "Mufrodat 82", "مِنْحَةٌ دِرَاسِيَّةٌ", "مِنْحَةٌ دِرَاسِيَّةٌ", "Beasiswa"),
                    $this->data_kata("", "Mufrodat 82", "مُحَاضِرٌ", "مُحَاضِرٌ", "Dosen"),
                    $this->data_kata("", "Mufrodat 82", "كُلِّيَّةٌ", "كُلِّيَّةٌ", "Fakultas"),
                    $this->data_kata("", "Mufrodat 82", "قِسْمٌ", "قِسْمٌ", "Jurusan"),
                    $this->data_kata("", "Mufrodat 82", "سَبُّوْرَةٌ", "سَبُّوْرَةٌ", "Papan tulis"),

                    $this->data_kata("", "Mufrodat 83", "حِبْرٌ", "حِبْرٌ", "Tinta"),
                    $this->data_kata("", "Mufrodat 83", "مِعْلَمَةٌ", "مِعْلَمَةٌ", "Spidol"),
                    $this->data_kata("", "Mufrodat 83", "كِتَابٌ", "كِتَابٌ", "Buku"),
                    $this->data_kata("", "Mufrodat 83", "دَفْتَرٌ", "دَفْتَرٌ", "Buku tulis"),
                    $this->data_kata("", "Mufrodat 83", "قَلَمٌ", "قَلَمٌ", "Pena"),
                    $this->data_kata("", "Mufrodat 83", "مِمْسَحَةٌ", "مِمْسَحَةٌ", "Penghapus"),
                    $this->data_kata("", "Mufrodat 83", "قَلَمُ الرَّصَاصِ", "قَلَمُ الرَّصَاصِ", "Pensil"),
                    $this->data_kata("", "Mufrodat 83", "شَهَادَةٌ", "شَهَادَةٌ", "Ijazah"),

                    $this->data_kata("", "Mufrodat 84", "شَهَادَةُ الإِنْجَازِ", "شَهَادَةُ الإِنْجَازِ", "Piagam"),
                    $this->data_kata("", "Mufrodat 84", "كُرَّةٌ أَرْضِيَّةٌ", "كُرَّةٌ أَرْضِيَّةٌ", "Globe"),
                    $this->data_kata("", "Mufrodat 84", "خَرِيْطَةٌ", "خَرِيْطَةٌ", "Peta"),
                    $this->data_kata("", "Mufrodat 84", "رَوْضَةُ الْأَطْفَالِ", "رَوْضَةُ الْأَطْفَالِ", "TK"),
                    $this->data_kata("", "Mufrodat 84", "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ", "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ", "SD"),
                    $this->data_kata("", "Mufrodat 84", "مَدْرَسَةٌ مُتَوَسِّطَةٌ", "مَدْرَسَةٌ مُتَوَسِّطَةٌ", "SMP"),
                    $this->data_kata("", "Mufrodat 84", "مَدْرَسَةٌ ثَانَوِيَّةٌ", "مَدْرَسَةٌ ثَانَوِيَّةٌ", "SMA"),
                    $this->data_kata("", "Mufrodat 84", "جَامِعَةٌ", "جَامِعَةٌ", "Universitas"),

                    $this->data_kata("", "Mufrodat 85", "دِرَاسَةٌ أُوْلَى", "دِرَاسَةٌ أُوْلَى", "S1"),
                    $this->data_kata("", "Mufrodat 85", "دِرَاسَةٌ عُلْيَا", "دِرَاسَةٌ عُلْيَا", "S2"),
                    $this->data_kata("", "Mufrodat 85", "مَدْرَسَةُ الْهَنْدَسَةِ", "مَدْرَسَةُ الْهَنْدَسَةِ", "SMK"),
                    $this->data_kata("", "Mufrodat 85", "مَكْتَبَةٌ", "مَكْتَبَةٌ", "Perpustakaan"),
                    $this->data_kata("", "Mufrodat 85", "صُوْرَةٌ", "صُوْرَةٌ", "Gambar"),
                    $this->data_kata("", "Mufrodat 85", "خَتْمٌ", "خَتْمٌ", "Stempel"),
                    $this->data_kata("", "Mufrodat 85", "تَوْقِيْعٌ", "تَوْقِيْعٌ", "Tanda tangan"),
                    $this->data_kata("", "Mufrodat 85", "نَشْرَةٌ", "نَشْرَةٌ", "Brosur"),

                    $this->data_kata("", "Mufrodat 86", "نَتِيْجَةٌ", "نَتِيْجَةٌ", "Nilai"),
                    $this->data_kata("", "Mufrodat 86", "إِمْتِحَانٌ", "إِمْتِحَانٌ", "Ujian"),
                    $this->data_kata("", "Mufrodat 86", "إِمْتِحَانٌ تَحْرِيْرِيًّا", "إِمْتِحَانٌ تَحْرِيْرِيًّا", "Ujian tulis"),
                    $this->data_kata("", "Mufrodat 86", "إِمْتِحَانٌ شَفَوِيًّا", "إِمْتِحَانٌ شَفَوِيًّا", "Ujian lisan"),
                    $this->data_kata("", "Mufrodat 86", "لَجْنَةُ الْإِمْتِحَانِ", "لَجْنَةُ الْإِمْتِحَانِ", "Panitia ujian"),
                    $this->data_kata("", "Mufrodat 86", "رَقْمُ دَفْتَرِ الْقَيْدِ", "رَقْمُ دَفْتَرِ الْقَيْدِ", "No induk"),
                    $this->data_kata("", "Mufrodat 86", "مُصَحِّحٌ", "مُصَحِّحٌ", "Korektor"),

                    $this->data_kata("", "Mufrodat 87", "ذَهَبَ-يَذْهَبُ-ذِهَابًا", "ذَهَبَ-يَذْهَبُ-ذِهَابًا", "Pergi"),
                    $this->data_kata("", "Mufrodat 87", "رَجَعَ-يَرْجِعُ-رُجُوعًا", "رَجَعَ-يَرْجِعُ-رُجُوعًا", "Pulang"),
                    $this->data_kata("", "Mufrodat 87", "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا", "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا", "Mengajar"),
                    $this->data_kata("", "Mufrodat 87", "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا", "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا", "Belajar"),
                    $this->data_kata("", "Mufrodat 87", "رَبَّى-يُرَبِّي-تَرْبِيَةً", "رَبَّى-يُرَبِّي-تَرْبِيَةً", "Mendidik"),
                    $this->data_kata("", "Mufrodat 87", "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا", "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا", "Mendukung"),
                    $this->data_kata("", "Mufrodat 87", "مَثَّلَ-يُمَثِّلُ-تَمْثِيْلًا", "مَثَّلَ-يُمَثِّلُ-تَمْثِيْلًا", "Mencontohkan"),
                    $this->data_kata("", "Mufrodat 87", "مَرَّنَ-يُمَرِّنُ-تَمْرِيْنًا", "مَرَّنَ-يُمَرِّنُ-تَمْرِيْنًا", "Latihan"),

                    $this->data_kata("", "Mufrodat 88", "اِمْتَحَنَ-يَمْتَحِنُ-اِمْتِحَانًا", "اِمْتَحَنَ-يَمْتَحِنُ-اِمْتِحَانًا", "Ujian"),
                    $this->data_kata("", "Mufrodat 88", "اَفَادَ-يُفِيْدُ-إفِاَدَةً", "اَفَادَ-يُفِيْدُ-إفِاَدَةً", "Memanfaatkan"),
                    $this->data_kata("", "Mufrodat 88", "اِسْتَفَادَ-يَسْتَفِيْدُ-اِسْتِفَادَةً", "اِسْتَفَادَ-يَسْتَفِيْدُ-اِسْتِفَادَةً", "Mengambil Faedah"),
                    $this->data_kata("", "Mufrodat 88", "عَمِلَ-يَعْمَلُ-عَمَلًا", "عَمِلَ-يَعْمَلُ-عَمَلًا", "Mengerjakan"),
                    $this->data_kata("", "Mufrodat 88", "فَهِمَ-يَفْهَمُ-فَهْمًا", "فَهِمَ-يَفْهَمُ-فَهْمًا", "Memahami"),
                    $this->data_kata("", "Mufrodat 88", "عَلِمَ-يَعْلَمُ-عِلْمًا", "عَلِمَ-يَعْلَمُ-عِلْمًا", "Mengerti"),
                    $this->data_kata("", "Mufrodat 88", "عَرَفَ-يَعْرِفُ-مَعْرِفَةً", "عَرَفَ-يَعْرِفُ-مَعْرِفَةً", "Mengetahui"),
                    $this->data_kata("", "Mufrodat 88", "شَكَا-يَشْكُو-شَكْوًا", "شَكَا-يَشْكُو-شَكْوًا", "Mengadukan"),

                    $this->data_kata("", "Mufrodat 89", "صَنَعَ-يَصْنَعُ-صِنَاعَةً", "صَنَعَ-يَصْنَعُ-صِنَاعَةً", "Membuat"),
                    $this->data_kata("", "Mufrodat 89", "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا", "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا", "mencoba"),
                    $this->data_kata("", "Mufrodat 89", "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا", "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا", "Memeriksa"),
                    $this->data_kata("", "Mufrodat 89", "صَدَقَ-يَصْدُقُ-صِدْقًا", "صَدَقَ-يَصْدُقُ-صِدْقًا", "Jujur"),
                    $this->data_kata("", "Mufrodat 89", "كَذَبَ-يَكْذِبُ-كِذْبًا", "كَذَبَ-يَكْذِبُ-كِذْبًا", "Berbohong"),
                    $this->data_kata("", "Mufrodat 89", "دَفَعَ-يَدْفَعُ-دَفْعًا", "دَفَعَ-يَدْفَعُ-دَفْعًا", "Membayar"),
                    $this->data_kata("", "Mufrodat 89", "رَشَا-يَرْشُو-رَشْوًا", "رَشَا-يَرْشُو-رَشْوًا", "Menyuap"),
                    $this->data_kata("", "Mufrodat 89", "رَافَقَ-يُرَافِقُ-مُرَافَقَةً", "رَافَقَ-يُرَافِقُ-مُرَافَقَةً", "Menemani"),

                    $this->data_kata("", "Mufrodat 90", "خَدِمَ-يَخْدَمُ-خِدْمَةً", "خَدِمَ-يَخْدَمُ-خِدْمَةً", "Melayani"),
                    $this->data_kata("", "Mufrodat 90", "سَاعَدَ-يُسَاعِدُ-مُسَاعَدَةً", "سَاعَدَ-يُسَاعِدُ-مُسَاعَدَةً", "Membantu"),
                    $this->data_kata("", "Mufrodat 90", "تَعَاوَنَ-يَتَعَاوَنُ-تَعَاوُنًا", "تَعَاوَنَ-يَتَعَاوَنُ-تَعَاوُنًا", "menolong"),
                    $this->data_kata("", "Mufrodat 90", "تَحَمَّسَ-يَتَحَمَّسُ-تَحَمُّسًا", "تَحَمَّسَ-يَتَحَمَّسُ-تَحَمُّسًا", "Semangat"),
                    $this->data_kata("", "Mufrodat 90", "فَرِحَ-يَفْرَحُ-فَرْحًا", "فَرِحَ-يَفْرَحُ-فَرْحًا", "Senang"),
                    $this->data_kata("", "Mufrodat 90", "حَزِنَ-يَحْزَنُ-حُزْنًا", "حَزِنَ-يَحْزَنُ-حُزْنًا", "Sedih"),
                    $this->data_kata("", "Mufrodat 90", "دَلَّ-يَدُلُّ-دِلَالَةً", "دَلَّ-يَدُلُّ-دِلَالَةً", "Menunjukkan"),
                    $this->data_kata("", "Mufrodat 90", "أَخْبَرَ-يُخْبِرُ-إِخْبَارًا", "أَخْبَرَ-يُخْبِرُ-إِخْبَارًا", "Mengabarkan"),

                    $this->data_kata("", "Mufrodat 91", "قَرَأَ-يَقْرَأُ-قِرَائَةً", "قَرَأَ-يَقْرَأُ-قِرَائَةً", "Membaca"),
                    $this->data_kata("", "Mufrodat 91", "كَتَبَ-يَكْتُبُ-كِتَابَةً", "كَتَبَ-يَكْتُبُ-كِتَابَةً", "Menulis"),
                    $this->data_kata("", "Mufrodat 91", "رَسَمَ-يَرْسُمُ-رَسْمًا", "رَسَمَ-يَرْسُمُ-رَسْمًا", "Melukis"),
                    $this->data_kata("", "Mufrodat 91", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "Mendaftar"),
                    $this->data_kata("", "Mufrodat 91", "قَلَّدَ-يُقَلِّدُ-تَقْلِيْدًا", "قَلَّدَ-يُقَلِّدُ-تَقْلِيْدًا", "Mengikuti"),
                    $this->data_kata("", "Mufrodat 91", "اِشْتَرَكَ-يَشْتَرِكُ-اِشْتِرَاكًا", "اِشْتَرَكَ-يَشْتَرِكُ-اِشْتِرَاكًا", "Ikut Serta"),
                    $this->data_kata("", "Mufrodat 91", "اِبْتَسَمَ-يَبْتَسِمُ-اِبْتِسَامًا", "اِبْتَسَمَ-يَبْتَسِمُ-اِبْتِسَامًا", "Tersenyum"),
                    $this->data_kata("", "Mufrodat 91", "وَصَلَ-يَصِلُ-وُصُولًا", "وَصَلَ-يَصِلُ-وُصُولًا", "Sampai"),

                    $this->data_kata("", "Mufrodat 92", "أَوْصَلَ-يُوْصِلُ-إِيْصَالًا", "أَوْصَلَ-يُوْصِلُ-إِيْصَالًا", "Mengantar"),
                    $this->data_kata("", "Mufrodat 92", "اِسْتَقْبَلَ-يَسْتَقْبِلُ-اِسْتِقْبَالًا", "اِسْتَقْبَلَ-يَسْتَقْبِلُ-اِسْتِقْبَالًا", "Menjemput "),
                    $this->data_kata("", "Mufrodat 92", "أَذِنَ-يَأْذَنُ-إِذْنًا", "أَذِنَ-يَأْذَنُ-إِذْنًا", "Memberi Izin"),
                    $this->data_kata("", "Mufrodat 92", "اِسْتَأْذَنَ-يَسْتَأْذِنُ-اِسْتِئْذَانًا", "اِسْتَأْذَنَ-يَسْتَأْذِنُ-اِسْتِئْذَانًا", "Meminta izin"),
                    $this->data_kata("", "Mufrodat 92", "أَعْلَنَ-يُعْلِنُ-اِعْلَانًا", "أَعْلَنَ-يُعْلِنُ-اِعْلَانًا", "Mengumumkan"),
                    $this->data_kata("", "Mufrodat 92", "نَوَى-يَنْوِي-نِيَّةً", "نَوَى-يَنْوِي-نِيَّةً", "Berniat"),
                    $this->data_kata("", "Mufrodat 92", "تَعَلَّقَ-يَتَعَلَّقُ-تَعَلُّقًا", "تَعَلَّقَ-يَتَعَلَّقُ-تَعَلُّقًا", "Tergantung"),
                    $this->data_kata("", "Mufrodat 92", "أَطَاعَ-يُطِيْعُ-طَاعَةً", "أَطَاعَ-يُطِيْعُ-طَاعَةً", "Mentaati"),

                    $this->data_kata("", "Mufrodat 93", "خَالَفَ-يُخَالِفُ-مُخَالَفَةً", "خَالَفَ-يُخَالِفُ-مُخَالَفَةً", "Melanggar"),
                    $this->data_kata("", "Mufrodat 93", "دَلَّ-يَدُلُّ-دِلَالَةً", "دَلَّ-يَدُلُّ-دِلَالَةً", "Menunjukkan"),
                    $this->data_kata("", "Mufrodat 93", "صَفَّقَ-يُصَفِّقُ-تَصْفِيْقًا", "صَفَّقَ-يُصَفِّقُ-تَصْفِيْقًا", "Tepuk Tangan"),
                    $this->data_kata("", "Mufrodat 93", "وَزَّعَ-يُوَزِّعُ-تَوْزِيْعًا", "وَزَّعَ-يُوَزِّعُ-تَوْزِيْعًا", "membagi"),
                    $this->data_kata("", "Mufrodat 93", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "Mendaftar"),
                    $this->data_kata("", "Mufrodat 93", "حَثَّ-يَحُثُّ-حَثًّا", "حَثَّ-يَحُثُّ-حَثًّا", "Terjadi"),
                    $this->data_kata("", "Mufrodat 93", "أَجْرَأَ-يُجْرِئُ-إِجْرَاءً", "أَجْرَأَ-يُجْرِئُ-إِجْرَاءً", "Melaksanakan"),
                    $this->data_kata("", "Mufrodat 93", "طَرَدَ-يَطْرُدُ-طَرَدًا", "طَرَدَ-يَطْرُدُ-طَرَدًا", "Mengusir"),

                    $this->data_kata("", "Mufrodat 94", "شَرَحَ-يَشْرَحُ-شَرْحًا", "شَرَحَ-يَشْرَحُ-شَرْحًا", "Menjelaskan"),
                    $this->data_kata("", "Mufrodat 94", "اِسْتَرَاحَ-يَسْتَرِيْحُ-اِسْتِرَاحَةً", "اِسْتَرَاحَ-يَسْتَرِيْحُ-اِسْتِرَاحَةً", "Beristirahat"),
                    $this->data_kata("", "Mufrodat 94", "أَزْعَجَ-يُزْعِجُ-إِزْعَاجًا", "أَزْعَجَ-يُزْعِجُ-إِزْعَاجًا", "Mengganggu"),
                    $this->data_kata("", "Mufrodat 94", "تَخَيَّلَ-يَتَخَيَّلُ-تَخَيُّلًا", "تَخَيَّلَ-يَتَخَيَّلُ-تَخَيُّلًا", "Menghayal"),
                    $this->data_kata("", "Mufrodat 94", "ظَنَّ-يَظُنُّ-ظَنًّا", "ظَنَّ-يَظُنُّ-ظَنًّا", "Menyangka"),
                    $this->data_kata("", "Mufrodat 94", "غَضِبَ-يَغْضَبُ-غَضَبًا", "غَضِبَ-يَغْضَبُ-غَضَبًا", "Marah"),

                    $this->data_kata("", "Mufrodat 95", "دَرَّاجَةٌ", "دَرَّاجَةٌ", "Sepeda"),
                    $this->data_kata("", "Mufrodat 95", "دَرَّاجَةٌ نَارِيَّةٌ", "دَرَّاجَةٌ نَارِيَّةٌ", "Sepeda Motor"),
                    $this->data_kata("", "Mufrodat 95", "سَيَّارَةٌ", "سَيَّارَةٌ", "Mobil"),
                    $this->data_kata("", "Mufrodat 95", "سَيَّارَةُ السِّبَاقِ", "سَيَّارَةُ السِّبَاقِ", "Mobil Balap"),
                    $this->data_kata("", "Mufrodat 95", "سَيَّارَةُ الرُّكَّابِ", "سَيَّارَةُ الرُّكَّابِ", "Angkot"),
                    $this->data_kata("", "Mufrodat 95", "حَافِلَةٌ", "حَافِلَةٌ", "Bus"),
                    $this->data_kata("", "Mufrodat 95", "شَاحِنَةٌ", "شَاحِنَةٌ", "Truk"),
                    $this->data_kata("", "Mufrodat 95", "بِتْشَا", "بِتْشَا", "Becak"),

                    $this->data_kata("", "Mufrodat 96", "عَرَبَةٌ", "عَرَبَةٌ", "Dokar"),
                    $this->data_kata("", "Mufrodat 96", "بَاخِرَةٌ", "بَاخِرَةٌ", "Kapal"),
                    $this->data_kata("", "Mufrodat 96", "سَفِيْنَةٌ", "سَفِيْنَةٌ", "Perahu"),
                    $this->data_kata("", "Mufrodat 96", "سَفِيْنَةٌ شِرَاعِيَّةٌ", "سَفِيْنَةٌ شِرَاعِيَّةٌ", "Perahu Layar"),
                    $this->data_kata("", "Mufrodat 96", "تَكْسِى", "تَكْسِى", "Taksi"),
                    $this->data_kata("", "Mufrodat 96", "قِطَارٌ", "قِطَارٌ", "Kereta Api"),
                    $this->data_kata("", "Mufrodat 96", "قَاطِرَةٌ", "قَاطِرَةٌ", "Lokomotif"),
                    $this->data_kata("", "Mufrodat 96", "طَائِرَةٌ", "طَائِرَةٌ", "Pesawat Terbang"),

                    $this->data_kata("", "Mufrodat 97", "دَبَّابَةٌ", "دَبَّابَةٌ", "Tank"),
                    $this->data_kata("", "Mufrodat 97", "زَوْرَقٌ", "زَوْرَقٌ", "Sampan"),
                    $this->data_kata("", "Mufrodat 97", "مِقْوَدٌ", "مِقْوَدٌ", "Setir"),
                    $this->data_kata("", "Mufrodat 97", "فَرْمَلَةٌ", "فَرْمَلَةٌ", "Rem"),
                    $this->data_kata("", "Mufrodat 97", "إِطَارٌ", "إِطَارٌ", "Ban"),
                    $this->data_kata("", "Mufrodat 97", "عَجَلَةٌ", "عَجَلَةٌ", "Roda"),
                    $this->data_kata("", "Mufrodat 97", "دَوَّاسَةٌ", "دَوَّاسَةٌ", "Pedal"),
                    $this->data_kata("", "Mufrodat 97", "بُوْرٌ", "بُوْرٌ", "Klakson"),

                    $this->data_kata("", "Mufrodat 98", "مَقْعَدٌ", "مَقْعَدٌ", "Sadel"),
                    $this->data_kata("", "Mufrodat 98", "سِلْسِلَةٌ", "سِلْسِلَةٌ", "Rantai"),
                    $this->data_kata("", "Mufrodat 98", "بِنْزِيْنٌ", "بِنْزِيْنٌ", "Bensin"),
                    $this->data_kata("", "Mufrodat 98", "إِشَارَةُ السَّيْرِ", "إِشَارَةُ السَّيْرِ", "Rambu Lalin"),
                    $this->data_kata("", "Mufrodat 98", "مَثْلَثٌ", "مَثْلَثٌ", "Pertigaan"),
                    $this->data_kata("", "Mufrodat 98", "مَرْبَعٌ", "مَرْبَعٌ", "Perempatan "),
                    $this->data_kata("", "Mufrodat 98", "مَخْمَسٌ", "مَخْمَسٌ", "Simpang Lima"),
                    $this->data_kata("", "Mufrodat 98", "تَذْكِرَةٌ", "تَذْكِرَةٌ", "Tiket"),

                    $this->data_kata("", "Mufrodat 99", "تَأْشِيْرَةٌ", "تَأْشِيْرَةٌ", "Visa"),
                    $this->data_kata("", "Mufrodat 99", "جَوَازُ السَّفَرِ", "جَوَازُ السَّفَرِ", "Paspor"),
                    $this->data_kata("", "Mufrodat 99", "أُجْرَةٌ", "أُجْرَةٌ", "Ongkos"),
                    $this->data_kata("", "Mufrodat 99", "دُوَارُ الْبَرِّ", "دُوَارُ الْبَرِّ", "Mabuk Darat"),
                    $this->data_kata("", "Mufrodat 99", "دُوَارُ الْبَحْرِ", "دُوَارُ الْبَحْرِ", "Mabuk Laut"),
                    $this->data_kata("", "Mufrodat 99", "هَدَايَا السَّفَرِ", "هَدَايَا السَّفَرِ", "Oleh-Oleh"),
                    $this->data_kata("", "Mufrodat 99", "مَصَارِيْفُ السَّفَرِ", "مَصَارِيْفُ السَّفَرِ", "Biaya Perjalanan"),
                    $this->data_kata("", "Mufrodat 99", "مَسَافَةُ السَّفَرِ", "مَسَافَةُ السَّفَرِ", "Jarak Perjalanan"),

                    $this->data_kata("", "Mufrodat 100", "قَادَ-يَقُودُ-قِيَادَةً", "قَادَ-يَقُودُ-قِيَادَةً", "Menyetir"),
                    $this->data_kata("", "Mufrodat 100", "رَكِبَ-يَرْكَبُ-رُكُوْبًا", "رَكِبَ-يَرْكَبُ-رُكُوْبًا", "Mengendarai"),
                    $this->data_kata("", "Mufrodat 100", "رَدِفَ-يَرْدَفُ-رَدْفًا", "رَدِفَ-يَرْدَفُ-رَدْفًا", "Membonceng"),
                    $this->data_kata("", "Mufrodat 100", "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً", "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً", "Mengerem"),
                    $this->data_kata("", "Mufrodat 100", "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا", "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا", "Berhenti"),
                    $this->data_kata("", "Mufrodat 100", "وَقَّفَ-يُوَقِّفُ-تَوْقِيْفًا", "وَقَّفَ-يُوَقِّفُ-تَوْقِيْفًا", "Menghentikan"),
                    $this->data_kata("", "Mufrodat 100", "اِنْعَطَفَ-يَنْعَطِفُ-اِنْعِطَافًا", "اِنْعَطَفَ-يَنْعَطِفُ-اِنْعِطَافًا", "Belok"),
                    $this->data_kata("", "Mufrodat 100", "اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا", "اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا", "Menoleh"),

                    $this->data_kata("", "Mufrodat 101", "صَدَمَ-يَصْدُمُ-صَدَامَةً", "صَدَمَ-يَصْدُمُ-صَدَامَةً", "Menabrak"),
                    $this->data_kata("", "Mufrodat 101", "تَصَادَمَ-يَتَصَادَمُ-تَصَادُمًا", "تَصَادَمَ-يَتَصَادَمُ-تَصَادُمًا", "Tabrakan"),
                    $this->data_kata("", "Mufrodat 101", "دَاهَمَ-يُدَاهِمُ-مُدَاهَمَةً", "دَاهَمَ-يُدَاهِمُ-مُدَاهَمَةً", "Mendobrak"),
                    $this->data_kata("", "Mufrodat 101", "كَسَّرَ-يُكَسِّرُ-تَكِسْيًرا", "كَسَّرَ-يُكَسِّرُ-تَكِسْيًرا", "Memecahkan"),
                    $this->data_kata("", "Mufrodat 101", "جَرَّ-يَجُرُّ-جَرًّا", "جَرَّ-يَجُرُّ-جَرًّا", "Menarik"),
                    $this->data_kata("", "Mufrodat 101", "سَيَّرَ-يُسَيِّرُ-تَسيِيْرًا", "سَيَّرَ-يُسَيِّرُ-تَسيِيْرًا", "Menjalankan"),
                    $this->data_kata("", "Mufrodat 101", "عَبَرَ-يَعْبُرُ-عُبُوْرًا", "عَبَرَ-يَعْبُرُ-عُبُوْرًا", "Menyeberang"),
                    $this->data_kata("", "Mufrodat 101", "أَبْحَرَ-يُبْحِرُ-إِبْحَارًا", "أَبْحَرَ-يُبْحِرُ-إِبْحَارًا", "Berlayar"),

                    $this->data_kata("", "Mufrodat 102", "طَبِيْبٌ", "طَبِيْبٌ", "Dokter (lk)"),
                    $this->data_kata("", "Mufrodat 102", "طَبِيْبَةٌ", "طَبِيْبَةٌ", "Dokter (pr)"),
                    $this->data_kata("", "Mufrodat 102", "مُمَرِّضٌ", "مُمَرِّضٌ", "Perawat"),
                    $this->data_kata("", "Mufrodat 102", "مَرِيْضٌ", "مَرِيْضٌ", "Pasien"),
                    $this->data_kata("", "Mufrodat 102", "طَبِيْبٌ اِخْتِصَاصِيٌّ", "طَبِيْبٌ اِخْتِصَاصِيٌّ", "Dokter Spesialis"),
                    $this->data_kata("", "Mufrodat 102", "طَبِيْبُ الأَسْنَانِ", "طَبِيْبُ الأَسْنَانِ", "Dokter Gigi"),
                    $this->data_kata("", "Mufrodat 102", "طَبِيْبُ الْجَرَاحِ", "طَبِيْبُ الْجَرَاحِ", "Dokter Bedah"),
                    $this->data_kata("", "Mufrodat 102", "طَبِيْبٌ بَيْطَرِيٌّ", "طَبِيْبٌ بَيْطَرِيٌّ", "Dokter Hewan"),
                    $this->data_kata("", "Mufrodat 102", "دَوَاءٌ", "دَوَاءٌ", "Obat"),

                    $this->data_kata("", "Mufrodat 103", "دَاءٌ", "دَاءٌ", "Penyakit"),
                    $this->data_kata("", "Mufrodat 103", "سَيَّارَةُ اْلإِسْعَافِ", "سَيَّارَةُ اْلإِسْعَافِ", "Ambulan"),
                    $this->data_kata("", "Mufrodat 103", "حُقْنَةٌ", "حُقْنَةٌ", "Suntikan"),
                    $this->data_kata("", "Mufrodat 103", "مِيْزَانُ الْحَرَارَةِ", "مِيْزَانُ الْحَرَارَةِ", "Termometer"),
                    $this->data_kata("", "Mufrodat 103", "سَمَّاعَةُ الطَّبِيْبِ", "سَمَّاعَةُ الطَّبِيْبِ", "Stetoskop"),
                    $this->data_kata("", "Mufrodat 103", "حَمَّالَةٌ", "حَمَّالَةٌ", "Tandu"),
                    $this->data_kata("", "Mufrodat 103", "مِيْزَانُ الْجِسْمِ", "مِيْزَانُ الْجِسْمِ", "Timbangan Badan"),
                    $this->data_kata("", "Mufrodat 103", "كُرْسِيٌّ مُتَحَرِّكٌ", "كُرْسِيٌّ مُتَحَرِّكٌ", "Kursi Roda"),
                    $this->data_kata("", "Mufrodat 103", "مِجْهَرٌ", "مِجْهَرٌ", "Mikroskop"),

                    $this->data_kata("", "Mufrodat 104", "ضِيَاءٌ", "ضِيَاءٌ", "Sinar"),
                    $this->data_kata("", "Mufrodat 104", "أَشِعَّةٌ", "أَشِعَّةٌ", "Sinar x"),
                    $this->data_kata("", "Mufrodat 104", "مِقَصٌّ", "مِقَصٌّ", "Gunting"),
                    $this->data_kata("", "Mufrodat 104", "ضِمَادٌ", "ضِمَادٌ", "Perban"),
                    $this->data_kata("", "Mufrodat 104", "قُطْنٌ", "قُطْنٌ", "Kapas"),
                    $this->data_kata("", "Mufrodat 104", "مَرِيْضٌ سُكَّرِيٌّ", "مَرِيْضٌ سُكَّرِيٌّ", "Diabetes"),
                    $this->data_kata("", "Mufrodat 104", "جُدَرِيٌّ", "جُدَرِيٌّ", "Cacar"),
                    $this->data_kata("", "Mufrodat 104", "دُمَّلٌ", "دُمَّلٌ", "Bisul"),
                    $this->data_kata("", "Mufrodat 104", "بَثْرَةٌ", "بَثْرَةٌ", "Jerawat"),

                    $this->data_kata("", "Mufrodat 105", "مَغْصٌ", "مَغْصٌ", "Sakit Perut"),
                    $this->data_kata("", "Mufrodat 105", "صُدَاعٌ", "صُدَاعٌ", "Pusing"),
                    $this->data_kata("", "Mufrodat 105", "صُدَاعٌ نِصْفِيٌّ", "صُدَاعٌ نِصْفِيٌّ", "Migrain"),
                    $this->data_kata("", "Mufrodat 105", "مَغْصٌ", "مَغْصٌ", "Mules"),
                    $this->data_kata("", "Mufrodat 105", "تِيْفُوْئِيْدٌ", "تِيْفُوْئِيْدٌ", "Tifus"),
                    $this->data_kata("", "Mufrodat 105", "حُمَّى", "حُمَّى", "Demam"),
                    $this->data_kata("", "Mufrodat 105", "ذَيْلٌ", "ذَيْلٌ", "Usus Buntu"),
                    $this->data_kata("", "Mufrodat 105", "مَلَارِيَا", "مَلَارِيَا", "Malaria"),
                    $this->data_kata("", "Mufrodat 105", "سَرَطَانٌ", "سَرَطَانٌ", "Kanker"),

                    $this->data_kata("", "Mufrodat 106", "إِسْهَالٌ", "إِسْهَالٌ", "Diare"),
                    $this->data_kata("", "Mufrodat 106", "زُكَّامٌ", "زُكَّامٌ", "Flu"),
                    $this->data_kata("", "Mufrodat 106", "أَنِيْمِيَا", "أَنِيْمِيَا", "Anemia"),
                    $this->data_kata("", "Mufrodat 106", "رَاعِفٌ", "رَاعِفٌ", "Mimisan"),
                    $this->data_kata("", "Mufrodat 106", "وَرَمٌ", "وَرَمٌ", "Tumor"),
                    $this->data_kata("", "Mufrodat 106", "اِرْتِفَاعُ ضَغْطِ الدَّمِ", "اِرْتِفَاعُ ضَغْطِ الدَّمِ", "Darah Tinggi"),
                    $this->data_kata("", "Mufrodat 106", "اِنْخِفَاضُ ضَغْطِ الدَّمِ", "اِنْخِفَاضُ ضَغْطِ الدَّمِ", "Darah Rendah"),
                    $this->data_kata("", "Mufrodat 106", "مُوَرَّمٌ", "مُوَرَّمٌ", "Bengkak"),
                    $this->data_kata("", "Mufrodat 106", "كَسِيْحٌ", "كَسِيْحٌ", "Lumpuh"),

                    $this->data_kata("", "Mufrodat 107", "عَالَجَ-يُعَالِجُ-مُعَالَجَةً", "عَالَجَ-يُعَالِجُ-مُعَالَجَةً", "Mengobati"),
                    $this->data_kata("", "Mufrodat 107", "أَزَالَ-يُزِيْلُ-إِزَالَةً", "أَزَالَ-يُزِيْلُ-إِزَالَةً", "Menghilangkan"),
                    $this->data_kata("", "Mufrodat 107", "اِنْتَظَرَ-يَنْتَظِرُ-إِنْتِظَارًا", "اِنْتَظَرَ-يَنْتَظِرُ-إِنْتِظَارًا", "Menunggu"),
                    $this->data_kata("", "Mufrodat 107", "حَقَنَ-يَحْقُنُ-حُقْنًا", "حَقَنَ-يَحْقُنُ-حُقْنًا", "Menyuntik"),
                    $this->data_kata("", "Mufrodat 107", "مَسَحَ-يَمْسَحُ-مَسْحًا", "مَسَحَ-يَمْسَحُ-مَسْحًا", "Menghapus"),
                    $this->data_kata("", "Mufrodat 107", "فَحَصَ-يَفْحَصُ-فَحْصًا", "فَحَصَ-يَفْحَصُ-فَحْصًا", "Memeriksa"),
                    $this->data_kata("", "Mufrodat 107", "حَمَلَ-يَحْمِلُ-حَمْلًا", "حَمَلَ-يَحْمِلُ-حَمْلًا", "Membawa"),
                    $this->data_kata("", "Mufrodat 107", "أَعْطَى-يُعْطِى-إِعْطَاءً", "أَعْطَى-يُعْطِى-إِعْطَاءً", "Memberi"),
                    $this->data_kata("", "Mufrodat 107", "زَادَ-يَزِيْدُ-زِيَادَةً", "زَادَ-يَزِيْدُ-زِيَادَةً", "Menambah"),

                    $this->data_kata("", "Mufrodat 108", "اِزْدَادَ-يَزدَادُ-اِزْدِيَادًا", "اِزْدَادَ-يَزدَادُ-اِزْدِيَادًا", "Bertambah"),
                    $this->data_kata("", "Mufrodat 108", "قَاءَ-يَقِيْئُ-قَيْئًا", "قَاءَ-يَقِيْئُ-قَيْئًا", "Muntah"),
                    $this->data_kata("", "Mufrodat 108", "سَعَلَ-يَسْعُلُ-سُعَالًا", "سَعَلَ-يَسْعُلُ-سُعَالًا", "Batuk"),
                    $this->data_kata("", "Mufrodat 108", "مَرَّضَ-يُمَرِّضُ-تَمْرِيْضًا", "مَرَّضَ-يُمَرِّضُ-تَمْرِيْضًا", "Merawat"),
                    $this->data_kata("", "Mufrodat 108", "ضَمَّدَ-يُضَمِّدُ-تَضْمِيْدًا", "ضَمَّدَ-يُضَمِّدُ-تَضْمِيْدًا", "Memperban"),
                    $this->data_kata("", "Mufrodat 108", "شُفِيَ-يُشْفَى/تَعَافَى", "شُفِيَ-يُشْفَى/تَعَافَى", "Sembuh"),
                    $this->data_kata("", "Mufrodat 108", "أَعْدَى-يُعْدِي-إِعْدَاءً", "أَعْدَى-يُعْدِي-إِعْدَاءً", "Menular"),
                    $this->data_kata("", "Mufrodat 108", "حَسَبَ-يَحْسُبُ-حِسَابًا", "حَسَبَ-يَحْسُبُ-حِسَابًا", "Menghitung"),
                    $this->data_kata("", "Mufrodat 108", "حَسِبَ-يَحْسِبُ-حِسْبَانًا", "حَسِبَ-يَحْسِبُ-حِسْبَانًا", "Menyangka"),

                    $this->data_kata("", "Mufrodat 109", "كَلْبٌ", "كَلْبٌ", "Anjing"),
                    $this->data_kata("", "Mufrodat 109", "قِطٌّ", "قِطٌّ", "Kucing"),
                    $this->data_kata("", "Mufrodat 109", "أَرْنَبٌ", "أَرْنَبٌ", "Kelinci"),
                    $this->data_kata("", "Mufrodat 109", "فَأْرٌ", "فَأْرٌ", "Tikus"),
                    $this->data_kata("", "Mufrodat 109", "ثَوْرٌ", "ثَوْرٌ", "Banteng"),
                    $this->data_kata("", "Mufrodat 109", "خَرُوْفٌ", "خَرُوْفٌ", "Domba"),
                    $this->data_kata("", "Mufrodat 109", "خِنْزِيْرٌ", "خِنْزِيْرٌ", "Babi"),
                    $this->data_kata("", "Mufrodat 109", "بَقَرٌ", "بَقَرٌ", "Sapi"),

                    $this->data_kata("", "Mufrodat 110", "جَامُوْسٌ", "جَامُوْسٌ", "Kerbau"),
                    $this->data_kata("", "Mufrodat 110", "حِصَانٌ", "حِصَانٌ", "Kuda"),
                    $this->data_kata("", "Mufrodat 110", "دَجَاجٌ", "دَجَاجٌ", "Ayam"),
                    $this->data_kata("", "Mufrodat 110", "غَنَمٌ", "غَنَمٌ", "Kambing"),
                    $this->data_kata("", "Mufrodat 110", "زَرَافَةٌ", "زَرَافَةٌ", "Jerapah"),
                    $this->data_kata("", "Mufrodat 110", "نَحْلٌ", "نَحْلٌ", "Lebah"),
                    $this->data_kata("", "Mufrodat 110", "ضِفْدَاعٌ", "ضِفْدَاعٌ", "Katak"),
                    $this->data_kata("", "Mufrodat 110", "قُنْفُذٌ", "قُنْفُذٌ", "Landak"),

                    $this->data_kata("", "Mufrodat 111", "سَرَطَانٌ", "سَرَطَانٌ", "Kepiting"),
                    $this->data_kata("", "Mufrodat 111", "كَرْكَدَّانٌ", "كَرْكَدَّانٌ", "Badak"),
                    $this->data_kata("", "Mufrodat 111", "نَمِرٌ", "نَمِرٌ", "Macan"),
                    $this->data_kata("", "Mufrodat 111", "ذِئْبٌ", "ذِئْبٌ", "Srigala"),
                    $this->data_kata("", "Mufrodat 111", "سِنْجَابٌ", "سِنْجَابٌ", "Tupai"),
                    $this->data_kata("", "Mufrodat 111", "أَسَدٌ", "أَسَدٌ", "Singa"),
                    $this->data_kata("", "Mufrodat 111", "فَرَسٌ", "فَرَسٌ", "Kuda Betina"),
                    $this->data_kata("", "Mufrodat 111", "حِمَارٌ", "حِمَارٌ", "Keledai"),

                    $this->data_kata("", "Mufrodat 112", "حِمَارُ الزَّرَدِ", "حِمَارُ الزَّرَدِ", "Zebra"),
                    $this->data_kata("", "Mufrodat 112", "حَيَّةٌ", "حَيَّةٌ", "Ular"),
                    $this->data_kata("", "Mufrodat 112", "وَرَلٌ", "وَرَلٌ", "Kadal"),
                    $this->data_kata("", "Mufrodat 112", "قَمْلٌ", "قَمْلٌ", "Kutu"),
                    $this->data_kata("", "Mufrodat 112", "ضَبٌّ", "ضَبٌّ", "Biawak"),
                    $this->data_kata("", "Mufrodat 112", "حِرْبَاءٌ", "حِرْبَاءٌ", "Bunglon"),
                    $this->data_kata("", "Mufrodat 112", "تِمْسَاحٌ", "تِمْسَاحٌ", "Buaya"),
                    $this->data_kata("", "Mufrodat 112", "إِنْكِلِيْسٌ", "إِنْكِلِيْسٌ", "Belut"),

                    $this->data_kata("", "Mufrodat 113", "دُبٌّ", "دُبٌّ", "Beruang"),
                    $this->data_kata("", "Mufrodat 113", "صَرْصُوْرُ اللَّيْلِ", "صَرْصُوْرُ اللَّيْلِ", "Jangkrik"),
                    $this->data_kata("", "Mufrodat 113", "وَزَغَةٌ", "وَزَغَةٌ", "Cicak"),
                    $this->data_kata("", "Mufrodat 113", "فِيْلٌ", "فِيْلٌ", "Gajah"),
                    $this->data_kata("", "Mufrodat 113", "نَمْلٌ", "نَمْلٌ", "Semut"),
                    $this->data_kata("", "Mufrodat 113", "نَمْلَةٌ بَيْضَاءُ", "نَمْلَةٌ بَيْضَاءُ", "Rayap"),
                    $this->data_kata("", "Mufrodat 113", "بَعُوْضَةٌ", "بَعُوْضَةٌ", "Nyamuk"),
                    $this->data_kata("", "Mufrodat 113", "خُفَاشٌ", "خُفَاشٌ", "Kelelawar"),

                    $this->data_kata("", "Mufrodat 114", "جَمَلٌ", "جَمَلٌ", "Unta"),
                    $this->data_kata("", "Mufrodat 114", "غَزَالٌ", "غَزَالٌ", "Kijang"),
                    $this->data_kata("", "Mufrodat 114", "قِرْدٌ", "قِرْدٌ", "Kera"),
                    $this->data_kata("", "Mufrodat 114", "أُورَانْغُوْتَانْ", "أُورَانْغُوْتَانْ", "Orangutan"),
                    $this->data_kata("", "Mufrodat 114", "عَقْرَبٌ", "عَقْرَبٌ", "Kalajengking"),
                    $this->data_kata("", "Mufrodat 114", "حُنْفَسَاءُ", "حُنْفَسَاءُ", "Kumbang"),
                    $this->data_kata("", "Mufrodat 114", "جَرَادٌ", "جَرَادٌ", "Belalang"),
                    $this->data_kata("", "Mufrodat 114", "يَرَقَةٌ", "يَرَقَةٌ", "Ulat"),

                    $this->data_kata("", "Mufrodat 115", "غُرَابٌ", "غُرَابٌ", "Burung gagak"),
                    $this->data_kata("", "Mufrodat 115", "نُعَامَةٌ", "نُعَامَةٌ", "Burung onta"),
                    $this->data_kata("", "Mufrodat 115", "بَطٌّ", "بَطٌّ", "Bebek"),
                    $this->data_kata("", "Mufrodat 115", "خُطَّافٌ", "خُطَّافٌ", "Walet"),
                    $this->data_kata("", "Mufrodat 115", "بِطْرِيْقٌ", "بِطْرِيْقٌ", "Pinguin"),
                    $this->data_kata("", "Mufrodat 115", "بَبْغَاءٌ", "بَبْغَاءٌ", "Burung beo"),
                    $this->data_kata("", "Mufrodat 115", "دِيْكٌ", "دِيْكٌ", "Ayam jago"),
                    $this->data_kata("", "Mufrodat 115", "طَيْرٌ", "طَيْرٌ", "Burung"),

                    $this->data_kata("", "Mufrodat 116", "وَزٌّ", "وَزٌّ", "Angsa"),
                    $this->data_kata("", "Mufrodat 116", "بُوْمَةٌ", "بُوْمَةٌ", "Burung hantu"),
                    $this->data_kata("", "Mufrodat 116", "طَاوُوْسٌ", "طَاوُوْسٌ", "Merak"),
                    $this->data_kata("", "Mufrodat 116", "حَمَامَةٌ", "حَمَامَةٌ", "Merpati"),
                    $this->data_kata("", "Mufrodat 116", "حَلَزُوْن", "حَلَزُوْن", "Keong, siput"),
                    $this->data_kata("", "Mufrodat 116", "سُلَحْفَاةٌ", "سُلَحْفَاةٌ", "Kura-kura"),
                    $this->data_kata("", "Mufrodat 116", "حَيْتَانٌ", "حَيْتَانٌ", "Ikan Paus"),
                    $this->data_kata("", "Mufrodat 116", "قِرَشٌ", "قِرَشٌ", "Ikan Hiu"),

                    $this->data_kata("", "Mufrodat 117", "صَدَفٌ", "صَدَفٌ", "Kerang"),
                    $this->data_kata("", "Mufrodat 117", "قُرْمُوْطٌ", "قُرْمُوْطٌ", "Lele"),
                    $this->data_kata("", "Mufrodat 117", "رِيْشٌ", "رِيْشٌ", "Bulu"),
                    $this->data_kata("", "Mufrodat 117", "بِرَازٌ", "بِرَازٌ", "Kotoran"),
                    $this->data_kata("", "Mufrodat 117", "جَنَاحٌ", "جَنَاحٌ", "Sayap"),
                    $this->data_kata("", "Mufrodat 117", "ذَيْلٌ", "ذَيْلٌ", "Ekor"),
                    $this->data_kata("", "Mufrodat 117", "خُرْطُوْمٌ", "خُرْطُوْمٌ", "Belalai"),

                    $this->data_kata("", "Mufrodat 118", "أَطْعَمَ-يُطْعِمُ-إِطْعَامًا", "أَطْعَمَ-يُطْعِمُ-إِطْعَامًا", "Memberi makan"),
                    $this->data_kata("", "Mufrodat 118", "نَبَحَ-يَنْبَحُ-نَبْحًا", "نَبَحَ-يَنْبَحُ-نَبْحًا", "Menggonggong"),
                    $this->data_kata("", "Mufrodat 118", "شَكَّ-يَشُكُّ-شَكًّا", "شَكَّ-يَشُكُّ-شَكًّا", "Mencakar"),
                    $this->data_kata("", "Mufrodat 118", "حَرَزَ-يَحْرُزُ-حَرْزًا", "حَرَزَ-يَحْرُزُ-حَرْزًا", "Memelihara"),
                    $this->data_kata("", "Mufrodat 118", "لَسَعَ-يَلْسَعُ-لَسْعًا", "لَسَعَ-يَلْسَعُ-لَسْعًا", "Menyengat"),
                    $this->data_kata("", "Mufrodat 118", "اِرْتَقَى-يَرْتَقِى-اِرْتِقَاءً", "اِرْتَقَى-يَرْتَقِى-اِرْتِقَاءً", "Memanjat"),
                    $this->data_kata("", "Mufrodat 118", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "Memanjat"),

                    $this->data_kata("", "Mufrodat 119", "طَارَ-يَطِيْرُ-طَيْرًا", "طَارَ-يَطِيْرُ-طَيْرًا", "Terbang"),
                    $this->data_kata("", "Mufrodat 119", "بَاضَ-يَبِيْضُ-بَيْضًا", "بَاضَ-يَبِيْضُ-بَيْضًا", "Bertelur"),
                    $this->data_kata("", "Mufrodat 119", "تَغَرَّدَ-يَتَغَرَّدُ-تَغَرُّدًا", "تَغَرَّدَ-يَتَغَرَّدُ-تَغَرُّدًا", "Berkicau"),
                    $this->data_kata("", "Mufrodat 119", "صَادَ-يَصِيْدُ-صَيْدًا", "صَادَ-يَصِيْدُ-صَيْدًا", "Berburu"),
                    $this->data_kata("", "Mufrodat 119", "رَعَى-يَرْعَى-رَعْيًا", "رَعَى-يَرْعَى-رَعْيًا", "Menggembala"),
                    $this->data_kata("", "Mufrodat 119", "نَطَحَ-يَنْطَحُ-نَطْحًا", "نَطَحَ-يَنْطَحُ-نَطْحًا", "Menanduk"),
                    $this->data_kata("", "Mufrodat 119", "مَاءَ-يَمُوْءُ-مُوَاءً", "مَاءَ-يَمُوْءُ-مُوَاءً", "Mengeong"),

                    $this->data_kata("", "Mufrodat 120", "تُفَّاحٌ", "تُفَّاحٌ", "Apel"),
                    $this->data_kata("", "Mufrodat 120", "عِنَبٌ", "عِنَبٌ", "Anggur"),
                    $this->data_kata("", "Mufrodat 120", "كُمِثْرَي", "كُمِثْرَي", "Pir"),
                    $this->data_kata("", "Mufrodat 120", "مَوْزٌ", "مَوْزٌ", "Pisang"),
                    $this->data_kata("", "Mufrodat 120", "بَابَايَا", "بَابَايَا", "Pepaya"),
                    $this->data_kata("", "Mufrodat 120", "مَنْجَا", "مَنْجَا", "Mangga"),
                    $this->data_kata("", "Mufrodat 120", "نَرَاجِيْلُ", "نَرَاجِيْلُ", "Kelapa"),
                    $this->data_kata("", "Mufrodat 120", "اَفُوْكَادُو", "اَفُوْكَادُو", "Avokad"),

                    $this->data_kata("", "Mufrodat 121", "شَمَامٌ", "شَمَامٌ", "Melon"),
                    $this->data_kata("", "Mufrodat 121", "بِطِّيْخٌ", "بِطِّيْخٌ", "Semangka"),
                    $this->data_kata("", "Mufrodat 121", "جَوْزُ الجَنْدَمِ", "جَوْزُ الجَنْدَمِ", "Manggis"),
                    $this->data_kata("", "Mufrodat 121", "بُرْتُقَالٌ", "بُرْتُقَالٌ", "Jeruk"),
                    $this->data_kata("", "Mufrodat 121", "تَمْرٌ", "تَمْرٌ", "Kurma"),
                    $this->data_kata("", "Mufrodat 121", "فَرَاوَلِةٌ", "فَرَاوَلِةٌ", "Strawberry"),
                    $this->data_kata("", "Mufrodat 121", "رُمَّانٌ", "رُمَّانٌ", "Delima"),
                    $this->data_kata("", "Mufrodat 121", "فَاكِهَةُ التِّنِيْنَ", "فَاكِهَةُ التِّنِيْنَ", "Buah naga"),

                    $this->data_kata("", "Mufrodat 122", "أَنَانَاسُ", "أَنَانَاسُ", "Nanas"),
                    $this->data_kata("", "Mufrodat 122", "رَمْبُوْتَانْ", "رَمْبُوْتَانْ", "Rambutan"),
                    $this->data_kata("", "Mufrodat 122", "دُوْرِيَانْ", "دُوْرِيَانْ", "Durian"),
                    $this->data_kata("", "Mufrodat 122", "دُوْرِيَانْ", "دُوْرِيَانْ", "Durian"),
                    $this->data_kata("", "Mufrodat 122", "طَمَاطِمْ", "طَمَاطِمْ", "Tomat"),
                    $this->data_kata("", "Mufrodat 122", "جَوَّافَةٌ", "جَوَّافَةٌ", "Jambu"),
                    $this->data_kata("", "Mufrodat 122", "ذُرَّةٌ", "ذُرَّةٌ", "Jagung"),

                    $this->data_kata("", "Mufrodat 123", "حَصَدَ-يَحْصُدُ-حَصَادًا", "حَصَدَ-يَحْصُدُ-حَصَادًا", "Memanen"),
                    $this->data_kata("", "Mufrodat 123", "زَرَعَ-يَزْرَعُ-زَرْعًا / زِرَاعَةً", "زَرَعَ-يَزْرَعُ-زَرْعًا", "Menanam"),
                    $this->data_kata("", "Mufrodat 123", "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا", "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا", "Merawat"),
                    $this->data_kata("", "Mufrodat 123", "قَطَفَ-يَقْطُفُ-قَطْفًا", "قَطَفَ-يَقْطُفُ-قَطْفًا", "Memetik"),
                    $this->data_kata("", "Mufrodat 123", "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا", "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا", "Memupuk"),
                    $this->data_kata("", "Mufrodat 123", "عَزَقَ-يَعْزِقُ-عَزْقًا", "عَزَقَ-يَعْزِقُ-عَزْقًا", "Mencangkul"),
                    $this->data_kata("", "Mufrodat 123", "حَرَثَ-يَحْرِثُ-حَرْثًا", "حَرَثَ-يَحْرِثُ-حَرْثًا", "Membajak"),

                    $this->data_kata("", "Mufrodat 124", "مَطْبَخٌ", "مَطْبَخٌ", "Dapur"),
                    $this->data_kata("", "Mufrodat 124", "صَيْدَلِيَّةٌ", "صَيْدَلِيَّةٌ", "Apotek"),
                    $this->data_kata("", "Mufrodat 124", "مَصْرَفٌ", "مَصْرَفٌ", "Bank"),
                    $this->data_kata("", "Mufrodat 124", "مَصْنَعٌ", "مَصْنَعٌ", "Pabrik"),
                    $this->data_kata("", "Mufrodat 124", "سُوْقٌ", "سُوْقٌ", "Pasar"),
                    $this->data_kata("", "Mufrodat 124", "مَوْلٌ", "مَوْلٌ", "Mall"),
                    $this->data_kata("", "Mufrodat 124", "مَوْقِفُ السَّيَّارَةِ", "مَوْقِفُ السَّيَّارَةِ", "Terminal"),
                    $this->data_kata("", "Mufrodat 124", "مَحَطَّةُ القِطَارِ", "مَحَطَّةُ القِطَارِ", "Stasiun"),

                    $this->data_kata("", "Mufrodat 125", "مَحَطَّةُ الْبِنْزِيْنِ", "مَحَطَّةُ الْبِنْزِيْنِ", "Pom bensin"),
                    $this->data_kata("", "Mufrodat 125", "مَطَارٌ", "مَطَارٌ", "Bandara"),
                    $this->data_kata("", "Mufrodat 125", "مِيْنَاءٌ", "مِيْنَاءٌ", "Pelabuhan"),
                    $this->data_kata("", "Mufrodat 125", "مُسْتَوْدَعٌ", "مُسْتَوْدَعٌ", "Gudang"),
                    $this->data_kata("", "Mufrodat 125", "مَكْتَبَةٌ", "مَكْتَبَةٌ", "Perpustakaan"),
                    $this->data_kata("", "Mufrodat 125", "فُنْدُقٌ", "فُنْدُقٌ", "Hotel"),
                    $this->data_kata("", "Mufrodat 125", "مَقْهَى", "مَقْهَى", "Café"),
                    $this->data_kata("", "Mufrodat 125", "مَمْلَكَةٌ", "مَمْلَكَةٌ", "Kerajaan"),

                    $this->data_kata("", "Mufrodat 126", "مَحْكَمَةٌ", "مَحْكَمَةٌ", "Pengadilan"),
                    $this->data_kata("", "Mufrodat 126", "حَبْسٌ", "حَبْسٌ", "Penjara"),
                    $this->data_kata("", "Mufrodat 126", "دَوْرَةٌ", "دَوْرَةٌ", "Kursusan"),
                    $this->data_kata("", "Mufrodat 126", "إِدَارَةٌ", "إِدَارَةٌ", "Kantor"),
                    $this->data_kata("", "Mufrodat 126", "حَانُوْتٌ", "حَانُوْتٌ", "Warung"),
                    $this->data_kata("", "Mufrodat 126", "مَقْصَفٌّ", "مَقْصَفٌّ", "Kantin"),
                    $this->data_kata("", "Mufrodat 126", "دُكَّانٌ", "دُكَّانٌ", "Toko"),
                    $this->data_kata("", "Mufrodat 126", "شَارِعٌ", "شَارِعٌ", "Jalan"),

                    $this->data_kata("", "Mufrodat 127", "مَتْحَفٌ", "مَتْحَفٌ", "Museum"),
                    $this->data_kata("", "Mufrodat 127", "مَعْمَلٌ", "مَعْمَلٌ", "Laboratorium"),
                    $this->data_kata("", "Mufrodat 127", "مَطْعَمٌ", "مَطْعَمٌ", "Rumah makan"),
                    $this->data_kata("", "Mufrodat 127", "حَدِيْقَةٌ", "حَدِيْقَةٌ", "Kebun"),
                    $this->data_kata("", "Mufrodat 127", "بُسْتَانٌ", "بُسْتَانٌ", "Taman"),
                    $this->data_kata("", "Mufrodat 127", "مَزْرَعَةٌ", "مَزْرَعَةٌ", "Sawah"),
                    $this->data_kata("", "Mufrodat 127", "حُجْرَةٌ", "حُجْرَةٌ", "Kamar"),
                    $this->data_kata("", "Mufrodat 127", "شُرْفَةٌ", "شُرْفَةٌ", "Teras"),

                    $this->data_kata("", "Mufrodat 128", "مَسْكَنٌ", "مَسْكَنٌ", "Asrama"),
                    $this->data_kata("", "Mufrodat 128", "مَأْوَى", "مَأْوَى", "Kost"),
                    $this->data_kata("", "Mufrodat 128", "شَقَّةٌ", "شَقَّةٌ", "Apartement"),
                    $this->data_kata("", "Mufrodat 128", "مَقْبَرَةٌ", "مَقْبَرَةٌ", "Kuburan"),
                    $this->data_kata("", "Mufrodat 128", "مَسْجِدٌ", "مَسْجِدٌ", "Masjid"),
                    $this->data_kata("", "Mufrodat 128", "مَعْهَدٌ", "مَعْهَدٌ", "Pondok"),
                    $this->data_kata("", "Mufrodat 128", "مَدْرَسَةٌ", "مَدْرَسَةٌ", "Sekolah"),
                    $this->data_kata("", "Mufrodat 128", "جَامِعَةٌ", "جَامِعَةٌ", "Universitas"),

                    $this->data_kata("", "Mufrodat 129", "كَنِيْسَةٌ", "كَنِيْسَةٌ", "Gereja"),
                    $this->data_kata("", "Mufrodat 129", "هَيْكَلٌ", "هَيْكَلٌ", "Candi"),
                    $this->data_kata("", "Mufrodat 129", "قَصْرٌ", "قَصْرٌ", "Istana"),
                    $this->data_kata("", "Mufrodat 129", "كُوْخٌ", "كُوْخٌ", "Gubuk"),
                    $this->data_kata("", "Mufrodat 129", "حَظِيْرَةٌ", "حَظِيْرَةٌ", "Kandang"),
                    $this->data_kata("", "Mufrodat 129", "مَيْدَانُ الْمَدِيْنَةِ", "مَيْدَانُ الْمَدِيْنَةِ", "Alun-alun"),
                    $this->data_kata("", "Mufrodat 129", "بُرْجٌ", "بُرْجٌ", "Menara"),

                    $this->data_kata("", "Mufrodat 130", "جَاءَ-يَجِيْئُ-مَجِيْئًا", "جَاءَ-يَجِيْئُ-مَجِيْئًا", "Datang"),
                    $this->data_kata("", "Mufrodat 130", "أَتَى-يَأْتِي-اِتْيَانًا", "أَتَى-يَأْتِي-اِتْيَانًا", "Datang"),
                    $this->data_kata("", "Mufrodat 130", "حَضَرَ-يَحْضُرُ-حُضُورًا", "حَضَرَ-يَحْضُرُ-حُضُورًا", "Hadir"),
                    $this->data_kata("", "Mufrodat 130", "طَلَبَ-يَطْلُبُ-طَلَبًا", "طَلَبَ-يَطْلُبُ-طَلَبًا", "Meminta"),
                    $this->data_kata("", "Mufrodat 130", "سَكَنَ-يَسْكُنُ-سُكُوْنًا", "سَكَنَ-يَسْكُنُ-سُكُوْنًا", "Tinggal"),
                    $this->data_kata("", "Mufrodat 130", "بَاتَ-يَبِيْتُ-بَيْتًا", "بَاتَ-يَبِيْتُ-بَيْتًا", "Menginap"),

                    $this->data_kata("", "Mufrodat 131", "بَنَى-يَبْنِي-بِنَاءً", "بَنَى-يَبْنِي-بِنَاءً", "Membangun"),
                    $this->data_kata("", "Mufrodat 131", "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا", "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا", "Memperbaiki"),
                    $this->data_kata("", "Mufrodat 131", "قَوَّضَ-يُقَوِّضُ-تَقْوِيْضًا", "قَوَّضَ-يُقَوِّضُ-تَقْوِيْضًا", "Membongkar"),
                    $this->data_kata("", "Mufrodat 131", "سَافَرَ-يُسَافِرُ-مُسَافَرَةً", "سَافَرَ-يُسَافِرُ-مُسَافَرَةً", "Bepergian"),
                    $this->data_kata("", "Mufrodat 131", "عَاشَ-يَعِيْشُ-عَيْشًا", "عَاشَ-يَعِيْشُ-عَيْشًا", "Hidup"),
                    $this->data_kata("", "Mufrodat 131", "حَيِيَ-يَحْيَى-حَيَاةً", "حَيِيَ-يَحْيَى-حَيَاةً", "Hidup"),

                    $this->data_kata("", "Mufrodat 132", "شَمْسٌ", "شَمْسٌ", "Matahari"),
                    $this->data_kata("", "Mufrodat 132", "قَمَرٌ", "قَمَرٌ", "Bulan"),
                    $this->data_kata("", "Mufrodat 132", "جَبَلٌ", "جَبَلٌ", "Gunung"),
                    $this->data_kata("", "Mufrodat 132", "بَحْرٌ", "بَحْرٌ", "Laut"),
                    $this->data_kata("", "Mufrodat 132", "سَمَاءٌ", "سَمَاءٌ", "Langit"),
                    $this->data_kata("", "Mufrodat 132", "نَجْمٌ", "نَجْمٌ", "Bintang"),
                    $this->data_kata("", "Mufrodat 132", "كَوْكَبٌ", "كَوْكَبٌ", "Planet"),
                    $this->data_kata("", "Mufrodat 132", "جَوٌّ", "جَوٌّ", "Angkasa"),

                    $this->data_kata("", "Mufrodat 133", "قُزَحٍ", "قُزَحٍ", "Pelangi"),
                    $this->data_kata("", "Mufrodat 133", "أَرْضٌ", "أَرْضٌ", "Bumi"),
                    $this->data_kata("", "Mufrodat 133", "رَمْلٌ", "رَمْلٌ", "Pasir"),
                    $this->data_kata("", "Mufrodat 133", "مَشْلُوْلٌ", "مَشْلُوْلٌ", "Lumpur"),
                    $this->data_kata("", "Mufrodat 133", "حَصْبَاءُ", "حَصْبَاءُ", "Kerikil"),
                    $this->data_kata("", "Mufrodat 133", "صَحْرَاءُ", "صَحْرَاءُ", "Padang pasir"),
                    $this->data_kata("", "Mufrodat 133", "حَجَرٌ", "حَجَرٌ", "Batu"),
                    $this->data_kata("", "Mufrodat 133", "مَرْجَانٌ", "مَرْجَانٌ", "Karang"),

                    $this->data_kata("", "Mufrodat 134", "سَفْحٌ", "سَفْحٌ", "Lereng"),
                    $this->data_kata("", "Mufrodat 134", "قِمَّةُ الْجَبَلِ", "قِمَّةُ الْجَبَلِ", "Puncak gunung"),
                    $this->data_kata("", "Mufrodat 134", "جُرُفٌ", "جُرُفٌ", "Tebing"),
                    $this->data_kata("", "Mufrodat 134", "شِعْبٌ", "شِعْبٌ", "Lembah"),
                    $this->data_kata("", "Mufrodat 134", "جُرْفٌ", "جُرْفٌ", "Jurang"),
                    $this->data_kata("", "Mufrodat 134", "سَدِيْمٌ", "سَدِيْمٌ", "Kabut"),
                    $this->data_kata("", "Mufrodat 134", "مُغَيِّمٌ", "مُغَيِّمٌ", "Berawan"),
                    $this->data_kata("", "Mufrodat 134", "سَحَابٌ", "سَحَابٌ", "Awan"),

                    $this->data_kata("", "Mufrodat 135", "ثَلْجٌ", "ثَلْجٌ", "Salju"),
                    $this->data_kata("", "Mufrodat 135", "هَضْبَةٌ", "هَضْبَةٌ", "Bukit"),
                    $this->data_kata("", "Mufrodat 135", "بُخَارٌ", "بُخَارٌ", "Uap"),
                    $this->data_kata("", "Mufrodat 135", "دُخَانٌ", "دُخَانٌ", "Asap"),
                    $this->data_kata("", "Mufrodat 135", "شَلَالٌ", "شَلَالٌ", "Air Terjun"),
                    $this->data_kata("", "Mufrodat 135", "نَهْرٌ", "نَهْرٌ", "Sungai"),
                    $this->data_kata("", "Mufrodat 135", "سَيْلٌ", "سَيْلٌ", "Banjir"),
                    $this->data_kata("", "Mufrodat 135", "شَاطِئٌ", "شَاطِئٌ", "Pantai"),

                    $this->data_kata("", "Mufrodat 136", "قَارَةٌ", "قَارَةٌ", "Benua"),
                    $this->data_kata("", "Mufrodat 136", "مُحِيْطٌ", "مُحِيْطٌ", "Samudra"),
                    $this->data_kata("", "Mufrodat 136", "مَوْجٌ", "مَوْجٌ", "Ombak"),
                    $this->data_kata("", "Mufrodat 136", "جَزِيْرَةٌ", "جَزِيْرَةٌ", "Pulau"),
                    $this->data_kata("", "Mufrodat 136", "غَابَةٌ", "غَابَةٌ", "Hutan"),
                    $this->data_kata("", "Mufrodat 136", "غَارٌ", "غَارٌ", "Goa"),

                    $this->data_kata("", "Mufrodat 137", "خَلَقَ-يَخْلُقُ-خَلْقًا", "خَلَقَ-يَخْلُقُ-خَلْقًا", "Menciptakan"),
                    $this->data_kata("", "Mufrodat 137", "طَلَعَ-يَطْلُعُ-طُلُوْعًا", "طَلَعَ-يَطْلُعُ-طُلُوْعًا", "Muncul"),
                    $this->data_kata("", "Mufrodat 137", "غَرَبَ-يَغْرُبُ-غُرُوْبًا", "غَرَبَ-يَغْرُبُ-غُرُوْبًا", "Tenggelam"),
                    $this->data_kata("", "Mufrodat 137", "اِحْمَرَّ-يَحْمَرُّ-اِحْمِرَارًا", "اِحْمَرَّ-يَحْمَرُّ-اِحْمِرَارًا", "Memerah"),
                    $this->data_kata("", "Mufrodat 137", "اِصْفَرَّ-يَصْفَرُّ-اِصْفِرَارًا", "اِصْفَرَّ-يَصْفَرُّ-اِصْفِرَارًا", "Menguning"),
                    $this->data_kata("", "Mufrodat 137", "اِبْيَضَّ-يَبْيَضُّ-اِبْيِضَاضًا", "اِبْيَضَّ-يَبْيَضُّ-اِبْيِضَاضًا", "Memutih"),
                    $this->data_kata("", "Mufrodat 137", "اِسْوَدَّ-يَسْوَدُّ-اِسْوِدَادًا", "اِسْوَدَّ-يَسْوَدُّ-اِسْوِدَادًا", "Menghitam"),
                    $this->data_kata("", "Mufrodat 137", "أَشْرَقَ-يُشْرِقُ-إِشْرَاقًا", "أَشْرَقَ-يُشْرِقُ-إِشْرَاقًا", "Terbit"),

                    $this->data_kata("", "Mufrodat 138", "صَوَّرَ-يُصَوِّرُ-تَصْوِيْرًا", "صَوَّرَ-يُصَوِّرُ-تَصْوِيْرًا", "Memfoto"),
                    $this->data_kata("", "Mufrodat 138", "زَارَ-يَزُوْرُ-زِيَارَةً", "زَارَ-يَزُوْرُ-زِيَارَةً", "Mengunjungi"),
                    $this->data_kata("", "Mufrodat 138", "هَلَكَ-يَهْلِكُ-هَلَاكًا", "هَلَكَ-يَهْلِكُ-هَلَاكًا", "Hancur"),
                    $this->data_kata("", "Mufrodat 138", "أَهْلَكَ-يُهْلِكُ-اِهْلَاكًا", "أَهْلَكَ-يُهْلِكُ-اِهْلَاكًا", "Menghancurkan"),
                    $this->data_kata("", "Mufrodat 138", "شَكَرَ-يَشْكُرُ-شُكْرًا", "شَكَرَ-يَشْكُرُ-شُكْرًا", "Bersyukur"),
                    $this->data_kata("", "Mufrodat 138", "اِسْتَخْدَمَ-يَسْتَخْدِمُ-اِسْتِخْدَامًا", "اِسْتَخْدَمَ-يَسْتَخْدِمُ-اِسْتِخْدَامًا", "Menggunakan"),
                    $this->data_kata("", "Mufrodat 138", "تَعَجَّبَ-يَتَعَجَّبُ-تَعَجُّبًا", "تَعَجَّبَ-يَتَعَجَّبُ-تَعَجُّبًا", "Kagum"),
                    $this->data_kata("", "Mufrodat 138", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "Mendaki"),

                    $this->data_kata("", "Mufrodat 139", "مُعَلِّمٌ", "مُعَلِّمٌ", "Pengajar"),
                    $this->data_kata("", "Mufrodat 139", "مُحَاضِرً", "مُحَاضِرً", "Dosen"),
                    $this->data_kata("", "Mufrodat 139", "طَالِبٌ", "طَالِبٌ", "Murid"),
                    $this->data_kata("", "Mufrodat 139", "طَبِيْبٌ", "طَبِيْبٌ", "Dokter"),
                    $this->data_kata("", "Mufrodat 139", "مُمَرِّضٌ", "مُمَرِّضٌ", "Perawat"),
                    $this->data_kata("", "Mufrodat 139", "جُنْدٌ", "جُنْدٌ", "Tentara"),
                    $this->data_kata("", "Mufrodat 139", "شُرْطِيٌّ", "شُرْطِيٌّ", "Polisi"),
                    $this->data_kata("", "Mufrodat 139", "مُخْتَطِفٌ", "مُخْتَطِفٌ", "Perampok"),

                    $this->data_kata("", "Mufrodat 140", "سَارِقٌ", "سَارِقٌ", "Pencuri"),
                    $this->data_kata("", "Mufrodat 140", "مُحَامٍ", "مُحَامٍ", "Pengacara"),
                    $this->data_kata("", "Mufrodat 140", "قَاطِعُ طَرِيْقٍ", "قَاطِعُ طَرِيْقٍ", "Pembegal"),
                    $this->data_kata("", "Mufrodat 140", "قَاضٍي", "قَاضٍي", "Hakim"),
                    $this->data_kata("", "Mufrodat 140", "مُدِيْرٌ", "مُدِيْرٌ", "Direktur"),
                    $this->data_kata("", "Mufrodat 140", "مُغَنِّى", "مُغَنِّى", "Penyanyi"),
                    $this->data_kata("", "Mufrodat 140", "فَلَّاحٌ", "فَلَّاحٌ", "Petani"),
                    $this->data_kata("", "Mufrodat 140", "صَيَّادُ السَّمَكِ", "صَيَّادُ السَّمَكِ", "Nelayan"),

                    $this->data_kata("", "Mufrodat 141", "صَيَّادٌ", "صَيَّادٌ", "Pemburu"),
                    $this->data_kata("", "Mufrodat 141", "بَحَّارٌ", "بَحَّارٌ", "Pelaut"),
                    $this->data_kata("", "Mufrodat 141", "نَجَّارٌ", "نَجَّارٌ", "Tukang Kayu"),
                    $this->data_kata("", "Mufrodat 141", "مِيْكَانِيْكٌ", "مِيْكَانِيْكٌ", "Teknisi"),
                    $this->data_kata("", "Mufrodat 141", "بُسْتَانِيٌّ", "بُسْتَانِيٌّ", "Tukang Kebun"),
                    $this->data_kata("", "Mufrodat 141", "حَلَّاقٌ", "حَلَّاقٌ", "Tukang Cukur"),
                    $this->data_kata("", "Mufrodat 141", "مُزَيِّنٌ", "مُزَيِّنٌ", "Perias"),
                    $this->data_kata("", "Mufrodat 141", "مُصَوِّرٌ", "مُصَوِّرٌ", "Fotografer"),

                    $this->data_kata("", "Mufrodat 142", "مُشَعْوِذٌ", "مُشَعْوِذٌ", "Pesulap"),
                    $this->data_kata("", "Mufrodat 142", "بَائِعٌ", "بَائِعٌ", "Penjual"),
                    $this->data_kata("", "Mufrodat 142", "مُضِيْفَةٌ", "مُضِيْفَةٌ", "Pramugari"),
                    $this->data_kata("", "Mufrodat 142", "مُهَنْدِسٌ", "مُهَنْدِسٌ", "Insinyur"),
                    $this->data_kata("", "Mufrodat 142", "مُهَنْدِسٌ مِعْمَارِيٌّ", "مُهَنْدِسٌ مِعْمَارِيٌّ", "Arsitek"),
                    $this->data_kata("", "Mufrodat 142", "سَائِقٌ", "سَائِقٌ", "Sopir"),
                    $this->data_kata("", "Mufrodat 142", "مُخْبِرٌ", "مُخْبِرٌ", "Reporter"),
                    $this->data_kata("", "Mufrodat 142", "خَيَّاطٌ", "خَيَّاطٌ", "Penjahit"),

                    $this->data_kata("", "Mufrodat 143", "طَيَّارٌ", "طَيَّارٌ", "Pilot"),
                    $this->data_kata("", "Mufrodat 143", "رَسَّامٌ", "رَسَّامٌ", "Pelukis"),
                    $this->data_kata("", "Mufrodat 143", "عُمَّالٌ", "عُمَّالٌ", "Pegawai"),
                    $this->data_kata("", "Mufrodat 143", "عَالِمٌ", "عَالِمٌ", "Ilmuwan"),
                    $this->data_kata("", "Mufrodat 143", "خَادِمٌ", "خَادِمٌ", "Pelayan"),
                    $this->data_kata("", "Mufrodat 143", "نَادِلٌ", "نَادِلٌ", "Pramusaji"),
                    $this->data_kata("", "Mufrodat 143", "مُوَظَّفٌ", "مُوَظَّفٌ", "Pegawai"),
                    $this->data_kata("", "Mufrodat 143", "رِيَاضِيٌّ", "رِيَاضِيٌّ", "Olahragawan"),

                    $this->data_kata("", "Mufrodat 144", "رَئِيْسٌ", "رَئِيْسٌ", "Ketua"),
                    $this->data_kata("", "Mufrodat 144", "آمِنُ الصُّنْدُوْقِ", "آمِنُ الصُّنْدُوْقِ", "Bendahara"),
                    $this->data_kata("", "Mufrodat 144", "سِكْرِتِيْرٌ", "سِكْرِتِيْرٌ", "Sekretaris"),
                    $this->data_kata("", "Mufrodat 144", "مُمَثِّلٌ", "مُمَثِّلٌ", "Artis"),
                    $this->data_kata("", "Mufrodat 144", "مُهَرِّجٌ", "مُهَرِّجٌ", "Pelawak"),
                    $this->data_kata("", "Mufrodat 144", "رَقَّاصٌ", "رَقَّاصٌ", "Penari"),
                    $this->data_kata("", "Mufrodat 144", "رَئِيْسُ الْجُمْهُوْرِيَّةِ", "رَئِيْسُ الْجُمْهُوْرِيَّةِ", "Presiden"),
                    $this->data_kata("", "Mufrodat 144", "نَائِبُ رَئِيْسُ الْجُمْهُوْرِيَّةِ", "نَائِبُ رَئِيْسُ الْجُمْهُوْرِيَّةِ", "Wapres"),

                    $this->data_kata("", "Mufrodat 145", "وَزِيْرٌ", "وَزِيْرٌ", "Menteri"),
                    $this->data_kata("", "Mufrodat 145", "مَجْلِسُ النَّوَابِ", "مَجْلِسُ النَّوَابِ", "DPR"),
                    $this->data_kata("", "Mufrodat 145", "مُحَافِظٌ", "مُحَافِظٌ", "Gubernur"),
                    $this->data_kata("", "Mufrodat 145", "عُمْدَةٌ", "عُمْدَةٌ", "Walikota"),
                    $this->data_kata("", "Mufrodat 145", "رَئِيْسُ  الْمُقَاطَعَةِ", "رَئِيْسُ  الْمُقَاطَعَةِ", "Bupati"),
                    $this->data_kata("", "Mufrodat 145", "رَئِيْسُ النَّاحِيَةِ", "رَئِيْسُ النَّاحِيَةِ", "Camat"),
                    $this->data_kata("", "Mufrodat 145", "رَئِيْسُ الْقَرْيَةِ", "رَئِيْسُ الْقَرْيَةِ", "Kades"),

                    $this->data_kata("", "Mufrodat 146", "رَأَسَ-يَرْأَسُ-رَأْسًا", "رَأَسَ-يَرْأَسُ-رَأْسًا", "Mengepalai"),
                    $this->data_kata("", "Mufrodat 146", "نَابَ-يَنُوْبُ-نَوْبًا", "نَابَ-يَنُوْبُ-نَوْبًا", "Mewakili"),
                    $this->data_kata("", "Mufrodat 146", "وَكَّلَ-يُوَكِّلُ-تَوْكِيْلًا", "وَكَّلَ-يُوَكِّلُ-تَوْكِيْلًا", "Mewakilkan"),
                    $this->data_kata("", "Mufrodat 146", "شَاوَرَ-يُشَاوِرُ-مُشَاوَرَةً", "شَاوَرَ-يُشَاوِرُ-مُشَاوَرَةً", "Bermusyawarah"),
                    $this->data_kata("", "Mufrodat 146", "اِجْتَمَعَ-يَجْتَمِعُ-اِجْتِمَاعًا", "اِجْتَمَعَ-يَجْتَمِعُ-اِجْتِمَاعًا", "Berkumpul"),
                    $this->data_kata("", "Mufrodat 146", "جَمَعَ-يَجْمَعُ-جَمْعًا", "جَمَعَ-يَجْمَعُ-جَمْعًا", "Mengumpulkan"),

                    $this->data_kata("", "Mufrodat 147", "اِخْتَارَ-يَخْتَارُ-اِخْتِيَارًا", "اِخْتَارَ-يَخْتَارُ-اِخْتِيَارًا", "Memilih"),
                    $this->data_kata("", "Mufrodat 147", "أَخَّرَ-يُؤَخِّرُ-تَأْخِيْرًا", "أَخَّرَ-يُؤَخِّرُ-تَأْخِيْرًا", "mengakhirkan"),
                    $this->data_kata("", "Mufrodat 147", "أَجَّلَ-يُؤَجِّلُ-تَأْجِيْلًا", "أَجَّلَ-يُؤَجِّلُ-تَأْجِيْلًا", "Mengakhirkan"),
                    $this->data_kata("", "Mufrodat 147", "عَجَّلَ-يُعَجِّلُ-تَعْجِيْلًا", "عَجَّلَ-يُعَجِّلُ-تَعْجِيْلًا", "menyegerakan"),
                    $this->data_kata("", "Mufrodat 147", "كَفَى-يَكْفِي-كِفَايَةً", "كَفَى-يَكْفِي-كِفَايَةً", "Cukup"),

                    $this->data_kata("", "Mufrodat 148", "مَوْسِمُ الأَمْطَارِ", "مَوْسِمُ الأَمْطَارِ", "Musim Hujan"),
                    $this->data_kata("", "Mufrodat 148", "مَوْسِمُ الْجَفَافِ", "مَوْسِمُ الْجَفَافِ", "Musim Kemarau"),
                    $this->data_kata("", "Mufrodat 148", "فَصْلُ الشِّتَاءِ", "فَصْلُ الشِّتَاءِ", "Musim Dingin"),
                    $this->data_kata("", "Mufrodat 148", "فَصْلُ الصَّيْفِ", "فَصْلُ الصَّيْفِ", "Musim Panas"),
                    $this->data_kata("", "Mufrodat 148", "فَصْلُ الْخَرِيْفِ", "فَصْلُ الْخَرِيْفِ", "Musim Gugur"),
                    $this->data_kata("", "Mufrodat 148", "فَصْلُ الرَّبِيْعِ", "فَصْلُ الرَّبِيْعِ", "Musim Semi"),

                    $this->data_kata("", "Mufrodat 149", "مَاءٌ ج مِيَاهٌ، أَمْوَاهٌ", "مَاءٌ ج مِيَاهٌ", "Air"),
                    $this->data_kata("", "Mufrodat 149", "دِيْنٌ ج أَدْيَانٌ", "دِيْنٌ ج أَدْيَانٌ", "Agama"),
                    $this->data_kata("", "Mufrodat 149", "عَقْلٌ ج عُقُوْلٌ", "عَقْلٌ ج عُقُوْلٌ", "Akal"),
                    $this->data_kata("", "Mufrodat 149", "حَاجِبٌ ج حُجَّابٌ", "حَاجِبٌ ج حُجَّابٌ", "Alis"),
                    $this->data_kata("", "Mufrodat 149", "وَلَدٌ ج أَوْلَادٌ", "وَلَدٌ ج أَوْلَادٌ", "Anak (lk)"),
                    $this->data_kata("", "Mufrodat 149", "إِبْنٌ ج أَبْنَاءٌ، بَنُوْنَ", "إِبْنٌ ج أَبْنَاءٌ", "Anak (lk)"),
                    $this->data_kata("", "Mufrodat 149", "بِنْتٌ ج بَنَاتٌ", "بِنْتٌ ج بَنَاتٌ", "Anak (pr)"),
                    $this->data_kata("", "Mufrodat 149", "طِفْلٌ ج أَطْفَالٌ", "طِفْلٌ ج أَطْفَالٌ", "Bayi"),

                    $this->data_kata("", "Mufrodat 150", "أَصْلٌ ج أُصُوْلٌ", "أَصْلٌ ج أُصُوْلٌ", "Asal"),
                    $this->data_kata("", "Mufrodat 150", "سَقْفٌ ج سُقُوْفٌ", "سَقْفٌ ج سُقُوْفٌ", "Atap"),
                    $this->data_kata("", "Mufrodat 150", "قَاعَةٌ ج قَاعَاتٌ", "قَاعَةٌ ج قَاعَاتٌ", "Aula"),
                    $this->data_kata("", "Mufrodat 150", "أَبٌ ج آبَاءٌ", "أَبٌ ج آبَاءٌ", "Ayah"),
                    $this->data_kata("", "Mufrodat 150", "جُزْءٌ ج أَجْزَاءٌ", "جُزْءٌ ج أَجْزَاءٌ", "Bagian"),
                    $this->data_kata("", "Mufrodat 150", "لُغَةٌ ج لُغَاتٌ", "لُغَةٌ ج لُغَاتٌ", "Bahasa"),
                    $this->data_kata("", "Mufrodat 150", "ثَوْبٌ ج ثِيَابٌ", "ثَوْبٌ ج ثِيَابٌ", "Baju"),
                    $this->data_kata("", "Mufrodat 150", "وِسَادَةٌ ج وَسَائِدُ", "وِسَادَةٌ ج وَسَائِدُ", "Bantal"),

                    $this->data_kata("", "Mufrodat 151", "حَجَرٌ ج أَحْجَارٌ", "حَجَرٌ ج أَحْجَارٌ", "Batu"),
                    $this->data_kata("", "Mufrodat 151", "شَكْلٌ ج أَشْكَالٌ", "شَكْلٌ ج أَشْكَالٌ", "Bentuk"),
                    $this->data_kata("", "Mufrodat 151", "نَجْمٌ ج نُجُوْمٌ", "نَجْمٌ ج نُجُوْمٌ", "Bintang"),
                    $this->data_kata("", "Mufrodat 151", "صَبِيٌّ ج صِبْيَانٌ", "صَبِيٌّ ج صِبْيَانٌ", "Anak kecil"),
                    $this->data_kata("", "Mufrodat 151", "كُرَةٌ ج كُرَاتٌ", "كُرَةٌ ج كُرَاتٌ", "Bola"),
                    $this->data_kata("", "Mufrodat 151", "قَارُوْرَةٌ ج قَوَارِيْرُ", "قَارُوْرَةٌ ج قَوَارِيْرُ", "Botol"),
                    $this->data_kata("", "Mufrodat 151", "كِتَابٌ ج كُتُبٌ", "كِتَابٌ ج كُتُبٌ", "Buku"),
                    $this->data_kata("", "Mufrodat 151", "دَفْتَرٌ ج دَفَاتِرُ", "دَفْتَرٌ ج دَفَاتِرُ", "Buku tulis"),

                    $this->data_kata("", "Mufrodat 152", "شَهْرٌ ج شُهُوْرٌ", "شَهْرٌ ج شُهُوْرٌ", "Bulan"),
                    $this->data_kata("", "Mufrodat 152", "قَمَرٌ ج أَقْمَارٌ", "قَمَرٌ ج أَقْمَارٌ", "Rembulan"),
                    $this->data_kata("", "Mufrodat 152", "نُوْرٌ ج أَنْوَارٌ", "نُوْرٌ ج أَنْوَارٌ", "Cahaya"),
                    $this->data_kata("", "Mufrodat 152", "فِنْجَانٌ ج فَنَاجِيْنُ", "فِنْجَانٌ ج فَنَاجِيْنُ", "Cangkir"),
                    $this->data_kata("", "Mufrodat 152", "مِعْزَقٌ ج مَعَازِقُ", "مِعْزَقٌ ج مَعَازِقُ", "Cangkul"),
                    $this->data_kata("", "Mufrodat 152", "مِرْآةٌ ج مَرَايَا", "مِرْآةٌ ج مَرَايَا", "Cermin"),
                    $this->data_kata("", "Mufrodat 152", "تُبَّانٌ ج تُبَّانَاتٌ، تَبَابِيْنُ", "تُبَّانٌ ج تُبَّانَاتٌ", "Celana dalam"),
                    $this->data_kata("", "Mufrodat 152", "بِنْطَالٌ ج بَنَاطِيْلُ", "بِنْطَالٌ ج بَنَاطِيْلُ", "Celana panjang"),

                    $this->data_kata("", "Mufrodat 153", "سِرْوَالٌ  ج سَرَاوِيْلُ", "سِرْوَالٌ  ج سَرَاوِيْلُ", "Celana pendek"),
                    $this->data_kata("", "Mufrodat 153", "قِصَّةٌ ج قِصَصٌ", "قِصَّةٌ ج قِصَصٌ", "Cerita"),
                    $this->data_kata("", "Mufrodat 153", "مِثَالٌ ج أَمْثِلَةٌ", "مِثَالٌ ج أَمْثِلَةٌ", "Contoh"),
                    $this->data_kata("", "Mufrodat 153", "مَطْبَخٌ ج مَطَابِخُ", "مَطْبَخٌ ج مَطَابِخُ", "Dapur"),
                    $this->data_kata("", "Mufrodat 153", "دَمٌ ج دِمَاءٌ", "دَمٌ ج دِمَاءٌ", "Darah"),
                    $this->data_kata("", "Mufrodat 153", "وَرَقٌ ج وَرَقَاتٌ", "وَرَقٌ ج وَرَقَاتٌ", "Daun"),
                    $this->data_kata("", "Mufrodat 153", "قَرْيَةٌ ج قُرَى", "قَرْيَةٌ ج قُرَى", "Desa"),
                    $this->data_kata("", "Mufrodat 153", "فِلْمٌ ج أَفْلَامٌ", "فِلْمٌ ج أَفْلَامٌ", "Film"),

                    $this->data_kata("", "Mufrodat 154", "صُوْرَةٌ ج صُوَرٌ", "صُوْرَةٌ ج صُوَرٌ", "Gambar"),
                    $this->data_kata("", "Mufrodat 154", "كُوْبٌ ج أَكْوَابٌ", "كُوْبٌ ج أَكْوَابٌ", "Gelas"),
                    $this->data_kata("", "Mufrodat 154", "قُفْلٌ ج أَقْفَالٌ", "قُفْلٌ ج أَقْفَالٌ", "Gembok"),
                    $this->data_kata("", "Mufrodat 154", "كَنِيْسَةٌ ج كَنَائِسُ", "كَنِيْسَةٌ ج كَنَائِسُ", "Gereja"),
                    $this->data_kata("", "Mufrodat 154", "أُسْتَاذٌ ج أَسَاتِيْذُ", "أُسْتَاذٌ ج أَسَاتِيْذُ", "Guru"),
                    $this->data_kata("", "Mufrodat 154", "مِنْشَفَةٌ ج مَنَاشِفُ", "مِنْشَفَةٌ ج مَنَاشِفُ", "Handuk"),
                    $this->data_kata("", "Mufrodat 154", "يَوْمٌ ج أَيَّامٌ", "يَوْمٌ ج أَيَّامٌ", "Hari"),
                    $this->data_kata("", "Mufrodat 154", "قَلْبٌ ج قُلُوْبٌ", "قَلْبٌ ج قُلُوْبٌ", "Jantung"),

                    $this->data_kata("", "Mufrodat 155", "حَيَوَانٌ ج حَيَوَانَاتٌ", "حَيَوَانٌ ج حَيَوَانَاتٌ", "Hewan"),
                    $this->data_kata("", "Mufrodat 155", "حَرْفٌ ج حُرُوْفٌ", "حَرْفٌ ج حُرُوْفٌ", "Huruf"),
                    $this->data_kata("", "Mufrodat 155", "أُمٌّ ج أُمَّهَاتٌ", "أُمٌّ ج أُمَّهَاتٌ", "Ibu"),
                    $this->data_kata("", "Mufrodat 155", "عَاصِمَةٌ ج عَوَاصِمُ", "عَاصِمَةٌ ج عَوَاصِمُ", "Ibu kota"),
                    $this->data_kata("", "Mufrodat 155", "إِمَامٌ ج أَئِمَّةٌ", "إِمَامٌ ج أَئِمَّةٌ", "Imam"),
                    $this->data_kata("", "Mufrodat 155", "سَمَكٌ ج أَسْمَاكٌ", "سَمَكٌ ج أَسْمَاكٌ", "Ikan"),
                    $this->data_kata("", "Mufrodat 155", "قَصْرٌ ج قُصُوْرٌ", "قَصْرٌ ج قُصُوْرٌ", "Istana"),
                    $this->data_kata("", "Mufrodat 155", "سَبِيْلٌ ج سُبُلٌ", "سَبِيْلٌ ج سُبُلٌ", "Jalan"),

                    $this->data_kata("", "Mufrodat 156", "شَارِعٌ ج شَوَارِعُ", "شَارِعٌ ج شَوَارِعُ", "Jalan raya"),
                    $this->data_kata("", "Mufrodat 156", "سَاعَةٌ ج سَاعَاتٌ", "سَاعَةٌ ج سَاعَاتٌ", "Jam"),
                    $this->data_kata("", "Mufrodat 156", "خِصَّةٌ ج خِصَصٌ", "خِصَّةٌ ج خِصَصٌ", "Jam pelajaran"),
                    $this->data_kata("", "Mufrodat 156", "جَوَابٌ ج أَجْوِبَةٌ", "جَوَابٌ ج أَجْوِبَةٌ", "Jawaban"),
                    $this->data_kata("", "Mufrodat 156", "نَافِذَةٌ ج نَوَافِذُ", "نَافِذَةٌ ج نَوَافِذُ", "Jendela"),
                    $this->data_kata("", "Mufrodat 156", "جِسْرٌ ج جُسُوْرٌ", "جِسْرٌ ج جُسُوْرٌ", "Jembatan"),
                    $this->data_kata("", "Mufrodat 156", "رُوْحٌ ج أَرْوَاحٌ", "رُوْحٌ ج أَرْوَاحٌ", "Ruh"),
                    $this->data_kata("", "Mufrodat 156", "مِلْيُوْنٌ ج مَلَايِيْنَ", "مِلْيُوْنٌ ج مَلَايِيْنَ", "Juta"),

                    $this->data_kata("", "Mufrodat 157", "قَاعِدَةٌ ج قَوَاعِدُ", "قَاعِدَةٌ ج قَوَاعِدُ", "Kaidah"),
                    $this->data_kata("", "Mufrodat 157", "جَدٌّ ج  أَجْدَادٌ", "جَدٌّ ج  أَجْدَادٌ", "Kakek"),
                    $this->data_kata("", "Mufrodat 157", "رِجْلٌ ج أَرْجُلٌ", "رِجْلٌ ج أَرْجُلٌ", "Kaki"),
                    $this->data_kata("", "Mufrodat 157", "جُمْلَةٌ ج جُمَلٌ", "جُمْلَةٌ ج جُمَلٌ", "Kalimat"),
                    $this->data_kata("", "Mufrodat 157", "حُجْرَةٌ ج حُجُرَاتٌ", "حُجْرَةٌ ج حُجُرَاتٌ", "Kamar"),
                    $this->data_kata("", "Mufrodat 157", "غُرْفَةٌ ج غُرَفٌ", "غُرْفَةٌ ج غُرَفٌ", "Kamar"),
                    $this->data_kata("", "Mufrodat 157", "جَيْبٌ ج جُيُوْبٌ", "جَيْبٌ ج جُيُوْبٌ", "Kantong"),
                    $this->data_kata("", "Mufrodat 157", "فِرَاشٌ ج فُرْشٌ", "فِرَاشٌ ج فُرْشٌ", "Kasur"),

                    $this->data_kata("", "Mufrodat 158", "فِعْلٌ ج أَفْعَالٌ", "فِعْلٌ ج أَفْعَالٌ", "Tindakan"),
                    $this->data_kata("", "Mufrodat 158", "حَالٌ ج أَحْوَالٌ", "حَالٌ ج أَحْوَالٌ", "Keadaan"),
                    $this->data_kata("", "Mufrodat 158", "حَدِيْقَةٌ ج حَدَائِقُ", "حَدِيْقَةٌ ج حَدَائِقُ", "Taman"),
                    $this->data_kata("", "Mufrodat 158", "مَزِيَّةٌ ج مَزَايَا", "مَزِيَّةٌ ج مَزَايَا", "Keuntungan"),
                    $this->data_kata("", "Mufrodat 158", "فَصْلٌ ج فُصُوْلٌ", "فَصْلٌ ج فُصُوْلٌ", "Kelas"),
                    $this->data_kata("", "Mufrodat 158", "أُسْرَةُ ج أُسَرٌ", "أُسْرَةُ ج أُسَرٌ", "Keluarga"),
                    $this->data_kata("", "Mufrodat 158", "قِرْدٌ ج قُرُوْدٌ", "قِرْدٌ ج قُرُوْدٌ", "Kera"),
                    $this->data_kata("", "Mufrodat 158", "قِرْطَاسٌ ج قَرَاطِيْسُ", "قِرْطَاسٌ ج قَرَاطِيْسُ", "Kertas"),

                    $this->data_kata("", "Mufrodat 159", "رَئِيْسٌ ج رُؤَسَاءُ", "رَئِيْسٌ ج رُؤَسَاءُ", "Kepala"),
                    $this->data_kata("", "Mufrodat 159", "مِرْوَحَةٌ ج مَرَاوِحُ", "مِرْوَحَةٌ ج مَرَاوِحُ", "Kipas angin"),
                    $this->data_kata("", "Mufrodat 159", "مَسْبَحٌ ج مَسَابِحُ", "مَسْبَحٌ ج مَسَابِحُ", "Kolam renang"),
                    $this->data_kata("", "Mufrodat 159", "صُنْدُوْقٌ ج صَنَادِيْقُ", "صُنْدُوْقٌ ج صَنَادِيْقُ", "Kotak"),
                    $this->data_kata("", "Mufrodat 159", "مَدِيْنَةٌ ج مُدُنٌ", "مَدِيْنَةٌ ج مُدُنٌ", "Kota"),
                    $this->data_kata("", "Mufrodat 159", "مَقْبَرَةٌ ج مَقَابِرُ", "مَقْبَرَةٌ ج مَقَابِرُ", "Kuburan"),
                    $this->data_kata("", "Mufrodat 159", "مِفْتَاحٌ ج مَفَاتِيْحُ", "مِفْتَاحٌ ج مَفَاتِيْحُ", "Kunci"),
                    $this->data_kata("", "Mufrodat 159", "ظُفْرٌ ج أَظْفَارٌ", "ظُفْرٌ ج أَظْفَارٌ", "Kuku"),

                    $this->data_kata("", "Mufrodat 160", "كُرْسِيٌّ ج كَرَاسِيُ", "كُرْسِيٌّ ج كَرَاسِيُ", "Kursi"),
                    $this->data_kata("", "Mufrodat 160", "رَجُلٌ ج رِجَالٌ", "رَجُلٌ ج رِجَالٌ", "Laki-laki"),
                    $this->data_kata("", "Mufrodat 160", "مِصْبَاحٌ ج مَصَابِيْحُ", "مِصْبَاحٌ ج مَصَابِيْحُ", "Lampu"),
                    $this->data_kata("", "Mufrodat 160", "مَيْدَانٌ ج مَيَادِيْنُ", "مَيْدَانٌ ج مَيَادِيْنُ", "Lapangan"),
                    $this->data_kata("", "Mufrodat 160", "بَحْرٌ ج بُحُوْرٌ", "بَحْرٌ ج بُحُوْرٌ", "Laut"),
                    $this->data_kata("", "Mufrodat 160", "شَمْعٌ ج شُمُوْعٌ", "شَمْعٌ ج شُمُوْعٌ", "Lilin"),
                    $this->data_kata("", "Mufrodat 160", "لِسَانٌ ج أَلْسِنَةٌ", "لِسَانٌ ج أَلْسِنَةٌ", "Lidah"),
                    $this->data_kata("", "Mufrodat 160", "مَعْرِفَةٌ ج مَعَارِفُ", "مَعْرِفَةٌ ج مَعَارِفُ", "Pengetahuan"),

                    $this->data_kata("", "Mufrodat 161", "نَوْعٌ ج أَنْوَاعٌ", "نَوْعٌ ج أَنْوَاعٌ", "Macam"),
                    $this->data_kata("", "Mufrodat 161", "عَسَلٌ ج أَعْسَالٌ", "عَسَلٌ ج أَعْسَالٌ", "Madu"),
                    $this->data_kata("", "Mufrodat 161", "مَسْجِدٌ ج مَسَاجِدُ", "مَسْجِدٌ ج مَسَاجِدُ", "Masjid"),
                    $this->data_kata("", "Mufrodat 161", "عَيْنٌ ج أَعْيُنٌ، عُيُوْنٌ", "عَيْنٌ ج أَعْيُنٌ", "Mata"),
                    $this->data_kata("", "Mufrodat 161", "مَكْتَبٌ ج مَكَاتِبُ", "مَكْتَبٌ ج مَكَاتِبُ", "Kantor"),
                    $this->data_kata("", "Mufrodat 161", "دَقِيْقَةٌ ج دَقَائِقُ", "دَقِيْقَةٌ ج دَقَائِقُ", "Menit"),
                    $this->data_kata("", "Mufrodat 161", "تِلْمِيْذٌ ج تَلَامِيْذُ", "تِلْمِيْذٌ ج تَلَامِيْذُ", "Murid"),
                    $this->data_kata("", "Mufrodat 161", "طَالِبٌ ج طُلَّابٌ", "طَالِبٌ ج طُلَّابٌ", "Siswa"),

                    $this->data_kata("", "Mufrodat 162", "مَتْحَفٌ ج مَتَاحِفُ", "مَتْحَفٌ ج مَتَاحِفُ", "Musium"),
                    $this->data_kata("", "Mufrodat 162", "نَبِيٌّ ج أَنْبِيَاءُ", "نَبِيٌّ ج أَنْبِيَاءُ", "Nabi"),
                    $this->data_kata("", "Mufrodat 162", "اِسْمٌ ج اَسْمَاءٌ", "اِسْمٌ ج اَسْمَاءٌ", "Nama"),
                    $this->data_kata("", "Mufrodat 162", "طَبَقٌ ج أَطْبَاقٌ", "طَبَقٌ ج أَطْبَاقٌ", "Nampan"),
                    $this->data_kata("", "Mufrodat 162", "بَلَدٌ ج بِلَادٌ", "بَلَدٌ ج بِلَادٌ", "Negara"),
                    $this->data_kata("", "Mufrodat 162", "نَصِيْحَةٌ ج نَصَائِحُ", "نَصِيْحَةٌ ج نَصَائِحُ", "Nasihat"),
                    $this->data_kata("", "Mufrodat 162", "نَتِيْجَةٌ ج نَتَائِجُ", "نَتِيْجَةٌ ج نَتَائِجُ", "Nilai"),
                    $this->data_kata("", "Mufrodat 162", "مَصْنَعٌ ج مَصَانِعُ", "مَصْنَعٌ ج مَصَانِعُ", "Pabrik"),

                    $this->data_kata("", "Mufrodat 163", "مَلْبَسٌ ج مَلَابِسُ", "مَلْبَسٌ ج مَلَابِسُ", "Pakaian"),
                    $this->data_kata("", "Mufrodat 163", "سُوْقٌ ج أَسْوَاقٌ", "سُوْقٌ ج أَسْوَاقٌ", "Pasar"),
                    $this->data_kata("", "Mufrodat 163", "مَنْظَرٌ ج مَنَاظِرُ", "مَنْظَرٌ ج مَنَاظِرُ", "Pemandangan"),
                    $this->data_kata("", "Mufrodat 163", "قَلَمٌ ج أَقْلَامٌ", "قَلَمٌ ج أَقْلَامٌ", "Polpen"),
                    $this->data_kata("", "Mufrodat 163", "لِصٌّ ج لُصُوْصٌ", "لِصٌّ ج لُصُوْصٌ", "Pencuri"),
                    $this->data_kata("", "Mufrodat 163", "رَأْيٌ ج آرَاءٌ", "رَأْيٌ ج آرَاءٌ", "Pendapat"),
                    $this->data_kata("", "Mufrodat 163", "سَاكِنٌ ج سُكَّانٌ", "سَاكِنٌ ج سُكَّانٌ", "Penduduk"),
                    $this->data_kata("", "Mufrodat 163", "مِسْطَرَةٌ ج مَسَاطِرُ", "مِسْطَرَةٌ ج مَسَاطِرُ", "Penggaris"),

                    $this->data_kata("", "Mufrodat 164", "مِمْسَحَةٌ ج مَمَاسِحُ", "مِمْسَحَةٌ ج مَمَاسِحُ", "Penghapus"),
                    $this->data_kata("", "Mufrodat 164", "سِجْنٌ ج سُجُوْنٌ", "سِجْنٌ ج سُجُوْنٌ", "Penjara"),
                    $this->data_kata("", "Mufrodat 164", "كَاتِبٌ ج كُتَّابٌ،ون،ات", "كَاتِبٌ ج كُتَّابٌ", "Penulis"),
                    $this->data_kata("", "Mufrodat 164", "رَاكِبٌ ج رُكَّابٌ", "رَاكِبٌ ج رُكَّابٌ", "Penumpang"),
                    $this->data_kata("", "Mufrodat 164", "فَرْقٌ ج فُرُوْقٌ", "فَرْقٌ ج فُرُوْقٌ", "Perbedaan"),
                    $this->data_kata("", "Mufrodat 164", "أَمْرٌ ج أَوَامِرُ", "أَمْرٌ ج أَوَامِرُ", "Urusan"),
                    $this->data_kata("", "Mufrodat 164", "سُؤَالٌ ج أَسْئِلَةٌ", "سُؤَالٌ ج أَسْئِلَةٌ", "Pertanyaan"),
                    $this->data_kata("", "Mufrodat 164", "بَطْنٌ ج بُطُوْنٌ", "بَطْنٌ ج بُطُوْنٌ", "Perut"),

                    $this->data_kata("", "Mufrodat 165", "صَحْنٌ ج صُحُوْنٌ", "صَحْنٌ ج صُحُوْنٌ", "Piring"),
                    $this->data_kata("", "Mufrodat 165", "شَجَرَةٌ ج أَشْجَارٌ", "شَجَرَةٌ ج أَشْجَارٌ", "Pohon"),
                    $this->data_kata("", "Mufrodat 165", "كَوْكَبٌ ج كَوَاكِبُ", "كَوْكَبٌ ج كَوَاكِبُ", "Planet"),
                    $this->data_kata("", "Mufrodat 165", "مَعْهَدٌ ج مَعَاهِدُ", "مَعْهَدٌ ج مَعَاهِدُ", "Pondok"),
                    $this->data_kata("", "Mufrodat 165", "مَطْعَمٌ ج مَطَاعِمُ", "مَطْعَمٌ ج مَطَاعِمُ", "Restoran"),
                    $this->data_kata("", "Mufrodat 165", "أَلْفٌ ج آلَافٍ", "أَلْفٌ ج آلَافٍ", "Ribu"),
                    $this->data_kata("", "Mufrodat 165", "بَيْتٌ ج بُيُوْتٌ", "بَيْتٌ ج بُيُوْتٌ", "Rumah"),
                    $this->data_kata("", "Mufrodat 165", "صَاحِبٌ ج أَصْحَابٌ", "صَاحِبٌ ج أَصْحَابٌ", "Teman"),

                    $this->data_kata("", "Mufrodat 166", "نَعْلٌ ج نِعَالٌ", "نَعْلٌ ج نِعَالٌ", "Sandal"),
                    $this->data_kata("", "Mufrodat 166", "أَخٌ ج إِخْوَةٌ، إِخْوَانٌ", "أَخٌ ج إِخْوَةٌ", "Saudara (lk)"),
                    $this->data_kata("", "Mufrodat 166", "أُخْتٌ ج أَخَوَاتٌ", "أُخْتٌ ج أَخَوَاتٌ", "Saudara (pr)"),
                    $this->data_kata("", "Mufrodat 166", "مَزْرَعَةٌ ج مَزَارِعُ", "مَزْرَعَةٌ ج مَزَارِعُ", "Sawah"),
                    $this->data_kata("", "Mufrodat 166", "مَدْرَسَةٌ ج مَدَارِسُ", "مَدْرَسَةٌ ج مَدَارِسُ", "Sekolah"),
                    $this->data_kata("", "Mufrodat 166", "مِلْعَقَةٌ ج مَلَاعِقُ", "مِلْعَقَةٌ ج مَلَاعِقُ", "Sendok"),
                    $this->data_kata("", "Mufrodat 166", "شَخْصٌ ج أَشْخَاصٌ", "شَخْصٌ ج أَشْخَاصٌ", "Seseorang"),
                    $this->data_kata("", "Mufrodat 166", "صِفَةٌ ج صِفَاتٌ", "صِفَةٌ ج صِفَاتٌ", "Sifat"),

                    $this->data_kata("", "Mufrodat 167", "مِرْفَقٌ ج مَرَافِقُ", "مِرْفَقٌ ج مَرَافِقُ", "Siku"),
                    $this->data_kata("", "Mufrodat 167", "زَوْجٌ ج أَزْوَاجٌ", "زَوْجٌ ج أَزْوَاجٌ", "Pasangan"),
                    $this->data_kata("", "Mufrodat 167", "صَوْتٌ ج أَصْوَاتٌ", "صَوْتٌ ج أَصْوَاتٌ", "Suara"),
                    $this->data_kata("", "Mufrodat 167", "مَنْبَعٌ ج مَنَابِعُ", "مَنْبَعٌ ج مَنَابِعُ", "Sumber"),
                    $this->data_kata("", "Mufrodat 167", "شَرِيْعَةٌ ج شَرَائِعُ", "شَرِيْعَةٌ ج شَرَائِعُ", "Syariat"),
                    $this->data_kata("", "Mufrodat 167", "شَرْطٌ ج شُرُوْطٌ", "شَرْطٌ ج شُرُوْطٌ", "Syarat"),
                    $this->data_kata("", "Mufrodat 167", "سَنَةٌ ج سَنَوَاتٌ", "سَنَةٌ ج سَنَوَاتٌ", "Tahun"),
                    $this->data_kata("", "Mufrodat 167", "رَوْضَةُ ج رِيَاضٌ", "رَوْضَةُ ج رِيَاضٌ", "Taman"),
                    $this->data_kata("", "Mufrodat 167", "ضَيْفٌ ج ضُيُوْفٌ", "ضَيْفٌ ج ضُيُوْفٌ", "Tamu"),
                    
                    $this->data_kata("", "Mufrodat 168", "يَدٌ ج أَيْدٍ", "يَدٌ ج أَيْدٍ", "Tangan"),
                    $this->data_kata("", "Mufrodat 168", "صَدِيْقٌ ج أَصْدِقَاءُ", "صَدِيْقٌ ج أَصْدِقَاءُ", "Teman"),
                    $this->data_kata("", "Mufrodat 168", "جِدَارٌ ج جُدُرٌ", "جِدَارٌ ج جُدُرٌ", "Tembok"),
                    $this->data_kata("", "Mufrodat 168", "مَلْعَبٌ ج مَلَاعِبُ", "مَلْعَبٌ ج مَلَاعِبُ", "Tempat bermain"),
                    $this->data_kata("", "Mufrodat 168", "مَسْكَنٌ ج مَسَاكِنُ", "مَسْكَنٌ ج مَسَاكِنُ", "Tempat tinggal"),
                    $this->data_kata("", "Mufrodat 168", "جَارٌ ج جِيْرَانٌ", "جَارٌ ج جِيْرَانٌ", "Tetangga"),
                    $this->data_kata("", "Mufrodat 168", "فِرْقَةٌ ج فِرَقٌ", "فِرْقَةٌ ج فِرَقٌ", "Golongan"),
                    $this->data_kata("", "Mufrodat 168", "دُكَّانٌ ج دَكَاكِيْنُ", "دُكَّانٌ ج دَكَاكِيْنُ", "Toko"),
                    
                    $this->data_kata("", "Mufrodat 169", "هَدَفٌ ج أَهْدَافٌ", "هَدَفٌ ج أَهْدَافٌ", "Tujuan"),
                    $this->data_kata("", "Mufrodat 169", "عَظْمٌ ج عِظَامٌ", "عَظْمٌ ج عِظَامٌ", "Tulang"),
                    $this->data_kata("", "Mufrodat 169", "أُمَّةٌ ج أُمَمٌ", "أُمَّةٌ ج أُمَمٌ", "Umat"),
                    $this->data_kata("", "Mufrodat 169", "جَمَلٌ ج جِمَالٌ", "جَمَلٌ ج جِمَالٌ", "Unta"),
                    $this->data_kata("", "Mufrodat 169", "رَسُوْلٌ ج رُسُلٌ", "رَسُوْلٌ ج رُسُلٌ", "Rosul"),
                    $this->data_kata("", "Mufrodat 169", "وَجْهٌ ج أَوْجُهٌ، وُجُوْهٌ", "وَجْهٌ ج أَوْجُهٌ", "Wajah"),
                    $this->data_kata("", "Mufrodat 169", "نَائِبُ ج نُوَّابٌ", "نَائِبُ ج نُوَّابٌ", "Wakil"),
                    $this->data_kata("", "Mufrodat 169", "وَقْتٌ ج أَوْقَاتٌ", "وَقْتٌ ج أَوْقَاتٌ", "Waktu"),
                    $this->data_kata("", "Mufrodat 169", "لَوْنٌ ج أَلْوَانٌ", "لَوْنٌ ج أَلْوَانٌ", "Warna"),
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
                    "title_arab" => "الْيَوْمَ - مَسَاءً",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 5",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 4"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 6"),
                    "title_arab" => "لَـيْـلًا - السَّـنَـةُ الْآتِـيَـةُ ",
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
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 14"),
                    "title_arab" => "فُـسَاءٌ - ضِـلْـعٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 14",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 13"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 15"),
                    "title_arab" => "أَخَـذَ - تَـحَـرَّكَ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 15",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 14"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 16"),
                    "title_arab" => "تَـذَكَّـرَ - خَافَ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 16",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 15"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 17"),
                    "title_arab" => "دَلَّـكَ - غَـضَّ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 17",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 16"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 18"),
                    "title_arab" => "فَـسَا - كَـتَـبَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 18",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 17"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 19"),
                    "title_arab" => "لَـمَـسَ - هَـمَـسَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 19",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 18"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 20"),
                    "title_arab" => "أَبٌ - حَـفِـيْـدٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 20",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 19"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 21"),
                    "title_arab" => "حَـفِـيْـدَةٌ - أَخٌ صَـغِـيْـرٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 21",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 20"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 22"),
                    "title_arab" => "أُخْـتٌ كَـبِـيْـرَةٌ - عَـذْرَاءُ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 22",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 21"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 23"),
                    "title_arab" => "أَرْمَـلٌ - فَـتَاةٌ",
                    "kata" => "8"
                ],

                
                [
                    "tema" => "Mufrodat 23",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 22"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 24"),
                    "title_arab" => "رَبَّـي - دَعَا",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 24",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 23"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 25"),
                    "title_arab" => "أَمَـرَ - اِعْـتَـرَفَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 25",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 24"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 26"),
                    "title_arab" => "رَجَـى - سَـكَـتَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 26",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 25"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 27"),
                    "title_arab" => "مُـتَـوَاضِـعٌ - صَادِقٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 27",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 26"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 28"),
                    "title_arab" => "كَاذِبٌ - مُـشَاغِـبٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 28",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 27"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 29"),
                    "title_arab" => "لَـطِـيْـفٌ - شَـهِـيْـرٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 29",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 28"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 30"),
                    "title_arab" => "عَاطِـفِـيٌّ - ذَكِـيٌّ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 30",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 29"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 31"),
                    "title_arab" => "غَـبِـيٌّ - أَبْـكَـمٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 31",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 30"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 32"),
                    "title_arab" => "قَـزَمٌ - عَادِلٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 32",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 31"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 33"),
                    "title_arab" => "غَـيْـرُ عَادِلٍ - خَاسِـرٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 33",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 32"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 34"),
                    "title_arab" => "سَـمِـيْـنٌ - مَـغْـلُـوْبٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 34",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 33"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 35"),
                    "title_arab" => "ثِـقَّـةُ النَّـفْـسِ - مُـخْـجِـلٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 35",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 34"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 36"),
                    "title_arab" => "مُـمْـتِـعٌ - مُـتَـفَاجِـئٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 36",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 35"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 37"),
                    "title_arab" => "تَائِـبٌ - سَـرِيْـعُ الـنِّـسْـيَانِ",
                    "kata" => "5"
                ],
                [
                    "tema" => "Mufrodat 37",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 36"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 38"),
                    "title_arab" => "جِـدَارٌ - خِـزَانَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 38",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 37"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 39"),
                    "title_arab" => "دَوْلَـبٌ - أَرِيْـكَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 39",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 38"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 40"),
                    "title_arab" => "مِـكْـنَـسَـةٌ - مَـنْـفَـضَّـةُ السَّـجَائِـرِ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 40",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 39"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 41"),
                    "title_arab" => "تَـقْـوِيْـمٌ - بَـوَّابَـةٌ",
                    "kata" => "8"
                ],

                [
                    "tema" => "Mufrodat 41",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 40"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 42"),
                    "title_arab" => "سَـقْـفٌ - زُقَاقٌ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 42",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 41"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 43"),
                    // "next" => "",
                    "title_arab" => "كَـنَـسَ - دَخَـلَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 43",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 42"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 44"),
                    "title_arab" => "خَـرَجَ - اِنْـطَـفَأَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 44",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 43"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 45"),
                    // "next" => "",
                    "title_arab" => "صَـعِـدَ - وَاجَـهَ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 45",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 44"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 46"),
                    "title_arab" => "أَسْـوَدُ - أَزْرَقُ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 46",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 45"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 47"),
                    "title_arab" => "أَخْـضَـرُ - ذَهَـبِـيٌّ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 47",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 46"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 48"),
                    "title_arab" => "كَـبِـيْـرٌ - نَـظِـيْـفٌ",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 48",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 47"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 49"),
                    "title_arab" => "وَسِـخٌ - نَاعِـمٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 49",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 48"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 50"),
                    "title_arab" => "خَـشِـنٌ - ثَـقِـيْـلٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 50",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 49"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 51"),
                    "title_arab" => "خَـفِـيْـفٌ - مَـيِّـتٌ",
                    "kata" => "10"
                ],

                
                [
                    "tema" => "Mufrodat 51",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 50"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 52"),
                    "title_arab" => "مَـفْـتُـوْحٌ - خَـطَاءٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 52",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 51"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 53"),
                    // "next" => "",
                    "title_arab" => "ثَـوْبٌ - لِـفَاعٌ",
                    "kata" => "11"
                ],
                [
                    "tema" => "Mufrodat 53",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 52"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 54"),
                    "title_arab" => "حَـمَّالَـةُ الـصَّـدْرِ - نَـعْـلٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 54",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 53"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 55"),
                    // "next" => "",
                    "title_arab" => "حِـذَاءٌ - رِبَاطٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 55",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 54"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 56"),
                    "title_arab" => "سِـوَارٌ - لُـؤْلُـؤٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 56",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 55"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 57"),
                    "title_arab" => "لَـبِـسَ - قَـصَّـرَ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 57",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 56"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 58"),
                    "title_arab" => "كَـبَّـرَ - نَـسَـجَ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 58",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 57"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 59"),
                    "title_arab" => "سَـرِيْـرٌ - سَـجَّادَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 59",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 58"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 60"),
                    "title_arab" => "مِـرْآةٌ - جَـوَّالٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 60",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 59"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 61"),
                    "title_arab" => "نَامَ - تَـرَبَّـعَ",
                    "kata" => "7"
                ],
                
                
                [
                    "tema" => "Mufrodat 61",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 60"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 62"),
                    "title_arab" => "مَـوْقِـدٌ - إِنَاءٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 62",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 61"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 63"),
                    // "next" => "",
                    "title_arab" => "طَـبَـقٌ - شَـوْكَـةٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 63",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 62"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 64"),
                    "title_arab" => "رَفُّ الـصُّـحُـوْنِ - مَاءٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 64",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 63"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 65"),
                    // "next" => "",
                    "title_arab" => "رُزٌّ - جَـمْـرَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 65",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 64"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 66"),
                    "title_arab" => "دُخَانٌ - بُـنٌّ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 66",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 65"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 67"),
                    "title_arab" => "شَايٌ - كَـرَفْـسٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 67",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 66"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 68"),
                    "title_arab" => "قَـرَنْـفِـلٌ - كُـرْنُـبٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 68",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 67"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 69"),
                    "title_arab" => "جَـوْزُ الْـهِـنْـدِ - زُبْـدَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 69",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 68"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 70"),
                    "title_arab" => "أَكَـلَ - مَـضَـعَ ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 70",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 69"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 71"),
                    "title_arab" => "عَـضَّ - خَـلَـطَ",
                    "kata" => "8"
                ],

                
                [
                    "tema" => "Mufrodat 71",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 70"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 72"),
                    "title_arab" => "اِخْـتَـلَـطَ - تَـسَـوَّقَ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 72",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 71"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 73"),
                    // "next" => "",
                    "title_arab" => "طَـعْـمٌ - بَارِدٌ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 73",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 72"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 74"),
                    "title_arab" => "حِـرِّيْـفٌ - رَيَّانٌ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 74",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 73"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 75"),
                    // "next" => "",
                    "title_arab" => "بِـرْكَـةٌ - مِـعْـلَاقٌ",
                    "kata" => "10"
                ],
                [
                    "tema" => "Mufrodat 75",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 74"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 76"),
                    "title_arab" => "دَلْـوٌ - مِـيْـزَابٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 76",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 75"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 77"),
                    "title_arab" => "اِغْـتَـسَـلَ - وَضَـعَ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 77",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 76"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 78"),
                    "title_arab" => "بَـصَـقَ - لَـوَّثَ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 78",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 77"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 79"),
                    "title_arab" => "سَـبَـحَ - رَشَّ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 79",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 78"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 80"),
                    "title_arab" => "تَـجَـمَّـدَ - صَـبَّ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 80",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 79"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 81"),
                    "title_arab" => "مَـدْرَسَـةٌ حُـكُـوْمِـيَّـةٌ - إِدَارَةٌ",
                    "kata" => "8"
                ],
                

                [
                    "tema" => "Mufrodat 81",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 80"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 82"),
                    "title_arab" => "عَـمُـوْدٌ - مَـصْـرُوْفُ الْـجَـيْـبِ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 82",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 81"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 83"),
                    // "next" => "",
                    "title_arab" => "رَشْـوَةٌ - سَـبُّـوْرَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 83",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 82"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 84"),
                    "title_arab" => "حِـبْـرٌ - شَـهَادَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 84",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 83"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 85"),
                    // "next" => "",
                    "title_arab" => "شَـهَادَةُ الإِنْـجَازِ - جَامِعَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 85",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 84"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 86"),
                    "title_arab" => "دِرَاسَـةٌ أُوْلَـى - نَـشْـرَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 86",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 85"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 87"),
                    "title_arab" => "نَـتِـيْـجَـةٌ - مُـصَـحِّـحٌ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 87",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 86"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 88"),
                    "title_arab" => "ذَهَـبَ - مَـرَّنَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 88",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 87"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 89"),
                    "title_arab" => "اِمْـتَـحَـنَ - شَـكَا",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 89",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 88"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 90"),
                    "title_arab" => "صَـنَـعَ - رَافَـقَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 90",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 89"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 91"),
                    "title_arab" => "خَـدِمَ - أَخْـبَـرَ",
                    "kata" => "8"
                ],

                [
                    "tema" => "Mufrodat 91",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 90"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 92"),
                    "title_arab" => "قَـرَأَ - وَصَــلَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 92",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 91"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 93"),
                    // "next" => "",
                    "title_arab" => "أَوْصَـلَ - أَطَاعَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 93",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 92"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 94"),
                    "title_arab" => "خَالَـفَ - طَـرَدَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 94",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 93"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 95"),
                    // "next" => "",
                    "title_arab" => "شَـرَحَ - غَـضِـبَ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 95",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 94"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 96"),
                    "title_arab" => "دَرَّاجَـةٌ - بِـتْـشَا",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 96",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 95"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 97"),
                    "title_arab" => "عَـرَبَـةٌ - طَائِـرَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 97",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 96"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 98"),
                    "title_arab" => "دَبَّابَـةٌ - بُـوْرٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 98",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 97"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 99"),
                    "title_arab" => "مَـقْـعَـدٌ - تَـذْكِـرَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 99",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 98"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 100"),
                    "title_arab" => "تَـأْشِـيْـرَةٌ - مَـسَافَـةُ الـسَّـفَـرِ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 100",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 99"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 101"),
                    "title_arab" => "قَادَ - اِلْـتَـفَـتَ",
                    "kata" => "8"
                ],

                
                [
                    "tema" => "Mufrodat 101",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 100"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 102"),
                    "title_arab" => "صَـدَمَ - أَبْـحَـرَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 102",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 101"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 103"),
                    // "next" => "",
                    "title_arab" => "طَـبِـيْـبٌ - دَوَاءٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 103",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 102"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 104"),
                    "title_arab" => "دَاءٌ - مِـجْـهَـرٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 104",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 103"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 105"),
                    // "next" => "",
                    "title_arab" => "ضِـيَاءٌ - بَـثْـرَةٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 105",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 104"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 106"),
                    "title_arab" => "مَـغْـصٌ - سَـرَطَانٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 106",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 105"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 107"),
                    "title_arab" => "إِسْـهَالٌ - كَـسِـيْـحٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 107",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 106"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 108"),
                    "title_arab" => "عَالَـجَ - زَادَ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 108",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 107"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 109"),
                    "title_arab" => "اِزْدَادَ - حَـسِـبَ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 109",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 108"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 110"),
                    "title_arab" => "كَـلْـبٌ - بَـقَـرٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 110",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 109"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 111"),
                    "title_arab" => "جَامُـوْسٌ - قُـنْـفُـذٌ",
                    "kata" => "8"
                ],

                
                [
                    "tema" => "Mufrodat 111",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 110"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 112"),
                    "title_arab" => "سَـرَطَانٌ - حِـمَارٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 112",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 111"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 113"),
                    // "next" => "",
                    "title_arab" => "حِـمَارُ الـزَّرَدِ - إِنْـكِـلِـيْـسٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 113",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 112"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 114"),
                    "title_arab" => "دُبٌّ - خُـفَاشٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 114",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 113"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 115"),
                    // "next" => "",
                    "title_arab" => "جَـمَـلٌ - يَـرَقَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 115",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 114"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 116"),
                    "title_arab" => "غُـرَابٌ - طَـيْـرٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 116",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 115"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 117"),
                    "title_arab" => "وَزٌّ - قِـرَشٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 117",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 116"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 118"),
                    "title_arab" => "صَـدَفٌ - خُـرْطُـوْمٌ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 118",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 117"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 119"),
                    "title_arab" => "أَطْـعَـمَ - تَـسَـلَّـقَ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 119",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 118"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 120"),
                    "title_arab" => "طَارَ - مَاءَ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 120",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 119"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 121"),
                    "title_arab" => "تُـفَّاحٌ - اَفُـوْكَادُو",
                    "kata" => "8"
                ],
                
                
                [
                    "tema" => "Mufrodat 121",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 120"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 122"),
                    "title_arab" => "شَـمَامٌ - فَاكِـهَـةُ الـتِّـنِـيْـنَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 122",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 121"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 123"),
                    // "next" => "",
                    "title_arab" => "أَنَانَاسُ - ذُرَّةٌ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 123",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 122"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 124"),
                    "title_arab" => "حَـصَـدَ - حَـرَثَ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 124",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 123"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 125"),
                    // "next" => "",
                    "title_arab" => "مَـطْـبَـخٌ - مَـحَـطَّـةُ الـقِـطَارِ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 125",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 124"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 126"),
                    "title_arab" => "مَـحَـطَّـةُ اْلـبِـنْـزِيْـنِ - مَـمْـلَـكَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 126",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 125"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 127"),
                    "title_arab" => "مَـحْـكَـمَـةٌ - شَارِعٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 127",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 126"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 128"),
                    "title_arab" => "مَـتْـحَـفٌ - شُـرْفَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 128",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 127"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 129"),
                    "title_arab" => "مَـسْـكَـنٌ - جَامِـعَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 129",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 128"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 130"),
                    "title_arab" => "كَـنِـيْـسَـةٌ - بُـرْجٌ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 130",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 129"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 131"),
                    "title_arab" => "جَاءَ - بَاتَ",
                    "kata" => "6"
                ],
                
                [
                    "tema" => "Mufrodat 131",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 130"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 132"),
                    "title_arab" => "بَـنَـى - حَـيِـيَ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 132",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 131"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 133"),
                    // "next" => "",
                    "title_arab" => "شَـمْـسٌ - جَـوٌّ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 133",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 132"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 134"),
                    "title_arab" => "قُـزَحٍ - مَـرْجَانٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 134",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 133"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 135"),
                    // "next" => "",
                    "title_arab" => "سَـفْـحٌ - سَـحَابٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 135",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 134"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 136"),
                    "title_arab" => "ثَـلْـجٌ - شَاطِـئٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 136",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 135"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 137"),
                    "title_arab" => "قَارَةٌ - غَارٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 137",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 136"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 138"),
                    "title_arab" => "خَـلَـقَ - أَشْـرَقَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 138",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 137"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 139"),
                    "title_arab" => "صَـوَّرَ - تَـسَـلَّـقَ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 139",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 138"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 140"),
                    "title_arab" => "مُـعَـلِّـمٌ - مُـخْـتَـطِـفٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 140",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 139"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 141"),
                    "title_arab" => "سَارِقٌ - صَـيَّادُ الـسَّـمَـكِ",
                    "kata" => "8"
                ],

                
                [
                    "tema" => "Mufrodat 141",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 140"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 142"),
                    "title_arab" => "صَـيَّادٌ - مُـصَـوِّرٌ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 142",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 141"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 143"),
                    // "next" => "",
                    "title_arab" => "مُـشَـعْـوِذٌ - خَـيَّاطٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 143",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 142"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 144"),
                    "title_arab" => "طَيَّارٌ - رِيَاضِـيٌّ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 144",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 143"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 145"),
                    // "next" => "",
                    "title_arab" => "رَئِـيْـسٌ - نَائِـبُ رَئِـيْـسُ الْـجُـمْـهُـوْرِيَّـةِ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 145",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 144"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 146"),
                    "title_arab" => "وَزِيْـرٌ - رَئـِيْـسُ اْلـقَـرْيَـةِ",
                    "kata" => "7"
                ],
                [
                    "tema" => "Mufrodat 146",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 145"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 147"),
                    "title_arab" => "رَأَسَ - جَـمَـعَ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 147",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 146"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 148"),
                    "title_arab" => "اِخْـتَارَ - كَـفَـى",
                    "kata" => "5"
                ],
                [
                    "tema" => "Mufrodat 148",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 147"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 149"),
                    "title_arab" => "مَوْسِمُ الأَمْطَارِ - فَصْلُ الرَّبِيْعِ",
                    "kata" => "6"
                ],
                [
                    "tema" => "Mufrodat 149",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 148"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 150"),
                    "title_arab" => "مَاءٌ - طِـفْـلٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 150",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 149"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 151"),
                    "title_arab" => "أَصْـلٌ - وِسَادَةٌ",
                    "kata" => "8"
                ],
                
                
                [
                    "tema" => "Mufrodat 151",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 150"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 152"),
                    "title_arab" => "حَـجَـرٌ - دَفْـتَـرٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 152",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 151"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 153"),
                    // "next" => "",
                    "title_arab" => "شَـهْـرٌ - بِـنْـطَالٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 153",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 152"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 154"),
                    "title_arab" => "سِـرْوَالٌ - فِـلْـمٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 154",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 153"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 155"),
                    // "next" => "",
                    "title_arab" => "صُـوْرَةٌ - قَـلْـبٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 155",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 154"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 156"),
                    "title_arab" => "حَـيَـوَانٌ - سَـبِـيْـلٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 156",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 155"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 157"),
                    "title_arab" => "شَارِعٌ - مِـلْـيُـوْنٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 157",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 156"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 158"),
                    "title_arab" => "قَاعِـدَةٌ - فِـرَاشٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 158",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 157"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 159"),
                    "title_arab" => "فِـعْـلٌ - قِـرْطَاسٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 159",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 158"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 160"),
                    "title_arab" => "رَئِـيْـسٌ - ظُـفْـرٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 160",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 159"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 161"),
                    "title_arab" => "كُـرْسِـيٌّ - مَـعْـرِفَـةٌ",
                    "kata" => "8"
                ],
                
                [
                    "tema" => "Mufrodat 161",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 160"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 162"),
                    "title_arab" => "نَـوْعٌ - طَالِـبٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 162",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 161"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 163"),
                    // "next" => "",
                    "title_arab" => "مَـتْـحَـفٌ - مَـصْـنَـعٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 163",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 162"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 164"),
                    "title_arab" => "مَـلْـبَـسٌ - مِـسْـطَـرَةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 164",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 163"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 165"),
                    // "next" => "",
                    "title_arab" => "مِـمْـسَـحَـةٌ - بَـطْـنٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 165",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 164"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 166"),
                    "title_arab" => "صَـحْـنٌ - صَاحِـبٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 166",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 165"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 167"),
                    "title_arab" => "نَـعْـلٌ - صِـفَـةٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 167",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 166"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 168"),
                    "title_arab" => "مِـرْفَـقٌ - ضَـيْـفٌ",
                    "kata" => "9"
                ],
                [
                    "tema" => "Mufrodat 168",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 167"),
                    "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 169"),
                    "title_arab" => "يَـدٌ - دُكَّانٌ",
                    "kata" => "8"
                ],
                [
                    "tema" => "Mufrodat 169",
                    "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 168"),
                    "next" => "",
                    "title_arab" => "هَـدَفٌ - لَـوْنٌ",
                    "kata" => "9"
                ],
            ];
            
            return $data;
        }

        public function data_kata($id = "", $tema, $kata, $kata_arab, $arti, $cek = "", $status = "on"){
            $data = [
                "id" => $id,
                "tema" => $tema,
                "kata" => $kata,
                "kata_arab" => $kata_arab,
                "arti" => $arti,
                "huruf" => array_unique($this->huruf($kata_arab, $cek)),
                "status" => $status
            ];

            return $data;
        }

        public function huruf($kata, $cek = ""){
            $i = 0;
            $huruf = [];
            while ($kata != ""){
                if(substr($kata, -1) == "-"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == " "){
                    $huruf[$i] = "_";
                    $kata = substr($kata, 0, -1);
                } else if (substr($kata, -8) == "اَلْ") {
                    $huruf[$i] = substr($kata, -8);
                    $kata = substr($kata, 0, -8);
                } else if (substr($kata, -6) == "اَل" || substr($kata, -6) == "الْ" ){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if (substr($kata, -4) == "ال" ){
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                } else if (substr($kata, -2, 2) == "ّ" || substr($kata, -6, 2) == "ّ" || substr($kata, -4, 2) == "ّ"){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if(substr($kata, -2) == "ا" || substr($kata, -2) == "ى" || substr($kata, -2) == "ج" || substr($kata, -2) == "-" || substr($kata, -2) == "_" || substr($kata, -2) == "ل" || substr($kata, -2) == "آ" || substr($kata, -2) == "ي" || substr($kata, -2) == "و"){
                    $huruf[$i] = substr($kata, -2);
                    $kata = substr($kata, 0, -2);
                } else {
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                }

                $i++;
            }

            if($cek != ""){
                $huruf[$i] = $cek;
            }
            
            return $huruf;
        }
    }