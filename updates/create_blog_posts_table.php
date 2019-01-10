<?php namespace SureSoftware\PowerSEO\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use System\Classes\PluginManager;

class CreateBlogPostsTable extends Migration
{

    public function up()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                if (Schema::hasColumn('rainlab_blog_posts', 'seo_title')) {
                    $table->string('seo_title')->nullable();
                }
                if (Schema::hasColumn('rainlab_blog_posts', 'seo_description')) {
                    $table->string('seo_description')->nullable();
                }
                if (Schema::hasColumn('rainlab_blog_posts', 'seo_keywords')) {
                    $table->string('seo_keywords')->nullable();
                }
                if (Schema::hasColumn('rainlab_blog_posts', 'canonical_url')) {
                    $table->string('canonical_url')->nullable();
                }
                if (Schema::hasColumn('rainlab_blog_posts', 'redirect_url')) {
                    $table->string('redirect_url')->nullable();
                }
                if (Schema::hasColumn('rainlab_blog_posts', 'robot_index')) {
                    $table->string('robot_index')->nullable();
                }
                if (Schema::hasColumn('rainlab_blog_posts', 'robot_follow')) {
                    $table->string('robot_follow')->nullable();
                }
            });
        }
    }

    public function down()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->dropColumn('seo_title');
                $table->dropColumn('seo_description');
                $table->dropColumn('seo_keywords');
                $table->dropColumn('canonical_url');
                $table->dropColumn('redirect_url');
                $table->dropColumn('robot_index');
                $table->dropColumn('robot_follow');
            });
        }

    }

}
