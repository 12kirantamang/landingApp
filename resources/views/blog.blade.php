<!DOCTYPE html>
<html lang="Japan">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>blog</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="img/jibc1.png" rel="icon" />
<link rel="stylesheet" href="css/blog.css" />

<body>
  <nav id="navbar">
    <div class="container nav-container">
      <a href="#" class="logo"> OKAYAMA</a>
      <ul class="nav-links">
           <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('/about')}}">About Us</a></li>
                <li><a href="{{URL::to('/blog')}}">blog</a></li>
                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
      </ul>
    </div>
    <div id="lang-switcher" style="position: absolute; right: 20px; top: 20px">
      <button onclick="setLanguage('en')">EN</button>
      <button onclick="setLanguage('ne')">NE</button>
      <button onclick="setLanguage('jp')">JP</button>
    </div>
  </nav>

  <!-- Hero Section -->
  <header>
    <div class="hero-content">
      <h1>BLOG</h1>
    </div>
  </header>
  <div class="section">
    <div class="heading">
      <h1>Gallery</h1>
      <!-- <p>lorem20</p> -->
    </div>
    <div class="section-container">
      <h2 class="heading">okayama</h2>
      <img src="img/1_Okayama.jpg" alt="" />
      <img src="img/5b1b6be9fe83038333f1cd9eb721d0f4.jpg" alt="" />
      <img src="img/4_Okayama.jpg" alt="" />
      <!-- <img src="img/qiuno-gong-yuanwo-buku-ri-benno-yun-tong-dena-zhe-wuwo-zheteiruashiano-nu-xing.jpg" alt=""> -->

      <p class="p translatable" 
      data-en="🌸<b>Discover Okayama</b> : Japan’s Hidden Gem Okayama is a city in
        western Japan that more people around the world are starting to
        notice—and for good reason! It's famous for: 🍑<b>
          1. The Legend of Momotaro (Peach Boy)</b>
        Okayama is the home of Momotaro, one of Japan's most beloved folk
        heroes. The story tells of a boy born from a peach who defeats ogres
        with his animal friends. Around the city, you’ll find statues,
        souvenirs, and even themed snacks honoring this tale. 🏯
        <b>2. Okayama Castle –</b> “The Crow Castle” This striking black castle,
        nicknamed Ujo (Crow Castle), is a beautiful sight—especially when paired
        with cherry blossoms in spring or red maple leaves in autumn. It offers
        visitors a glimpse into samurai-era Japan. 🌳
        <b>3. Korakuen Garden </b>– One of Japan’s Top 3 Gardens Ranked among
        Japan's three most beautiful landscape gardens, Korakuen is a peaceful
        masterpiece of nature, with ponds, teahouses, and wide lawns. It's a
        must-see for anyone who loves traditional Japanese beauty. 🚅
        <b>4. Easy Access </b>and Hidden Treasures Only about 45 minutes by
        bullet train from Osaka, Okayama is a great stop for travelers heading
        west. It’s also the gateway to places like Naoshima (art island) and the
        scenic Seto Inland Sea. 🍇<b> 5. Fruits</b> and Sunshine Okayama is
        called the “Land of Sunshine” because of its great weather—and it’s also
        famous for sweet white peaches and Muscat grapes, which are considered
        luxury fruits in Japan."
      data-ne="🌸ओकायामा पत्ता लगाऔँ: जापानको लुकेको
        रत्न ओकायामा पश्चिमी जापानको एउटा शहर हो जुन अहिले संसारभरका मानिसहरूले
        चिन्न थालिरहेका छन्—र त्यो राम्रो कारणका साथ हो! यो शहर यी कुराहरूको
        लागि प्रख्यात छ: 🍑 १. मोमोतारो (पिच ब्वाय) को किंवदन्ती ओकायामा
        मोमोतारोको जन्मभूमि हो, जो जापानको सबैभन्दा प्रिय लोकनायकमध्ये एक हुन्।
        कथाअनुसार, एक पिच (आरु) बाट जन्मिएका बालकले आफ्ना जनावर साथीहरूको साथमा
        राक्षसहरूलाई पराजित गर्छन्। शहरभरि तपाईंले यो कथा समर्पित मूर्तिहरू,
        सम्झनाहरू, र विशेष खानाहरू भेट्नुहुनेछ। 🏯 २. ओकायामा महल – “कालो कौवा
        महल” यो आकर्षक कालो महल, जसलाई  उजो (कौवा महल) पनि भनिन्छ, विशेष गरी वसन्तको चेरी फूलहरू वा शरद ऋतुको रातो
        मेपल पातहरूसँग मेल खाँदा अति सुन्दर देखिन्छ। यसले पाहुनाहरूलाई समुराई युगको झल्को दिन्छ। 🌳 ३. कोराकुएन बगैंचा –
        जापानका शीर्ष ३ बगैंचामध्ये एक जापानका तीन सबैभन्दा सुन्दर पारम्परिक बगैंचाहरूमा गनिएको कोराकुएन एक शान्तिपूर्ण
        प्राकृतिक कलाको नमूना हो, जहाँ पोखरीहरू, चियाघरहरू, र फराकिला हरियाली मैदानहरू छन्। यो जापानी पारम्परिक सौन्दर्य
        मन पराउनेहरूको लागि अवश्य हेर्नु पर्ने ठाउँ हो। 🚅 ४. सजिलो पहुँच र लुकेका खजाना ओसाका बाट केवल करिब ४५ मिनेटको
        बुलेट ट्रेन यात्रा पछि ओकायामा पुग्न सकिन्छ, जसले गर्दा यो पश्चिमतिर यात्रा गर्ने पर्यटकहरूको लागि उपयुक्त
        बिन्दु हो। साथै, यो नाओशिमा (कलाको टापु) र सुन्दर सेटो आन्तरिक समुद्रतर्फ जाने प्रवेशद्वार पनि हो। 🍇 ५. फलफूल र
        घामपानी ओकायामालाई “घामको भूमि” भनिन्छ किनकि यहाँको मौसम सुन्दर हुन्छ—र यो आफ्नो मिठा सेता पिच (आरु) र मुस्कट
        अंगुरका लागि प्रसिद्ध छ, जुन जापानमा लक्जरी फल मानिन्छन्।" 
        data-jp="🌸Discover Okayama :
        日本の隠れた名所
        岡山は日本の西部に位置する都市で、今、世界中の人々の注目を集め始めています。その理由はたくさんあります。
        🍑1. 桃太郎伝説
        岡山は、日本で最も愛されている民話の英雄「桃太郎」の故郷です。桃から生まれた男の子が、動物の仲間たちとともに鬼を退治するという物語です。市内では、この物語をテーマにした像やお土産、スナックなどが見られます。
        🏯2. 岡山城 –「烏城」
        この印象的な黒い城は、「烏城（うじょう）」の愛称で親しまれており、春の桜や秋の紅葉と共に見ると特に美しいです。侍の時代の日本の姿を感じることができる場所です。
        🌳3. 後楽園 – 日本三名園のひとつ
        日本三名園に数えられる後楽園は、池、茶室、広々とした芝生を備えた自然の傑作で、伝統的な日本の美を愛する人には必見のスポットです。
        🚅4. アクセスの良さと隠れた魅力
        大阪から新幹線で約45分という便利な場所にあり、西日本を旅する際の立ち寄り地として最適です。また、直島（アートの島）や美しい瀬戸内海への玄関口としても知られています。
        🍇5. 果物と晴れの国
        岡山は「晴れの国」と呼ばれるほど天候が良く、甘くておいしい白桃やマスカットぶどうの産地としても有名です。これらは日本では高級フルーツとされています。">
        🌸<b>Discover Okayama</b> : Japan’s Hidden Gem Okayama is a city in
        western Japan that more people around the world are starting to
        notice—and for good reason! It's famous for: 🍑<b>
          1. The Legend of Momotaro (Peach Boy)</b>
        Okayama is the home of Momotaro, one of Japan's most beloved folk
        heroes. The story tells of a boy born from a peach who defeats ogres
        with his animal friends. Around the city, you’ll find statues,
        souvenirs, and even themed snacks honoring this tale. 🏯
        <b>2. Okayama Castle –</b> “The Crow Castle” This striking black castle,
        nicknamed Ujo (Crow Castle), is a beautiful sight—especially when paired
        with cherry blossoms in spring or red maple leaves in autumn. It offers
        visitors a glimpse into samurai-era Japan. 🌳
        <b>3. Korakuen Garden </b>– One of Japan’s Top 3 Gardens Ranked amonggit
        Japan's three most beautiful landscape gardens, Korakuen is a peaceful
        masterpiece of nature, with ponds, teahouses, and wide lawns. It's a
        must-see for anyone who loves traditional Japanese beauty. 🚅
        <b>4. Easy Access </b>and Hidden Treasures Only about 45 minutes by
        bullet train from Osaka, Okayama is a great stop for travelers heading
        west. It’s also the gateway to places like Naoshima (art island) and the
        scenic Seto Inland Sea. 🍇<b> 5. Fruits</b> and Sunshine Okayama is
        called the “Land of Sunshine” because of its great weather—and it’s also
        famous for sweet white peaches and Muscat grapes, which are considered
        luxury fruits in Japan.
    </div>
    <hr />
    <div class="section-container">
      <h2 class="heading">kurashiki</h2>
      <img src="img/kura1.webp" alt="" />
      <img src="img/kuri2.jpg" alt="" />
      <img src="img/kura2.webp" alt="" />
      <p class="p translatable"
        data-en="<b>Kurashiki</b> is one of Japan’s most picturesque towns, blending
        Edo-period charm with modern creativity. It's a place that captures
        attention with its beauty, history, and cultural depth.
        <b>🏘️ 1. Kurashiki</b> Bikan Historical Quarter The Bikan District is
        like walking into an old Japanese painting. With white-walled
        warehouses, willow-lined canals, and stone bridges, it’s one of
        Japan’s best-preserved historic areas. Many of the old buildings are
        now museums, cafés, and artisan shops. 🎨 <b>2. Ohara Museum </b>of
        Art – Japan’s First Western Art Museum Founded in 1930, this museum
        was the first in Japan to exhibit Western masterpieces. It features
        works by Monet, El Greco, Matisse, and more—right in the middle of
        traditional Japan. It's a unique cultural
        🚣 3. Canal Boat Rides </crossover>Kurashiki’s
        charming canal boats give you a peaceful, scenic ride through the old
        merchant town. It’s a popular experience for both tourists and
        photographers. <b>🛍️ 4. Handmade Goods</b> and Street Snacks Local
        crafts, denim products (from nearby Kojima, Japan’s jeans capital),
        and tasty treats like kurimanju (chestnut buns) make Kurashiki a great
        place for slow shopping and street food exploration.
        <b>👖 5. The Birthplace</b> of Japanese Denim Kurashiki is the center
        of Japanese denim, known worldwide for its quality and craftsmanship.
        Denim Street in Kojima is a must-visit for fashion lovers and anyone
        who appreciates high-end handmade jeans."
        data-ne="🏘️ १. कुराशिकी बिकान ऐतिहासिक जिल्ला
