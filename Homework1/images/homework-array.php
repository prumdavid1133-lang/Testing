<?php
$pages = [
    "Home" => ["Our Wonderful Temple", "Angkor_Wat.jpg", "TAngkor Wat (/ˌæŋkɔːr ˈwɒt/; Khmer: អង្គរវត្ត, 'City/Capital of Temples') is a Theravada Buddhist temple complex and the largest religious complex in the world. Located on a site measuring 162.6 hectares (1.6 km2; 401.8 acres) within the ancient capital of Angkor, it was constructed between 1113 and 1150 CE during the reign of the Khmer king Suryavarman II. From the late 13th century onward, the complex continued to be a Buddhist temple and has remained an active center of Buddhist worship for centuries. Angkor Wat is noted for its monumental scale, extensive bas-reliefs, and architectural unity characteristic of Khmer architecture, and unlike most Angkorian temples it is oriented toward the west. It is a national symbol of Cambodia and appears on the Cambodian national flag."],
    "Ta Prohm" => ["Ta Prohm Temple", "Ta-Prohm.webp", "Ta Prohm \(Khmer: ប្រាសាទតាព្រហ្ម, UNGEGN: Ta Prôhm, ALA-LC: Tā Brahm [taː prom]; \"Ancestor Brahma\") is the modern name of a temple near the city of Siem Reap, Cambodia, approximately one kilometre east of Angkor Thom and on the southern edge of the East Baray. It was built in the Bayon style largely in the late 12th century and early 13th century and was originally called Rajavihara (Khmer: រាជវិហារ, UNGEGN: Réachvĭhar, ALA-LC: Rājvihār [riəc.vihiə]; \"Royal Monastery\"). It was founded by the Khmer King Jayavarman VII as a Mahayana Buddhist monastery and center of learning dedicated to his mother.[1] Almost 80,000 people were required to maintain or attend at the temple, including over 2,700 officials and 615 dancers."],
    "Bayon" => ["Bayon Temple", "Bayon.jpg", "The Bayon (Khmer: ប្រាសាទបាយ័ន, Prasat Bayoăn [praːsaːt baːjŏən]; /ˈbaɪɔːn/ BAI-on) is a richly decorated Theravada Buddhist temple of the Khmer Empire located at Angkor in Cambodia. Built in the late 12th or early 13th century as the state temple of King Jayavarman VII (Khmer: ព្រះបាទជ័យវរ្ម័នទី ៧), it stands at the centre of Jayavarman’s capital city, Angkor Thom (Khmer: អង្គរធំ).[1][2] The Bayon reflects the strong Buddhist orientation of Jayavarman VII’s reign. Originally conceived as a Mahayana Buddhist monument centered on the cult of the Bodhisattva of compassion, the temple later adapted to the spread of Theravada Buddhism in Cambodia. Its iconography, spatial organization, and emphasis on compassion and kingship illustrate the close relationship between Buddhism and royal authority at Angkor, while its continued use as a Buddhist sanctuary demonstrates the enduring influence of Buddhism in the region."],
    "Koh Ker" => ["Koh Ker Temple", "Koh Ker.jpg", "Koh Ker (Khmer: ប្រាសាទកោះកេរ្ដិ៍, Brasat Kaôh Kértĕ [praːsaːt kɑh keː]) is a remote archaeological site in northern Cambodia about 120 kilometres (75 mi) away from Siem Reap and the ancient site of Angkor. It is a jungle filled region that is sparsely populated. More than 180 sanctuaries were found in a protected area of 81 square kilometres (31 sq mi).[1]: 13  Only about two dozen monuments can be visited by tourists because most of the sanctuaries are hidden in the forest and the whole area is not fully demined. 

Koh Ker is the modern name for an important city of the Khmer empire. In inscriptions the town is mentioned as Lingapura (city of lingams) or Chok Gargyar[2]: 70  (translated as city of glance,[3] or as iron tree forest)."]
];
$page = $_GET['page'] ?? array_key_first($pages);

if (!array_key_exists($page, $pages)) {
    $page = array_key_first($pages);
}

$title = $pages[$page][0];
$image = $pages[$page][1];
$description = $pages[$page][2];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Web Page</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        nav {
            background: #086a2d;
            padding: 10px;
            margin-bottom: 20px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }

        .content {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
        }
        footer{
            background: #666;
            color:#fff;
            padding:15px;
            margin-top:40px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Dynamic Web Page</h1>
<div class="nav-wrapper"></div>
<nav>
    <a href="#">Arrays</a>

    <?php foreach ($pages as $key => $value): ?>
        <a class="<?= ($page == $key) ? 'active' : '' ?>"
           href="?page=<?= urlencode($key) ?>">
           <?= $key ?>
        </a>
    <?php endforeach; ?>
</nav>

<div class="card">
    <img src="<?php echo $image; ?>" alt="">
    <h2><?php echo $title; ?></h2>
    <p><?php echo $description; ?></p>
</div>
<footer>  © 2026 Copyright: Kim Hong1</footer>

</body>
</html>
