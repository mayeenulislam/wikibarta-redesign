<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>উইকিবার্তা</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="bg-white shadow" id="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="sr-only">উইকিবার্তা</h1>
                    <img src="assets/images/wikibarta-logo-blue.png" alt="Logo of WikiBarta" width="187" height="72">
                </div>
                <div class="col-sm-6 text-right">
                    নীড়পাতা&nbsp;&nbsp;আমাদের সম্পর্কে&nbsp;&nbsp;উইকিবার্তা সংগ্রহ
                </div>
            </div>
        </div>
    </header>
    <!-- /#site-header -->

    <div class="position-relative">
        <div id="edition-badge" class="heading-font font-weight-bold">
            জুন ২০২১ সংখ্যা
        </div>
    </div>
    <!-- /.position-relative -->

    <div id="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <a href="#" rel="bookmark">
                        <figure>
                            <img src="assets/images/Wikibarta-Issue9-Cover-designed-by-Mayeenul-Islam-200x268.png" alt="Cover of WikiBarta Current Issue" class="w-100" width="313" height="420" />
                        </figure>
                    </a>
                </div>
                <div class="col-sm-8 col-md-6">
                    <a href="#" rel="bookmark" class="text-white news-title-link">
                        <article id="article-ID-HERE" class="mb-3">
                            <figure class="cover-story overflow-hidden position-relative">
                                <img src="assets/images/Slider-image.png" alt="Cover Story" class="w-100 match-height-hero" width="644" height="420" />
                                <figcaption class="cover-story-text p-3">
                                    <div class="category-title text-white">
                                        প্রচ্ছদ প্রতিবেদন
                                    </div>
                                    <h2 class="news-title--large heading-font mt-1 mb-0">
                                        মিয়ানমারে অবরুদ্ধ উইকিপিডিয়া, স্থগিত ইন্টারনেট পরিষেবা
                                    </h2>
                                </figcaption>
                            </figure>
                        </article>
                    </a>
                </div>
                <div class="col-sm-4 col-md-3">
                    <a href="#" rel="bookmark" class="text-white d-block news-title-link">
                        <article class="card bg-dark text-white match-height-hero">
                            <figure class="overflow-hidden image--hover">
                                <img src="assets/images/editorial.png" alt="Image of Editorial" class="w-100" width="314" height="209" />
                            </figure>
                            <div class="p-3">
                                <div class="category-title text-white">
                                    সম্পাদকীয়
                                </div>
                                <h2 class="news-title--large heading-font mt-1 mb-0">
                                    উইকিপিডিয়ার খেলাঘরে চড়ুইভাতি
                                </h2>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#hero -->

    <div id="categories" class="hidden-xs">
        <div class="container text-center">
            <?php
            /**
             * Categories.
             * Replace with the dynamic query.
             */
            $categories = array(
                'আন্তর্জাতিক সংবাদ',
                'ঘোষণা',
                'জাতীয় সংবাদ',
                'প্রবন্ধ',
                'সাক্ষাৎকার',
            );
            ?>
            <?php foreach ($categories as $category) : ?>
                <a href="#" class="category-badge bg-dark text-white">
                    <?php echo $category; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /#categories -->

    <div class="container-fluid py-3">
        <?php
        /**
         * News.
         * Replace with the dynamic query.
         */
        $news = array(
            array(
                'ID'       => 1,
                'category' => 'ঘোষণা',
                'title'    => 'নতুন রূপে বাংলা উইকিপিডিয়া',
                'image'    =>  'https://picsum.photos/id/100/314/196',
            ),
            array(
                'ID'       => 2,
                'category' => 'টুকরো খবর',
                'title'    => 'চালু হলো গ্রোথ দলের বিশেষ পরিষেবা',
                'image'    =>  'https://picsum.photos/id/1001/314/196',
            ),
            array(
                'ID'       => 3,
                'category' => 'সাক্ষাৎকার',
                'title'    => 'তিনটি প্রধান কারণে আমি উইকিপিডিয়ায় অবদান রাখি - হাসনাত আব্দুল্লাহ',
                'image'    =>  'https://picsum.photos/id/1002/314/196',
            ),
            array(
                'ID'       => 4,
                'category' => 'জাতীয় সংবাদ',
                'title'    => 'আয়োজিত হলো উইকি ফর ক্লাইমেট: কর্মশালা ও এডিটাথন',
                'image'    =>  'https://picsum.photos/id/1006/314/196',
            ),
            array(
                'ID'       => 5,
                'category' => 'প্রবন্ধ',
                'title'    => 'উইকিপিডিয়া শিক্ষা কার্যক্রমে নেত্রকোণা জেলার অভিজ্ঞতা',
                'image'    =>  'https://picsum.photos/id/1015/314/196',
            ),
            array(
                'ID'       => 6,
                'category' => 'প্রবন্ধ',
                'title'    => 'উইকিপিডিয়া উইকিমিট ভারত ২০২১',
                'image'    =>  'https://picsum.photos/id/1018/314/196',
            ),
            array(
                'ID'       => 7,
                'category' => 'জাতীয় সংবাদ',
                'title'    => 'শেষ হলো অমর একুশে নিবন্ধ প্রতিযোগিতা ২০২১',
                'image'    =>  'https://picsum.photos/id/1019/314/196',
            ),
            array(
                'ID'       => 8,
                'category' => 'আন্তর্জাতিক সংবাদ',
                'title'    => 'অনুষ্ঠিত হলো উইকিমিডিয়া ফাউন্ডেশনের &lsquo;উইকিলার্ন&rsquo;',
                'image'    => 'https://picsum.photos/id/102/314/196',
            ),
            array(
                'ID'       => 9,
                'category' => 'প্রবন্ধ',
                'title'    => 'উইকিপিডিয়ায় পেশাবিদ পদার্থবিদগণকে সম্পৃক্তকরণ',
                'image'    => 'https://picsum.photos/id/1024/314/196',
            ),
            array(
                'ID'       => 10,
                'category' => 'জাতীয় সংবাদ',
                'title'    => 'বুয়েটে অনুষ্ঠিত হলো উইকি এডুকেশন প্রোগ্রাম',
                'image'    => 'https://picsum.photos/id/1022/314/196',
            ),
            array(
                'ID'       => 11,
                'category' => 'আন্তর্জাতিক সংবাদ',
                'title'    => 'শুরু হচ্ছে উইকিম্যানিয়া ২০২১',
                'image'    => 'https://picsum.photos/id/1023/314/196',
            ),
            array(
                'ID'       => 12,
                'category' => 'আন্তর্জাতিক সংবাদ',
                'title'    => 'উইকিমিডিয়া ফাউন্ডেশনের বোর্ড অব ট্রাস্টিজের গঠনতন্ত্রে আসছে পরিবর্তন',
                'image'    => 'https://picsum.photos/id/1032/314/196',
            ),
        );
        ?>
        <div class="row">
            <?php $count = 1; ?>
            <?php foreach ($news as $article) : ?>
                <div class="col-sm-6 col-md-3">
                    <a href="#" rel="bookmark" class="d-block text-dark news-title-link">
                        <article id="article-<?php echo $article['ID']; ?>" class="card card--hover bg-white text-dark shadow mb-5 match-height-news">
                            <figure class="news-image">
                                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="w-100" width="314" height="196" />
                            </figure>
                            <div class="news-card-title-box bg-white position-relative">
                                <div class="p-3">
                                    <div class="category-title text-wb-red">
                                        <?php echo $article['category']; ?>
                                    </div>
                                    <header>
                                        <h2 class="news-title heading-font mt-1 mb-0">
                                            <?php echo $article['title']; ?>
                                        </h2>
                                    </header>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
                <!-- /.col-sm-6 col-md-3 -->

                <?php if (8 === $count) : ?>
                    <div class="col-sm-12">
                        <section id="section-interim" class="mb-5 text-white position-relative">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 text-sm-right hidden-xs">
                                        <figure id="write-wikibarta-image" class="overflow-hidden d-inline-block">
                                            <img src="assets/images/write-for-WikiBarta.png" alt="Write for WikiBarta" width="213" height="213">
                                        </figure>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3 class="news-title--large heading-font font-weight-bold mt-0 mb-0">উইকিবার্তায় লিখুন...</h3>
                                        <p class="write-wikibarta-text">আপনি যদি উইকিপিডিয়া সম্পাদনার সাথে পরিচিত? কিংবা উইকিমিডিয়া ফাউন্ডেশনের কোনো প্রকল্পে সক্রীয়? তাহলে আপনিও লিখতে পারেন উইকিবার্তায়। উইকিবার্তা, উইকিমিডিয়া বাংলাদেশের একটি পাক্ষিক অনলাইন পত্রিকা - যা মূলত উইকিমিডিয়া ফাউন্ডেশনের প্রকল্পসমূহ সংশ্লিষ্ট সংবাদ পরিবেশন করে।</p>
                                        <a href="#" class="button-outline-blue">
                                            বিস্তারিত
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                <?php endif; ?>
                <?php $count++; ?>
            <?php endforeach; ?>
        </div>
        <!-- /.row -->

        <section>
            <h3 class="inline-header inline-header-center inline-header-mini news-title--large heading-font font-weight-bold text-center">
                উইকিবার্তা সংগ্রহ
            </h3>
            <?php
            /**
             * Archives.
             * Replace with the dynamic query
             * 
             * - excluding current one.
             * - maximum of 6 only.
             * - in random order.
             */
            $max_count = 6; // default: 6 for desktop, 4 for mobile.
            $archives = array(
                array(
                    'ID'    => 1,
                    'issue' => 'জানুয়ারি ২০২১',
                    'cover' => 'assets/images/Wikibarta-Issue8-Cover-designed-by-Mayeenul-Islam-200x268.png',
                ),
                array(
                    'ID'    => 2,
                    'issue' => 'এপ্রিল ২০২০',
                    'cover' => 'assets/images/Wikibarta-Issue7-Cover-by-Mayeenul-Islam-200x268.png',
                ),
                array(
                    'ID'    => 3,
                    'issue' => 'অক্টোবর ২০১৯',
                    'cover' => 'assets/images/Wikibarta-Issue6-Cover-by-Mayeenul-Islam-200x268.png',
                ),
                array(
                    'ID'    => 4,
                    'issue' => 'জুলাই ২০১৯',
                    'cover' => 'assets/images/WikiBarta-Issue-5-Cover-by-Mayeenul-Islam-200x268.png',
                ),
                array(
                    'ID'    => 5,
                    'issue' => 'মার্চ ২০১৯',
                    'cover' => 'assets/images/Issue4-Cover-200x268.png',
                ),
                array(
                    'ID'    => 6,
                    'issue' => 'ডিসেম্বর ২০১৮',
                    'cover' => 'assets/images/Issue3-Cover-200x268.png',
                ),
            );
            ?>
            <div class="row">
                <?php $archive_counter = 1; ?>
                <?php foreach ($archives as $archive) : ?>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <a href="<?php echo $max_count === $archive_counter ? '/path/to/archive' : '#'; ?>" class="d-block shadow card--hover mb-5">
                            <figure id="archive-cover-<?php echo $archive['ID']; ?>" class="archive-cover text-center position-relative">
                                <img src="<?php echo $archive['cover']; ?>" class="w-100" alt="<?php echo $archive['issue']; ?>" width="200" height="268">
                                <?php if ($max_count === $archive_counter) : ?>
                                    <div class="archive-cover-bg heading-font font-weight-bold">
                                        সকল<br>উইকিবার্তা&hellip;
                                    </div>
                                <?php endif; ?>
                            </figure>
                        </a>
                    </div>
                    <?php $archive_counter++; ?>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <footer id="site-footer" class="text-center">
        FOOTER
    </footer>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.matchHeight-min.js"></script>
    <script>
        jQuery(function($) {
            $('.match-height-hero').matchHeight();
            $('.match-height-news').matchHeight();
        });
    </script>
</body>

</html>