बिकान जिल्ला पुरानो जापानी चित्र जस्तो लाग्छ। सेता पर्खाल भएका गोदामहरू, बिरुवा रेखिएको नहरहरू, र ढुंगे पुलहरू यहाँका विशेषता हुन्। यो जापानको सबैभन्दा राम्रोसँग जगेडा गरिएको ऐतिहासिक क्षेत्रहरू मध्ये एक हो। धेरै पुराना भवनहरू अहिले सङ्ग्रहालय, क्याफे, र हस्तकला पसलका रूपमा प्रयोग भइरहेका छन्।

🎨 २. ओहारा कला सङ्ग्रहालय – जापानको पहिलो पश्चिमी कला सङ्ग्रहालय
यो सङ्ग्रहालय १९३० मा स्थापना गरिएको थियो र जापानमा पश्चिमी कृतिहरू प्रदर्शन गर्ने पहिलो सङ्ग्रहालय हो। यहाँ मोनेट, एल ग्रेको, माटिस लगायतका प्रसिद्ध कलाकारहरूको कृति राखिएको छ — त्यो पनि पारंपरिक जापानी परिवेशको बीचमा। यो साँस्कृतिक मिलनको एक अनौठो अनुभव हो।

🚣 ३. नहरको डुङ्गा यात्रा
कुराशिकीका रमणीय नहर डुङ्गाहरूले पुरानो व्यापारी शहरको शान्त र रमाइलो दृश्यात्मक यात्रा गराउँछन्। यो अनुभव पर्यटक र फोटोग्राफरहरूमा निकै लोकप्रिय छ।

