<?php namespace SureSoftware\PowerSEO\Updates;

use Illuminate\Support\Facades\DB;
use Schema;
use October\Rain\Database\Updates\Migration;
use System\Classes\PluginManager;

class MigrateSettings extends Migration
{

    public function up()
    {

        if (PluginManager::instance()->hasPlugin('RainLab.Blog') &&
            PluginManager::instance()->hasPlugin('anandpatel.seoextension')) {

            $blogs = \RainLab\Blog\Models\Post::get();

            foreach($blogs as $blog){
                $blog->powerseo_title = $blog->seo_title;
                $blog->powerseo_description = $blog->seo_description;
                $blog->powerseo_keywords = $blog->seo_keywords;
                $blog->powerseo_canonical_url = $blog->canonical_url;
                $blog->powerseo_redirect_url = $blog->redirect_url;
                $blog->powerseo_robot_index = $blog->robot_index;
                $blog->powerseo_robot_follow = $blog->robot_follow;
                $blog->save();
            }
        }
    }

    public function down()
    {
        //do nothing, if rolling back there is no need to remove the settings here
    }
}
