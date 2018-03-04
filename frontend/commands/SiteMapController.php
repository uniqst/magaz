<?php

namespace frontend\commands;
use yii\console\Controller;
use frontend\models\Pages;
use frontend\models\Advertising;
use frontend\models\Contacts;
use frontend\models\Attendance;
use frontend\models\AttendanceValue;
use frontend\models\Category;
use frontend\models\CategoryValue;
use frontend\models\City;
use frontend\models\Comments;
use frontend\models\FiltersValue;
use frontend\models\ContactForm;
use frontend\models\Filters;
use frontend\models\PasswordResetRequestForm;
use frontend\models\Photo;
use frontend\models\Price;
use frontend\models\Profile;
use frontend\models\SocialWeb;
use frontend\models\Service;
use frontend\models\Stories;
use frontend\models\UploadForm;
use frontend\models\Verification;
use yii\helpers\Url;




class SiteMapController extends Controller
{
    public function actionIndex()
    {
        $begin = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemap.org/schemas/sitemap/0.9">';
        $end = '</urlset>';

        $string = '
                    <url><loc>: http://allescortsankara.com</loc><priority>0.9</priority></url>
                    <url><loc>: http://allescortsankara.com</loc><priority>0.9</priority></url>
                    <url><loc>: http://allescortsankara.com</loc><priority>0.9</priority></url>
                    <url><loc>: http://allescortsankara.com</loc><priority>0.9</priority></url>
                    ';

        $category = Category::find()->all();

        foreach($category as $cat)
        {
            $string = $string . '<url><loc>'.Url::to(['site/index', 'parent_id' ->id]).'</loc><priority>0.5</priority></url>';
        }

        $siteMap = $begin . $string . $end;

        $fp = fopen("/var/www/magaz/web/sitemap.xml", "w");

        fwrite($fp, $siteMap);

        fclose($fp);
    }
}

?>