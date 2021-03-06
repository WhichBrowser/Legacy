<?php

namespace WhichBrowser\Data;

Bots::$BOTS = [
    [ 'name' => '80legs',                       'regexp' => '/(?:^|\s)008\/([0-9.]*)/u' ],
    [ 'name' => '360spider',                    'regexp' => '/360Spider/u' ],
    [ 'name' => '360spider',                    'regexp' => '/360spider-image/u' ],
    [ 'name' => 'Aboundex',                     'regexp' => '/Aboundex\/([0-9.]*)/u' ],
    [ 'name' => 'Ad Muncher',                   'regexp' => '/Ad Muncher v([0-9.]*)/u' ],
    [ 'name' => 'AddThis.com',                  'regexp' => '/AddThis.com robot/u' ],
    [ 'name' => 'ADmantX',                      'regexp' => '/ADmantX Platform Semantic Analyzer/u' ],
    [ 'name' => 'AhrefsBot',                    'regexp' => '/AhrefsBot.Feeds v([0-9.]*)/u' ],
    [ 'name' => 'AhrefsBot',                    'regexp' => '/AhrefsBot\/([0-9.]*)/u' ],
    [ 'name' => 'Alexa',                        'regexp' => '/ia_archiver/u' ],
    [ 'name' => 'Analytics SEO',                'regexp' => '/Curious George - www.analyticsseo.com\/crawler/u' ],
    [ 'name' => 'Amorank Spider',               'regexp' => '/AmorankSpider\/([0-9.]*)/u' ],
    [ 'name' => 'ArchiveBot',                   'regexp' => '/ArchiveTeam ArchiveBot/u' ],
    [ 'name' => 'Archive.org',                  'regexp' => '/archive.org_bot(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Archive.org',                  'regexp' => '/special_archiver(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Ask Jeeves',                   'regexp' => '/Ask Jeeves\/Teoma/u' ],
    [ 'name' => 'Backlink-Check',               'regexp' => '/Backlink-Ceck.de/u' ],
    [ 'name' => 'BacklinkCrawler',              'regexp' => '/BacklinkCrawler/u' ],
    [ 'name' => 'Baiduspider',                  'regexp' => '/Baiduspider[\+ ]\([\+ ]/u' ],
    [ 'name' => 'Baiduspider',                  'regexp' => '/Baiduspider\/([0-9.]*)/u' ],
    [ 'name' => 'Baiduspider',                  'regexp' => '/Baiduspider/u' ],
    [ 'name' => 'Baiduspider',                  'regexp' => '/\+http:\/\/www.baidu.com\/search\/spider.html/u' ],
    [ 'name' => 'BazQux',                       'regexp' => '/BazQux\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/bingbot\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/msnbot\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/msnbot-UDiscovery\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/msnbot-media\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/MsnBot-Media \/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/msnbot-NewsBlogs\/([0-9.]*)/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/MSNBOT_Mobile/u' ],
    [ 'name' => 'Bing',                         'regexp' => '/MSMOBOT/u' ],
    [ 'name' => 'Bing Preview',                 'regexp' => '/BingPreview\/([0-9.]*)/u' ],
    [ 'name' => 'Bloglines',                    'regexp' => '/Bloglines\/([0-9.]*)/u' ],
    [ 'name' => 'Bloglovin',                    'regexp' => '/Bloglovin\/([0-9.]*)/u' ],
    [ 'name' => 'Blogram',                      'regexp' => '/BlogramCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Blogtrottr',                   'regexp' => '/Blogtrottr\/([0-9.]*)/u' ],
    [ 'name' => 'Browsershots',                 'regexp' => '/Browsershots/u' ],
    [ 'name' => 'BUbiNG',                       'regexp' => '/BUbiNG/u' ],
    [ 'name' => 'Butterfly',                    'regexp' => '/Butterfly\/([0-9.]*)/u' ],
    [ 'name' => 'CiteSeerX',                    'regexp' => '/heritrix\/([0-9.]*)/u' ],
    [ 'name' => 'Cliqzbot',                     'regexp' => '/Cliqzbot\/([0-9.]*)/u' ],
    [ 'name' => 'CloudFare Always Online',      'regexp' => '/CloudFlare-AlwaysOnline\/([0-9.]*)/u' ],
    [ 'name' => 'CommaFeed',                    'regexp' => '/CommaFeed\/([0-9.]*)/u' ],
    [ 'name' => 'CommonCrawl',                  'regexp' => '/CCBot\/([0-9.]*)/u' ],
    [ 'name' => 'Data Hotel Watchdog',          'regexp' => '/Data-Hotel-Watchdog\/([0-9.]*)/u' ],
    [ 'name' => 'Daumoa',                       'regexp' => '/Daumoa ([0-9.]*)/u' ],
    [ 'name' => 'Domain Re-Animator',           'regexp' => '/Domain Re-Animator Bot/u' ],
    [ 'name' => 'Exabot Thumbnails',            'regexp' => '/Exabot-Thumbnails/u' ],
    [ 'name' => 'ExactSeek',                    'regexp' => '/ExactSeek Crawler/u' ],
    [ 'name' => 'Ezooms Crawler',               'regexp' => '/Ezooms\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'regexp' => '/facebookplatform\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'regexp' => '/facebookexternalhit\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'regexp' => '/facebookscraper\/([0-9.]*)/u' ],
    [ 'name' => 'Facebook',                     'regexp' => '/FacebookSecurity\/([0-9.]*)/u' ],
    [ 'name' => 'FAST Enterprise Crawler',      'regexp' => '/FAST Enterprise Crawler\/([0-9.]*)/u' ],
    [ 'name' => 'FAST Web Crawler',             'regexp' => '/FAST-WebCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Flamingo Search',              'regexp' => '/Flamingo_SearchEngine/u' ],
    [ 'name' => 'Fastladder',                   'regexp' => '/Fastladder FeedFetcher\/([0-9.]*)/u' ],
    [ 'name' => 'Feedbin',                      'regexp' => '/Feedbin/u' ],
    [ 'name' => 'FeedWrangler',                 'regexp' => '/Feed Wrangler\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                       'regexp' => '/FeedlyApp\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                       'regexp' => '/FeedlyBot\/([0-9.]*)/u' ],
    [ 'name' => 'Feedly',                       'regexp' => '/MetaFeedly\/([0-9.]*)/u' ],
    [ 'name' => 'Feedspot',                     'regexp' => '/Feedspot/u' ],
    [ 'name' => 'FeedValidator',                'regexp' => '/FeedValidator\/([0-9.]*)/u' ],
    [ 'name' => 'FeedZirra',                    'regexp' => '/feedzirra/u' ],
    [ 'name' => 'Fever',                        'regexp' => '/Fever\/([0-9.]*)/u' ],
    [ 'name' => 'Flamingo Search',              'regexp' => '/Flamingo_SearchEngine/u' ],
    [ 'name' => 'FTRF: Friendly Robot',         'regexp' => '/FTRF: Friendly robot\/([0-9.]*)/u' ],
    [ 'name' => 'Genieo Web Filter',            'regexp' => '/Genieo\/([0-9.]*)/u' ],
    [ 'name' => 'GNIP',                         'regexp' => '/UnwindFetchor\/([0-9.]*)/u' ],
    [ 'name' => 'Gocrawl',                      'regexp' => '/Googlebot \(gocrawl v([0-9.]*)\)/u' ],
    [ 'name' => 'GomezAgent',                   'regexp' => '/GomezAgent ([0-9.]+)/u' ],
    [ 'name' => 'Goo',                          'regexp' => '/ichiro\/mobile goo/u' ],
    [ 'name' => 'Goo Blog Search',              'regexp' => '/gooblogsearch\/([0-9.]*)/u' ],
    [ 'name' => 'Goo RSS Reader',               'regexp' => '/gooRSSreader([0-9.]*)/u' ],
    [ 'name' => 'Googlebot',                    'regexp' => '/Google[Bb]ot\/([0-9.]*)/u' ],
    [ 'name' => 'Googlebot Mobile',             'regexp' => '/Googlebot-Mobile\/([0-9.]*)/u' ],
    [ 'name' => 'Googlebot Image',              'regexp' => '/Googlebot-Image\/([0-9.]*)/u' ],
    [ 'name' => 'Googlebot Video',              'regexp' => '/Googlebot-Video\/([0-9.]*)/u' ],
    [ 'name' => 'Google Ads Bot',               'regexp' => '/AdsBot-Google/u' ],
    [ 'name' => 'Google App Engine',            'regexp' => '/AppEngine-Google/u' ],
    [ 'name' => 'Google Web Preview',           'regexp' => '/Google Web Preview/u' ],
    [ 'name' => 'Google Page Speed',            'regexp' => '/Google Page Speed Insights/u' ],
    [ 'name' => 'Google FeedBurner',            'regexp' => '/FeedBurner\/([0-9.]*)/u' ],
    [ 'name' => 'Google Feedfetcher',           'regexp' => '/Feedfetcher-Google/iu' ],
    [ 'name' => 'Google Font Analysis',         'regexp' => '/Google-FontAnalysis\/([0-9.]*)/u' ],
    [ 'name' => 'Google Sitemaps',              'regexp' => '/Google-Sitemaps\/([0-9.]*)/u' ],
    [ 'name' => 'Google Mediapartners',         'regexp' => '/Mediapartners-Google\/([0-9.]*)/u' ],
    [ 'name' => 'Google Mediapartners',         'regexp' => '/Mediapartners-Google/u' ],
    [ 'name' => 'Google News',                  'regexp' => '/Googlebot-News/u' ],
    [ 'name' => 'Google Wireless Transcoder',   'regexp' => '/Google Wireless Transcoder/u' ],
    [ 'name' => 'Google Play Newsstand',        'regexp' => '/GoogleProducer/u' ],
    [ 'name' => 'Grub',                         'regexp' => '/grub-client-([0-9.]*)/u' ],
    [ 'name' => 'Hatena Antenna',               'regexp' => '/Hatena Antenna\/([0-9.]*)/u' ],
    [ 'name' => 'Hatena Diary',                 'regexp' => '/Hatena Diary RSS Module/u' ],
    [ 'name' => 'Hatena Pagetitle',             'regexp' => '/Hatena Pagetitle Agent\/([0-9.]*)/u' ],
    [ 'name' => 'HeartRails Capture',           'regexp' => '/HeartRails_Capture\/([0-9.]*)/u' ],
    [ 'name' => 'HTTPMon',                      'regexp' => '/HTTPMon\/([0-9.]*)/u' ],
    [ 'name' => 'HubPages',                     'regexp' => '/HubPages V([0-9.]*)/u' ],
    [ 'name' => 'iAsk Spider',                  'regexp' => '/iaskspider\/([0-9.]*)/u' ],
    [ 'name' => 'Ichiro',                       'regexp' => '/ichiro\/([0-9.]*)/u' ],
    [ 'name' => 'JamesBOT',                     'regexp' => '/James BOT - WebCrawler/u' ],
    [ 'name' => 'Kouio',                        'regexp' => '/kouio.com/u' ],
    [ 'name' => 'Larbin',                       'regexp' => '/[Ll]arbin[\/_]([0-9.]*)/u' ],
    [ 'name' => 'Linkedin Bot',                 'regexp' => '/LinkedInBot\/([0-9.]*)/u' ],
    [ 'name' => 'Linkdex Bot',                  'regexp' => '/linkdexbot-mobile\/([0-9.]*)/u' ],
    [ 'name' => 'Linkdex Bot',                  'regexp' => '/linkdex.com\/v([0-9.]*)/u' ],
    [ 'name' => 'Livedoor',                     'regexp' => '/livedoor/u' ],
    [ 'name' => 'LTX71',                        'regexp' => '/ltx71/u' ],
    [ 'name' => 'Magpie RSS',                   'regexp' => '/MagpieRSS\/([0-9.]*)/u' ],
    [ 'name' => 'Mapian News Bot',              'regexp' => '/mapion-news-bot\/([0-9.]*)/u' ],
    [ 'name' => 'Mixi',                         'regexp' => '/mixi-check\/([0-9.]*)/u' ],
    [ 'name' => 'Monitor.us',                   'regexp' => '/monitor.us/u' ],
    [ 'name' => 'Naver Yeti',                   'regexp' => '/Yeti\/([0-9.]*)/u' ],
    [ 'name' => 'Netcraft Survey Bot',          'regexp' => '/Netcraft Web Server Survey/u' ],
    [ 'name' => 'Netvibes',                     'regexp' => '/Netvibes/u' ],
    [ 'name' => 'NewsBlur',                     'regexp' => '/NewsBlur Favicon Fetcher/u' ],
    [ 'name' => 'NewsBlur',                     'regexp' => '/NewsBlur Feed Fetcher/u' ],
    [ 'name' => 'NewsBlur',                     'regexp' => '/NewsBlur Feed Finder/u' ],
    [ 'name' => 'NewsBlur',                     'regexp' => '/NewsBlur Page Fetcher/u' ],
    [ 'name' => 'NewsGator',                    'regexp' => '/NewsGatorOnline\/([0-9.]*)/u' ],
    [ 'name' => 'OpenWebSpider',                'regexp' => '/OpenWebSpider v([0-9.]*)/u' ],
    [ 'name' => 'OrangeBot',                    'regexp' => '/OrangeBot-Collector\/([0-9.]*)/u' ],
    [ 'name' => 'OrangeBot',                    'regexp' => '/OrangeBot-Mobile/u' ],
    [ 'name' => 'Picsearch bot',                'regexp' => '/psbot-page/u' ],
    [ 'name' => 'Pingdom',                      'regexp' => '/Pingdom.com_bot_version_([0-9.]*)/u' ],
    [ 'name' => 'Pinterest',                    'regexp' => '/Pinterest\/([0-9.]*)/u' ],
    [ 'name' => 'PostRank',                     'regexp' => '/PostRank\/([0-9.]*)/u' ],
    [ 'name' => 'PowerMapper',                  'regexp' => '/CrawlerProcess \(http:\/\/www\.PowerMapper\.com\) \/([0-9.]*)/u' ],
    [ 'name' => 'Radian 6',                     'regexp' => '/R6_FeedFetcher/u' ],
    [ 'name' => 'Radian 6',                     'regexp' => '/R6_CommentReader/u' ],
    [ 'name' => 'RssBar',                       'regexp' => '/RssBar\/([0-9.]*)/u' ],
    [ 'name' => 'ROI Hunter',                   'regexp' => '/ROI Hunter/u' ],
    [ 'name' => 'QuerySeekerSpider',            'regexp' => '/QuerySeekerSpider(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Scrapy',                       'regexp' => '/Scrapy\/([0-9.]*)/u' ],
    [ 'name' => 'ScreenerBot',                  'regexp' => '/ScreenerBot Crawler Beta ([0-9.]*)/u' ],
    [ 'name' => 'Server Density',               'regexp' => '/Server Density Service Monitoring/u' ],
    [ 'name' => 'ShopWiki',                     'regexp' => '/ShopWiki\/([0-9.]*)/u' ],
    [ 'name' => 'SilverReader',                 'regexp' => '/SilverReader\/([0-9.]*)/u' ],
    [ 'name' => 'SimplePie',                    'regexp' => '/SimplePie\/([0-9.]*)/u' ],
    [ 'name' => 'Site24x7',                     'regexp' => '/Site24x7/u' ],
    [ 'name' => 'Sogou Web Spider',             'regexp' => '/sogou spider/u' ],
    [ 'name' => 'Sogou Web Spider',             'regexp' => '/Sogou pic spider\/([0-9.]*)/u' ],
    [ 'name' => 'Sogou Web Spider',             'regexp' => '/Sogou inst spider\/([0-9.]*)/u' ],
    [ 'name' => 'Sogou Web Spider',             'regexp' => '/Sogou web spider\/([0-9.]*)/u' ],
    [ 'name' => 'Soso Web Spider',              'regexp' => '/Sosospider\/([0-9.]*)/u' ],
    [ 'name' => 'Soso Web Spider',              'regexp' => '/Sosospider/u' ],
    [ 'name' => 'Spinn3r',                      'regexp' => '/Spinn3r ([0-9.]*)/iu' ],
    [ 'name' => 'StatusCake Error Detector',    'regexp' => '/StatusCake Error Detector/iu' ],
    [ 'name' => 'Summify',                      'regexp' => '/Summify\/([0-9.]*)/u' ],
    [ 'name' => 'TelegramBot',                  'regexp' => '/TelegramBot/u' ],
    [ 'name' => 'Twisted PageGetter',           'regexp' => '/Twisted PageGetter/u' ],
    [ 'name' => 'Twitterbot',                   'regexp' => '/Twitterbot\/([0-9.]*)/u' ],
    [ 'name' => 'Tiny Tiny RSS',                'regexp' => '/Tiny Tiny RSS\/([0-9.]*)/u' ],
    [ 'name' => 'Typhoeus',                     'regexp' => '/Typhoeus/u' ],
    [ 'name' => 'Voilabot',                     'regexp' => '/Voila[Bb]ot/u' ],
    [ 'name' => 'VocusBot',                     'regexp' => '/VocusBot ([0-9.]*)/u' ],
    [ 'name' => 'W3Bot',                        'regexp' => '/W3Bot ([0-9.]*)/u' ],
    [ 'name' => 'W3C CSS Validator',            'regexp' => '/Jigsaw\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Internationalization Checker',     'regexp' => '/W3C_I18n-Checker\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Line Mode',                'regexp' => '/W3CLineMode\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Link Checker',             'regexp' => '/W3C-checklink\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Markup Validator',         'regexp' => '/W3C_Validator\/([0-9.]*)/u' ],
    [ 'name' => 'W3C MobileOK Checker',         'regexp' => '/W3C-mobileOK\/DDC-([0-9.]*)/u' ],
    [ 'name' => 'W3C Multipage Validator',      'regexp' => '/W3C_Multipage_Validator\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Robot',                    'regexp' => '/W3CRobot\/([0-9.]*)/u' ],
    [ 'name' => 'W3C Unified Validator',        'regexp' => '/W3C_Unicorn\/([0-9.]*)/u' ],
    [ 'name' => 'WebbCrawler',                  'regexp' => '/WebbCrawler ([0-9.]*)/u' ],
    [ 'name' => 'WordPress',                    'regexp' => '/WordPress\/([0-9.]*)/u' ],
    [ 'name' => 'WWW Mechanize',                'regexp' => '/WWW-Mechanize\/([0-9.]*)/u' ],
    [ 'name' => 'XML Sitemaps Generator',       'regexp' => '/XML-Sitemaps\/([0-9.]*)/u' ],
    [ 'name' => 'YaCy Bot',                     'regexp' => '/yacy(?:\/|\s|bot)/u' ],
    [ 'name' => 'Yandex Anti Virus',            'regexp' => '/YandexAntivirus\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Blogs',                 'regexp' => '/YandexBlogs\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Bot',                   'regexp' => '/YandexBot\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Direct',                'regexp' => '/YandexDirect\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Favicons',              'regexp' => '/YandexFavicons\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Image Resizer',         'regexp' => '/YandexImageResizer\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Images',                'regexp' => '/YandexImages\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Metrika',               'regexp' => '/YandexMetrika\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex News',                  'regexp' => '/YandexNews\/([0-9.]*)/u' ],
    [ 'name' => 'Yandex Newslinks',             'regexp' => '/YandexNewslinks(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Yahoo! Ad Monitoring',         'regexp' => '/Yahoo Ad monitoring/u' ],
    [ 'name' => 'Yahoo! Blogs',                 'regexp' => '/Yahoo-Blogs\/v([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Feed Seeker',           'regexp' => '/YahooFeedSeeker\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Feed Seeker',           'regexp' => '/YahooFeedSeeker Testing\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Image',                 'regexp' => '/Yahoo-MMCrawler\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Video',                 'regexp' => '/Yahoo-MMAudVid\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Mindset',               'regexp' => '/Yahoo\! Mindset/u' ],
    [ 'name' => 'Yahoo! Product Search',        'regexp' => '/YahooSeeker\/ProductSearch([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Slurp',                 'regexp' => '/Yahoo\! Slurp\/([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Slurp',                 'regexp' => '/Yahoo\! Slurp/u' ],
    [ 'name' => 'Yahoo! Seeker',                'regexp' => '/YahooSeeker(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Yahoo! Seeker',                'regexp' => '/YahooSeeker-Testing\/v([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Seeker',                'regexp' => '/yahooseeker-jp-mobile/u' ],
    [ 'name' => 'Yahoo! Site Checker',          'regexp' => '/Y\!J SiteChecker/u' ],
    [ 'name' => 'Yahoo! Pipes',                 'regexp' => '/Yahoo Pipes ([0-9.]*)/u' ],
    [ 'name' => 'Yahoo! Video Search',          'regexp' => '/YahooVideoSearch/u' ],
    [ 'name' => 'Yahoo! Japan',                 'regexp' => '/Yahoo\! Japan/u' ],
    [ 'name' => 'Yahoo! Japan',                 'regexp' => '/(^|\(compatible; )Y\!J-/u' ],

    /* Generic bots */
    [ 'name' => 'Apache Httpd',                 'regexp' => '/Apache-HttpClient(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Apache Jakarta',               'regexp' => '/Jakarta Commons-HttpClient(?:\/([0-9.]*))?/u' ],
    [ 'name' => 'Apache Nutch',                 'regexp' => '/\/Nutch-([0-9.]*)/u' ],
    [ 'name' => 'Borland Delphi',               'regexp' => '/Indy Library/u' ],
    [ 'name' => 'Wget',                         'regexp' => '/Wget\/([0-9.]*)/u' ],
//  [ 'name' => 'Curl',                         'regexp' => '/curl\/([0-9.]*)/u' ],
    [ 'name' => 'Perl',                         'regexp' => '/LWP::Simple\//u' ],
    [ 'name' => 'Perl',                         'regexp' => '/libwww-perl\//u' ],
    [ 'name' => 'Perl',                         'regexp' => '/lwp-trivial\//u' ],
    [ 'name' => 'Python',                       'regexp' => '/Python-urllib\//u' ],
    [ 'name' => 'PHP',                          'regexp' => '/PHP\/([0-9.]*)/u' ],
    [ 'name' => 'PHP',                          'regexp' => '/^PHP/u' ],
    [ 'name' => 'PHP',                          'regexp' => '/PEAR HTTP_Request class/u' ],
    [ 'name' => 'PHP',                          'regexp' => '/CakePHP/u' ],
    [ 'name' => 'Ruby',                         'regexp' => '/^Ruby/u' ],
];
