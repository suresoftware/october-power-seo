<?php namespace SureSoftware\PowerSEO\Updates;

use Illuminate\Support\Facades\DB;
use Schema;
use October\Rain\Database\Updates\Migration;
use System\Classes\PluginManager;

class MigrateSettings extends Migration
{

    public function up()
    {
        // migrate the settings from the old plugin if it exists
        $settings = DB::table('system_settings')
            ->select('value')
            ->where('item', 'anandpatel_seoextension_settings')
            ->first();

        if ($settings) {
            DB::table('system_settings')->insert([
                'item' => 'suresoftware_powerseo_settings',
                'value' => $settings->value
            ]);
        }
    }

    public function down()
    {
        //do nothing, if rolling back there is no need to remove the settings here
    }
}