🛍️ ४. हस्तनिर्मित सामानहरू र सडक खाना
स्थानिय हस्तकला, छेउकै कोजिमा (जापानको जिन्स राजधानी) बाट बनाइएका डेनिम उत्पादनहरू, र स्वादिष्ट कुरिमान्जु (खजूरको रोटी) जस्ता स्थानीय स्वादहरूले कुराशिकीलाई सुस्त तर रमाइलो किनमेल र सडक खानाको अन्वेषणको लागि उत्कृष्ट ठाउँ बनाउँछन्।

👖 ५. जापानी डेनिमको जन्मस्थल
कुराशिकी जापानी डेनिमको केन्द्र हो, जसको गुणस्तर र कला विश्वभर परिचित छ। कोजिमाको डेनिम स्ट्रिट फैशन प्रेमी र उच्च स्तरका हस्तनिर्मित जिन्सहरू मन पराउने सबैका लागि अवश्य भ्रमण गर्नुपर्ने ठाउँ हो।"
        data-jp="倉敷（Kurashiki）は、日本で最も美しい町の一つであり、江戸時代の風情と現代的な創造性が見事に融合しています。その美しさ、歴史、文化の深さで訪れる人々を魅了します。

🏘️ 1. 倉敷美観地区（くらしきびかんちく）
美観地区は、まるで昔の日本画の中を歩いているかのような雰囲気。白壁の蔵、柳が揺れる運河、石橋が並び、日本で最も保存状態の良い歴史的地区の一つです。多くの建物は、現在カフェや博物館、工芸店として生まれ変わっています。

