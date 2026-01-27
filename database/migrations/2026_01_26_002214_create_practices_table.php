<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment("ID");
            $table->text("title")->comment("タイトル");
            $table->text("image_url")->comment("画像URL");
            $table->timestamp("created_at")->comment("登録日時");
            $table->timestamp("updated_at")->comment("更新日時");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practices');
    }
}
