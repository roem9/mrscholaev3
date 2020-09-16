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
                        "kata" => "بِـلاَطٌ",
                        "kata_arab" => "بِلاَطٌ",
                        "arti" => "Lantai",
                        "huruf" => array_unique($this->huruf("بِلاَطٌ")),
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
                        "kata_arab" => "ءء",
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
                    // "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 43"),
                    "next" => "",
                    "title_arab" => "كَـنَـسَ - دَخَـلَ",
                    "kata" => "8"
                ],
                // [
                //     "tema" => "Mufrodat 43",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 42"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 44"),
                //     "title_arab" => "سَـمِـيْـنٌ - مَـغْـلُـوْبٌ",
                //     "kata" => "8"
                // ],
                // [
                //     "tema" => "Mufrodat 44",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 43"),
                //     // "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 45"),
                //     "next" => "",
                //     "title_arab" => "ثِـقَّـةُ النَّـفْـسِ - مُـخْـجِـلٌ",
                //     "kata" => "7"
                // ],
                // [
                //     "tema" => "Mufrodat 45",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 44"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 46"),
                //     "title_arab" => "مُـمْـتِـعٌ - مُـتَـفَاجِـئٌ",
                //     "kata" => "10"
                // ],
                // [
                //     "tema" => "Mufrodat 46",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 45"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 47"),
                //     "title_arab" => "تَائِـبٌ - سَـرِيْـعُ الـنِّـسْـيَانِ",
                //     "kata" => "5"
                // ],
                // [
                //     "tema" => "Mufrodat 47",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 46"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 48"),
                //     "title_arab" => "كَاذِبٌ - مُـشَاغِـبٌ",
                //     "kata" => "8"
                // ],
                // [
                //     "tema" => "Mufrodat 48",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 47"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 49"),
                //     "title_arab" => "لَـطِـيْـفٌ - شَـهِـيْـرٌ",
                //     "kata" => "8"
                // ],
                // [
                //     "tema" => "Mufrodat 49",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 48"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 50"),
                //     "title_arab" => "عَاطِـفِـيٌّ - ذَكِـيٌّ",
                //     "kata" => "8"
                // ],
                // [
                //     "tema" => "Mufrodat 50",
                //     "back" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 49"),
                //     "next" => "ft_1/mufrodat"."?id=".MD5("Mufrodat 51"),
                //     "title_arab" => "غَـبِـيٌّ - أَبْـكَـمٌ",
                //     "kata" => "8"
                // ],


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
                } else if(substr($kata, -2) == "ا" || substr($kata, -2) == "ى" || substr($kata, -2) == "-" || substr($kata, -2) == "_" || substr($kata, -2) == "ل" || substr($kata, -2) == "آ" || substr($kata, -2) == "ي" || substr($kata, -2) == "و"){
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