🎨 2. 大原美術館 – 日本初の西洋美術館
1930年に創設された大原美術館は、日本で初めて西洋美術作品を展示した美術館です。モネ、エル・グレコ、マティスなどの名作を、日本の伝統的な街並みの中で鑑賞できます。まさに文化の融合を感じられる場所です。

🚣 3. 運河の舟遊び
倉敷の美しい運河をゆったりと進む舟遊びは、観光客や写真愛好家に人気の体験です。歴史ある商人の町を水上から楽しむことができます。

🛍️ 4. 手作り工芸品とストリートフード
地元の工芸品や、ジーンズの聖地・児島（こじま）で作られるデニム製品、栗まんじゅうのようなご当地スイーツなど、倉敷はのんびりと買い物や食べ歩きにぴったりの街です。

👖 5. 日本ジーンズ発祥の地
倉敷は、日本製デニムの中心地であり、その品質と職人技は世界中で高く評価されています。児島にある「ジーンズストリート」は、ファッション好きや本物志向の人にとって必見のスポットです。

">
        <b>Kurashiki</b> is one of Japan’s most picturesque towns, blending
        Edo-period charm with modern creativity. It's a place that captures
        attention with its beauty, history, and cultural depth.
        <b>🏘️ 1. Kurashiki</b> Bikan Historical Quarter The Bikan District is
        like walking into an old Japanese painting. With white-walled
        warehouses, willow-lined canals, and stone bridges, it’s one of
        Japan’s best-preserved historic areas. Many of the old buildings are
        now museums, cafés, and artisan shops. 🎨 <b>2. Ohara Museum </b>of
        Art – Japan’s First Western Art Museum Founded in 1930, this museum
        was the first in Japan to exhibit Western masterpieces. It features
        works by Monet, El Greco, Matisse, and more—right in the middle of
        traditional Japan. It's a unique cultural
        <crossover class="b"> 🚣 3. Canal Boat Rides </crossover>Kurashiki’s
        charming canal boats give you a peaceful, scenic ride through the old
        merchant town. It’s a popular experience for both tourists and
        photographers. <b>🛍️ 4. Handmade Goods</b> and Street Snacks Local
        crafts, denim products (from nearby Kojima, Japan’s jeans capital),
        and tasty treats like kurimanju (chestnut buns) make Kurashiki a great
        place for slow shopping and street food exploration.
        <b>👖 5. The Birthplace</b> of Japanese Denim Kurashiki is the center
        of Japanese denim, known worldwide for its quality and craftsmanship.
        Denim Street in Kojima is a must-visit for fashion lovers and anyone
        who appreciates high-end handmade jeans.
      </p>
    </div>
    <hr />
    <div class="section-container">
      <h2 class="heading">setouchi</h2>
      <img src="img/setouchi1.jpg" alt="" />
      <img src="img/setouchi2.jpeg" alt="" />
      <img src="img/setouchi3.jpg" alt="" />
      <p class="p translatable"
      data-en="  🇯🇵 <b>Okayama-Setouchi City </b> – Where Tradition Meets the Sea Setouchi
        City is a coastal city located in southeastern Okayama Prefecture,
        facing the calm waters of the Seto Inland Sea (Seto Naikai). Formed in
        2004 by merging the towns of Osafune, Oku, and Ushimado, Setouchi is a
        relatively new city but deeply rooted in Japan’s rich history and
        traditions. 🌊 <b>Geography & Climate</b> Setouchi lies in the Seto Inland
        Sea National Park, known for its scenic beauty, mild climate, and calm
        seas. With coastal landscapes, inland hills, and fertile plains, the
        city enjoys a Mediterranean-like environment — perfect for farming,
        fishing, and outdoor exploration.⚔️ <b>Cultural and Historical</b>
        Significance Setouchi is best known for: Bizen Osafune: Historically
        one of Japan’s most important centers for samurai sword-making
        (katana). The Bizen Osafune Japanese Sword Museum still preserves the
        ancient art of forging, and visitors can see real swordsmiths at work."
        data-ne="🇯🇵 <b>ओकायामा-सेतोची शहर </b> – जहाँ परम्पराले समुद्रलाई भेट्छ सेतोची
