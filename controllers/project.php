<?php

$projects = [
    "/projekts1" => [
        "type" => "Projekts",
        "number" => "01",
        "title" => "Mysterymeal.exe",
        "githubUrl" => "https://github.com/RPluzmo/DBProgMysteryMeal",
        "description" => "Ēdienu ideju un recepšu projekts ar datu bāzi.",
        "detailedDescription" => "<i>MysteryMeal.exe</i> ir <b>Laravel un MySQL</b> projekts, kas palīdz lietotājam atrast <b>ēdienu receptes no pieejamajām sastāvdaļām.</b>
        
        Lietotājs ievada produktus, piemēram, vistu, tomātus vai rīsus, un tiek meklētas receptes,kas satur šos produktus. Receptes tiek meklētas gan projekta <b>lokālajā datubāzē</b>, gan <b>Spoonacular ārējā API</b>. 
        
        Lietotājs var norādīt arī maksimālo gatavošanas laiku un izvēlēties, vai parādīt tikai receptes, kurām <b>pieejamas visas sastāvdaļas</b>, vai arī <b>receptes ar dažiem trūkstošiem produktiem</b>. Papildus tam iespējams izmantot <i>Gemini mākslīgo intelektu</i>, kas pēc ievadītajām sastāvdaļām izveido jaunas receptes latviešu valodā ar pagatavošanas soļiem, padomiem un aptuveno gatavošanas laiku.
        
        Atrastajām receptēm tiek parādīta sastāvdaļu atbilstība, trūkstošie produkti, pagatavošanas ilgums, apraksts un instrukcijas. <b>Reģistrēti lietotāji var saglabāt receptes favorītos</b>, izveidot savas receptes ar attēlu, sastāvdaļām, soļiem un padomiem, kā arī vēlāk tās labot.
        
        Projektā ir iekļauta arī <b>mini spēle</b>, kurā spēlētājam grozā jāķer pārtikas produkti un jāizvairās no bīstamiem priekšmetiem, bet iegūtie rezultāti tiek saglabāti datubāzē. Spēlei ir divi režīmi, personīgie un kopējie rekordi, kā arī publisks līderu saraksts ar meklēšanas un kārtošanas iespējām.
        
        Administratoram ir atsevišķa pārvaldības vide, kurā iespējams apskatīt statistiku, pārvaldīt lietotājus un lomas, kā arī pievienot, labot un dzēst projekta receptes.",
        "technologies" => "Laravel / MySQL / API",
        "learning" => "API integrācija, meklēšana pēc pieprasījuma un MI izmantošana recepšu ieteikumiem.",
        "coverImage" => "mysterymeal/mysterymealcover.png",
        "gallery" => [
            "mysterymeal/mysterymeal1.png",
            "mysterymeal/mysterymeal2.png",
            "mysterymeal/mysterymeal3.png",
            "mysterymeal/mysterymeal4.png",
            "mysterymeal/mysterymeal5.png",
        ],
        "youtubeId" => "",
    ],
    "/projekts2" => [
         "type" => "Projekts",
        "number" => "02",
        "title" => "EmEks Motokrosa kalendārs",
        "githubUrl" => "https://github.com/RPluzmo/WebRPNos",
        "description" => "Vietne kur sportisti var pieteikties uz treniņeim Latvijas motokrosa trasēs un redzēt citus sportistus, kas plāno ierasties trasē. Moto trasēs kas rīko sacensības ir iespējams redzēt plānotās sacīkstes un norises datumu.",
        "detailedDescription" => "Šis projekts ir <i>Laravel</i> tīmekļa vietne “Motokrosa kalendārs” ar MySQL datubāzi, kas paredzēta motokrosa trašu, sacensību un treniņu pārvaldīšanai.
        
        Tās <b>galvenais mērķis</b> ir vienuviet parādīt Latvijas motokrosa trases un informāciju par tajās notiekošajiem pasākumiem. Lietotāji var apskatīt trases interaktīvā <i>OpenStreetMap</i> un <i>Leaflet.js</i> kartē, aplūkojot atrašanās vietu, segumu, aprakstu, attēlus.
        
        Projektā ietvers īpašs <b>sacīkšu kartes skats</b>, kurā tiek parādītas gaidāmās sacensības, kuras iespējams filtrēt pēc <b>kategorijas(Latvijas kauss, Nacionālais kauss u.c.)</b>, bet katrai kategorijai kartē ir sava krāsa.
        
        Atverot konkrētu trasi, lietotājs var redzēt sacensību nosaukumu, datumu, aprakstu un atlikušo laiku līdz pasākumam. <b>Treniņu skatā</b> iespējams izvēlēties šodienu vai rītdienu un pieteikties treniņam, norādot ierašanās laiku, motocikla klasi, pieredzes līmeni un klubu. 
        
        Sistēma automātiski pārbauda, vai trase ir pieejama, un to <b>slēdz treniņiem, ja tuvāko septiņu</b> dienu laikā tajā paredzētas sacensības.
        
        Reģistrēti lietotāji savus datus saglabā savā lietotājprofilā, bet nereģistrēti braucēji treniņam var pieteikties, aizpildot informāciju par sevi. Trases saimnieki var rediģēt <b>savas trases datus, sacensības un attēlus</b>, savukārt administratori var pārvaldīt visas trases, lietotājus un sacīkšu kategorijas.
        
        Visa informācija tiek saglabāta datubāzē, bet sistēma ar <i>Laravel</i> kontrolieriem, modeļiem un servisiem apstrādā pieteikumus, pārbauda datus un nodrošina katrai lietotāja lomai atbilstošas iespējas.",
        "technologies" => "Laravel / MySQL",
        "learning" => "Darbs ar kartēm un Leaflet.js marķieriem, izmantojot datubāzes datus.",
        "coverImage" => "emeks/emekscover.png",
        "gallery" => [
            "emeks/emeks1.png",
            "emeks/emeks2.png",
            "emeks/emeks3.png",
            "emeks/emeks4.png",
            "emeks/emeks5.png",
        ],
        "youtubeId" => "",
    ],
    "/projekts3" => [
        "type" => "Projekts",
        "number" => "03",
        "title" => "WEBMuita RHL",
        "githubUrl" => "https://github.com/RPluzmo/WEBMuita",
        "description" => "Muitas projekts, kas apstrādā milzīgu datu apjomu no API un sadala vairākiem muitas darbiniekiem pēc viņu veicamiem pienākumiem un darbam nepieciešamās informācijas",
        "detailedDescription" => "Projekts WEBMuita ir <i>Laravel un MySQL</i> datubāzes vidē izveidota <b>muitas kravu uzskaites un kontroles sistēma</b>, kas palīdz reģistrēt, pārraudzīt un pārbaudīt kravu pārvietošanu. Sistēmas <b>galvenais objekts</b> ir kravas lieta ar unikālu ID, statusu, prioritāti, izcelsmes un galamērķa valsti, transportlīdzekli un saistītajiem dokumentiem.
        
        <b>Brokeris</b> var izveidot jaunu kravu, ievadot automašīnas numuru, valstis un pievienojot nepieciešamos dokumentus. Pēc iesniegšanas sistēma automātiski izveido transportlīdzekļa ierakstu, piešķir kravai unikālu numuru un sākotnēji piešķir statusu “jauna”.
        
        <b>Lietotāji</b> var meklēt kravas pēc lietas ID vai automašīnas numura, kā arī filtrēt tās pēc statusa, prioritātes un datuma.
        
        <b>Inspektors</b> kravas apskates laikā var mainīt tās statusu, piemēram, uz “notiek apskate”, “atbrīvota” vai “aizturēta”.
        
        <b>Analītiķis</b> izvērtē iespējamos riskus, apskata riska pazīmes un piešķir kravai atbilstošu prioritāti.
        
        Administrators pārvalda lietotājus, maina viņu lomas un aktivizē vai deaktivizē piekļuvi sistēmai. <b>Publiskajā daļā</b> jebkurš lietotājs var ievadīt kravas ID vai reģistrācijas numuru un uzzināt tās pašreizējo statusu, maršrutu un pēdējo atjaunināšanas laiku.
        
        Dati tiek glabāti <i>MySQL datubāzē</i>, lietotāji piesakās ar autentifikāciju, bet sākotnējos transportlīdzekļu, kravu, lietotāju, dokumentu un pārbaužu datus sistēma var ielādēt no ārēja API",
        "technologies" => "LARAVEL / MySQL / API",
        "learning" => "Liela JSON datu apjoma saņemšana, validēšana un attēlošana lietotāja saskarnē.",
        "coverImage" => "web-muita/webmuitacover.png",
        "gallery" => [
            "web-muita/webmuit1.png",
            "web-muita/webmuita2.png",
            "web-muita/webmuita3.png",
            "web-muita/webmuita4.png",
            "web-muita/webmuita5.png",
        ],
        "youtubeId" => "",
    ],
    "/projekts4" => [
        "type" => "Projekts",
        "number" => "04",
        "title" => "Classroom",
        "githubUrl" => "https://github.com/RPluzmo/Classroom",
        "description" => "Google Classroom alternatīva",
        "detailedDescription" => "Šis ir pamatā <i>PHP</i> un <i>MySQL</i> datubāzes e-klases projekts, kas paredzēts mācību procesa organizēšanai tiešsaistē.
        
        Sistēmā ir <b>trīs lietotāju lomas: administrators, skolotājs un skolēns</b>.
        <b>Skolotājs</b> var izveidot kursus, pievienot uzdevumus, noteikt izpildes termiņus un pievienot failus. 
        
        Skolēns kursam pievienojas ar <b>īpašu kursa kodu vai QR kodu</b> un var apskatīt pieejamos uzdevumus. <b>Skolēni var</b> augšupielādēt savus darbus, <b>bet skolotāji</b> tos var apskatīt, novērtēt un pievienot atsauksmes. Pie uzdevumiem <b>iespējams rakstīt komentārus</b>, lai skolēni un skolotāji varētu sazināties.
        
        Administrators var pārvaldīt lietotājus, mainīt to lomas un apskatīt sistēmā veiktās darbības.
        
        <b>Lietotāji var</b> rediģēt savu profilu, pievienot profila attēlu un pārslēgt gaišo vai tumšo tēmu. Projekts darbojas ar PHP kontrolieriem, klasēm un skatiem, bet dati tiek saglabāti <i>MySQL datubāzē</i>, izmantojot lietotāju sesijas un piekļuves tiesību pārbaudes.",
        "technologies" => "HTML / CSS / JavaScript / PHP / MySQL",
        "learning" => "Lietotāju saziņa ar komentāriem un skaidra mācību satura organizēšana.",
        "coverImage" => "classroom/classroomcover.png",
        "gallery" => [
            "classroom/classroom1.png",
            "classroom/classroom2.png",
            "classroom/classroom3.png",
            "classroom/classroom4.png",
            "classroom/classroom5.png",
        ],
        "youtubeId" => "",
    ],
    "/projekts5" => [
        "type" => "Projekts",
        "number" => "05",
        "title" => "EKlas(e)",
        "githubUrl" => "https://github.com/RPluzmo/eklas",
        "description" => "Eklases attēlojums",
        "detailedDescription" => "Grade Viewer DUO - E-klase ir vienkārša <i>PHP un MySQL</i> aizmugursistēmas tīmekļa sistēma skolēnu mācību rezultātu pārvaldīšanai.
        
        Tajā ir divas lietotāju lomas: skolēns un skolotājs. 
        <b>Skolēns</b> var apskatīt savus mācību priekšmetus un savus vērtējumus, kā arī <b>pievienot, mainīt vai noņemt</b> profila attēlu. 
        
        <b>Skolotājs</b> var pievienot, rediģēt un dzēst skolēnus, mācību priekšmetus un atzīmes. Skolotājs var arī <b>filtrēt jeb kārtot skolēnus</b> pēc vārda, uzvārda vai priekšmeta un kārtot sarakstu augošā vai dilstošā secībā.
        
        Sistēma neļauj vienam skolēnam vienu <b>priekšmetu pievienot vairākas reizes</b> un pārbauda ievadīto datu pareizību. <b>Lietotājs pieslēdzas</b>, ievadot vārdu, uzvārdu un e-pastu, pēc kā sistēma nosaka viņa lomu un atver atbilstošo skatu.
        
        Informācija tiek glabāta <i>MySQL datubāzē</i>, kur atsevišķi <b>tiek saglabāti</b> skolotāji, skolēni, priekšmeti un atzīmes. Profila attēli tiek glabāti `uploads/` mapē, bet to atrašanās vieta tiek saglabāta datubāzē. <b>Projektā tiek izmantotas</b> PHP sesijas, PDO sagatavotie SQL vaicājumi datubāzes migrācijas datnē, HTML, CSS un JavaScript.",
        "technologies" => "HTML / CSS / JavaScript / PHP / MySQL",
        "learning" => "Esošas saskarnes analīze un datu attēlošana ar PHP un MySQL.",
        "coverImage" => "eklase/eklasecover.png",
        "gallery" => [
            "eklase/eklase1.png",
            "eklase/eklase2.png",
            "eklase/eklase3.png",
            "eklase/eklase4.png",
            "eklase/eklase5.png",
        ],
        "youtubeId" => "",
    ],
];

$path = request_path();
$project = $projects[$path] ?? null;

if ($project === null) {
    http_response_code(404);
    require __DIR__ . "/404.php";
    exit;
}

$pageTitle = $project["title"] . " | Portfolio";
require __DIR__ . "/../views/project.view.php";
