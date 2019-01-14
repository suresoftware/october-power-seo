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
                if (!Schema::hasColumn('rainlab_blog_posts', 'seo_title')) {
                    $table->string('powerseo_title')->nullable();
                }
                if (!Schema::hasColumn('rainlab_blog_posts', 'seo_description')) {
                    $table->string('powerseo_description')->nullable();
                }
                if (!Schema::hasColumn('rainlab_blog_posts', 'seo_keywords')) {
                    $table->string('powerseo_keywords')->nullable();
                }
                if (!Schema::hasColumn('rainlab_blog_posts', 'canonical_url')) {
                    $table->string('powerseo_canonical_url')->nullable();
                }
                if (!Schema::hasColumn('rainlab_blog_posts', 'redirect_url')) {
                    $table->string('powerseo_redirect_url')->nullable();
                }
                if (!Schema::hasColumn('rainlab_blog_posts', 'robot_index')) {
                    $table->string('powerseo_robot_index')->nullable();
                }
                if (!Schema::hasColumn('rainlab_blog_posts', 'robot_follow')) {
                    $table->string('powerseo_robot_follow')->nullable();
                }
            });
        }
    }

    public function down()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->dropColumn('powerseo_title');
                $table->dropColumn('powerseo_description');
                $table->dropColumn('powerseo_keywords');
                $table->dropColumn('powerseo_canonical_url');
                $table->dropColumn('powerseo_redirect_url');
                $table->dropColumn('powerseo_robot_index');
                $table->dropColumn('powerseo_robot_follow');
            });
        }

    }

}