शहर दक्षिणपूर्वी ओकायामा प्रान्तमा अवस्थित तटीय शहर हो,
सेटो इनल्याण्ड सागर (सेतो नैकाई) को शान्त पानीको सामना गर्दै। ओसाफुने, ओकु र उशिमाडो शहरहरू मिलाएर
२००४ मा स्थापना भएको, सेतोची एक
अपेक्षाकृत नयाँ शहर हो तर जापानको समृद्ध इतिहास र
परम्पराहरूमा गहिरो जरा गाडेको छ। 🌊 <b>भूगोल र जलवायु</b> सेतोची सेतो इनल्याण्ड
समुद्री राष्ट्रिय निकुञ्जमा अवस्थित छ, जुन यसको प्राकृतिक सौन्दर्य, हल्का हावापानी र शान्त
समुद्रहरूको लागि परिचित छ। तटीय परिदृश्य, भित्री पहाडहरू र उर्वर मैदानहरूको साथ,
शहरले भूमध्यसागरीय वातावरणको आनन्द लिन्छ — खेती,
माछा मार्ने र बाहिरी अन्वेषणको लागि उत्तम।⚔️ <b>सांस्कृतिक र ऐतिहासिक</b>
महत्व सेतोची निम्नका लागि सबैभन्दा प्रसिद्ध छ: बिजेन ओसाफुने: ऐतिहासिक रूपमा
समुराई तरवार बनाउने जापानको सबैभन्दा महत्त्वपूर्ण केन्द्रहरू मध्ये एक
(कटाना)। बिजेन ओसाफुने जापानी तरवार संग्रहालयले अझै पनि
फोर्जिङको प्राचीन कलालाई संरक्षित गर्दछ, र आगन्तुकहरूले काममा वास्तविक तरवारकारहरू देख्न सक्छन्।"
        data-jp="🇯🇵 <b>岡山・瀬戸内市</b> – 伝統と海が出会う場所
