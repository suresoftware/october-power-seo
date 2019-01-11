<?php namespace SureSoftware\PowerSEO\Updates;

use Illuminate\Support\Facades\DB;
use Schema;
use October\Rain\Database\Updates\Migration;
use System\Classes\PluginManager;

class MigrateBlogpostSeo extends Migration
{

    public function up()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog') &&
            PluginManager::instance()->hasPlugin('AnandPatel.SeoExtension')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->renameColumn('seo_title', 'powerseo_title');
                $table->renameColumn('seo_description', 'powerseo_description');
                $table->renameColumn('seo_keywords', 'powerseo_keywords');
                $table->renameColumn('canonical_url', 'powerseo_canonical_url');
                $table->renameColumn('redirect_url', 'powerseo_redirect_url');
                $table->renameColumn('robot_index', 'powerseo_robot_index');
                $table->renameColumn('robot_follow', 'powerseo_robot_follow');
            });

            //add in old columns to prevent anandpatel.seoextension having a seizure on uninstall
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->string('seo_title')->nullable();
                $table->string('seo_description')->nullable();
                $table->string('seo_keywords')->nullable();
                $table->string('canonical_url')->nullable();
                $table->string('redirect_url')->nullable();
                $table->string('robot_index')->nullable();
                $table->string('robot_follow')->nullable();
            });
        }
    }

    public function down()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog') &&
            PluginManager::instance()->hasPlugin('AnandPatel.SeoExtension')) {

            Schema::table('rainlab_blog_posts', function ($table) {
                $table->renameColumn('powerseo_seo_title', 'seo_title');
                $table->renameColumn('powerseo_seo_description', 'seo_description');
                $table->renameColumn('powerseo_seo_keywords', 'seo_keywords');
                $table->renameColumn('powerseo_canonical_url', 'canonical_url');
                $table->renameColumn('powerseo_redirect_url', 'redirect_url');
                $table->renameColumn('powerseo_robot_index', 'robot_index');
                $table->renameColumn('powerseo_robot_follow', 'robot_follow');
            });
        }
    }
}
