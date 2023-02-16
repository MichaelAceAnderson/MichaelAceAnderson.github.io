        <?php
        // Visit tracker

        function get_browser_name($user_agent)
        {
            // Make case insensitive.
            $t = strtolower($user_agent);

            // If the string *starts* with the string, strpos returns 0 (i.e., FALSE). Do a ghetto hack and start with a space.
            // "[strpos()] may return Boolean FALSE, but may also return a non-Boolean value which evaluates to FALSE."
            //     http://php.net/manual/en/function.strpos.php
            $t = " " . $t;

            // Humans / Regular Users      
            if (strpos($t, 'opera') || strpos($t, 'opr/')) return 'Opera';
            elseif (strpos($t, 'edge')) return 'Edge';
            elseif (strpos($t, 'chrome')) return 'Chrome/Edge Chromium';
            elseif (strpos($t, 'safari')) return 'Safari';
            elseif (strpos($t, 'firefox')) return 'Firefox';
            elseif (strpos($t, 'msie') || strpos($t, 'trident/7')) return 'Internet Explorer';

            // Search Engines  
            elseif (strpos($t, 'google')) return '[Bot] Googlebot';
            elseif (strpos($t, 'bing')) return '[Bot] Bingbot';
            elseif (strpos($t, 'slurp')) return '[Bot] Yahoo! Slurp';
            elseif (strpos($t, 'duckduckgo')) return '[Bot] DuckDuckBot';
            elseif (strpos($t, 'baidu')) return '[Bot] Baidu';
            elseif (strpos($t, 'yandex')) return '[Bot] Yandex';
            elseif (strpos($t, 'sogou')) return '[Bot] Sogou';
            elseif (strpos($t, 'exabot')) return '[Bot] Exabot';
            elseif (strpos($t, 'msn')) return '[Bot] MSN';

            // Common Tools and Bots
            elseif (strpos($t, 'mj12bot')) return '[Bot] Majestic';
            elseif (strpos($t, 'ahrefs')) return '[Bot] Ahrefs';
            elseif (strpos($t, 'semrush')) return '[Bot] SEMRush';
            elseif (strpos($t, 'rogerbot') || strpos($t, 'dotbot')) return '[Bot] Moz or OpenSiteExplorer';
            elseif (strpos($t, 'frog') || strpos($t, 'screaming')) return '[Bot] Screaming Frog';

            // Miscellaneous 
            elseif (strpos($t, 'facebook')) return '[Bot] Facebook';
            elseif (strpos($t, 'pinterest')) return '[Bot] Pinterest';

            // Check for strings commonly used in bot user agents   
            elseif (
                strpos($t, 'crawler') || strpos($t, 'api') ||
                strpos($t, 'spider') || strpos($t, 'http') ||
                strpos($t, 'bot') || strpos($t, 'archive') ||
                strpos($t, 'info') || strpos($t, 'data')
            ) return '[Bot] Other';

            return 'Other (Unknown)';
        }

        function getOS()
        {

            $os_platform  = "OS Inconnu";

            $os_array     = array(
                '/windows nt 10/i'      =>  'Windows 10',
                '/windows nt 6.3/i'     =>  'Windows 8.1',
                '/windows nt 6.2/i'     =>  'Windows 8',
                '/windows nt 6.1/i'     =>  'Windows 7',
                '/windows nt 6.0/i'     =>  'Windows Vista',
                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                '/windows nt 5.1/i'     =>  'Windows XP',
                '/windows xp/i'         =>  'Windows XP',
                '/windows nt 5.0/i'     =>  'Windows 2000',
                '/windows me/i'         =>  'Windows ME',
                '/win98/i'              =>  'Windows 98',
                '/win95/i'              =>  'Windows 95',
                '/win16/i'              =>  'Windows 3.11',
                '/macintosh|mac os x/i' =>  'Mac OS X',
                '/mac_powerpc/i'        =>  'Mac OS 9',
                '/linux/i'              =>  'Linux',
                '/ubuntu/i'             =>  'Ubuntu',
                '/iphone/i'             =>  'iPhone',
                '/ipod/i'               =>  'iPod',
                '/ipad/i'               =>  'iPad',
                '/android/i'            =>  'Android',
                '/blackberry/i'         =>  'BlackBerry',
                '/webos/i'              =>  'Mobile'
            );

            foreach ($os_array as $regex => $value)
                if (preg_match($regex, $_SERVER['HTTP_USER_AGENT']))
                    $os_platform = $value;

            return $os_platform;
        }

        $infos = date("[d/m/Y - H:i:s]") . " \n\tVisite de " . $_SERVER['REMOTE_ADDR']
            . "\n\tNavigateur: " . get_browser_name($_SERVER['HTTP_USER_AGENT'])
            . "\n\tOS: " . getOs()
            . "\n\tInformations client: "
            . $_SERVER['HTTP_USER_AGENT']
            . "\n\tPage: "
            . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
            . "\n\tMéthode: "
            . $_SERVER['REQUEST_METHOD']
            . "\n\tDétail Requête: "
            . $_SERVER['QUERY_STRING'] . "\n";

        if ($_SERVER['SCRIPT_NAME'] == "/common/includes/tracker.php") {
            $formatting = array(array("/\\n/", "/\\t/"), array("<br>", '&emsp;'));
            $formatted = preg_replace($formatting[0], $formatting[1], $infos);
            echo "<h2>" . $formatted . "</h2>";
        } else {
            $ownerAdress = array("::1", "localhost", "127.0.0.1", "88.126.85.77", "2a01:e0a:595:5370:ad5e:9066:a0ed:a56d");
            if (!in_array($_SERVER['REMOTE_ADDR'], $ownerAdress)) {
                file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/common/files/tracker.txt', $infos, FILE_APPEND);
            }
        }
        ?>