瀬戸内市は、岡山県南東部に位置する沿岸都市で、穏やかな瀬戸内海（瀬戸内海）に面しています。2004年に長船町、邑久町、牛窓町が合併して誕生した瀬戸内市は、比較的新しい都市ですが、日本の豊かな歴史と伝統に深く根ざしています。🌊 <b>地理と気候</b> 瀬戸内は瀬戸内海国立公園に位置し、美しい景観、温暖な気候、穏やかな海で知られています。海岸沿いの景観、内陸の丘陵地帯、そして肥沃な平野を有するこの街は、地中海のような環境を享受しており、農業、漁業、そしてアウトドア活動に最適です。⚔️ <b>文化と歴史</b>
瀬戸内町の重要な特徴：備前長船：歴史的に、日本における刀剣製造の最も重要な中心地の一つ。備前長船刀剣博物館では、今もなお古来の鍛冶の技が受け継がれており、来場者は刀匠が実際に作業する様子を見学できます。">
        🇯🇵 <b>Okayama-Setouchi City </b> – Where Tradition Meets the Sea Setouchi
        City is a coastal city located in southeastern Okayama Prefecture,
        facing the calm waters of the Seto Inland Sea (Seto Naikai). Formed in
        2004 by merging the towns of Osafune, Oku, and Ushimado, Setouchi is a
        relatively new city but deeply rooted in Japan’s rich history and
        traditions. 🌊 <b>Geography & Climate</b> Setouchi lies in the Seto Inland
        Sea National Park, known for its scenic beauty, mild climate, and calm
        seas. With coastal landscapes, inland hills, and fertile plains, the
        city enjoys a Mediterranean-like environment — perfect for farming,
        fishing, and outdoor exploration.⚔️ <b>Cultural and Historical</b>
        Significance Setouchi is best known for: Bizen Osafune: Historically
        one of Japan’s most important centers for samurai sword-making
        (katana). The Bizen Osafune Japanese Sword Museum still preserves the
        ancient art of forging, and visitors can see real swordsmiths at work.
      </p>
    </div>
  </div>
  <footer>
    <div class="container footer-container">
      <div class="footer-col">
        <h3>About Okayama</h3>
        <p>
          Discover the beauty and culture of Okayama Prefecture, Japan's
          hidden gem in the Setouchi region.
        </p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a
            href="https://www.youtube.com/watch?v=zp6DCKsUWJg&ab_channel=%E7%80%AC%E6%88%B8%E5%86%85%E5%B8%82%E5%85%AC%E5%BC%8F%E3%83%81%E3%83%A3%E3%83%B3%E3%83%8D%E3%83%AB"><i
              class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Destinations</a></li>
          <li><a href="#">Travel Guide</a></li>
          <li><a href="#">Events</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Contact Us</h3>
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> Okayama City, Japan</li>
          <li><i class="fas fa-phone"></i> +81 86-000-0000</li>
          <li><i class="fas fa-envelope"></i> info@okayama-setouchi.jp</li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2023 JIBC Okayama All Rights Reserved.</p>
    </div>
  </footer>
  <!-- this is js  -->
  <script src="js/java.js"></script>
</body>

</html>